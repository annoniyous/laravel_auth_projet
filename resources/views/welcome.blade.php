@extends('template.main')
@section('content')
<div class="container">
    <h1 class="text-center">Bienvenue dans la page Welcome</h1>

        @auth
        <div class="card">
            <div class="card-header">
            {{Auth::user()->name}}, {{Auth::user()->firstname}}
            </div>
            <div class="card-body">
            <blockquote class="blockquote mb-0">
                @if (Auth::user()->avatar_id <= 1 )
                <img height="200px" src="{{asset("storage/img/".$avatars[0]->src)}}" alt="">
                @else
                <img height="200px" src="{{asset("storage/img/".Auth::user()->avatars->src)}}" alt="">
                @endif
            </blockquote>
            </div>
        </div>
        @endauth
        @foreach ($categories as $category)
        <div class="my-4 border rounded p-2">
            <h1>Category {{$category->name}}</h1>
            <hr>
            <div class="row">
                @foreach ($images->where('category_id',$category->id) as $item)
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img class="w-100"  src="{{asset('storage/img/'.$item->src)}}" alt="">
                        </div>
                    </div>
                    @if ($loop->iteration % 3 == 0)
                        </div>
                        <div class="row">
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
</div>
    
@endsection