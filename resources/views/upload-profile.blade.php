<div>
    <form action="/upload_profile" enctype="multipart/form-data" method="post">
        @csrf
        <input type="file" name="file" id="file"><br/>
        <button type="submit">Upload</button>
    </form>
    <!-- It always seems impossible until it is done. - Nelson Mandela -->
</div>
