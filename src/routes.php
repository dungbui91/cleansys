<?php

Route::get('enableMaintainMode', 'DungBui\CleanSys\CleansysController@enableMaintainMode')->name('enableMaintainMode');

Route::get('disableMaintainMode', 'DungBui\CleanSys\CleansysController@disableMaintainMode')->name('disableMaintainMode');

Route::get('enableCachePage', 'DungBui\CleanSys\CleansysController@enableCachePage')->name('enableCachePage');

Route::get('disableCachePage', 'DungBui\CleanSys\CleansysController@disableCachePage')->name('disableCachePage');

Route::get('clearCachePage', 'DungBui\CleanSys\CleansysController@clearCachePage')->name('clearCachePage');

Route::get('clearCacheView', 'DungBui\CleanSys\CleansysController@clearCacheView')->name('clearCacheView');

Route::get('clearCompile', 'DungBui\CleanSys\CleansysController@clearCompile')->name('clearCompile');

Route::get('clearAll', 'DungBui\CleanSys\CleansysController@clearAll')->name('clearAll');
