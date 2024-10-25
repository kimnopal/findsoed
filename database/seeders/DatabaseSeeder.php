<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create([
            'name' => 'admin'
        ]);

        Role::create([
            'name' => 'user'
        ]);

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'Naufal Hakim',
            'username' => 'naotheone',
            'email' => 'naufal@example.com',
            'password' => bcrypt('password'),
            'role_id' => 2,
        ]);

        Post::create([
            'title' => 'Kehilangan Akal',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac tortor id eros suscipit mollis. Pellentesque quis sem tristique, commodo ante sit amet, pulvinar nulla. Maecenas convallis diam pulvinar, tempor nisl a, sodales massa. Curabitur pharetra massa sit amet metus fringilla lacinia. Ut vel venenatis nisi, at tempus arcu. Fusce nec tellus blandit nisi accumsan sagittis non in erat. Nullam ut suscipit neque, sit amet auctor enim. Curabitur tincidunt ut ligula ut cursus.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '081234567890',
            'status' => 'hilang',
            'user_id' => 2,
        ]);

        Post::create([
            'title' => 'Kehilangan seseorang yang dirindukan',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac tortor id eros suscipit mollis. Pellentesque quis sem tristique, commodo ante sit amet, pulvinar nulla. Maecenas convallis diam pulvinar, tempor nisl a, sodales massa. Curabitur pharetra massa sit amet metus fringilla lacinia. Ut vel venenatis nisi, at tempus arcu. Fusce nec tellus blandit nisi accumsan sagittis non in erat. Nullam ut suscipit neque, sit amet auctor enim. Curabitur tincidunt ut ligula ut cursus.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '081234567890',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Ditemukan topik tugas akhir',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac tortor id eros suscipit mollis. Pellentesque quis sem tristique, commodo ante sit amet, pulvinar nulla. Maecenas convallis diam pulvinar, tempor nisl a, sodales massa. Curabitur pharetra massa sit amet metus fringilla lacinia. Ut vel venenatis nisi, at tempus arcu. Fusce nec tellus blandit nisi accumsan sagittis non in erat. Nullam ut suscipit neque, sit amet auctor enim. Curabitur tincidunt ut ligula ut cursus.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '081234567890',
            'status' => 'temuan',
            'user_id' => 1,
        ]);
    }
}
