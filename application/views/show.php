<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}

table {
  width: 100%;
}
</style>
</head>
<body>

<h2>ตารางรถ</h2>

<table>
  <tr>
    <th>ขบวน</th>
    <th>สถานี</th>
    <th>เวลาออก</th>
    <th>ถึง</th>
    <th>ออก</th>
    <th>สถานี</th>
    <th>ถึงเวลา</th>
    <th>หมายเหตุ</th>
  </tr>
  


<?php
	foreach($station->result_array() as $r){
?>
	
    <tr>
				<td><?php echo $r["t_id"]; ?></td>
				<td><?php echo $r["t_name"]; ?></td>
				<td><?php echo $r["t_out"]; ?></td>
				<td><?php echo $r["h_to"]; ?></td>
				<td><?php echo $r["h_out"]; ?></td>
				<td><?php echo $r["f_name"]; ?></td>
				<td><?php echo $r["f_out"]; ?></td>
				<td><?php echo $r["type"]; ?></td>



    </tr>

    <?php  } ?>
</table>
</body>
</html>