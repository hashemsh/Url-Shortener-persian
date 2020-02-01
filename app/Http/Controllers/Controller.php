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
        $request->validate([
            'url' => 'required|url'
        ],[
            'url.required' => 'لینک خود را وارد کنید',
            'url.url' => 'لینک شما معتبر نیست'
        ]);

        $record = Url::whereurl($url)->first();
        if ($record && $record instanceof Url){
            $short_url = $record->short_url;
            return view('result',compact('short_url'));
        }
        $short_url = Url::get_unique_short_url();
        $make_short_url = Url::create([
            'url' => $url,
            'short_url' => $short_url
        ]);
        if ($make_short_url && $make_short_url instanceof  Url){
            return view('result',compact('short_url'));
        }
    }

    public function index($any)
    {
       $row = Url::where('short_url',$any)->first();
       if (!$row){
           return redirect()->to('/');
       }
       return redirect()->to($row->url);
    }
}
