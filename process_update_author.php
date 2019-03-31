<?php
$conn = mysqli_connect("localhost", "root", "1qaz2wsx", "phppractice");
settype($_POST['id'], 'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id']),
  'name'=>mysqli_real_escape_string($conn, $_POST['name']),
  'profile'=>mysqli_real_escape_string($conn, $_POST['profile'])
);
$sql = "
UPDATE phppractice.author
  SET
    name = '{$filtered['name']}',
    profile = '{$filtered['profile']}'
  WHERE
    id = {$filtered['id']}
  ";
if (!mysqli_query($conn, $sql)) {
  echo 'system error';
  error_log(mysqli_error($conn));
} else {
  echo "<script>
    alert(\"update success\");
    location.href=\"author.php?id=".$filtered['id']."\";
    </script>";
}

?>
