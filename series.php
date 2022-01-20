<?php
    if(!isset($_GET['id']) || !isset($_GET['title']) ){
        header('Location: index.php');
    }

    error_reporting(0);

    $img_path = "https://image.tmdb.org/t/p/";
    $api = 'https://api.themoviedb.org/3/tv/'.$_GET['id'].'?api_key=b7921279f7ccce7fec7a0950f5da561a&append_to_response=videos,images,credits,keywords,external_ids,reviews';
    $series = json_decode(file_get_contents($api),true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php if(isset($series['name'])){ ?>
    <title><?php echo $series['name']; ?> <?php echo date('Y', strtotime($series['first_air_date'])); ?> | <?php echo $series['name']; ?> Free Download | <?php echo $series['name']; ?> Free Stream | <?php echo $series['name']; ?> Watch Online | Godfather.vip </title>
    <?php }else{ ?>
    <title><?php echo $series['original_name']; ?> <?php echo date('Y', strtotime($series['first_air_date'])); ?> | <?php echo $series['original_name']; ?> Free Download | <?php echo $series['original_name']; ?> Free Stream | <?php echo $series['original_name']; ?> Watch Online | Godfather.vip </title>
    <?php } ?>
    
    <meta name="description" content="<?php if(isset($series['name'])){ echo $series['original_name'];}else { echo $series['name']; } ?> <?php echo date('Y', strtotime($series['first_air_date'])); ?> watch/ dowload free. Story line: <?php echo $series['overview']; ?>">
    <meta property="og:image" content="<?php echo $img_path.'w780'.$series['backdrop_path']; ?>">
    <meta property="og:site_name" content="www.godfather.vip">
    <meta property="og:type" content="series">
    
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="canonical" href="https://www.godfather.vip<?php echo $_SERVER['REQUEST_URI']; ?>">

    <meta name="keyword" content="<?php echo $series['name']; ?>, <?php echo $series['name']; ?> Free Download, <?php echo $series['name']; ?> Free Stream, <?php echo $series['name']; ?> Watch Online, <?php echo $series['original_name']; ?>, <?php echo $series['original_name']; ?> Free Download, <?php echo $series['original_name']; ?> Free Stream, <?php echo $series['original_name']; ?> Watch Online
    
    <?php for($i=0;$i<count($series['keywords']['results']);$i++){echo ", ".$series['keywords']['results'][$i]['name'];}   ?> ">

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
  
    
    <style>
        .myImg {
            cursor: pointer;
            transition: 0.3s;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 99; /* Sit on top */
            padding-top: 20px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (Image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 75%;
            max-width: 1200px;
        }

        /* Add Animation - Zoom in the Modal */
        .modal-content, #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)}
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 80%;
            }
        }
    </style>
</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJJWLHV"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
                        <div class="banner-wrap justify-content-between align-items-center">
                            <div class="left-wrap">
                                <span class="rnd">TMDb <?php echo $series['vote_average']; ?> <img loading="lazy" src="images/star.png" style="max-height:13px;max-width:13px;margin-top:-2px"></span>
                                <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;"><?php  if(isset($series['name'])){
                                    echo $title = $series['name'];
                                }else{
                                    echo $title = $series['original_name'];
                                } ?></h2>

                                <span class="tag">
                                    <?php
                                        for($i=0;$i<count($series['genres']);$i++){
                                           echo "<a class='tag' href='category.php?category=".str_replace([" ","&"],["-",'and'],$series['genres'][$i]['name'])."&type=Series&ids=".$series['genres'][$i]['id']."'>".$series['genres'][$i]['name']."</a>";
                                        }
                                    ?>
                                </span>
                                <br>

                                <!-- <span class="tag"><b>SEASON 1</b></span> -->
                                <span class="tag"><?php echo date('d/m/Y', strtotime($series['first_air_date'])); ?></span>

                                <span class="tag"><b>HD</b></span>
                                <span class="tag"><b>16+</b></span>
                                <span class="tag"><?php echo intdiv( $series['episode_run_time'][0], 60).' h '. ( $series['episode_run_time'][0] % 60)." min"; ?></span> 

                                <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $series['overview']; ?></span></p>
                                
                                <div class="icon-bttn">
                                    <i class="ti-sharethis text-white mr-4"></i>
                                    <div class="share-icons">

                                        <a target="_blank" href="http://www.facebook.com/sharer.php?u=https://www.godfather.vip<?php echo $_SERVER['REQUEST_URI']; ?>"><i class="ti-facebook"></i></a>

                                        <a target="_blank" href="http://twitter.com/share?url=https://www.godfather.vip<?php echo $_SERVER['REQUEST_URI']; ?>&text=<?php echo stripslashes($title); ?>"><i class="ti-twitter-alt"></i></a>

                                        <a target="_blank" href="https://telegram.me/share/url?url=https://www.godfather.vip<?php echo $_SERVER['REQUEST_URI']; ?>"><img loading="lazy" src="images/share-tg.png" style="margin-top:-5px;max-height:25px"></i></a>

                                    </div>
                                </div>

                            </div>
                            <div class="right-wrap" style="background-image: url(<?php echo $img_path.'original'.$series['backdrop_path']; ?>);"></div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="slide-wrapper">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php
                                for ($i=$series['number_of_seasons']; $i >=0 ; $i--) {
                                    if(isset($series['seasons'][$i]['season_number']) && $series['seasons'][$i]['season_number'] != 0){ 
                            ?>
                            <div class="owl-items">
                                <a class="slide-one slide-two slide-three" target="_blank" href="https://movies.godfather.vip/season.php?id=<?php echo $_GET['id']; ?>&title=<?php echo $_GET['title']; ?>&season=<?php echo $series['seasons'][$i]['season_number']; ?>" >
                                    <div class="slide-image" style="background-image: url(<?php echo $img_path.'w500'.$series['seasons'][$i]['poster_path']; ?>);"></div>
                                    <div class="slide-content">
                                        <h2>Season <?php echo $series['seasons'][$i]['season_number']; ?></h2>
                                        <span class="tag"><b><?php echo $series['seasons'][$i]['episode_count']; ?></b> Episodes</span><br>
                                        <span class="tag"><?php echo date('d/m/Y', strtotime($series['seasons'][$i]['air_date'])); ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                    </div>
                                </a>
                            </div>
                            <?php
                                    }
                                }
                            ?>
                        </div> 
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- banenr wrapper -->



        <br>
        <!-- crew wrapper -->
        <?php
            if(count($series['credits']['cast']) != 0 ){
        ?>
        <div class="slide-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-4">
                        <h2>The Crew</h2>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="team-slider owl-carousel owl-theme">
                            <?php
                                for($i=0;$i<count($series['credits']['cast']);$i++){
                                    if(isset($series['credits']['cast'][$i]['profile_path'])){
                            ?>  
                            <div class="owl-items">
                                <a href="download.php?src=web_app_movie_page" class="crew-wrap">
                                    <img loading="lazy" src="<?php echo $img_path.'w185'.$series['credits']['cast'][$i]['profile_path']; ?>" alt="team">
                                    <span style="font-width:bold"><?php echo $series['credits']['cast'][$i]['original_name']; ?></span>
                                    <span style="font-size:0.7em;margin-top:0px;color:#616161"><?php echo $series['credits']['cast'][$i]['character']; ?></span>
                                </a>
                            </div>
                            <?php
                                    }
                                }
                            ?>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            }
        ?>
        <!-- crew wrapper -->


        <!-- image wrapper -->
        <?php
            if(count($series['images']['backdrops']) != 0 ){
        ?>
        <div class="slide-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-4">
                        <h2>Images</h2>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="slide-slider-images owl-carousel owl-theme">
                            <?php
                                for($i=0;$i<count($series['images']['backdrops']);$i++){
                            ?>  
                            <div class="owl-items">
                                <a style="min-height:400px;min-width:250px">
                                    <img loading="lazy" src="<?php echo $img_path.'w1280'.$series['images']['backdrops'][$i]['file_path']; ?>" class="myImg shadow-sm " style="border-radius:7px" alt="backdrops">
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
        <?php
            }
        ?>
        <!-- image wrapper -->


        
        <!-- video wrapper -->
        <?php
            if(count($series['videos']['results']) != 0 ){
        ?>
        <div class="slide-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-4">
                        <h2>Videos</h2>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="slide-slider-images owl-carousel owl-theme">
                            <?php
                                for($i=0;$i<=count($series['videos']['results']);$i++){
                                    if($series['videos']['results'][$i]['site'] == 'YouTube'){
                            ?>  
                            <div class="owl-items" >
                                <a href="#" id="youtube_video">
                                    <div class="embed-responsive embed-responsive-16by9 shadow-sm">
                                        <iframe width="350" height="197" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $series['videos']['results'][$i]['key'] ; ?>?modestbranding=1&autohide=1&showinfo=0" frameborder="0" allowfullscreen style="border-radius:7px"></iframe>
                                    </div>
                                </a>
                            </div>
                            <?php
                                    }
                                }
                            ?>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
        <!-- video wrapper -->
        

        <!-- Recommended Series -->
        <?php
            $recommended_series = json_decode(file_get_contents('https://api.themoviedb.org/3/tv/'.$_GET['id'].'/recommendations?api_key=b7921279f7ccce7fec7a0950f5da561a'),true);
            if($recommended_series['total_results'] != 0 ){
        ?>
        <div class="slide-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-4">
                        <h2> Recommended Movies</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="slide-slider owl-carousel owl-theme">
                            <?php 
                                for($i=0;$i<count($recommended_series['results']);$i++){
                            ?>
                            <div class="owl-items">
                                <a class="slide-one" href="<?php  
                                    
                                    if(isset($recommended_series['results'][$i]['title'])){
                                        $title = $recommended_series['results'][$i]['title'];
                                    }elseif(isset($recommended_series['results'][$i]['name'])){
                                        $title = $recommended_series['results'][$i]['name'];
                                    }elseif(isset($recommended_series['results'][$i]['original_title'])){
                                        $title = $recommended_series['results'][$i]['original_title'];
                                    }else{
                                        $title = $recommended_series['results'][$i]['original_name'];
                                    }

                                    echo 'series.php?id='.$recommended_series['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w154'.$recommended_series['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $recommended_series['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($recommended_series['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($recommended_series['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($recommended_series['results'][$i]['first_air_date']));
                                          }  ?></span>
                                        <span class="tag"><b>HD</b></span>
                                        
                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($recommended_series['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
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
        <?php
            }
        ?>
        <!-- Recommended Movies -->


        <!-- production studio -->
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-10 col-sm-6 text-left mb-4 mt-4">
                    <h2 class="font-weight-bold">Production Studio</h2>
                </div>
                <div class="col-lg-2 d-none d-sm-block d-md-block text-left mb-4 mt-4">
                    <h2 class="font-weight-bold">Social Links</h2>
                </div>  
            </div>
            <div class="row">
                <div class="col-lg-10 col-sm-12 mb-4 mt-4 d-inline-block">

                    <div class="container">
                    <?php
                        if(count($series['production_companies']) > 0 ){
                            for($i=0;$i<count($series['production_companies']);$i++){
                                
                            ?>
                            <a href="network.php?studio=<?php echo str_replace(" ","-", $series['production_companies'][$i]['name']); ?>&id=<?php echo $series['production_companies'][$i]['id']; ?>&type=Series">
                                <div class="d-inline-block mb-2 mt-2 ml-2 mr-2 align-top text-center" style="max-width:150px;min-height:150px">
                                    <div class="d-flex align-items-center justify-content-center" style="max-height:100px;min-height:100px;">
                                        <img loading="lazy" src="<?php echo $img_path.'w185'.$series['production_companies'][$i]['logo_path']; ?>" class="img-fluid align-middle rounded" alt="Studio" style="max-height:100px;" onerror="this.onerror=null; this.src='./images/gf.jpg'">
                                    </div>

                                    <br><span style="font-width:bold;color:black" class="text-center align-bottom mt-4"><?php echo $series['production_companies'][$i]['name']; ?></span>
                                    <br><span style="font-size:0.7em;color:#616161;"><?php echo $series['production_companies'][$i]['origin_country']; ?></span>
                                </div>
                            </a>
                            <?php
                            }
                        }else{
                            echo "<span class='h3 text-dark'> No studio has been added yet.</span>";
                        }
                    ?>    
                    </div>

                    
                    <?php
                    if($series['reviews']['total_results']>0){
                    ?>
                    <br><br>
                    <span class="text-dark font-weight-bold">Reviews: </span> <br>
                    <div class="container text-dark shadow-sm p-3 mb-5 bg-white rounded mt-4">
                        <div class="col-lg-2">
                            <img loading="lazy" src="<?php echo $img_path."w45".$series['reviews']['results'][0]['author_details']['avatar_path']; ?>" class="float-left rounded-circle" style="max-height:50px;max-width:50px" alt="user" onerror="this.onerror=null; this.src='./images/gf.jpg'">
                        </div>
                        <div class="col-lg-12 ml-2 mr-2">
                            <span class="font-weight-light font-italic" style="font-size:0.7em;margin-top:0px;color:#616161"> &nbsp;&nbsp;&nbsp;&nbsp; Written by </span><br>

                            <span class="font-weight-bold"> &nbsp;&nbsp;&nbsp; <?php echo $series['reviews']['results'][0]['author']; ?> </span> <span class="bg-dark rounded text-white ml-4" style="padding: 1px 8px 1px 8px;"> <?php echo $series['reviews']['results'][0]['author_details']['rating']; ?> <img loading="lazy" src="images/star.png" style="max-height:13px;margin-top:-2px"> </span> <br><br>

                            <span class="text-dark mt-2" id="review" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 10;" > <?php echo $series['reviews']['results'][0]['content'] ?> </span> <br>
                        </div>
                    </div>
                    <a href="download.php?src=series_review" >more reviews...</a>
                    <?php } ?>
                </div>

                <div class="col-lg-2 col-sm-12 mb-4 mt-4">
                    <div class="d-inline-block">
                        <?php
                            if(isset($series['homepage'])){
                        ?>
                        <a class="d-inline-block mb-2 mt-2 mr-4" href="<?php echo $series['homepage']; ?>"><img loading="lazy" src="images/link.png" style="max-width:50px"></a>
                        <?php
                            }
                        ?>


                        <?php
                            if(isset($series['external_ids']['facebook_id'])){
                        ?>
                        <a class="d-inline-block mb-2 mt-2 mr-4" href="https://www.facebook.com/<?php echo $series['external_ids']['facebook_id']; ?>"><img loading="lazy" src="images/facebook.png" style="max-width:50px"></a>
                        <?php
                            }
                        ?> 


                        <?php
                            if(isset($series['external_ids']['instagram_id'])){
                        ?>
                        <a class="d-inline-block mb-2 mt-2 mr-4" href="https://www.instagram.com/<?php echo $series['external_ids']['instagram_id']; ?>"><img loading="lazy" src="images/instagram.png" style="max-width:50px"></a>
                        <?php
                            }
                        ?>


                        <?php
                            if(isset($series['external_ids']['twitter_id'])){
                        ?>
                        <a class="d-inline-block mb-2 mt-2 mr-4" href="https://www.twitter.com/<?php echo $series['external_ids']['twitter_id']; ?>"><img loading="lazy" src="images/twitter.png" style="max-width:50px"></a>
                        <?php
                            }
                        ?>


                        <?php
                            if(isset($series['external_ids']['imdb_id'])){
                        ?>
                        <a class="d-inline-block mb-2 mt-2 mr-4" href="https://www.imdb.com/title/<?php echo $series['external_ids']['imdb_id']; ?>"><img loading="lazy" src="images/imdb.png" style="max-width:50px"></a>
                        <?php
                            }
                        ?>

                        
                        <a class="d-inline-block mb-2 mt-2 mr-4" href="https://www.themoviedb.org/tv/<?php echo $_GET['id']; ?>"><img loading="lazy" src="images/tmdb.png" class="rounded" style="max-width:50px"></a>
                        

                    </div>

                    <br><br>
                    <div class="text-dark">
                        <span class="font-weight-bold"> Status: </span><br><?php if(isset($series['status'])){ echo $series['status'];}else{ echo "---"; } ?><br><br>

                        <span class="font-weight-bold"> Network: </span> <br>
                        <?php 
                            if(isset($series['networks'])){
                                for($i=0;$i<count($series['networks']);$i++){
                        ?>
                            <a href="network.php?studio=<?php echo $series['networks'][$i]['name']; ?>&id=<?php echo $series['networks'][$i]['id']; ?>&type=Series&network=1">
                                <img loading="lazy" src="<?php echo $img_path.'w92'.$series['networks'][$i]['logo_path']; ?>" onerror="this.onerror=null; this.src='./images/gf.jpg'" class="img-fluid align-middle" alt="Studio" style="max-height:50px;">
                            </a>
                        <?php
                                }
                            }
                        ?>
                        <br><br>

                        <span class="font-weight-bold"> Popularity: </span><?php if(isset($series['popularity'])){ echo number_format($series['popularity']);}else{ echo "---"; } ?> <br><br>

                        <span class="font-weight-bold"> Spoken Language: </span><br>
                        <?php if(isset($series['spoken_languages'])){ 
                            for($i=0;$i<count($series['spoken_languages']);$i++){ 
                                echo "<a class='text-dark' href='language.php?language=".$series['spoken_languages'][$i]['name']."&lang-code=".$series['spoken_languages'][$i]['iso_639_1']."&type=Series' >".$series['spoken_languages'][$i]['english_name']."</a>  ";
                            }
                        }else{ echo "---"; } ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- production studio -->

         
        <!-- footer wrapper -->
        <?php
            include_once('footer.php');
        ?>
        <!-- footer wrapper -->
        
        <!-- The Modal for Image  -->
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

            <!-- Modal Content (The Image) -->
            <img loading="lazy" class="modal-content" id="img01">

        </div>
        <!-- The Modal for Image -->

    </div>

    


    <script src="js/plugin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = $('.myImg');
        var modalImg = $("#img01");
        $('.myImg').click(function(){
            modal.style.display = "block";
            var newSrc = this.src;
            modalImg.attr('src', newSrc);
        });

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        $('body').keypress(function(e) {
            modal.style.display = "none";
        });

        $(document).mouseup(function(e) {
            if (!img.is(e.target) && img.has(e.target).length === 0) {
                modal.style.display = "none";
            }
        });


        $('#youtube_video').click(function(){
            element.dispatchEvent(new KeyboardEvent('keydown',{'key':'f'}));
        });

    </script>
</body>

</html>