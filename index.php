<?php
$hari	= date("d");
$bulan	= date ("m");
$tahun	= date("Y");
$jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
var_dump($jumlahhari);
?>
<table style="border:2px solid #1E90FF">
  <tr bgcolor="#ADD8E6">
  <td align=center><font color="#FF0000">Minggu</font></td>
  <td align=center>Senin</td>
  <td align=center>Selasa</td>
  <td align=center>Rabu</td>
  <td align=center>Kamis</td>
  <td align=center>Jumat</td>
  <td align=center>Sabtu</td>
  </tr>
  <?php
$s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
 var_dump($s);
for ($ds=1;$ds<=$s;$ds++) {
echo "<td></td>";
}
 
for ($d=1;$d<=$jumlahhari;$d++) {
 
	if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
		echo "<tr>"; 
		}
	$warna="#000000"; // warna default
	$warna_now="#990099"; // warna tgl skrng
	 if($hari== date('d')){echo "";}
	if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#FF0000"; }
	if($d == date('d')){
		echo "<td align=center valign=middle style='background-color:$warna_now;'> <span style=\"color:#fff\"><b>$d</b></span></td>"; 
	}else{
		echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
	}
	if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
}
echo '</table>'; 
?>