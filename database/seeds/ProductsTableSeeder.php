<?php

use App\Models\Product; 
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
   
    public function run()
    {
        Product::query()->truncate();
        Product::create([
            'name' => 'Cake 1',
            'slug' => 'cake-1',
            'details' => 'Yummy Delicious',
            'price' => 280,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',
        ]);
        Product::create([
            'name' => 'Cake 2',
            'slug' => 'cake-2',
            'details' => 'Yummy Delicious',
            'price' => 380,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);
        Product::create([
            'name' => 'Cake 3',
            'slug' => 'cake-3',
            'details' => 'Yummy Delicious',
            'price' => 480,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);
        Product::create([
            'name' => 'Cake 4',
            'slug' => 'cake-4',
            'details' => 'Yummy Delicious',
            'price' => 580,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);
        Product::create([
            'name' => 'Cake 5',
            'slug' => 'cake-5',
            'details' => 'Yummy Delicious',
            'price' => 680,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);Product::create([
            'name' => 'Cake 6',
            'slug' => 'cake-6',
            'details' => 'Yummy Delicious',
            'price' => 280,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);

        Product::create([
            'name' => 'Cake 7',
            'slug' => 'cake-7',
            'details' => 'Yummy Delicious',
            'price' => 280,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);
        Product::create([
            'name' => 'Cake 8',
            'slug' => 'cake-8',
            'details' => 'Yummy Delicious',
            'price' => 280,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);
       
    
        Product::create([
            'name' => 'Cake 9',
            'slug' => 'cake-9',
            'details' => 'Yummy Delicious',
            'price' => 280,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);
        Product::create([
            'name' => 'Cake 10',
            'slug' => 'cake-10',
            'details' => 'Yummy Delicious',
            'price' => 280,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);

        Product::create([
            'name' => 'Cake 11',
            'slug' => 'cake-11',
            'details' => 'Yummy Delicious',
            'price' => 280,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);
        
        Product::create([
            'name' => 'Cake 12',
            'slug' => 'cake-12',
            'details' => 'Yummy Delicious',
            'price' => 280,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);
        
        Product::create([
            'name' => 'Cake 13',
            'slug' => 'cake-13',
            'details' => 'Yummy Delicious',
            'price' => 280,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);
        
        Product::create([
            'name' => 'Cake 14',
            'slug' => 'cake-14',
            'details' => 'Yummy Delicious',
            'price' => 280,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);

        Product::create([
            'name' => 'Cake 15',
            'slug' => 'cake-15',
            'details' => 'Yummy Delicious',
            'price' => 280,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);
        
        Product::create([
            'name' => 'Cake 16',
            'slug' => 'cake-16',
            'details' => 'Yummy Delicious',
            'price' => 280,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);

        Product::create([
            'name' => 'Cake 17',
            'slug' => 'cake-17',
            'details' => 'Yummy Delicious',
            'price' => 280,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);
        Product::create([
            'name' => 'Cake 18',
            'slug' => 'cake-18',
            'details' => 'Yummy Delicious',
            'price' => 280,
            'description' => 'This taste so good',
            'product_path' => 'storage/product/1.jpg',

        ]);
        
        
        
    }
}
