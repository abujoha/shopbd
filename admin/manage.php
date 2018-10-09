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
  require_once '../class/class_product_info.php';
  $product_info=new cls_product_info();
  $query= $product_info->manage();

  if (isset($_GET['id'])) {
    require_once '../class/class_product_info.php';
    $id=$_GET['id'];
    $product_id=new cls_product_info();
    $product_id->delete($id);
  }
  

?>
<!doctype html>
<html lang="en">
  <title>Insert Product Info</title>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
    <link href="../asset/css/bootstrap-glyphicons.min.css" rel="stylesheet" type="text/css" />

    
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
                  <a class="nav-link" href="insert_product_info.php">Insert<span class="sr-only">(current)</span></a>
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
                <h3 class="text-success text-center"><?php //echo $message; ?></h3>
                  <div class="well">
                    <table class="table table-hover table-dark">
                        <tr>
                          <th scope="col">Product ID</th>
                          <th scope="col">Product Title</th>
                          <th scope="col">Price</th>
                          <th scope="col">Image</th>
                          <th scope="col">Action</th>
                        </tr>
                        <?php while ($product_query=mysqli_fetch_assoc($query)) { ?>
                        <tr>
                          <td><?php echo $product_query['product_id']; ?></td> 
                          <td><?php echo $product_query['product_title']; ?></td> 
                          <td><?php echo $product_query['product_price']; ?></td> 
                          <td><img src="<?php echo $product_query['product_image']; ?>" class="img-fluid" style="height: 80px; width: 100px;"></td> 
                          <td>
                            <a href="edit.php?id= <?php echo $product_query['product_id']; ?>" class="btn btn-success" title="Edit">
                              <span class="glyphicon glyphicon-edit"></span>
                            </a>
                             <a href="?id= <?php echo $product_query['product_id']; ?>" class="btn btn-danger" title="Delet">
                              <span class="glyphicon glyphicon-trash"></span>
                            </a>
                          </td>
                        </tr>
                      <?php } ?>
                    </table>
                  </div>
             </div>
           </div>
          </div>
   <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="../asset/js/jquery-3.2.1.min.js"></script>
  </body>
</html>