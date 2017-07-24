<?php

Route::get('enableMaintainMode', 'DungBui\CleanSys\CleansysController@enableMaintainMode');

Route::get('disableMaintainMode', 'DungBui\CleanSys\CleansysController@disableMaintainMode');

Route::get('enableCachePage', 'DungBui\CleanSys\CleansysController@enableCachePage');

Route::get('disableCachePage', 'DungBui\CleanSys\CleansysController@disableCachePage');

Route::get('clearCachePage', 'DungBui\CleanSys\CleansysController@clearCachePage');

Route::get('clearCacheView', 'DungBui\CleanSys\CleansysController@clearCacheView');

Route::get('clearCompile', 'DungBui\CleanSys\CleansysController@clearCompile');

Route::get('clearAll', 'DungBui\CleanSys\CleansysController@clearAll');
