<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "Charizard",
            'set' => 'Base Set',
            'description' => '1st Edition - Holo Rare - Mint Condition',
            'image' => 'charizard.jpg',
            'price' => 74.99,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "Mewtwo & Mew GX",
            'set' => 'Unified Minds',
            'description' => 'Utra Rare - Mint Condition',
            'image' => 'mewtwo&mewGX.jpg',
            'price' => 24.99,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "Arceus & Dialga & Palkia GX",
            'set' => 'Cosmic Eclipse',
            'description' => 'Secret Rare - Mint Condition',
            'image' => 'arceus&dialga&palkiaGX.jpg',
            'price' => 29.99,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "Chaos Emperor Dragon - Envoy of the End",
            'set' => 'Invasion of Chaos',
            'description' => '1st Edition - Secret Rare - Mint Condition',
            'image' => 'chaos_emperor_dragon_envoy_of_the_end.jpg',
            'price' => 89.99,
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Mystic Mine",
            'set' => 'Dark Neostorm',
            'description' => '1st Edition - Super Rare - Mint Condition',
            'image' => 'mystic_mine.jpg',
            'price' => 1.49,
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Self-Destruct Button",
            'set' => 'Invasion of Chaos',
            'description' => 'Common - Mint Condition',
            'image' => 'self_destruct_button.jpg',
            'price' => 0.49,
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Black Lotus ",
            'set' => 'Oversized 6x9 Promos',
            'description' => 'Special - Mint Condition',
            'image' => 'black_lotus.jpg',
            'price' => 129.99,
            'category_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => "Nightmare Moon // Princess Luna",
            'set' => 'Ponies: The Galloping',
            'description' => 'Special - Mint Condition',
            'image' => 'nightmare_moon.jpg',
            'price' => 34.99,
            'category_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => "Emrakul, the Aeons Torn",
            'set' => 'Masters 25',
            'description' => 'Mythic - Mint Condition',
            'image' => 'emrakul_the_aeons_torn.jpg',
            'price' => 18.99,
            'category_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => "Fluttershy *Hide and Squeak*",
            'set' => 'Absolute Discord',
            'description' => 'Ultra Rare - Mint Condition',
            'image' => 'fluttershy.jpg',
            'price' => 1.99,
            'category_id' => 4,
        ]);

        DB::table('products')->insert([
            'name' => "Rarity *Fashion Mogul* // Rarity *Fashion Mogul*",
            'set' => 'Defenders of Equestria',
            'description' => 'Common - Mint Condition',
            'image' => 'rarity.jpg',
            'price' => 0.99,
            'category_id' => 4,
        ]);

        DB::table('products')->insert([
            'name' => "Princess Celestia *Gambit Planner*",
            'set' => 'The Crystal Games',
            'description' => 'Promo - Mint Condition',
            'image' => 'princess_celestia.jpg',
            'price' => 4.99,
            'category_id' => 4,
        ]);

        DB::table('products')->insert([
            'name' => "Jar Jar Binks - Clumsy Outcast",
            'set' => 'Legacies',
            'description' => 'Rare - Mint Condition',
            'image' => 'jar_jar_binks.jpg',
            'price' => 0.09,
            'category_id' => 5,
        ]);

        DB::table('products')->insert([
            'name' => "Jabba the Hutt - Influential Kingpin",
            'set' => 'Convergence',
            'description' => 'Legendary - Mint Condition',
            'image' => 'jabba_the_hutt.jpg',
            'price' => 5.99,
            'category_id' => 5,
        ]);

        DB::table('products')->insert([
            'name' => "C-3PO - Perfect Gentleman",
            'set' => 'Spark of Hope',
            'description' => 'Legendary - Mint Condition',
            'image' => 'c3po.jpg',
            'price' => 12.99,
            'category_id' => 5,
        ]);

        DB::table('products')->insert([
            'name' => "Shellmon",
            'set' => 'Series 1 Booster',
            'description' => 'Uncommon - Mint Condition',
            'image' => 'shellmon.jpg',
            'price' => 4.99,
            'category_id' => 6,
        ]);

        DB::table('products')->insert([
            'name' => "Garbagemon",
            'set' => 'Series 2 Booster',
            'description' => 'Rare - Mint Condition',
            'image' => 'garbagemon.jpg',
            'price' => 6.99,
            'category_id' => 6,
        ]);

        DB::table('products')->insert([
            'name' => "Deltamon",
            'set' => 'Series 3 Booster',
            'description' => 'Common - Mint Condition',
            'image' => 'deltamon.jpg',
            'price' => 1.99,
            'category_id' => 6,
        ]);

        DB::table('products')->insert([
            'name' => "Tien Shinhan, Returning Fire",
            'set' => 'Series 6 Pre-Release Promos',
            'description' => 'Common - Mint Condition',
            'image' => 'tien.jpg',
            'price' => 7.99,
            'category_id' => 7,
        ]);

        DB::table('products')->insert([
            'name' => "Master Roshi, Masterly Majesty",
            'set' => 'Malicious Machinations: Pre-Release Promos',
            'description' => 'Rare - Mint Condition',
            'image' => 'roshi.jpg',
            'price' => 3.99,
            'category_id' => 7,
        ]);

        DB::table('products')->insert([
            'name' => "Android 18, Speedy Substitution",
            'set' => 'Malicious Machinations',
            'description' => 'Super Rare - Mint Condition',
            'image' => 'android.jpg',
            'price' => 5.99,
            'category_id' => 7,
        ]);

        DB::table('products')->insert([
            'name' => "Golden Snitch",
            'set' => 'Quidditch Cup Expansion',
            'description' => 'Rare - Mint Condition',
            'image' => 'golden_snitch.jpg',
            'price' => 16.99,
            'category_id' => 8,
        ]);

        DB::table('products')->insert([
            'name' => "Peeves Causes Trouble",
            'set' => 'Base Set',
            'description' => 'Uncommon - Mint Condition',
            'image' => 'peeves.jpg',
            'price' => 9.99,
            'category_id' => 8,
        ]);

        DB::table('products')->insert([
            'name' => "Hagrid, Keeper of Keys",
            'set' => 'Diagon Alley Expansion',
            'description' => 'Rare - Mint Condition',
            'image' => 'hagrid.jpg',
            'price' => 14.99,
            'category_id' => 8,
        ]);

        DB::table('products')->insert([
            'name' => "Darylanzer Hydro Beyblade",
            'set' => 'Beyblade Collision',
            'description' => 'Common - Mint Condition',
            'image' => 'darylanzer.jpg',
            'price' => 2.99,
            'category_id' => 9,
        ]);

        DB::table('products')->insert([
            'name' => "Tyson Eager Champion",
            'set' => 'Beyblade Collision',
            'description' => 'Common - Mint Condition',
            'image' => 'tyson.jpg',
            'price' => 3.99,
            'category_id' => 9,
        ]);

        DB::table('products')->insert([
            'name' => "Kinapping",
            'set' => 'Beyblade Collision',
            'description' => 'Common - Mint Condition',
            'image' => 'kidnapping.jpg',
            'price' => 1.99,
            'category_id' => 9,
        ]);

        DB::table('products')->insert([
            'name' => "Cool Dog",
            'set' => 'Finn vs. Jake',
            'description' => 'Common - Mint Condition',
            'image' => 'cool_dog.jpg',
            'price' => 11.99,
            'category_id' => 10,
        ]);

        DB::table('products')->insert([
            'name' => "The Pig",
            'set' => 'Finn vs. Jake',
            'description' => 'Common - Mint Condition',
            'image' => 'the_pig.jpg',
            'price' => 24.99,
            'category_id' => 10,
        ]);

        DB::table('products')->insert([
            'name' => "Sun King",
            'set' => 'For the Glory! Booster',
            'description' => 'Foil Rare - Mint Condition',
            'image' => 'sun_king.jpg',
            'price' => 66.99,
            'category_id' => 10,
        ]);

    }
}
