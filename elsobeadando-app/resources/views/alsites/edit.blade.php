@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">

<form id="profilePictureForm" enctype="multipart/form-data">
    <input type="file" id="profilePictureInput" accept="image/*" onchange="previewImage()">
    <img id="previewImage" src="#" alt="Preview" style="display:none; max-width: 300px; max-height: 300px;">
    <button type="button" onclick="uploadProfilePicture()">Upload</button>
</form>

<script>
    function previewImage() {
        const input = document.getElementById('profilePictureInput');
        const preview = document.getElementById('previewImage');

        const file = input.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(file);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    }

    function uploadProfilePicture() {
        const input = document.getElementById('profilePictureInput');
        const file = input.files[0];

        if (file) {
            // You can perform the file upload logic here, such as sending the file to a server using AJAX.
            // For simplicity, let's just log the file details to the console.
            console.log('Uploading file:', file);

            // Reset the form after upload
            document.getElementById('profilePictureForm').reset();
            document.getElementById('previewImage').style.display = 'none';
        } else {
            alert('Please select a file to upload.');
        }
    }
</script>

</div>
</div>
@endsection
