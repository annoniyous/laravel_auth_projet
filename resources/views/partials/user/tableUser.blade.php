<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Firstname</th>
            <th scope="col">Email</th>
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->firstname}}</td>
            <td>{{$item->email}}</td>
            <td><a class="btn btn-primary" href="/users/{{$item->id}}/edit">EDIT</a></td>
            <td>

              <form action="/users/{{$item->id}}" method="POST">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger" type="submit">DELETE</button>
              </form>
              
            </td>
          </tr>                
            @endforeach

        </tbody>
      </table>
</div>