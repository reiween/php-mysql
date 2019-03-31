<?php
$conn = mysqli_connect("localhost", "root", "1qaz2wsx", "phppractice");
$filtered = array(
  'name'=>mysqli_real_escape_string($conn, $_POST['name']),
  'profile'=>mysqli_real_escape_string($conn, $_POST['profile'])
);
$sql = "
INSERT INTO phppractice.author(
    name,
    profile
    )
  VALUE (
    '{$filtered['name']}',
    '{$filtered['profile']}'
  )
  ";
if (!mysqli_query($conn, $sql)) {
  echo 'system error';
  error_log(mysqli_error($conn));
} else {
  echo "<script>
    alert(\"create success\");
    location.href=\"author.php\";
    </script>";
}

?>
