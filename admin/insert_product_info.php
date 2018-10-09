<?php 
 session_start();
 if ($_SESSION['login_id']==NULL) {
   header("Location: index.php");
 }
 if (isset($_GET['logout'])) {
    require_once '../class/class_login.php';
    $Logout= new cal_login();
    $Logout->logout();
 }
$message='';
if (isset($_POST['btn'])) {
 require_once '../class/class_product_info.php';
 $product_info=new cls_product_info();
 $message= $product_info->fun_product_info($_POST);
}




?>
<!doctype html>
<html lang="en">
  <title>Insert Product Info</title>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">

    
      </head>
        <body>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">ADMIN PANEL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Insert<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="manage.php">Manage<span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <ul class="navbar-nav mr-right">
                <li class="nav-item active">
                  <a class="nav-link" href=""><?php echo $_SESSION['user_name']; ?><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="?logout=logout">Logout<span class="sr-only">(current)</span></a>
                </li>
              </ul>
             
            </div>
          </nav>

          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="text-success text-center"><?php echo $message; ?></h3>
               <div class="well">
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title :</label>
                    <div class="col-sm-10">
                      <input type="text" name="product_title" class="form-control" id="inputEmail3" placeholder="Title....">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Price :</label>
                    <div class="col-sm-10">
                      <input type="text" name="product_price" class="form-control" id="inputPassword3" placeholder="Price...">
                    </div>
                  </div>
                 <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Image :</label>
                    <div class="col-sm-10">
                     <input type="file" name="product_image" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                      <button type="submit" name="btn" class="btn btn-success btn-block">Save</button>
                    </div>
                  </div>
                </form> 
               </div>
             </div>
           </div>
          </div>
   <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="../asset/js/jquery-3.2.1.min.js"></script>
  </body>
</html>