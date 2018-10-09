<?php  
	class cls_product_info{
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
		
		public function fun_product_info($data){
			$image_url=$this->image();
			$sql= "INSERT INTO product_info (product_title, product_price, product_image)"."VALUE('$data[product_title]','$data[product_price]', '$image_url')";
			if (mysqli_query($this->connect, $sql)) {
				$message='Your Data Is Save Successfully';
				return $message;
			}
			else{
				die('query problem'.mysqli_error($this->connect));
			}
		}
		public function manage(){
			$sql= "SELECT*FROM product_info order by product_id desc";
			if (mysqli_query($this->connect, $sql)) {
				$query= mysqli_query($this->connect, $sql);
				return $query;
			}
		}
		public function edit($data){
			$sql="SELECT*FROM product_info WHERE product_id='$data'";
			if (mysqli_query($this->connect, $sql)) {
				$query_id= mysqli_query($this->connect, $sql);
				return $query_id;
			}
		}
		public function update($file, $data){
			$image_url=$this->image();
			$sql= "UPDATE product_info SET product_title='$data[product_title]', product_price='$data[product_price]', product_image='$image_url' WHERE product_id='$data[product_id]'";
				mysqli_query($this->connect, $sql);
		}
		public function delete($id){
			$sql= "DELETE FROM product_info WHERE product_id='$id'";
			mysqli_query($this->connect, $sql);
		}
		public function image(){
			$image_name=$_FILES['product_image']['name'];
			$directory='../img/';
			$image_url=$directory.$image_name;
			$image_type=pathinfo($image_name, PATHINFO_EXTENSION);
			$image_size=$_FILES['product_image']['size'];
			$check=getimagesize($_FILES['product_image']['tmp_name']);
			if ($check) {
				if (file_exists($image_url)) {
					die('please select valid image');
				}
				else{
					if ($image_size>50000000) {
						die('please check your image size');
					}
					else{
						move_uploaded_file($_FILES['product_image']['tmp_name'], $image_url);
						return $image_url;
					}
				}
			}
			else{
				die('plese select image file');
			}
		}
	}







































?>