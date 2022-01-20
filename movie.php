<?php
    if(!isset($_GET['id']) || !isset($_GET['title']) ){
        header('Location: index.php');
    }

    error_reporting(0);

    $img_path = "https://image.tmdb.org/t/p/";
    $api = 'https://api.themoviedb.org/3/movie/'.$_GET['id'].'?api_key=b7921279f7ccce7fec7a0950f5da561a&append_to_response=videos,images,credits,keywords,external_ids,reviews';
    $movie = json_decode(file_get_contents($api),true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $movie['title']; ?> <?php echo date('Y', strtotime($movie['release_date'])); ?> | <?php echo $movie['title']; ?> Free Download | <?php echo $movie['title']; ?> Free Stream | <?php echo $movie['title']; ?> Watch Online | Godfather.vip</title>
    
    <meta name="description" content="<?php echo $movie['title']; ?> <?php echo date('Y', strtotime($movie['release_date'])); ?> watch/ download free. Story line: <?php echo $movie['overview']; ?>">
    <meta property="og:image" content="<?php echo $img_path.'w780'.$movie['backdrop_path']; ?>">
    <meta property="og:site_name" content="www.godfather.vip">
    <meta property="og:title" content="<?php echo $movie['title']; ?> <?php echo date('Y', strtotime($movie['release_date'])); ?>">
    <meta property="og:type" content="movie">
    
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="canonical" href="https://www.godfather.vip<?php echo $_SERVER['REQUEST_URI']; ?>">

    <meta name="keyword" content="<?php echo $movie['title']." download/ stream/ watch online free, ".$movie['original_title']; ?>, <?php echo $movie['original_title']; ?> Free Download, <?php echo $movie['original_title']; ?> Free Stream, <?php echo $movie['original_title']; ?> Watch Online <?php for($i=0;$i<count($movie['keywords']['keywords']);$i++){echo ", ".$movie['keywords']['keywords'][$i]['name'];}   ?> ">

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

        <!-- <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-5113857395941936"
                        data-ad-slot="4667208714"
                        data-ad-format="auto"
                        data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div> -->


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
                                <span class="rnd">TMDb <?php echo $movie['vote_average']; ?> <img loading="lazy" src="images/star.png" style="max-height:13px;max-width:13px;margin-top:-2px"></span>
                                <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;"><?php  if(isset($movie['title'])){
                                    echo $title = $movie['title'];
                                }else{
                                    echo $title = $movie['original_title'];
                                } ?></h2>
                                
                                <span class="tag">
                                    <?php
                                        for($i=0;$i<count($movie['genres']);$i++){
                                           echo "<a class='tag' href='category.php?category=".str_replace([" ","&"],["-",'and'],$movie['genres'][$i]['name'])."&type=Movies&ids=".$movie['genres'][$i]['id']."'>".$movie['genres'][$i]['name']."</a>";
                                        }
                                    ?>
                                </span>
                                <br>
                                <!-- <span class="tag"><b>SEASON 1</b></span> -->
                                <span class="tag"><?php if(isset($movie['release_date'])){
                                    echo date('d/m/Y', strtotime($movie['release_date']));
                                }else{
                                    echo date('d/m/Y', strtotime($movie['first_air_date']));
                                }  ?></span>
                                <span class="tag"><b>HD</b></span>
                                <span class="tag"><b>16+</b></span>
                                <span class="tag"><?php echo intdiv( $movie['runtime'], 60).' h '. ( $movie['runtime'] % 60)." min"; ?></span>

                                <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $movie['overview']; ?></span></p>

                                <a target="_blank" href="https://movies.godfather.vip/movie.php?id=<?php echo $_GET['id']; ?>&title=<?php echo $_GET['title']; ?>#links" class="btn btn-lg"><img loading="lazy" src="images/play.png" alt="icn">Watch now</a>
                                
                                <div class="icon-bttn">
                                    <i class="ti-sharethis text-white mr-4"></i>
                                    <div class="share-icons">

                                        <a target="_blank" href="http://www.facebook.com/sharer.php?u=https://www.godfather.vip<?php echo $_SERVER['REQUEST_URI']; ?>"><i class="ti-facebook"></i></a>

                                        <a target="_blank" href="http://twitter.com/share?url=https://www.godfather.vip<?php echo $_SERVER['REQUEST_URI']; ?>&text=<?php echo stripslashes($title); ?>"><i class="ti-twitter-alt"></i></a>

                                        <a target="_blank" href="https://telegram.me/share/url?url=https://www.godfather.vip<?php echo $_SERVER['REQUEST_URI']; ?>"><img loading="lazy" src="images/share-tg.png" style="margin-top:-5px;max-height:25px"></i></a>

                                    </div>
                                </div>

                            </div>
                            <div class="right-wrap" style="background-image: url(<?php echo $img_path.'w1280'.$movie['backdrop_path']; ?>);" ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banenr wrapper -->
                    

        <br>
        <!-- crew wrapper -->
        <?php
            if(count($movie['credits']['cast']) != 0 ){
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
                                for($i=0;$i<count($movie['credits']['cast']);$i++){
                                    if(isset($movie['credits']['cast'][$i]['profile_path'])){
                            ?>  
                            <div class="owl-items">
                                <a href="download.php?src=web_app_movie_page" class="crew-wrap">
                                    <img loading="lazy" src="<?php echo $img_path.'w185'.$movie['credits']['cast'][$i]['profile_path']; ?>" alt="team">
                                    <span style="font-width:bold"><?php echo $movie['credits']['cast'][$i]['original_name']; ?></span>
                                    <span style="font-size:0.7em;margin-top:0px;color:#616161"><?php echo $movie['credits']['cast'][$i]['character']; ?></span>
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
            if(count($movie['images']['backdrops']) != 0 ){
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
                                for($i=0;$i<count($movie['images']['backdrops']);$i++){
                            ?>  
                            <div class="owl-items">
                                <a style="min-height:400px;min-width:250px">
                                    <img loading="lazy" src="<?php echo $img_path.'w1280'.$movie['images']['backdrops'][$i]['file_path']; ?>" class="myImg shadow-sm " style="border-radius:7px" alt="backdrops">
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
            if(count($movie['videos']['results']) != 0 ){
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
                                for($i=0;$i<count($movie['videos']['results']);$i++){
                                    if($movie['videos']['results'][$i]['site'] == 'YouTube'){
                            ?>  
                            <div class="owl-items" >
                                <a href="#" >
                                    <div class="embed-responsive embed-responsive-16by9 shadow-sm">
                                        <iframe width="350" height="197" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $movie['videos']['results'][$i]['key'] ; ?>?modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allowfullscreen style="border-radius:7px"></iframe>
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
        

        <!-- Recommended Movies -->
        <?php
            $recommended_movies = json_decode(file_get_contents('https://api.themoviedb.org/3/movie/'.$_GET['id'].'/recommendations?api_key=b7921279f7ccce7fec7a0950f5da561a'),true);
            if($recommended_movies['total_results'] != 0 ){
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
                                for($i=0;$i<count($recommended_movies['results']);$i++){
                            ?>
                            <div class="owl-items">
                                <a class="slide-one" href="<?php  
                                    
                                    if(isset($recommended_movies['results'][$i]['title'])){
                                        $title = $recommended_movies['results'][$i]['title'];
                                    }elseif(isset($recommended_movies['results'][$i]['name'])){
                                        $title = $recommended_movies['results'][$i]['name'];
                                    }elseif(isset($recommended_movies['results'][$i]['original_title'])){
                                        $title = $recommended_movies['results'][$i]['original_title'];
                                    }else{
                                        $title = $recommended_movies['results'][$i]['original_name'];
                                    }

                                    echo 'movie.php?id='.$recommended_movies['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w154'.$recommended_movies['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'"></div>
                                    <div class="slide-content">
                                        <h2 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 1;"><?php echo $title; ?> </h2>

                                        <p><span style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;"><?php echo $recommended_movies['results'][$i]['overview']; ?></span></p>
                                        <!-- <span class="tag">2 h 20 min</span> -->
                                        <span class="tag"><?php if(isset($recommended_movies['results'][$i]['release_date'])){
                                            echo date('Y', strtotime($recommended_movies['results'][$i]['release_date']));
                                          }else{
                                            echo date('Y', strtotime($recommended_movies['results'][$i]['first_air_date']));
                                          }  ?></span>

                                        <span class="tag"><b>HD</b></span>

                                        <span class="tag d-inline-block"><b> <span class="d-inline-block"> <?php echo round($recommended_movies['results'][$i]['vote_average'],1); ?></span> <img loading="lazy" src="images/star.png" class="d-inline-block" style="max-height:13px;max-width:13px;margin-top:-3px"></b></span>
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
                        if(count($movie['production_companies']) > 0 ){
                            for($i=0;$i<count($movie['production_companies']);$i++){
                                
                            ?>
                            <a href="network.php?studio=<?php echo str_replace(" ","-", $movie['production_companies'][$i]['name']); ?>&id=<?php echo $movie['production_companies'][$i]['id']; ?>&type=Movies">
                                <div class="d-inline-block mb-2 mt-2 ml-2 mr-2 align-top text-center" style="max-width:150px;min-height:150px">
                                    <div class="d-flex align-items-center justify-content-center" style="max-height:100px;min-height:100px;">
                                        <img loading="lazy" src="<?php echo $img_path.'w185'.$movie['production_companies'][$i]['logo_path']; ?>" class="img-fluid align-middle rounded" alt="Studio" style="max-height:100px;" onerror="this.onerror=null; this.src='./images/gf.jpg'">
                                    </div>

                                    <br><span style="font-width:bold;color:black" class="text-center align-bottom mt-4"><?php echo $movie['production_companies'][$i]['name']; ?></span>
                                    <br><span style="font-size:0.7em;color:#616161;"><?php echo $movie['production_companies'][$i]['origin_country']; ?></span>
                                </div>
                            </a>
                            <?php
                            }
                        }else{
                            echo "<span> No studio has been added yet.</span>";
                        }
                    ?>    
                    </div>


                    
                    <?php
                        if(isset($movie['belongs_to_collection'])){
                    ?>
                    <br><br>
                    <div class="container rounded p-4" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.36), rgba(0, 0, 0, 0.36)),url(<?php echo $img_path.'w1280'.$movie['belongs_to_collection']['backdrop_path']; ?>);" style="max-height:500px;min-height:500px;background-size:cover;background-position: center;  background-attachment: fixed;">
                        
                        <br><br><br><br>
                        <span class="display-4 font-weight-bold text-white"> Part of the <?php echo $movie['belongs_to_collection']['name']; ?> </span><br>
                        <button type="button" class="mt-3 btn btn-light rounded-pill h3 font-weight-bold"> View the Collection </button>
                        <br><br><br><br>
                    </div>
                    <?php
                        }
                    ?>
                    

                    <?php
                    if($movie['reviews']['total_results']>0){
                    ?>
                    <br><br>
                    <span class="text-dark font-weight-bold">Reviews: </span> <br>
                    <div class="container text-dark shadow-sm p-3 mb-5 rounded mt-4">
                        <div class="col-lg-2">
                            <img loading="lazy" src="<?php echo $img_path."w45".$movie['reviews']['results'][0]['author_details']['avatar_path']; ?>" class="float-left rounded-circle" style="max-height:50px;max-width:50px" alt="user" onerror="this.onerror=null; this.src='./images/gf.jpg'">
                        </div>
                        <div class="col-lg-12 ml-2 mr-2">
                            <span class="font-weight-light font-italic" style="font-size:0.7em;margin-top:0px;color:#616161"> &nbsp;&nbsp;&nbsp;&nbsp; Written by </span><br>

                            <span class="font-weight-bold"> &nbsp;&nbsp;&nbsp; <?php echo $movie['reviews']['results'][0]['author']; ?> </span> <span class="bg-dark rounded text-white ml-4" style="padding: 1px 8px 1px 8px;"> <?php echo $movie['reviews']['results'][0]['author_details']['rating']; ?> <img loading="lazy" src="images/star.png" style="max-height:13px;margin-top:-2px"> </span> <br><br>

                            <span class="text-dark mt-2" id="review" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 10;" > <?php echo $movie['reviews']['results'][0]['content'] ?> </span> <br>
                        </div>
                    </div>
                    <a href="download.php?src=movie_review" >more reviews...</a>
                    <?php } ?>
                </div>

                <div class="col-lg-2 col-sm-12 mb-4 mt-4">
                    <div class="d-inline-block">
                        <?php
                            if(isset($movie['homepage'])){
                        ?>
                        <a class="d-inline-block mb-2 mt-2 mr-4" href="<?php echo $movie['homepage']; ?>"><img loading="lazy" src="images/link.png" style="max-width:50px"></a>
                        <?php
                            }
                        ?>


                        <?php
                            if(isset($movie['external_ids']['facebook_id'])){
                        ?>
                        <a class="d-inline-block mb-2 mt-2 mr-4" href="https://www.facebook.com/<?php echo $movie['external_ids']['facebook_id']; ?>"><img loading="lazy" src="images/facebook.png" style="max-width:50px"></a>
                        <?php
                            }
                        ?> 


                        <?php
                            if(isset($movie['external_ids']['instagram_id'])){
                        ?>
                        <a class="d-inline-block mb-2 mt-2 mr-4" href="https://www.instagram.com/<?php echo $movie['external_ids']['instagram_id']; ?>"><img loading="lazy" src="images/instagram.png" style="max-width:50px"></a>
                        <?php
                            }
                        ?>


                        <?php
                            if(isset($movie['external_ids']['twitter_id'])){
                        ?>
                        <a class="d-inline-block mb-2 mt-2 mr-4" href="https://www.twitter.com/<?php echo $movie['external_ids']['twitter_id']; ?>"><img loading="lazy" src="images/twitter.png" style="max-width:50px"></a>
                        <?php
                            }
                        ?>


                        <?php
                            if(isset($movie['external_ids']['imdb_id'])){
                        ?>
                        <a class="d-inline-block mb-2 mt-2 mr-4" href="https://www.imdb.com/title/<?php echo $movie['external_ids']['imdb_id']; ?>"><img loading="lazy" src="images/imdb.png" style="max-width:50px"></a>
                        <?php
                            }
                        ?>

                        
                        <a class="d-inline-block mb-2 mt-2 mr-4" href="https://www.themoviedb.org/movie/<?php echo $_GET['id']; ?>"><img loading="lazy" src="images/tmdb.png" class="rounded" style="max-width:50px"></a>
                        

                    </div>

                    <br><br>
                    <div class="text-dark">
                        <span class="font-weight-bold"> Status: </span><br><span><?php if(isset($movie['status'])){ echo $movie['status'];}else{ echo "---"; } ?></span><br><br>

                        <span class="font-weight-bold"> Budget: </span><br><span>$<?php if(isset($movie['budget'])){ echo number_format($movie['budget']);}else{ echo "---"; } ?></span> <br><br>
                        <span class="font-weight-bold"> Revenue: </span><br><span>$<?php if(isset($movie['revenue'])){ echo number_format($movie['revenue']);}else{ echo "---"; } ?></span><br><br>

                        <span class="font-weight-bold"> Popularity: </span><span><?php if(isset($movie['popularity'])){ echo number_format($movie['popularity']);}else{ echo "---"; } ?> </span><br><br>

                        <span class="font-weight-bold"> Spoken Language: </span><br>
                        <?php if(isset($movie['spoken_languages'])){ 
                            for($i=0;$i<count($movie['spoken_languages']);$i++){ 
                                echo "<a class='text-dark' href='language.php?language=".$movie['spoken_languages'][$i]['name']."&lang-code=".$movie['spoken_languages'][$i]['iso_639_1']."&type=Movies' >".$movie['spoken_languages'][$i]['english_name']."</a>  ";
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
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>


    <script>
        <?php $review = str_replace('"','',$movie['reviews']['results'][0]['content']); ?>
        // document.getElementById('review').innerHTML = marked("<?php //echo $review; ?>");


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

        

    </script>
    
</body>

</html>