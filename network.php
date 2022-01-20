<?php
    if(!isset($_GET['studio']) || !isset($_GET['id']) || !isset($_GET['type'])){
        header('Location: index.php');
    }
    
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo str_replace(["-",'and'],[" ","&"],$_GET['studio'])." ".$_GET['type'] ; ?> | Latest <?php echo str_replace(["-",'and'],[" ","&"],$_GET['studio'])." ".$_GET['type'] ; ?>  | Godfather.vip</title>

    <meta property="og:image" content="images/gf.jpg">
    <meta name="description" content="Explore Movies and TvShow by your perefer studios. Godfather.vip. We’re an India based entertainment agency, providing all the Entertainment content for free, it includs Movies, Web-Seires, TV-Season, TvShows. We are having the collection of the all the Movies, Web-Seires, TV-Season, TvShows of all the studios around the world. We are povidind contents to the all the county. We are amaing to become the best entertainment agency in the world.">
    <meta property="og:site_name" content="www.godfather.vip">
    <meta property="og:type" content="category page">
    
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="canonical" href="https://www.godfather.vip<?php echo $_SERVER['REQUEST_URI']; ?>">

    <meta name="keyword" content="<?php echo str_replace(["-",'and'],[" ","&"],$_GET['studio'])." ".$_GET['type'] ; ?>, Latest <?php echo str_replace(["-",'and'],[" ","&"],$_GET['studio'])." ".$_GET['type'] ; ?>">

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
            if($_GET['type'] == "Movies")
                $type = "movie";
            else
                $type = "tv";

            $img_path = "https://image.tmdb.org/t/p/";
            
            if(isset($_GET['network'])){
                $api = "https://api.themoviedb.org/3/discover/tv?api_key=b7921279f7ccce7fec7a0950f5da561a&sort_by=primary_release_date.desc&with_networks=".$_GET['id'];

                $network = "https://api.themoviedb.org/3/network/".$_GET['id']."?api_key=b7921279f7ccce7fec7a0950f5da561a";
            }else{
                $api = "https://api.themoviedb.org/3/discover/".$type."?api_key=b7921279f7ccce7fec7a0950f5da561a&with_companies=".$_GET['id'];
             
                $network = "https://api.themoviedb.org/3/company/".$_GET['id']."?api_key=b7921279f7ccce7fec7a0950f5da561a";
            }
            
            $network = json_decode(file_get_contents($network),true);

            $movie = json_decode(file_get_contents($api),true);

            if( isset($_GET['page']) && $_GET['page'] > $movie['total_pages']/5)
                echo "<script>
                    window.location.href = 'index.php';
                </script>";
        ?>

        <div class="page-nav p-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="search-wrapper">
                            <h2 class="mb-3"><?php echo $movie['total_results']; ?>+ <?php echo $_GET['type']; ?> found for "<?php echo str_replace(["-",'and'],[" ","&"],$_GET['studio']); ?>".</h2><br>

                            <?php 
                                if(isset($network['logo_path'])){
                            ?>
                            <img loading="lazy" src="<?php echo $img_path."w154".$network['logo_path']; ?>" style="max-width:154px;max-height:150px">
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <?php
            if(isset($_GET['page'])){
                if($_GET['page'] != 1 )
                    $page = ($_GET['page']*5)-4;
                else
                    $page = 1; 
            }else{
                $page=1;
            }

            for($j=$page;$j<$movie['total_pages'];$j++){
                
                if($j >= $page+5)
                    break;

                $api = $api.'&page='.$j;
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

                                    if($_GET['type'] == "Movies")
                                        echo 'movie.php?id='.$movie['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;
                                    else
                                        echo 'series.php?id='.$movie['results'][$i]['id'].'&title='.preg_replace(["/-+/", "/-$/im"],["-",""],preg_replace("/[^a-zA-Z0-9]/","-",strtolower(stripslashes($title)))) ;

                                    
                                    
                                ?>">
                                    <div class="slide-image"><img loading="lazy" src="<?php echo $img_path.'w154'.$movie['results'][$i]['poster_path']; ?>" alt="<?php echo $title; ?>" onerror="this.onerror=null; this.src='./images/alter_poster.jpg'" ></div>
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


        <?php 
            if($movie['total_pages'] > 5){
        ?>
        <br><br>
        <nav aria-label="Page navigation example">
            <?php
                if(isset($_GET['page']))
                    $page_nav=$_GET['page'];
                else 
                    $page_nav = 1;

                $link = "network.php?studio=".$_GET['studio']."&id=".$_GET['id']."&type=".$_GET['type']."&page="; 
            ?>
            <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="<?php if($page_nav == 1){ echo "#"; }elseif($j >= $movie['total_pages']){ echo $link.($page_nav-2); }{ echo $link.($page_nav-1); } ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>

                <li class="page-item <?php if($page_nav == 1){echo 'active';} ?>">
                    <a class="page-link" href="<?php if($page_nav == 1){ echo "#"; }elseif($j >= $movie['total_pages']){ echo $link.($page_nav-2);}else{ echo $link.($page_nav-1);} ?>">
                        <?php if($page_nav == 1){ echo "1"; }elseif($j >= $movie['total_pages']){ echo $page_nav-2;}else{ echo $page_nav-1;} ?>
                    </a>
                </li>
                
                <li class="page-item <?php if($page_nav != 1 && $j != $movie['total_pages'] && $j < $movie['total_pages']){ echo 'active'; } ?>">
                    <a class="page-link" href="<?php if($page_nav == 1 ){ echo $link."2"; }elseif($j >= $movie['total_pages']){ echo $link.($page_nav-1); }else{ echo "#"; } ?> "> 
                        <?php if($page_nav == 1 ){ echo "2"; }elseif($j >= $movie['total_pages']){ echo $page_nav-1;}else{ echo $page_nav; } ?> 
                    </a>
                </li>
                
                <li class="page-item <?php if($j >= $movie['total_pages'] && $page_nav != 1 ){ echo 'active'; } ?>">
                    <a class="page-link" href="<?php if($page_nav == 1 ){ echo $link."3"; }elseif($j >= $movie['total_pages']){ echo "#"; }else{ echo $link.($page_nav+1); } ?>"> 
                        <?php if($page_nav == 1 ){ echo "3"; }elseif($j >= $movie['total_pages']){ echo $page_nav; }else{ echo $page_nav+1; } ?> 
                    </a>
                    
                </li>
                
                <li class="page-item">
                    <a class="page-link" href="<?php if($j >= $movie['total_pages']){ echo "#"; }else{ echo $link.($page_nav+1); }?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
        <br><br><br>
        <?php
            }
        ?>


    </div>

    


    <script src="js/plugin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

</html>