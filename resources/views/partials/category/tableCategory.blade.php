<div class="container">
    <h1 class="my-5">Categories</h1>
    <table class="text-light bg bg-dark table table-striped mb-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Categories</th>
            <th scope="col">Delete</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <form action="/categories/{{$item->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <a class="btn btn-success" href="/categories/{{$item->id}}/edit">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>