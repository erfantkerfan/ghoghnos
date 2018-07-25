@extends('layouts.app')

@section('content')
    <div class="container-fluid text-center" style="font-family:'Font'">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                    <span style="font-weight: bolder">
                        پنل مشاهده دیگر بازیکنان
                    </span>
                    </div>

                    <div class="card-body text-center" dir="rtl">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>مجموع امتیاز</th>
                                <th>تعداد مراحل عبور کرده</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->score}}</td>
                                    <td>{{$user->pass}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
