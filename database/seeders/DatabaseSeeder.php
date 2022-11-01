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
        $user = User::factory(10)->create([
            'wallet_id' => function(){
                return Wallet::factory()->create()->id;
            },
        ])->filter(function ($item){
            $chain = Chain::factory()->create();
            Wallet::factory(3)->create([
                'user_id' => $item->id,
                'chain_id' => $chain->id,
            ]);
            $plan = Plan::factory()->create();
            $category = Category::factory()->create();
            $domain = Domain::factory()->create();
            Shop::factory(5)->create([
                'user_id' => $item->id,
                'plan_id' => $plan->id,
                'category_id' => $category->id,
                'domain_id' => $domain->id
            ])->filter(function ($shop){
                Item::factory(5)->create([
                    'shop_id' => $shop->id
                ]);
            });
        });
    }
}

