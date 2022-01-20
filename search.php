<?php
    if(!isset($_GET['s'])){
        header('Location: index.php');
    }
    $queried = $_GET['s']; 
    
    error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo str_replace('+', ' ',$queried); ?> | Godfather.vip</title>
    <meta property="og:image" content="images/gf.jpg">
    
    <meta name="description" content="Search your favourite movies and tvshow here. Godfather.vip. We’re an India based entertainment agency, providing all the Entertainment content for free, it includs Movies, Web-Seires, TV-Season, TvShows. We are having the collection of the all the Movies, Web-Seires, TV-Season, TvShows of all the studios around the world. We are povidind contents to the all the county. We are amaing to become the best entertainment agency in the world.">
    <meta property="og:site_name" content="www.godfather.vip">
    <meta property="og:type" content="search">
    
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="canonical" href="https://www.godfather.vip<?php echo $_SERVER['REQUEST_URI']; ?>">

    <meta name="keyword" content="<?php echo str_replace('+', ' ',$queried); ?>, download <?php echo str_replace('+', ' ',$queried); ?> free, watch <?php echo str_replace('+', ' ',$queried); ?> free">

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
        <?php
            $img_path = "https://image.tmdb.org/t/p/";
            $queried= str_replace(' ', '+',$queried);
            $api = 'https://api.themoviedb.org/3/search/multi?api_key=b7921279f7ccce7fec7a0950f5da561a&query='.$queried;
            $movie = json_decode(file_get_contents($api),true);
            // print_r($movie);
        ?>

        <div class="page-nav p-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="search-wrapper">
                            <h2 class="mb-3"><?php echo $movie['total_results']; ?>+ found for "<?php echo str_replace('+', ' ',$queried); ?>".</h2>
                            <!-- <p class="mb-0">Create custom landing pages with that converts.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <?php
            for($j=1;$j<=5;$j++){
                $queried= str_replace(' ', '+',$queried);
                $api = 'https://api.themoviedb.org/3/search/multi?api_key=b7921279f7ccce7fec7a0950f5da561a&query='.$queried.'&page='.$j;
                $movie = json_decode(file_get_contents($api),true);
       ?>
        <!-- slider wrapper -->
        <div class="slide-wrapper search-wrap-slide">
            <div class="container">
                 
                <div class="row">
                    <div class="col-sm-12 mt-4">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php
                                for($i=0;$i<count($movie['results']);$i++){
                            ?>
                            <div class="owl-items">
                                <a class="slide-one" href="<?php  
                                    
                                    if(isset($movie['results'][$i]['title'])){
                                        $title = $movie['results'][$i]['title'];
                                    }elseif(isset($movie['results'][$i]['name'])){
                                        $title = $movie['results'][$i]['name'];
                                    }elseif(isset($movie['results'][$i]['original_title'])){
                                        $title = $movie['results'][$i]['original_title'];
                                    }else{
                                        $title = $movie['results'][$i]['original_name'];
                                    }
                                    
                                    if($movie['results'][$i]['media_type'] == "movie" ){
                                        echo "movie";
                                    }else{
                                        echo "series";
                                    }

                                    echo '.php?id='.$movie['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w342'.$movie['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>
                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $movie['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($movie['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($movie['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($movie['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($movie['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
                                    </div>
                                </a>
                            </div>
                            <?php
                                }   
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider wrapper -->
        <?php
            }
        ?>

    </div>

    


    <script src="js/plugin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

</html>