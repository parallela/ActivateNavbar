/*
This will explain you how to use that!
/*
<?php 
require_once ('ActiveNavbar.php');
$url = new ActiveNavbar();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Example</title>
</head>
<body>
<nav>
	
	<!-- First Example -->
	<li class="<?php $url->setActive('/') ?>">Home</li>

	<!-- Second Example -->
	<li <?php $url->setActiveClass('/') ?>>Home</li>

</nav>
</body>
</html>