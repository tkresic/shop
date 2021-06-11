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
            'name' => 'Bruschette mix',
            'price' => 2500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'BruschetteMix.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Krumpir pekarski',
            'price' => 3500,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'KrumpirPekarski.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Grill povrće',
            'price' => 3000,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'GrillPovrce.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Pršut dalmatinski',
            'price' => 3750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'PrsutDalmatinski.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Slavonski kulen 100g',
            'price' => 2850,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'SlavonskiKulen.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Paški sir',
            'price' => 3150,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'PaskiSir.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Ribarski tanjur',
            'price' => 4750,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'RibarskiTanjur.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Salata od hobotnice',
            'price' => 5150,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'SalataOdHobotnice.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Ražnjići od gambera',
            'price' => 2850,
            'cost' => 0,
            'sku' => substr(md5(rand()), 0, 6),
            'image' => url('/') . '/storage/images/' . 'RaznjiciOdGambera.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Mozzarella',
            'price' => 3350,
            'cost' => 0,
            'sku' => '10',
            'image' => url('/') . '/storage/images/' . 'Mozzarella.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Proljetne rolice',
            'price' => 2250,
            'cost' => 0,
            'sku' => '11',
            'image' => url('/') . '/storage/images/' . 'ProljetneRolice.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Pohani tofu',
            'price' => 2750,
            'cost' => 0,
            'sku' => '12',
            'image' => url('/') . '/storage/images/' . 'PohaniTofu.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Caprese',
            'price' => 2250,
            'cost' => 0,
            'sku' => '13',
            'image' => url('/') . '/storage/images/' . 'Caprese.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Capricciosa',
            'price' => 2500,
            'cost' => 0,
            'sku' => '14',
            'image' => url('/') . '/storage/images/' . 'Capricciosa.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Grčka',
            'price' => 3000,
            'cost' => 0,
            'sku' => '15',
            'image' => url('/') . '/storage/images/' . 'Grcka.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Tuna',
            'price' => 3250,
            'cost' => 0,
            'sku' => '16',
            'image' => url('/') . '/storage/images/' . 'Tuna.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Cezar',
            'price' => 3500,
            'cost' => 0,
            'sku' => '17',
            'image' => url('/') . '/storage/images/' . 'Cezar.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Zelena salata',
            'price' => 2750,
            'cost' => 0,
            'sku' => '18',
            'image' => url('/') . '/storage/images/' . 'ZelenaSalata.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Miješana salata',
            'price' => 2000,
            'cost' => 0,
            'sku' => '19',
            'image' => url('/') . '/storage/images/' . 'MijesanaSalata.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Matovilac salata',
            'price' => 2500,
            'cost' => 0,
            'sku' => '20',
            'image' => url('/') . '/storage/images/' . 'MatovilacSalata.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Rikula salata',
            'price' => 2900,
            'cost' => 0,
            'sku' => '21',
            'image' => url('/') . '/storage/images/' . 'RikulaSalata.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Kupus salata',
            'price' => 1800,
            'cost' => 0,
            'sku' => '22',
            'image' => url('/') . '/storage/images/' . 'KupusSalata.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Šopska salata',
            'price' => 2200,
            'cost' => 0,
            'sku' => '23',
            'image' => url('/') . '/storage/images/' . 'SopskaSalata.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Pizza',
            'price' => 4500,
            'cost' => 0,
            'sku' => '24',
            'image' => url('/') . '/storage/images/' . 'Pizza.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Spaghetti',
            'price' => 3000,
            'cost' => 0,
            'sku' => '25',
            'image' => url('/') . '/storage/images/' . 'Spaghetti.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Jastog',
            'price' => 25000,
            'cost' => 0,
            'sku' => '26',
            'image' => url('/') . '/storage/images/' . 'Jastog.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Lazanje',
            'price' => 3500,
            'cost' => 0,
            'sku' => '27',
            'image' => url('/') . '/storage/images/' . 'Lazanje.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Grill piletina',
            'price' => 4700,
            'cost' => 0,
            'sku' => '28',
            'image' => url('/') . '/storage/images/' . 'GrillPiletina.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Biftek',
            'price' => 8500,
            'cost' => 0,
            'sku' => '29',
            'image' => url('/') . '/storage/images/' . 'Biftek.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Bečki odrezak',
            'price' => 4250,
            'cost' => 0,
            'sku' => '30',
            'image' => url('/') . '/storage/images/' . 'BeckiOdrezak.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Pureći cordon blue',
            'price' => 3750,
            'cost' => 0,
            'sku' => '31',
            'image' => url('/') . '/storage/images/' . 'PureciCordonBlue.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Lignje na žaru',
            'price' => 4500,
            'cost' => 0,
            'sku' => '32',
            'image' => url('/') . '/storage/images/' . 'LignjeNaZaru.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Pohane lignje',
            'price' => 4000,
            'cost' => 0,
            'sku' => '33',
            'image' => url('/') . '/storage/images/' . 'PohaneLignje.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Punjene lignje',
            'price' => 3500,
            'cost' => 0,
            'sku' => '34',
            'image' => url('/') . '/storage/images/' . 'PunjeneLignje.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Svinjski medaljoni',
            'price' => 4000,
            'cost' => 0,
            'sku' => '35',
            'image' => url('/') . '/storage/images/' . 'SvinjskiMedaljoni.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Svinjski ražnjići',
            'price' => 4500,
            'cost' => 0,
            'sku' => '36',
            'image' => url('/') . '/storage/images/' . 'SvinjskiRaznjici.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Pileći ražnjići',
            'price' => 4750,
            'cost' => 0,
            'sku' => '37',
            'image' => url('/') . '/storage/images/' . 'PileciRaznjici.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Gurmanska piletina',
            'price' => 4800,
            'cost' => 0,
            'sku' => '38',
            'image' => url('/') . '/storage/images/' . 'GurmanskaPiletina.jpeg'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Pureći steak',
            'price' => 5750,
            'cost' => 0,
            'sku' => '39',
            'image' => url('/') . '/storage/images/' . 'PureciSteak.jpeg'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Ćevapi u lepinji m.',
            'price' => 3500,
            'cost' => 0,
            'sku' => '40',
            'image' => url('/') . '/storage/images/' . 'Cevapi.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Ćevapi u lepinji v.',
            'price' => 4000,
            'cost' => 0,
            'sku' => '41',
            'image' => url('/') . '/storage/images/' . 'Cevapi.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Miješano meso',
            'price' => 6250,
            'cost' => 0,
            'sku' => '42',
            'image' => url('/') . '/storage/images/' . 'MijesanoMeso.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Pljeskavica',
            'price' => 4250,
            'cost' => 0,
            'sku' => '43',
            'image' => url('/') . '/storage/images/' . 'Pljeskavica.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Plata m.',
            'price' => 8000,
            'cost' => 0,
            'sku' => '44',
            'image' => url('/') . '/storage/images/' . 'Plata.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Plata v.',
            'price' => 10000,
            'cost' => 0,
            'sku' => '45',
            'image' => url('/') . '/storage/images/' . 'Plata.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Teleći naravni',
            'price' => 4500,
            'cost' => 0,
            'sku' => '46',
            'image' => url('/') . '/storage/images/' . 'TeleciNaravni.jpeg'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Riba sa žara',
            'price' => 12000,
            'cost' => 0,
            'sku' => '47',
            'image' => url('/') . '/storage/images/' . 'RibaSaZara.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Ramstek',
            'price' => 8750,
            'cost' => 0,
            'sku' => '48',
            'image' => url('/') . '/storage/images/' . 'Ramstek.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Tiramisu',
            'price' => 2750,
            'cost' => 0,
            'sku' => '49',
            'image' => url('/') . '/storage/images/' . 'Tiramisu.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Palaćinke',
            'price' => 3250,
            'cost' => 0,
            'sku' => '50',
            'image' => url('/') . '/storage/images/' . 'Palacinke.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Cheese cake',
            'price' => 3500,
            'cost' => 0,
            'sku' => '51',
            'image' => url('/') . '/storage/images/' . 'CheeseCake.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Voćna salata',
            'price' => 3300,
            'cost' => 0,
            'sku' => '52',
            'image' => url('/') . '/storage/images/' . 'VocnaSalata.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Banana split',
            'price' => 3750,
            'cost' => 0,
            'sku' => '53',
            'image' => url('/') . '/storage/images/' . 'BananaSplit.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Voćni kup',
            'price' => 3600,
            'cost' => 0,
            'sku' => '54',
            'image' => url('/') . '/storage/images/' . 'VocniKup.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Vanilija kup',
            'price' => 4750,
            'cost' => 0,
            'sku' => '55',
            'image' => url('/') . '/storage/images/' . 'VanilijaKup.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Panna cotta',
            'price' => 4500,
            'cost' => 0,
            'sku' => '56',
            'image' => url('/') . '/storage/images/' . 'PannaCotta.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Čokoladna čarolija',
            'price' => 5200,
            'cost' => 0,
            'sku' => '57',
            'image' => url('/') . '/storage/images/' . 'CokoladnaCarolija.jpeg'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Ožujsko',
            'price' => 1200,
            'cost' => 0,
            'sku' => '58',
            'image' => url('/') . '/storage/images/' . 'Ozujsko.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Stella Artois',
            'price' => 1400,
            'cost' => 0,
            'sku' => '59',
            'image' => url('/') . '/storage/images/' . 'StellaArtois.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Beck\'s',
            'price' => 1300,
            'cost' => 0,
            'sku' => '60',
            'image' => url('/') . '/storage/images/' . 'Becks.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Tomislav',
            'price' => 1700,
            'cost' => 0,
            'sku' => '61',
            'image' => url('/') . '/storage/images/' . 'Tomislav.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Karlovačko',
            'price' => 1200,
            'cost' => 0,
            'sku' => '62',
            'image' => url('/') . '/storage/images/' . 'Karlovacko.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Heineken',
            'price' => 1000,
            'cost' => 0,
            'sku' => '63',
            'image' => url('/') . '/storage/images/' . 'Heineken.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Staropramen',
            'price' => 1500,
            'cost' => 0,
            'sku' => '64',
            'image' => url('/') . '/storage/images/' . 'Staropramen.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Nikšićko',
            'price' => 1400,
            'cost' => 0,
            'sku' => '65',
            'image' => url('/') . '/storage/images/' . 'Niksicko.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Stari lisac',
            'price' => 1100,
            'cost' => 0,
            'sku' => '66',
            'image' => url('/') . '/storage/images/' . 'StariLisac.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Kozel',
            'price' => 1600,
            'cost' => 0,
            'sku' => '67',
            'image' => url('/') . '/storage/images/' . 'Kozel.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Paulaner',
            'price' => 2200,
            'cost' => 0,
            'sku' => '68',
            'image' => url('/') . '/storage/images/' . 'Paulaner.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Zlatni medvjed',
            'price' => 2000,
            'cost' => 0,
            'sku' => '69',
            'image' => url('/') . '/storage/images/' . 'ZlatniMedvjed.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Grička vještica',
            'price' => 2500,
            'cost' => 0,
            'sku' => '70',
            'image' => url('/') . '/storage/images/' . 'GrickaVjestica.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Crna kraljica',
            'price' => 2350,
            'cost' => 0,
            'sku' => '71',
            'image' => url('/') . '/storage/images/' . 'CrnaKraljica.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Plavac mali',
            'price' => 7500,
            'cost' => 0,
            'sku' => '72',
            'image' => url('/') . '/storage/images/' . 'PlavacMali.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Cabernet sauvignon',
            'price' => 12000,
            'cost' => 0,
            'sku' => '73',
            'image' => url('/') . '/storage/images/' . 'CabernetSauvignon.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Graševina',
            'price' => 6000,
            'cost' => 0,
            'sku' => '74',
            'image' => url('/') . '/storage/images/' . 'Grasevina.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Pinot sivi',
            'price' => 7000,
            'cost' => 0,
            'sku' => '75',
            'image' => url('/') . '/storage/images/' . 'PinotSivi.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Chardonnay',
            'price' => 10000,
            'cost' => 0,
            'sku' => '76',
            'image' => url('/') . '/storage/images/' . 'Chardonnay.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Dingač',
            'price' => 9500,
            'cost' => 0,
            'sku' => '77',
            'image' => url('/') . '/storage/images/' . 'Dingac.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Pošip',
            'price' => 10500,
            'cost' => 0,
            'sku' => '78',
            'image' => url('/') . '/storage/images/' . 'Posip.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Grk',
            'price' => 9700,
            'cost' => 0,
            'sku' => '79',
            'image' => url('/') . '/storage/images/' . 'Grk.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Babić',
            'price' => 8250,
            'cost' => 0,
            'sku' => '80',
            'image' => url('/') . '/storage/images/' . 'Babic.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Vugava',
            'price' => 7750,
            'cost' => 0,
            'sku' => '81',
            'image' => url('/') . '/storage/images/' . 'Vugava.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Rukatac',
            'price' => 8150,
            'cost' => 0,
            'sku' => '82',
            'image' => url('/') . '/storage/images/' . 'Rukatac.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Jägermeister',
            'price' => 2500,
            'cost' => 0,
            'sku' => '83',
            'image' => url('/') . '/storage/images/' . 'Jagermeister.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Amaro',
            'price' => 2200,
            'cost' => 0,
            'sku' => '84',
            'image' => url('/') . '/storage/images/' . 'Amaro.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Lavov',
            'price' => 2000,
            'cost' => 0,
            'sku' => '85',
            'image' => url('/') . '/storage/images/' . 'Lavov.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Pelinkovac',
            'price' => 1450,
            'cost' => 0,
            'sku' => '86',
            'image' => url('/') . '/storage/images/' . 'Pelinkovac.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Southern Comfort',
            'price' => 2450,
            'cost' => 0,
            'sku' => '87',
            'image' => url('/') . '/storage/images/' . 'SouthernComfort.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Campari',
            'price' => 1900,
            'cost' => 0,
            'sku' => '88',
            'image' => url('/') . '/storage/images/' . 'Campari.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Vigor vodka',
            'price' => 1750,
            'cost' => 0,
            'sku' => '89',
            'image' => url('/') . '/storage/images/' . 'VigorVodka.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Finlandia vodka',
            'price' => 2000,
            'cost' => 0,
            'sku' => '90',
            'image' => url('/') . '/storage/images/' . 'FinlandiaVodka.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Bacardi',
            'price' => 2350,
            'cost' => 0,
            'sku' => '91',
            'image' => url('/') . '/storage/images/' . 'Bacardi.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Johnnie Walker',
            'price' => 2650,
            'cost' => 0,
            'sku' => '92',
            'image' => url('/') . '/storage/images/' . 'JohnnieWalker.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Jack Daniel\'s',
            'price' => 2200,
            'cost' => 0,
            'sku' => '93',
            'image' => url('/') . '/storage/images/' . 'JackDaniels.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Ballantines',
            'price' => 2100,
            'cost' => 0,
            'sku' => '94',
            'image' => url('/') . '/storage/images/' . 'Ballantines.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Chivas',
            'price' => 2600,
            'cost' => 0,
            'sku' => '95',
            'image' => url('/') . '/storage/images/' . 'Chivas.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Stock',
            'price' => 1750,
            'cost' => 0,
            'sku' => '96',
            'image' => url('/') . '/storage/images/' . 'Stock.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Viljamovka',
            'price' => 1400,
            'cost' => 0,
            'sku' => '97',
            'image' => url('/') . '/storage/images/' . 'Viljamovka.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Travarica',
            'price' => 1400,
            'cost' => 0,
            'sku' => '98',
            'image' => url('/') . '/storage/images/' . 'Travarica.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Loza',
            'price' => 1400,
            'cost' => 0,
            'sku' => '99',
            'image' => url('/') . '/storage/images/' . 'Loza.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Coca Cola',
            'price' => 800,
            'cost' => 0,
            'sku' => '100',
            'image' => url('/') . '/storage/images/' . 'CocaCola.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Fanta',
            'price' => 900,
            'cost' => 0,
            'sku' => '101',
            'image' => url('/') . '/storage/images/' . 'Fanta.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Cockta',
            'price' => 1200,
            'cost' => 0,
            'sku' => '102',
            'image' => url('/') . '/storage/images/' . 'Cockta.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Red Bull',
            'price' => 1800,
            'cost' => 0,
            'sku' => '103',
            'image' => url('/') . '/storage/images/' . 'RedBull.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Ledeni čaj',
            'price' => 1400,
            'cost' => 0,
            'sku' => '104',
            'image' => url('/') . '/storage/images/' . 'LedeniCaj.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Sprite',
            'price' => 1100,
            'cost' => 0,
            'sku' => '105',
            'image' => url('/') . '/storage/images/' . 'Sprite.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Schweppes',
            'price' => 1600,
            'cost' => 0,
            'sku' => '106',
            'image' => url('/') . '/storage/images/' . 'Schweppes.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Orangina',
            'price' => 1600,
            'cost' => 0,
            'sku' => '107',
            'image' => url('/') . '/storage/images/' . 'Orangina.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Mineralna voda',
            'price' => 1000,
            'cost' => 0,
            'sku' => '108',
            'image' => url('/') . '/storage/images/' . 'MineralnaVoda.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Negazirana voda',
            'price' => 800,
            'cost' => 0,
            'sku' => '109',
            'image' => url('/') . '/storage/images/' . 'NegaziranaVoda.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Prirodna limunada',
            'price' => 2000,
            'cost' => 0,
            'sku' => '110',
            'image' => url('/') . '/storage/images/' . 'PrirodnaLimunada.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Cedevita',
            'price' => 1200,
            'cost' => 0,
            'sku' => '111',
            'image' => url('/') . '/storage/images/' . 'Cedevita.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Cijeđena naranča',
            'price' => 2200,
            'cost' => 0,
            'sku' => '112',
            'image' => url('/') . '/storage/images/' . 'CijedenaNaranca.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Kava s mlijekom m.',
            'price' => 900,
            'cost' => 0,
            'sku' => '113',
            'image' => url('/') . '/storage/images/' . 'Kava.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Kava s mlijekom v.',
            'price' => 1000,
            'cost' => 0,
            'sku' => '114',
            'image' => url('/') . '/storage/images/' . 'Kava.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Espresso',
            'price' => 700,
            'cost' => 0,
            'sku' => '115',
            'image' => url('/') . '/storage/images/' . 'Espresso.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Cappuccino',
            'price' => 1200,
            'cost' => 0,
            'sku' => '116',
            'image' => url('/') . '/storage/images/' . 'Cappuccino.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Bijela kava',
            'price' => 1400,
            'cost' => 0,
            'sku' => '117',
            'image' => url('/') . '/storage/images/' . 'BijelaKava.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Kava sa šlagom',
            'price' => 1100,
            'cost' => 0,
            'sku' => '118',
            'image' => url('/') . '/storage/images/' . 'KavaSaSlagom.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Nescafé',
            'price' => 1400,
            'cost' => 0,
            'sku' => '119',
            'image' => url('/') . '/storage/images/' . 'Nescafe.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Kakao',
            'price' => 1600,
            'cost' => 0,
            'sku' => '120',
            'image' => url('/') . '/storage/images/' . 'Kakao.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Kakao sa šlagom',
            'price' => 1800,
            'cost' => 0,
            'sku' => '121',
            'image' => url('/') . '/storage/images/' . 'KakaoSaSlagom.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Topla čokolada',
            'price' => 2200,
            'cost' => 0,
            'sku' => '122',
            'image' => url('/') . '/storage/images/' . 'ToplaCokolada.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Izbor čajeva',
            'price' => 1400,
            'cost' => 0,
            'sku' => '123',
            'image' => url('/') . '/storage/images/' . 'IzborCajeva.jpg'
        ]);
        Product::create([
            'subcategory_id' => 10,
            'name' => 'Marlboro',
            'price' => 3300,
            'cost' => 0,
            'sku' => '124',
            'image' => url('/') . '/storage/images/' . 'Marlboro.png'
        ]);
        Product::create([
            'subcategory_id' => 10,
            'name' => 'Dunhill',
            'price' => 3100,
            'cost' => 0,
            'sku' => '125',
            'image' => url('/') . '/storage/images/' . 'Dunhill.png'
        ]);
    }
}
