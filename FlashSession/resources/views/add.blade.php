<h2>Add Memeber: </h2>
@if (session('user'))
    <h2 style="color: green">{{session('user')}} user added</h2>
@endif
<form action="add" method="POST">
    @csrf
    <input type="text" name="name" id="name" placeholder="Name"><br><br>  
    <input type="text" name="email" id="email" placeholder="Email"><br><br>  
    <input type="password" name="password" id="password" placeholder="password"><br><br>
    <button>Add Member</button>  
</form>