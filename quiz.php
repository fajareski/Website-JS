<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h3>Quiz</h3>
	<table border="1">
		<tbody>
			<?php
				include "koneksi.php";
				$sql = "SELECT * FROM quiz_kohe1 WHERE aktif='Y' ORDER BY RAND ()";
				$query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
				$jumlah = mysqli_num_rows($query);
				$no = 0;
				while($data = mysqli_fetch_array($query)){?>
					<form action="jawaban.php" method="post">
						<input type="text" name="id[]" value="<?php echo $data['id']; ?>">
						<input type="text" name="jumlah" value="<?php echo $jumlah; ?>">
					
						<tr>
							<td><?php echo $no = $no+1; ?></td>
							<td><?php echo $data['q_text'];?></td>
						</tr>
 
						<?php
							if(!empty($data['gambar'])){
								echo "<tr><td></td><td><img src='foto/$data[gambar]' width='200' height='200'></td></tr>";
							}
						?>
 
						<tr>
							<td></td>
							<td>A. <input name="pilihan[<?php echo $data['id']?>]" type="radio" value="A"><?php echo $data['a_text'];?></td>
						</tr>
						<tr>
							<td></td>
							<td>B. <input name="pilihan[<?php echo $data['id']?>]" type="radio" value="B"><?php echo $data['b_text'];?></td>
						</tr>
						<tr>
							<td></td>
							<td>C. <input name="pilihan[<?php echo $data['id']?>]" type="radio" value="C"><?php echo $data['c_text'];?></td>
						</tr>
						<tr>
							<td></td>
							<td>D. <input name="pilihan[<?php echo $data['id']?>]" type="radio" value="D"><?php echo $data['d_text'];?></td>
						</tr>
                        <tr>
                        <td></td>
							<td>E. <input name="pilihan[<?php echo $data['id']?>]" type="radio" value="E"><?php echo $data['e_text'];?></td>
						</tr>
				<?php }
			?>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
					</td>
				</tr>
			</form>
		</tbody>
	</table>
</body>
</html>