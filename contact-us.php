<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

    <meta property="og:image" content="images/gf.jpg">
    <meta name="description" content="Contact us to provide your thoughts or resolve the queries you have. Godfather.vip. We’re an India based entertainment agency, providing all the Entertainment content for free, it includs Movies, Web-Seires, TV-Season, TvShows. We are having the collection of the all the Movies, Web-Seires, TV-Season, TvShows of all the studios around the world. We are povidind contents to the all the county. We are amaing to become the best entertainment agency in the world.">
    <meta property="og:site_name" content="www.godfather.vip">
    <meta property="og:type" content="contact-us">
    
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="canonical" href="https://www.godfather.vip/contact-us.php">

    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154357661-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-154357661-1');
    </script>

</head>

<body>
    
    <div class="preloader"></div>
    <div class="backdrop"></div>
    

    <div class="main-wrapper">
        <!-- header wrapper -->
        <?php
            include_once('header.php');
        ?>
        <!-- header wrapper -->

        <div class="faq-page mt-5">
        	<div class="container">
        		<div class="row justify-content-center">
        			<div class="col-sm-8">
        				<div id="accordion" class="accordion">
                            <div class="card mb-3">
                                <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link small-text collapse show pl-5 text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="ti-user"></i>Contact Us <span>Fillout the details below and we will reach you soon.</span>
                                    </button>
                                </h5>
                                </div>
                                    
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body form-div">
                                    <form method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group mt-4">
                                                <input name="name" class="form-control text-dark" type="text" placeholder="Name" required="true">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mt-4">
                                                <input name="email" class="form-control text-dark" type="email" placeholder="Email address" required="true">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mt-4">
                                                <input name="message" class="form-control text-dark" type="text" placeholder="Message"  required="true">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="form-group button-block text-center mt-4">
                                        <input name="submit" class="form-btn text-white d-block" type="submit">
                                    </div>
                                    
                                </form>
                                </div>
                                </div>
                            </div>
						</div>
        			</div>
        		</div>
        	</div>
        </div>

		<?php
            include_once('footer.php');
        ?>

    </div>

    


    <script src="js/plugin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

</html>

<?php 

	if (isset($_POST['submit'])) {
		include_once 'database/dbh.inc.php';
		$name = addslashes(trim(mysqli_real_escape_string($conn, $_POST['name'])));
		$email = trim(mysqli_real_escape_string($conn, $_POST['email']));
		$message = trim(mysqli_real_escape_string($conn, $_POST['message']));
		$modify_date = date("Y/m/d");
		
		$sql = mysqli_query($conn, "INSERT INTO `contact_us`( `name`, `email`, `message`, `modify_date`) VALUES ('$name', '$email', '$message', '$modify_date') ");
		
		if ($sql == true) {
			?>
			<script type="text/javascript">    
				window.location = "index.php?contact=success"; 
			</script>
			<?php    
		}else{
			?>
			<script type="text/javascript">    
				alert("There is some problem, Please try Again !!!");
				window.location = "contact-us.php?error";
			</script>
			<?php
		}			
	}
?>