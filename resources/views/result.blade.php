@extends('layout')
@section('content')
    <h2 class="m-auto mb-5 w-25 text-success text-center">لینک کوتاه شما </h2>
    <div class="text-center mt-5">
        <a href="{{ $short_url }}">{{ 'url.sh/'.$short_url }}</a>
    </div>
@endsection