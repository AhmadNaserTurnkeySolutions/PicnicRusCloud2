<?phpinclude('visitors.php');//ini_set('display_errors', 1);if(isset($_SESSION['referer'])){if($_SESSION['referer']=="register_success.php"){session_destroy();header('Location: '.$_SERVER['HTTP_REFERER']);}}require('globalvar.php');require('checklogin.php');require('init.php');?><?phpfunction TypeGenerator($t){if($t==1){//do smthininclude('managerpage.php');include('managermenu.php');return "Manager";}else{//do smthininclude('customerpage.php');include('customermenu.php');return "Customer";}}//end of function?>