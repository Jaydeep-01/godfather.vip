

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vstream - Media Landing Page</title>

    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="preloader"></div>

    <div class="backdrop"></div>
    <div class="switchcolor"><img src="images/settings.png" alt="icon"></div>
    <div class="switchcolor-wrap">
        <a class="link sheet-close"><i class="ti-close"></i></a>
        <h2>Settings</h2>
        <h4>Choose Color Theme</h4>
        <ul>
            <li>
                <label class="item-radio item-content">
                    <input type="radio" name="color-radio" value="red" checked=""><i class="ti-check"></i>
                    <span class="circle-color bg-red" style="background-color: #ff3b30;"></span>
                </label>
            </li>
            <li>
                <label class="item-radio item-content">
                    <input type="radio" name="color-radio" value="green"><i class="ti-check"></i>
                    <span class="circle-color bg-green" style="background-color: #4cd964;"></span>
                </label>
            </li>
            <li>
                <label class="item-radio item-content">
                    <input type="radio" name="color-radio" value="blue" checked=""><i class="ti-check"></i>
                    <span class="circle-color bg-blue" style="background-color: #132977;"></span>
                </label>
            </li>
            <li>
                <label class="item-radio item-content">
                    <input type="radio" name="color-radio" value="pink"><i class="ti-check"></i>
                    <span class="circle-color bg-pink" style="background-color: #ff2d55;"></span>
                </label>
            </li>
            <li>
                <label class="item-radio item-content">
                    <input type="radio" name="color-radio" value="yellow"><i class="ti-check"></i>
                    <span class="circle-color bg-yellow" style="background-color: #ffcc00;"></span>
                </label>
            </li>
            <li>
                <label class="item-radio item-content">
                    <input type="radio" name="color-radio" value="orange"><i class="ti-check"></i>
                    <span class="circle-color bg-orange" style="background-color: #ff9500;"></span>
                </label>
            </li>
            <li>
                <label class="item-radio item-content">
                    <input type="radio" name="color-radio" value="gray"><i class="ti-check"></i>
                    <span class="circle-color bg-gray" style="background-color: #8e8e93;"></span>
                </label>
            </li>

            <li>
                <label class="item-radio item-content">
                    <input type="radio" name="color-radio" value="brown"><i class="ti-check"></i>
                    <span class="circle-color bg-brown" style="background-color: #D2691E;"></span>
                </label>
            </li>
            <li>
                <label class="item-radio item-content">
                    <input type="radio" name="color-radio" value="darkgreen"><i class="ti-check"></i>
                    <span class="circle-color bg-darkgreen" style="background-color: #228B22;"></span>
                </label>
            </li>
            <li>
                <label class="item-radio item-content">
                    <input type="radio" name="color-radio" value="deeppink"><i class="ti-check"></i>
                    <span class="circle-color bg-deeppink" style="background-color: #FFC0CB;"></span>
                </label>
            </li>
            <li>
                <label class="item-radio item-content">
                    <input type="radio" name="color-radio" value="cadetblue"><i class="ti-check"></i>
                    <span class="circle-color bg-cadetblue" style="background-color: #5f9ea0;"></span>
                </label>
            </li>
            <li>
                <label class="item-radio item-content">
                    <input type="radio" name="color-radio" value="darkorchid"><i class="ti-check"></i>
                    <span class="circle-color bg-darkorchid" style="background-color: #9932cc;"></span>
                </label>
            </li>
            
            
        </ul>
        <div class="toggle-div mt-4">
            <h4 class="d-inline">Dark Mode</h4>
            <div class="d-inline float-right">
                <label class="toggle toggle-init"><input type="checkbox"><span class="toggle-icon"></span></label>
            </div>
        </div>
    </div>

    <div class="main-wrapper">
        <!-- header wrapper -->
        <div class="header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 navbar p-0">
                        <a href="index.html" class="logo"><img src="images/logo.png" alt="logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav nav-menu float-none text-center">
                                <li class="nav-item"><a class="nav-link" href="season.html">Season</a></li>
                                <li class="nav-item"><a class="nav-link" href="single.html">Single</a></li>
                                <li class="nav-item"><a class="nav-link" href="search.html">Action</a></li>
                                <li class="nav-item"><a class="nav-link" href="video.html">Video</a></li>
                                <li class="nav-item"><a class="nav-link" href="landing.html">Landing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        
                        <div class="user-avater">
                            <img src="images/user-8.png" alt="user">
                            <div class="user-menu">
                                <ul>
                                    <li><a href="profile.html"><i class="ti-user"></i>My Profile</a></li>
                                    <li><a href="favorites.html"><i class="ti-heart"></i>My Favorites</a></li>
                                    <li><a href="term.html"><i class="ti-world"></i>Privacy Policy</a></li>
                                    <li><a href="home.html"><i class="ti-power-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="search-div">
                            <input type="text" placeholder="Seacrh">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header wrapper -->

        <div class="page-nav">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-12 text-center">
        				<h2 class="mb-1">My Profile</h2>
        				<p>Create custom landing pages with that converts.</p>
        			</div>
        		</div>
        	</div>
        </div>

        <div class="faq-page">
        	<div class="container">
        		<div class="row justify-content-center">
        			<div class="col-sm-8">
        				<div id="accordion" class="accordion">
						  <div class="card mb-3">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link small-text collapsed pl-5 text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						          <i class="ti-user"></i>Account Settings <span>Create custom landing pages with that converts.</span>
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						      <div class="card-body form-div">
						        <form action="#">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mt-4">
                                          <input class="form-control" type="text" placeholder="Name">
                                          <input class="form-control" type="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mt-4">
                                          <input class="form-control" type="email" placeholder="Email address">
                                          <input class="form-control" type="password" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="form-group button-block text-center">
                                  <a class="form-btn member-bttn3 text-white d-block">Get Started</a>
                                  <p class="sign-up-text">Already have an account?<a href="">Sign in</a></p>
                                </div>
                                
                            </form>
						      </div>
						    </div>
						  </div>
						  <div class="card mb-3">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link small-text collapsed pl-5 text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          <i class="ti-credit-card"></i> Payment Info <span>Create custom landing pages with that converts.</span>
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						      <div class="card-body form-div ">
						        <form action="#">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group mt-4">
                                              <input class="form-control" type="text" placeholder="Cardholder Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group ">
                                              <input class="form-control" type="text" placeholder="Card Number">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                              <input class="form-control" type="text" placeholder="Expiry Date">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                              <input class="form-control" type="text" placeholder="CVV">
                                            </div>
                                        </div>
                                    </div>
                                   
                                     
                                    <div class="form-group button-block text-center">
                                      <a class="form-btn d-block member-bttn4 text-white">Pay Now</a>
                                      
                                    </div>
                                    
                                </form>
						      </div>
						    </div>
						  </div>

                          <div class="card mb-3">
                            <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                <button class="btn btn-link small-text collapsed pl-5 text-left" data-toggle="collapse" data-target="#collapseTHree" aria-expanded="false" aria-controls="collapseTHree">
                                  <a href="home.html"><i class="ti-power-off"></i> Log Out  <span>Create custom landing pages with that converts.</span></a>
                                </button>
                              </h5>
                            </div>
                            <div id="collapseTHree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                               
                            </div>
                          </div>
                          </div>


						   
						</div>
        			</div>
        		</div>
        	</div>
        </div>

		<div class="footer-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h4 class="mb-4">We are digital agency, a small design agency based in paris as i was groping to remove the chain from about my victim’s neck only through language.</h4>
                    </div>
                    <div class="col-sm-6 text-left">
                        <img src="images/icon-21.png" alt="icon" class="icon-img"> 
                    </div>
                    <div class="col-sm-5 offset-sm-1 text-right">
                        <form action="#" class="mt-0">
                            <input type="text" placeholder="Email">
                            <button>Submit</button>
                        </form>                    
                    </div>
                    <div class="col-sm-12">
                        <div class="middle-footer">
                            <div class="row">
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6 md-mb25">
                                    <h5>Social Link</h5>
                                    <ul>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Instagram</a></li>
                                        <li><a href="#">Youtube</a></li>
                                        <li><a href="#">Dribble</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6 md-mb25">
                                    <h5>ONLINE</h5>
                                    <ul>
                                        <li><a href="#">Web</a></li>
                                        <li><a href="#">Series</a></li>
                                        <li><a href="#">Natak</a></li>
                                        <li><a href="#">Comedy</a></li>
                                        <li><a href="#">Action</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6 md-mb25">
                                    <h5>Language</h5>
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">Arab</a></li>
                                        <li><a href="#">Urdu</a></li>
                                        <li><a href="#">Brazil</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                                    <h5>Channel</h5>
                                    <ul>
                                        <li><a href="#">Makeup</a></li>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Girls</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Headphones</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                                    <h5>About</h5>
                                    <ul>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Term of use</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Feedback</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                                    <h5 class="mb-3">Office</h5>
                                    <p style="width: 100%;">41 madison ave, floor 24 new work, NY 10010 <br>1-877-932-7111</p>
                                    <p style="width: 100%;">41 madison ave, floor 24 new work, NY 10010 <br>1-877-932-7111</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 lower-footer"></div>
                    <div class="col-sm-6">
                        <p class="copyright-text">© 2020 copyright. All rights reserved.</p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p class="float-right copyright-text">In case of any concern, <a href="#">contact us</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    


    <script src="js/plugin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

</html>