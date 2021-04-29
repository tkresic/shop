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
            'cost' => NULL,
            'sku' => '1',
            'image' => 'https://www.yourphnompenh.com/order/files/2020/08/C03-Bruschette.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Krumpir pekarski',
            'price' => 3500,
            'cost' => NULL,
            'sku' => '2',
            'image' => 'https://seapak.com/wp-content/uploads/Shrimp-Stuffed-Twice-Baked-Potato.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Grill povrće',
            'price' => 3000,
            'cost' => NULL,
            'sku' => '3',
            'image' => 'https://i.pinimg.com/originals/f9/1b/a4/f91ba4f38fef789ca7791c948717ff9f.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Pršut dalmatinski',
            'price' => 3750,
            'cost' => NULL,
            'sku' => '4',
            'image' => 'https://www.kras.si/wp-content/uploads/2020/08/KrasSezana-prsut-maestral-R-1.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Slavonski kulen 100g',
            'price' => 2850,
            'cost' => NULL,
            'sku' => '5',
            'image' => 'https://mesoprerada.hr/wp-content/uploads/2020/07/kulen-100.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Paški sir',
            'price' => 3150,
            'cost' => NULL,
            'sku' => '6',
            'image' => 'https://www.fromi.com/wp-content/uploads/image_produit/detail_480x480_27291.gif'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Ribarski tanjur',
            'price' => 4750,
            'cost' => NULL,
            'sku' => '7',
            'image' => 'https://www.konoba-barba.com.hr/assets/img/jelo4.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Salata od hobotnice',
            'price' => 5150,
            'cost' => NULL,
            'sku' => '8',
            'image' => 'https://assets.website-files.com/6025204f58556be29033a199/602ad75422fbc7087ceb5503_Feta-Cheese-16-of-20.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Ražnjići od gambera',
            'price' => 2850,
            'cost' => NULL,
            'sku' => '9',
            'image' => 'https://www.milfa.it/ProductsImages/1011/sgam19.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Mozzarella',
            'price' => 3350,
            'cost' => NULL,
            'sku' => '10',
            'image' => 'https://agrifain.com/wp-content/uploads/2018/03/Mozzarelle-300x300.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Proljetne rolice',
            'price' => 2250,
            'cost' => NULL,
            'sku' => '11',
            'image' => 'https://www.lowflyingduck.com.au/wp-content/uploads/2017/03/Hanoi-Seafood-Fried-Spring-Roll-600x600.png'
        ]);
        Product::create([
            'subcategory_id' => 1,
            'name' => 'Pohani tofu',
            'price' => 2750,
            'cost' => NULL,
            'sku' => '12',
            'image' => 'https://cdn.shopify.com/s/files/1/0514/9369/9769/products/97-Mapo_Tofu_1f598686-cbc4-4588-a27f-5daddbaaba45.png?v=1607586981'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Caprese',
            'price' => 2250,
            'cost' => NULL,
            'sku' => '13',
            'image' => 'https://res.cloudinary.com/flow404/image/upload/f_auto,h_480,q_auto:good/v1/mcdonalds/caprese_480x480_x9dz2u'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Capricciosa',
            'price' => 2500,
            'cost' => NULL,
            'sku' => '14',
            'image' => 'https://static.takeaway.com/images/restaurants/bg/O1RNRO01/products/salatacezar.png?timestamp=1618204773'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Grčka',
            'price' => 3000,
            'cost' => NULL,
            'sku' => '15',
            'image' => 'https://cdn.shopify.com/s/files/1/0340/3549/9067/products/Greek_Salad_NEW_Top_Down_1200x1200.png?v=1585248993'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Tuna',
            'price' => 3250,
            'cost' => NULL,
            'sku' => '16',
            'image' => 'https://cdn.shopify.com/s/files/1/0886/0746/products/tuna_salad_1_503x503.png?v=1569411430'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Cezar',
            'price' => 3500,
            'cost' => NULL,
            'sku' => '17',
            'image' => 'https://www.mcdonalds.com/content/dam/ArabiaGWS/english/nfl/Nutrition/Items/Regular/chicken-caesar-uae.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Zelena salata',
            'price' => 2750,
            'cost' => NULL,
            'sku' => '18',
            'image' => 'https://www.overgreens.com/wp-content/uploads/2020/05/over-green.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Miješana salata',
            'price' => 2000,
            'cost' => NULL,
            'sku' => '19',
            'image' => 'https://www.honold.ch/images/Produktfotos/Traiteur/Salate/Gemischter_Blattsalat.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Matovilac salata',
            'price' => 2500,
            'cost' => NULL,
            'sku' => '20',
            'image' => 'https://uberiovo.hr/wp-content/uploads/2020/02/matovilac-sulog-285x285.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Rikula salata',
            'price' => 2900,
            'cost' => NULL,
            'sku' => '21',
            'image' => 'https://www.readypac.com/wp-content/uploads/2016/04/RP_Baby_Arugula_Baby_Greens_Bagged-550x550.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Kupus salata',
            'price' => 1800,
            'cost' => NULL,
            'sku' => '22',
            'image' => 'https://www.mysushishop.co.uk/product-5586-zoom/Cabbage-salad.png'
        ]);
        Product::create([
            'subcategory_id' => 2,
            'name' => 'Šopska salata',
            'price' => 2200,
            'cost' => NULL,
            'sku' => '23',
            'image' => 'https://restoransevernakapija.rs/files/20200302_181624_clipped_rev_1.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Pizza',
            'price' => 4500,
            'cost' => NULL,
            'sku' => '24',
            'image' => 'https://valentinos.com/wp-content/uploads/2019/06/valentinos-special.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Spaghetti',
            'price' => 3000,
            'cost' => NULL,
            'sku' => '25',
            'image' => 'https://www.marselsitalianrestaurant.com/wp-content/uploads/2020/09/slider-2.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Jastog',
            'price' => 25000,
            'cost' => NULL,
            'sku' => '26',
            'image' => 'https://assets.transparentkitchen.ca/p/ac189b36-1a30-475f-bcea-6242da729d49_640x640.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Lazanje',
            'price' => 3500,
            'cost' => NULL,
            'sku' => '27',
            'image' => 'https://i.pinimg.com/originals/a1/8f/71/a18f71721bfd8b558f01cdc3b11564a1.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Grill piletina',
            'price' => 4700,
            'cost' => NULL,
            'sku' => '28',
            'image' => 'https://spicyoven.com/wp-content/uploads/2019/03/CHARCOL-GRILLED-CHICKEN.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Biftek',
            'price' => 8500,
            'cost' => NULL,
            'sku' => '29',
            'image' => 'https://i.pinimg.com/originals/3c/b2/6e/3cb26eb0b32e52171c70c89b3eefc8c5.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Bečki odrezak',
            'price' => 4250,
            'cost' => NULL,
            'sku' => '30',
            'image' => 'https://apps.jutarnji.hr/zvijezda/img/two/becki_odrezak.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Pureći cordon blue',
            'price' => 3750,
            'cost' => NULL,
            'sku' => '31',
            'image' => 'https://cdn.shopify.com/s/files/1/0451/2127/4013/products/BRTC-CUT-OUT_Cordon-Bleu-2_728x.png?v=1612821445'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Lignje na žaru',
            'price' => 4500,
            'cost' => NULL,
            'sku' => '32',
            'image' => 'https://www.eko-fisvlasic.ba/wp-content/uploads/2017/12/Lignje-na-%C5%BEaru.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Pohane lignje',
            'price' => 4000,
            'cost' => NULL,
            'sku' => '33',
            'image' => 'https://i0.wp.com/romapizzaservis.com/wp-content/uploads/2017/07/Poh-lignje-400x400.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Punjene lignje',
            'price' => 3500,
            'cost' => NULL,
            'sku' => '34',
            'image' => 'https://dev.towndock.com/wp-content/uploads/2014/04/deviled-broiled-plate-image.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Svinjski medaljoni',
            'price' => 4000,
            'cost' => NULL,
            'sku' => '35',
            'image' => 'https://subsistence.wiki/w/images/b/b7/Pork_Chop_%28Cooked%29-icon.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Svinjski ražnjići',
            'price' => 4500,
            'cost' => NULL,
            'sku' => '36',
            'image' => 'https://pollosastoria.com/436-large_default/chuletas-a-la-parilla.jpg'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Pileći ražnjići',
            'price' => 4750,
            'cost' => NULL,
            'sku' => '37',
            'image' => 'https://paellasdomicilio.com/wp-content/uploads/2019/11/Pincho-pollo.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Gurmanska piletina',
            'price' => 4800,
            'cost' => NULL,
            'sku' => '38',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr_BVs80wYHR8DRs7PJrISmUPNNmgj_QrW7Q&usqp=CAU'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Pureći steak',
            'price' => 5750,
            'cost' => NULL,
            'sku' => '39',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwG_ifzTDrLfvyi0P6W76dt2I7NLE1v4-1MA&usqp=CAU'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Ćevapi u lepinji m.',
            'price' => 3500,
            'cost' => NULL,
            'sku' => '40',
            'image' => 'https://cdn.tasteatlas.com/images/dishes/b7801b191f7f44aba399fc320111501b.png?h=160&w=160'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Ćevapi u lepinji v.',
            'price' => 4000,
            'cost' => NULL,
            'sku' => '41',
            'image' => 'https://cdn.tasteatlas.com/images/dishes/b7801b191f7f44aba399fc320111501b.png?h=160&w=160'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Miješano meso',
            'price' => 6250,
            'cost' => NULL,
            'sku' => '42',
            'image' => 'https://www.shoprite.co.za/medias/10138054EA-checkers515Wx515H?context=bWFzdGVyfGltYWdlc3wzODQzOTd8aW1hZ2UvcG5nfGltYWdlcy9oZGIvaGE2Lzg4NzM3NDI0MzQzMzQucG5nfGI4N2FlNTJkZWFjNWU2YzkxNDhhMTkwMjJiZjEyOTcyNDQ5MmI3NTgwMDA2ODJkOGQ1ZWM0OGQ3ZTMwZmUyYWE'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Pljeskavica',
            'price' => 4250,
            'cost' => NULL,
            'sku' => '43',
            'image' => 'https://i0.wp.com/romapizzaservis.com/wp-content/uploads/2017/07/Pljeskavica.png'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Plata m.',
            'price' => 8000,
            'cost' => NULL,
            'sku' => '44',
            'image' => 'https://www.checkers.co.za/medias/10535952EA-checkers515Wx515H?context=bWFzdGVyfGltYWdlc3w0NDEzMjB8aW1hZ2UvcG5nfGltYWdlcy9oOTYvaGIzLzg4NzM3NDY2OTQxNzQucG5nfDA2MGRkMTRkZDNkNmM0NjE5NjI4ZWEzNjY2ZjU1YWY0YzEwNTdmMjk4MDE2OGM0NzYyNTQ2ZWYxYTg1ZGE1YWM'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Plata v.',
            'price' => 10000,
            'cost' => NULL,
            'sku' => '45',
            'image' => 'https://www.checkers.co.za/medias/10535952EA-checkers515Wx515H?context=bWFzdGVyfGltYWdlc3w0NDEzMjB8aW1hZ2UvcG5nfGltYWdlcy9oOTYvaGIzLzg4NzM3NDY2OTQxNzQucG5nfDA2MGRkMTRkZDNkNmM0NjE5NjI4ZWEzNjY2ZjU1YWY0YzEwNTdmMjk4MDE2OGM0NzYyNTQ2ZWYxYTg1ZGE1YWM'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Teleći naravni',
            'price' => 4500,
            'cost' => NULL,
            'sku' => '46',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDMTMFE5tzim8LA-8SvfyAW-1tdl8Io3JgeA&usqp=CAU'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Riba sa žara',
            'price' => 12000,
            'cost' => NULL,
            'sku' => '47',
            'image' => 'https://play-lh.googleusercontent.com/gag8Fu5Du_A_bN8pSwe2zbYvzaJnryaqwZWdTDrlInhItHb0EaBtq0IB9OORv4wGGXs'
        ]);
        Product::create([
            'subcategory_id' => 3,
            'name' => 'Ramstek',
            'price' => 8750,
            'cost' => NULL,
            'sku' => '48',
            'image' => 'https://www.placa.hr/wp-content/uploads/2021/01/3.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Tiramisu',
            'price' => 2750,
            'cost' => NULL,
            'sku' => '49',
            'image' => 'https://res.cloudinary.com/flow404/image/upload/v1544710400/mcdonalds/tiramisu_q1yw3q.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Palaćinke',
            'price' => 3250,
            'cost' => NULL,
            'sku' => '50',
            'image' => 'https://cdn.shopify.com/s/files/1/1980/2999/products/01-FluffyPancakes_1_45d89814-4b33-4f78-a02b-e64507dc1010_1000x1000.png?v=1609187849'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Cheese cake',
            'price' => 3500,
            'cost' => NULL,
            'sku' => '51',
            'image' => 'https://d1nqx6es26drid.cloudfront.net/app/uploads/2015/09/08095201/NY-Cheesecake.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Voćna salata',
            'price' => 3300,
            'cost' => NULL,
            'sku' => '52',
            'image' => 'https://cdn.shopify.com/s/files/1/0147/1836/9856/products/Get-Crafted-Meals-Fruit-1_800x.png?v=1611866107'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Banana split',
            'price' => 3750,
            'cost' => NULL,
            'sku' => '53',
            'image' => 'https://cdn.shopify.com/s/files/1/0068/4421/9507/products/bananasplitlifestyle1800_900x.png?v=1591806279'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Voćni kup',
            'price' => 3600,
            'cost' => NULL,
            'sku' => '54',
            'image' => 'https://www.cfacdn.com/img/order/COM/Menu_Refresh/Sides/Sides%20Desktop/_0006s_0010_%5BFeed%5D_0003s_0002_Sides_Fruit-Cup.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Vanilija kup',
            'price' => 4750,
            'cost' => NULL,
            'sku' => '55',
            'image' => 'https://cakeowls.com/wp-content/uploads/2019/10/Vegan-Vanilla-1.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Panna cotta',
            'price' => 4500,
            'cost' => NULL,
            'sku' => '56',
            'image' => 'https://img2.pngio.com/panna-cotta-png-3-png-image-panna-cotta-png-317_317.png'
        ]);
        Product::create([
            'subcategory_id' => 4,
            'name' => 'Čokoladna čarolija',
            'price' => 5200,
            'cost' => NULL,
            'sku' => '57',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqAifUH6_1v5DmImQXrXbzbnMEFpx8bgIdtA&usqp=CAU'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Ožujsko',
            'price' => 1200,
            'cost' => NULL,
            'sku' => '58',
            'image' => 'https://www.ozujsko.com/static/ui/ambalaza/can-05.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Stella Artois',
            'price' => 1400,
            'cost' => NULL,
            'sku' => '59',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/3/8/3850131486009.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Beck\'s',
            'price' => 1300,
            'cost' => NULL,
            'sku' => '60',
            'image' => 'https://sc04.alicdn.com/kf/Ufe8f3ea196ae4275aeeac2431226447de.jpg'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Tomislav',
            'price' => 1700,
            'cost' => NULL,
            'sku' => '61',
            'image' => 'https://zagrebackapivovara.hr/wp-content/uploads/2017/07/tomislav.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Karlovačko',
            'price' => 1200,
            'cost' => NULL,
            'sku' => '62',
            'image' => 'https://tommy.hr/phpthumb/phpThumb.php?w=400&h=400&zc=1&aoe=1&f=png&src=/clients/1/contents/4394_normal_5mgg4rsy6.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Heineken',
            'price' => 1000,
            'cost' => NULL,
            'sku' => '63',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/p/i/pivo-heineken-0-4-l.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Staropramen',
            'price' => 1500,
            'cost' => NULL,
            'sku' => '64',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/3/8/3850131003398.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Nikšićko',
            'price' => 1400,
            'cost' => NULL,
            'sku' => '65',
            'image' => 'https://zagrebackapivovara.hr/wp-content/uploads/2017/07/niksicko.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Stari lisac',
            'price' => 1100,
            'cost' => NULL,
            'sku' => '66',
            'image' => 'https://heineken.hr/uploaded/10-1557388864856.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Kozel',
            'price' => 1600,
            'cost' => NULL,
            'sku' => '67',
            'image' => 'https://static.wixstatic.com/media/fa175c_6165e6642cd449fa99326f1d48655fb0~mv2.png/v1/fit/w_500,h_500,q_90/file.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Paulaner',
            'price' => 2200,
            'cost' => NULL,
            'sku' => '68',
            'image' => 'https://tommy.hr/phpthumb/phpThumb.php?w=250&h=250&zc=1&aoe=1&f=png&src=/clients/1/contents/4346_normal_5mgg1ukun.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Zlatni medvjed',
            'price' => 2000,
            'cost' => NULL,
            'sku' => '69',
            'image' => 'https://shop.pivovara-medvedgrad.hr/wp-content/uploads/2020/05/Zlatni-medvjed-05-300x300.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Grička vještica',
            'price' => 2500,
            'cost' => NULL,
            'sku' => '70',
            'image' => 'https://cdn.agentcash.com/images/75i1mJ1ntsAWeElBKpvwYz-vE6E=/512x512/smart/https://agentcash.s3.eu-west-1.amazonaws.com/products/1_eEKRv8RcWuR8Kz5N8hXw/-2PZzUR0S9unaPBISoG3EQ.png'
        ]);
        Product::create([
            'subcategory_id' => 5,
            'name' => 'Crna kraljica',
            'price' => 2350,
            'cost' => NULL,
            'sku' => '71',
            'image' => 'https://shop.pivovara-medvedgrad.hr/wp-content/uploads/2020/05/Crna-kraljica-05-300x300.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Plavac mali',
            'price' => 7500,
            'cost' => NULL,
            'sku' => '72',
            'image' => 'https://www.dobravina.hr/media/catalog/product/cache/1/image/550x550/9df78eab33525d08d6e5fb8d27136e95/d/v/dv000716_1.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Cabernet sauvignon',
            'price' => 12000,
            'cost' => NULL,
            'sku' => '73',
            'image' => 'https://www.bolfanvinskivrh.hr/wp-content/uploads/2020/02/Cabernet-Sauvignon-Bolfan-2019-w.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Graševina',
            'price' => 6000,
            'cost' => NULL,
            'sku' => '74',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/3/8/3850156001218.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Pinot sivi',
            'price' => 7000,
            'cost' => NULL,
            'sku' => '75',
            'image' => 'https://www.dobravina.hr/media/catalog/product/cache/1/image/550x550/9df78eab33525d08d6e5fb8d27136e95/d/v/dv000204_1.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Chardonnay',
            'price' => 10000,
            'cost' => NULL,
            'sku' => '76',
            'image' => 'https://www.vinatis.co.uk/54005-detail_default/chardonnay-2020-cellier-des-demoiselles.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Dingač',
            'price' => 9500,
            'cost' => NULL,
            'sku' => '77',
            'image' => 'https://www.dobravina.hr/media/catalog/product/cache/1/image/550x550/9df78eab33525d08d6e5fb8d27136e95/d/v/dv000722_1.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Pošip',
            'price' => 10500,
            'cost' => NULL,
            'sku' => '78',
            'image' => 'https://rizman.com.hr/moj-content/uploads/2020/03/posip-vino-rizman-shop.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Grk',
            'price' => 9700,
            'cost' => NULL,
            'sku' => '79',
            'image' => 'http://wineshop.hr/wp-content/uploads/2016/09/Bire-Grk.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Babić',
            'price' => 8250,
            'cost' => NULL,
            'sku' => '80',
            'image' => 'https://images.vivino.com/thumbs/jSs5UmONTV-39Qm32UHotg_pb_600x600.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Vugava',
            'price' => 7750,
            'cost' => NULL,
            'sku' => '81',
            'image' => 'https://spajza.hr/wp-content/uploads/2019/11/krauthaker-grasevina-mitrovac-300x300.png'
        ]);
        Product::create([
            'subcategory_id' => 6,
            'name' => 'Rukatac',
            'price' => 8150,
            'cost' => NULL,
            'sku' => '82',
            'image' => 'https://www.dobravina.hr/media/catalog/product/cache/1/image/550x550/9df78eab33525d08d6e5fb8d27136e95/d/v/dv081936_1.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Jägermeister',
            'price' => 2500,
            'cost' => NULL,
            'sku' => '83',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/j/a/jagermeister-0-7-l.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Amaro',
            'price' => 2200,
            'cost' => NULL,
            'sku' => '84',
            'image' => 'https://www.rougemarin.hr/media/places/large_rossi-amaro-p@75b974cc-1dd5-4ddc-a428-7893744f1180.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Lavov',
            'price' => 2000,
            'cost' => NULL,
            'sku' => '85',
            'image' => 'https://tommy.hr/phpthumb/phpThumb.php?w=400&h=400&zc=1&aoe=1&f=png&src=/clients/1/contents/10648_normal_5miau73vm.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Pelinkovac',
            'price' => 1450,
            'cost' => NULL,
            'sku' => '86',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/p/e/pelinkovac-dalvin-1l_1.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Southern Comfort',
            'price' => 2450,
            'cost' => NULL,
            'sku' => '87',
            'image' => 'https://www.beowein.de/WebRoot/Store8/Shops/Shop538/46F6/D14C/E9C8/B390/C8A5/0A80/03BD/18DF/26200_southern_comfort_07_2016_m.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Campari',
            'price' => 1900,
            'cost' => NULL,
            'sku' => '88',
            'image' => 'https://www.cugaklik.hr/wp-content/uploads/2020/11/Campari-07_EAN-8000040001106.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Vigor vodka',
            'price' => 1750,
            'cost' => NULL,
            'sku' => '89',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/v/i/vigor-vodka-original-1l.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Finlandia vodka',
            'price' => 2000,
            'cost' => NULL,
            'sku' => '90',
            'image' => 'https://www.whiskylines.com/image/cache/data/Finlandia%20Vodka/Classic-600x600.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Bacardi',
            'price' => 2350,
            'cost' => NULL,
            'sku' => '91',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/0/4/042047_bacardi-carta-blanca-rum-1-l.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Johnnie Walker',
            'price' => 2650,
            'cost' => NULL,
            'sku' => '92',
            'image' => 'https://www.beowein.de/WebRoot/Store8/Shops/Shop538/45F0/438C/F0D6/EBF4/8B1A/0A80/03BD/6C43/10815_johnnie_walker_black_label_07_fl_gh_2016.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Jack Daniel\'s',
            'price' => 2200,
            'cost' => NULL,
            'sku' => '93',
            'image' => 'https://www.totalwine.com/dynamic/x490,sq/media/sys_master/twmmedia/he9/h98/13376466649118.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Ballantines',
            'price' => 2100,
            'cost' => NULL,
            'sku' => '94',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/0/4/046130-ballantine-s-40-07l.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Chivas',
            'price' => 2600,
            'cost' => NULL,
            'sku' => '95',
            'image' => 'https://drinkingkaki.com.sg/wp-content/uploads/2020/11/Chivas-12-1.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Stock',
            'price' => 1750,
            'cost' => NULL,
            'sku' => '96',
            'image' => 'https://www.delicatessen-shop.com/images/product_images/original_images/SPX1303964_0SPX.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Viljamovka',
            'price' => 1400,
            'cost' => NULL,
            'sku' => '97',
            'image' => 'https://www.h-r.hr/image/cache/catalog/Primores/simic_viljamovka-1000x1000.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Travarica',
            'price' => 1400,
            'cost' => NULL,
            'sku' => '98',
            'image' => 'https://www.h-r.hr/image/cache/catalog/Primores/degenija_travarica-1000x1000.png'
        ]);
        Product::create([
            'subcategory_id' => 7,
            'name' => 'Loza',
            'price' => 1400,
            'cost' => NULL,
            'sku' => '99',
            'image' => 'https://www.rubin.rs/wp-content/uploads/2021/01/rubin-loza-630x630.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Coca Cola',
            'price' => 800,
            'cost' => NULL,
            'sku' => '100',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/0/0/001827-coca-cola-250-ml.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Fanta',
            'price' => 900,
            'cost' => NULL,
            'sku' => '101',
            'image' => 'https://pizzahousealmere.nl/wp-content/uploads/2020/02/Fanta-orange-canada.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Cockta',
            'price' => 1200,
            'cost' => NULL,
            'sku' => '102',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/0/8/082608-cockta-1-5-l.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Red Bull',
            'price' => 1800,
            'cost' => NULL,
            'sku' => '103',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/9/0/9002490100070.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Ledeni čaj',
            'price' => 1400,
            'cost' => NULL,
            'sku' => '104',
            'image' => 'https://www.dutchexpatshop.com/media/catalog/product/cache/f3646bb7dc5767e76af5610b0d43751c/0/2/020720200407_362500FLS-1_360x360_2.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Sprite',
            'price' => 1100,
            'cost' => NULL,
            'sku' => '105',
            'image' => 'https://cdn.shopify.com/s/files/1/0335/9244/3012/products/sprite300_1024x.png?v=1594289758'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Schweppes',
            'price' => 1600,
            'cost' => NULL,
            'sku' => '106',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/0/6/064789-schweppes-tonic-water-1-5-l.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Orangina',
            'price' => 1600,
            'cost' => NULL,
            'sku' => '107',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/0/4/042454-orangina_pack15_original.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Mineralna voda',
            'price' => 1000,
            'cost' => NULL,
            'sku' => '108',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/3/8/3859888152045-2.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Negazirana voda',
            'price' => 800,
            'cost' => NULL,
            'sku' => '109',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/aca4d7c43a628faf60c1f86d3eaa629e/j/a/jana-negazirana-voda-1l.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Prirodna limunada',
            'price' => 2000,
            'cost' => NULL,
            'sku' => '110',
            'image' => 'https://www.girlwhomakeslemonade.com/uploads/5/4/8/1/5481583/published/make-lemonade-gwml-2.png?1590526008'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Cedevita',
            'price' => 1200,
            'cost' => NULL,
            'sku' => '111',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/de7a167639975b37ce148c87d1f24600/3/8/3850322003527.png'
        ]);
        Product::create([
            'subcategory_id' => 8,
            'name' => 'Cijeđena naranča',
            'price' => 2200,
            'cost' => NULL,
            'sku' => '112',
            'image' => 'https://purehealthyjuices.co.uk/wp-content/uploads/2021/02/woo-classic-fresh-orange-1.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Kava s mlijekom m.',
            'price' => 900,
            'cost' => NULL,
            'sku' => '113',
            'image' => 'https://pngarchive.com/public/uploads/preview/a-cup-of-coffee-11559054650plxwpvy39t.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Kava s mlijekom v.',
            'price' => 1000,
            'cost' => NULL,
            'sku' => '114',
            'image' => 'https://pngarchive.com/public/uploads/preview/a-cup-of-coffee-11559054650plxwpvy39t.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Espresso',
            'price' => 700,
            'cost' => NULL,
            'sku' => '115',
            'image' => 'https://www.nespresso.hr/files/images/slike_proizvoda/3730-2.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Cappuccino',
            'price' => 1200,
            'cost' => NULL,
            'sku' => '116',
            'image' => 'https://www.nescafe.com/hr/sites/default/files/2020-06/NESCAFE%20GOLD%20CAPPUCCINO%20DECAF%20BOX%202000X2000.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Bijela kava',
            'price' => 1400,
            'cost' => NULL,
            'sku' => '117',
            'image' => 'https://www.tgmall.com.my/image/888teacoffee/image/data/400px_white-coffee.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Kava sa šlagom',
            'price' => 1100,
            'cost' => NULL,
            'sku' => '118',
            'image' => 'https://freshcorner.hr/file/slides/1/1538/fe_400_400_kava_sa_slagom.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Nescafé',
            'price' => 1400,
            'cost' => NULL,
            'sku' => '119',
            'image' => 'https://www.nescafe.com/hr/sites/default/files/2020-06/NESCAFE%20GOLD%20CAPPUCCINO%20BOX%202000X2000.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Kakao',
            'price' => 1600,
            'cost' => NULL,
            'sku' => '120',
            'image' => 'https://shop.studenac.hr/media/catalog/product/cache/aca4d7c43a628faf60c1f86d3eaa629e/k/a/kandit-kakao-u-prahu-100g.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Kakao sa šlagom',
            'price' => 1800,
            'cost' => NULL,
            'sku' => '121',
            'image' => 'https://i.pinimg.com/originals/e4/2c/5f/e42c5f15acac39d892dc01ba34bc7427.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Topla čokolada',
            'price' => 2200,
            'cost' => NULL,
            'sku' => '122',
            'image' => 'https://res.cloudinary.com/flow404/image/upload/v1605881436/mcdonalds/Topla-coko-malina-web_gc0989.png'
        ]);
        Product::create([
            'subcategory_id' => 9,
            'name' => 'Izbor čajeva',
            'price' => 1400,
            'cost' => NULL,
            'sku' => '123',
            'image' => 'https://www.whittard.co.uk/on/demandware.static/-/Library-Sites-WhittardSharedLibrary/default/dw9c31cdbd/images/clps/tea/clp-tea-explore-rooibos.png'
        ]);
        Product::create([
            'subcategory_id' => 10,
            'name' => 'Marlboro',
            'price' => 3300,
            'cost' => NULL,
            'sku' => '124',
            'image' => 'https://www.abbarahsupermarket.com/wp-content/uploads/2020/04/MARLBORO_FILTER_RED_FLIP-TOP_PACK_800x.png'
        ]);
        Product::create([
            'subcategory_id' => 10,
            'name' => 'Dunhill',
            'price' => 3100,
            'cost' => NULL,
            'sku' => '125',
            'image' => 'https://cdn.shopify.com/s/files/1/2141/9909/products/dunhill-blue_420x.png'
        ]);
    }
}
