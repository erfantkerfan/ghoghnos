@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">پنل مشاهده بازیکنان</div>

                <div class="card-body text-right" dir="rtl">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">رمز ورود</th>
                            <th scope="col">مرحله شروع</th>
                            <th scope="col">مرحله فعال</th>
                            <th scope="col">موقعیت</th>
                            <th scope="col">مجموع امتیاز ها</th>
                            <th scope="col">امتیاز مرحله 1</th>
                            <th scope="col">امتیاز مرحله 2</th>
                            <th scope="col">امتیاز مرحله 3</th>
                            <th scope="col">امتیاز مرحله 4</th>
                            <th scope="col">امتیاز مرحله 5</th>
                            <th scope="col">امتیاز مرحله 6</th>
                            <th scope="col">امتیاز مرحله 7</th>
                            <th scope="col">امتیاز مرحله 8</th>
                            <th scope="col">امتیاز مرحله 9</th>
                            <th scope="col">امتیاز مرحله 10</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($players as $player)
                            <tr>
                                <td>{{$player->id}}</td>
                                <td>{{$player->pass}}</td>
                                <td>{{$player->start}}</td>
                                <td>{{$player->state}}</td>
                                <td>{{$player->location}}</td>
                                <td>{{$player->score->final()}}</td>
                                <td>{{$player->score->lvl_1}}</td>
                                <td>{{$player->score->lvl_2}}</td>
                                <td>{{$player->score->lvl_3}}</td>
                                <td>{{$player->score->lvl_4}}</td>
                                <td>{{$player->score->lvl_5}}</td>
                                <td>{{$player->score->lvl_6}}</td>
                                <td>{{$player->score->lvl_7}}</td>
                                <td>{{$player->score->lvl_8}}</td>
                                <td>{{$player->score->lvl_9}}</td>
                                <td>{{$player->score->lvl_10}}</td>
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
