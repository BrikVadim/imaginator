<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Imaginator</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="upload" enctype="multipart/form-data">
            <label for="image-chooser">Select an image:</label>
            <input type="file" name="image" id="image-chooser" />

            <input type="submit" name="submit" id="upload-image" value="Upload image" />
        </form>
        <?php include "image_loader.php" ?>
    </body>
</html>