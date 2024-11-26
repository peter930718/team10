@extends('app')

@section('title', '顯示表單')

@section('nba_theme', '您所選取的球隊資料')

@section('nba_contents')
球隊編號：{{ $team->id }}<br/>
球隊名字：{{ $team->name }}<br/>
球隊所在城市：{{ $team->city }}<br/>
球隊分區：{{ $team->zone }}<br/>
球隊主場：{{ $team->home }}<br/>

<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    {{ $team->name }}所有球員
</div>
<table>
    <tr>
        <th>徵求年度</th>
        <th>申請開始日</th>
        <th>申請截止日</th>
        <th>計畫名稱</th>
        <th>國家</th>
        <th>協議機構</th>
    </tr>
    @foreach ($oberservations as  $oberservation)
                <tr>
                <td >{{$oberservation->recruitment_year}}</td>
                <td>{{$oberservation->application_start_date}}</td>
                <td>{{$oberservation->application_deadline}}</td>
                <td>{{$oberservation->project_name}}</td>
                <td>{{$oberservation->country}}</td>
                <td>{{$oberservation->agreement_agency}}</td>
                </tr>
    @endforeach

</table>

@endsection
