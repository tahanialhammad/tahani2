<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        

        User::factory()
       ->has(Post::factory(2))
         ->create([
             'name' => 'Tahani',
             'email' => 'tahani@yahoo.com',
             'is_admin' =>true,

         ]);
    }





    // public function run(): void
    // {
    //     //creat topic first
    //     $this->call(TopicSeeder::class);
    //     $topics = Topic::all();

    //     $users = User::factory(10)
    //   //  ->has(Post::factory(2))
    //     ->create();

    //     // $posts= Post::factory(20)
    //     // ->has(Comment::factory(15)->recycle($users));
    //     // //$comments = Comment::factory(20)->recycle($users)->recycle($posts)->create();

    //     $posts = Post::factory(20)
    //     ->has(Comment::factory(15)->recycle($users))
    //     ->recycle([$users, $topics])
    //     ->create();



    //     User::factory()
    //    // ->has(Post::factory(2))
    //    ->has(Post::factory(5)->recycle($topics))
    //     ->has(Comment::factory(20)->recycle($posts))
    //     //one like for one post 
    //     ->has(Like::factory()->forEachSequence(
    //         // ['likeable_id' => $posts->first()],
    //         // ['likeable_id' => $posts->last()]
    //         //loop througth random posts
            
    //         ...$posts->random(15)->map(fn (Post $post) => ['likeable_id' => $post]),
    //     ))
    //     ->create([
    //         'name' => 'Tahani',
    //         'email' => 'tahani@yahoo.com',
    //         'is_admin' =>true,

    //     ]);
    // }



}
