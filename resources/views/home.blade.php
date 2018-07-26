@extends('layouts.app')

@section('content')

    {{--<head>--}}
        {{--<meta http-equiv="refresh" content="30">--}}
    {{--</head>--}}

<div class="container-fluid text-center" style="font-family:'Font'">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center">
                    <span style="font-weight: bolder">
                        پنل مشاهده بازیکنان
                    </span>
                </div>

                <div class="card-body text-center" dir="rtl">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
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
                                    <td>
                                        @if ($player->id > 24 )
                                            <span style="color:#0390d9">
                                                {{$player->id}}
                                            </span>
                                        @else
                                            <span style="color:#6a3cdd">
                                                {{$player->id}}
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($player->start==null && $player->state==null)
                                            <button type="button" class="btn btn-info btn-sm">پایان بازی</button>
                                        @else
                                            {{$player->start}}
                                        @endif
                                    </td>
                                    <td>{{$player->state}}</td>
                                    <td>
                                        @if ($player->score->final()==215)
                                            <button type="button" class="btn btn-success btn-sm">امتیاز کامل</button>
                                        @elseif ($player->score->final()==0)
                                            <button type="button" class="btn btn-danger btn-sm">صفر</button>
                                        @else
                                            {{$player->score->final()}}
                                        @endif
                                    </td>
                                    <td style="border-right: 2px solid black;">
                                        @if ($player->score->lvl_1==-1)
                                            <button type="button" class="btn btn-warning btn-sm">عبور</button>
                                        @else
                                            {{$player->score->lvl_1}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($player->score->lvl_2==-1)
                                            <button type="button" class="btn btn-warning btn-sm">عبور</button>
                                        @else
                                            {{$player->score->lvl_2}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($player->score->lvl_3==-1)
                                            <button type="button" class="btn btn-warning btn-sm">عبور</button>
                                        @else
                                            {{$player->score->lvl_3}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($player->score->lvl_4==-1)
                                            <button type="button" class="btn btn-warning btn-sm">عبور</button>
                                        @else
                                            {{$player->score->lvl_4}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($player->score->lvl_5==-1)
                                            <button type="button" class="btn btn-warning btn-sm">عبور</button>
                                        @else
                                            {{$player->score->lvl_5}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($player->score->lvl_6==-1)
                                            <button type="button" class="btn btn-warning btn-sm">عبور</button>
                                        @else
                                            {{$player->score->lvl_6}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($player->score->lvl_7==-1)
                                            <button type="button" class="btn btn-warning btn-sm">عبور</button>
                                        @else
                                            {{$player->score->lvl_7}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($player->score->lvl_8==-1)
                                            <button type="button" class="btn btn-warning btn-sm">عبور</button>
                                        @else
                                            {{$player->score->lvl_8}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($player->score->lvl_9==-1)
                                            <button type="button" class="btn btn-warning btn-sm">عبور</button>
                                        @else
                                            {{$player->score->lvl_9}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($player->score->lvl_10==-1)
                                            <button type="button" class="btn btn-warning btn-sm">عبور</button>
                                        @else
                                            {{$player->score->lvl_10}}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection