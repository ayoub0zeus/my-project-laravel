<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Article;

class AddArticle extends Command
{
    protected $signature = 'article:add';
    protected $description = 'Add a new article';

   
    public function handle()
    {
        $title = $this->ask('Enter article title:');
        $content = $this->ask('Enter article content:');

        $article = new Article([
            'title' => $title,
            'content' => $content,
        ]);

        $article->save();

        $this->info('Article added successfully!');
    }
}
