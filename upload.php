<?php
$adminPassword = "secret123"; // Change this!

if ($_POST['password'] !== $adminPassword) {
  die("❌ Incorrect password.");
}

if (isset($_FILES['image'])) {
  $uploadDir = "uploads/";
  $fileName = basename($_FILES["image"]["name"]);
  $targetFile = $uploadDir . time() . "_" . $fileName;

  if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
    echo "✅ Upload successful! <a href='index.html'>View Gallery</a>";
  } else {
    echo "❌ Upload failed.";
  }
} else {
  echo "❌ No file uploaded.";
}
?>
