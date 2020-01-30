@extends('layout')
@section('content')
    <form action="/" method="post" class="w-75 m-auto text-center">
        {{ csrf_field() }}
        <label for="url" class="text-center mb-5">لینک کامل را وارد کنید </label>
        <input type="text" name="url" id="url" class="form-control mb-5">
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