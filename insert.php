<?php
$conn = mysqli_connect("localhost", "root", "root", "opentutorials");
$sql  = "
    INSERT INTO topic (
        title,
        description,
        created
    ) VALUES (
        'MySQL',
        'MySQL is ....',
        NOW()
    )";
$result = mysqli_query($conn, $sql);
/* '=='는 값의 일치 여부만 판단하고,
'==='는 자료형의 일치 여부까지 판단한다. */
if($result === false){
    echo mysqli_error($conn);
}
?>