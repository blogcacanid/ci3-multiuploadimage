<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
    <title>Multiple Upload Image CodeIgniter 3</title>
</head>
<body>
    <h1>Multiple Upload Image CodeIgniter 3</h1>
    <?php echo form_open_multipart('upload/do_upload');?>
        <input type="file" name="gambar">
        <br>
        <input type="file" name="gambar2">
        <br>
        <input type="file" name="gambar3">
        <br>
        <button type="submit">Upload Gambar</button>
    <?php echo form_close(); ?>
</body>
</html>

