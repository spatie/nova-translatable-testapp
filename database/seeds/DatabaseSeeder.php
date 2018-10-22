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

        $post->setTranslations('title', [
            'nl' => 'mijn testpost titel',
            'en' => 'my testpost title',
        ]);


        $post->setTranslations('text', [
            'nl' => 'mijn testpost tekst',
            'en' => 'my testpost text',
        ]);

        $post->save();
    }
}
