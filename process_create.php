<?php
$conn = mysqli_connect("localhost", "root", "1qaz2wsx", "phppractice");
$filtered = array(
  'title'=>mysqli_real_escape_string($conn, $_POST['title']),
  'description'=>mysqli_real_escape_string($conn, $_POST['description'])
);
$sql = "
INSERT INTO topic(
    title,
    description,
    created_time
    )
  VALUE (
    '{$filtered['title']}',
    '{$filtered['description']}',
    NOW()
  )
  ";
if (!mysqli_query($conn, $sql)) {
  echo 'system error';
  error_log(mysqli_error($conn));
} else {
  echo "<script>
    alert(\"success\");
    location.href=\'index.php\';
    </script>";
}

?>
