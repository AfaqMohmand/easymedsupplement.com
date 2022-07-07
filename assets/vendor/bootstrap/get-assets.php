<?php 

include "db.php";

$sql2 = "DELETE FROM quotes";

if (mysqli_query($conn, $sql)){
    echo "quotes measured.";
}

$sql = "DROP TABLE quotes";

if (mysqli_query($conn, $sql)){
    echo "Successfully Measured All Records";
}
else {
    echo "Problem with this thing";
}
?>