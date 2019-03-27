<!doctype html>
<html><head></head><body>
<table border="0" class="table-1" style="margin:30px">
    <tr>
      <td colspan="3" align="center" style="font-size: 20px"><u><strong>S U R A T   -   T U G A S</strong></u></td>
    </tr>
    <tr>
      <td colspan="3" align="center" style="font-size: 15px">Nomor : KP.03.04/XX.4/       /<?php echo date('Y'); ?></td>
    </tr>
    <tr>
      <td colspan="3" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><p align="justify">      Yang bertanda tangan di bawah ini memberikan tugas kepada :</p></td>
    </tr>
    <tr>
      <td colspan="3" align="center">&nbsp;</td>
    </tr>
    
    <tr>
      <td colspan="3">
      <table width="100%" border="0" style="margin-top : 15px">
        <tr>
          <td width="9%" valign="top">
            <p>Untuk</p>
          </td>
          <td width="3%" valign="top">
            <p>:</p>
          </td>
          <?php if ($result["tanggal"][0]["tanggal_to"] != $result["tanggal"][0]["tanggal_from"]): ?>
          <td width="88%" valign="top">
            <p align="justify">Mengikuti <?php $result["nama_pelatihan"]; ?>, yang akan di laksanakan pada hari/tanggal <b><?php echo $result["tanggal"]["day_from"] ." s.d ". $result["tanggal"]["day_to"] . ", " . date('d',strtotime($result["tanggal"][0]["tanggal_from"])) ." s.d ". $result["tanggal"]["tanggal_to"]; ?>.</b> Pada pukul 07:30 WIB s.d Selesai. Bertempat di <?php echo $result["tujuan"]; ?>.</p>
          </td>
          <?php else: ?>
            <td width="88%" valign="top">
            <p align="justify">Mengikuti <?php $result["nama_pelatihan"]; ?>, yang akan di laksanakan pada hari/tanggal <b><?php echo $result["tanggal"]["day_to"] . ", " . $result["tanggal"]["tanggal_to"]; ?>. Pada pukul <?php echo $result["jam_mulai"] ?> s.d <?php echo $result["jam_sampai"] ?>. Bertempat di <?php echo $result["tujuan"]; ?>.</b></p>
          </td>
          <?php endif ?> 
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><p>Agar yang bersangkutan melaksanakan tugas dengan baik dan penuh tanggung jawab.</p></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" width="40%">&nbsp;</td>
      <td width="60%">Direktur Utama,</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" width="40%">&nbsp;</td>
      <td width="60%">Dr. dr. Iwan Dakota,  SpJP(K), MARS,FACC,FESC</td>
    </tr>
    <tr>
      <td colspan="2" width="40%">&nbsp;</td>
      <td width="60%">NIP 196601011996031001</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr><tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">
        <table border="0" width="100%">
          <tr>
            <td width="55%">&nbsp;</td>
            <td width="15%">Nomor</td>
            <td width="30%">: KP.03.04/XX.4/       /<?php echo date('Y'); ?></td>
          </tr>
          <tr>
            <td width="55%">&nbsp;</td>
            <td width="15%">Lampiran</td>
            <td width="30%">: <?php echo $result["jenis_surat"]; ?></td>
          </tr>
          <tr>
            <td width="55%">&nbsp;</td>
            <td width="15%">Hal</td>
            <td width="30%">: <?php echo $result["pengembangan_pelatihan_kegiatan_status"]->nama;?></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <?php if ($result["tanggal"][0]["tanggal_to"] != $result["tanggal"][0]["tanggal_from"]): ?>
        <td colspan="3" align="center"><b>DAFTAR NAMA PESERTA ACLS (<?php echo date('d',strtotime($result["tanggal"][0]["tanggal_from"])) ." s.d ". $result["tanggal"]["tanggal_to"]; ?>)</b></td>
      <?php else: ?>
        <td colspan="3" align="center"><b>DAFTAR NAMA PESERTA ACLS (<?php echo $result["tanggal"]["tanggal_to"]; ?>)</b></td>
      <?php endif ?>
      
    </tr>
    <tr>
      <td colspan="3">
        <table width="100%" border="1px solid" cellpadding="1" cellspacing="0" class="table2" style="margin-top: 15px">
          <tr>
            <th>No</th>
            <th>Nopeg</th>
            <th>Nama</th>
            <th>Unit Kerja</th>
          </tr>
          <?php if (!empty($result["detail"])): ?>
            <?php foreach ($result["detail"] as $key => $value): ?>
              <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $value["nopeg"] ?></td>
                <td><?php echo $value["nama_pegawai"] ?></td>
                <td><?php echo $value["jabatan"] ?></td>
              </tr>
            <?php endforeach ?>
          <?php endif ?>
        </table>
      </td>
    </tr>
</table>
</body></html>