<div class="container">
    <h1>Edit Avatar</h1>
        <form action="/avatars/{{$edit->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
            <input type="text" name="name" class="form-control" value="{{$edit->name}}" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="file" name="src" placeholder="File">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>