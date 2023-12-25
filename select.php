<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  'root',
  'opentutorials');

echo "<h1>single row</h1>";
$sql = "SELECT * FROM topic WHERE id = 6";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo '<h2>'.$row['title'].'</h2>';
echo $row['description'];

echo "<h1>multi row</h1>";
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
//var_dump($result->num_rows);

/* var_dump(NULL == false);    // 출력: bool(true)
while 문의 조건식은 무조건 실행이 되는데, 데이터가 없을 경우 NULL값이 반환된다.
php에서는 NULL과 false가 동일하므로 다음 데이터가 없으면 자동으로 while 문을 빠져나온다. */
while($row = mysqli_fetch_array($result)) {
  echo '<h2>'.$row['title'].'</h2>';
  echo $row['description'];
}