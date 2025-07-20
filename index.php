<!DOCTYPE html>
<html>
<head>
  <title>Image Gallery</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>📸 Image Gallery</h1>
  <div class="gallery">
    <?php
      $images = glob("uploads/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
      foreach($images as $img) {
        echo "<img src='$img' alt='Image'>";
      }
    ?>
  </div>
</body>
</html>
