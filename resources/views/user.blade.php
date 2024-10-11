@extends('layouts.default')

@section('title', 'Usuários')
    
@endsection

@section('name')
    
    <h1>Usuários</h1>
    {{ $user->name }}<br/>
    {{ $user->email }}<br/>

@endsection
