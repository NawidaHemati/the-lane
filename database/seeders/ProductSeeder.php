<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Fleece Crewneck in Black ',
                'category'=> 'basics',
                'price' => 55.00,
                'stock' => 20,
                'description' => 'A timeless fleece crewneck that blends effortless style with unmatched softness. Designed for layering or wearing solo, it’s the everyday essential you’ll reach for again and again.',
                'image' => 'fleeceblack.png'
            ],
            [
                'name' => 'Zip Hoodie in White ',
                'category'=> 'basics',
                'price' => 60.00,
                'stock' => 15,
                'description' => 'Stay wrapped in warmth with this zip-up hoodie featuring an oversized hood and relaxed silhouette. The perfect fusion of comfort and cool, ideal for transitional weather or laid-back lounging.',
                'image' => 'Ziphoodie.png'
            ],
            [
                'name' => 'Classic Gray Tee',
                'category'=> 'basics',
                'price' => 35.00,
                'stock' => 30,
                'description' => 'A fitted tee crafted from a soft, stretchy cotton blend that flatters every silhouette. Perfect for styling up or down, this wardrobe staple offers both versatility and comfort.',
                'image' => 'greytee.png'
            ],
            [
                'name' => 'Classic White Tee',
                'category'=> 'basics',
                'price' => 35.00,
                'stock' => 25,
                'description' => 'Minimal and effortlessly chic, this cropped white tee features delicate cap sleeves and a smooth finish. Pair with anything high-waisted for an elevated everyday look.',
                'image' => 'whitetee.png'
            ],
            [
                'name' => 'Wide Leg Lounge Pants',
                'category'=> 'basics',
                'price' => 40.00,
                'stock' => 18,
                'description' => 'A flowy, relaxed-fit pant made from breathable fabric that drapes beautifully. These wide leg pants are your go-to for off-duty style, designed for lounging or styling up with ease.',
                'image' => 'loungepants.png'
            ],
            [
                'name' => 'Fitted Long Sleeve Top',
                'category'=> 'basics',
                'price' => 40.00,
                'stock' => 22,
                'description' => 'Elegant in its simplicity, this long sleeve fitted top hugs your form in all the right places. With its flattering stretch fabric and sleek silhouette, it’s a layering dream.',
                'image' => 'blacktop.png'
            ],

        ]);
    }
}
