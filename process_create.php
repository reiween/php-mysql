<?php
$conn = mysqli_connect("localhost", "root", "1qaz2wsx", "phppractice");
$sql = "
INSERT INTO topic(
    title,
    description,
    created_time
    )
  VALUE (
    '{$_POST['title']}',
    '{$_POST['description']}',
    NOW()
  )
  ";
if (!mysqli_query($conn, $sql)) {
  echo 'system error';
  error_log(mysqli_error($conn));
}


?>
