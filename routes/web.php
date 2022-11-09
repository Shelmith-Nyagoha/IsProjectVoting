<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\CustomAuthAdminController;
use App\Http\Controllers\SessionController;
use App\Models\Admin;
use App\Mail\newCandMail;
use App\Models\User;
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
    return view('home');
});





Route::get('/login', [CustomAuthController::class,'login'])->middleware('AlreadyLoggedIn');
Route::get('/registration', [CustomAuthController::class,'registration'])->middleware('AlreadyLoggedIn');
Route::post('/register-user', [CustomAuthController::class,'registerUser'])->name ('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/voterDashboard',[CustomAuthController::class,'voterDashboard'])->middleware('isLoggedIn');
Route::get('/voterDashboard',[CustomAuthController::class,'profile']);
Route::get('/vote',[CustomAuthController::class,'profile']);

Route::get('/logout',[CustomAuthController::class,'logout']);


Route::get('/adminLogin',[CustomAuthAdminController::class,'adminLogin']);
Route::get('/adminRegistration',[CustomAuthAdminController::class,'adminRegistration']);
Route::post('/register-admin', [CustomAuthAdminController::class,'registerAdmin'])->name ('register-admin');
Route::post('/login-admin',[CustomAuthAdminController::class,'loginAdmin'])->name('login-admin');
Route::get('/logoutAdmin',[CustomAuthAdminController::class,'logoutAdmin'])->name('logoutAdmin');
Route::get('/adminDashboard',[CustomAuthAdminController::class,'adminDashboard']);
Route::get('/newAdminDash',[CustomAuthAdminController::class,'newDash']);

Route::get('/list',[PositionController::class,'index'])->name('list');
Route::get('/listCandidate',[CandidateController::class,'index'])->name('listCandidate');
Route::get('/manageCandidate',[CandidateController::class,'viewCandidates']);
Route::get('/beCandidate',[CandidateController::class,'profile']);

Route::post('/update/{id}',[PositionController::class,'updatePosition']);
Route::get('/positions',[PositionController::class,'index']);
Route::get('/beCandidate',[PositionController::class,'indexNew']);
Route::post('/addPosition',[PositionController::class,'addPosition']);
Route::post('/addPositions', [PositionController::class,'addPositions'])->name('addPositions');
//Route::get('click_edit/{id}',[PositionController::class,'editPosition']);
Route::get('click_delete/{id}',[PositionController::class,'deletePosition']);

Route::get('/campaign',[PositionController::class,'campaign']);
Route::get('/manifesto',[PositionController::class,'manifesto']);
Route::post('/add-campaign', [CampaignController::class,'addCampaigns'])->name('add-campaign');

Route::get('/beCandidate',[CandidateController::class,'viewStatus']);
Route::get('/beCandidate',[CandidateController::class,'indexThree']);
Route::get('/manageCandidate',[CandidateController::class,'manageCandidate']);
Route::get('/manageCandidate',[CandidateController::class,'indexFour']);
Route::post('/add-vie', [CandidateController::class,'addVie'])->name('add-vie');

Route::get('/allCandView',[CandidateController::class,'allCandView']);
Route::get('/allCandView',[CandidateController::class,'indexTwo']);


Route::get('/setElection',[ElectionController::class,'viewSet']);
Route::get('/setElection',[ElectionController::class,'indexNew']);
Route::post('/addElection', [ElectionController::class,'addElection'])->name('addElection');
Route::post('/updateElection/{id}',[ElectionController::class,'updateElection']);

// Route::get('/allCandView',[CampaignController::class,'profileOne']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/vote',[PositionController::class,'vote']);
Route::get('/viewManifesto',[PositionController::class,'viewManifesto']);
Route::get('/vote',[PositionController::class,'indexFive']);

Route::get('/voteResult',[CandidateController::class,'viewResult']);


Route::get('get-session',[SessionController::class,'getSession']);
Route::get('store-session',[SessionController::class,'storeSession']);
Route::get('delete-session',[SessionController::class,'deleteSession']);



// Route::get('/email', function () {
//     Mail::to('email@email.com')->send(new newCandMail());
//     return new newCandMail();
// });
