<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\SHome;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BootSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///////////////////Start Create Admin//////////////////////////
        $Admin = [
            [
                'name' => 'Abdullah Shokr',
                'email' => 'abdullah@gmail.com',
                'password' => 'AbdullahShokr',
                'privileges'=> 0,
            ],
            [
                'name' => 'Aya Fouda',
                'email' => 'ayafouda@gmail.com',
                'password' => 'Aya',
                'privileges'=> 2,
            ],
            [
                'name' => 'Mohammed Gaber',
                'email' => 'mohammedgaber@gmail.com',
                'password' => 'Mohammed',
                'privileges'=> 0,
            ],
            [
                'name' => 'saraMostafa',
                'email' => 'saramostafa@gmail.com',
                'password' => 'Sara',
                'privileges'=> 1,
            ],
            [
                'name' => 'zyad',
                'email' => 'zyad@gmail.com',
                'password' => 'Zyad',
                'privileges'=> 1,
            ],
        ];
        foreach ($Admin as $key => $value) {
            Admin::create($value);
        }
        ///////////////////End Create Admin//////////////////////////
        ///////////////////Start Create User//////////////////////////
        $user = [
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => 'user123',
            ],
            [
                'name' => 'Reham',
                'email' => 'Reham@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Maha',
                'email' => 'Maha@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'sara',
                'email' => 'sara@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Ahmed',
                'email' => 'Ahmed@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Mohammed',
                'email' => 'Mohammed@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Zyad',
                'email' => 'Zyad@gmail.com',
                'password' => '12345678',
            ],

            [
                'name' => 'Retal',
                'email' => 'Retal@gmail.com',
                'password' => '12345678',
            ],

            [
                'name' => 'Remas',
                'email' => 'Remas@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Aysel',
                'email' => 'Aysel@gmail.com',
                'password' => '12345678',
            ],

            [
                'name' => 'Ailen',
                'email' => 'Ailen@gmail.com',
                'password' => '12345678',
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
        ///////////////////End Create User//////////////////////////
        ///////////////////Start Create About//////////////////////////
        $about = [
            [
                'name'=> 'Abdullah',
                'role'=> 'Fullstack developer',
                'des'=> 'database -Backend development',
                'email'=> 'abdullah@gmail.com',
                'photo'=> 'abdullah.jpg',
            ],
            [
                'name'=> 'Mohammed',
                'role'=> 'front end developer',
                'des'=> 'front end development',
                'email'=> 'mohammed@gmail.com',
                'photo'=> 'mohammed.jpg',
            ],
            [
                'name'=> 'AyaFouda',
                'role'=> 'Content Creation- web designer',
                'des'=> 'I made many pages with the content',
                'email'=> 'fodaaya20@gmail.com',
                'photo'=> 'aya.jpg',
            ],
            [
                'name'=> 'sara',
                'role'=> 'Report Writer',
                'des'=> 'Report writing',
                'email'=> 'sara mostafa@gmail.com',
                'photo'=> 'sara.jpg',
            ],
            [
                'name'=> 'zyad',
                'role'=> 'designer',
                'des'=> 'database -Backend development',
                'email'=> 'zyad@gmail.com',
                'photo'=> 'zyad.jpg',
            ],
        ];
        foreach ($about as $key => $value) {
            About::create($value);
        }
        ///////////////////End Create About//////////////////////////
        ///////////////////Start Create Product//////////////////////////
        $product = [
            [
                'title'=> 'Aviator',
                'describe'=> 'Frame Material: Plastic & Acetate Lens Material: Plastic Style: heart Top barGradient lens Adjustable nosepads',
                'price'=> '100',
                'photo'=> 'product1.jpg',
                'writer_id'=> '1',
                'offer'=> '40%',
                'glassesModel'=> 'rayban_aviator_or_vertFlash',
            ],
            [
                'title'=> 'wayfarer',
                'describe'=> 'Acetate frames for Men only50-22-150 in mmG-15 lenWide lens 5Cm ,Arm 12cm 100% uv protection Includes leather case',
                'price'=> '120',
                'photo'=> 'product2.jpg',
                'writer_id'=> '2',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_wayfarer_havane_vert',
            ],
            [
                'title'=> 'denimorange',
                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm  100% uv protection Includes leather case',
                'price'=> '150',
                'photo'=> 'product3.jpg',
                'writer_id'=> '3',
                'offer'=> '20%',
                'glassesModel'=> 'rayban_wayfarer_denimOrange_orangeDegrade',
            ],
            [
                'title'=> 'gunvert',
                'describe'=> 'Complete protection from sunlight Wide lens 5Cm ,Arm 12cm Throughly & carefully made  100%UV protection.',
                'price'=> '220',
                'photo'=> 'product4.jpg',
                'writer_id'=> '1',
                'offer'=> '40%',
                'glassesModel'=> 'rayban_aviator_gun_vert',
            ],
            [
                'title'=> 'aviator',
                'describe'=> 'Complete protection from sunlight Wide lens 5Cm ,Arm 12cm  Throughly & carefully made 100%UV protection.',
                'price'=> '180',
                'photo'=> 'product5.jpg',
                'writer_id'=> '2',
                'offer'=> '50%',
                'glassesModel'=> 'rayban_aviator_or_vert',
            ],
            [
                'title'=> 'cuivre',
                'describe'=> 'Polarized sunglasses for women (Mauve) Frame Material: Plastic & Acetate Lens Material: Plastic Gradient lens Adjustable nosepads',
                'price'=> '50',
                'photo'=> 'product6.jpg',
                'writer_id'=> '3',
                'offer'=> '20%',
                'glassesModel'=> 'rayban_round_cuivre_pinkBrownDegrade',
            ],
            [
                'title'=> 'erika',
                'describe'=> 'Polarized sunglasses for women (Mauve) Frame Material: Plastic & Acetate Lens Material: Plastic Gradient lens Adjustable nosepads',
                'price'=> '60',
                'photo'=> 'product7.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_erika_marronArgent_marronVioletDegrade',
            ],
            [
                'title'=> 'noir',
                'describe'=> 'Polarized sunglasses for women (Mauve) Frame Material: Plastic & Acetate Lens Material: Plastic Gradient lens Adjustable nosepads',
                'price'=> '200',
                'photo'=> 'product8.jpg',
                'writer_id'=> '2',
                'offer'=> '50%',
                'glassesModel'=> 'rayban_clubround_noir_cuivre_flash',
            ],

            [
                'title'=> 'cockpit',
                'describe'=> 'Case included Lenses are prescription ready (rx-able) This full metal round frame stands out with unique double bridge design; lightweight metal and vibrant color options make this a necessary addition to your Nadarty icon collection.',
                'price'=> '50',
                'photo'=> 'product9.jpg',
                'writer_id'=> '3',
                'offer'=> '20%',
                'glassesModel'=> 'rayban_cockpit_or_vert_classique',
            ],

            [
                'title'=> 'justin',
                'describe'=> 'Case included Lenses are prescription ready (rx-able) This full metal round frame stands out with unique double bridge design; lightweight metal and vibrant color options make this a necessary addition to your Nadarty icon collection.',
                'price'=> '50',
                'photo'=> 'product10.jpg',
                'writer_id'=> '1',
                'offer'=> '40%',
                'glassesModel'=> 'rayban_justin_noir_rougeMirroir',
            ],
            [
                'title'=> 'vertClassique',
                'describe'=> 'Case included Lenses are prescription ready (rx-able) This full metal round frame stands out with unique double bridge design; lightweight metal and vibrant color options make this a necessary addition to your Nadarty icon collection.',
                'price'=> '170',
                'photo'=> 'product11.jpg',
                'writer_id'=> '2',
                'offer'=> '40%',
                'glassesModel'=> 'rayban_clubround_noir_vertClassique_g15',
            ],
            [
                'title'=> 'marron',
                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm 100% uv protection Includes leather case',
                'price'=> '130',
                'photo'=> 'product12.jpg',
                'writer_id'=> '3',
                'offer'=> '20%',
                'glassesModel'=> 'rayban_boyfriend_noir_marron_degrade',
            ],
            [
                'title'=> 'vertDegrade',
                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm 100% uv protection Includes leather case',
                'price'=> '300',
                'photo'=> 'product13.jpg',
                'writer_id'=> '1',
                'offer'=> '60%',
                'glassesModel'=> 'rayban_justin_marron_vertDegrade',
            ],
            [
                'title'=> 'round sunglasses',
                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm 100% uv protection Includes leather case',
                'price'=> '200',
                'photo'=> 'product14.jpg',
                'writer_id'=> '2',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_round_or_vert',
            ],

            [
                'title'=> 'justin',
                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm 100% uv protection Includes leather case',
                'price'=> '50',
                'photo'=> 'product15.jpg',
                'writer_id'=> '3',
                'offer'=> '20%',
                'glassesModel'=> 'rayban_justin_noir_bleuMirroir',
            ],
            [
                'title'=> 'clubround',
                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm 100% uv protection Includes leather case',
                'price'=> '300',
                'photo'=> 'product16.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_clubround_havaneNoir_vertClassique_g15',
            ],

            [
                'title'=> 'boyfriend',
                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm  100% uv protection Includes leather case',
                'price'=> '400',
                'photo'=> 'product17.jpg',
                'writer_id'=> '2',
                'offer'=> '50%',
                'glassesModel'=> 'rayban_boyfriend_havane_marron_clair_degrade',
            ],
            [
                'title'=> 'argent',
                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm 100% uv protection Includes leather case',
                'price'=> '200',
                'photo'=> 'product18.jpg',
                'writer_id'=> '3',
                'offer'=> '50%',
                'glassesModel'=> 'blaze_rb4380n_noir_grisdegrademiroir',
            ],


        ];
        foreach ($product as $key => $value) {
            Product::create($value);
        }
        ///////////////////End Create Product//////////////////////////
        ///////////////////Start Create Category//////////////////////////
        $category = [
            [
                'title'=> 'Sunglasses1',
                'description'=> 'Finding the perfect pair of glasses Virtual-Try on With amazing realism,you can try on glasses from the comfort of your couch',
                'slug'=> 'h1',
            ],
            [
                'title'=> 'sunglasses2',
                'description'=> 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'slug'=> 'h2',
            ],
            [
                'title'=> 'sunglasses3',
                'description'=> 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'slug'=> 'h3',
            ],
        ];
        foreach ($category as $key => $value) {
            Category::create($value);
        }
        ///////////////////End Create Category//////////////////////////
        ///////////////////Start Create Post//////////////////////////
        $post = [
            [
                'title' => 'sunglasses1',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glasses',
                'mycontent' => 'The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands. You do not have to sacrifice style to buy from Nadarty Store',
                'category_id' => '1',
                'writer_id' => '4',
                'slug' => 'h1',
                'photo' => 'sunglasses1.jpg',
            ],
            [
                'title' => 'sunglasses1',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glasses',
                'mycontent' => 'The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands. You do not have to sacrifice style to buy from Nadarty Store',
                'category_id' => '1',
                'writer_id' => '4',
                'slug' => 'h1',
                'photo' => 'sunglasses1.jpg',
            ],
            [
                'title' => 'sunglasses1',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glasses',
                'mycontent' => 'The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands. You do not have to sacrifice style to buy from Nadarty Store',
                'category_id' => '1',
                'writer_id' => '4',
                'slug' => 'h1',
                'photo' => 'sunglasses1.jpg',
            ],
            [
                'title' => 'sunglasses1',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glasses',
                'mycontent' => 'The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands. You do not have to sacrifice style to buy from Nadarty Store',
                'category_id' => '2',
                'writer_id' => '4',
                'slug' => 'h1',
                'photo' => 'sunglasses1.jpg',
            ],
            [
                'title' => 'sunglasses1',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glasses',
                'mycontent' => 'The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands. You do not have to sacrifice style to buy from Nadarty Store',
                'category_id' => '2',
                'writer_id' => '4',
                'slug' => 'h1',
                'photo' => 'sunglasses1.jpg',
            ],
            [
                'title' => 'sunglasses1',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glasses',
                'mycontent' => 'The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands. You do not have to sacrifice style to buy from Nadarty Store',
                'category_id' => '2',
                'writer_id' => '4',
                'slug' => 'h1',
                'photo' => 'sunglasses1.jpg',
            ],
            [
                'title' => 'sunglasses1',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glasses',
                'mycontent' => 'The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands. You do not have to sacrifice style to buy from Nadarty Store',
                'category_id' => '2',
                'writer_id' => '4',
                'slug' => 'h1',
                'photo' => 'sunglasses1.jpg',
            ],[
                'title' => 'sunglasses1',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glasses',
                'mycontent' => 'The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands. You do not have to sacrifice style to buy from Nadarty Store',
                'category_id' => '2',
                'writer_id' => '4',
                'slug' => 'h1',
                'photo' => 'sunglasses1.jpg',
            ],
            [
                'title' => 'sunglasses1',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glasses',
                'mycontent' => 'The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands. You do not have to sacrifice style to buy from Nadarty Store',
                'category_id' => '2',
                'writer_id' => '4',
                'slug' => 'h1',
                'photo' => 'sunglasses1.jpg',
            ],
            [
                'title' => 'sunglasses1',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glasses',
                'mycontent' => 'The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands. You do not have to sacrifice style to buy from Nadarty Store',
                'category_id' => '3',
                'writer_id' => '4',
                'slug' => 'h1',
                'photo' => 'sunglasses1.jpg',
            ],
            [
                'title' => 'sunglasses1',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glasses',
                'mycontent' => 'The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands. You do not have to sacrifice style to buy from Nadarty Store',
                'category_id' => '3',
                'writer_id' => '4',
                'slug' => 'h1',
                'photo' => 'sunglasses1.jpg',
            ],
            [
                'title' => 'sunglasses1',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glasses',
                'mycontent' => 'The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands. You do not have to sacrifice style to buy from Nadarty Store',
                'category_id' => '3',
                'writer_id' => '4',
                'slug' => 'h1',
                'photo' => 'sunglasses1.jpg',
            ],
            [
                'title' => 'sunglasses1',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glasses',
                'mycontent' => 'The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands. You do not have to sacrifice style to buy from Nadarty Store',
                'category_id' => '3',
                'writer_id' => '4',
                'slug' => 'h1',
                'photo' => 'sunglasses1.jpg',
            ],

        ];
        foreach ($post as $key => $value) {
            Post::create($value);
        }
        ///////////////////End Create Post//////////////////////////
        ///////////////////Start Create Home Setting//////////////////////////
        $Shome = [
            [
                'social1'=>'www.sdasdasd.com',
                'social2'=>'www.sdasdasd.com',
                'social3'=>'www.sdasdasd.com',
                'social4'=>'www.sdasdasd.com',
            ],
        ];
        foreach ($Shome as $key => $value) {
            SHome::create($value);
        }
        ///////////////////End Create Home Setting//////////////////////////
    }
}
