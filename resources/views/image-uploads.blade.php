<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <h1>Image Uploads</h1>
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" accept="image/*">
        <button type="submit">Upload</button>
    </form>
</div>
