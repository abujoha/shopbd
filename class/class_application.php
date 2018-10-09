<?php 
class application{
	protected $connect;
	public function __construct(){
		$host_name='localhost';
		$user_name='root';
		$password='';
		$bd_name='ecomerce_project_php';
		$this->connect=mysqli_connect($host_name, $user_name, $password, $bd_name);
		if (!$this->connect) {
			die('connect flil'.mysqli_error($this->connect));
		}
	}
	public function view(){
		$sql= "SELECT*FROM product_info ORDER BY product_id DESC";
		if (mysqli_query($this->connect, $sql)) {
			$query= mysqli_query($this->connect, $sql);
			return $query;
		}
	}

}













 ?>