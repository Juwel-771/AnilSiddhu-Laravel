<h1>Student List</h1>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Delete</th>
    </tr>
    @foreach ($list as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->address}}</td>
            <td>
                <a href={{"delete/".$item['id']}}>Delete</a>
                <a href={{"edit/".$item['id']}}>Edit</a>
            </td>
        </tr>
    @endforeach
</table>