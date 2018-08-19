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


Route::get('/','WebpagesController@index');

//Routes with CRUD and Full Resources
//Maintenance
Route::resource('/agreements','AgreementsController');
Route::resource('/berth','BerthController');
Route::resource('/contracts','ContractsController');
Route::resource('/dispatchtickets','DispatchTicketController');
Route::resource('/employees','EmployeesController');
Route::resource('/equipments','EquipmentsController');
Route::resource('/pier','PierController');
Route::resource('/position','PositionController');
Route::resource('/tugboat','TugboatController');
Route::resource('/usertype','UsertypeController');
Route::resource('/login','LoginController');
//Transactions
Route::resource('/contracts','ContractsController');
Route::resource('/teamassignment','TugboatTeamAssignmentController');
//Login
Route::get('/register','LoginController@register');
Route::post('/login','LoginController@login');

//Delete Functions use the following format
// Route::get('/modulename/{databaseID}/delete','ControllerRou  te');

Route::get('/berth/{intBerthID}/delete','BerthController@delete');
Route::get('/employees/{intEmployeeID}/delete','EmployeesController@delete');
Route::get('/pier/{intPierID}/delete','PierController@delete');
Route::get('/position/{intPositionID}/delete','PositionController@delete');
Route::get('/tugboat/{intTugboatMainID}/delete','TugboatController@delete');
Route::get('/usertype/{intUserTypeID}/delete','UsertypeController@delete');
//JSON Data for maintenance tables
Route::get('/agreements/{intAgreementsID}/edit','AgreementsController@edit');
Route::get('/berth/{intBerthID}/edit','BerthController@edit');
Route::get('/employees/{intEmployeeID}/edit','EmployeesController@edit');
Route::get('/pier/{intPierID}/edit','PierController@edit');
Route::get('/position/{intPositionID}/get','PositionController@get');
Route::get('/tugboat/{intTugboatMainID}/please','TugboatController@please');
Route::get('/usertype/{intUserTypeID}/edit','UsertypeController@edit');
//Show info for Contracts Clauses
Route::get('/agreements/{intAgreementsID}/show','AgreementsController@show');
//tugboat MaxID
Route::get('/tugboat/maxid','TugboatController@maxid');

//post AJAX Route
Route::post('/agreements/store','AgreementsController@store');
Route::post('/berth/store','BerthController@store');
Route::post('/employees/store','EmployeesController@store');
Route::post('/pier/store','PierController@store');
Route::post('/position/store','PositionController@store');
Route::post('/tugboat/store','TugboatController@store');
Route::post('/usertype/store','UsertypeController@store');

//edit AJAX Route
Route::post('/agreements/update','AgreementsController@update');
Route::post('/berth/update','BerthController@update');
Route::post('/pier/update','PierController@update');
Route::post('/position/update','PositionController@update');
Route::post('/employees/update','EmployeesController@update');
Route::post('/usertype/update','UsertypeController@update');
//Tugboat editRoutes
Route::post('/tugboat/pictures','TugboatController@updatePictures');
Route::post('/tugboat/maininfo','TugboatController@updateMain');
Route::post('/tugboat/specifications','TugboatController@updateSpecs');
Route::post('/tugboat/classification','TugboatController@updateClass');
//end Edit

//transactions Create
Route::post('/contracts/store','ContractsController@store');
//transactions getData
Route::get('/contracts/{intContractListID}/show','ContractsController@show');
//transactions edit Data
Route::get('/contracts/{intContractListID}/edit','ContractsController@edit');
//transaction Update
Route::post('/contracts/update','ContractsController@update');
//deleteTransactions
Route::get('/contracts/{intContractListID}/delete','ContractsController@delete');
//Route::get('/', function () {
//    return view('welcome');
//});

//transaction ---
Route::resource('/TugboatAssignment','TugboatAssignmentController');
Route::get('/TugboatAssignment-Assign','TugboatAssignmentController@createSched');

Route::resource('/Requests','RequestController');
Route::post('/Requests/store','RequestController@store');
// Route::put('/Request/{intCompanyID}','RequestController@accept');

Route::resource('/DispatchTicket','DispatchTicketController');
Route::get('/DispatchTicket/{intDispatchTicketID}/show','TugboatController@show');

Route::get('/contract-create/{intCompanyID}','ContractsController@contractcreate');
Route::get('/home', 'HomeController@index')->name('home');