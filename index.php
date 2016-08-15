<!DOCTYPE html>
<html lang="en-US">

	<head>
	<link rel="stylesheet" href="css/style.css">
		<title>Cloud SMK MULTIMEDIA</title>

	</head>
	<body>
		<header>
		
		<!--	<div>
		<ul id="log">
  		<li><a href="index.php?p=login">login</a></li>

  		<li><a href="index.php?p=reg">register</a></li>
  		<li><a href="index.php?p=admn">admin</a></li>
		</ul>
		</div>
	
	<div>-->
	<div>
	<h1>Cloud Computing Multimedia</h1>
		<ul id="menu">
  		<li><a href="index.php?p=home" class="home">Home</a></li>
  		<li class="dropdown">
    		<a href="index.php?p=materi" class="materi">Materi</a>
    		<div class="dropdown-content">
      		<a href="index.php?p=m1" class="m1">Objek 3D</a>
      		<a href="index.php?p=pass" class="m2">Aplikasi Pemodelan 3D</a>
      		<a href="index.php?p=pass" class="m3">Pemodelan Objek 3D</a>
    		<a href="index.php?p=pass" class="m4">Desain Multimedia</a>
      		<a href="index.php?p=pass" class="m5">Pengelolaan Citra Digital</a>
    		</div>
  		</li>
  		<li><a href="index.php?p=app" class="app">app</a></li>
  		<li class="dropdown">
  		<a href="index.php?p=evaluasi" class="evaluasi">Evaluasi</a>
  				<div class="dropdown-content">
  				<a href="index.php?p=e1" class="e1">Evaluasi 1</a>
  				<a href="index.php?p=e2" class="e2">Evaluasi 2</a>
  				<a href="index.php?p=e3" class="e3">Evaluasi 3</a>
  				<a href="index.php?p=e4" class="e4">Evaluasi 4</a>
  				<a href="index.php?p=e5" class="e5">Evaluasi 5</a>
  				</div>
  		</li>
  		<li><a href="index.php?p=about" class="about">about</a></li>
		</ul>
	</div>
</header>
	
<!--		
<nav>
<div>
<li><a href="">London</a></li>
<li><a href="">Paris</a></li>
<li><a href="">Tokyo</a></li>
</div>
</nav>-->

<section>
	<div id="cont">
    	<?php


		$pages_dir = 'pages';
		if(!empty($_GET['p'])){
			$pages = scandir($pages_dir, 0);
			unset($pages[0], $pages[1]);
 
			$p = $_GET['p'];
			if(in_array($p.'.php', $pages)){
				include($pages_dir.'/'.$p.'.php');
			} else {
				echo 'Halaman tidak ditemukan! :(';
			}
		} else {
			include($pages_dir.'/index.php');
		}
		?>

		<!-- connection-->
    </div>
</section>

	</body>
	<footer>
		Copyright © <a href="index.php?p=about" class="about">Syurya Rahmardanu</a> 
	</footer>
	<!-- Write your comments here -->
</html>

