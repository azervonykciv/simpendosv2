<table>
    <tr><th>NIDN</th><th>Nama Dosen</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Gelar Lengkap</th><th>Alamat</th></tr>

    <?php

    foreach ($dosen as $r)
    {
        echo "<tr><td>$r->ID_Dosen</td>
              <td>$r->nama_dosen</td>
              <td>$r->tempat_lahir</td>
              <td>$r->tanggal_lahir</td>
              <td>$r->gelar_lengkap</td>
              <td>$r->alamat_malang</td>
              </tr>";
    }
    ?>
</table>