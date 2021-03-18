@extends('template.main')

@section('content')
    @if (count($avatars) < 5)
        @include('partials.avatar.createForm')
    @endif
    @include('partials.avatar.tableAvatar')
@endsection