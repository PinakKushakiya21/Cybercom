
<!doctype html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <form name="myForm"  method="POST" required>
      
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-lg-3">
        
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="card text-left">
              <div class="card-body">
              <h2 class="text-center">Sign Up</h2>


                  <div class="form-group">
                    <label for="">Prefix:</label><br>
                    <select name="uprefix" id="uprefix" class="form-control">
                                <option value="Year" selected>Prefix</option> 
                                <option value="Mr">Mr.</option>
                                <option value="Mrs">Mrs.</option>
                                <option value="Dr">Dr.</option>
                                <option value="Miss">Miss.</option>
                    </select>
                    <small id="emailHelpId" class="form-text text-muted">Select Prefix</small>
                  </div>

                  <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="fname" id="fname" aria-describedby="emailHelpId" placeholder="Enter Username">
                    <small id="emailHelpId" class="form-text text-muted">Enter Name</small>
                  </div>
                  <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" name="lname" id="lname" aria-describedby="emailHelpId" placeholder="Enter Username">
                    <small id="emailHelpId" class="form-text text-muted">Enter Name</small>
                  </div>
                  
                  <div class="form-group">
                    <label for="">E-mail</label>
                    <input type="email" class="form-control" name="uemail" id="uemail" aria-describedby="emailHelpId" placeholder="Enter Email">
                    <small id="emailHelpId" class="form-text text-muted">Enter Email</small>
                  </div>

                  <div class="form-group">
                    <label for="">Mobile Number</label>
                    <input type="text" class="form-control" name="mno" id="mno" aria-describedby="emailHelpId" placeholder="Enter Mobile Number">
                    <small id="emailHelpId" class="form-text text-muted">Enter Mobile No</small>
                  </div>

                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="upass" id="upass" aria-describedby="emailHelpId" placeholder="Enter Password">
                    <small id="emailHelpId" class="form-text text-muted">Enter Password</small>
                  </div>
                  <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" name="ucpass" id="ucpass" aria-describedby="emailHelpId" placeholder="Enter Password">
                    <small id="emailHelpId" class="form-text text-muted">Enter Confirm Password</small>
                  </div>

                  <div class="form-group">
                    <label for="information">Information</label>
                      <textarea class="form-control" id="information" name="information" rows="3"></textarea>
                  </div>

                  <div class="form-group text-center">
                    <input type="checkbox" name="agreement" id="agreement">  Hereby, I Accept Terms & Conditions.
                  </div>
                  <div class="form-group text-right">
                    <button type="submit" name="add" onclick="formValidation()" class="btn btn-primary ml-5 pl-5 pr-5">Submit</button>
                    <button type="reset" class="btn btn-danger ml-5 pl-5 pr-5">Cancel</button>
                    <!-- <button type="submit" name="disp" class="btn btn-primary ml-5 pl-5 pr-5">Display</button> -->
                  </div>
                  
              </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3">
        
        </div>
      </div>
      <!-- <div class="jumbotron">
        <?php

          // if (isset($_REQUEST['disp'])) {
            
          //   $qry="select * from signuptb";
          //   $res = $con->query($qry);
          //   if ($res->num_rows >0) {
          //     while ($r = $res->fetch_assoc()) {
          //       echo $r['id']."<br>";
          //       echo $r['fname']."<br>";
          //       echo $r['lname']."<br>";
          //       echo $r['day']."<br>";
          //       echo $r['month']."<br>";
          //       echo $r['year']."<br>";
          //       echo $r['gender']."<br>";
          //       echo $r['country']."<br>";
          //       echo $r['email']."<br>";
          //       echo $r['password']."<br>";
          //       echo $r['cfpassword'];
          //     }
          //   }
          // }
        ?> -->
  
      </div>
    </div>
    </form>
    <script src="./registration.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

  require 'connect.php';

if(isset($_REQUEST['add'])){
    $prefix = $_POST['uprefix'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['uemail']; 
    $mno = $_POST['mno'];
    $pass =md5($_POST['upass']);   
    $cpass =$_POST['ucpass'];
    $info = $_POST['information']; 
    $created = date('Y-m-d H:i:s');

    function checkmail($email) {
    global $con,$email;
    //$email = mysqli_real_escape_string($email);

    $sql = "SELECT * FROM user WHERE email='$email'";
    $r= mysqli_query($con, $sql);
    if (mysqli_num_rows($r) == 0) {
        return true;
    }

    return false;
}

    if (checkmail($_POST['uemail'])) {
      $sql="insert into user values 
                          ('0','$prefix','$fname','$lname','$mno','$email','$pass','$created','$info','$created','$created')";

    if (mysqli_query($con, $sql)) {
       echo "Record Inserted";       
       echo '<script>window.location.href = "login.php";</script>';
       
     }
     else {
      echo "Error: "."<br>" . mysqli_error($con);
     } 
    }
    else {
      echo "Already Registered with this mail id";
    }

    
}
?>