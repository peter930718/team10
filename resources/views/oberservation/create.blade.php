
@extends('app')

@section('title', '國際合作調查計畫-國際合作標準資料')

@section('sdg_theme', '國際合作調查計畫-國際合作標準資料')

@section('sdg_contents')

新增國際合作調查表單

{!! Form::open(['url' => 'oberservations/store']) !!}
    @include('oberservations.form', ['submitButtonText'=>"新增國際合作資料"])
{!! Form::close() !!}


@endsection
