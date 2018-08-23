@extends('layouts.app')

@section('content')
    <div class="container-fluid text-center" style="font-family:'Font'">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-success">
                    <span style="font-weight: bolder">
                        تیر و کمان
                    </span>
                    </div>
                    <br>
                    <div dir="rtl" class="text-right col-12" >
                        با خم کردن سیم مفتول به شکل زیر و بستن 30 سانتی متر کش به آن، یک کمان بسازید. با بقیه سیم مفتول تیر های خمیده ساخته و به سمت بادکنک مربوط به گروه خود پرتاب کنید. با ترکیدن بادکنک رمز خود را بردارید.
                    </div>
                    <br>
                </div>
                <br>
                <div id="map_container"></div>
                <div id="map" class="text-center"></div>
                <br>
                <img class="col-12" src="/img/trk.jpg">
                <br>
                <br>
                <script src="http://maps.google.com/maps/api/js?key={{$google_api_key}}" type="text/javascript"></script>
                <script type="text/javascript">
                    var locations = [['مکان بازی',{{$location}}]];

                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 17,
                        center: new google.maps.LatLng(36.951022, 50.613075),
                        mapTypeId: google.maps.MapTypeId.HYBRID
                    });

                    var infowindow = new google.maps.InfoWindow();

                    var marker, i;

                    for (i = 0; i < locations.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                            map: map
                        });

                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent(locations[i][0]);
                                infowindow.open(map, marker);
                            }
                        })(marker, i));
                    }
                </script>
                <br>
                <form method="POST" action="{{ route('p_9') }}">
                    @csrf

                    <div class="form-group row justify-content-center">
                        <label for="var" class="col-sm-4 col-form-label text-md-right">محل ورود کد دریافتی از مسئول</label>
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
