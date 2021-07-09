<!DOCTYPE html>
<html lang="en">

<head>
  <title>BKC Constructions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--Boostrap Jquery Starts-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--Boostrap Jquery Ends-->
<!--Import Files Starts-->
  <link rel="stylesheet" type="text/css" href="styleSS.css">
<script type="text/javascript" src="JqueryandAjax.js"></script>	
<!--Import Files Ends-->
</head>
	
<body>
  <!--Navigation Bar Start-->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark x-navbar-fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="Index.html">
        <img src="Images/bkclogo3.png" alt="Logo" width="277" height="42" class="d-inline-block align-top">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#naContent"
        aria-controls="naContent" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="col-auto">
        <div class="collapse navbar-collapse" id="naContent">
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item"> <a class="nav-link" href="Index.html">Home</a> </li>
            <li class="nav-item"> <a class="nav-link" href="Services.html">Services</a> </li>
            <li class="nav-item active"> <a class="nav-link" href="JobPortal.html">Join Us / Job Portal</a> </li>
            <li class="nav-item"> <a class="nav-link" href="Contact Us.html">Contact Us</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!--Navigation Bar End-->

  <!--Section Image-->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="maintxt">
        <img src="Images/safety0116.png" class="img-fluid" alt="Error">
        <div class="carousel-caption">
          <h1 class="Cen" align="right"><b>Job Portal</b></h1>
        </div>
      </div>
    </div>
  </div>
  <!--Section Image Ends-->
  
  <br>

  <!--Search Starts-->
  <div class="shadow-lg p-4 mb-4 bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="form-group" data-toggle="tooltip" title="Find your dream Job At BKC Constructions">
          <form class="form-inline" action="/action_page.php">
            <label for="JobS">Find your dream Job:&nbsp</label>&nbsp&nbsp&nbsp
            <input class="form-control" placeholder="Start typing the Job" id="JobS" onkeyup="showHintF(JobS.value)">
          </form>
        </div>
      <div class="col-md-1">
      </div>
    </div>
  </div>
  <!--Search Ends-->

  <br>

  <!--Job section Start-->
  <div class="shadow-lg p-4 mb-4 bg-white">
    <div class="container">
      <div class="row">
      </div>
      <div class="block">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="span4">
            <div id="Results" class="card-columns">
		
      			</div>
            </div>
          </div>
          <div class="col-md-1">
          </div>
        </div>
      </div>
    </div>
</div>
<!--Job section Ends-->

  <br>

<!--Modal Starts-->
<div class="modal fade" id="ModalBod">
    <div class="modal-dialog">
      <div class="modal-content">     
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">Apply Now</h3>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="JobApply.php">
    <input type="text" id="txtName" Name="txtName" class="form-control" required autofocus placeholder="Full Name" /> Full Name<br><br>
		<input type="text" id="txtPNum" Name="txtPNum" class="form-control" required placeholder="Phone Number"/> Phone Number<br><br>
		<input type="text" id="txtLNIC" Name="txtLNIC" class="form-control" required placeholder="E-Mail"/> E-Mail<br><br>
		<input type="text" id="txtCV" Name="txtCV" class="form-control" required placeholder="CV Google Link"/>CV Google Link<br><br>
      	<input type="date" id="txtDOB" Name="txtDOB" class="form-control" required placeholder="Birth Day" min="1950-01-01" max="1996-01-01"/> Birth Day <br><br>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="checkbox" name="AgeRe" class="form-check-input" id="AgeRe" required> *By clicking this you agreed to all the terms and conditions of BKC Conctructions.
      </div>
        <div class="modal-footer">
		<button type="submit" name="JobSubmit" value="add" class="btn btn-danger">Submit Form</button>
          <button type="cancel" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
	 </div>
    </div>
<!--Modal Ends-->

<!--Footer Start-->
  <!-- Footer -->
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
      </section>
      <!-- Section: Social media -->
      <!-- Section: Form -->
      <section class="FcolrSub">
        <div data-toggle="tooltip" title="Get Updates/ Sign up to our news later">
          <br>
          <form method="post" action="NewsLaterSub.php">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
              <!--Grid column-->
              <div class="col-auto">
                <p class="pt-2">
                  <strong>Sign up for our newsletter</strong>
                </p>
              </div>
              <!--Grid column-->
              <!--Grid column-->
              <div class="col-md-5 col-12">
                <!-- Email input -->
                <div class="form-outline form-white mb-4">
                  <input type="email" name="txtEFAddres" id="txtEFAddres" class="form-control" />
                  <label class="form-label" for="txtEFAddres">Email address</label>
                </div>
              </div>
              <!--Grid column-->
              <!--Grid column-->
              <div class="col-auto">
                <!-- Submit button -->
                <button type="submit" name="NewsSub" value="add" class="btn btn-outline-light mb-4">
                  Subscribe
                </button>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </form> 
		</div>
      </section>
      <!-- Section: Form -->
      <!-- Section: Text -->
      <section class="mb-4"><br>
        <p>BKC Constructions is a registered Company in Sri Lanka (Under Comp/12G/1) and a company limited by guarantee
          registered only in Sri Lanka.<br> Registered office: No 05, Ward Place, Colombo 07. </p>
      </section>
      <!-- Section: Text -->
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Company</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Our Story</a>
              </li>
              <li>
                <a href="#!" class="text-white">Management Team</a>
              </li>
              <li>
                <a href="#!" class="text-white">News/Blog</a>
              </li>

            </ul>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Legal</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Terms and Conditions</a>
              </li>
              <li>
                <a href="#!" class="text-white">Cookies</a>
              </li>
              <li>
                <a href="#!" class="text-white">Privacy and Data Protection</a>
              </li>
              <li>
                <a href="#!" class="text-white">Press contacs</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Follow Us On</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Facebook</a>
              </li>
              <li>
                <a href="#!" class="text-white">Instagram</a>
              </li>
              <li>
                <a href="#!" class="text-white">Twitter</a>
              </li>
              <li>
                <a href="#!" class="text-white">LinkedIn</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Contact</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">+ 01 234 567 89</a>
              </li>
              <li>
                <a href="#!" class="text-white">Contact@BKCConstructions.com</a>
              </li>
              <li>
                <a href="#!" class="text-white">2342.423.423 Fax</a>
              </li>
              <li>
                <a href="#!" class="text-white">BKC Constructions.com</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      ©2021 by BKC Building constructions.
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <!--Footer End-->	

</body>

</html>