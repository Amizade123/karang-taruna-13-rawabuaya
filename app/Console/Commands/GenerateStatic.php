<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Contracts\Http\Kernel;

class GenerateStatic extends Command
{
    protected $signature = 'static:generate {--output=dist : Output directory}';
    protected $description = 'Generate static HTML files for Vercel deployment';

    public function handle(Kernel $kernel): void
    {
        $output = base_path($this->option('output'));
        $this->info("Generating static site to: {$output}");

        $pages = [
            '/'                     => 'index.html',
            '/tentang'              => 'tentang/index.html',
            '/kegiatan'             => 'kegiatan/index.html',
            '/proker'               => 'proker/index.html',
            '/galeri'               => 'galeri/index.html',
            '/struktur-organisasi'  => 'struktur-organisasi/index.html',
            '/kontak'               => 'kontak/index.html',
        ];

        foreach ($pages as $uri => $file) {
            $this->line("  Rendering {$uri}...");

            $request = Request::create($uri, 'GET');
            $response = $kernel->handle($request);
            $html = $response->getContent();

            $filepath = $output . '/' . $file;
            $dir = dirname($filepath);
            if (!is_dir($dir)) {
                mkdir($dir, 0755, true);
            }

            file_put_contents($filepath, $html);
            $size = round(strlen($html) / 1024, 1);
            $this->line("    → {$file} ({$size} KB)");

            $kernel->terminate($request, $response);
        }

        $this->info('Copying public assets...');
        $this->copyDir(public_path('images'), $output . '/images');
        $this->copyDir(public_path('build'), $output . '/build');
        if (file_exists(public_path('favicon.ico'))) {
            copy(public_path('favicon.ico'), $output . '/favicon.ico');
        }

        $total = $this->dirSize($output);
        $this->info("✅ Static site generated in {$output}/ ({$total} MB)");
    }

    private function copyDir(string $src, string $dst): void
    {
        if (!is_dir($src)) return;
        if (!is_dir($dst)) mkdir($dst, 0755, true);

        $items = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($src, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($items as $item) {
            $target = $dst . '/' . $items->getSubPathname();
            if ($item->isDir()) {
                if (!is_dir($target)) mkdir($target, 0755, true);
            } else {
                copy($item, $target);
            }
        }
    }

    private function dirSize(string $dir): string
    {
        $size = 0;
        $items = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($dir, \RecursiveDirectoryIterator::SKIP_DOTS)
        );
        foreach ($items as $item) {
            $size += $item->getSize();
        }
        return round($size / 1024 / 1024, 1);
    }
}
