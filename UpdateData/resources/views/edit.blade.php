<h1>Update Student</h1>
<h1>Form User</h1>
<form action="edit/" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="name" id="name" placeholder="your name" value="{{$data['name']}}"><br><br>
    <input type="email" name="email" id="name" placeholder="your email" value="{{$data['email']}}"><br><br>
    <input type="address" name="address" id="name" placeholder="your address" value="{{$data['address']}}"><br><br>
    <button type="submit">Post</button>
</form>