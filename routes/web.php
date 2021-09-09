<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('login', [\App\Http\Controllers\AuthController::class, 'index'])->name('login');
Route::post('post-login', [\App\Http\Controllers\AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [\App\Http\Controllers\AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [\App\Http\Controllers\AuthController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('cv' , [\App\Http\Controllers\CurriculumController::class, 'index']);
Route::get('cv/{curriculum}', [\App\Http\Controllers\CurriculumController::class, 'show']);
Route::get('cv/create/new', [\App\Http\Controllers\CurriculumController::class, 'create']);
Route::post('cv/create/new', [\App\Http\Controllers\CurriculumController::class, 'store']);
Route::get('cv/edit/{curriculum}', [\App\Http\Controllers\CurriculumController::class, 'edit']);
Route::put('cv/edit/{curriculum}', [\App\Http\Controllers\CurriculumController::class, 'update']);
Route::delete('cv/{curriculum}', [\App\Http\Controllers\CurriculumController::class, 'destroy']);

Route::get('/cv/{curriculum}/data/{personalData}', [\App\Http\Controllers\PersonalDataController::class, 'show']);
Route::get('/cv/{curriculum}/data/create/new', [\App\Http\Controllers\PersonalDataController::class, 'create']);
Route::post('/cv/{curriculum}/data/create/new', [\App\Http\Controllers\PersonalDataController::class, 'store']);
Route::get('/cv/{curriculum}/data/edit/{personalData}',  [\App\Http\Controllers\PersonalDataController::class, 'edit']);
Route::put('/cv/{curriculum}/data/edit/{personalData}', [\App\Http\Controllers\PersonalDataController::class, 'update']);
Route::delete('/cv/{curriculum}/data/{personalData}', [\App\Http\Controllers\PersonalDataController::class, 'destroy']);

Route::get('/cv/{curriculum}/other/{other}', [\App\Http\Controllers\OtherController::class, 'show']);
Route::get('/cv/{curriculum}/other/create/new', [\App\Http\Controllers\OtherController::class, 'create']);
Route::post('/cv/{curriculum}/other/create/new', [\App\Http\Controllers\OtherController::class, 'store']);
Route::get('/cv/{curriculum}/other/edit/{other}',  [\App\Http\Controllers\OtherController::class, 'edit']);
Route::put('/cv/{curriculum}/other/edit/{other}', [\App\Http\Controllers\OtherController::class, 'update']);
Route::delete('/cv/{curriculum}/other/{other}', [\App\Http\Controllers\OtherController::class, 'destroy']);

Route::get('/cv/{curriculum}/education/{education}', [\App\Http\Controllers\EducationController::class, 'show']);
Route::get('/cv/{curriculum}/education/create/new', [\App\Http\Controllers\EducationController::class, 'create']);
Route::post('/cv/{curriculum}/education/create/new', [\App\Http\Controllers\EducationController::class, 'store']);
Route::get('/cv/{curriculum}/education/edit/{education}',  [\App\Http\Controllers\EducationController::class, 'edit']);
Route::put('/cv/{curriculum}/education/edit/{education}', [\App\Http\Controllers\EducationController::class, 'update']);
Route::post('/cv/{curriculum}/education/edit/{education}', [\App\Http\Controllers\EducationController::class, 'update']);
Route::delete('/cv/{curriculum}/education/{education}', [\App\Http\Controllers\EducationController::class, 'destroy']);

Route::get('/cv/{curriculum}/work/{work}', [\App\Http\Controllers\WorkController::class, 'show']);
Route::get('/cv/{curriculum}/work/create/new', [\App\Http\Controllers\WorkController::class, 'create']);
Route::post('/cv/{curriculum}/work/create/new', [\App\Http\Controllers\WorkController::class, 'store']);
Route::get('/cv/{curriculum}/work/edit/{work}',  [\App\Http\Controllers\WorkController::class, 'edit']);
Route::put('/cv/{curriculum}/work/edit/{work}', [\App\Http\Controllers\WorkController::class, 'update']);
Route::delete('/cv/{curriculum}/work/{work}', [\App\Http\Controllers\WorkController::class, 'destroy']);

Route::get('/cv/{curriculum}/skill/{skill}', [\App\Http\Controllers\SkillController::class, 'show']);
Route::get('/cv/{curriculum}/skill/create/new', [\App\Http\Controllers\SkillController::class, 'create']);
Route::post('/cv/{curriculum}/skill/create/new', [\App\Http\Controllers\SkillController::class, 'store']);
Route::get('/cv/{curriculum}/skill/edit/{skill}',  [\App\Http\Controllers\SkillController::class, 'edit']);
Route::put('/cv/{curriculum}/skill/edit/{skill}', [\App\Http\Controllers\SkillController::class, 'update']);
Route::delete('/cv/{curriculum}/skill/{skill}', [\App\Http\Controllers\SkillController::class, 'destroy']);

Route::get('/cv/{curriculum}/reference/{reference}', [\App\Http\Controllers\ReferenceController::class, 'show']);
Route::get('/cv/{curriculum}/reference/create/new', [\App\Http\Controllers\ReferenceController::class, 'create']);
Route::post('/cv/{curriculum}/reference/create/new', [\App\Http\Controllers\ReferenceController::class, 'store']);
Route::get('/cv/{curriculum}/reference/edit/{reference}',  [\App\Http\Controllers\ReferenceController::class, 'edit']);
Route::put('/cv/{curriculum}/reference/edit/{reference}', [\App\Http\Controllers\ReferenceController::class, 'update']);
Route::delete('/cv/{curriculum}/reference/{reference}', [\App\Http\Controllers\ReferenceController::class, 'destroy']);

Route::get('/cv/{curriculum}/interest/{interest}', [\App\Http\Controllers\InterestController::class, 'show']);
Route::get('/cv/{curriculum}/interest/create/new', [\App\Http\Controllers\InterestController::class, 'create']);
Route::post('/cv/{curriculum}/interest/create/new', [\App\Http\Controllers\InterestController::class, 'store']);
Route::get('/cv/{curriculum}/interest/edit/{interest}',  [\App\Http\Controllers\InterestController::class, 'edit']);
Route::put('/cv/{curriculum}/interest/edit/{interest}', [\App\Http\Controllers\InterestController::class, 'update']);
Route::delete('/cv/{curriculum}/interest/{interest}', [\App\Http\Controllers\InterestController::class, 'destroy']);
