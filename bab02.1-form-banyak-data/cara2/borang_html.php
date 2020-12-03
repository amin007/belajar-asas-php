<?php
include '../fungsi.php';
$data = data();
diatas('Infaq');
?>
<br><br><br>

<form method="POST" action="borang_proses.php">
<div class="container">
<table class="table table-bordered">
<thead>
	<tr>
	<th scope="col">#</th>
	<th scope="col">nama</th>
	<th scope="col">nombor</th>
	<th scope="col">penginfaq</th>
	<th scope="col">lain-lain</th>
	<th scope="col">amount(RM)</th>
	</tr>
</thead>
<tbody>
<?php
foreach($data as $kira => $row):
?>
	<tr>
	<td><input type="hidden" name="table[<?php echo $row['id'] ?>][id]" value="<?php echo $row['id'] ?>">
		<?php echo $kira+1 ?>|<?php echo $row['id'] ?>
	</td>
	<td><?php echo $row['nama'] ?></td>
	<td><?php echo $row['notel'] ?></td>
	<td><input type="checkbox" name="table[<?php echo $row['id'] ?>][status]" value="penginfaq"></td>
	<td><input type="checkbox" name="table[<?php echo $row['id'] ?>][status]" value="no"></td>
	<td><input type="text" name="table[<?php echo $row['id'] ?>][amout]" class="form-control"></td>
	</tr>
<?php
endforeach;
?>
</tbody>
</table>

<input type="submit" value="submit" class="btn btn-primary">
</form>

</div>
<?php

dibawah();