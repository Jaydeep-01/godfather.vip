        <div class="header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 navbar p-0">
                        <a href="index.php" class="logo"><img src="images/logo.png" alt="logo" class="light"><img src="images/logo-white.png" alt="logo" class="dark"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav nav-menu float-none text-center">
                            
                                <li class="nav-item"><a class="nav-link font-weight-bold text-dark" href="index.php">Home</a></li>
                                
                                <li class="nav-item"><a class="nav-link font-weight-bold text-dark" href="movies-category.php">Movie</a></li>

                                <li class="nav-item"><a class="nav-link font-weight-bold text-dark" href="series-category.php">Tv Shows</a></li>

                                <li class="nav-item"><a class="nav-link font-weight-bold text-dark" href="download.php?src=web_app_header">Download App</a></li>

                                <li class="nav-item"><a class="nav-link font-weight-bold text-dark" href="landing.php">More</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <a href="download.php?src=web_app_header_login"><div class="user-avater">
                            <img src="images/user-8.png" alt="user">
                        </div></a>
                        <div class="search-div">
                            <input type="text" placeholder="Seacrh" id="search-box">
                        </div>

                        <!-- <div class="toggle-div mr-2 ml-4 mt-1">
                            <div class="d-inline">
                                <img src="images/lightmode.png" class="d-inline-block" style="max-height:20px;max-width:20px;margin-top:-3px">
                                <label class="toggle toggle-init mt-1"><input type="checkbox"><span class="toggle-icon"></span></label>
                                <img src="images/darkmode.png" class="d-inline-block" style="max-height:20px;max-width:20px;margin-top:-3px">
                            </div>
                        </div> -->
                        
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.min.css" rel="Stylesheet"></link>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" ></script>
        <style>
            .ui-autocomplete { height:200px; width:100px; margin-right:1000px; border-radius:5px; overflow-y: scroll; overflow-x: hidden; }
            .ui-autocomplete::-webkit-scrollbar-track
            {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                background-color: #F5F5F5;
                border-radius: 10px;
            }

            .ui-autocomplete::-webkit-scrollbar
            {
                width: 10px;
                background-color: #F5F5F5;
            }

            .ui-autocomplete::-webkit-scrollbar-thumb
            {
                border-radius: 10px;
                background-image: -webkit-gradient(linear,left bottom,left top,color-stop(0.44, rgb(122,153,217)),color-stop(0.72, rgb(73,125,189)),color-stop(0.86, rgb(28,58,148)));
            }
            .ui-menu-item-wrapper{
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 1;
            }
        </style>

        <script>
        
            var availableTags = [];

            $("#search-box").keyup(function(e){
                var url = 'https://api.themoviedb.org/3/search/movie?api_key=b7921279f7ccce7fec7a0950f5da561a&query='+$("#search-box").val();
            
                $.ajax({
                    url: url,
                    dataType: 'jsonp',
                    success: function (data) {
                        for(var i=0;i<data.results.length;i++){
                            if(availableTags.indexOf(data.results[i].title) === -1){
                                availableTags.push(data.results[i].title);
                            }       
                        }
                    }
                });
                if(e.key ==  'Enter') {
                    location.href = "search.php?s="+$("#search-box").val();
                }
            });

            $("#search-box").autocomplete({
                source: availableTags
            });
        
        </script>