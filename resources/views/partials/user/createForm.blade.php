<div class="container">
    <form action="/users" method="POST" >
        @csrf
        <label for="">name</label>
        <input type="text" name="name">

        <label for="">firstname</label>
        <input type="text"name="firstname">

        <label for="">email</label>
        <input type="email"name="email">

        <label for="">age</label>
        <input type="number"name="age">

        <label for="">password</label>
        <input type="password"name="password">

        <div class="form-group container row mx-5"> 

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
        <button type="submit">Add avatar</button>
    </form>
</div>