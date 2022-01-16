<h3>User List</h3>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Profile</td>
    </tr>
    @foreach ($collection as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['first_name']}}</td>
            <td>{{$item['email']}}</td>
            <td><img src="{{$item['avatar']}}"></td>
        </tr>
    @endforeach
</table>