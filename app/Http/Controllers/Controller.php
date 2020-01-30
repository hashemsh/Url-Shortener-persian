<?php

namespace App\Http\Controllers;

use App\Model\Url;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function main()
    {
        return view('welcome');
    }
    public function create(Request $request)
    {
        $url = $request->input('url');
        $record = Url::whereurl($url)->first();
        if ($record && $record instanceof Url){
            $short_url = $record->short_url;
            return view('result',compact('short_url'));
        }
    }

    public function index($any)
    {
        dd($any);
    }
}
