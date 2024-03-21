<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
      

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
           'name' => 'Rika Rahma Aulia',
           'username' => 'rikarahmaaulia',
            'email' => 'rikarahma151@gamil.com',
            'password' => bcrypt('password')
        ]);

         // User::create([
          //  'name' => 'Nasywa Sukria Hanifa',
          //  'email' => 'nasywahanifa128@gmail.com',
          //  'password' => bcrypt('12345')
       // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

      //  Post::create([
        //  'title' => 'Judul Pertama',
           // 'slug' => 'judul-pertama',
           // 'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quo maiores nemo maxime tenetur aliquam at aut',
           // 'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quo maiores nemo maxime tenetur aliquam at aut, nesciunt labore accusantium ab amet saepe temporibus, atque dolore aliquid dignissimos. Molestiae ducimus a tenetur aspernatur? Commodi at sed suscipit libero, fuga deserunt. Voluptates, facilis minima quaerat veniam vel, laboriosam qui, exercitationem incidunt maxime officiis doloribus dignissimos non? Numquam culpa delectus fuga quaerat corporis placeat explicabo et, nesciunt labore temporibus, cupiditate, deleniti magni esse sunt harum impedit sint! Aliquam optio sapiente vel odio animi, perferendis quidem consectetur sit magni voluptates voluptatum facere commodi eaque ipsa consequatur laudantium ad? A reiciendis rem incidunt atque!',
           // 'category_id' => 1,
           // 'user_id' => 1
       // ]);

       // Post::create([
         //   'title' => 'Judul Ke Dua',
           // 'slug' => 'judul-ke-dua',
        //  'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quo maiores nemo maxime tenetur aliquam at aut',
           //  'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quo maiores nemo maxime tenetur aliquam at aut, nesciunt labore accusantium ab amet saepe temporibus, atque dolore aliquid dignissimos. Molestiae ducimus a tenetur aspernatur? Commodi at sed suscipit libero, fuga deserunt. Voluptates, facilis minima quaerat veniam vel, laboriosam qui, exercitationem incidunt maxime officiis doloribus dignissimos non? Numquam culpa delectus fuga quaerat corporis placeat explicabo et, nesciunt labore temporibus, cupiditate, deleniti magni esse sunt harum impedit sint! Aliquam optio sapiente vel odio animi, perferendis quidem consectetur sit magni voluptates voluptatum facere commodi eaque ipsa consequatur laudantium ad? A reiciendis rem incidunt atque!',
           //  'category_id' => 1,
           //  'user_id' => 1
       //  ]);

      //   Post::create([
         //    'title' => 'Judul Ke Tiga',
            // 'slug' => 'judul-ke-tiga',
           //  'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quo maiores nemo maxime tenetur aliquam at aut',
            // 'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quo maiores nemo maxime tenetur aliquam at aut, nesciunt labore accusantium ab amet saepe temporibus, atque dolore aliquid dignissimos. Molestiae ducimus a tenetur aspernatur? Commodi at sed suscipit libero, fuga deserunt. Voluptates, facilis minima quaerat veniam vel, laboriosam qui, exercitationem incidunt maxime officiis doloribus dignissimos non? Numquam culpa delectus fuga quaerat corporis placeat explicabo et, nesciunt labore temporibus, cupiditate, deleniti magni esse sunt harum impedit sint! Aliquam optio sapiente vel odio animi, perferendis quidem consectetur sit magni voluptates voluptatum facere commodi eaque ipsa consequatur laudantium ad? A reiciendis rem incidunt atque!',
            // 'category_id' => 2,
            // 'user_id' => 1
        // ]);

        // Post::create([
           //  'title' => 'Judul Ke Empat',
            // 'slug' => 'judul-ke-empat',
            // 'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quo maiores nemo maxime tenetur aliquam at aut',
            // 'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quo maiores nemo maxime tenetur aliquam at aut, nesciunt labore accusantium ab amet saepe temporibus, atque dolore aliquid dignissimos. Molestiae ducimus a tenetur aspernatur? Commodi at sed suscipit libero, fuga deserunt. Voluptates, facilis minima quaerat veniam vel, laboriosam qui, exercitationem incidunt maxime officiis doloribus dignissimos non? Numquam culpa delectus fuga quaerat corporis placeat explicabo et, nesciunt labore temporibus, cupiditate, deleniti magni esse sunt harum impedit sint! Aliquam optio sapiente vel odio animi, perferendis quidem consectetur sit magni voluptates voluptatum facere commodi eaque ipsa consequatur laudantium ad? A reiciendis rem incidunt atque!',
            // 'category_id' => 2,
            // 'user_id' => 2
        // ]);


    }
}
