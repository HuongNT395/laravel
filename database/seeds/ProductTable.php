<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pro = new Product();
        $pro->cateID=1;
        $pro->name='Ban';
        $pro->save();

        $pro1 = new Product();
        $pro1->cateID=1;
        $pro1->name='Ghe';
        $pro1->save();

        $pro2 = new Product();
        $pro2->cateID=2;
        $pro2->name='Laptop';
        $pro2->save();

        $pro3 = new Product();
        $pro3->cateID=3;
        $pro3->name='Balo';
        $pro3->save();

        $pro4 = new Product();
        $pro4->cateID=4;
        $pro4->name='But';
        $pro4->save();
    }
}
