<?php

namespace DungBui\CleanSys;

use Illuminate\Routing\Controller;
use Artisan, Storage, File;

class CleansysController extends Controller
{
    public function enableMaintainMode() {
        Artisan::call('down');
    }

    public function disableMaintainMode() {
        Artisan::call('up');
    }

    public function enableCachePage() {
        Storage::put('cachepage', 'File dùng để xác định chế độ cache trang.');
    }

    public function disableCachePage() {
        Storage::delete('cachepage');
    }

    public function clearCachePage() {
        File::deleteDirectory(storage_path('framework/cache'));
    }

    public function clearCacheView() {
        Artisan::call('view:clear');
    }

    public function clearCompile() {
        Artisan::call('clear-compiled');
    }
}
