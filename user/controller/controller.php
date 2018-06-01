<?php
include 'user/model/User.php';
class controllerUser{
	public function handle_request($action){
		switch ($action) {
			case Null:
				return $this->home();
				break;
			case "OrderPage":
				return $this->OrderPage();
				break;
			case "resultCategories":
				return $this->resultCategories();
				break;
			case "resultProducts":
				return $this->resultProducts();
				break;
			default:
				echo $action;
				break;
		}
	}
	public function home(){
		include "user/view/home.php";
	}
	public function OrderPage(){
		include "user/view/OrderPage.php";
	}
	public function resultCategories(){
		$user = new User();
		$result = $user->categories();
		echo json_encode($result);
	}
	public function resultProducts(){
		$user = new User();
		$result = $user->resultProducts();
		echo json_encode($result);
	}
}
?>