<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\ImpactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MentionController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\InterestedController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\CategoryBlogController;
use App\Http\Controllers\ModeApplicationController;
  
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


    
Route::get('/', [HomeController::class, '__invoke'])->name('home');
Route::get('/nos-formations/{course}', [CourseController::class, 'show'])->name('course.details');
Route::get('/formation/{res}', [CourseController::class, 'showByName'])->name('course.byname');
Route::get('/formations', [CourseController::class, 'index'])->name('course.index');
Route::get('/cycle', [DegreeController::class, 'index'])->name('degree.index');
Route::get('/cycle/{res}', [DegreeController::class, 'show'])->name('degree.show');
Route::post('/interested/{id}', [InterestedController::class, '__invoke'])->name('interested');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/post', [ContactController::class, 'store'])->name('contact.store');
Route::resource('/blog-actualités', BlogController::class);
Route::get('/categories-blog/{id}', [CategoryBlogController::class, '__invoke'])->name('categoryblog.show');
Route::get('/evenement', [EvenementController::class, 'index'])->name('evenement.index');
Route::get('/evenement/{evenement}', [EvenementController::class, 'show'])->name('evenement.show');
Route::post('/evenement/{id}', [EvenementController::class, 'signIn'])->name('evenement.signin');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
Route::get('/se-desabonner', [NewsletterController::class, 'create'])->name('newsletter.unsubscribe.create');
Route::post('/se-desabonner', [NewsletterController::class, 'unsubscribe'])->name('newsletter.unsubscribe.store');
Route::get('/qui-sommes-nous', [AboutController::class, '__invoke'])->name('about.index');
Route::get('/mot-du-directeur', [DirectorController::class, '__invoke'])->name('director.index');
Route::get('/notre-équipe', [TeamController::class, 'index_team'])->name('index.team');
Route::get('/profésseur', [TeamController::class, 'index_professor'])->name('index.professor');
Route::get('/profésseur/{responsable}', [TeamController::class, 'show_professor'])->name('show.professor');
Route::get('/galerie', [MediaController::class, '__invoke'])->name('media.index');
Route::get('/videos', [VideoController::class, '__invoke'])->name('video.index');
Route::get('/vie-estudiantine', [CampusController::class, '__invoke'])->name('campus.index');
Route::get('/mentions-legales', [MentionController::class, '__invoke'])->name('mention.index');
 

// static 
Route::get('/recherche', [SearchController::class, '__invoke'])->name('search.index');
Route::get('/centre-excellence', [CenterController::class, '__invoke'])->name('center.index');
Route::get('/ferme-experiementale', [ExperienceController::class, '__invoke'])->name('experience.index');
Route::get('/impact-cluster', [ImpactController::class, '__invoke'])->name('impact.index');
Route::get('/agri-business', [BusinessController::class, '__invoke'])->name('business.index');

// alert 




// swith lang

Route::get('/langue/{lang}', function (string $lang,Request $request) {
    if (! in_array($lang, ['en', 'fr'])) {
        abort(400);
    }

    $request->session()->put('my_locale', $lang);
    return redirect()->back();
})->name('switch.langage');


// mode app 
Route::get('/admin/activer-maintenance', [ModeApplicationController::class, 'down']);
Route::get('/admin/desactiver-maintenance', [ModeApplicationController::class, 'up']);