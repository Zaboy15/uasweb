<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Tambah Mahasiswa Baru</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Nim</th> <th>Nama</th> <th>Semester</th> <th>Prodi</th><th>Fakultas</th>
    </tr>
    <?php  
    while($mahasiswa = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$mahasiswa['Nim']."</td>";
        echo "<td>".$mahasiswa['Nama']."</td>";
        echo "<td>".$mahasiswa['Semester']."</td>";
        echo "<td>".$mahasiswa['Prodi']."</td>";    
        echo "<td>".$mahasiswa['Fakultas']."</td>";   
    }
    ?>
    </table>
</body>
</html>