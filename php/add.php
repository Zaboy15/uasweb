<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
 
<body>
    <a href="index.php">Kembali ke Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nim</td>
                <td><input type="text" name="Nim"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>Semester</td>
                <td><input type="number" name="Semester"></td>
            </tr>
            <tr> 
                <td>Prodi</td>
                <td><input type="text" name="Prodi"></td>
            </tr>
            <tr> 
                <td>Fakultas</td>
                <td><input type="text" name="Fakultas"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    if(isset($_POST['Submit'])) {
        $Nim = $_POST['Nim'];
        $Nama = $_POST['Nama'];
        $Semester = $_POST['Semester'];
        $Prodi = $_POST['Prodi'];
        $Fakultas = $_POST['Fakultas'];

        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(Nim,Nama,Semester,Prodi,Fakultas) VALUES('$Nim','$Nama','$Semester','$Prodi','$Fakultas')");
        echo "Data Mahasiswa sudah ditambahkan. <a href='index.php'>View Data</a>";
    }
    ?>
</body>
</html>