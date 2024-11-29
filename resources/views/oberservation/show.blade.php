@extends('app')

@section('title', '顯示表單')

@section('sdgs_theme', '您所選取的資料')

@section('sdgs_contents')
徵求年度：{{ $team->recruitment_year }}<br/>
申請開始日：{{ $team->application_start_date }}<br/>
申請截止日：{{ $team->application_deadline }}<br/>
計畫名稱：{{ $team->project_name }}<br/>
國家：{{ $team->country }}<br/>
協議機構：{{ $team->agreement_agency }}<br/>

<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    {{ $team->name }}所有資料
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
