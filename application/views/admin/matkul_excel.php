<table>
    <tr><th>ID</th><th>Nama_mk</th><th>Jumlah_sks</th></tr>

    <?php

    foreach ($matkul as $r)
    {
        echo "<tr><td>$r->ID_Mk</td>
              <td>$r->Nama_mk</td>
              <td>$r->Jumlah_sks</td>
              </tr>";
    }
    ?>
</table>