@extends('template.main')

@section('content')
    <div class="container">
        <h1>Les utilisateurs</h1>
        <a class="btn btn-success" href="/users/create">Ajouter un users</a>
        @include('partials.user.tableUser')
        {{-- @include('partials.user.editForm') --}}     
    </div>   
@endsection