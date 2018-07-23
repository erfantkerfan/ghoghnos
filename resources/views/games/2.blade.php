@extends('layouts.app')

@section('content')
    <div class="container-fluid text-center" style="font-family:'Font'">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-success">
                    <span style="font-weight: bolder">
                        مطالعه
                    </span>
                    </div>
                    <br>
                        <div dir="rtl" class="text-center col-10 offset-1" style="color: #3b70bf">
                            با توجه به متن، پاسخ سوال ها را به ترتیب از روی گزینه ها مشخص کرده و یک کد 3 رقمی که نشان دهنده پاسخ می باشد را وارد کنید
                        </div>
                    <br>
                    <div dir="rtl" class="text-right col-12">
                        {!! nl2br(e($text)) !!}
                    </div>
                    <div class="card-body text-center">
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header text-center bg-success">
                    <span style="font-weight: bolder">
                        سوالات
                    </span>
                    </div>
                    <br>
                    <div dir="rtl" class="text-right col-12">
                        {!! nl2br(e($q)) !!}
                        <br>
                        <div class="text-center" style="color: #80bdff">
                            گزینه ها:
                        </div>
                        <br>
                        {!! nl2br(e($ma)) !!}
                    </div>
                    <br>
                    <div class="card-body text-center">
                    </div>
                </div>

                <br>
                <form method="POST" action="{{ route('p_2') }}">
                    @csrf

                    <div class="form-group row justify-content-center">
                        <label for="username" class="col-sm-4 col-form-label text-md-right">محل ورود گد 3 رقمی پاسخ</label>
                        @if(Session::has('flash'))
                            <p class="alert alert-danger">{{ Session::get('flash') }}</p>
                        @endif
                        <div class="col-md-6">
                            <input id="var" type="number" class="text-center form-control{{ $errors->has('var') ? ' is-invalid' : '' }}" name="var" value="{{ old('var') }}" required autofocus>

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
