<?php
    $conn = mysqli_connect("localhost", "root", "", "wad_project3");
    $result = mysqli_query($conn, "SELECT * FROM student");

?>



    //var_dump($result);
    //$data = null;
    //while ($return = mysqli_fetch_object($result)) {
    //  $data[] = $return;
    //}