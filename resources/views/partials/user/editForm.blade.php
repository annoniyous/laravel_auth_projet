<div class="container">
    @auth
    <h1 class="text-danger">Edit Your Profile</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="/users/{{$edit->id}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{$edit->name}}">
                </div>
            <div class="form-group">
                <label>Age</label>
                <input type="number" name="age" class="form-control" value="{{$edit->age}}">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" value="{{$edit->email}}">
            </div>
            <div>
                @foreach ($avatars as $avatar)
                        <div class="input-group my-2 col-6">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="radio" aria-label="Radio button for following text input" id="{{$avatar->id}}" value="{{$avatar->id}}" name="avatar_id">
                                </div>
                                @if ($avatar->id ==1)
                                    <img src="{{asset('storage/img/'.$avatars[0]->src)}}" alt="" height="100px">
                                @else
                                    <img src="{{asset('storage/img/'.$avatar->src)}}" alt="" height="100px">
                                @endif
                                
                            </div>
                        </div>
                    @endforeach  
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endauth
</div>