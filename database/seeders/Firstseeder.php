<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Stock;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\UserRole;
use App\Models\Role;
use App\Models\Discount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class Firstseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "mujahid",
            "email" => "mujahid@gmail.com",
            "username" => "mujahid",
            "password" => Hash::make("mujahid")
        ]);

        User::create([
            "name" => "sholahudin",
            "email" => "sholahudin@gmail.com",
            "username" => "sholahudin",
            "password" => Hash::make("sholahudin")
        ]);

        User::create([
            "name" => "robbani",
            "email" => "robbani@gmail.com",
            "username" => "robbani",
            "password" => Hash::make("robbani")
        ]);

        Role::create(["name" => "customer"]);
        Role::create(["name" => "cashier"]);
        Role::create(["name" => "manager"]);

        
        UserRole::create(["user_id" => "1", "role_id" => "3"]);
        UserRole::create(["user_id" => "2", "role_id" => "2"]);
        UserRole::create(["user_id" => "3", "role_id" => "1"]);

        Category::create([
            "name" => "Snacks"
        ]);

        Category::create([
            "name" => "Foods & Goods"
        ]);

        Category::create([
            "name" => "Drinks"
        ]);

        Category::create([
            "name" => "Drinks"
        ]);

        Category::create([
            "name" => "Beauties"
        ]);

        Category::create([
            "name" => "Medicine"
        ]);

        Product::create([
            "name" => "Chitato",
            "price" => "11500",
            "thumbnail" => "citato.jpg",
            "desc" => "enak tau",
            "category_id" => 1
        ]);

        Product::create([
            "name" => "indomie goreng",
            "price" => "3500",
            "thumbnail" => "indomie.jpg",
            "desc" => "lejat bergiji",
            "category_id" => 2
        ]);       
        
        Product::create([
            "name" => "pocari sweat",
            "price" => "7000",
            "thumbnail" => "pocari.jpg",
            "desc" => "segar",
            "category_id" => 3
        ]);     
        
        Product::create([
            "name" => "Scarlett Whitening",
            "price" => "52000",
            "thumbnail" => "scarlett.jpg",
            "desc" => "Putih berkilau",
            "category_id" => 4
        ]);
        
        Product::create([
            "name" => "Bodrex",
            "price" => "5000",
            "thumbnail" => "bordrex.jpg",
            "desc" => "Obat sakit kepala",
            "category_id" => 5
        ]);

        Stock::create([
            "product_id" => 1,
            "quantity" => "50",
            "expire_date" => "2023-05-01"
        ]);

        Stock::create([
            "product_id" => 2,
            "quantity" => "50",
            "expire_date" => "2023-05-01"
        ]);

        Stock::create([
            "product_id" => 3,
            "quantity" => "50",
            "expire_date" => "2023-05-01"
        ]);

        Stock::create([
            "product_id" => 4,
            "quantity" => "50",
            "expire_date" => "2023-05-01"
        ]);

        Stock::create([
            "product_id" => 5,
            "quantity" => "50",
            "expire_date" => "2023-05-01"
        ]);

        Transaction::create([
            "product_id" => 1,
            "user_id" => "2",
            "quantity" => "3",
            "status" => "unpaid",
            "invoice_code" => "INV_32301"
        ]);

        Transaction::create([
            "product_id" => 2,
            "user_id" => 2,
            "quantity" => "5",
            "status" => "unpaid",
            "invoice_code" => "INV_32301"
        ]);

        Transaction::create([
            "product_id" => 3,
            "user_id" => 2,
            "quantity" => "1",
            "status" => "unpaid",
            "invoice_code" => "INV_32301"
        ]);

        Transaction::create([
            "product_id" => 4,
            "user_id" => 2,
            "quantity" => "1",
            "status" => "unpaid",
            "invoice_code" => "INV_32301"
        ]);

        Transaction::create([
            "product_id" => 5,
            "user_id" => 2,
            "quantity" => "3",
            "status" => "unpaid",
            "invoice_code" => "INV_32301"
        ]);

        Discount::create([
            "product_id" => 4,
            "percentage" => "10",
            "start_date" => "2022-08-01",
            "end_date" => "2022-08-30"
        ]);

        Discount::create([
            "product_id" => 3,
            "percentage" => "5",
            "start_date" => "2022-08-01",
            "end_date" => "2022-08-15"
        ]);
    } 
}
