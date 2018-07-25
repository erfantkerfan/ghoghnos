@extends('layouts.app')

@section('content')
    <div class="container-fluid text-center" style="font-family:'Font'">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-success">
                    <span style="font-weight: bolder">
                        کشف رمز
                    </span>
                    </div>
                    <br>
                    <div dir="rtl" class="text-right col-12" >
                        در این بخش به شما یک جمله رمز گذاری شده نشان داده شده است. با توجه به 2 راهنمایی داده شده سعی کنید جمله رمزگذاری شده را به جمله اصلی برگردانید و جمله صحیح شده را در نرم افزار ثبت کنید.
                        <br>
                        <br>
                        {!! nl2br(e($q_8)) !!}
                    </div>
                    <br>
                </div>
                <br>
                <br>
                <form method="POST" action="{{ route('p_8') }}">
                    @csrf

                    <div class="form-group row justify-content-center">
                        <label for="var" class="col-sm-4 col-form-label text-md-right">عبارت رمزنگاری شده</label>
                        @if(Session::has('flash'))
                            <p class="alert alert-danger">{{ Session::get('flash') }}</p>
                        @endif
                        <div class="col-md-6">
                            <input id="var" dir="rtl" type="text" class="text-center form-control{{ $errors->has('var') ? ' is-invalid' : '' }}" name="var" value="{{ old('var') }}" required autofocus>

                            @if ($errors->has('var'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('var') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row mb-0 justify-content-center">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">
                                ثبت
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
