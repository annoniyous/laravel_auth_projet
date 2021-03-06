<div class="container">
    <h1 class="my-5">Avatars</h1>
<table class="text-light bg bg-dark table table-striped mb-5">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Delete</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($avatars as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td><img height="100px" src="{{asset('storage/img/'.$item->src)}}" alt=""></td>
            <td>
                <form action="/avatars/{{$item->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            <td>
                <a class="btn btn-success" href="/avatars/{{$item->id}}/edit">Edit</a>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>
</div>