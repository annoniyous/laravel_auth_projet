<div class="container">
    <h1 class="text-danger">Edit Image</h1>
    <form action="/images/{{$edit->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="file" name="src"  placeholder="Image">
        </div>
        <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control">
            @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>