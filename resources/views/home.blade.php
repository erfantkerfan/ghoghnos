@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <span style="font-weight: bolder">
                        پنل مشاهده بازیکنان
                    </span>
                </div>

                <div class="card-body text-center" dir="rtl">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>رمز ورود</th>
                            <th>وضعیت ورود</th>
                            <th>مرحله شروع</th>
                            <th>مرحله فعال</th>
                            <th>مجموع امتیاز</th>
                            <th>مرحله 1</th>
                            <th>مرحله 2</th>
                            <th>مرحله 3</th>
                            <th>مرحله 4</th>
                            <th>مرحله 5</th>
                            <th>مرحله 6</th>
                            <th>مرحله 7</th>
                            <th>مرحله 8</th>
                            <th>مرحله 9</th>
                            <th>مرحله 10</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($players as $player)
                            <tr>
                                <td>{{$player->id}}</td>
                                <td>{{$player->pass}}</td>
                                <td>
                                    @if ($player->login==0)
                                        <span class="glyphicon glyphicon-remove" style="color:red"></span>
                                    @elseif ($player->login==1)
                                        <a href="{{route('allow',['id'=>$player->id])}}">
                                            <button class="btn">
                                                <span class="glyphicon glyphicon-ok" style="color:green"></span>
                                            </button>
                                        </a>
                                    @endif
                                </td>
                                <td>{{$player->start}}</td>
                                <td>{{$player->state}}</td>
                                <td>{{$player->score->final()}}</td>
                                <td style="border-right: 2px solid black;">{{$player->score->lvl_1}}</td>
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
