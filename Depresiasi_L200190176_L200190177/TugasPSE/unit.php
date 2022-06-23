<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Tugas PSE</title>

		<link rel="stylesheet" href="assets/pure-min.css">
	   <link rel="stylesheet" href="assets/baby-blue.css">

		<script type='text/javascript' src='assets/ui.js'></script>
	
		    
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

					<h3>Unit Of Activity</h3>

				</div>

				<div class="content">
					<!-- <h1>selamat datang</h1>
					<p>
						Selamat datang di candralab Studio, kami menyediakan layanan berikut :
					</p>
					<oL>
						<li>
							Web delopment dengan PHP dan MySQL
						</li>
						<li>
							Mobile App berbasis Android dan jQuery Mobile
						</li>
						<li>
							Training Web & Mobile Development
						</li>
					</oL> -->



					<!-- <div class="rows"> -->
		<?php
        $perolehan=null;
        $residu=null;
        $pemakaian = null;
        $kapasitas_max=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $pemakaian=$_GET['pemakaian'];
            $kapasitas_max=$_GET['kapasitas_max'];
            $hasil=0;
                    $hasil = ($perolehan - $residu) * ($pemakaian / $kapasitas_max);
        }
    ?>
        <form action="unit.php" method="get">
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
                <label>Pemakaian:</label>
                <input type="text" name="pemakaian" class="form-control" value="<?php echo $pemakaian; ?>"  required>
            </div>
            <br>
            <div class="form-group">
                <label>Kapasitas Maksimal:</label>
                <input type="text" name="kapasitas_max" class="form-control" value="<?php echo $kapasitas_max; ?>"  required>
            </div>
            <br>
            <!-- <input type="text" name="operasi" class="form-control" value="Unit of Activity" disabled><br>
            <button type="button" class="btn btn-danger" onclick="location.href='index.php'">Back</button> -->
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
        <br>
        <?php
            if (isset($_GET['perolehan'])) {
                $hasil = "Hasil depresiasi menggunakan metode Unit of Activity adalah " .number_format($hasil,0,',','.');
                echo "<h4>$hasil</h4>" ;
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
