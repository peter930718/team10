@extends('app')

@section('title', '標準資料')

@section('sdgs_theme', '標準資料')

@section('sdgs_contents')
<table border="1">
    <tr>
        <td>計畫/案件名稱</td>
        <td>{{ $oberservations->recruitment_year }}</td>
    </tr>
    <tr>
        <td>申請開始日</td>
        <td>{{$oberservations->application_start_date}}</td>
    </tr>
    <tr>
        <td>申請截止日</td>
        <td>{{$oberservations->application_deadline}}</td>
    </tr>
    <tr>
        <td>計畫名稱</td>
        <td>{{$oberservations->project_name}}</td>
    </tr>
    <tr>
        <td>國家</td>
        <td>{{$oberservations->country}}</td>
    </tr>
    <tr>
        <td>協議機構</td>
        <td>{{$oberservations->agreement_agency}}</td>
    </tr>
</table>

@endsection
