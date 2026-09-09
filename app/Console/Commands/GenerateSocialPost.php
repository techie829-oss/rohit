<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateSocialPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'social:post {slug}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a LinkedIn/Twitter ready social media post from a blog slug';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $slug = $this->argument('slug');
        $blog = \App\Models\Blog::where('slug', $slug)->first();

        if (!$blog) {
            $this->error("Blog with slug '{$slug}' not found.");
            return;
        }

        $url = url('/blog/' . $blog->slug);
        $title = $blog->title;
        // Basic summary, stripping HTML tags and limiting length
        $summary = \Illuminate\Support\Str::limit(strip_tags($blog->content), 200);

        // Pre-defined set of tech hashtags
        $hashtags = "#Laravel #WebDevelopment #SaaS #TechLeadership #SoftwareEngineering";

        $post = "🚀 New Article Alert!\n\n"
              . "📝 {$title}\n\n"
              . "💡 {$summary}\n\n"
              . "Read the full guide here: {$url}\n\n"
              . "{$hashtags}";

        $this->info("=== Generated Social Media Post ===");
        $this->line($post);
        $this->info("===================================");
    }
}
