@extends('layout')
@section('content')
    <form action="/" method="post" class="w-75 m-auto text-center">
        {{ csrf_field() }}
        <label for="url" class="text-center mb-5">لینک کامل را وارد کنید </label>
        <input type="text" name="url" id="url" class="form-control mb-5">
        <div class="form-group">
            <label class="specialLabel" for="specialUrl">لینک اختصاصی </label>
            <input type="text" name="specialUrl" id="specialUrl" class="form-control mb-5 specialInput" aria-describedby="specialHelp">
            <small id="specialHelp" class="form-text text-muted">در غیر اینصورت سیستم به صورت رندوم برای شما لینک میسازد</small>
        </div>
        <input type="submit" name="submit" class="btn btn-lg btn-outline-success" value="ثبت لینک">
    </form>
    <div class="col-12 mt-5 w-75 m-auto">
        @if($errors->any())
            <div class="alert alert-danger">
                <h5>لطفا خطا های زیر را اصلاح کنید :</h5>
                <br>
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
@endsection