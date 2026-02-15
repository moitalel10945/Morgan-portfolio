<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Projects\Create;
use App\Livewire\Admin\Projects\Edit;
use App\Livewire\Admin\Projects\Index;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Skills\Index as SkillsIndex;
use App\Livewire\Admin\Skills\Create as SkillsCreate;
use App\Livewire\Admin\Skills\Edit as SkillsEdit;
use App\Livewire\Admin\Blog\Index as BlogIndex;
use App\Livewire\Admin\Blog\Create as BlogCreate;
use App\Livewire\Admin\Blog\Edit as BlogEdit;
use App\Livewire\Admin\Messages\Index as MessagesIndex;
use App\Models\BlogPost;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
});
Route::get('/about',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});
Route::get('/skills',function(){
    return view('skills');
});
Route::get('/projects',function(){
    return view('projects');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
/*Route::middleware(['auth'])->prefix('admin')->group(function(){
    Route::view('/projects','admin.projects');
    Route::view('/skills','admin.skills');
    Route::view('/blog','admin.blog');
    Route::view('/messages','admin.messages');
});*/
Route::middleware('auth')->prefix('/admin')->group(function(){
  Route::get('/projects',Index::class)->name('admin.projects');
  Route::get('/projects/create',Create::class)->name('admin.projects.create');
  Route::get('/projects/{project}/edit',Edit::class )->name('admin.projects.edit');
}
);
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/skills',SkillsIndex::class)->name('admin.skills.index');
    Route::get('/skills/create',SkillsCreate::class)->name('admin.skills.create');
    Route::get('/skills/{skill}/edit',SkillsEdit::class)->name('admin.skills.edit');
});
Route::middleware(['auth'])->prefix('admin')->group(function(){
    Route::get('/messages',MessagesIndex::class)->name('admin.messages');
    Route::get('/dashboard',Dashboard::class)->name('admin.dashboard');
    Route::get('/blog',BlogIndex::class)->name('admin.blog');
    Route::get('/blog/create',BlogCreate::class)->name('admin.blog.create');
    Route::get('blog/{post}/edit',BlogEdit::class)->name('admin.blog.edit');
});
Route::get('blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/blog/{slug}',[BlogController::class,'show'])->name('blog.show');
require __DIR__.'/auth.php';
