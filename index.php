<?php 
	// session_start();
	// if ($_SESSION['status'] != 1) {
	// 	header('Location:views/login.php');
	// }
	include('views/header.php');
	// include('views/banner.php');
	$view = $_REQUEST['view']??'';
	switch ($view) {
		case 'about':
			include('views/about.php');
			break;
		case 'service':
			include('views/service.php');
			break;
		case 'apply_exchange':
			include('views/apply_exchange.php');
			break;
		case 'about1':
			include('views/about1.php');
			break;
		case 'news':
			include('views/news.php');
			break;
		case 'contact':
			include('views/contact.php');
			break;
		case 'register':
			include('views/register.php');
			break;
		case 'login':
			include('views/login.php');
			break;
		case 'convert':
			include('views/converter.php');
			break;
		default:
			include('views/home.php');
			break;
	}
	include('views/footer.php');
 ?>