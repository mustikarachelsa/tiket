<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Order</title>
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
    <h2>Laporan Data Order</h2>
    <hr>
    <table>
        <tr>
            <th>No</th>
            <th>Kode Order</th>
            <th>Kode Jadwal</th>
            <th>Tanggal Berangkat</th>
            <th>Nama Pemesan</th>
            <th>Tanggal Beli</th>
            <th>Jumlah Tiket</th>
            <th>Status</th>
        </tr>
        <?php $i=1;foreach ($order as $row) { ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['kd_order']; ?></td>
            <td><?php echo $row['kd_jadwal']; ?></td>
            <td><?php echo hari_indo(date('N',strtotime($row['tgl_berangkat_order']))).', '.tanggal_indo(date('Y-m-d',strtotime(''.$row['tgl_berangkat_order'].'')));?>
            </td>
            <td><?php echo $row['nama_order']; ?></td>
            <td><?php echo $row['tgl_beli_order']; ?></td>
            <?php $sqlcek = $this->db->query("SELECT * FROM tbl_order WHERE kd_order LIKE '".$row['kd_order']."'")->result_array(); ?>
            <td><?php echo count($sqlcek); ?></td>
            <?php if ($row['status_order'] == '1') { ?>
            <td class="btn-danger"> Belum Bayar</td>
            <?php } elseif($row['status_order'] == '2') { ?>
            <td class="btn-success"> Sudah Bayar</td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
</body>

</html>