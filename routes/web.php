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

// Collectie pagina
    Route::get('collection/Yamazaki',   'CollectionController@yamazaki');
    Route::get('collection/Chateau',    'CollectionController@cheteau');
    Route::get('collection/Nikka',      'CollectionController@nikka');
    Route::get('collection/French Mix', 'CollectionController@frenchMix');
    
// Abbonomenten
    Route::get('/', 'OfferController@home');

// Forms
    Route::get('/login', 'FormsController@login');