<?php
$conn = mysqli_connect("localhost", "root", "1qaz2wsx", "phppractice");
settype($_POST['id'], 'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id'])
);
$sql = "
    DELETE
      FROM phppractice.topic
      WHERE id = {$filtered_id['id']}
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
