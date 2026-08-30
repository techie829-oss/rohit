<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\BlogCrudController;
use App\Models\Blog;

/*
|--------------------------------------------------------------------------
| Web Routes - Rohit Kumar Portfolio & Technical Applications
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/service-details', [HomeController::class, 'serviceDetails'])->name('services.details');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/project-details', [HomeController::class, 'projectDetails'])->name('projects.details');

// Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog-classic', [BlogController::class, 'classic'])->name('blog.classic');
Route::get('/blog-details', [BlogController::class, 'show'])->name('blog.details');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Contact Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Admin Authentication Routes (Protected with Anti-Bot Throttle)
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

// Protected Admin Portal Group (Requires Auth Middleware)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // Admin Blog CRUD
    Route::resource('blogs', BlogCrudController::class);
});

// Dynamic XML Sitemap for SEO & Generative AI Crawlers
Route::get('/sitemap.xml', function () {
    $blogs = Blog::where('is_published', true)->get();
    $baseUrl = url('/');

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    // Static Pages
    $pages = [
        '/' => ['priority' => '1.0', 'changefreq' => 'daily'],
        '/about' => ['priority' => '0.9', 'changefreq' => 'weekly'],
        '/services' => ['priority' => '0.9', 'changefreq' => 'weekly'],
        '/service-details' => ['priority' => '0.8', 'changefreq' => 'weekly'],
        '/projects' => ['priority' => '0.9', 'changefreq' => 'weekly'],
        '/project-details' => ['priority' => '0.8', 'changefreq' => 'weekly'],
        '/blog' => ['priority' => '0.9', 'changefreq' => 'daily'],
        '/blog-classic' => ['priority' => '0.8', 'changefreq' => 'daily'],
        '/contact' => ['priority' => '0.9', 'changefreq' => 'monthly'],
    ];

    foreach ($pages as $path => $meta) {
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . $path . '</loc>';
        $xml .= '<changefreq>' . $meta['changefreq'] . '</changefreq>';
        $xml .= '<priority>' . $meta['priority'] . '</priority>';
        $xml .= '</url>';
    }

    // Dynamic Blog URLs
    foreach ($blogs as $blog) {
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/blog/' . $blog->slug . '</loc>';
        $xml .= '<lastmod>' . ($blog->updated_at ? $blog->updated_at->toAtomString() : now()->toAtomString()) . '</lastmod>';
        $xml .= '<changefreq>weekly</changefreq>';
        $xml .= '<priority>0.8</priority>';
        $xml .= '</url>';
    }

    $xml .= '</urlset>';

    return response($xml, 200, [
        'Content-Type' => 'application/xml; charset=utf-8'
    ]);
});
