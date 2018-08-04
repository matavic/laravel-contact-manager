<?php

use App\Contact;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */
Route::group(['middleware' => 'api'], function () {
    // Fetch Contacts
    Route::get('contacts', function () {
        return Contact::latest()->orderByDesc('created_at')->get();
    });

    // Get single Contact
    Route::get('contact/{id}', function ($id) {
        return Contact::findOrFail($id);
    });

    // Add Contact
    Route::post('contact/store', function (Request $request) {
        return Contact::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
        ]);
    });

    // Update Contact
    Route::patch('contact/{id}', function (Request $request, $id) {

        Contact::findOrFail($id)->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
        ]);
    });

    // Delete Contact
    Route::delete('contact/{id}', function ($id) {

        return Contact::destroy($id);
    });

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
