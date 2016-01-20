<?php

use Illuminate\Http\Request;

Route::get('browse', function ()
{
    $profiles = App\UserProfile::all();
    return view('frontend.browse', compact('profiles'));
});

Route::get('profile', function ()
{
    return view('frontend.profile');
});

Route::get('api/profile', function (Request $request)
{
    $defaultPerPage = 10;
    $defaultPage = 1;

    if(!empty($request->input('per_page')) && (int)$request->input('per_page')>$defaultPerPage){
        $users = App\UserProfile::paginate((int)$request->input('per_page'));
    }else{
        $users = App\UserProfile::paginate($defaultPerPage);
    }

    return $users;
});

Route::group(['middleware' => 'web'], function() {
    /**
     * Switch between the included languages
     */
    Route::group(['namespace' => 'Language'], function () {
        require (__DIR__ . '/Routes/Language/Language.php');
    });

    /**
     * Frontend Routes
     * Namespaces indicate folder structure
     */
    Route::group(['namespace' => 'Frontend'], function () {
        require (__DIR__ . '/Routes/Frontend/Frontend.php');
        require (__DIR__ . '/Routes/Frontend/Access.php');
    });
});

/**
 * Backend Routes
 * Namespaces indicate folder structure
 * Admin middleware groups web, auth, and routeNeedsPermission
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    /**
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     */
    require (__DIR__ . '/Routes/Backend/Dashboard.php');
    require (__DIR__ . '/Routes/Backend/Access.php');
    require (__DIR__ . '/Routes/Backend/LogViewer.php');
});
