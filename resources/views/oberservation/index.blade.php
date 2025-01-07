@extends('app')

@section('title', '臺灣鯨豚族群調查計畫-生態調查標準資料')

@section('sdg_theme', '臺灣鯨豚族群調查計畫-生態調查標準資料')

@section('sdg_contents')
    <table border="1">
            <tr>
                <th>計畫/案件名稱</th>
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
            <td><a href="{{ route('oberservation.show', ['id' => $oberservation->id]) }}">顯示</a></td>
            <td><a href="{{ route('oberservation.edit', ['id' => $oberservation->id]) }}">編輯</a></td>
            <td><a href="{{ route('observations.show', ['id' => $observation->id]) }}">顯示</a></td>
            <td><a href="{{ route('observations.edit', ['id' => $observation->id]) }}">編輯</a></td>
            <td>
                <form action="{{ url('/oberservation/delete', ['id' => $oberservation->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
            </tr>
        @endforeach
    </table>

@endsection
