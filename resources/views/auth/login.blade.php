@extends('layouts.app')

@section('content')
<div class="container text-center" style="font-family:'Font'">
    <div class="row justify-content-center">
        <div class="col-md-7 justify-content-center">
            <div class="card justify-content-center">
                <div class="card-header text-center">ورود</div>

                <div class="card-body justify-content-center text-center">
                    <form method="POST" action="{{ route('login') }}" aria-label="ورود">
                        @csrf

                        <div dir="rtl" style="color: darkolivegreen">
                            نام کاربری شماره گروه (مثلا 1) میباشد و رمز ورود یک عدد 6 رقمی است که دو رقم سمت راست شماره گروه (مثلا 01) و چها رقم سمت چپ قبلا به شما تحویل داد شده است.
                            <br>
                            <br>
                            فکر کنید!!!
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-sm-4 col-form-label text-md-right">نام کاربری</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">رمز ورود</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row  justify-content-center">
                            <div class="col-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> مرا در حالت ورود نگه دار
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 justify-content-center">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">
                                    ورود
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection