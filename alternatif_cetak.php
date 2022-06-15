<style>
	table,
	th,
	td {
		border: 5px solid black;
		/* border-collapse: collapse; */
	}

	th,
	td {
		padding: 15px;
	}
</style>
<center>
	<h1>Sertifikat Vaksin</h1>
</center>
<table align="center">
	<thead>
		<tr>
			<!-- <th>No</th> -->
			<!-- <th>Kode</th> -->
			<th>
				<h2>Sertifikat Vaksi Covid-19</h2>
				<h4>Sertifikat ini diberikan kepada:</h4>
			</th>
		</tr>
	</thead>
	<?php
	$q = esc_field($_GET['q']);
	$rows = $db->get_results("SELECT * FROM tb_alternatif WHERE kode_alternatif= 'A2'");
	// $no = 0;
	?>
	<tr>
		<!-- <td><?= ++$no ?></td> -->
		<!-- <td><?= $row->kode_alternatif ?></td> -->
		<td><?= $rows->nama_alternatif ?></td>
	</tr>
</table>