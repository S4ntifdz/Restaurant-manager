<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Item;
use App\Models\Order;
use App\Models\Tableclient;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Crear 5 menús y 10 ítems para cada menú
        Menu::factory(3)
            ->has(Item::factory()->count(10))
            ->create();

        // Crear 10 clientes de mesa y 5 órdenes para cada cliente, con 3 ítems por orden
        Tableclient::factory(10)
            ->has(Order::factory()->count(5)->hasItems(3))
            ->create();
    }
}
