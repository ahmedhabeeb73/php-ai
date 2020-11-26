<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Document</title>
</head>
<body>

<?php
$isLoggedIn=true;

?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         اضف روبوتك
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
         
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="container">

  <div class="row">

    <div class="col-sm-8 p-3">
    <table class="table table-dark shadow  text-center p-3">

          <tr class="bg-warning">
          <th >المجموعة الاولى</th>
          <th >المجموعة الثانية</th>
          </tr>

          <tr>
          <td>فهيم</td>
          <td>رياضي</td>
          </tr>

          <tr >
          <td><img src="assets/images/chemist.png" alt="" width="100px">
          <ul>
          <li>كيميايي</li>
          <li>متخصص في علوم الكيمياء</li>
          </ul></td>

          <td>
          <img src="assets/images/chemist.png" alt="" width="100px">
          <ul>
          <li>كيميايي</li>
          <li>متخصص في علوم الكيمياء</li>
          </ul>
          </td> 
          

          </tr>
          </table>
              </div>

              <div class="col-sm-4 p-3 text-direction">

                <?php if(!$isLoggedIn) : ?>
              <form>
  <div class="form-group">
    <label for="exampleInputEmail1">البريد الالكتروني</label>
    <input type="email" class="form-control text-direction" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-light">لن نقوم بمشاركه البريد الالكتروني مع شخص ما.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">كلمه المرور</label>
    <input type="password" class="form-control text-direction" id="exampleInputPassword1" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">دخول</button>
</form>   
            <?php else :
            echo "مرحبا بيك مجدد"
             ?>
                <?php endif; ?>
              </div>
              
            </div>
          </div>




      



 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>