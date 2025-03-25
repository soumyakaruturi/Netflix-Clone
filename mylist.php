<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoviesRealm</title>
    <link rel="icon" href="images/webicon-removebg-preview.png">

    <link rel="stylesheet" href="mylist.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sen:wght@400..800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100..900&family=Jura:wght@300..700&family=Kode+Mono:wght@400..700&family=Tilt+Prism&family=Tourney:ital,wght@0,100..900;1,100..900&family=Whisper&family=Workbench&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo"><a href="index.php">MoviesRealm</a></h1>
                <!-- <img src="logo.png" class="logo"> -->

            </div>
            <div class="menu-container">
                <div class="menu-items">
                    <a class="menu-items-list" href="index.php" target="_self">Home</a>
                    <a class="menu-items-list" href="#" target="_self">TV shows</a>
                    <a class="menu-items-list" href="movies.php" target="_self">Movies</a>
                    <a class="menu-items-list" href="mylist.php" target="_self">My list</p>
                        <a class="menu-items-list" href="#" target="_self">New&Popular</a>
                </div>
            </div>


            <div class="search-bar-container">
                <input class="search-bar" id="search-bar" placeholder="Titles,peoples,geners">
                <label for="search-bar"><i class="fa-solid fa-magnifying-glass profile-icon"></i></label>
                <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
            </div>


            <div class="profile-container" onclick="openprofile()">
                <img class="profile-picture" src="bmw.jpg">
                <div class="profile-text-container">
                    <p class="profile-text">Profile</p>
                    <i class="fa-solid fa-caret-down "></i>
                </div>

            </div>
            <div class="profile-menu-bar" id="ProfileMenu">
                <div class="profile-menu">
                    <div class="user-info">
                        <img class="profile-picture" src="bmw.jpg">
                        <h4>Likkith Reddy</h4>

                    </div>
                    <hr>
                    <a class="profile-menu-items" href="#" target="_self">
                        <i class="fa-solid fa-user"></i>
                        <p>Edit & Profile</p>
                        <span>></span>
                    </a>
                    <a class="profile-menu-items" href="#" target="_self">
                        <i class="fa-solid fa-gear"></i>
                        <p>Settings & Privacy</p>
                        <span>></span>
                    </a>
                    <a class="profile-menu-items" href="#" target="_self">
                        <i class="fa-solid fa-question"></i>
                        <p>Help & Support</p>
                        <span>></span>
                    </a>
                    <a class="profile-menu-items" href="#" target="_self">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <p>Logout</p>
                        <span>></span>
                    </a>
                </div>
            </div>


        </div>

    </div>


    <!-- <div class="sidebar"></div> -->

    <div class="container">
        <div class="content-container">
           
            <div class="movies-list-container">
                <h1 class="movies-list-title">My List</h1>

                <div class="movies-list-wrapper">
                    <div class="movies-list">
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/oppenheimer.jpg">
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/Oppenheimer-Trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/interstellar.webp">
                            <!-- <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a> -->
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/Interstellar - Trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/spidermanhomecoming.webp">
                            <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a>
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/venom.webp">
                            <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a>
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/chappie.webp">
                            <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a>
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/constatine.webp">
                            <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a>
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/spidermanfarfromhome.webp">
                            <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a>
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/thepursuitofhappyness.webp">
                            <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a>
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>

                    </div>

                    <i class="fa-solid fa-chevron-right arrow"></i>
                </div>

            </div>
            <div class="movies-list-container">
                <!-- <h2 class="movies-list-title">Tollywood Movies</h2> -->

                <div class="movies-list-wrapper">
                    <div class="movies-list">
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/salar.webp">
                            <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a>
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/eenagaranikiemaindhi.webp">
                            <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a>
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/gunturkaram.webp">
                            <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a>
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/dasara.webp">
                            <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a>
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/bujjigadu.webp">
                            <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a>
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/mad.webp">
                            <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a>
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/alavaikuntapuramuloo.webp">
                            <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a>
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>
                        <div class="movies-list-items">
                            <img class="movies-list-items-img" src="images/lovetoday.webp">
                            <a href="oppenheimermovie.php"><button class="movies-list-items-button">PLAY</button></a>
                            <div class="playtrailer">
                                <video controls autoplay loop>
                                    <source src="images/trailer.mp4" type="video/mp4">
                                </video>
                                <a href="oppenheimermovie.php"><button class="movie-play-button">PLAY</button></a>
                            </div>

                        </div>

                    </div>

                    <i class="fa-solid fa-chevron-right arrow"></i>
                </div>

            </div>
            
            
        </div>

    </div>




    <script src="script.js"></script>




</body>

</html>