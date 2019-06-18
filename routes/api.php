<?php
/**
 * Created by PhpStorm.
 * User: jwambugu
 * Date: 6/18/19
 * Time: 11:31 AM
 */
Route::group([
	'prefix' => 'payments-callbacks',
	'namespace' => 'TecksolKE\Payment',
	'middleware' => 'signed',
], function () {
	// STK Callback
	Route::post('stk-callback', 'CallbackController@stkCallback')->name('stk.callback');
});