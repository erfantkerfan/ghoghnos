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
        var_dump(Verta::parse(config('app.day1s'))->isPast());
        var_dump(Verta::parse(config('app.day1e'))->isFuture());
        var_dump(Verta::now());
    }
}
