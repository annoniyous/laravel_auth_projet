<div class="container">
    <h1>Edit Category</h1>
    <form action="/categories/{{$edit->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
        <input type="text" name="name" class="form-control" value="{{$edit->name}}" placeholder="Name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>