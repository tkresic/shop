<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'subcategory_id' => 1,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Bruschette mix',
            'price' => 2500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'BruschetteMix.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Krumpir pekarski',
            'price' => 3500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'KrumpirPekarski.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Grill povrće',
            'price' => 3000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'GrillPovrce.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Pršut dalmatinski',
            'price' => 3750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'PrsutDalmatinski.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Slavonski kulen 100g',
            'price' => 2850,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'SlavonskiKulen.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Paški sir',
            'price' => 3150,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'PaskiSir.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Ribarski tanjur',
            'price' => 4750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'RibarskiTanjur.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Salata od hobotnice',
            'price' => 5150,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'SalataOdHobotnice.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Ražnjići od gambera',
            'price' => 2850,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'RaznjiciOdGambera.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Mozzarella',
            'price' => 3350,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Mozzarella.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Proljetne rolice',
            'price' => 2250,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'ProljetneRolice.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Pohani tofu',
            'price' => 2750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'PohaniTofu.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Caprese',
            'price' => 2250,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Caprese.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Capricciosa',
            'price' => 2500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Capricciosa.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Grčka',
            'price' => 3000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Grcka.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Tuna',
            'price' => 3250,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Tuna.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Cezar',
            'price' => 3500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Cezar.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Zelena salata',
            'price' => 2750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'ZelenaSalata.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Miješana salata',
            'price' => 2000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'MijesanaSalata.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Matovilac salata',
            'price' => 2500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'MatovilacSalata.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Rikula salata',
            'price' => 2900,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'RikulaSalata.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Kupus salata',
            'price' => 1800,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'KupusSalata.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Šopska salata',
            'price' => 2200,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'SopskaSalata.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Pizza',
            'price' => 4500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Pizza.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Spaghetti',
            'price' => 3000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Spaghetti.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Jastog',
            'price' => 25000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Jastog.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Lazanje',
            'price' => 3500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Lazanje.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Grill piletina',
            'price' => 4700,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'GrillPiletina.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Biftek',
            'price' => 8500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Biftek.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Bečki odrezak',
            'price' => 4250,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'BeckiOdrezak.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Pureći cordon blue',
            'price' => 3750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'PureciCordonBlue.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Lignje na žaru',
            'price' => 4500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'LignjeNaZaru.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Pohane lignje',
            'price' => 4000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'PohaneLignje.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Punjene lignje',
            'price' => 3500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'PunjeneLignje.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Svinjski medaljoni',
            'price' => 4000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'SvinjskiMedaljoni.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Svinjski ražnjići',
            'price' => 4500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'SvinjskiRaznjici.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Pileći ražnjići',
            'price' => 4750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'PileciRaznjici.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Gurmanska piletina',
            'price' => 4800,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'GurmanskaPiletina.jpeg'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Pureći steak',
            'price' => 5750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'PureciSteak.jpeg'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Ćevapi u lepinji m.',
            'price' => 3500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Cevapi.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Ćevapi u lepinji v.',
            'price' => 4000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Cevapi.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Miješano meso',
            'price' => 6250,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'MijesanoMeso.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Pljeskavica',
            'price' => 4250,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Pljeskavica.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Plata m.',
            'price' => 8000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Plata.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Plata v.',
            'price' => 10000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Plata.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Teleći naravni',
            'price' => 4500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'TeleciNaravni.jpeg'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Riba sa žara',
            'price' => 12000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'RibaSaZara.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Ramstek',
            'price' => 8750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Ramstek.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Tiramisu',
            'price' => 2750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Tiramisu.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Palaćinke',
            'price' => 3250,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Palacinke.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Cheese cake',
            'price' => 3500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'CheeseCake.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Voćna salata',
            'price' => 3300,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'VocnaSalata.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Banana split',
            'price' => 3750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'BananaSplit.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Voćni kup',
            'price' => 3600,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'VocniKup.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Vanilija kup',
            'price' => 4750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'VanilijaKup.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Panna cotta',
            'price' => 4500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'PannaCotta.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Čokoladna čarolija',
            'price' => 5200,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'CokoladnaCarolija.jpeg'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Ožujsko',
            'price' => 1200,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Ozujsko.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Stella Artois',
            'price' => 1400,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'StellaArtois.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Beck\'s',
            'price' => 1300,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Becks.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Tomislav',
            'price' => 1700,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Tomislav.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Karlovačko',
            'price' => 1200,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Karlovacko.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Heineken',
            'price' => 1000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Heineken.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Staropramen',
            'price' => 1500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Staropramen.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Nikšićko',
            'price' => 1400,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Niksicko.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Stari lisac',
            'price' => 1100,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'StariLisac.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Kozel',
            'price' => 1600,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Kozel.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Paulaner',
            'price' => 2200,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Paulaner.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Zlatni medvjed',
            'price' => 2000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'ZlatniMedvjed.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Grička vještica',
            'price' => 2500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'GrickaVjestica.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Crna kraljica',
            'price' => 2350,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'CrnaKraljica.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Plavac mali',
            'price' => 7500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'PlavacMali.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Cabernet sauvignon',
            'price' => 12000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'CabernetSauvignon.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Graševina',
            'price' => 6000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Grasevina.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Pinot sivi',
            'price' => 7000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'PinotSivi.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Chardonnay',
            'price' => 10000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Chardonnay.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Dingač',
            'price' => 9500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Dingac.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Pošip',
            'price' => 10500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Posip.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Grk',
            'price' => 9700,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Grk.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Babić',
            'price' => 8250,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Babic.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Vugava',
            'price' => 7750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Vugava.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Rukatac',
            'price' => 8150,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Rukatac.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Jägermeister',
            'price' => 2500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Jagermeister.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Amaro',
            'price' => 2200,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Amaro.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Lavov',
            'price' => 2000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Lavov.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Pelinkovac',
            'price' => 1450,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Pelinkovac.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Southern Comfort',
            'price' => 2450,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'SouthernComfort.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Campari',
            'price' => 1900,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Campari.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Vigor vodka',
            'price' => 1750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'VigorVodka.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Finlandia vodka',
            'price' => 2000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'FinlandiaVodka.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Bacardi',
            'price' => 2350,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Bacardi.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Johnnie Walker',
            'price' => 2650,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'JohnnieWalker.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Jack Daniel\'s',
            'price' => 2200,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'JackDaniels.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Ballantines',
            'price' => 2100,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Ballantines.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Chivas',
            'price' => 2600,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Chivas.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Stock',
            'price' => 1750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Stock.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Viljamovka',
            'price' => 1400,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Viljamovka.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Travarica',
            'price' => 1400,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Travarica.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Loza',
            'price' => 1400,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Loza.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Coca Cola',
            'price' => 800,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'CocaCola.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Fanta',
            'price' => 900,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Fanta.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Cockta',
            'price' => 1200,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Cockta.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Red Bull',
            'price' => 1800,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'RedBull.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Ledeni čaj',
            'price' => 1400,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'LedeniCaj.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Sprite',
            'price' => 1100,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Sprite.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Schweppes',
            'price' => 1600,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Schweppes.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Orangina',
            'price' => 1600,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Orangina.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Mineralna voda',
            'price' => 1000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'MineralnaVoda.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Negazirana voda',
            'price' => 800,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'NegaziranaVoda.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Prirodna limunada',
            'price' => 2000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'PrirodnaLimunada.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Cedevita',
            'price' => 1200,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Cedevita.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Cijeđena naranča',
            'price' => 2200,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'CijedenaNaranca.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Kava s mlijekom m.',
            'price' => 900,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Kava.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Kava s mlijekom v.',
            'price' => 1000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Kava.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Espresso',
            'price' => 700,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Espresso.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Cappuccino',
            'price' => 1200,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Cappuccino.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Bijela kava',
            'price' => 1400,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'BijelaKava.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Kava sa šlagom',
            'price' => 1100,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'KavaSaSlagom.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Nescafé',
            'price' => 1400,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Nescafe.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Kakao',
            'price' => 1600,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Kakao.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Kakao sa šlagom',
            'price' => 1800,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'KakaoSaSlagom.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Topla čokolada',
            'price' => 2200,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'ToplaCokolada.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Izbor čajeva',
            'price' => 1400,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'IzborCajeva.png'
        ]);
        Product::create([
            'subcategory_id' => 10,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Marlboro',
            'price' => 3300,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Marlboro.png'
        ]);
        Product::create([
            'subcategory_id' => 10,
            'tax' => [
                'id' => 1,
                'name' => 'PDV 25%',
                'amount' => 25
            ],
            'name' => 'Dunhill',
            'price' => 3100,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'Dunhill.png'
        ]);
    }
}
