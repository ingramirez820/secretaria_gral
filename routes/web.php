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

/* Route::get('/', function () {
    return view('welcome');
}); */
/* Route::get('saludo/{nombre}',function($nombre){
return "Saludos ".$nombre;
}); */
/* Route::get('saludo/{nombre?}',function($nombre="invitado"){
    return "Saludos ".$nombre;
    }); */
/* Route::get('contactos',function(){
return "Seccion de Contactos";
});
Route::get('/',function(){
    echo "<a href='/contactos'>Contactos 1</a><br>";
    echo "<a href='/contactos'>Contactos 2</a><br>";
    echo "<a href='/contactos'>Contactos 3</a><br>";
    echo "<a href='/contactos'>Contactos 4</a><br>";
    echo "<a href='/contactos'>Contactos 5</a><br>";
}); */
/* Route::get('contactanos',function(){
    return "Seccion de Contactos";
    })->name('contactos');
    
Route::get('/',function(){
    echo "<a href='".route('contactos')."'>Contactos 1</a><br>";
    echo "<a href='".route('contactos')."'>Contactos 2</a><br>";
    echo "<a href='".route('contactos')."'>Contactos 3</a><br>";
    echo "<a href='".route('contactos')."'>Contactos 4</a><br>";
    echo "<a href='".route('contactos')."'>Contactos 5</a><br>";
}); */

/* la / indica raíz, view indica de donde tomará la vista, en este caso
de resources/views/welcome.blade.php, no es necesario colocar
la ruta, solo el nombre del archivo */

/* Route::get('/',function(){
return view('welcome');
})->name('home'); */

/* Metodos para enviar variables a las vistas */
/* Route::get('/',function(){
    $nombre = 'Jorge'; */
    /* Primer Método para enviar la variable a la vista */
/* return view('home')->with('nombre',$nombre); */
/* Segundo Método para enviar la variable a la vista forma de array */
/* return view('home')->with(['nombre',$nombre]); */
/* Tercer Método para enviar la variable a la vista forma de array */
/* return view('home',['nombre'=> $nombre]); */
/* Cuarto Método para enviar la variable a la vista forma de array */
/* return view('home',compact('nombre')); *///Devuelve 
/* })->name('home'); */


 
/* Metodo para pasar valores directamente usando view */
/* Route::view('/', 'home',['nombre'=> 'Jorge']); */

/* Route::view('/portfolio','portfolio',compact('portfolio'))->name('portfolio'); */
//=============Usando el controlador se ocupa get===========//

/* Route::resource('projects','PortfolioController')->except('index','show'); */
//Usando la apiresources
/* Route::Apiresource('projects','PortfolioController'); */
Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::get('/portfolio','PortfolioController@index')->name('portfolio');
Route::view('/contact','contact')->name('contact'); 

//============ creamos una ruta post para el formulario de contact.blade.php=====//
//==== Vamos a persistir los datos del usuario por eso usamos el método store==//
Route::post('contact','MessagesController@store');