<?php 
 /**
 * THIS INTELLECTUAL PROPERTY IS COPYRIGHT Ⓒ 2020
 * SYSTHA TECH LLC. ALL RIGHT RESERVED
 * -----------------------------------------------------------
 * SALES@SYSTHATECH.COM 
 * 512 903 2202
 * WWW.SYSTHATECH.COM
 * -----------------------------------------------------------
*/


Route::get('/cms/{any}', 'systhatechController@cms');
Route::post('cms/enq', 'systhatechController@requestList');
Route::post('/cms/sub/email', 'systhatechController@emailsub');
Route::get('/cms/details/page', 'systhatechController@details');
Route::get('/', 'systhatechController@cms');