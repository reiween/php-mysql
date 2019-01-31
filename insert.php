<?php
$conn = mysqli_connect("localhost", "root", "1qaz2wsx", "phppractice");
$sql = "
INSERT INTO topic(
    title,
    description,
    created_time
    )
  VALUE (
    'MySql',
    'MySql is...',
    NOW()
  )
  ";
if (!mysqli_query($conn, $sql)) {
  echo mysqli_error($conn);
}


?>
