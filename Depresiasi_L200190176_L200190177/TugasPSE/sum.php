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

					<h3>Sum Of The Year</h3>

				</div>
				<?php
        $perolehan=null;
        $residu=null;
        $umur=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $umur=$_GET['umur'];
            $jml_umur = 0;
            for ($i=1; $i<=$umur ; $i++) { 
                $jml_umur = $jml_umur + $i;
            }
            $hasil = ($perolehan - $residu) * $umur / $jml_umur;    
        }
    ?>
				<div class="content">
					<form action="sum.php" method="get">
            <h4><b><center> Silahkan Melakukan Perhitungan </center></b></h4>
            <div class="form-group">
                <label>Harga Perolehan:</label>
                <input type="text" name="perolehan" class="form-control" value="<?php echo $perolehan; ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label>Nilai Residu:</label>
                <input type="text" name="residu" class="form-control" value="<?php echo $residu; ?>"  required>
            </div>
            <br>
            <div class="form-group">
                <label>Umur Ekonomis (Tahun):</label>
                <input type="text" name="umur" class="form-control" value="<?php echo $umur; ?>"  required>
            </div>
            <br>
            <!-- <input type="text" name="operasi" class="form-control" value="Sum of The Year"  disabled><br> -->
            <!-- <button type="button" class="btn btn-danger" onclick="location.href='index.php'">Back</button> -->
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
        <br>
        <?php
        if (isset($_GET['perolehan'])) {
            $hasil = "Hasil depresiasi menggunakan metode Sum of The Year pada tahun ke-" . $umur . " adalah " .number_format($hasil,0,',','.');
            echo "<h4>$hasil</h4>" ;
        }
        ?>



					<!-- <h1>Hubungi kami </h1>
					<address>
					    Candralab Studio <br>
					    Jl Janti Yogyakarta <br>
					    email:candraadiputra_at_gmail_dot_com<br>
					    website:candra.web.id 
					</address> -->

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
			<!-- </div> --><!-- div main -->
		</div>
		<!--div layout -->

	</body>
</html>
