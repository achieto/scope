<?php
session_start();
// print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scope</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/media.css" />
    <link rel="icon" href="assets/img/icon.ico" />
</head>

<body>
    <nav class="navbar">
        <div class="nav__wrapper">
            <img src="assets/img/scope-logo.PNG" alt="" class="brand__img">
            <input type="text" class="search__box" placeholder="Search">
            <div class="nav__items">
                <img src="assets/img/home.PNG" alt="" class="icon">
                <img src="assets/img/messenger.PNG" alt="" class="icon">
                <img src="assets/img/add.PNG" alt="" class="icon">
                <img src="assets/img/explore.PNG" alt="" class="icon">
                <img src="assets/img/like.PNG" alt="" class="icon-like">
                <div class="icon">
                    <img src="assets/img/avatar__scope.jpg" alt="" class="user__profile">
                </div>
            </div>
        </div>
    </nav>

    <section class="home__page">
        <div class="wrapper">
            <div class="left__col">
                <div class="status__wrapper">
                    <div class="status__card">
                        <div class="profile__pic"><img src="assets/img/cover 1.jpg" alt=""></div>
                        <p class="username">irfanard42</p>
                    </div>
                    <div class="status__card">
                        <div class="profile__pic"><img src="assets/img/cover 2.jpg" alt=""></div>
                        <p class="username">ans.ndlals</p>
                    </div>
                    <div class="status__card">
                        <div class="profile__pic"><img src="assets/img/cover 3.png" alt=""></div>
                        <p class="username">ryecries</p>
                    </div>
                    <div class="status__card">
                        <div class="profile__pic"><img src="assets/img/cover 4.png" alt=""></div>
                        <p class="username">achieto</p>
                    </div>
                    <div class="status__card">
                        <div class="profile__pic"><img src="assets/img/cover 5.png" alt=""></div>
                        <p class="username">rokuso</p>
                    </div>
                    <div class="status__card">
                        <div class="profile__pic"><img src="assets/img/cover 6.jpeg" alt=""></div>
                        <p class="username">achmadromadonii</p>
                    </div>
                    <div class="status__card">
                        <div class="profile__pic"><img src="assets/img/cover 7.png" alt=""></div>
                        <p class="username">arburg</p>
                    </div>
                    <div class="status__card">
                        <div class="profile__pic"><img src="assets/img/cover 8.png" alt=""></div>
                        <p class="username">uso.kauso</p>
                    </div>
                    <div class="status__card">
                        <div class="profile__pic"><img src="assets/img/cover 9.png" alt=""></div>
                        <p class="username">biqflex_</p>
                    </div>
                    <div class="status__card">
                        <div class="profile__pic"><img src="assets/img/cover 10.png" alt=""></div>
                        <p class="username">rap_star</p>
                    </div>
                    <div class="status__card">
                        <div class="profile__pic"><img src="assets/img/cover 11.jpeg" alt=""></div>
                        <p class="username">dotaningtias</p>
                    </div>
                    <div class="status__card">
                        <div class="profile__pic"><img src="assets/img/cover 12.png" alt=""></div>
                        <p class="username">joan.porter19</p>
                    </div>
                </div>

                <div class="post__scope">
                    <div class="information">
                        <div class="user__scope">
                            <div class="profile__pic"><img src="assets/img/cover 1.jpg" alt=""></div>
                            <p class="username">irfanard42</p>
                        </div>
                        <img src="assets/img/option.PNG" class="options" alt="">
                    </div>
                    <img src="assets/img/cover 1.jpg" alt="" class="post__image">
                    <div class="reaction__wrapper">
                        <img src="assets/img/like.PNG" alt="" class="like icon">
                        <img src="assets/img/comment.PNG" alt="" class="icon">
                        <img src="assets/img/send.PNG" alt="" class="icon">
                        <img src="assets/img/save.PNG" alt="" class="save icon">
                    </div>
                    <div class="post__content">
                        <p class="description"><span>irfanard42 </span> My favorite hair</p>
                    </div>
                    <div class="comment__wrapper">
                        <img src="assets/img/smile.PNG" alt="" class="icon">
                        <input type="text" class="comment__box" placeholder="Add a comment">
                        <button class="comment__btn">send</button>
                    </div>
                </div>
            </div>

            <div class="right__col">

            </div>
        </div>
    </section>
</body>

</html>