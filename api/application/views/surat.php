<?php
	function penyebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = penyebut($nilai - 10). " belas";
		} else if ($nilai < 100) {
			$temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " seratus" . penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " seribu" . penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}
 
	function terbilang($nilai) {
		if($nilai<0) {
			$hasil = "minus ". trim(penyebut($nilai));
		} else {
			$hasil = trim(penyebut($nilai));
		}     		
		return $hasil;
	}
	$angka = 10101000;
?>
<!doctype html>
<html><head></head><body>
<table border="0" class="table-1" style="margin:30px">
    <tr>
      <td colspan="3">
		<table width="100%" border="0" cellpadding="3">
		<tbody>          
		<tr>
            <td>Nomor</td>
            <td>:</td>
            <td width="50%">&nbsp;</td>
			<td align="right">04 Februari 2019</td>
          </tr>
		  <tr>
            <td>Lamp</td>
            <td>:</td>
            <td width="50%">&nbsp;</td>
			<td>&nbsp;</td>
          </tr> 
		  <tr>
            <td>Prihal</td>
            <td>:</td>
            <td width="50%">&nbsp;</td>
			<td>&nbsp;</td>
          </tr>
		</tbody>
      </table></td></tr>
    <tr>
      <td colspan="3">
      <br>Yth. Direktur Keuangan<br>
      RS. Jantung dan Pembuluh Darah Harapan Kita<br>
      Jakarta
	</td>
    </tr>
    <tr>
      <td colspan="3"><p align="justify">      Berdasarkan disposisi Direktur Umum dan SDM tanggal <?php echo date('d F Y',strtotime($result['created'])); ?>, prihal Mengikuti <?php echo $result['nama_pelatihan']; ?> di Instansi <?php echo $result["institusi"]; ?>, yang dilaksanakan pada tanggal <?php echo date('d',strtotime($result["tanggal"][0]["tanggal_from"])) ." s/d ". date('d F Y',strtotime($result["tanggal"][0]["tanggal_to"])) ?>, diselenggarakan oleh <?php echo $result["institusi"]; ?>. Bertempat di <?php echo $result["tujuan"]; ?>, an :</p></td>
    </tr>
    <tr>
      <td colspan="3">
        <?php if ($result["jenis"] == "Individu"): ?> 
        <table width="100%" border="0" cellpadding="3">
          <?php if (!empty($result["detail"])): ?> 
             <?php foreach ($result["detail"] as $key => $value): ?> 
                <tr>
                  <td width="7%" rowspan="4">
                    &nbsp;            
                  </td>
                  <td width="21%">
                    Nama              
                  </td>
                  <td width="2%">
                    :
                  </td>
                  <td width="70%">
                    <?php echo $value["nama_pegawai"] ?>
                  </td>
                </tr>
                <tr>
                  <td width="21%">
                    NIP              
                  </td>
                  <td width="2%">
                    :
                  </td>
                  <td width="70%">
                    <?php echo $value["nip"]; ?>
                  </td>
                </tr>
                <tr>
                  <td width="21%">
                    Pangkat / Gol              
                  </td>
                  <td width="2%">
                    :
                  </td>
                  <td width="70%">
                    <?php echo $value["pangkat"] ." - ". $value["golongan"] ?>
                  </td>
                </tr>
                <tr>
                  <td width="21%">
                    Jabatan              
                  </td>
                  <td width="2%">
                    :
                  </td>
                  <td width="70%">
                    <?php echo $value["jabatan"]; ?>
                  </td>
                </tr>
              <?php endforeach ?>
            <?php endif ?> 
        </table>
        <?php elseif ($result["jenis"] == "Kelompok"): ?> 
        <table width="100%" border="1px solid" cellpadding="1" cellspacing="0" class="table2">
          <tr>
            <th>No</th>
            <!-- <th>NIP / Nopeg</th> -->
            <th>Nama</th>
            <th>Jabatan / Unit Kerja</th>
          </tr>
          <?php if (!empty($result["detail"])): ?>
            <?php foreach ($result["detail"] as $key => $value): ?>
              <tr>
                <td><?php echo $key+1 ?></td>
                <!-- <td><?php echo $value["nip"] ." / ". $value["nopeg"] ?></td> -->
                <td><?php echo $value["nama_pegawai"] ?></td>
                <td><?php echo $value["jabatan"] ?></td>
              </tr>
            <?php endforeach ?>
          <?php endif ?>
        </table>
        <?php endif ?> 
      </td>
    </tr>
	<tr>
      <td colspan="3"><br>Maka bersama ini mengajukan biaya dimaksud sebesar:</td>
    </tr> 
    <tr>
      <td colspan="3"><table width="100%" border="1px solid" cellpadding="1" cellspacing="0"  class="table2">
		  <tr>
              <td><center><b>No</b></center></td>
              <td><center><b>Pengajuan berdasarkan <br>ketentuan Latbang</b></center></td>
			  <td><center><b>Uraian</b></center></td>
			  <td><center><b>Jumlah</b></center></td>
          </tr>
		<?php if (!empty($result["detail"][0]["detail_uraian"])): ?>
            <?php foreach ($result["detail"][0]["detail_uraian"] as $key => $value): ?>
          <tr>
            <td><center><?php echo $key+1 ?>.</center></td>
            <td><?php echo $value["uraian"]?></td>
            <td><?php echo $value["qty"]?> Orang x Rp. <?php echo number_format($value["pernominal"], 2, ",", ".")?></td>
            <td>Rp. <?php echo number_format($value["nominal"], 2, ",", ".")?></td>
          </tr>
		 <?php endforeach ?>
          <?php endif ?>
		  <tr>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="1">Rp. <?php echo number_format($result["detail"][0]["uraian_total"], 2, ",", ".")?></td>
          </tr> 
		  <tr>
            <td></td>
            <td></td>
            <td colspan="2">Terbilang : <?php $terbilang=terbilang($result["detail"][0]["uraian_total"]); echo ucfirst($terbilang);?> rupiah</td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="3">Terlampir kami sampaikan bukti pendukung perminaan tersebut.</td>
    </tr> 
	<tr>
      <td colspan="3"><p>Demikian surat ini disampaikan, atas bantuan dan kerjasamanya diucapkan terima kasih.</p></td>
    </tr>
	<tr>
      <td>Mengetahui</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>  
	<tr>
      <td width="50%">Kepala Bagian SDM dan Organisasi</td>
      <td width="34%">&nbsp;</td>
      <td width="50%">Kepala Sub Bagian Pengembangan SDM</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><b>drg. Sri Handayani, MARS</b></td>
      <td>&nbsp;</td>
      <td><b>SUWASTINI, SAp, MM</b></td>
    </tr>
    <tr>
      <td><b>NIP. 1963101519901020001</b></td>
      <td>&nbsp;</td>
      <td><b>NIP 196611101986032004</b></td>
    </tr> 
	<tr>
      <td width="40%">&nbsp;</td>
      <td width="65%"><br><center>Direktur Umum & SDM</center></br></td>
      <td width="20%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
	  <td>&nbsp;</td>
      <td><center><b>Dr.dr. Basuni Radi, SpJP(K),FIHA</b></center></td>
      <td>&nbsp;</td>
    </tr>
    <tr>      
	  <td>&nbsp;</td>
      <td><center><b>NIP. 196606122000121001</b></center></td>
      <td>&nbsp;</td>
    </tr>
</table>
</body></html>