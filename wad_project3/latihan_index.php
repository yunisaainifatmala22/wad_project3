<?php
    $conn = mysqli_connect("localhost", "root", "", "wad_project3");
    $result = mysqli_query($conn, "SELECT * FROM student");
    //$data = mysqli_fetch_object($result);
    //var_dump($data->name);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Index Data Student</title>
</head>
<body>
    <h1>ini adalah halaman index anda!!</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID_Student</th>
                <th>Name</th>
                <th>NIM</th>
                <th>Address</th>
            </tr>
        <tbody>
        <?php while( $data = mysqli_fetch_object($result) ) { ?>
            <tr>
                <td><?php echo $data -> ID_Student ?></td>
                <td><?php echo $data -> Name ?></td>
                <td><?php echo $data -> NIM ?></td>
                <td><?php echo $data -> Address ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>