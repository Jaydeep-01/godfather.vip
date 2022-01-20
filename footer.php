        <div class="footer-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h4 class="mb-4">We are digital agency, Bulding Ultimate and robust platform for Movies, TvShow and Series lovers, we are happy to provide free entertainment for everyone.</h4>
                    </div>
                    
                    <div class="col-auto  offset-sm-1 text-right">
                        <form action="#" class="mt-0">
                            <input type="email" placeholder="Email" id="email">
                            <button onclick="subscribe()">Submit</button>
                        </form>                    
                    </div>
                    <div class="col-sm-12">
                        <div class="middle-footer">
                            <div class="row">
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6 md-mb25">
                                    <h5>Social Link</h5>
                                    <ul>
                                        <li><a href="https://www.facebook.com/gf.godfather.vip/">Facebook</a></li>
                                        <li><a href="https://twitter.com/godfather_vip">Twitter</a></li>
                                        <li><a href="https://www.instagram.com/godfather.vip">Instagram</a></li>
                                        <li><a href="https://www.youtube.com/channel/UCYaFvbbem72p4yeoEtXiKrQ">Youtube</a></li>
                                        <li><a href="https://telegram.me/Godfathervip">Telegram</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6 md-mb25">
                                    <h5>ONLINE</h5>
                                    <ul>
                                        <li><a href="movies-category.php">Movies</a></li>
                                        <li><a href="series-category.php">TvShow</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6 md-mb25">
                                    <h5>Movies</h5>
                                    <ul>
                                
                                        <li><a href="language.php?language=English&lang-code=en&type=Movies">English Movies</a></li>
                                        <li><a href="language.php?language=Spanish&lang-code=es&type=Movies">Spanish Movies</a></li>
                                        <li><a href="language.php?language=Hindi&lang-code=hi&type=Movies">Hindi Movies</a></li>
                                        <li><a href="language.php?language=French&lang-code=af&type=Movies">French Movies</a></li>
                                        <li><a href="language.php?language=Chinese&lang-code=zh&type=Movies">Chinese Movies</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                                    <h5>TvShow</h5>
                                    <ul>
                                        <li><a href="language.php?language=English&lang-code=en&type=Series">English Series</a></li>
                                        <li><a href="language.php?language=Spanish&lang-code=es&type=Series">Spanish Series</a></li>
                                        <li><a href="language.php?language=Hindi&lang-code=hi&type=Series">Hindi Series</a></li>
                                        <li><a href="language.php?language=French&lang-code=af&type=Series">French Series</a></li>
                                        <li><a href="language.php?language=Chinese&lang-code=zh&type=Series">Chinese Series</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                                    <h5>About</h5>
                                    <ul>
                                        <li><a href="landing.php#Faq">FAQ</a></li>
                                        <!-- <li><a href="#">Privacy Policy</a></li> -->
                                        <li><a href="feedback.php">Feedback</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                                    <h5 class="mb-3">Office</h5>
                                    <p style="width: 100%;">Virtual office <br></p>
                                    <!-- <p style="width: 100%;">41 madison ave, floor 24 new work, NY 10010 <br>1-877-932-7111</p> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 lower-footer"></div>
                    <div class="col-sm-6">
                        <p class="copyright-text">© 2021 copyright. All rights reserved.</p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p class="float-right copyright-text">In case of any concern, <a href="contact-us.php">contact us</a></p>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            function subscribe() {
                var email = document.getElementById("email").value ;
                if (validateEmail(email)) {
                    let url = 'http://www.movies.godfather.vip/subscribe.php?email='+email;
                    xmlhttp.open("GET",url,true);
                } else {
                    alert("Wrong email! Please provide valid Email Address.");
                }
            }

            function validateEmail(email) {
                const e = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return e.test(email);
            }

        </script>