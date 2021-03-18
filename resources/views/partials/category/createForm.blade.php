<div class="container">
    <h1>Add Category</h1>
    <form action="/categories" method="POST">
        @csrf
        <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Name" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>