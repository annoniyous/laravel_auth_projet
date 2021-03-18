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

        <label for="">avatar_id</label>
        <input type="radio"name="avatar_id"> 
        
    </form>
</div>