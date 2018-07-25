@extends('layouts.app')

@section('content')
    <div class="container-fluid text-center" style="font-family:'Font'">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-success">
                    <span style="font-weight: bolder">
                        کلمه بازی
                    </span>
                    </div>
                    <br>
                    <div dir="rtl" class="text-right col-12" >
                        در این قسمت باید با این 6 حرف، 3 کلمه 3 حرفی معنا دار و 4 کلمه 4 حرفی معنادار بسازید و در نرم افزار ثبت کنید. دقت کنید ممکن است کلمه معناداری بسازید ولی مد نظر ما نباشد برای همین حتما دقت کنید که کلمات مد نظر نرم افزار را وارد کنید.
                        <br>
                        <br>
                        <div class="text-center">
                            {{$q}}
                        </div>
                        <br>
                        <br>
                        <div class="text-center" style="color: green">
                            {{$hidden}}
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                <br>
                <form method="POST" action="{{ route('p_10') }}">
                    @csrf

                    <div class="form-group row justify-content-center">
                        <label for="var" class="col-sm-4 col-form-label text-md-right">محل ورود کلمه</label>
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

                    <input id="hidden" type="hidden" name="hidden" value="{{ $hidden }}">


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
