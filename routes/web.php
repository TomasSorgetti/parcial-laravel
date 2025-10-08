<?php

use Illuminate\Support\Facades\Route;

// public routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])
    ->name('home');

Route::get('/docs', function () {
    return view('docs');
})
    ->name('docs');

// auth routes
Route::get('/iniciar-session', [App\Http\Controllers\AuthController::class, 'showLogin'])
    ->name('auth.login');

Route::post('/iniciar-session', [App\Http\Controllers\AuthController::class, 'login'])
    ->name('auth.login.login');

Route::get('/registrarse', [App\Http\Controllers\AuthController::class, 'showRegister'])
    ->name('auth.register');

Route::post('/cerrar-sesion', [App\Http\Controllers\AuthController::class, 'logout'])
    ->name('auth.logout')
    ->middleware('auth');

// todo => create controllers
// user routes
Route::get('/bienvenida', [App\Http\Controllers\WorkbenchController::class, 'welcome'])
    ->name('welcome')
    ->middleware('auth');

Route::get('/workbenchs/add-new', [App\Http\Controllers\WorkbenchController::class, 'addWorkbenchView'])
    ->name('workbenches.add-new')
    ->middleware('auth');

Route::post('/workbenchs/add-new', [App\Http\Controllers\WorkbenchController::class, 'addNewWorkbench'])
    ->name('workbenches.add-new')
    ->middleware('auth');

Route::get('/workbenchs/edit/{id}', [App\Http\Controllers\WorkbenchController::class, 'editWorkbenchView'])
    ->name('workbenches.edit')
    ->middleware('auth');

Route::put('/workbenchs/edit/{id}', [App\Http\Controllers\WorkbenchController::class, 'updateWorkbench'])
    ->name('workbenches.edit')
    ->middleware('auth');

Route::get('/cuenta/perfil', function () {
    return view('user/account/profile');
})
    ->name('profile')
    ->middleware('auth');

Route::get('/cuenta/config', function () {
    return view('user/account/settings');
})
    ->name('settings')
    ->middleware('auth');

// project routes
Route::get('/workbenchs/{id}/projects', [App\Http\Controllers\ProjectController::class, 'projectsByWorkbench'])
    ->name('projects.by.workbench')
    ->middleware('auth');

Route::get('/projects/add-new', [App\Http\Controllers\ProjectController::class, 'addProjectView'])
    ->name('projects.add-new')
    ->middleware('auth');

Route::post('/projects/add-new', [App\Http\Controllers\ProjectController::class, 'createNewProject'])
    ->name('projects.add-new')
    ->middleware('auth');

Route::get('/projects/edit/{id}', [App\Http\Controllers\ProjectController::class, 'editProjectView'])
    ->name('projects.edit')
    ->middleware('auth');

Route::put('/projects/edit/{id}', [App\Http\Controllers\ProjectController::class, 'updateProject'])
    ->name('projects.edit')
    ->middleware('auth');

Route::get('/projects/{id}', [App\Http\Controllers\ProjectController::class, 'projectView'])
    ->name('project')
    ->middleware('auth');

// admin routes
// Route::get('/admin', function () {
//     return view('admin/dashboard');
// })
//     ->name('admin')
//     ->middleware('auth');

// BLOG
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blogList'])
    ->name('blog.list');

Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'blogDetail'])
    ->name('blog.detail');

Route::get('/admin/blog', [App\Http\Controllers\BlogController::class, 'adminBlogList'])
    // ->name('admin')
    ->name('admin.blog.list')
    ->middleware('auth');

Route::get('/admin/blog/add-new', [App\Http\Controllers\BlogController::class, 'adminBlogCreate'])
    ->name('admin.blog.create')
    ->middleware('auth');

Route::post('/admin/blog/add-new', [App\Http\Controllers\BlogController::class, 'adminBlogSave'])
    ->name('admin.blog.save')
    ->middleware('auth');

Route::get('/admin/blog/edit/{slug}', [App\Http\Controllers\BlogController::class, 'adminBlogEdit'])
    ->name('admin.blog.edit')
    ->middleware('auth');

Route::put('/admin/blog/{slug}', [App\Http\Controllers\BlogController::class, 'adminBlogUpdate'])
    ->name('admin.blog.update')
    ->middleware('auth');

Route::delete('/admin/blog/{slug}', [App\Http\Controllers\BlogController::class, 'adminBlogDelete'])
    ->name('admin.blog.delete')
    ->middleware('auth');
