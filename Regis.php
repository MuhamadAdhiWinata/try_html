<h2 style="text-align: center;"> Biodata </h2>

    <table>
    <form action="proses.php" method="post">
        <tr>
            <td width="700"> Nama Restoran </td>
            <td> <input type="text" name="nama"> </td>
        </tr>
        <tr>
            <td> Alamat </td>
            <td> <input type="text" name="alamat"> </td>
        </tr>
        <tr>
            <td> Nama Pemilik </td>
            <td> <input type="text" name="notp"> </td>
        </tr>
            <td> Jenis Makanan </td>
            <td> <input type="radio" name="jm" value="Tradisional"/>Tradisional</td>
            <td> <input type="radio" name="jm" value="Nusantara"/>Nusantara</td>
            <td> <input type="radio" name="jm" value="Western"/>Western</td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="submit" name="submit" id="submit" value="submit"></td>
        </tr>
        </form>
    </table>
    <?php
    include "koneksi.php";
    ?>
