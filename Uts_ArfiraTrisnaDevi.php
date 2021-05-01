<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <form method="POST" name="frmpost" action="">
        <table align="center" border="3" cellpadding="2" cellspacing="5" bgcolor="#7FFFD4">
            <tr align="center">
                <td>
                    <h2><b><u>Silahkan Input Data</u></b></h2>
                    <h2><b><u>Pasien Covid19</u></b></h2>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
                        <table cellpadding="3" cellspacing="0">
                        <tr>
                            <td>Wilayah</td>
                            <td> : </td>
                            <td>  
                                <select name="wilayah" id="wilayah">
                                    <option value=""></option>
                                    <option value="DKI Jakarta">DKI Jakarta</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Banten">Banten</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Positif</td>
                            <td> : </td>
                            <td><input type="text" name="positif" size="25"></td>
                        </tr>
                        <tr>
                            <td size="40">Jumlah Dirawat</td>
                            <td> : </td>
                            <td><input type="text" name="rawat" size="25"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Sembuh</td>
                            <td> : </td>
                            <td><input type="text" name="sembuh" size="25"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Meninggal</td>
                            <td> : </td>
                            <td><input type="text" name="meninggal" size="25"></td>
                        </tr>
                        <tr>
                            <td>Nama Operator</td>
                            <td> : </td>
                            <td><input type="text" name="nama" size="25"></td>
                        </tr>
                        <tr>
                            <td>Nim Mahasiswa</td>
                            <td> : </td>
                            <td><input type="text" name="nim" size="25"></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="center"><input type="submit" name="btnOk" value="Simpan"></td>
                            <td><input type="submit"  value="Refresh Page" onClick="document.location.reload(true)"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
<br><br><br>
<center>
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    <?php if (isset($_POST['btnOk'])) {
        echo '<h3>Data Pemantaun Covid19 Wilayah ' . $_POST['wilayah'] . ' <br> Per '.date('d F Y H:i:s').' <br> '. $_POST['nama'] .' / '. $_POST['nim'] .'</h3>';
        echo '<table border="1" cellpadding="10" cellspacing="0" bgcolor="#7FFFD4">';
        echo '<thead>';
        echo '<tr>
                <th>Positif</th>
                <th>Dirawat</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
                </tr>';
        echo ' </thead>';
        echo '<tbody>
                <td>'.$_POST['positif'] .'</td>
                <td>'. $_POST['rawat'] .'</td>
                <td>'. $_POST['sembuh'] .'</td>
                <td>'. $_POST['meninggal'] .'</td>
              </tbody>';
        echo '</table>';
    } ?>
<script>
    function reloadpage()
    {
    location.reload()
    }
</script>
</center>
</body>
</html>

