@extends('layouts.app')

@section('content')
    <div class="container-fluid text-center" style="font-family:'Font'">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-success">
                    <span style="font-weight: bolder">
                        کلیپ
                    </span>
                    </div>
                    <br>
                    <div dir="rtl" class="text-right col-12" >
                        یکی از کلمات کلیپ رمز این مرحله است. کدام ؟؟!!
                        <br>
                        قبلا راهنمایی شده اید!
                    </div>
                    <br>
                </div>
                <br>
                <video class="col-12" controls>
                    <source src="/video/1.mp4" type="video/mp4">
                </video>
                <br>
                <form method="POST" action="{{ route('p_6') }}">
                    @csrf

                    <div class="form-group row justify-content-center">
                        <label for="username" class="col-sm-4 col-form-label text-md-right">رمز کلیپ</label>
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
