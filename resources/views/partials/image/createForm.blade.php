<div class="container">
    <h1 class="text-danger">Add Image</h1>
    <form action="/images" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="src"  placeholder="Image">
        </div>
        <div class="form-group">
            <select name="category_id" class="form-control text-success" placeholder="Category">
                @foreach ($categories as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>