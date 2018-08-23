@extends('layouts.app')

@section('content')
    <div class="container-fluid text-center" style="font-family:'Font'">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-success">
                    <span style="font-weight: bolder">
                        مکانیک
                    </span>
                    </div>
                    <br>
                    <div dir="rtl" class="text-right col-12" >
                        {{ $q_7 }}
                    </div>
                    <br>
                </div>
                <br>
                <img class="col-12" src="/img/pelak.jpg">
                <br>
                <br>
                <br>
                <form method="POST" action="{{ route('p_7') }}">
                    @csrf

                    <div class="form-group row justify-content-center">
                        <label for="var" class="col-sm-4 col-form-label text-md-right">پاسخ مکانیک</label>
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
