<?php
$conn = mysqli_connect("localhost", "root", "1qaz2wsx", "phppractice");
settype($_POST['id'], 'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id'])
);
$sql = "
    DELETE
      FROM phppractice.topic
      WHERE author_id = {$filtered['id']}
  ";
  mysqli_query($conn, $sql);
  
$sql = "
    DELETE
      FROM phppractice.author
      WHERE id = {$filtered['id']}
  ";
if (!mysqli_query($conn, $sql)) {
  echo 'system error';
  error_log(mysqli_error($conn));
} else {
  echo "<script>
    alert(\"delete success\");
    location.href=\"author.php\";
    </script>";
}

?>
