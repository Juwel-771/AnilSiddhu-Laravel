<h3>File Upload</h3>
<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"><br><br>
    <button type="submit">Upload</button>
</form>