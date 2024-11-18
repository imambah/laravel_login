<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MmenuController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\DataquizController;
use App\Http\Controllers\QuizheaderController;
use App\Http\Controllers\QuizmasterController;
use App\Http\Controllers\UseraccessController;
use App\Http\Controllers\MmenudetailController;
use App\Http\Controllers\ParameterdetailController;
use App\Http\Controllers\ParameterheaderController;


Route::get('/', function () {
    return view('login.index');
});


Route::get('/home', function () {
    return view('home');
});

// Route::get('/prodi', function () {
//     return view('prodi.tampil');
// });

// Route::get('/posts/{post:slug}', function(post $post) {
//     //dd($slug);
//     // $post = post::find($post);

//     //dd($post);
//     return view('post', ['title' => 'Single Post', 'post' => $post]);
// });

Route::get('/user',[UserController::class, 'tampil'])->name('user.tampil');
Route::get('/user/tambah',[UserController::class, 'tambah'])->name('user.tambah');
Route::post('user/submit',[UserController::class, 'submit'])->name('user.submit');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');

Route::get('/prodi',[ProdiController::class, 'tampil'])->name('prodi.tampil');
Route::get('/prodi/tambah',[ProdiController::class, 'tambah'])->name('prodi.tambah');
Route::post('prodi/submit',[ProdiController::class, 'submit'])->name('prodi.submit');
Route::get('/prodi/edit/{id}',[ProdiController::class, 'edit'])->name('prodi.edit');
Route::post('/prodi/update/{id}',[ProdiController::class, 'update'])->name('prodi.update');
Route::post('/prodi/delete/{id}',[ProdiController::class, 'delete'])->name('prodi.delete');

Route::get('/parameterheader',[ParameterheaderController::class, 'tampil'])->name('parameterheader.tampil');
Route::get('/parameterheader/tambah',[ParameterheaderController::class, 'tambah'])->name('parameterheader.tambah');
Route::post('parameterheader/submit',[ParameterheaderController::class, 'submit'])->name('parameterheader.submit');
Route::get('/parameterheader/edit/{id}', [ParameterheaderController::class, 'edit'])->name('parameterheader.edit');
Route::post('/parameterheader/update/{id}', [ParameterheaderController::class, 'update'])->name('parameterheader.update');
Route::post('/parameterheader/delete/{id}', [ParameterheaderController::class, 'delete'])->name('parameterheader.delete');

Route::get('/parameterdetail/tampil/{id}',[ParameterdetailController::class, 'tampil'])->name('parameterdetail.tampil');
Route::get('/parameterdetail/tambah/{id}',[ParameterdetailController::class, 'tambah'])->name('parameterdetail.tambah');
Route::post('parameterdetail/submit',[ParameterdetailController::class, 'submit'])->name('parameterdetail.submit');
Route::get('/parameterdetail/edit/{id}', [ParameterdetailController::class, 'edit'])->name('parameterdetail.edit');
Route::post('/parameterdetail/update/{id}', [ParameterdetailController::class, 'update'])->name('parameterdetail.update');

Route::get('/quizheader',[QuizheaderController::class, 'tampil'])->name('quizheader.tampil');
Route::get('/quizheader/tambah',[QuizheaderController::class, 'tambah'])->name('quizheader.tambah');
Route::post('quizheader/submit',[QuizheaderController::class, 'submit'])->name('quizheader.submit');
Route::get('/quizheader/edit/{id}', [QuizheaderController::class, 'edit'])->name('quizheader.edit');
Route::post('/quizheader/update/{id}', [QuizheaderController::class, 'update'])->name('quizheader.update');

Route::get('/quizmaster/tampil/{id}',[QuizmasterController::class, 'tampil'])->name('quizmaster.tampil');
Route::get('/quizmaster/tambah/{id}',[QuizmasterController::class, 'tambah'])->name('quizmaster.tambah');
Route::post('quizmaster/submit',[QuizmasterController::class, 'submit'])->name('quizmaster.submit');
Route::get('/quizmaster/edit/{id}', [QuizmasterController::class, 'edit'])->name('quizmaster.edit');
Route::post('/quizmaster/update/{id}', [QuizmasterController::class, 'update'])->name('quizmaster.update');

Route::get('/mmenu',[MmenuController::class, 'tampil'])->name('mmenu.tampil');
Route::get('/mmenu/tambah',[MmenuController::class, 'tambah'])->name('mmenu.tambah');
Route::post('mmenu/submit',[MmenuController::class, 'submit'])->name('mmenu.submit');
Route::get('/mmenu/edit/{id}',[MmenuController::class, 'edit'])->name('mmenu.edit');
Route::post('/mmenu/update/{id}',[MmenuController::class, 'update'])->name('mmenu.update');

Route::get('/mmenudetail/tampil/{id_menu}',[MmenudetailController::class, 'tampil'])->name('mmenudetail.tampil');
Route::get('/mmenudetail/tambah/{id}',[MmenudetailController::class, 'tambah'])->name('mmenudetail.tambah');
Route::post('mmenudetail/submit',[MmenudetailController::class, 'submit'])->name('mmenudetail.submit');
Route::get('/mmenudetail/edit/{id}', [MmenudetailController::class, 'edit'])->name('mmenudetail.edit');
Route::post('/mmenudetail/update/{id}', [MmenudetailController::class, 'update'])->name('mmenudetail.update');

Route::get('/reviewmonev',[DataquizController::class, 'tampil'])->name('reviewmonev.tampil');
Route::post('reviewmonev/submit',[DataquizController::class, 'submit'])->name('reviewmonev.submit');
Route::get('/reviewmonev/edit/{id}', [DataquizController::class, 'edit'])->name('reviewmonev.edit');
Route::post('/reviewmonev/update/{id}', [DataquizController::class, 'update'])->name('reviewmonev.update');

//Route::get('/useraccess/tampil', function(User $user)
//{
//    return view('/useraccess/tampil',['useraccesses'=>$user->useraccess]);
//});
Route::get('/useraccess',[UseraccessController::class, 'tampil'])->name('useraccess.tampil');

Route::get('/survey',[SurveyController::class, 'tampil'])->name('survey.tampil');
Route::get('/survey/tambah/{jenis}',[SurveyController::class, 'tambah'])->name('survey.tambah');
Route::post('survey/submit',[SurveyController::class, 'submit'])->name('survey.submit');


Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'authenticate']);


?>

