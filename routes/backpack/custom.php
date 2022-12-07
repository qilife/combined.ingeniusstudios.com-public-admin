<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('tier', 'TierCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('tag', 'TagCrudController');
    Route::crud('album', 'AlbumCrudController');
    Route::crud('track', 'TrackCrudController');
    Route::crud('program', 'ProgramCrudController');
    Route::crud('playlist', 'PlaylistCrudController');
    Route::crud('user', 'UserCrudController');
	Route::crud('discover', 'DiscoverCrudController');
    Route::crud('consoletier', 'ConsoleTierCrudController');
    Route::crud('consolecategory', 'ConsoleCategoryCrudController');
    Route::crud('consoletag', 'ConsoleTagCrudController');
    Route::crud('consolealbum', 'ConsoleAlbumCrudController');
    Route::crud('consoletrack', 'ConsoleTrackCrudController');
    Route::crud('consoleprogram', 'ConsoleProgramCrudController');
    Route::crud('consoleplaylist', 'ConsolePlaylistCrudController');
    Route::crud('consoleuser', 'ConsoleUserCrudController');
	Route::crud('quantumtier', 'QuantumTierCrudController');
    Route::crud('quantumcategory', 'QuantumCategoryCrudController');
    Route::crud('quantumtag', 'QuantumTagCrudController');
    Route::crud('quantumalbum', 'QuantumAlbumCrudController');
    Route::crud('quantumtrack', 'QuantumTrackCrudController');
    Route::crud('quantumprogram', 'QuantumProgramCrudController');
    Route::crud('quantumplaylist', 'QuantumPlaylistCrudController');
    Route::crud('quantumuser', 'QuantumUserCrudController');
	Route::crud('quantumvideos', 'QuantumVideosCrudController');
	Route::crud('rifeuser', 'RifeUserCrudController');
	Route::crud('instruction', 'InstructionCrudController');
}); // this should be the absolute last line of this file