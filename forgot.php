
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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QPDZ9Z4166"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-QPDZ9Z4166');
    </script>
    
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
                    <div class="col-sm-12 text-center">
                        <a href="index.html" class="logo float-none mt-4"><img src="images/logo.png" alt="logo"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- header wrapper -->

        <section class="form-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-5">
                        <div class="form-div text-center">
                            <h2>Forgot password</h2>
                            <p>Enter your details to recieve a reset link</p>
                            <form action="#">
                                <div class="form-group mt-5">
                                  <input class="form-control" type="email" placeholder="Email address">
                                </div>
                                 
                                <div class="form-group button-block text-center">
                                  <button class="form-btn">Send Link</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


         

    </div>

    


    <script src="js/plugin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

</html>