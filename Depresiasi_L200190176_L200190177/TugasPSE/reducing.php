<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Tugas PSE</title>

		<link rel="stylesheet" href="assets/pure-min.css">
		<link rel="stylesheet" href="assets/baby-blue.css">

	</head>

	<body>
		<div id="layout">
			<a href="#menu" id="menuLink" class="menu-link"> <span></span> </a>

			<div id="menu">
				<div class="pure-menu pure-menu-open">
					<a class="pure-menu-heading" href="/">Menu</a>

					<ul>

						<li class=" ">
							<a href="straight.php">Straight Line</a>
						</li>
						<li class=" ">
							<a href="reducing.php">Reducing Balance</a>
						</li>
						<li class=" ">
							<a href="sum.php">Sum of The Year</a>
						</li>
						<li class=" ">
							<a href="unit.php">Unit of Activity</a>
						</li>

					</ul>
				</div>
			</div><!--div menu -->
<!--- Content ------------------------------->
			<div id="main">

				<div class="header">
					<h2>Kalkulator Depresiasi </h2>

					<h3>Reducing Balance</h3>

				</div>
				

				
				<div class="content">
					<!-- <h1>Produk open source </h1>
					<p>
						Berikut ini adalah produk open source dari Candralab Studio
					</p>
					<oL>
						<li>
						Candralab  Kamus
						</li>
						<li>
							Candralab CMS 
						</li>
						<li>
							Candralab Ecommerce 
						</li>
						<li>
                            Candralab GIS 
                        </li>
					</oL> -->
		<form action="reducing.php" method="get">
            <h4><b><center> Silahkan Melakukan Perhitungan </center></b></h4>
			<div class="form-group">
                <label>Harga Perolehan:</label>
                <input type="text" name="perolehan" class="form-control" value="<?php echo $perolehan; ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label>Umur Ekonomis (Tahun):</label>
                <input type="text" name="umur" class="form-control" value="<?php echo $umur; ?>" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
        <br>
        <?php
            if (isset($_GET['perolehan'])) {
                $perolehan=$_GET['perolehan'];
                $umur=$_GET['umur'];
                $hasil = ($perolehan / $umur) * 2;
                $hasila = "Hasil depresiasi menggunakan metode Reducing Balance pada tahun pertama adalah " .number_format($hasil,0,',','.');
                echo "<h4>$hasila</h4>";
                for ($i=2; $i <= $umur; $i++) { 
                    $hasill = (($perolehan-$hasil) / $umur) * 2;
                    $hasilla = "Hasil depresiasi menggunakan metode Reducing Balance pada tahun ke " .$i. " adalah " .number_format($hasill,0,',','.');
                    echo "<h4>$hasilla</h4>";
                    $perolehan = $perolehan - $hasill;
                    $hasill = ($perolehan/$umur)*2;
                }
            }
        ?>
				</div>
</div>
				<!-------------FOOOOOOOOOOOOOOOOOOOOOTER----------------------------->
				<div class="footer">
					<div class="legal pure-g">
				
						<div class="pure-u-1 pure-u-sm-1-2">

							<p class="legal-copyright">
								&copy; 2022 L200190176 | L200190177.
							</p>
						</div>
					</div>

				</div>
			</div><!-- div main -->
		</div>
		<!--div layout -->

	</body>
</html>
