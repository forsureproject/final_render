<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;
use League\Flysystem\UrlGeneration\PublicUrlGenerator;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */

    protected $description = "Generate Sitemap for current Website";


    /**
     * Execute the console command.
     */

     public function handle()
     {
         $filename = 'sitemap.xml';

         try {
             if (file_exists(public_path($filename))) {
                 $backupFilename = '_backup_' . now()->format('Ymd_His_') . $filename;
                 chmod(public_path($filename), 0777);
                 rename(public_path($filename), public_path($backupFilename));
             }

             SitemapGenerator::create(config('app.url'))
                 ->getSitemap()
                 ->writeToFile(public_path($filename));
         } catch (\Throwable $e) {
             $this->error('Sitemap could not be generated: ' . $e->getMessage());
         }

         $this->info('Sitemap generated successfully');
     }

}
