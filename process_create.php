<?php
$conn = mysqli_connect("localhost", "root", "1qaz2wsx", "phppractice");
$filtered = array(
  'title'=>mysqli_real_escape_string($conn, $_POST['title']),
  'description'=>mysqli_real_escape_string($conn, $_POST['description']),
  'author_id'=>mysqli_real_escape_string($conn, $_POST['author_id'])
);
$sql = "
INSERT INTO topic(
    title,
    description,
    created_time,
    author_id
    )
  VALUE (
    '{$filtered['title']}',
    '{$filtered['description']}',
    NOW(),
    '{$filtered['author_id']}'
  )
  ";
if (!mysqli_query($conn, $sql)) {
  echo 'system error';
  error_log(mysqli_error($conn));
} else {
  echo "<script>
    alert(\"success\");
    location.href=\"index.php\";
    </script>";
}

?>
