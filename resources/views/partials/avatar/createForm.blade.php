<div class="container">
    <h1 class="text-danger">Add Avatar</h1>
    <form action="/avatars" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="file" name="src"  placeholder="File" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>