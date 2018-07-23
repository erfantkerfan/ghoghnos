@extends('layouts.app')

@section('content')
    <div class="container-fluid text-center" style="font-family:'Font'">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-success">
                    <span style="font-weight: bolder">
                        هوش
                    </span>
                    </div>
                    <br>
                    <div dir="rtl" class="text-right col-12" >
                        <span style="color: #80bdff">
                        در یک خیابان 5 خانه وجود دارد که با پنج رنگ متفاوت رنگ شده اند. خانه شماره 1 در سمت راست قرار دارد.
                        <br>
                        در هر خانه یک نفر با اهلیت متفاوت زندگی می کند.
                        <br>
                        هر کدام از صاحبخانه ها یک نوشیدنی متفاوت می نوشد, یک غذای متفاوت می خورند و یک حیوان خانگی متفاوت را نگهداری می کند.
                        <br>
                        <br>
                        </span>
                        {{$q_1}}
                        <br>
                        {{$q_2}}
                        <br>
                        {{$q_3}}
                        <br>
                        {{$q_4}}
                        <br>
                        {{$q_5}}
                        <br>
                        {{$q_6}}
                        <br>
                        {{$q_7}}
                        <br>
                        {{$q_8}}
                        <br>
                        {{$q_9}}
                        <br>
                        {{$q_10}}
                        <br>
                        {{$q_11}}
                        <br>
                        {{$q_12}}
                        <br>
                        {{$q_13}}
                        <br>
                        {{$q_14}}
                        <br>
                        {{$q_15}}
                        <br>
                        {{$q_16}}
                        <br>
                        <br>
                        <span style="color:red">
                            صاحب  و رنگ و غذا و نوشیدنی خانه ای که خرگوش نگهداری می کند، چیست؟
                        </span>
                        <br>
                        <br>
                        <div dir="rtl" class="text-center col-12" style="color: #3b70bf">
                            بعد از حل کامل معما باید یک کد 4 رقمی بسازید به این صورت که رقم اول از چپ اهلیت ، رقم دوم رنگ ، رقم سوم غذا و رقم چهارم نوشیدنی را مشخص می کند.
                        </div>
                        <br>
                        اهلیت:	1. اصفهان	2. اهواز		3. تبریز		4. تهران 		5. مشهد
                        <br>
                        رنگ:	1. آبی		2. سبز		3. سفید		4. زرد		5. قرمز
                        <br>
                        غذا:	1. بریانی		2. فلافل		3. قیمه		4. کباب		5. کوفته
                        <br>
                        نوشیدنی:	1. آب		2. چای		3. شیر		4. قهوه		5. نوشابه
                        <br>
                        <br>
                        مثلا: کد 4512 یعنی اهل تهران است و در خانه قرمز رنگ زندگی می کند. بریانی می خورد و چای می نوشد.
                    </div>

                    <br>
                </div>
                <br>
                <form method="POST" action="{{ route('p_4') }}">
                    @csrf

                    <div class="form-group row justify-content-center">
                        <label for="username" class="col-sm-4 col-form-label text-md-right">جواب 4 رقمی</label>
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
