<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'JBL T500BTBLK',
            'price' => '39,99',
            'stock' => '6',
            'description' => 'Réduction de bruit	
            Non
            Accessoires fournis	
            Câble micro USB, guide de démarrage rapide
            Appareil connecté	
            Oui
            Autonomie de fonctionnement	
            960 min'
        ]);
        DB::table('products')->insert([
            'title' => 'JBL T700BT',
            'price' => '49,99',
            'stock' => '10',
            'description' => 'Réduction de bruit	
            Non
            Accessoires fournis	
            Câble micro USB, guide de démarrage rapide
            Appareil connecté	
            Oui
            Autonomie de fonctionnement	
            960 min'
        ]);
        DB::table('products')->insert([
            'title' => 'JBL T460BT',
            'price' => '24,99',
            'stock' => '12',
            'description' => 'Réduction de bruit	
            Non
            Accessoires fournis	
            Câble micro USB, guide de démarrage rapide
            Appareil connecté	
            Oui
            Autonomie de fonctionnement	
            960 min'
        ]);
        DB::table('products')->insert([
            'title' => 'Beats Solo3',
            'price' => '149,99',
            'stock' => '4',
            'description' => 'Réduction de bruit	
            Non
            Accessoires fournis	
            Câble micro USB, guide de démarrage rapide
            Appareil connecté	
            Oui
            Autonomie de fonctionnement	
            960 min'
        ]);
    }
}
