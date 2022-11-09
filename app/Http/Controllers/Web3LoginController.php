<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WalletUser;
use Elliptic\EC;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use kornrunner\Keccak;

use Illuminate\Support\Facades\Hash;


class Web3LoginController
{
    public function message(): string
    {
        $nonce = Str::random();
        $message = "Sign this message to confirm you own this wallet address. This action will not cost any gas fees.\n\nNonce: " . $nonce;

        session()->put('sign_message', $message);

        return $message;
    }
    //ADD SECURITY
    public function verify(Request $request): string
    {

       $result = $this->verifySignature(session()->pull('sign_message'), $request->input('signature'), $request->input('address'));
        // If $result is true, perform additional logic like logging the user in, or by creating an account if one doesn't exist based on the Ethereum address
        if($result){

            $user = User::firstOrCreate(
                ['wallet' => $request->input('address')],

                [
                    'name' => $request->input('address'),
                    'balance' => 0,

                ]
            );

            if($user){
                Auth::login($user);
                return true;
            }
        }

        return false;
    }

    public  function add_wallet (Request $request){
        $result = $this->verifySignature(session()->pull('sign_message'), $request->input('signature'), $request->input('address'));

        if($result){

          return  WalletUser::firstOrCreate(
                ['wallet' => $request->input('address')],

                [
                    'user_id' => auth()->user()->id,
                    'wallet' => $request->input('address'),
                ]
            );
        }
    }

    protected function verifySignature(string $message, string $signature, string $address): bool
    {
        $hash = Keccak::hash(sprintf("\x19Ethereum Signed Message:\n%s%s", strlen($message), $message), 256);
        $sign = [
            'r' => substr($signature, 2, 64),
            's' => substr($signature, 66, 64),
        ];
        $recid = ord(hex2bin(substr($signature, 130, 2))) - 27;

        if ($recid != ($recid & 1)) {
            return false;
        }

        $pubkey = (new EC('secp256k1'))->recoverPubKey($hash, $sign, $recid);
        $derived_address = '0x' . substr(Keccak::hash(substr(hex2bin($pubkey->encode('hex')), 1), 256), 24);

        return (Str::lower($address) === $derived_address);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }
}
