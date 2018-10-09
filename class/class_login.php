<?php 
	class cal_login{
		protected $connect;
		public function __construct(){
			$host_name='localhost';
			$user_name='root';
			$password='';
			$bd_name='ecomerce_project_php';
			$this->connect=mysqli_connect($host_name, $user_name, $password, $bd_name);
			if (!$this->connect) {
				die('connect fail'.mysqli_error($this->connect));
			}
	}
		public function login($data){
			$pass=md5($data['password']);
			$sql= "SELECT*FROM tbl_admin_login WHERE user_name='$data[username]' AND password='$pass'";
			$query=mysqli_query($this->connect, $sql);
			$login_query= mysqli_fetch_assoc($query);
			session_start();
			$_SESSION['login_id']=$login_query['login_id'];
			$_SESSION['user_name']=$login_query['user_name'];
			if ($login_query) {
				header("Location: insert_product_info.php");
			}
			else{
				die('somthing is problem'. mysqli_error($this->connect));
			}
		}
		public function logout(){
			unset($_SESSION['login_id']);
			unset($_SESSION['user_name']);
			header("Location: index.php");
		}
	}







 ?>