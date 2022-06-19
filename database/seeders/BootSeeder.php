<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Review;
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
                'email'=> 'abdullah@gmail.com',
                'photo'=> 'abdullah.jpg',
            ],
            [
                'name'=> 'Mohammed',
                'role'=> 'front end developer',
                'email'=> 'mohammed@gmail.com',
                'photo'=> 'mohammed.jpg',
            ],
            [
                'name'=> 'AyaFouda',
                'role'=> 'Content Creation- web designer',
                'email'=> 'fodaaya20@gmail.com',
                'photo'=> 'aya.jpg',
            ],
            [
                'name'=> 'sara',
                'role'=> 'Report Writer',
                'email'=> 'sara mostafa@gmail.com',
                'photo'=> 'sara.jpg',
            ],
            [
                'name'=> 'zyad',
                'role'=> 'designer',
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
//            [
//                'title'=> 'Aviator',
//                'describe'=> 'Frame Material: Plastic & Acetate Lens Material: Plastic Style: heart Top barGradient lens Adjustable nosepads',
//                'price'=> '100',
//                'photo'=> 'product1.jpg',
//                'writer_id'=> '1',
//                'offer'=> '40%',
//                'glassesModel'=> 'rayban_aviator_or_vertFlash',
//            ],
//            [
//                'title'=> 'wayfarer',
//                'describe'=> 'Acetate frames for Men only50-22-150 in mmG-15 lenWide lens 5Cm ,Arm 12cm 100% uv protection Includes leather case',
//                'price'=> '120',
//                'photo'=> 'product2.jpg',
//                'writer_id'=> '2',
//                'offer'=> '30%',
//                'glassesModel'=> 'rayban_wayfarer_havane_vert',
//            ],
//            [
//                'title'=> 'denimorange',
//                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm  100% uv protection Includes leather case',
//                'price'=> '150',
//                'photo'=> 'product3.jpg',
//                'writer_id'=> '3',
//                'offer'=> '20%',
//                'glassesModel'=> 'rayban_wayfarer_denimOrange_orangeDegrade',
//            ],
//            [
//                'title'=> 'gunvert',
//                'describe'=> 'Complete protection from sunlight Wide lens 5Cm ,Arm 12cm Throughly & carefully made  100%UV protection.',
//                'price'=> '220',
//                'photo'=> 'product4.jpg',
//                'writer_id'=> '1',
//                'offer'=> '40%',
//                'glassesModel'=> 'rayban_aviator_gun_vert',
//            ],
//            [
//                'title'=> 'aviator',
//                'describe'=> 'Complete protection from sunlight Wide lens 5Cm ,Arm 12cm  Throughly & carefully made 100%UV protection.',
//                'price'=> '180',
//                'photo'=> 'product5.jpg',
//                'writer_id'=> '2',
//                'offer'=> '50%',
//                'glassesModel'=> 'rayban_aviator_or_vert',
//            ],
//            [
//                'title'=> 'cuivre',
//                'describe'=> 'Polarized sunglasses for women (Mauve) Frame Material: Plastic & Acetate Lens Material: Plastic Gradient lens Adjustable nosepads',
//                'price'=> '50',
//                'photo'=> 'product6.jpg',
//                'writer_id'=> '3',
//                'offer'=> '20%',
//                'glassesModel'=> 'rayban_round_cuivre_pinkBrownDegrade',
//            ],
//            [
//                'title'=> 'erika',
//                'describe'=> 'Polarized sunglasses for women (Mauve) Frame Material: Plastic & Acetate Lens Material: Plastic Gradient lens Adjustable nosepads',
//                'price'=> '60',
//                'photo'=> 'product7.jpg',
//                'writer_id'=> '1',
//                'offer'=> '30%',
//                'glassesModel'=> 'rayban_erika_marronArgent_marronVioletDegrade',
//            ],
//            [
//                'title'=> 'noir',
//                'describe'=> 'Polarized sunglasses for women (Mauve) Frame Material: Plastic & Acetate Lens Material: Plastic Gradient lens Adjustable nosepads',
//                'price'=> '200',
//                'photo'=> 'product8.jpg',
//                'writer_id'=> '2',
//                'offer'=> '50%',
//                'glassesModel'=> 'rayban_clubround_noir_cuivre_flash',
//            ],
//
//            [
//                'title'=> 'cockpit',
//                'describe'=> 'Case included Lenses are prescription ready (rx-able)',
//                'price'=> '50',
//                'photo'=> 'product9.jpg',
//                'writer_id'=> '3',
//                'offer'=> '20%',
//                'glassesModel'=> 'rayban_cockpit_or_vert_classique',
//            ],
//
//            [
//                'title'=> 'justin',
//                'describe'=> 'Case included Lenses are prescription ready ',
//                'price'=> '50',
//                'photo'=> 'product10.jpg',
//                'writer_id'=> '1',
//                'offer'=> '40%',
//                'glassesModel'=> 'rayban_justin_noir_rougeMirroir',
//            ],
//            [
//                'title'=> 'vertClassique',
//                'describe'=> 'Case included Lenses are prescription ready ign',
//                'price'=> '170',
//                'photo'=> 'product11.jpg',
//                'writer_id'=> '2',
//                'offer'=> '40%',
//                'glassesModel'=> 'rayban_clubround_noir_vertClassique_g15',
//            ],
//            [
//                'title'=> 'marron',
//                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm 100% uv protection Includes leather case',
//                'price'=> '130',
//                'photo'=> 'product12.jpg',
//                'writer_id'=> '3',
//                'offer'=> '20%',
//                'glassesModel'=> 'rayban_boyfriend_noir_marron_degrade',
//            ],
//            [
//                'title'=> 'vertDegrade',
//                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm 100% uv protection Includes leather case',
//                'price'=> '300',
//                'photo'=> 'product13.jpg',
//                'writer_id'=> '1',
//                'offer'=> '60%',
//                'glassesModel'=> 'rayban_justin_marron_vertDegrade',
//            ],
//            [
//                'title'=> 'round sunglasses',
//                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm 100% uv protection Includes leather case',
//                'price'=> '200',
//                'photo'=> 'product14.jpg',
//                'writer_id'=> '2',
//                'offer'=> '30%',
//                'glassesModel'=> 'rayban_round_or_vert',
//            ],
//
//            [
//                'title'=> 'justin',
//                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm 100% uv protection Includes leather case',
//                'price'=> '50',
//                'photo'=> 'product15.jpg',
//                'writer_id'=> '3',
//                'offer'=> '20%',
//                'glassesModel'=> 'rayban_justin_noir_bleuMirroir',
//            ],
//            [
//                'title'=> 'clubround',
//                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm 100% uv protection Includes leather case',
//                'price'=> '300',
//                'photo'=> 'product16.jpg',
//                'writer_id'=> '1',
//                'offer'=> '30%',
//                'glassesModel'=> 'rayban_clubround_havaneNoir_vertClassique_g15',
//            ],
//
//            [
//                'title'=> 'boyfriend',
//                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm  100% uv protection Includes leather case',
//                'price'=> '400',
//                'photo'=> 'product17.jpg',
//                'writer_id'=> '2',
//                'offer'=> '50%',
//                'glassesModel'=> 'rayban_boyfriend_havane_marron_clair_degrade',
//            ],
//            [
//                'title'=> 'argent',
//                'describe'=> 'Acetate frames for Men only 50-22-150 in mm G-15 lens Wide lens 5Cm ,Arm 12cm 100% uv protection Includes leather case',
//                'price'=> '200',
//                'photo'=> 'product18.jpg',
//                'writer_id'=> '3',
//                'offer'=> '50%',
//                'glassesModel'=> 'blaze_rb4380n_noir_grisdegrademiroir',
//            ],
            ///////
            [
                'title'=> 'Aviator',
                'describe'=> 'Frame Material: Plastic & Acetate Lens Material:',
                'price'=> '100',
                'photo'=> 'rayban_aviator_or_vertFlash.jpg',
                'writer_id'=> '1',
                'offer'=> '40%',
                'glassesModel'=> 'rayban_aviator_or_vertFlash',
            ],
            [
                'title'=> 'wayfarer',
                'describe'=> 'Acetate frames for Men only 100% uv protection Includes leather case',
                'price'=> '120',
                'photo'=> 'rayban_wayfarer_havane_marron.jpg',
                'writer_id'=> '2',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_wayfarer_havane_vert',
            ],
            [
                'title'=> 'denimorange',
                'describe'=> 'Acetate frames for Men only  100% uv protection Includes leather case',
                'price'=> '150',
                'photo'=> 'rayban_wayfarer_denimOrange_orangeDegrade.jpg',
                'writer_id'=> '3',
                'offer'=> '20%',
                'glassesModel'=> 'rayban_wayfarer_denimOrange_orangeDegrade',
            ],
            [
                'title'=> 'gunvert',
                'describe'=> 'Complete protection from sunlight & carefully made  100%UV protection.',
                'price'=> '220',
                'photo'=> 'rayban_aviator_gun_vert.jpg',
                'writer_id'=> '1',
                'offer'=> '40%',
                'glassesModel'=> 'rayban_aviator_gun_vert',
            ],
            [
                'title'=> 'aviator',
                'describe'=> 'Complete protection from sunlight  & carefully made 100%UV protection.',
                'price'=> '180',
                'photo'=> 'rayban_aviator_or_vert.jpg',
                'writer_id'=> '2',
                'offer'=> '50%',
                'glassesModel'=> 'rayban_aviator_or_vert',
            ],
            [
                'title'=> 'cuivre',
                'describe'=> 'Polarized sunglasses for women (Mauve) Frame Material: Plastic Gradient lens Adjustable nosepads',
                'price'=> '180',
                'photo'=> 'rayban_round_cuivre_pinkBrownDegrade.jpg',
                'writer_id'=> '3',
                'offer'=> '20%',
                'glassesModel'=> 'rayban_round_cuivre_pinkBrownDegrade',
            ],
            [
                'title'=> 'erika',
                'describe'=> 'Polarized sunglasses for women (Mauve) Frame Material:Plastic Gradient lens Adjustable nosepads',
                'price'=> '60',
                'photo'=> 'rayban_erika_marronArgent_marronVioletDegrade.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_erika_marronArgent_marronVioletDegrade',
            ],
            [
                'title'=> 'noir',
                'describe'=> 'Polarized sunglasses for women (Mauve) Frame Material Plastic Gradient lens Adjustable nosepads',
                'price'=> '200',
                'photo'=> 'rayban_clubround_noir_cuivre_flash.jpg',
                'writer_id'=> '2',
                'offer'=> '50%',
                'glassesModel'=> 'rayban_clubround_noir_cuivre_flash',
            ],

            [
                'title'=> 'cockpit',
                'describe'=> 'Case included Lenses are prescription ready (rx-able)',
                'price'=> '50',
                'photo'=> 'rayban_cockpit_or_vert_classique.jpg',
                'writer_id'=> '3',
                'offer'=> '20%',
                'glassesModel'=> 'rayban_cockpit_or_vert_classique',
            ],

            [
                'title'=> 'justin',
                'describe'=> 'Ray-Ban RB4147 710/51 Sunglasses Tortoise / Light Brown Gradient Lens 56mm ',
                'price'=> '50',
                'photo'=> 'rayban_justin_noir_rougeMirroir.jpg',
                'writer_id'=> '1',
                'offer'=> '40%',
                'glassesModel'=> 'rayban_justin_noir_rougeMirroir',
            ],
            [
                'title'=> 'vertClassique',
                'describe'=> 'Ray-Ban Highstreet TOP MAT Black on RED Trasparent / Grey RB 4147 6171/87 60mm',
                'price'=> '170',
                'photo'=> 'rayban_clubround_noir_vertClassique_g15.jpg',
                'writer_id'=> '2',
                'offer'=> '40%',
                'glassesModel'=> 'rayban_clubround_noir_vertClassique_g15',
            ],
            [
                'title'=> 'marron',
                'describe'=> 'Ray-Ban RB4147 710/51 Sunglasses Tortoise / Light Brown Gradient Lens 56mm',
                'price'=> '130',
                'photo'=> 'rayban_boyfriend_noir_marron_degrade.jpg',
                'writer_id'=> '3',
                'offer'=> '20%',
                'glassesModel'=> 'rayban_boyfriend_noir_marron_degrade',
            ],
            [
                'title'=> 'vertDegrade',
                'describe'=> 'Ray-Ban RB4147 710/51 Sunglasses Tortoise / Light Brown Gradient Lens 56mm',
                'price'=> '300',
                'photo'=> 'rayban_justin_marron_vertDegrade.jpg',
                'writer_id'=> '1',
                'offer'=> '60%',
                'glassesModel'=> 'rayban_justin_marron_vertDegrade',
            ],
            [
                'title'=> 'round sunglasses',
                'describe'=> 'Ray-Ban RB4147 710/51 Sunglasses Tortoise / Light round Gradient Lens 56mm',
                'price'=> '200',
                'photo'=> 'rayban_ferrari_noir_or_mirror_chromance.jpg',
                'writer_id'=> '2',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_round_or_vert',
            ],

            [
                'title'=> 'justin',
                'describe'=> 'Acetate frames for Men only 50-22-150 in mm Includes leather case',
                'price'=> '50',
                'photo'=> 'rayban_justin_noir_bleuMirroir.jpg',
                'writer_id'=> '3',
                'offer'=> '20%',
                'glassesModel'=> 'rayban_justin_noir_bleuMirroir',
            ],
            [
                'title'=> 'clubround',
                'describe'=> 'Acetate frames for women only 100% uv protection Includes leather case',
                'price'=> '300',
                'photo'=> 'rayban_clubround_havaneNoir_vertClassique_g15.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_clubround_havaneNoir_vertClassique_g15',
            ],

            [
                'title'=> 'boyfriend',
                'describe'=> 'Acetate frames for Men only  100% uv protection Includes leather case',
                'price'=> '400',
                'photo'=> 'rayban_boyfriend_havane_marron_classique.jpg',
                'writer_id'=> '2',
                'offer'=> '50%',
                'glassesModel'=> 'rayban_boyfriend_havane_marron_clair_degrade',
            ],
            [
                'title'=> 'argent',
                'describe'=> 'Acetate frames for Men only 50-22-150 in mm  Includes leather case',
                'price'=> '200',
                'photo'=> 'rayban_clubround_havaneNoir_marronClassique_b15.jpg',
                'writer_id'=> '3',
                'offer'=> '50%',
                'glassesModel'=> 'blaze_rb4380n_noir_grisdegrademiroir',
            ],
            ///////
            [
                'title'=> 'marron clair degrade ',
                'describe'=> 'Frame Material: Plastic & Acetate Lens Material',
                'price'=> '100',
                'photo'=> 'rayban_andy_bleu_bleu_mirroir.jpg',
                'writer_id'=> '1',
                'offer'=> '40%',
                'glassesModel'=> 'rayban_andy_bleu_bleu_mirroir',
            ],
            [
                'title'=> 'wayfarer_havane_vert',
                'describe'=> 'Trendy Semi Rimless Sunglasses For Women Men Gradient/ Travel Sun Glasses',
                'price'=> '120',
                'photo'=> 'rayban_aviator_gun_vert.jpg',
                'writer_id'=> '2',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_aviator_gun_vert',
            ],
            [
                'title'=> 'Chirs gris argent sunglasses',
                'describe'=> 'Wsunglass W925 Men Women Sunglasses 58mm RB3025 (Green L0205  58)',
                'price'=> '150',
                'photo'=> 'ray-ban-rb4147-boyfriend-light-havana-brown-gradient.jpg',
                'writer_id'=> '3',
                'offer'=> '20%',
                'glassesModel'=> 'ray-ban-rb4147-boyfriend-light-havana-brown-gradient',
            ],
            [
                'title'=> 'noir vertclassique sunglasses',
                'describe'=> 'Ray-Ban JUSTIN - BLACK RUBBER Frame GREEN MIRROR BLUE Lenses 55mm Non-Polarized',
                'price'=> '220',
                'photo'=>'rayban_boyfriend_havane_marron_classique.jpg',
                'writer_id'=> '1',
                'offer'=> '40%',
                'glassesModel'=>' rayban_boyfriend_havane_marron_classique',
            ],
            [
                'title'=> 'aviator or vert sunglasses',
                'describe'=> 'Round Vintage Mirror Lenses UV Protection Unisex Sunglasses',
                'price'=> '180',
                'photo'=> 'rayban_boyfriend_noir_gris_classique.jpg',
                'writer_id'=> '1',
                'offer'=> '50%',
                'glassesModel'=> 'rayban_boyfriend_noir_gris_classique',
            ],
            [
                'title'=> 'justin noir blue sunglasses',
                'describe'=> '',
                'price'=> '50',
                'photo'=> 'rayban_justin_noir_rougeMirroir.jpg',
                'writer_id'=> '1',
                'offer'=> '20%',
                'glassesModel'=> 'rayban_justin_noir_rougeMirroir',
            ],
            [
                'title'=> 'denimorange sunglasses',
                'describe'=> 'Case included.Absorbs 85% of visible light and blocking out most of the blue light',
                'price'=> '60',
                'photo'=> 'rayban_wayfarer_biColorNoirJaune_jauneFlash.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_wayfarer_biColorNoirJaune_jauneFlash',
            ],
            [
                'title'=> 'pink curive sunglasses',
                'describe'=> '100% UV PROTECTION: To protect your eyes from harmful UV rays',
                'price'=> '200',
                'photo'=> 'rayban_justin_violet_violetMirroir.jpg',
                'writer_id'=> '1',
                'offer'=> '50%',
                'glassesModel'=> 'rayban_justin_violet_violetMirroir',
            ],

            [
                'title'=> 'clubround curive flash',
                'describe'=> ' Tinted Color Lens women Vintage Shaped Sun Glasses Female/ UV400 Anti-UV Polarized Metal Frame Eyewear',
                'price'=> '50',
                'photo'=> 'rayban_predator_noir_gris_mirroir.jpg',
                'writer_id'=> '1',
                'offer'=> '20%',
                'glassesModel'=> 'rayban_predator_noir_gris_mirroir',
            ],

            [
                'title'=> 'noir rouge sunglasses',
                'describe'=> 'Case included Lenses are prescription ready (rx-able) ',
                'price'=> '50',
                'photo'=> 'rayban_round_or_ver.jpg',
                'writer_id'=> '1',
                'offer'=> '40%',
                'glassesModel'=> 'rayban_round_or_ver',
            ],
            [
                'title'=> 'vertClasssique',
                'describe'=> 'Complete protection from sunlight & carefully made 100%UV protection.',
                'price'=> '170',
                'photo'=> 'rayban_predator_noir_vert_classique.jpg',
                'writer_id'=> '1',
                'offer'=> '40%',
                'glassesModel'=> 'rayban_predator_noir_vert_classique',
            ],
            [
                'title'=> 'marron vert sunglasses',
                'describe'=> 'For Nadarty\'s latest innovation is accessorised sunglasses',
                'price'=> '130',
                'photo'=> 'rayban_predator_noir_gris_mirroir.jpg',
                'writer_id'=> '1',
                'offer'=> '20%',
                'glassesModel'=> 'rayban_predator_noir_gris_mirroir',
            ],
            [
                'title'=> 'clubround noir vertclassique',
                'describe'=> 'Case included.Absorbs 85% of visible light and blocking out most of the blue light',
                'price'=> '300',
                'photo'=> 'rayban_clubmaster_havaneNoir_bleuGris.jpg',
                'writer_id'=> '1',
                'offer'=> '60%',
                'glassesModel'=> 'rayban_clubmaster_havaneNoir_bleuGris',
            ],
            [
                'title'=> 'cuivre_pinkBrownDegrade',
                'describe'=> 'Lens width: 65 millimeterGold brow-bar sunglassesLens material: Plastic',
                'price'=> '200',
                'photo'=> 'rayban_clubmaster_havane_marronDegrade.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_clubmaster_havane_marronDegrade',
            ],

            [
                'title'=> 'clubroundNoir sunglasses',
                'describe'=> 'Case included.Absorbs 85% of visible light and blocking out most of the blue light',
                'price'=> '50',
                'photo'=> 'rayban_clubround_bleu_argent_flash.jpg',
                'writer_id'=> '1',
                'offer'=> '20%',
                'glassesModel'=> 'rayban_clubround_bleu_argent_flash',
            ],
            [
                'title'=> 'justin blue sunglasses',
                'describe'=> 'Case included.Absorbs 85% of visible light and blocking out most of the blue light',
                'price'=> '300',
                'photo'=> 'rayban_erika_noir_violetMirroir.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_erika_noir_violetMirroir',
            ],

            [
                'title'=> 'Argent_marron_clair_degrade',
                'describe'=> 'Ray-Ban RB4165 854/7Z Justin Brown Rubber Frame / Green Gradient Lens',
                'price'=> '400',
                'photo'=> 'rayban_erika_marronArgent_marronVioletDegrade.jpg',
                'writer_id'=> '1',
                'offer'=> '50%',
                'glassesModel'=> 'rayban_erika_marronArgent_marronVioletDegrade',
            ],
            [
                'title'=> 'round_cuivre_pinkBrownDegrade',
                'describe'=> 'Ray-Ban RB4147 609585 BLack Frame / Dark Brown Gradient Lens 60mm',
                'price'=> '60',
                'photo'=> 'rayban_erika_marronArgent_marronVioletDegrade.jpg',
                'writer_id'=> '1',
                'offer'=> '50%',
                'glassesModel'=> 'rayban_erika_marronArgent_marronVioletDegrade',
            ],
            [
                'title'=> 'Trendy sunglasses',
                'describe'=> 'Lenses are prescription ready (rx-able)icon collection.',
                'price'=> '50',
                'photo'=> 'rayban_erika_havaneGun_marronDegrade.jpg',
                'writer_id'=> '1',
                'offer'=> '50%',
                'glassesModel'=> 'rayban_erika_havaneGun_marronDegrade',
            ],
            [
                'title'=> 'Square sunglasses',
                'describe'=> 'Ray-Ban CLUBROUND - BLACK Frame GREEN Lenses 51mm Non-Polarized ',
                'price'=> '40',
                'photo'=> 'rayban_justin_gris_argentDegrade.jpg',
                'writer_id'=> '2',
                'offer'=> '50%',
                'glassesModel'=> 'rayban_justin_gris_argentDegrade',
            ],
            [
                'title'=> 'Erika marron sunglasses',
                'describe'=> '100% UV PROTECTION: To protect your eyes from harmful UV rays,D',
                'price'=> '100',
                'photo'=> 'rayban_ferrari_blue_bleu_mirror_chromance.jpg',
                'writer_id'=> '2',
                'offer'=> '50%',
                'glassesModel'=> 'rayban_ferrari_blue_bleu_mirror_chromance',
            ],
            [
                'title'=> 'Nadarty Metal cateye with brow bar',
                'describe'=> ' ',
                'price'=> '130',
                'photo'=> 'rayban_cockpit_noir_vert_gradient_flash.jpg',
                'writer_id'=> '2',
                'offer'=> '50%',
                'glassesModel'=> 'rayban_cockpit_noir_vert_gradient_flash',
            ],
            [
                'title'=> 'Nadarty Metal cateye with brow bar',
                'describe'=> 'Ray-Ban CLUBROUND - BLACK Frame GREEN Lenses 51mm Non-Polarized ',
                'price'=> '250',
                'photo'=> 'rayban_cockpit_noir_bleu_gradient_flash.jpg',
                'writer_id'=> '2',
                'offer'=> '10%',
                'glassesModel'=> 'rayban_cockpit_noir_bleu_gradient_flash',
            ],

            [
                'title'=> 'chirs gris argent',
                'describe'=> 'The Plastic lenses and Full Rim . and also durable frames',
                'price'=> '250',
                'photo'=> 'rayban_cockpit_gun_vert_classique.jpg',
                'writer_id'=> '2',
                'offer'=> '40%',
                'glassesModel'=> 'rayban_cockpit_gun_vert_classique',
            ],
            [
                'title'=> 'vertclassique',
                'describe'=> 'Ray-Ban CLUBROUND - BLACK Frame GREEN Lenses 51mm Non-Polarized ',
                'price'=> '50',
                'photo'=> 'rayban_justin_havane_marronDegrade.jpg',
                'writer_id'=> '2',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_justin_havane_marronDegrade',
            ],
            [
                'title'=> 'havane_bleu_vert_degrade',
                'describe'=> 'Lenses are prescription ready (rx-able)',
                'price'=> '50',
                'photo'=> 'rayban_new_wayfarer_havane_bleu_vert_degrade.jpg',
                'writer_id'=> '2',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_new_wayfarer_havane_bleu_vert_degrade',
            ],
            [
                'title'=> 'black-green-mirror-silver',
                'describe'=> 'Ray-Ban Women\'s RB_4171_600068 Sunglasses  Brown  54-18-145',
                'price'=> '50',
                'photo'=> 'ray-ban-chris-black-green-mirror-silver.jpg',
                'writer_id'=> '2',
                'offer'=> '30%',
                'glassesModel'=> 'ray-ban-chris-black-green-mirror-silver',
            ],
            [
                'title'=> 'Canvan or vertclassique',
                'describe'=> ' The Plastic lenses and Full Rim . ',
                'price'=> '50',
                'photo'=> 'rayban_caravan_or_vert_classique.jpg',
                'writer_id'=> '2',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_caravan_or_vert_classique',
            ],
            [
                'title'=> 'bronze_cuivre_lilas_mirroir',
                'describe'=> 'sunglass W925 Men Women Sunglasses 58mm RB3025 (Green L0205  58) ',
                'price'=> '50',
                'photo'=> 'rayban_caravan_bronze_cuivre_lilas_mirroir.jpg',
                'writer_id'=> '2',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_caravan_bronze_cuivre_lilas_mirroir',
            ],
            [
                'title'=> 'justin_havane_gris',
                'describe'=> 'sunglass W925 Men Women Sunglasses 58mm RB3025 (Green L0205  58) ',
                'price'=> '50',
                'photo'=> 'rayban_justin_havane_gris.jpg',
                'writer_id'=> '3',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_justin_havane_gris',
            ],
            [
                'title'=> 'noir_vert_gradient_flash',
                'describe'=> 'sunglass W925 Men Women Sunglasses 58mm RB3025 (Green L0205  58) ',
                'price'=> '50',
                'photo'=> 'rayban_cockpit_noir_vert_gradient_flash.jpg',
                'writer_id'=> '3',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_cockpit_noir_vert_gradient_flash',
            ],
            [
                'title'=> 'vertclassique',
                'describe'=> 'sunglass W925 Men Women Sunglasses 58mm RB3025 (Green L0205  58) ',
                'price'=> '50',
                'photo'=> 'rayban_clubround_noir_vertClassique_g15.jpg',
                'writer_id'=> '3',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_clubround_noir_vertClassique_g15',
            ],
            [
                'title'=> 'wayfarer_biColorNoirJaune_jauneFlash.',
                'describe'=> '100% UV PROTECTION: To protect your eyes from harmful UV rays ',
                'price'=> '50',
                'photo'=> 'rayban_wayfarer_biColorNoirJaune_jauneFlash.jpg',
                'writer_id'=> '3',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_wayfarer_biColorNoirJaune_jauneFlash',
            ],
            [
                'title'=>'round_or_ver',
                'describe'=> '100% UV PROTECTION: To protect your eyes from harmful UV rays ',
                'price'=> '50',
                'photo'=> 'rayban_round_or_ver.jpg',
                'writer_id'=> '3',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_round_or_ver',
            ],
            [
                'title'=> 'violet mirror',
                'describe'=> 'Case included.Absorbs 85% ',
                'price'=> '50',
                'photo'=> 'rayban_justin_violet_violetMirroir.jpg',
                'writer_id'=> '3',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_justin_violet_violetMirroir',
            ],
            [
                'title'=> 'round gun sunglasses',
                'describe'=> 'Case included.Absorbs 85%/round blue',
                'price'=> '50',
                'photo'=> 'rayban_round_gun_grisDegrade.jpg',
                'writer_id'=> '3',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_round_gun_grisDegrade',
            ],
            [
                'title'=> 'Noir_marronClassique_b15',
                'describe'=> 'Case included.Absorbs 85%/red  ',
                'price'=> '50',
                'photo'=> 'rayban_round_gun_grisDegrade.jpg',
                'writer_id'=> '3',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_round_gun_grisDegrade',
            ],
            [
                'title'=> 'doubleBridge_bleu_gradient_flash',
                'describe'=> 'Wings II Sunglassesas item comes with a protective case. ',
                'price'=> '50',
                'photo'=> 'rayban_doubleBridge_bleu_gradient_flash.jpg',
                'writer_id'=> '3',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_doubleBridge_bleu_gradient_flash',
            ],
            [
                'title'=> 'vertclassique',
                'describe'=> 'Case included.Absorbs 85%/vert ',
                'price'=> '50',
                'photo'=> 'rayban_doubleBridge_bleu_gradient_flash.jpg',
                'writer_id'=> '3',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_doubleBridge_bleu_gradient_flash',
            ],
            [
                'title'=> 'aviator or ros',
                'describe'=> 'Case included.Absorbs 85%/ros ',
                'price'=> '50',
                'photo'=>'rayban_aviator_or_ros.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_aviator_or_rose',
            ],
            [
                'title'=> 'hanva vert',
                'describe'=> 'Case included.Absorbs 85% /green ',
                'price'=> '50',
                'photo'=> 'ray-ban-Spotted-Havana-vert.jpeg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'marshal_gun_marrondegrademiroir',
            ],
            [
                'title'=> 'noir gun argent',
                'describe'=> 'Ray-Ban Cockpit Sunglasses RB3362 001-56 - Arista Frame  Crystal Green ',
                'price'=> '50',
                'photo'=> 'rayban_chris_noir_gun_argent_ mirroir.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_chris_noir_gun_argent_mirroir',
            ],
            [
                'title'=> 'vertclassique',
                'describe'=> 'Ray-Ban Cockpit Sunglasses RB3362 001-56 - Arista Frame  Crystal Green',
                'price'=> '50',
                'photo'=> 'rayban_andy_havane_argent_flash.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_andy_havane_argent_flash',
            ],
            [
                'title'=> 'hanva blue',
                'describe'=> 'Ray-Ban Cockpit Sunglasses RB3362 001-56 - Arista Frame  Crystal hanve ',
                'price'=> '50',
                'photo'=> 'carrera_118S_havane_blue.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'carrera_118S_havane_blue',
            ],
            [
                'title'=> '_5029_havana_blue',
                'describe'=> 'Ray-Ban RB3447/blue ',
                'price'=> '50',
                'photo'=> 'carrera_5029_havana_blue.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'carrera_5029_havana_blue',
            ],
            [
                'title'=> 'hanvan marron for women',
                'describe'=> ' Ray-Ban RB3447/marron',
                'price'=> '50',
                'photo'=> 'carrera_118S_havane_marron.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'carrera_118S_havane_marron',
            ],
            [
                'title'=> 'clubmasterFleck_havaneNoir',
                'describe'=> 'Ray-Ban RB3447/Noir ',
                'price'=> '50',
                'photo'=> 'rayban_clubmasterFleck_havaneNoir_vert.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_clubmasterFleck_havaneNoir_vert',
            ],
            [
                'title'=> 'marronDegrade',
                'describe'=> 'Ray-Ban RB3447/marron plastic ',
                'price'=> '50',
                'photo'=> 'rayban_justin_havane_marronDegrade.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_justin_havane_marronDegrade',
            ],
            [
                'title'=> 'justin_gris_argentDegrade',
                'describe'=> ' Ray-Ban RB3447/gris degrade ',
                'price'=> '50',
                'photo'=> 'rayban_justin_gris_argentDegrade.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_justin_gris_argentDegrade',
            ],
            [
                'title'=> 'ferrari_noir_or_mirror_chromance',
                'describe'=> 'Ray-Ban RB3447/noir ',
                'price'=> '50',
                'photo'=> 'rayban_ferrari_noir_or_mirror_chromance.jpg',
                'writer_id'=> '1',
                'offer'=> '30%',
                'glassesModel'=> 'rayban_ferrari_noir_or_mirror_chromance',
            ],

        ];
        foreach ($product as $key => $value) {
            Product::create($value);
        }
        ///////////////////End Create Product//////////////////////////
        ///////////////////Start Create Category//////////////////////////
        $category = [
            [
                'title'=> 'Sports sunglasses',
                'description'=> 'Available (black,white) only
                    Plastic material, polarized lenses supplied with hard case& plastic bag
                    Full protection from sun light',
                'slug'=> 'h1',
            ],
            [
                'title'=> 'Uni- Sex sunglasses',
                'description'=> 'Suitable for men &women Metal Grey lenses rimless sunstyle Features : Roundly frames & polarized lenses material ',
                'slug'=> 'h2',
            ],
            [
                'title'=> 'Beach sunglasses',
                'description'=> 'Case included.Absorbs 85% of visible light and blocking out most of the blue light',
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
                'title' => 'Nadarty Store is here for your elegance',
                'description' => 'Pleaze !! Try Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> ' sunglasses at night song , sunglasses and advil ,  sunglasses balenciaga ',
                'mycontent' => 'The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON

Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands.
    You do not have to sacrifice style to buy from Nadarty Store  Beauty is in the eyes of the beholder!
    Failing to see without them.
    I look spectacular.
    It is not so good to have a clear picture.
    I actually wear glasses because I need them to see.
    Wearing Glasses doesn\'t mean you have much more knowledge.
    Glasses are for better vision, unfortunately nobody sees it.
    Four eyes are better than two.
    Lifeis too short to wear boring glasses.
    Inseparable friend.
    Blame yourself for the unpleasant things.
    Men seldom make passes, at girls who wear glasses.
    Glasses maketh a real man.
    Glasses make you beautiful?
        Being sick feels like youare wearing someone else is glasses.
    Advise and reality don\'t match.
With the right glasses, a girl can conquer the world.
    The things we see with glasses.
    My eyes don\'t work, but at least I look smart.
    People have a tendency to see country life through rose-coloured glasses.
    The importance of the glasses.
    I can\'t think without my glasses.
    Friends To borrow my books and set wet glasses on them.
    Hiding behind glasses.',
                'category_id' => '1',
                'writer_id' => '1',
                'slug' => 'p1',
                'photo' => 'sun.jpg',
            ],
            [
                'title' => 'you can know more about our brand easily',
                'description' => 'Beauty with sunglasses is a form of protective eyewear designed primarily to prevent bright sunlight and high-energy visible light from damaging or discomforting the eyes. ',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glasses',
                'mycontent' => 'They said carrots would be good for my eyes,they lied.
    Beauty is in the eyes of the beholder!
    Failing to see without them.
    I look spectacular.
    It is not so good to have a clear picture.
    I actually wear glasses because I need them to see.
    Wearing Glasses doesn\'t mean you have much more knowledge.
    Glasses are for better vision, unfortunately nobody sees it.
    Four eyes are better than two.
    Life is too short to wear boring glasses.
    Inseparable friend.
    Blame yourself for the unpleasant things.
    Men seldom make passes, at girls who wear glasses.
    Glasses maketh a real man.
    Glasses make you beautiful?
        Being sick feels like you are wearing someone elseis glasses.
    Advise and reality don\'t match.
With the right glasses, a girl can conquer the world.
    The things we see with glasses.
    My eyes don\'t work, but at least I look smart.
    People have a tendency to see country life through rose-coloured glasses.
    The importance of the glasses.
    I can\'t think without my glasses.
    Friends To borrow my books and set wet glasses on them.
    Hiding behind glasses.
    Glasses are just for proper eyesight. Anything else is pure silliness.
    I got 99 problems and the right pair of glasses solved, like, 90 of them.
Do not allow people to dim your shine because they are blinded. Tell them to put on some sunglasses because we were born this way.
For your eyes only. We are here for you only.
    Come and get sunglasses customized to your liking.
    Being fond of sunglasses is a good thing.
    Shade your eyes from the heat and glare of the sun.
    Focus on what matters, like a good pair of shades.
    Sunglasses to suit everyone. Anywhere. Any time.
    The best protection money can buy.
    Get the right shades from us.
    Fall in love with the style and the safety of our sunglasses.
    Putting on a new pair of glasses or sunglasses is a simple way to completely transform your look isjust like a new hairstyle.
    Indulge yourself to buy a pair.
    Thereis no such thing as too many pairs of sunglasses.
    Each shade is specially designed.
    Now, look at the sun freely with your sunglasses on.
    Ihave got bright ideas.
    Sometimes you just have to bite your upper lip and put sunglasses on.
    A must-have accessory with your summer wear.
    Wear safety and style together.
    Always have sunglasses with you. Theyare great for when you can\'t be bothered to put makeup on.
    Look sassier with these glares.
For that photo of your fanciest pair of sunglasses.
    Sunglasses are great for when you can\'t be bothered.',
                'category_id' => '2',
                'writer_id' => '1',
                'slug' => 'p2',
                'photo' => 'sunglasses3.jpg',
            ],
            [
                'title' => 'sunglasses3',
                'description' => 'Try ourglasses,Get the right shades from us.
    Where fashion and eye care meet ',
                'keywords'=> 'sunglasses for men sunglasses balenciaga ',
                'mycontent' => 'The coolest sunglasses for the hottest look from Nadarty Store.
    Now anyone can own a pair for sure.
                                  Each hairstyle needs a different sunglass.
    These glares are more than just accessories.
    The sunglasses that were made with you in mind.
    Sunglasses are spectacles in disguise.
    The coolest sunglasses to make you look hot.
    Protection that is so very affordable.
    Get the right shades from us.
    Where fashion and eye care meet.
    Sunglasses to suit everyone. Anywhere. Any time.
    Complete your look with a pair of sunglasses.
    Even your simplest clothes will look different when you wear these sunglasses.
For your eyes only. We are here for you only.
    Being fond of sunglasses is a good thing.
    Now, look at the sun freely with your sunglasses on.
    The anti-glares you always wanted.
    We make the shades that you so desire.
    Look hot, stay cool. Be safe. Live good.
    Fall in love with the style and the safety of our sunglasses.
    Wear the glasses that enhance your personality.
    A sunglass that goes with any look.
    Look sassier with these glares.
    Remain safe, remain in style.
    You will be obsessed with our range of sunglasses.
    Get a new perspective. Get a pair of sunglasses.
    Sunglasses are a must both for your style and your protection.
    A must-have accessory with your summer wear.
    We have the perfect sunglass for each one of you.
    The perfect sunglasses from the house that specializes in shades.
    Wear what you love. Sunglasses.
    Each shade will change your look.
    The anti-glare glares that care for your eyes.
    Expect the best protection from us.
    Shade your eyes from the heat and glare of the sun.
    We spoil you with stylish sunglasses.
    The best protection money can buy.
    Come and get sunglasses customized to your liking.
    The most sophisticated eyewear in town.
    Our shades compliment your looks.
    You are incomplete without a pair of sunglasses.
    Protection at its best.
    Get fashionable eyewear from us.
    Let the sunshine bright. My eyes are protected.
A guilty pleasure that will help you amass a wealth of shades.
    Each shade is specially designed.
    Shades that define you. and you who defines shades.
    Wear your eyeshades and look amazing.
    Make your eyewear your fashion statement.
    The sunscreen for your eyes  our sunglasses.
    Indulge yourself to buy a pair.
    The most affordable protection your eyes could ever have.
    Sunglasses to complement your face.
    In this heat get a cool look. Wear anti-glares.
    Sunglasses that love you for wearing them.
    Hide the sun from reaching your eyes.
    Specs that are fashionable and come in various shades.
    When accessories turn out to be essentials.
    Let us protect your eyes with the best sunglasses.
    Your smile makes our sunglasses look more beautiful.
    Spectacles with a different power to protect our eyes.
    A pair of sunglasses to carry with you wherever you go.
    Wear safety and style together.
    With these sunglasses, you won\'t even need any makeup at all.
    The sunglasses that protect your eyes.
    Come to us and let us style you into perfection.
    Visit us for the perfect shades.
    Protection and affordability are our only 2 mottos.
    Visit us for the perfect style that will also protect your eyes.
    The best range of glares is here finally.
Pic a pair of glares and wear them with pride.
    Your appreciation for eye care shows in your collection of sunglasses.
    Wear the sunglasses you love. And be loved by all.
    Let your sunglasses say volumes about you.',
                'category_id' => '1',
                'writer_id' => '1',
                'slug' => 'p3',
                'photo' => 'sunglasses1.jpg',
            ],
            [
                'title' => 'All you need to know about our sunglasses from Nadarty Store',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'Nadartystore,sunglasses,prescriptive glassessunglasses , sunglasses balenciaga ',
                'mycontent' => 'The sunglasses that protect your eyes.
    Come to us and let us style you into perfection.
    Visit us for the perfect shades.
    Protection and affordability are our only 2 mottos.
    Visit us for the perfect style that will also protect your eyes.
    The best range of glares is here finally.
Pic a pair of glares and wear them with pride.
    Your appreciation for eye care shows in your collection of sunglasses.
    Wear the sunglasses you love. And be loved by all.
    Let your sunglasses say volumes about you The Styles You Want It\'s not amagic but pretty Close See your self in your favorite frames with Our Virtual mirror Try _ON

Now you Can find Quality eye glasses and Sunglasses Online ,We take style very seriously. As you browse our inventory of designer-like wholesale sunglasses, we are confident you will find exactly those styles you want. Whether you are looking for classic frames in black or the hottest trends lighting up the market right now, our sunglasses offer you a complete selection covering more than two dozen brands.
 You do not have to sacrifice style to buy from Nadarty Store.',
                'category_id' => '2',
                'writer_id' => '2',
                'slug' => 'p4',
                'photo' => 'sunglasses2.jpg',
            ],
            [
                'title' => 'sunglasses5',
                'description' => 'Our Virtualglasses tool lets you try on as many pairs as you like',
                'keywords'=> 'sunglasses aviators , sunglasses at night song , sunglasses and advil ,sunglasses balenciaga ',
                'mycontent' => 'Four eyes are better than two.
To hide some happiness from your face.
Life is too short for boring glasses.
Every girl is beautiful but girls who wear glasses is love.
Self-confidence is the best outfit. Rock it & Own It.
Hiding behind glasses.
Beauty is in the eyes of the beholder!
With the right glasses, a girl can conquer the world.
Sunglasses are great for when you can\'t be bothered.
My glasses say a lot about me because I think me in a pair of sunglasses is an image that a lot of people would recognize.
Lifeis too short to wear boring glasses.
Stay shady.
Sometimes, all you need is a new perspective.
I can\'t think without my glasses.
Do not expect the world to look bright, if you habitually wear gray-brown glasses.
Glasses are just for proper eyesight. Anything else is pure silliness.
I look spectacular.
Blame yourself for the unpleasant things.
Be SPECtacular.
Glowing with the flow.
Iam like a sunflower. I point myself in the direction of sunshine and grow from there.
Talk nerdy to me.
Failing to see without them.
Itis a vibe, babe.
Don\'t study me you won\'t graduate.
I can\'t think without my glasses .
Glasses are for better vision, unfortunately nobody sees it.
Growing up, I was a nerd. With actual taped eyeglasses.
Advise and reality don\'t match.
People have a tendency to see country life through rose-colored glasses.
Women have served all these centuries as looking glasses possessing the power of reflecting the figure of man at twice its natural size.
The shade is real.
The greatest magnifying glasses in the world are a manis own eyes when they look upon his own person.
Daydreaming about you.
After a close look, I like you even less.
Ihave got bright ideas.
The moon is like a bar, we all fill our glasses the way we can.
Being sick feels like youare wearing someone elseis glasses.
Sometimes all you need is a new perspective.
I have specs appeal.
Men seldom make passes, at girls who wear glasses.
Don\'t call the world dirty because you forgot to clean your glasses.
One happy camper.
A simple, well-proven surgery can restore sight to millions, and something even simpler, a pair of glasses, can make millions more see.
My future\'s looking real bright.
I like a lot of glasses about  it highers the tone.
I can\'t think without my glasses.
My eyes don\'t work, but at least I look smart.
You are only three or four hours from taking your glasses off for keeps.
They say, Love is blinding,so thatis why Iam wearing sunglasses.
I actually wear glasses because I need them to see.
Salty, but sweet.
A celebrity is a person who works hard all of their life to become well known, and then wears dark glasses to avoid being recognized.See the world through rose-colored glasses.
Wearing Glasses doesn\'t mean you have much more knowledge.
When people think about computer science, they imagine people with pocketprotectors and thick glasses who code all night.
When you change the way you look at things, the things you look at change.
I can see clearly now.??',
                'category_id' => '3',
                'writer_id' => '2',
                'slug' => 'p5',
                'photo' => 'sunglasses4.jpg',
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
        ///////////////////Start Create Reviews//////////////////////////
        $reviews = [
            [
                'user_id'=>'1',
                'product_id'=>'1',
                'comment'=>'Very Good',
                'review'=>'5',
            ],
            [
                'user_id'=>'1',
                'product_id'=>'2',
                'comment'=>'nice',
                'review'=>'4',
            ],
            [
                'user_id'=>'1',
                'product_id'=>'3',
                'comment'=>'Good!!',
                'review'=>'3',
            ],
            [
                'user_id'=>'1',
                'product_id'=>'4',
                'comment'=>'Not good enough',
                'review'=>'2',
            ],
            [
                'user_id'=>'2',
                'product_id'=>'1',
                'comment'=>'Cool',
                'review'=>'4',
            ],
            [
                'user_id'=>'2',
                'product_id'=>'2',
                'comment'=>'Amazing',
                'review'=>'4',
            ],
            [
                'user_id'=>'2',
                'product_id'=>'3',
                'comment'=>'I Loved it',
                'review'=>'3',
            ],
            [
                'user_id'=>'3',
                'product_id'=>'1',
                'comment'=>'ooh nice ',
                'review'=>'3',
            ],
            [
                'user_id'=>'3',
                'product_id'=>'2',
                'comment'=>'WOW,I recommend',
                'review'=>'4',
            ],
            [
                'user_id'=>'4',
                'product_id'=>'2',
                'comment'=>'',
                'review'=>'3',
            ],

        ];
        foreach ($reviews as $key => $value) {
            Review::create($value);
        }
        ///////////////////End Create Reviews//////////////////////////
    }
}
