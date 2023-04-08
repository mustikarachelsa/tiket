<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Jadwal</title>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
</head>

<body onload="window.print()">
    <h2>Laporan Data Jadwal</h2>
    <hr>
    <table>
        <tr>
            <th>No</th>
            <th>Kode Jadwal</th>
            <th>Kota Asal</th>
            <th>Kota Tujuan</th>
            <th>Jam Berangkat</th>
            <th>Jam Sampai</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1 ; foreach ($jadwal as $row ) { ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['kd_jadwal']; ?></td>
            <td><?php echo strtoupper($row['kota_tujuan']); ?></td>
            <td><?php echo strtoupper($row['wilayah_jadwal']); ?></td>
            <td><?php echo date('H:i',strtotime($row['jam_berangkat_jadwal'])); ?></td>
            <td><?php echo date('H:i',strtotime($row['jam_tiba_jadwal'])); ?></td>
            <td>Rp <?php echo number_format((float)($row['harga_jadwal']),0,",","."); ?>,-</td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>