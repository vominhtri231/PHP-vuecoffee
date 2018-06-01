<?php
include 'user/config/connect.php';
Class User extends connectDB{
	public function categories(){
		$sql = "SELECT * FROM categories";
		$result = mysqli_query($this->conn,$sql);
		$array = array();
		while ($obj = mysqli_fetch_object($result)){
			$array[]=$obj;
		}
		return $array;
	}

	public function resultProducts(){
		$sql = "SELECT * FROM products";
		$result = mysqli_query($this->conn,$sql);
		$array = array();
		while ($obj = mysqli_fetch_object($result)){
			$array[]=$obj;
		}
		return $array;
	}
}
?>