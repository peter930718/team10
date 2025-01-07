
@extends('app')

@section('title', '國際合作調查計畫-國際合作標準資料')

@section('sdg_theme', '國際合作調查計畫-國際合作標準資料')

@section('sdg_contents')

新增表單

@include('message.list')
{!! Form::open(['url' => 'oberservation/store']) !!}
    @include('oberservation.form', ['submitButtonText'=>"新增調查計畫資料"])
{!! Form::close() !!}

@endsection
