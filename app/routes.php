<?php
Route::get('/tdl', array('as' =>'home', 'uses' => 'TDLController@getTDL'));
Route::post('/tdl', array('uses' => 'TDLController@postTDL'))->before('	csrf');
Route::get('/',function()
{
	return View::make('accueil');
});
?>