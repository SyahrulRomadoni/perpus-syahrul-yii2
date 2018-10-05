<?php
	use yii\helpers\Html;
	use app\components\Helper;
?>
<table class="table-pdf" style="margin:auto; width:100%;">
	<thead>
		<tr>
			<th><?= strtoupper("Nama") ?></th>
			<th><?= strtoupper("Tahun Terbit") ?></th>
			<th><?= strtoupper("Penulis") ?></th>
			<th><?= strtoupper("Penerbit") ?></th>
			<th><?= strtoupper("Kategori") ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($model as $data) { ?>
		<tr>
			<td><?= $data->nama ?></td>
			<td><?= $data->tahun_terbit ?></td>
			<td><?= $data->penulis->nama ?></td>
			<td><?= $data->penerbit->nama ?></td>
			<td><?= $data->kategori->nama ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>