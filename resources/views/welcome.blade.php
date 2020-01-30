@extends('layout')
@section('content')
    <form action="/" method="post" class="w-75 m-auto text-center">
        {{ csrf_field() }}
        <label for="url" class="text-center mb-5">لینک کامل را وارد کنید </label>
        <input type="text" name="url" id="url" class="form-control">
    </form>
    <div class="text-center bg-danger">

    </div>
@endsection