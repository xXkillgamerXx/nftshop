<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Chain;
use App\Models\Domain;
use App\Models\Follow;
use App\Models\Item;
use App\Models\Plan;
use App\Models\Shop;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Category::factory()->create(['name' => 'Art']);
        Category::factory()->create(['name' => 'Sports']);
        Category::factory()->create(['name' => 'Utility']);

        $user = User::factory(1)->create([
            'name' => '0x82FEf06e6Cc8Da10916AC70F5842e52F3765c761',
            'wallet' => '0x82FEf06e6Cc8Da10916AC70F5842e52F3765c761',
            'balance' => 0,
            'wallet_id' => function(){
                return Wallet::factory()->create()->id;
            },
        ]);




        /*$user = User::factory(1)->create([
            'name' => '0x82FEf06e6Cc8Da10916AC70F5842e52F3765c761',
            'wallet' => '0x82FEf06e6Cc8Da10916AC70F5842e52F3765c761',
            'balance' => 0,
            'wallet_id' => function(){
                return Wallet::factory()->create()->id;
            },
        ])->filter(function ($item){
            $chain = Chain::factory()->create();
            Wallet::factory(10)->create([
                'user_id' => $item->id,
                'chain_id' => $chain->id,
            ]);
            $plan = Plan::factory()->create();
            $domain = Domain::factory()->create();
            Shop::factory(10)->create([
                'user_id' => $item->id,
                'plan_id' => $plan->id,
                'category_id' => 1,
                'domain_id' => $domain->id
            ])->filter(function ($shop){
                Item::factory(3)->create([
                    'shop_id' => $shop->id
                ]);
            });
        });*/
    }
}

