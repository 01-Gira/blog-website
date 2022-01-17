<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();



        // \App\Models\Post::factory(3)->create();

        User::create([
            'name' => 'Gira Muhammad Nur Icharisma',
            'username' => 'gira',
            'email' => 'giramnk@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Alvi',
        //     'email' => 'alvi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
            
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, possimus?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem vel quasi aperiam fuga minima rem, atque itaque earum temporibus ducimus molestiae omnis libero architecto rerum necessitatibus eos debitis? Officia necessitatibus vel odio eum, nam accusamus reprehenderit deserunt at natus labore recusandae laborum repudiandae alias minus rem mollitia consectetur perferendis illum?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, eligendi. Magni deserunt expedita aliquid. Placeat, ab eligendi praesentium doloribus quod optio odit provident? Tenetur nobis, sint ullam praesentium illum eveniet rem animi nesciunt nisi possimus enim natus quo, repellat corrupti doloribus assumenda commodi cum explicabo dolor ex error fuga esse?</p>',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, possimus?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem vel quasi aperiam fuga minima rem, atque itaque earum temporibus ducimus molestiae omnis libero architecto rerum necessitatibus eos debitis? Officia necessitatibus vel odio eum, nam accusamus reprehenderit deserunt at natus labore recusandae laborum repudiandae alias minus rem mollitia consectetur perferendis illum?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, eligendi. Magni deserunt expedita aliquid. Placeat, ab eligendi praesentium doloribus quod optio odit provident? Tenetur nobis, sint ullam praesentium illum eveniet rem animi nesciunt nisi possimus enim natus quo, repellat corrupti doloribus assumenda commodi cum explicabo dolor ex error fuga esse?</p>',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, possimus?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem vel quasi aperiam fuga minima rem, atque itaque earum temporibus ducimus molestiae omnis libero architecto rerum necessitatibus eos debitis? Officia necessitatibus vel odio eum, nam accusamus reprehenderit deserunt at natus labore recusandae laborum repudiandae alias minus rem mollitia consectetur perferendis illum?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, eligendi. Magni deserunt expedita aliquid. Placeat, ab eligendi praesentium doloribus quod optio odit provident? Tenetur nobis, sint ullam praesentium illum eveniet rem animi nesciunt nisi possimus enim natus quo, repellat corrupti doloribus assumenda commodi cum explicabo dolor ex error fuga esse?</p>',
        //     'category_id' => 2,
        //     'user_id' =>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, possimus?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem vel quasi aperiam fuga minima rem, atque itaque earum temporibus ducimus molestiae omnis libero architecto rerum necessitatibus eos debitis? Officia necessitatibus vel odio eum, nam accusamus reprehenderit deserunt at natus labore recusandae laborum repudiandae alias minus rem mollitia consectetur perferendis illum?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, eligendi. Magni deserunt expedita aliquid. Placeat, ab eligendi praesentium doloribus quod optio odit provident? Tenetur nobis, sint ullam praesentium illum eveniet rem animi nesciunt nisi possimus enim natus quo, repellat corrupti doloribus assumenda commodi cum explicabo dolor ex error fuga esse?</p>',
        //     'category_id' => 2,
        //     'user_id' =>2
        // ]); 
    }
}
