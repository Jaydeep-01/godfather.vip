<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Godfather.vip | Watch Movies for Free | Download movies for Free | Watch Free Movies | Latest Movies | Latest Series | Latest TvShows </title>

    <meta name="description" content="Godfather.vip. We’re an India based entertainment agency, providing all the Entertainment content for free, it includs Movies, Web-Seires, TV-Season, TvShows. We are having the collection of the all the Movies, Web-Seires, TV-Season, TvShows of all the studios around the world. We are povidind contents to the all the county. We are amaing to become the best entertainment agency in the world. ">

    <meta name="keyword" content="free movies, free movies online, best free movie download site, free full movies, latest movies, new movies, free movies download, free movies best app, best free movie app, best free movies streaming app">

    <meta property="og:image" content="images/gf.jpg">
    <meta property="og:site_name" content="www.godfather.vip">
    <meta property="og:type" content="Entertainment">
    
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="canonical" href="https://www.godfather.vip">

    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        a,
        a:hover,
        a:visited,
        a:focus
        {text-decoration: none !important;}
    </style>
    
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
        

        <!-- banenr wrapper -->
        <div class="banner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="banner-slider owl-carousel owl-theme">
                            <?php 
                                $img_path = "https://image.tmdb.org/t/p/";
                                $slider = json_decode(file_get_contents('https://api.themoviedb.org/3/trending/all/day?api_key=b7921279f7ccce7fec7a0950f5da561a'),true);
                                for($i=0;$i<8;$i++){
                            ?>
                            <div class="owl-items">
                                <div class="banner-wrap justify-content-between align-items-center">
                                    <div class="left-wrap">
                                        <span class="rnd d-inline-block"><span class="d-inline-block">TMDB  <?php echo $slider['results'][$i]['vote_average']; ?> </span> <img loading="lazy" class="d-inline-block" src="images/star.png" style="max-height:13px;max-width:13px;margin-top:-3px"></span>

                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;"><?php  if(isset($slider['results'][$i]['title'])){
                                            echo $title = $slider['results'][$i]['original_title'];
                                        }else{
                                            echo $title = $slider['results'][$i]['original_name'];
                                        } ?></h2>
                                        <!-- <span class="tag"><b>SEASON 1</b></span> -->
                                        <span class="tag"><?php if(isset($slider['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($slider['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($slider['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                        <!-- <span class="tag">2 h 20 min</span> -->

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $slider['results'][$i]['overview']; ?></span></p>
                                        
                                        <a href="<?php if($slider['results'][$i]['media_type'] == "movie"){ echo 'movie.php?id='.$slider['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ; }else{ echo 'series.php?id='.$slider['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;} ?>" class="btn btn-lg "><img loading="lazy" src="images/play.png" alt="icn">Watch now</a>
                                    </div>
                                    <div class="right-wrap" style="background-image: url(<?php echo $img_path.'w780'.$slider['results'][$i]['backdrop_path']; ?>);"></div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banenr wrapper -->


        <br>
        <!-- Latest Movies -->
        <div class="slide-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-4">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light active text-dark font-weight-bold" id="pills-latest_movies-tab" data-bs-toggle="pill" data-bs-target="#pills-latest_movies" type="button" role="tab" aria-controls="pills-latest_movies" aria-selected="true" style="border-radius: 20px">Latest Movies</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light text-dark font-weight-bold" id="pills-latest_tvshow-tab" data-bs-toggle="pill" data-bs-target="#pills-latest_tvshow" type="button" role="tab" aria-controls="pills-latest_tvshow" aria-selected="false" style="border-radius: 20px">Latest TvShows</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row tab-content" id="pills-tabContent">
                    <!-- latest Movies -->
                    <div class="col-sm-12 tab-pane fade show active text-decoration-none" id="pills-latest_movies" role="tabpanel" aria-labelledby="pills-latest_movies-tab">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php 
                                $trending_movies = json_decode(file_get_contents('https://api.themoviedb.org/3/trending/movie/day?api_key=b7921279f7ccce7fec7a0950f5da561a'),true);
                                for($i=0;$i<20;$i++){
                            ?>
                                
                            <div class="owl-items">
                                <a class="slide-one" href="<?php  
                                    
                                    if(isset($trending_movies['results'][$i]['title'])){
                                        $title = $trending_movies['results'][$i]['title'];
                                    }elseif(isset($trending_movies['results'][$i]['name'])){
                                        $title = $trending_movies['results'][$i]['name'];
                                    }elseif(isset($trending_movies['results'][$i]['original_title'])){
                                        $title = $trending_movies['results'][$i]['original_title'];
                                    }else{
                                        $title = $trending_movies['results'][$i]['original_name'];
                                    }

                                    echo 'movie.php?id='.$trending_movies['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w185'.$trending_movies['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $trending_movies['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($trending_movies['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($trending_movies['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($trending_movies['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($trending_movies['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
                                    </div>
                                </a>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>

                    <!-- latest Series -->
                    <div class="col-sm-12 tab-pane fade text-decoration-none" id="pills-latest_tvshow" role="tabpanel" aria-labelledby="pills-latest_tvshow-tab">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php 
                                $trending_movies = json_decode(file_get_contents('https://api.themoviedb.org/3/trending/tv/day?api_key=b7921279f7ccce7fec7a0950f5da561a'),true);
                                for($i=0;$i<20;$i++){
                            ?>
                                
                            <div class="owl-items">
                                <a class="slide-one" href="<?php 
                                    
                                    if(isset($trending_movies['results'][$i]['title'])){
                                        $title = $trending_movies['results'][$i]['title'];
                                    }elseif(isset($trending_movies['results'][$i]['name'])){
                                        $title = $trending_movies['results'][$i]['name'];
                                    }elseif(isset($trending_movies['results'][$i]['original_title'])){
                                        $title = $trending_movies['results'][$i]['original_title'];
                                    }else{
                                        $title = $trending_movies['results'][$i]['original_name'];
                                    }

                                    echo 'series.php?id='.$trending_movies['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w185'.$trending_movies['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $trending_movies['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($trending_movies['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($trending_movies['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($trending_movies['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($trending_movies['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
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
        <!-- Latest Movies -->


        <br><br>
        <!-- Watch in Your Language -->
        <div class="category-wrapper slide-wrapper">
            <div class="container">

                <h2>Watch in Your Language</h2>
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-2">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light active text-dark font-weight-bold" id="pills-language_movies-tab" data-bs-toggle="pill" data-bs-target="#pills-language_movies" type="button" role="tab" aria-controls="pills-language_movies" aria-selected="true" style="border-radius: 20px">Latest Movies</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light text-dark font-weight-bold" id="pills-language_tvshow-tab" data-bs-toggle="pill" data-bs-target="#pills-language_tvshow" type="button" role="tab" aria-controls="pills-language_tvshow" aria-selected="false" style="border-radius: 20px">Latest TvShows</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row tab-content" id="pills-tabContent">
                    <!-- movies -->
                    <div class="col-sm-12 tab-pane fade show active text-decoration-none" id="pills-language_movies" role="tabpanel" aria-labelledby="pills-language_movies-tab">
                        <div class="category-slider owl-carousel owl-theme">
                            <?php
                                $langNames = ["English", "en", "Hindi","hi","Telugu","te","Malyalam","ml","Gujarati","gu","Kannada","kn","French","af","Mandarin","cmn","Spanish","es","Italian","it","Swedish","sv","Japanese","ja","Arabic","ar","Chinese","zh","Russian","ru"];
                                $j=1;
                                for($i=0;$i<(count($langNames)/2);$i++){
                            ?>

                            <div class="owl-items">
                                <a href="language.php?language=<?php echo $langNames[$i*2]; ?>&lang-code=<?php echo $langNames[($i*2)+1]; ?>&type=Movies" class="category-wrap" style="background-image: url(images/gb<?php echo $j; ?>.png);"><span><?php echo $langNames[$i*2]; ?></span></a>
                            </div>
                            <?php
                                    if($j>=6)
                                        $j=1;
                                    else
                                        $j++;
                                }
                            ?>
                        </div>
                    </div>

                    <!-- season -->
                    <div class="col-sm-12 tab-pane fade text-decoration-none" id="pills-language_tvshow" role="tabpanel" aria-labelledby="pills-language_tvshow-tab">
                        <div class="category-slider owl-carousel owl-theme">
                            <?php
                                $langNames = ["English", "en", "Hindi","hi","Telugu","te","Malyalam","ml","Gujarati","gu","Kannada","kn","French","af","Mandarin","cmn","Spanish","es","Italian","it","Swedish","sv","Japanese","ja","Arabic","ar","Chinese","zh","Russian","ru"];
                                $j=1;
                                for($i=0;$i<(count($langNames)/2);$i++){
                            ?>

                            <div class="owl-items">
                                <a href="language.php?language=<?php echo $langNames[$i*2]; ?>&lang-code=<?php echo $langNames[($i*2)+1]; ?>&type=Series" class="category-wrap" style="background-image: url(images/gb<?php echo $j; ?>.png);"><span><?php echo $langNames[$i*2]; ?></span></a>
                            </div>
                            <?php
                                    if($j>=6)
                                        $j=1;
                                    else
                                        $j++;
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <!-- Watch in Your Language -->


        <br><br>
        <!-- Explore your favorite Studio -->
        <div class="studio-wrapper slide-wrapper">
            <div class="container">

                <h2>Explore your favorite Studio</h2>
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-2">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light active text-dark font-weight-bold" id="pills-studio_movies-tab" data-bs-toggle="pill" data-bs-target="#pills-studio_movies" type="button" role="tab" aria-controls="pills-studio_movies" aria-selected="true" style="border-radius: 20px">For Movies</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light text-dark font-weight-bold" id="pills-studio_tvshow-tab" data-bs-toggle="pill" data-bs-target="#pills-studio_tvshow" type="button" role="tab" aria-controls="pills-studio_tvshow" aria-selected="false" style="border-radius: 20px">For TvShows</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row tab-content" id="pills-tabContent">
                    <!-- movies -->
                    <div class="col-sm-12 tab-pane fade show active text-decoration-none" id="pills-studio_movies" role="tabpanel" aria-labelledby="pills-studio_movies-tab">
                        <div class="studio-slider owl-carousel owl-theme">
                            <?php
                                $studio = json_decode(file_get_contents('movie_studio.json'),true);;
                                for($i=0;$i<count($studio);$i++){
                            ?>

                            <div class="owl-items">
                                <a href="studio.php?studio=<?php echo preg_replace(["/-+/", "/-$/im"],["-",""],str_replace(" ","-",$studio[$i]['title'])); ?>&type=Movies&id=<?php echo $i; ?>" class="studio-wrap" style="background-image: url(<?php echo $studio[$i]['image']; ?>);"><span class="studio-wrap"><span style="color:transparent"><?php echo $studio[$i]['title']; ?></span></a><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;text-align:center;color:black;"><b><?php echo $studio[$i]['title']; ?></b></span></span>
                            </div>

                            <?php
                                }
                            ?>
                        </div>
                    </div>

                    <!-- season -->
                    <div class="col-sm-12 tab-pane fade text-decoration-none" id="pills-studio_tvshow" role="tabpanel" aria-labelledby="pills-studio_tvshow-tab">
                        <div class="studio-slider owl-carousel owl-theme">
                            <?php
                                
                                $studio = json_decode(file_get_contents('series_studio.json'),true);
                                for($i=0;$i<count($studio);$i++){
                            ?>

                            <div class="owl-items">
                                <a href="studio.php?studio=<?php echo preg_replace(["/-+/", "/-$/im"],["-",""],str_replace(" ","-",$studio[$i]['title'])); ?>&type=Series&id=<?php echo $i; ?>" class="studio-wrap" style="background-image: url(<?php echo $studio[$i]['image']; ?>);"><span class="studio-wrap"><span style="color:transparent"><?php echo $studio[$i]['title']; ?></span></a><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;text-align:center;color:black"><?php echo $studio[$i]['title']; ?></span></span>
                            </div>

                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <!-- Explore your favorite Studio -->
        
        <br><br>
        <!-- Action movies -->
        <div class="slide-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-1">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light active text-dark font-weight-bold" id="pills-action_movies-tab" data-bs-toggle="pill" data-bs-target="#pills-action_movies" type="button" role="tab" aria-controls="pills-action_movies" aria-selected="true" style="border-radius: 20px">Action Movies</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light text-dark font-weight-bold" id="pills-action_tvshow-tab" data-bs-toggle="pill" data-bs-target="#pills-action_tvshow" type="button" role="tab" aria-controls="pills-action_tvshow" aria-selected="false" style="border-radius: 20px">Action TvShows</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row tab-content" id="pills-tabContent">
                    <!-- movie -->
                    <div class="col-sm-12 tab-pane fade show active text-decoration-none" id="pills-action_movies" role="tabpanel" aria-labelledby="pills-action_movies-tab">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php 
                                $api = 'https://api.themoviedb.org/3/discover/movie?api_key=b7921279f7ccce7fec7a0950f5da561a&with_genres=28&release_date.lte='.date('Y-m-d').'&year='.date('Y');
                                $action_movies = json_decode(file_get_contents($api),true);
                                for($i=0;$i<20;$i++){
                            ?>
                            <div class="owl-items">
                                <a class="slide-one" href="<?php  
                                    
                                    if(isset($action_movies['results'][$i]['title'])){
                                        $title = $action_movies['results'][$i]['title'];
                                    }elseif(isset($action_movies['results'][$i]['name'])){
                                        $title = $action_movies['results'][$i]['name'];
                                    }elseif(isset($action_movies['results'][$i]['original_title'])){
                                        $title = $action_movies['results'][$i]['original_title'];
                                    }else{
                                        $title = $action_movies['results'][$i]['original_name'];
                                    }

                                    echo 'movie.php?id='.$action_movies['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w185'.$action_movies['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $action_movies['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($action_movies['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($action_movies['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($action_movies['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($action_movies['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
                                    </div>
                                </a>
                            </div>
                            <?php
                                }
                            ?>          
                        </div>
                    </div>
                    <!-- tvshow -->
                    <div class="col-sm-12 tab-pane fade text-decoration-none" id="pills-action_tvshow" role="tabpanel" aria-labelledby="pills-action_tvshow-tab">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php 
                                $api = 'https://api.themoviedb.org/3/discover/tv?api_key=b7921279f7ccce7fec7a0950f5da561a&with_genres=10759&release_date.lte='.date('Y-m-d').'&year='.date('Y');
                                $action_movies = json_decode(file_get_contents($api),true);
                                for($i=0;$i<20;$i++){
                            ?>
                            <div class="owl-items">
                                <a class="slide-one" href="<?php  
                                    
                                    if(isset($action_movies['results'][$i]['title'])){
                                        $title = $action_movies['results'][$i]['title'];
                                    }elseif(isset($action_movies['results'][$i]['name'])){
                                        $title = $action_movies['results'][$i]['name'];
                                    }elseif(isset($action_movies['results'][$i]['original_title'])){
                                        $title = $action_movies['results'][$i]['original_title'];
                                    }else{
                                        $title = $action_movies['results'][$i]['original_name'];
                                    }

                                    echo 'series.php?id='.$action_movies['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w185'.$action_movies['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $action_movies['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($action_movies['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($action_movies['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($action_movies['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($action_movies['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
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
        <!-- Action movies -->


        <br>
        <!-- Adventure movies -->
        <div class="slide-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-1">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light active text-dark font-weight-bold" id="pills-adventure_movies-tab" data-bs-toggle="pill" data-bs-target="#pills-adventure_movies" type="button" role="tab" aria-controls="pills-adventure_movies" aria-selected="true" style="border-radius: 20px">Adventure Movies</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light text-dark font-weight-bold" id="pills-adventure_tvshow-tab" data-bs-toggle="pill" data-bs-target="#pills-adventure_tvshow" type="button" role="tab" aria-controls="pills-adventure_tvshow" aria-selected="false" style="border-radius: 20px">Adventure TvShows</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row tab-content" id="pills-tabContent">
                    <!-- movie -->
                    <div class="col-sm-12 tab-pane fade show active text-decoration-none" id="pills-adventure_movies" role="tabpanel" aria-labelledby="pills-adventure_movies-tab">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php 
                                $api = 'https://api.themoviedb.org/3/discover/movie?api_key=b7921279f7ccce7fec7a0950f5da561a&with_genres=12&release_date.lte='.date('Y-m-d').'&year='.date('Y');
                                $adventure_movies = json_decode(file_get_contents($api),true);
                                for($i=0;$i<20;$i++){
                            ?>
                            <div class="owl-items">
                                <a class="slide-one" href="<?php  
                                    
                                    if(isset($adventure_movies['results'][$i]['title'])){
                                        $title = $adventure_movies['results'][$i]['title'];
                                    }elseif(isset($adventure_movies['results'][$i]['name'])){
                                        $title = $adventure_movies['results'][$i]['name'];
                                    }elseif(isset($adventure_movies['results'][$i]['original_title'])){
                                        $title = $adventure_movies['results'][$i]['original_title'];
                                    }else{
                                        $title = $adventure_movies['results'][$i]['original_name'];
                                    }

                                    echo 'movie.php?id='.$adventure_movies['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w185'.$adventure_movies['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $adventure_movies['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($adventure_movies['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($adventure_movies['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($adventure_movies['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($adventure_movies['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
                                    </div>
                                </a>
                            </div>
                            <?php
                                }
                            ?>          
                        </div>
                    </div>
                    <!-- tvshow -->
                    <div class="col-sm-12 tab-pane fade text-decoration-none" id="pills-adventure_tvshow" role="tabpanel" aria-labelledby="pills-adventure_tvshow-tab">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php 
                                $api = 'https://api.themoviedb.org/3/discover/tv?api_key=b7921279f7ccce7fec7a0950f5da561a&with_genres=10759&release_date.lte='.date('Y-m-d').'&year='.date('Y');
                                $adventure_movies = json_decode(file_get_contents($api),true);
                                for($i=0;$i<20;$i++){
                            ?>
                            <div class="owl-items">
                                <a class="slide-one" href="<?php  

                                    if(isset($adventure_movies['results'][$i]['title'])){
                                        $title = $adventure_movies['results'][$i]['title'];
                                    }elseif(isset($adventure_movies['results'][$i]['name'])){
                                        $title = $adventure_movies['results'][$i]['name'];
                                    }elseif(isset($adventure_movies['results'][$i]['original_title'])){
                                        $title = $adventure_movies['results'][$i]['original_title'];
                                    }else{
                                        $title = $adventure_movies['results'][$i]['original_name'];
                                    }

                                    echo 'series.php?id='.$adventure_movies['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w185'.$adventure_movies['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $adventure_movies['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($adventure_movies['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($adventure_movies['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($adventure_movies['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($adventure_movies['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
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
        <!-- Adventure movies -->



        <br>
        <!-- Animation movies -->
        <div class="slide-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-1">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light active text-dark font-weight-bold" id="pills-animation_movies-tab" data-bs-toggle="pill" data-bs-target="#pills-animation_movies" type="button" role="tab" aria-controls="pills-animation_movies" aria-selected="true" style="border-radius: 20px">Animation Movies</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light text-dark font-weight-bold" id="pills-animation_tvshow-tab" data-bs-toggle="pill" data-bs-target="#pills-animation_tvshow" type="button" role="tab" aria-controls="pills-animation_tvshow" aria-selected="false" style="border-radius: 20px">Animation TvShows</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row tab-content" id="pills-tabContent">
                    <!-- movies -->
                    <div class="col-sm-12 tab-pane fade show active text-decoration-none" id="pills-animation_movies" role="tabpanel" aria-labelledby="pills-animation_movies-tab">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php 
                                $api = 'https://api.themoviedb.org/3/discover/movie?api_key=b7921279f7ccce7fec7a0950f5da561a&with_genres=16&release_date.lte='.date('Y-m-d').'&year='.date('Y');
                                $animation_movies = json_decode(file_get_contents($api),true);
                                for($i=0;$i<20;$i++){
                            ?>
                            <div class="owl-items">
                                <a class="slide-one" href="<?php  

                                    if(isset($animation_movies['results'][$i]['title'])){
                                        $title = $animation_movies['results'][$i]['title'];
                                    }elseif(isset($animation_movies['results'][$i]['name'])){
                                        $title = $animation_movies['results'][$i]['name'];
                                    }elseif(isset($animation_movies['results'][$i]['original_title'])){
                                        $title = $animation_movies['results'][$i]['original_title'];
                                    }else{
                                        $title = $animation_movies['results'][$i]['original_name'];
                                    }

                                    echo 'movie.php?id='.$animation_movies['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w185'.$animation_movies['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $animation_movies['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($animation_movies['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($animation_movies['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($animation_movies['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($animation_movies['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
                                    </div>
                                </a>
                            </div>
                            <?php
                                }
                            ?>          
                        </div>
                    </div>
                    
                    <!-- tvshow -->
                    <div class="col-sm-12 tab-pane fade text-decoration-none" id="pills-animation_tvshow" role="tabpanel" aria-labelledby="pills-animation_tvshow-tab">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php 
                                $api = 'https://api.themoviedb.org/3/discover/tv?api_key=b7921279f7ccce7fec7a0950f5da561a&with_genres=16&release_date.lte='.date('Y-m-d').'&year='.date('Y');
                                $animation_movies = json_decode(file_get_contents($api),true);
                                for($i=0;$i<20;$i++){
                            ?>
                            <div class="owl-items">
                                <a class="slide-one" href="<?php  
                                    
                                    if(isset($animation_movies['results'][$i]['title'])){
                                        $title = $animation_movies['results'][$i]['title'];
                                    }elseif(isset($animation_movies['results'][$i]['name'])){
                                        $title = $animation_movies['results'][$i]['name'];
                                    }elseif(isset($animation_movies['results'][$i]['original_title'])){
                                        $title = $animation_movies['results'][$i]['original_title'];
                                    }else{
                                        $title = $animation_movies['results'][$i]['original_name'];
                                    } 

                                    echo 'series.php?id='.$animation_movies['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w185'.$animation_movies['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $animation_movies['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($animation_movies['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($animation_movies['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($animation_movies['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($animation_movies['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
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
        <!-- Animation movies -->


        <br>
        <!-- Comedy movies -->
        <div class="slide-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-1">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light active text-dark font-weight-bold" id="pills-comedy_movies-tab" data-bs-toggle="pill" data-bs-target="#pills-comedy_movies" type="button" role="tab" aria-controls="pills-comedy_movies" aria-selected="true" style="border-radius: 20px">Comedy Movies</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light text-dark font-weight-bold" id="pills-comedy_tvshow-tab" data-bs-toggle="pill" data-bs-target="#pills-comedy_tvshow" type="button" role="tab" aria-controls="pills-comedy_tvshow" aria-selected="false" style="border-radius: 20px">Comedy TvShows</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row tab-content" id="pills-tabContent">
                    <!-- movies -->
                    <div class="col-sm-12 tab-pane fade show active text-decoration-none" id="pills-comedy_movies" role="tabpanel" aria-labelledby="pills-comedy_movies-tab">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php 
                                $api = 'https://api.themoviedb.org/3/discover/movie?api_key=b7921279f7ccce7fec7a0950f5da561a&with_genres=35&release_date.lte='.date('Y-m-d').'&year='.date('Y');
                                $comedy_movies = json_decode(file_get_contents($api),true);
                                for($i=0;$i<20;$i++){
                            ?>
                            <div class="owl-items">
                                <a class="slide-one" href="<?php  
                                    
                                    if(isset($comedy_movies['results'][$i]['title'])){
                                        $title = $comedy_movies['results'][$i]['original_title'];
                                    }else{
                                        $title = $comedy_movies['results'][$i]['original_name'];
                                    } 

                                    if(isset($comedy_movies['results'][$i]['title'])){
                                        $title = $comedy_movies['results'][$i]['title'];
                                    }elseif(isset($comedy_movies['results'][$i]['name'])){
                                        $title = $comedy_movies['results'][$i]['name'];
                                    }elseif(isset($comedy_movies['results'][$i]['original_title'])){
                                        $title = $comedy_movies['results'][$i]['original_title'];
                                    }else{
                                        $title = $comedy_movies['results'][$i]['original_name'];
                                    }

                                    echo 'movie.php?id='.$comedy_movies['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w185'.$comedy_movies['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $comedy_movies['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($comedy_movies['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($comedy_movies['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($comedy_movies['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($comedy_movies['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
                                    </div>
                                </a>
                            </div>
                            <?php
                                }
                            ?>          
                        </div>
                    </div>
                    
                    <!-- tvshow -->
                    <div class="col-sm-12 tab-pane fade text-decoration-none" id="pills-comedy_tvshow" role="tabpanel" aria-labelledby="pills-comedy_tvshow-tab">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php 
                                $api = 'https://api.themoviedb.org/3/discover/tv?api_key=b7921279f7ccce7fec7a0950f5da561a&with_genres=35&release_date.lte='.date('Y-m-d').'&year='.date('Y');
                                $comedy_movies = json_decode(file_get_contents($api),true);
                                for($i=0;$i<20;$i++){
                            ?>
                            <div class="owl-items">
                                <a class="slide-one" href="<?php  
                                    
                                    if(isset($comedy_movies['results'][$i]['title'])){
                                        $title = $comedy_movies['results'][$i]['title'];
                                    }elseif(isset($comedy_movies['results'][$i]['name'])){
                                        $title = $comedy_movies['results'][$i]['name'];
                                    }elseif(isset($comedy_movies['results'][$i]['original_title'])){
                                        $title = $comedy_movies['results'][$i]['original_title'];
                                    }else{
                                        $title = $comedy_movies['results'][$i]['original_name'];
                                    }

                                    echo 'series.php?id='.$comedy_movies['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w185'.$comedy_movies['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $comedy_movies['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($comedy_movies['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($comedy_movies['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($comedy_movies['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($comedy_movies['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
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
        <!-- Comedy movies -->


        <br>
        <!-- Crime movies -->
        <div class="slide-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-1">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light active text-dark font-weight-bold" id="pills-crime_movies-tab" data-bs-toggle="pill" data-bs-target="#pills-crime_movies" type="button" role="tab" aria-controls="pills-crime_movies" aria-selected="true" style="border-radius: 20px">Crime Movies</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn btn-light text-dark font-weight-bold" id="pills-crime_tvshow-tab" data-bs-toggle="pill" data-bs-target="#pills-crime_tvshow" type="button" role="tab" aria-controls="pills-crime_tvshow" aria-selected="false" style="border-radius: 20px">Crime TvShows</button>
                            </li>
                        </ul>
                        <h2> </h2>
                    </div>
                </div>
                <div class="row tab-content" id="pills-tabContent">
                    <!-- movie -->
                    <div class="col-sm-12 tab-pane fade show active text-decoration-none" id="pills-crime_movies" role="tabpanel" aria-labelledby="pills-crime_movies-tab">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php 
                                $api = 'https://api.themoviedb.org/3/discover/movie?api_key=b7921279f7ccce7fec7a0950f5da561a&with_genres=80&release_date.lte='.date('Y-m-d').'&year='.date('Y');
                                $crime_movies = json_decode(file_get_contents($api),true);
                                for($i=0;$i<20;$i++){
                            ?>
                            <div class="owl-items">
                                <a class="slide-one" href="<?php  

                                    if(isset($crime_movies['results'][$i]['title'])){
                                        $title = $crime_movies['results'][$i]['title'];
                                    }elseif(isset($crime_movies['results'][$i]['name'])){
                                        $title = $crime_movies['results'][$i]['name'];
                                    }elseif(isset($crime_movies['results'][$i]['original_title'])){
                                        $title = $crime_movies['results'][$i]['original_title'];
                                    }else{
                                        $title = $crime_movies['results'][$i]['original_name'];
                                    }

                                    echo 'movie.php?id='.$crime_movies['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w185'.$crime_movies['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $crime_movies['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($crime_movies['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($crime_movies['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($crime_movies['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($crime_movies['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
                                    </div>
                                </a>
                            </div>
                            <?php
                                }
                            ?>          
                        </div>
                    </div>
                    <!-- tvshow -->
                    <div class="col-sm-12 tab-pane fade text-decoration-none" id="pills-crime_tvshow" role="tabpanel" aria-labelledby="pills-crime_tvshow-tab">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php 
                                $api = 'https://api.themoviedb.org/3/discover/tv?api_key=b7921279f7ccce7fec7a0950f5da561a&with_genres=80&release_date.lte='.date('Y-m-d').'&year='.date('Y');
                                $crime_movies = json_decode(file_get_contents($api),true);
                                for($i=0;$i<20;$i++){
                            ?>
                            <div class="owl-items">
                                <a class="slide-one" href="<?php  
                                    
                                    if(isset($crime_movies['results'][$i]['title'])){
                                        $title = $crime_movies['results'][$i]['title'];
                                    }elseif(isset($crime_movies['results'][$i]['name'])){
                                        $title = $crime_movies['results'][$i]['name'];
                                    }elseif(isset($crime_movies['results'][$i]['original_title'])){
                                        $title = $crime_movies['results'][$i]['original_title'];
                                    }else{
                                        $title = $crime_movies['results'][$i]['original_name'];
                                    }
                                    
                                    echo 'series.php?id='.$crime_movies['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w185'.$crime_movies['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $crime_movies['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($crime_movies['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($crime_movies['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($crime_movies['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($crime_movies['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
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
        <!-- Crime movies -->


        <!-- footer wrapper -->
        <?php
            include_once('footer.php');
        ?>
        <!-- footer wrapper -->

        
    </div>


    <script src="js/plugin.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>