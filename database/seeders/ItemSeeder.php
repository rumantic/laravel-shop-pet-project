<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public $items = [
        [
            'name' => 'Кроссовки',
            'price' => 3400,
            'sale' => false,
        ],
        [
            'name' => 'Футболка',
            'price' => 1500,
            'sale' => false,
        ],
        [
            'name' => 'Джинсы',
            'price' => 9000,
            'sale' => false,
        ],
        [
            'name' => 'Куртка',
            'price' => 25000,
            'sale' => false,
        ],
        [
            'name' => 'Кепка',
            'price' => 500,
            'sale' => true,
        ],
        [
            'name' => 'Ремень',
            'price' => 1000,
            'sale' => true,
        ],
        [
            'name' => 'Туфли',
            'price' => 13400,
            'sale' => false,
        ],
        [
            'name' => 'Носки',
            'price' => 300,
            'sale' => false,
        ],
        [
            'name' => 'Шапка',
            'price' => 100,
            'sale' => false,
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = $this->items;

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
