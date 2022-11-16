<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
$model = new App\Models\Nama;
$data=$model→all();
foreach($data as $isi) {
print_r($isi->kolom);
}

$model = new App\Models\Nama;
print_r($model::find(1));