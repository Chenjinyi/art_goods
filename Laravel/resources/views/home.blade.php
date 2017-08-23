@extends('layouts.home')

@section('header')
    <h1 class="page-header">
        仪表盘 <small>Welcome  {{Auth::user()->name}}  !</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">仪表盘</li>
    </ol>
@endsection

