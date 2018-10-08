<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->create([
            'email' => 'freek@spatie.be',
        ]);

        $post = new Post();

        $post->title = 'testpost';

        $post->setTranslations('text', [
            'nl' => 'mijn testpost',
            'en' => 'my testpost',
        ]);

        $post->save();
    }
}
