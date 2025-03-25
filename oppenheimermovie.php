<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppenheimer</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="oppenheimermovie.css">
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo"><a href="index.html">MoviesRealm</a></h1>

                <!-- <img src="logo.png" class="logo"> -->

            </div>
            <div class="menu-container">
                <div class="menu-items">
                    <a class="menu-items-list" href="index.php" target="_self">Home</a>
                    <a class="menu-items-list" href="#" target="_blank">TV shows</a>
                    <a class="menu-items-list" href="movies.php" target="_blank">Movies</a>
                    <a class="menu-items-list" href="#" target="_blank">My list</p>
                        <a class="menu-items-list" href="#" target="_blank">New&Popular</a>
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
                        <img class="profile-picture" src="images/bmw.jpg">
                        <h4>Likkith Reddy</h4>

                    </div>
                    <hr>
                    <a class="profile-menu-items" href="#" target="_blank">
                        <i class="fa-solid fa-user"></i>
                        <p>Edit & Profile</p>
                        <span>></span>
                    </a>
                    <a class="profile-menu-items" href="#" target="_blank">
                        <i class="fa-solid fa-gear"></i>
                        <p>Settings & Privacy</p>
                        <span>></span>
                    </a>
                    <a class="profile-menu-items" href="#" target="_blank">
                        <i class="fa-solid fa-question"></i>
                        <p>Help & Support</p>
                        <span>></span>
                    </a>
                    <a class="profile-menu-items" href="#" target="_blank">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <p>Logout</p>
                        <span>></span>
                    </a>
                </div>
            </div>


        </div>

    </div>

    <div class="container">
        <div class="playmovie">
            <video controls autoplay>
                <source src="Oppenheimermovie1.mp4" type="video/mp4">
            </video>

            <h1>About Oppenheimer</h1>
            <p>2023 3h 2m HD </p>
            <p><b> Description:</b> A dramatization of the life story of J. Robert Oppenheimer, the physicist who had a
                large hand in the development of the atomic bomb, thus helping end World War 2. We see his life from
                university days all the way to post-WW2, where his fame saw him embroiled in political machinations</p>
            <p><b>Director:</b> Christopher Nolan</p>
            <p><b>Cast:</b> Cillian Murphy, Emily Blunt, Robert Downey Jr, Alden Ehrenreich, Scott Grimes, Jason Clarke
            </p>
            <p><b>Writer: </b>Christopher Nolan </p>
            <p><b>Music by: </b>Ludwig Göransson</p>
            <p><b>Genres: </b>Thriller, Historical Drama, Crime Fiction</p>
            <p><b>Maturity Rating:</b> U/A 16+</p>

        </div>
        <div class="relatedmovies">
            <h2>Related Movies:</h2>
            <div class="movies-list">
                <img class="movies-list-img" src="images/interstellar.webp">
                <a href="oppenheimermovie.html"><button class="movies-list-button">PLAY</button></a>

            </div>
            <div class="movies-list">
                <img class="movies-list-img" src="images/spidermanhomecoming.webp">
                <a href="oppenheimermovie.html"><button class="movies-list-button">PLAY</button></a>

            </div>
            <div class="movies-list">
                <img class="movies-list-img" src="images/venom.webp">
                <a href="oppenheimermovie.html"><button class="movies-list-button">PLAY</button></a>

            </div>
            <div class="movies-list">
                <img class="movies-list-img" src="images/chappie.webp">
                <a href="oppenheimermovie.html"><button class="movies-list-button">PLAY</button></a>

            </div>
            <div class="movies-list">
                <img class="movies-list-img" src="images/thepursuitofhappyness.webp">
                <a href="oppenheimermovie.html"><button class="movies-list-button">PLAY</button></a>

            </div>
            <div class="movies-list">
                <img class="movies-list-img" src="images/constatine.webp">
                <a href="oppenheimermovie.html"><button class="movies-list-button">PLAY</button></a>

            </div>


        </div>

    </div>

    </div>
</body>

</html>