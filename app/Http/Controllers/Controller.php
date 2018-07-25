<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Hekmatinasser\Verta\Facades\Verta;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test()
    {
        if (Verta::parse(config('app.day1s'))->isPast() && Verta::parse(config('app.day1e'))->isFuture()) {
            return 'OK1';
        }elseif (Verta::parse(config('app.day2s'))->isPast() && Verta::parse(config('app.day2e'))->isFuture()) {
            return 'OK2';
        }
        return 'NO';
    }
}
