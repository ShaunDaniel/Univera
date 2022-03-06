<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">
  <title>Document</title>
  <script src="./js/register.js"></script>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark  navbar-custom">
    <div class="container-fluid">
      <a href="index.html"><img src="./img/logo.png" alt="" class="img-fluid" style="padding:5px;" width="70px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navmenu">
          <li class="nav-item navbutton">
            <a class="active" aria-current="page" href="#">UniSearch</a>
          </li>
          <li class="nav-item navbutton">
            <a class="active" href="#">Login</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <div>
      <?php
      include 'dbcon.php';
          if(isset($_POST['submitdata'])){

            $firstname = mysqli_real_escape_string($con,$_POST['fname']);
            $lastname = mysqli_real_escape_string($con,$_POST['lname']);
            $username = mysqli_real_escape_string($con,$_POST['uname']);
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $password = mysqli_real_escape_string($con,$_POST['pwd']);
            $cpassword = mysqli_real_escape_string($con,$_POST['cpwd']);
           
            $pass = password_hash($password,PASSWORD_BCRYPT);
            $cpass = password_hash($password,PASSWORD_BCRYPT);

            $emailquery = "select * from user_data where email = '$email'";
            $emailcheck = mysqli_query($con,$emailquery);

            $emailcount = mysqli_num_rows($emailcheck);

            if($emailcount>0){
            ?>
              <script type="text/javascript">
              alert("Email already exists!")
              </script>;
            <?php  
          }

            else{
              $insertquery = "INSERT INTO `user_data`(`FNAME`, `LNAME`, `USERNAME`, `EMAIL`, `PASSWORD`) VALUES ('$firstname','$lastname','$username','$email','$pass')";
              $querypass = mysqli_query($con,$insertquery);
              if($querypass){
                ?>
                <script>
                    alert("Insertion Successful!")
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Insertion UNSuccessful!")
                </script>
                <?php
            }

            }
          }

      ?>
  </div>

  <section class="vh-100" style="background-color: #eeedde;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="./img/registerbg.jpg" alt="login form" class="img-fluid"
                  style="border-radius: 1rem 0 0 1rem;object-fit: cover; position:relative;top:7rem" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                
                  <form action="./register.php" method="post" onsubmit="return userCheck()">

                    <div class="d-flex align-items-center mb-3 pb-1">

                      <span class="h1 fw-bold mb-0">Sign Up</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create your Univera account</h5>


                    <div class="p-3 mb-3 bg-danger text-white loginalert" style="border-radius: 10px;background-color: #FFBABA"
                      id="error_Message"></div>

                    <div class="row mb-3">
                      <div class="col">
                        <input type="text" class="form-control" name="fname" required>
                        <label class="form-label" for="form2Example17">First Name</label>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" name="lname" required>
                        <label class="form-label" for="form2Example17">Last Name</label>
                      </div>
                    </div>
                    
                    <div class="form-outline mb-3">
                      <input type="email" class="form-control" name="email">
                      <label class="form-label" for="form2Example17">Email Address</label>
                    </div>


                    <div class="form-outline mb-4">
                      <input type="text" class="form-control" name="uname" id="uname">
                      <label class="form-label" for="form2Example17">Username</label>
                    </div>


                    <div class="form-outline mb-1">
                      <input type="password" name="pwd" class="form-control form-control-lg" id="pwd/>
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>

                    <div class="form-outline mb-2">
                      <input type="password" name="cpwd" class="form-control form-control-lg" id="cpwd"/>
                      <label class="form-label" for="form2Example27">Confirm Password</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit" name="submitdata">Login</button>
                    </div>


                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Already a member? <a href="./login.php"
                        style="color: #393f81;">Log In</a></p>
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>