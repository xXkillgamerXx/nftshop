<!DOCTYPE html>
<html lang="en" data-color="light">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tokenmart - Largest online marketplace</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="images/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- gulp:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">

    <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"></script>
    <script>
        let network = 'mainnet';
        let sign_message = '{{route('web3.login.message')}}';
        let verify = '{{route('web3.login.verify')}}';
        let token = '{{ csrf_token() }}';
        //let logout_route = '{{ route('logout')}}';
        let domain = '{{preg_replace("(^https?://)", "", URL::current())}}'

        if(network == 'mainnet'){
            var chainIdDefault = '0x1';
        }else{
            var chainIdDefault = '0x5';
        }
    </script>
</head>
<body class="bg-white">
<div class="cursor-direction bg-indigo-100"></div>

@include('layouts.header')

@yield('content')

@include('layouts.footer')

<script src="{{ asset('assets/js/build.min.js') }}"></script>
<!-- endgulp -->

<script >

    /*login*/
    async function web3Login() {
        if (!window.ethereum) {
            if (typeof screen.orientation !== 'undefined') {
                alert('Please install MetaMasks!');
                window.open('https://metamask.io/download')
            }else{
                window.location = "https://metamask.app.link/dapp/" + domain;
            }
            return;
        }

        const provider = new ethers.providers.Web3Provider(window.ethereum, 'any');

        let response = await fetch(sign_message);
        const message = await response.text();

        await provider.send("eth_requestAccounts", []);

        const switch_chain = await ethereum.request({
            method: 'wallet_switchEthereumChain',
            params: [{ chainId: chainIdDefault }],
        });

        const signer = await provider.getSigner();
        const address = await signer.getAddress();
        const signature = await provider.getSigner().signMessage(message);

        response = await fetch(verify, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                'address': address,
                'signature': signature,
                '_token': token
            })
        });

        const data = await response.text();
        console.log(data);
        if(data){
            window.location.reload();
        }else{
            window.location.reload();
        }
    }

    async function logout(){  /*ADD WALLET LOGOUT*/
        const logout_response =  await fetch(logout_route, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                '_token': token
            })
        }).then(() => {
            window.location.reload();
        });
    }
</script>


</body>
</html>
