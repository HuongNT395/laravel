<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cate = new Category();
        $cate->name='BanGhe';
        $cate->save();

        $cate1 = new Category();
        $cate1->name='Computer';
        $cate1->save();

        $cate2 = new Category();
        $cate2->name='Bag';
        $cate2->save();

        $cate3 = new Category();
        $cate3->name='Pen';
        $cate3->save();
    }
}
