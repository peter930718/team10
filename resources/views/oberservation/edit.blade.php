
@extends('app')

@section('title', '國際合作調查計畫-國際合作標準資料')

@section('sdg_theme', '國際合作調查計畫-國際合作標準資料')

@section('sdg_contents')

編輯特定一筆國際合作表單

{!! Form::model($oberservation, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\ListController@update', $oberservation->id]]) !!}
    @include('oberservation.form', ['submitButtonText'=>"修改國際合作資料"])
{!! Form::close() !!}


@endsection
