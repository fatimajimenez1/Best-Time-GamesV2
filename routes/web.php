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
    return view('welcome');
});

Route::get('Acerca', 'HomeController@Acerca');
Route::get('/Acerca', [App\Http\Controllers\HomeController::class, 'Acerca'])->name('Acerca');

Route::get('streaming', 'HomeController@streaming');
Route::get('/streaming', [App\Http\Controllers\HomeController::class, 'streaming'])->name('streaming');

Route::get('Contacto', 'HomeController@Contacto');
Route::get('/Contacto', [App\Http\Controllers\HomeController::class, 'Contacto'])->name('Contacto');

Route::get('login', 'HomeController@login');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');

Route::get('Registrar', 'HomeController@Registrar');
Route::get('/Registrar', [App\Http\Controllers\HomeController::class, 'Registrar'])->name('Registrar');


Route::get('VistaCliente/streaming', 'ClienteController@streaming');
Route::get('VistaCliente/streaming', [App\Http\Controllers\ClienteController::class, 'streaming'])->name('VistaCliente.streaming');

Route::get('VistaCliente/carrito', 'ClienteController@carrito');
Route::get('VistaCliente/carrito', [App\Http\Controllers\ClienteController::class, 'carrito'])->name('VistaCliente.carrito');

Route::get('VistaCliente/consolas', 'ClienteController@consolas');
Route::get('VistaCliente/consolas', [App\Http\Controllers\ClienteController::class, 'consolas'])->name('VistaCliente.consolas');

Route::get('VistaCliente/Funko', 'ClienteController@Funko');
Route::get('VistaCliente/Funko', [App\Http\Controllers\ClienteController::class, 'Funko'])->name('VistaCliente.Funko');

Route::get('VistaCliente/Videojuegos', 'ClienteController@Videojuegos');
Route::get('VistaCliente/Videojuegos', [App\Http\Controllers\ClienteController::class, 'Videojuegos'])->name('VistaCliente.Videojuegos');

Route::get('VistaCliente/Playeras', 'ClienteController@Playeras');
Route::get('VistaCliente/Playeras', [App\Http\Controllers\ClienteController::class, 'Playeras'])->name('VistaCliente.Playeras');


Route::get('DetalleProductoConsolas/DetalleNintendo', 'ClienteController@DetalleNintendo');
Route::get('DetalleProductoConsolas/DetalleNintendo', [App\Http\Controllers\ClienteController::class, 'DetalleNintendo'])->name('DetalleProductoConsolas.DetalleNintendo');

Route::get('DetalleProductoConsolas/DetallePS4', 'ClienteController@DetallePS4');
Route::get('DetalleProductoConsolas/DetallePS4', [App\Http\Controllers\ClienteController::class, 'DetallePS4'])->name('DetalleProductoConsolas.DetallePS4');

Route::get('DetalleProductoConsolas/DetalleXboxS', 'ClienteController@DetalleXboxS');
Route::get('DetalleProductoConsolas/DetalleXboxS', [App\Http\Controllers\ClienteController::class, 'DetalleXboxS'])->name('DetalleProductoConsolas.DetalleXboxS');

Route::get('DetalleProductoConsolas/DetalleSeriesX', 'ClienteController@DetalleSeriesX');
Route::get('DetalleProductoConsolas/DetalleSeriesX', [App\Http\Controllers\ClienteController::class, 'DetalleSeriesX'])->name('DetalleProductoConsolas.DetalleSeriesX');

Route::get('DetalleProductoConsolas/DetalleXbox360', 'ClienteController@DetalleXbox360');
Route::get('DetalleProductoConsolas/DetalleXbox360', [App\Http\Controllers\ClienteController::class, 'DetalleXbox360'])->name('DetalleProductoConsolas.DetalleXbox360');

Route::get('DetalleProductoConsolas/DetallePS5', 'ClienteController@DetallePS5');
Route::get('DetalleProductoConsolas/DetallePS5', [App\Http\Controllers\ClienteController::class, 'DetallePS5'])->name('DetalleProductoConsolas.DetallePS5');

Route::get('DetalleProductoFunko/DetalleHulkbuster', 'ClienteController@DetalleHulkbuster');
Route::get('DetalleProductoFunko/DetalleHulkbuster', [App\Http\Controllers\ClienteController::class, 'DetalleHulkbuster'])->name('DetalleProductoFunko.DetalleHulkbuster');

Route::get('DetalleProductoFunko/Detallecrash', 'ClienteController@Detallecrash');
Route::get('DetalleProductoFunko/Detallecrash', [App\Http\Controllers\ClienteController::class, 'Detallecrash'])->name('DetalleProductoFunko.Detallecrash');

Route::get('DetalleProductoFunko/DetalleCreeper', 'ClienteController@DetalleCreeper');
Route::get('DetalleProductoFunko/DetalleCreeper', [App\Http\Controllers\ClienteController::class, 'DetalleCreeper'])->name('DetalleProductoFunko.DetalleCreeper');

Route::get('DetalleProductoFunko/DetalleGears', 'ClienteController@DetalleGears');
Route::get('DetalleProductoFunko/DetalleGears', [App\Http\Controllers\ClienteController::class, 'DetalleGears'])->name('DetalleProductoFunko.DetalleGears');

Route::get('DetalleProductoFunko/DetalleHalo', 'ClienteController@DetalleHalo');
Route::get('DetalleProductoFunko/DetalleHalo', [App\Http\Controllers\ClienteController::class, 'DetalleHalo'])->name('DetalleProductoFunko.DetalleHalo');

Route::get('DetalleProductoFunko/DetalleHarley', 'ClienteController@DetalleHarley');
Route::get('DetalleProductoFunko/DetalleHarley', [App\Http\Controllers\ClienteController::class, 'DetalleHarley'])->name('DetalleProductoFunko.DetalleHarley');

Route::get('DetalleProductoFunko/DetalleKombat', 'ClienteController@DetalleKombat');
Route::get('DetalleProductoFunko/DetalleKombat', [App\Http\Controllers\ClienteController::class, 'DetalleKombat'])->name('DetalleProductoFunko.DetalleKombat');

Route::get('DetalleProductoFunko/DetalleKratos', 'ClienteController@DetalleKratos');
Route::get('DetalleProductoFunko/DetalleKratos', [App\Http\Controllers\ClienteController::class, 'DetalleKratos'])->name('DetalleProductoFunko.DetalleKratos');

Route::get('DetalleProductoFunko/DetalleMarioBross', 'ClienteController@DetalleMarioBross');
Route::get('DetalleProductoFunko/DetalleMarioBross', [App\Http\Controllers\ClienteController::class, 'DetalleMarioBross'])->name('DetalleProductoFunko.DetalleMarioBross');

Route::get('DetalleProductoPlayera/Detalleplayerahombreplayer1', 'ClienteController@Detalleplayerahombreplayer1');
Route::get('DetalleProductoPlayera/Detalleplayerahombreplayer1', [App\Http\Controllers\ClienteController::class, 'Detalleplayerahombreplayer1'])->name('DetalleProductoPlayera.Detalleplayerahombreplayer1');

Route::get('DetalleProductoPlayera/Detalleplayeramujerplayer1', 'ClienteController@Detalleplayeramujerplayer1');
Route::get('DetalleProductoPlayera/Detalleplayeramujerplayer1', [App\Http\Controllers\ClienteController::class, 'Detalleplayeramujerplayer1'])->name('DetalleProductoPlayera.Detalleplayeramujerplayer1');

Route::get('DetalleProductoPlayera/Detalleplayeramujer2', 'ClienteController@Detalleplayeramujer2');
Route::get('DetalleProductoPlayera/Detalleplayeramujer2', [App\Http\Controllers\ClienteController::class, 'Detalleplayeramujer2'])->name('DetalleProductoPlayera.Detalleplayeramujer2');

Route::get('DetalleProductoPlayera/Detalleplayeramujer3', 'ClienteController@Detalleplayeramujer3');
Route::get('DetalleProductoPlayera/Detalleplayeramujer3', [App\Http\Controllers\ClienteController::class, 'Detalleplayeramujer3'])->name('DetalleProductoPlayera.Detalleplayeramujer3');

Route::get('DetalleProductoPlayera/Detalleplayeramujer4', 'ClienteController@Detalleplayeramujer4');
Route::get('DetalleProductoPlayera/Detalleplayeramujer4', [App\Http\Controllers\ClienteController::class, 'Detalleplayeramujer4'])->name('DetalleProductoPlayera.Detalleplayeramujer4');

Route::get('DetalleProductoPlayera/Detalleplayeraniñoplayer1', 'ClienteController@Detalleplayeraniñoplayer1');
Route::get('DetalleProductoPlayera/Detalleplayeraniñoplayer1', [App\Http\Controllers\ClienteController::class, 'Detalleplayeraniñoplayer1'])->name('DetalleProductoPlayera.Detalleplayeraniñoplayer1');

Route::get('DetalleProductoPlayera/Detalleplayeraniño2', 'ClienteController@Detalleplayeraniño2');
Route::get('DetalleProductoPlayera/Detalleplayeraniño2', [App\Http\Controllers\ClienteController::class, 'Detalleplayeraniño2'])->name('DetalleProductoPlayera.Detalleplayeraniño2');

Route::get('DetalleProductoPlayera/Detalleplayeraniño3', 'ClienteController@Detalleplayeraniño3');
Route::get('DetalleProductoPlayera/Detalleplayeraniño3', [App\Http\Controllers\ClienteController::class, 'Detalleplayeraniño3'])->name('DetalleProductoPlayera.Detalleplayeraniño3');

Route::get('DetalleProductoPlayera/Detalleplayeraniño4', 'ClienteController@Detalleplayeraniño4');
Route::get('DetalleProductoPlayera/Detalleplayeraniño4', [App\Http\Controllers\ClienteController::class, 'Detalleplayeraniño4'])->name('DetalleProductoPlayera.Detalleplayeraniño4');

Route::get('DetalleProductoPlayera/Detalleplayerahombre2', 'ClienteController@Detalleplayerahombre2');
Route::get('DetalleProductoPlayera/Detalleplayerahombre2', [App\Http\Controllers\ClienteController::class, 'Detalleplayerahombre2'])->name('DetalleProductoPlayera.Detalleplayerahombre2');

Route::get('DetalleProductoPlayera/Detalleplayerahombre3', 'ClienteController@Detalleplayerahombre3');
Route::get('DetalleProductoPlayera/Detalleplayerahombre3', [App\Http\Controllers\ClienteController::class, 'Detalleplayerahombre3'])->name('DetalleProductoPlayera.Detalleplayerahombre3');

Route::get('DetalleProductoPlayera/Detalleplayerahombre4', 'ClienteController@Detalleplayerahombre4');
Route::get('DetalleProductoPlayera/Detalleplayerahombre4', [App\Http\Controllers\ClienteController::class, 'Detalleplayerahombre4'])->name('DetalleProductoPlayera.Detalleplayerahombre4');

Route::get('DetalleProductoVideojuegos/DetalleDestinity', 'ClienteController@DetalleDestinity');
Route::get('DetalleProductoVideojuegos/DetalleDestinity', [App\Http\Controllers\ClienteController::class, 'DetalleDestinity'])->name('DetalleProductoVideojuegos.DetalleDestinity');

Route::get('DetalleProductoVideojuegos/DetalleForza', 'ClienteController@DetalleForza');
Route::get('DetalleProductoVideojuegos/DetalleForza', [App\Http\Controllers\ClienteController::class, 'DetalleForza'])->name('DetalleProductoVideojuegos.DetalleForza');

Route::get('DetalleProductoVideojuegos/DetalleHalo4', 'ClienteController@DetalleHalo4');
Route::get('DetalleProductoVideojuegos/DetalleHalo4', [App\Http\Controllers\ClienteController::class, 'DetalleHalo4'])->name('DetalleProductoVideojuegos.DetalleHalo4');

Route::get('DetalleProductoVideojuegos/DetalleInjustice', 'ClienteController@DetalleInjustice');
Route::get('DetalleProductoVideojuegos/DetalleInjustice', [App\Http\Controllers\ClienteController::class, 'DetalleInjustice'])->name('DetalleProductoVideojuegos.DetalleInjustice');

Route::get('DetalleProductoVideojuegos/DetalleGearsWar', 'ClienteController@DetalleGearsWar');
Route::get('DetalleProductoVideojuegos/DetalleGearsWar', [App\Http\Controllers\ClienteController::class, 'DetalleGearsWar'])->name('DetalleProductoVideojuegos.DetalleGearsWar');

Route::get('DetalleProductoVideojuegos/DetalleLeft', 'ClienteController@DetalleLeft');
Route::get('DetalleProductoVideojuegos/DetalleLeft', [App\Http\Controllers\ClienteController::class, 'DetalleLeft'])->name('DetalleProductoVideojuegos.DetalleLeft');

Route::get('DetalleProductoVideojuegos/DetalleLeft2', 'ClienteController@DetalleLeft2');
Route::get('DetalleProductoVideojuegos/DetalleLeft2', [App\Http\Controllers\ClienteController::class, 'DetalleLeft2'])->name('DetalleProductoVideojuegos.DetalleLeft2');

Route::get('DetalleProductoVideojuegos/DetalleResident4', 'ClienteController@DetalleResident4');
Route::get('DetalleProductoVideojuegos/DetalleResident4', [App\Http\Controllers\ClienteController::class, 'DetalleResident4'])->name('DetalleProductoVideojuegos.DetalleResident4');

Route::get('DetalleProductoVideojuegos/DetalleMK', 'ClienteController@DetalleMK');
Route::get('DetalleProductoVideojuegos/DetalleMK', [App\Http\Controllers\ClienteController::class, 'DetalleMK'])->name('DetalleProductoVideojuegos.DetalleMK');

Route::get('DetalleProductoVideojuegos/DetalleResindet3', 'ClienteController@DetalleResindet3');
Route::get('DetalleProductoVideojuegos/DetalleResindet3', [App\Http\Controllers\ClienteController::class, 'DetalleResindet3'])->name('DetalleProductoVideojuegos.DetalleResindet3');

Route::get('DetalleProductoVideojuegos/DetalleOri', 'ClienteController@DetalleOri');
Route::get('DetalleProductoVideojuegos/DetalleOri', [App\Http\Controllers\ClienteController::class, 'DetalleOri'])->name('DetalleProductoVideojuegos.DetalleOri');

Route::get('DetalleProductoVideojuegos/DetalleGTA', 'ClienteController@DetalleGTA');
Route::get('DetalleProductoVideojuegos/DetalleGTA', [App\Http\Controllers\ClienteController::class, 'DetalleGTA'])->name('DetalleProductoVideojuegos.DetalleGTA');

Route::get('DetalleProductoVideojuegos/Detallewar', 'ClienteController@Detallewar');
Route::get('DetalleProductoVideojuegos/Detallewar', [App\Http\Controllers\ClienteController::class, 'Detallewar'])->name('DetalleProductoVideojuegos.Detallewar');

Route::get('DetalleProductoVideojuegos/DetalleWest', 'ClienteController@DetalleWest');
Route::get('DetalleProductoVideojuegos/DetalleWest', [App\Http\Controllers\ClienteController::class, 'DetalleWest'])->name('DetalleProductoVideojuegos.DetalleWest');

Route::get('DetalleProductoVideojuegos/DetalleDesperados', 'ClienteController@DetalleDesperados');
Route::get('DetalleProductoVideojuegos/DetalleDesperados', [App\Http\Controllers\ClienteController::class, 'DetalleDesperados'])->name('DetalleProductoVideojuegos.DetalleDesperados');

Route::get('DetalleProductoVideojuegos/DetalleCrossCode', 'ClienteController@DetalleCrossCode');
Route::get('DetalleProductoVideojuegos/DetalleCrossCode', [App\Http\Controllers\ClienteController::class, 'DetalleCrossCode'])->name('DetalleProductoVideojuegos.DetalleCrossCode');

Route::get('DetalleProductoVideojuegos/DetalleSword', 'ClienteController@DetalleSword');
Route::get('DetalleProductoVideojuegos/DetalleSword', [App\Http\Controllers\ClienteController::class, 'DetalleSword'])->name('DetalleProductoVideojuegos.DetalleSword');

Route::get('DetalleProductoVideojuegos/DetalleRocket', 'ClienteController@DetalleRocket');
Route::get('DetalleProductoVideojuegos/DetalleRocket', [App\Http\Controllers\ClienteController::class, 'DetalleRocket'])->name('DetalleProductoVideojuegos.DetalleRocket');

Route::get('DetalleProductoVideojuegos/DetalleCreaks', 'ClienteController@DetalleCreaks');
Route::get('DetalleProductoVideojuegos/DetalleCreaks', [App\Http\Controllers\ClienteController::class, 'DetalleCreaks'])->name('DetalleProductoVideojuegos.DetalleCreaks');

Route::get('DetalleProductoVideojuegos/DetalleBrain', 'ClienteController@DetalleBrain');
Route::get('DetalleProductoVideojuegos/DetalleBrain', [App\Http\Controllers\ClienteController::class, 'DetalleBrain'])->name('DetalleProductoVideojuegos.DetalleBrain');

Route::get('DetalleProductoVideojuegos/DetalleMoon', 'ClienteController@DetalleMoon');
Route::get('DetalleProductoVideojuegos/DetalleMoon', [App\Http\Controllers\ClienteController::class, 'DetalleMoon'])->name('DetalleProductoVideojuegos.DetalleMoon');

Route::get('DetalleProductoVideojuegos/DetalleStories', 'ClienteController@DetalleStories');
Route::get('DetalleProductoVideojuegos/DetalleStories', [App\Http\Controllers\ClienteController::class, 'DetalleStories'])->name('DetalleProductoVideojuegos.DetalleStories');

Route::get('DetalleProductoVideojuegos/DetalleKentucky', 'ClienteController@DetalleKentucky');
Route::get('DetalleProductoVideojuegos/DetalleKentucky', [App\Http\Controllers\ClienteController::class, 'DetalleKentucky'])->name('DetalleProductoVideojuegos.DetalleKentucky');

Route::get('DetalleProductoVideojuegos/DetalleSaints', 'ClienteController@DetalleSaints');
Route::get('DetalleProductoVideojuegos/DetalleSaints', [App\Http\Controllers\ClienteController::class, 'DetalleSaints'])->name('DetalleProductoVideojuegos.DetalleSaints');

Route::get('DetalleProductoVideojuegos/DetalleZombie', 'ClienteController@DetalleZombie');
Route::get('DetalleProductoVideojuegos/DetalleZombie', [App\Http\Controllers\ClienteController::class, 'DetalleZombie'])->name('DetalleProductoVideojuegos.DetalleZombie');

Route::get('DetalleProductoVideojuegos/DetalleSega', 'ClienteController@DetalleSega');
Route::get('DetalleProductoVideojuegos/DetalleSega', [App\Http\Controllers\ClienteController::class, 'DetalleSega'])->name('DetalleProductoVideojuegos.DetalleSega');

Route::get('DetalleProductoVideojuegos/DetallePicross', 'ClienteController@DetallePicross');
Route::get('DetalleProductoVideojuegos/DetallePicross', [App\Http\Controllers\ClienteController::class, 'DetallePicross'])->name('DetalleProductoVideojuegos.DetallePicross');

Route::get('DetalleProductoVideojuegos/DetalleTelling', 'ClienteController@DetalleTelling');
Route::get('DetalleProductoVideojuegos/DetalleTelling', [App\Http\Controllers\ClienteController::class, 'DetalleTelling'])->name('DetalleProductoVideojuegos.DetalleTelling');

Route::get('DetalleProductoVideojuegos/DetalleArrest', 'ClienteController@DetalleArrest');
Route::get('DetalleProductoVideojuegos/DetalleArrest', [App\Http\Controllers\ClienteController::class, 'DetalleArrest'])->name('DetalleProductoVideojuegos.DetalleArrest');

Route::get('DetalleProductoVideojuegos/DetalleControl', 'ClienteController@DetalleControl');
Route::get('DetalleProductoVideojuegos/DetalleControl', [App\Http\Controllers\ClienteController::class, 'DetalleControl'])->name('DetalleProductoVideojuegos.DetalleControl');

Route::get('DetalleProductoVideojuegos/DetalleAssassin', 'ClienteController@DetalleAssassin');
Route::get('DetalleProductoVideojuegos/DetalleAssassin', [App\Http\Controllers\ClienteController::class, 'DetalleAssassin'])->name('DetalleProductoVideojuegos.DetalleAssassin');

Route::get('DetalleProductoVideojuegos/DetalleOutriders', 'ClienteController@DetalleOutriders');
Route::get('DetalleProductoVideojuegos/DetalleOutriders', [App\Http\Controllers\ClienteController::class, 'DetalleOutriders'])->name('DetalleProductoVideojuegos.DetalleOutriders');

Route::get('DetalleProductoVideojuegos/DetalleChivalry', 'ClienteController@DetalleChivalry');
Route::get('DetalleProductoVideojuegos/DetalleChivalry', [App\Http\Controllers\ClienteController::class, 'DetalleChivalry'])->name('DetalleProductoVideojuegos.DetalleChivalry');

Route::get('DetalleProductoVideojuegos/DetalleHaven', 'ClienteController@DetalleHaven');
Route::get('DetalleProductoVideojuegos/DetalleHaven', [App\Http\Controllers\ClienteController::class, 'DetalleHaven'])->name('DetalleProductoVideojuegos.DetalleHaven');

Route::get('DetalleProductoVideojuegos/DetalleMaquette', 'ClienteController@DetalleMaquette');
Route::get('DetalleProductoVideojuegos/DetalleMaquette', [App\Http\Controllers\ClienteController::class, 'DetalleMaquette'])->name('DetalleProductoVideojuegos.DetalleMaquette');

Route::get('DetalleProductoVideojuegos/DetalleWhatchDogs', 'ClienteController@DetalleWhatchDogs');
Route::get('DetalleProductoVideojuegos/DetalleWhatchDogs', [App\Http\Controllers\ClienteController::class, 'DetalleWhatchDogs'])->name('DetalleProductoVideojuegos.DetalleWhatchDogs');

Route::get('DetalleProductoVideojuegos/DetalleHitman', 'ClienteController@DetalleHitman');
Route::get('DetalleProductoVideojuegos/DetalleHitman', [App\Http\Controllers\ClienteController::class, 'DetalleHitman'])->name('DetalleProductoVideojuegos.DetalleHitman');

Route::get('DetalleProductoVideojuegos/DetalleFarCry', 'ClienteController@DetalleFarCry');
Route::get('DetalleProductoVideojuegos/DetalleFarCry', [App\Http\Controllers\ClienteController::class, 'DetalleFarCry'])->name('DetalleProductoVideojuegos.DetalleFarCry');

Route::get('DetalleProductoVideojuegos/DetalleBalanWonderworld', 'ClienteController@DetalleBalanWonderworld');
Route::get('DetalleProductoVideojuegos/DetalleBalanWonderworld', [App\Http\Controllers\ClienteController::class, 'DetalleBalanWonderworld'])->name('DetalleProductoVideojuegos.DetalleBalanWonderworld');

Route::get('DetalleProductoVideojuegos/DetalleGTAV', 'ClienteController@DetalleGTAV');
Route::get('DetalleProductoVideojuegos/DetalleGTAV', [App\Http\Controllers\ClienteController::class, 'DetalleGTAV'])->name('DetalleProductoVideojuegos.DetalleGTAV');

Route::get('DetalleProductoVideojuegos/DetalleControl2', 'ClienteController@DetalleControl2');
Route::get('DetalleProductoVideojuegos/DetalleControl2', [App\Http\Controllers\ClienteController::class, 'DetalleControl2'])->name('DetalleProductoVideojuegos.DetalleControl2');

Route::get('DetalleProductoVideojuegos/DetalleTheMedium', 'ClienteController@DetalleTheMedium');
Route::get('DetalleProductoVideojuegos/DetalleTheMedium', [App\Http\Controllers\ClienteController::class, 'DetalleTheMedium'])->name('DetalleProductoVideojuegos.DetalleTheMedium');

Route::get('DetalleProductoVideojuegos/DetalleOutriders2', 'ClienteController@DetalleOutriders2');
Route::get('DetalleProductoVideojuegos/DetalleOutriders2', [App\Http\Controllers\ClienteController::class, 'DetalleOutriders2'])->name('DetalleProductoVideojuegos.DetalleOutriders2');

Route::get('DetalleProductoVideojuegos/DetallePlanetCoaster', 'ClienteController@DetallePlanetCoaster');
Route::get('DetalleProductoVideojuegos/DetallePlanetCoaster', [App\Http\Controllers\ClienteController::class, 'DetallePlanetCoaster'])->name('DetalleProductoVideojuegos.DetallePlanetCoaster');

Route::get('DetalleProductoVideojuegos/DetalleCalloftheSea', 'ClienteController@DetalleCalloftheSea');
Route::get('DetalleProductoVideojuegos/DetalleCalloftheSea', [App\Http\Controllers\ClienteController::class, 'DetalleCalloftheSea'])->name('DetalleProductoVideojuegos.DetalleCalloftheSea');

Route::get('DetalleProductoVideojuegos/DetalleChivalryII', 'ClienteController@DetalleChivalryII');
Route::get('DetalleProductoVideojuegos/DetalleChivalryII', [App\Http\Controllers\ClienteController::class, 'DetalleChivalryII'])->name('DetalleProductoVideojuegos.DetalleChivalryII');

Route::get('DetalleProductoVideojuegos/DetalleHaven2', 'ClienteController@DetalleHaven2');
Route::get('DetalleProductoVideojuegos/DetalleHaven2', [App\Http\Controllers\ClienteController::class, 'DetalleHaven2'])->name('DetalleProductoVideojuegos.DetalleHaven2');

Route::get('DetalleProductoVideojuegos/DetalleYakuzaLikeaDragon', 'ClienteController@DetalleYakuzaLikeaDragon');
Route::get('DetalleProductoVideojuegos/DetalleYakuzaLikeaDragon', [App\Http\Controllers\ClienteController::class, 'DetalleYakuzaLikeaDragon'])->name('DetalleProductoVideojuegos.DetalleYakuzaLikeaDragon');

Route::get('DetalleProductoVideojuegos/DetalleFarCry6', 'ClienteController@DetalleFarCry6');
Route::get('DetalleProductoVideojuegos/DetalleFarCry6', [App\Http\Controllers\ClienteController::class, 'DetalleFarCry6'])->name('DetalleProductoVideojuegos.DetalleFarCry6');

Route::get('DetalleProductoVideojuegos/DetalleMyHero', 'ClienteController@DetalleMyHero');
Route::get('DetalleProductoVideojuegos/DetalleMyHero', [App\Http\Controllers\ClienteController::class, 'DetalleMyHero'])->name('DetalleProductoVideojuegos.DetalleMyHero');

Route::get('DetalleProductoVideojuegos/DetalleResidentEvil', 'ClienteController@DetalleResidentEvil');
Route::get('DetalleProductoVideojuegos/DetalleResidentEvil', [App\Http\Controllers\ClienteController::class, 'DetalleResidentEvil'])->name('DetalleProductoVideojuegos.DetalleResidentEvil');

Route::get('DetalleProductoVideojuegos/DetalleSaints2', 'ClienteController@DetalleSaints2');
Route::get('DetalleProductoVideojuegos/DetalleSaints2', [App\Http\Controllers\ClienteController::class, 'DetalleSaints2'])->name('DetalleProductoVideojuegos.DetalleSaints2');

Route::get('DetalleProductoVideojuegos/DetalleWarborn2', 'ClienteController@DetalleWarborn2');
Route::get('DetalleProductoVideojuegos/DetalleWarborn2', [App\Http\Controllers\ClienteController::class, 'DetalleWarborn2'])->name('DetalleProductoVideojuegos.DetalleWarborn2');

Route::get('DetalleProductoVideojuegos/DetalleLast', 'ClienteController@DetalleLast');
Route::get('DetalleProductoVideojuegos/DetalleLast', [App\Http\Controllers\ClienteController::class, 'DetalleLast'])->name('DetalleProductoVideojuegos.DetalleLast');

Route::get('DetalleProductoVideojuegos/DetalleStar', 'ClienteController@DetalleStar');
Route::get('DetalleProductoVideojuegos/DetalleStar', [App\Http\Controllers\ClienteController::class, 'DetalleStar'])->name('DetalleProductoVideojuegos.DetalleStar');

Route::get('DetalleProductoVideojuegos/DetalleHumans', 'ClienteController@DetalleHumans');
Route::get('DetalleProductoVideojuegos/DetalleHumans', [App\Http\Controllers\ClienteController::class, 'DetalleHumans'])->name('DetalleProductoVideojuegos.DetalleHumans');

Route::get('DetalleProductoVideojuegos/DetalleFast', 'ClienteController@DetalleFast');
Route::get('DetalleProductoVideojuegos/DetalleFast', [App\Http\Controllers\ClienteController::class, 'DetalleFast'])->name('DetalleProductoVideojuegos.DetalleFast');

Route::get('DetalleProductoVideojuegos/DetalleUFC', 'ClienteController@DetalleUFC');
Route::get('DetalleProductoVideojuegos/DetalleUFC', [App\Http\Controllers\ClienteController::class, 'DetalleUFC'])->name('DetalleProductoVideojuegos.DetalleUFC');

Route::get('DetalleProductoVideojuegos/DetalleSpiritfarer', 'ClienteController@DetalleSpiritfarer');
Route::get('DetalleProductoVideojuegos/DetalleSpiritfarer', [App\Http\Controllers\ClienteController::class, 'DetalleSpiritfarer'])->name('DetalleProductoVideojuegos.DetalleSpiritfarer');

Route::get('Empleado/indexEmpleado', 'EmpleadoController@indexEmpleado');
Route::get('Empleado/indexEmpleado', [App\Http\Controllers\EmpleadoController::class, 'indexEmpleado'])->name('Empleado.indexEmpleado');

Route::get('Empleado/index', 'EmpleadoController@index');
Route::get('Empleado/index', [App\Http\Controllers\EmpleadoController::class, 'index'])->name('Empleado.index');

Route::resource('Empleado/insertar', 'EmpleadoController@insertar');
Route::get('Empleado/insertar', [App\Http\Controllers\EmpleadoController::class, 'insertar'])->name('Empleado.insertar');

Route::get('Empleado/edit', 'EmpleadoController@edit');
Route::get('Empleado/edit', [App\Http\Controllers\EmpleadoController::class, 'edit'])->name('Empleado.edit');

Route::resource('Empleado/reportes', 'EmpleadoController@reportes');
Route::get('Empleado/reportes', [App\Http\Controllers\EmpleadoController::class, 'reportes'])->name('Empleado.reportes');

Route::get('Cliente/index', 'ClienteController@index');
Route::get('Cliente/index', [App\Http\Controllers\ClienteController::class, 'index'])->name('Cliente.index');

Route::resource('Cliente/insertar', 'ClienteController@insertar');
Route::get('Cliente/insertar', [App\Http\Controllers\ClienteController::class, 'insertar'])->name('Cliente.insertar');

Route::get('Cliente/edit', 'ClienteController@edit');
Route::get('Cliente/edit', [App\Http\Controllers\ClienteController::class, 'edit'])->name('Cliente.edit');

Route::resource('Cliente/reportes', 'ClienteController@reportes');
Route::get('Cliente/reportes', [App\Http\Controllers\ClienteController::class, 'reportes'])->name('Cliente.reportes');

Route::get('Proveedor/index', 'ProveedorController@index');
Route::get('Proveedor/index', [App\Http\Controllers\ProveedorController::class, 'index'])->name('Proveedor.index');

Route::resource('Proveedor/insertar', 'ProveedorController@insertar');
Route::get('Proveedor/insertar', [App\Http\Controllers\ProveedorController::class, 'insertar'])->name('Proveedor.insertar');

Route::get('Proveedor/edit', 'ProveedorController@edit');
Route::get('Proveedor/edit', [App\Http\Controllers\ProveedorController::class, 'edit'])->name('Proveedor.edit');

Route::resource('Proveedor/reportes', 'ProveedorController@reportes');
Route::get('Proveedor/reportes', [App\Http\Controllers\ProveedorController::class, 'reportes'])->name('Proveedor.reportes');

Route::get('Producto/index', 'ProductoController@index');
Route::get('Producto/index', [App\Http\Controllers\ProductoController::class, 'index'])->name('Producto.index');

Route::resource('Producto/insertar', 'ProductoController@insertar');
Route::get('Producto/insertar', [App\Http\Controllers\ProductoController::class, 'insertar'])->name('Producto.insertar');

Route::get('Producto/edit', 'ProductoController@edit');
Route::get('Producto/edit', [App\Http\Controllers\ProductoController::class, 'edit'])->name('Producto.edit');

Route::resource('Producto/reportes', 'ProductoController@reportes');
Route::get('Producto/reportes', [App\Http\Controllers\ProductoController::class, 'reportes'])->name('Producto.reportes');


Route::get('Compra/index', 'CompraController@index');
Route::get('Compra/index', [App\Http\Controllers\CompraController::class, 'index'])->name('Compra.index');

Route::resource('Compra/insertar', 'CompraController@insertar');
Route::get('Compra/insertar', [App\Http\Controllers\CompraController::class, 'insertar'])->name('Compra.insertar');

Route::get('Compra/edit', 'CompraController@edit');
Route::get('Compra/edit', [App\Http\Controllers\CompraController::class, 'edit'])->name('Compra.edit');

Route::resource('Compra/reportes', 'CompraController@reportes');
Route::get('Compra/reportes', [App\Http\Controllers\CompraController::class, 'reportes'])->name('Compra.reportes');

Route::resource('VistaCliente/indexCliente', 'ClienteController@indexCliente');
Route::get('VistaCliente/indexCliente', [App\Http\Controllers\ClienteController::class, 'indexCliente'])->name('VistaCliente.indexCliente');