@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to sidebar</p>
@endsection