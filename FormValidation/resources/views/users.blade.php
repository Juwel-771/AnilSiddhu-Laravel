<h3>Form Validation</h3>
<form action="users" method="POST">
    @csrf
    <input type="text" name="name" id="name"><span style="color:red">@error('name')
        {{$message}}
    @enderror</span><br><br>
    <input type="password" name="password" id="password">
    <span style="color: blue">
        @error('password')
            {{$message}}
        @enderror
    </span>
    <br><br>
    <button type="submit">Submit</button>
</form>