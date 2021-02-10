<?php
session_start();
include 'nav.php';
require 'connect.php';

  if(isset($_REQUEST['add']))
  {
      $title = $_POST['title'];
      $content =$_POST['content'];
      $url = $_POST['url'];
      $mtitle=$_POST['mtitle'];   
      $pcat = $_POST['pcat'];
      $img = $_POST['uimage'];
      $created = date('Y-m-d H:i:s');


      $sql="insert into category value('$title','$content','$url','$mtitle','$pcat','$img','$created','$created')";

      if (mysqli_query($con, $sql)) 
      {
        echo "New record created successfully";
        header("view_category.php");
      } 
      else {
        echo "Error: "."<br>" . mysqli_error($con); 
      }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Add Category</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <form  name="myForm" action=""  method="post" required>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-lg-3">
        <a href="category.php" class="btn btn-info add-new"> Add new Category</a>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="card text-left">
              <div class="card-body">
              <h2 class="text-center">Add Category</h2>
                  <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelpId" placeholder="Enter Title">
                    <small class="form-text  text-danger" id="errname" style="display:none;">Title Is Required*</small>
                  </div>

                  <div class="form-group">
                    <label for=""> Content </label>
                    <textarea class="form-control" name="content" id="content" aria-describedby="emailHelpId" placeholder="Enter content"></textarea>
                    <small id="erradd" class="form-text text-danger" style="display:none">content Is Required*</small>
                  </div>

                  <div class="form-group">
                    <label for="">URL</label>
                    <input type="text" class="form-control" name="url" id="url" aria-describedby="emailHelpId" placeholder="Enter Title">
                    <small class="form-text  text-danger" id="errname" style="display:none;">URL Is Required*</small>
                  </div>

                  <div class="form-group">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" name="mtitle" id="mtitle" aria-describedby="emailHelpId" placeholder="Enter Meta Title">
                    <small class="form-text  text-danger" id="errname" style="display:none;">Meta Title Is Required*</small>
                  </div>


                  <div class="form-group">
                    <label for="">Parent Category:</label>
                    <select name="pcat" id="pcat" class="form-control">
                      <option value="Select pcat" selected>Parent Category</option> 
                      <option value=""></option>
                    </select>
                    <small id="errage" class="form-text text-danger" style="display:none">Please Select Valid*</small>
                  </div>

                  <div class="form-group">
                    <label for="">Select Your Image:</label>
                    <br>
                    <input type="file" name="uimage" id="uimage">
                    <small id="errimg" class="form-text text-danger" style="display:none">Please Select Image*</small>
                    <br>
                  </div>
                  <div class="form-group">
                    <button type="reset" class="btn btn-danger ml-5 pl-5 pr-5">Reset</button>
                    <button type="submit" onclick="formValidation()" name="add" class="btn btn-primary ml-5 pl-5 pr-5">Submit Form</button>
                  </div>
              </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3">
        
        </div>
      </div>
      <div class="jumbotron">
      <!--<?php 
        //if(isset($_REQUEST['add'])){
       ?>   
        <p class="lead">Name : <?php echo $name ?></p>
        <p class="lead">Password : <?php echo $pass ?></p>
        <p class="lead">Address : <?php echo $add ?></p>
        <p class="lead">Games : <?php  
                /*foreach($game as $data){
                echo $data.",";
                }*/
        ?></p>
        <p class="lead">Gender : <?php echo $gender ?></p>
        <p class="lead">Age : <?php echo $age ?></p>
        <p class="lead">Image : <?php echo $img ?></p>
        <?php
        }
        ?>-->
      </div>
    </div>
  </form>

    <script src="./category.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>