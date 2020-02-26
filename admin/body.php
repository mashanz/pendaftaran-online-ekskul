<head>
<link rel="stylesheet" href="../css/styleadmin.css" type="text/css" />
</head>
<body>

<div id="utama">
<table>
<tr>

<td id="kanan" height="500">
	<div>
		<?php
			$query="SELECT * FROM menu WHERE status='0'";
			$result=mysqli_query($koneksi, $query);
			while($row=mysqli_fetch_array($result))
			{
				echo"<a href='$row[link]'><div id='menubar'> &#187; $row[judul] </div></a>";
			}
			$query="SELECT * FROM menu WHERE status='1'";
			$result=mysqli_query($koneksi, $query);
			while($row=mysqli_fetch_array($result))
			{
				echo"<a href='$row[link]'><div id='menubar'> &#187; $row[judul] </div></a>";
			}
				$query="SELECT * FROM menu WHERE status='2'";
			$result=mysqli_query($koneksi, $query);
			while($row=mysqli_fetch_array($result))
			{
				echo"<a href='$row[link]'><div id='menubar'> &#187; $row[judul] </div></a>";
			}
		mysqli_close($koneksi);
		?>
	</div>
</td>
<td id="isi_menu">
	<div>
		<?php
			if(!empty($_GET['p']))
			{
				if(file_exists($_GET['p'].".php"))
				{
					require_once($_GET['p'].".php");
				}
			}
		?>
	</div>
</td>
</tr>
</table>
</div>
</body>
