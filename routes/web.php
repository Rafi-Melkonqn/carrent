<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/carResult', 'CarController@getCarResult');

Route::post('/carInfo/submit', 'CarController@postCarOpinion');

Route::get('/carOrder', 'CarController@getCarOrder');

Route::get('/step1', 'CarController@getCarOrderStep1')->name('order.result');

Route::get('/carInfo/{id}', 'CarController@carInfo')->name('infoCar');

Route::get('/successfulOrder/{id}', 'CarController@lastStep')->name('lastStep');

Route::post('/successfulOrder/{id}', 'CarController@postCarOrder');

Route::post('/carOrder/submit', 'CarController@submit');

Route::get('/successfulOrder', 'CarController@getSuccessfulOrder');


//Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(Illuminate\Routing\Router $router) {
    Route::get('/admin/crudAgent', 'AdminController@getCrudAgent');
    Route::get('/admin/uploadeAgent', 'AdminController@showUploadAgent')->name('uploadAgent.file');
    Route::post('/admin/uploadeAgent', 'AdminController@storeFileAgent');
    Route::get('/admin/viewAgent/{id}', 'AdminController@showAgent')->name('admin.viewAgent');
    Route::get('/admin/editAgent/{id}', 'AdminController@editAgent')->name('admin.editAgent');
    Route::put('admin/updateAgent/{id}', 'AdminController@updateAgent')->name('admin.updateAgent');
    Route::delete('/admin/crudAgent/{id}', 'AdminController@destroyAgent')->name('admin.destroyAgent');
    Route::get('/admin/newCar', 'AdminController@getNewCar');
    Route::get('/admin/viewAgentCar/{id}', 'AdminController@showAgentCar')->name('admin.viewCar');
    Route::get('/admin/editAgentCar/{id}', 'AdminController@editAgentCar')->name('admin.editCar');
    Route::put('/admin/updateAgentCar/{id}', 'AdminController@updateAgentCar')->name('admin.updateAgentCar');
    Route::delete('/admin/newCar/{id}', 'AdminController@destroyAgentCar')->name('admin.destroyCar');
    Route::get('/admin/opinion', 'AdminController@getOpinion');
    Route::post('/admin/opinion/submit', 'AdminController@submitOpinion');
    Route::get('/admin/createAdvertising', 'AdminController@getAdvertising');
    Route::post('/admin/createAdvertising/submit', 'AdminController@submitAdvertising');
    Route::get('/admin/createNews', 'AdminController@getCreateNews');
    Route::post('/admin/createNews/submit', 'AdminController@submitNews');
//    Route::post('/admin/', 'AdminController@postReviews');


//    $router->get('opcache', 'Admin\\AdminController@getOpCache');
//});

//Route::group(['prefix' => 'agent', 'middleware' => 'agent'], function(Illuminate\Routing\Router $router) {

    Route::get('/agents/confirmRequest', 'AgentController@getConfirmRequest');
    Route::post('/agents/confirmRequest', 'AgentController@postConfirmRequest');
    Route::get('/agents/uploade/{id}', 'AgentController@showUploadForm')->name('upload.file');
    Route::post('/agents/uploade/{id}', 'AgentController@storeFile');
    Route::get('/agents/uploadCar/', 'AgentController@showUploadFormCar')->name('uploadCar.file');
    Route::post('/agents/uploadCar', 'AgentController@storeFileCar');
    Route::get('/agents/news', 'AgentController@getNews');
    Route::get('/agents/myCar', 'AgentController@getMyCar');
    Route::get('/agents/view/{id}', 'AgentController@show')->name('agents.view');
    Route::get('/agents/viewCar/{id}', 'AgentController@showCar')->name('agentsCar.view');
    Route::get('/agents/edit/{id}', 'AgentController@edit')->name('agents.edit');
    Route::get('/agents/editCar/{id}', 'AgentController@editCar')->name('agentsCar.edit');
    Route::put('agents/update/{id}', 'AgentController@update')->name('agents.update');
    Route::put('agents/updateCar/{id}', 'AgentController@updateCar')->name('agents.updateCar');
    Route::delete('/agents/edit/{id}', 'AgentController@destroyImg')->name('agentsImg.destroye');
    Route::delete('/agents/myCar/{id}', 'AgentController@destroyCar')->name('agentsCar.destroye');



//    $router->get('opcache', 'Agent\\AgentController@getOpCache');
//});
