<!DOCTYPE html>
<html> 
<head>
    <title> Print Laporan Data Tujuan </title> 
</head> 
<body onload="window.print()">
    <h3> Laporan Data Tujuan </h3>
    <hr> 
    <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">   
        <thead>
            <tr>
                  <th>No</th>
                  <th>Kode Jadwal</th>
                  <th>Kota Asal</th>
                  <th>Kota Tujuan</th>
                  <th>Jam Berangkat</th>
                  <th>Jam Sampai</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ; foreach ($jadwal as $row ) { ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row['kd_jadwal']; ?></td>
                  <td><?php echo strtoupper($row['kota_tujuan']); ?></td>
                  <td><?php echo strtoupper($row['wilayah_jadwal']); ?></td>
                  <td><?php echo date('H:i',strtotime($row['jam_berangkat_jadwal'])); ?></td>
                  <td><?php echo date('H:i',strtotime($row['jam_tiba_jadwal'])); ?></td>
                  <td>Rp <?php echo number_format((float)($row['harga_jadwal']),0,",","."); ?>,-</td>
                  <td><a href="<?php echo base_url('backend/jadwal/viewjadwal/'.$row['kd_jadwal']) ?>" class="btn btn-primary">VIEW</a></td>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>