<?php

App::setLocale('en');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');
foreach(Lang::get('routes') as $k => $v) {
	Route::pattern($k, $v);
}
Route::get('/{seo}/','PagesController@seo');
Route::get('/{programming}/','PagesController@programming');
Route::get('/{design}/','PagesController@design');
Route::get('/{services}/','PagesController@services');
Route::get('/{contacts}/','PagesController@contacts');
Route::post('send-mail', 'PagesController@sendMail');
Route::get('sitemap', 'SitemapsController@index');
Route::get('sitemap.xml', 'SitemapsController@index');

Route::get('robots.txt', function ()
{
	if (App::environment() == 'production') {
		// If on the live server, serve a nice, welcoming robots.txt.
		Robots::addUserAgent('*');
		Robots::addSitemap('sitemap');
	} else {
		// If you're on any other server, tell everyone to go away.
		Robots::addDisallow('*');
	}

	return Response::make(Robots::generate(), 200, ['Content-Type' => 'text/plain']);
});