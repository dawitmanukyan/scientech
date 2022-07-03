<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./img/logo/TCFLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="./style/style.css">
    <title>TheCodeFather</title>
</head>
<body>
    <?php 
        session_start(); 
    ?>
    <main class="body">

        <!-- registration -->
        <article class="registration">
            <div class="registration__img">
                <img src="./img/vector/undraw_sign_in_re_o58h.svg" alt="">
            </div>
            <div class="registration__content">
                <h3>Գրանցում</h3>
                <hr>
                <form action="registration.php" method="post">
                    <label for="registration-name">Անուն</label>
                    <input type="text" name="user_reg_name" id="registration-name" required>
                    <label for="registration-username">Օգտանուն</label>
                    <input type="text" name="user_reg_nick" id="registration-username" required>
                    <label for="registration-email">Էլ․ Հասցե</label>
                    <input type="email" name="user_reg_email" id="registration-email" required>
                    <div class="registration__content__password">
                        <input type="checkbox" name="" class="password-see">
                        <label for="password">Գախտնաբառ</label>
                        <input type="password" name="user_reg_password" class="password" required>
                    </div>
                    <label for="registration-password">Կրկնել Գախտնաբառը</label>
                    <input type="password" name="user_reg_password_confirm" id="registration-password" required>
                    <?php 
                        if(isset($_SESSION['error']['wrong_password'])){
                            echo '<b>'.$_SESSION['error']['wrong_password'].'</b>';
                        }
                        if(isset($_SESSION['error']['short_password'])){
                            echo '<b>'.$_SESSION['error']['short_password'].'</b>';
                        }
                        if(isset($_SESSION['completed'])){
                            echo '<b style="color: green;">'.$_SESSION['completed'].'</b>';
                        }
                    ?>
                    <input type="submit" value="Գրանցում" class="input_submit"></input>
                    <b id="registration-close">Չեղարկել Գրանցումը</b>
                </form>
                <p>Էջ ունենալու դեպքում․ <span id="registration-to-login">Մուտք</span></p>
            </div>
        </article>

        <!-- login -->
        <article class="login">
            <div class="login__img">
                <img src="./img/vector/undraw_login_re_4vu2.svg" alt="">
            </div>
            <div class="login__content">
                <h3>Մուտք</h3>
                <hr>
                <form action="">
                    <label for="login-email">Էլ․ Հասցե</label>
                    <input type="email" name="" id="login-email" required>
                    <div class="login__content__password">
                        <input type="checkbox" name="" class="password-see">
                        <label for="login-password">Գախտնաբառ</label>
                        <input type="password" name="" class="password" required>
                    </div>
                    <input type="submit" value="Մուտք" class="input_submit"></input>
                    <b id="login-close">Չեղարկել Մուտքը</b>
                </form>
                <p>Էջ չունենալու դեպքում․ <span id="login-to-registration">Գրանցում</span></p>
            </div>
        </article>

        <!-- menu start -->
        <nav class="menu">
            <div class="container">
                <div class="menu__logo">
                    <h3>TheCodeFather</h3>
                </div>
                <ul class="menu__list">
                    <li><a href="#">Գլխավոր</a><span></span></li>
                    <li><a href="#">Դասընթացներ</a><span></span></li>
                    <li><a href="#">Ֆորում</a><span></span></li>

                    <button id="second-menu-opener"><span></span><span></span><span></span></button>

                    <i></i>

                    <li class="menu--login" id="menu-login">Մուտք</li>
                    <li class="menu--registration" id="menu-registration">Գրանցում<span></span></li>

                    <div class="menu__list__user">
                        <img src="./img/icon/none-user.svg" alt="">
                        <p>Օգտանուն</p>
                    </div>
                </ul>
            </div>
        </nav>

        <nav class="second-menu" id="second-menu">
            <div class="second-menu--close-btn">
                <span></span>
                <span></span>
            </div>
            <ul>
                <li><a href="#">Մեր Մասին</a></li>
                <li><a href="#">Կոնտակտ</a></li>
                <li><a href="#">Ծառայություներ</a></li>
            </ul>
        </nav>
        <!-- menu end -->

        <article class="live-chat">
            <div class="live-chat__openner__main">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <div class="live-chat__openner">
                    <img src="./img/icon/live-chat.svg" alt="">
                </div>
            </div>
            <div class="live-chat__contnet">
                <div class="live-chat__contnet__header">
                    <h3>Live Chat</h3>
                    <p>Ինչո՞վ կարող ենք օգնել</p>
                </div>
                <div class="live-chat__contnet__chat">
                    <p class="massege admin">Barev</p>
                    <p class="massege user">Barev</p>
                    <p class="massege admin">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor tempore assumenda, voluptatum, harum mod</p>

                </div>
                <div class="live-chat__contnet__send">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <button class="live-chat--sender"><img src="./img/icon/send.svg" alt=""></button>
                </div>
            </div>
        </article>

        <!-- header start -->
        <header class="header">
            <div class="container">
                <div class="header__content">
                    <h1><span>The</span>CodeFather</h1>
                    <b>ՏՏ Ընկերություն</b>
                    <p>Մենք կօգնենք սովորել ծրագրավորում և <br> կյանքի կոչել ձեր գաղափարները</p>

                    <div class="header__content__bottom-arrow">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <circle class="stroke-1" cx="30" cy="28" r="27" stroke-linecap="round"></circle>
                        </svg>
                        <img src="./img/icon/down-arrow.png" alt="down">
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <!-- about -->
        <section class="about">
            <div class="container">
                <div class="about__item">
                    <img src="./img/vector/undraw_online_learning_re_qw08.svg" alt="">
                    <div class="about__item__text">
                        <h2>Օնլայն Դասընթացներ</h2>
                        <hr>
                        <p>Կազմակերպվում են դասընթացներ և ուսանողները ավրտելուց հետո ացնում են պրկտիկա այնուհետև աշխատանքի</p>
                    </div>
                </div>

                <div class="about__item">
                    <div class="about__item__text">
                        <h2>Կայքերի Պատրաստում</h2>
                        <hr>
                        <p>Պատրաստվում են որակիալ կայքեր հենց ձեր ցանկությամբ</p>
                    </div>
                    <img src="./img/vector/undraw_building_websites_i78t.svg" alt="">
                </div>

                <div class="about__item">
                    <img src="./img/vector/undraw_online_discussion_re_nn7e.svg" alt="">
                    <div class="about__item__text">
                        <h2>Օնլայն Քննարկումներ</h2>
                        <hr>
                        <p>Կկարողանք մեր կայքի միջոցով քննարկումների մանակցել և նույնիսկ քննարկումներ կզմակերպել </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="codeshots">
            <div class="container">
                <img class="codeshots__frame" src="./img/vector/iphone vector.png" alt="">
                <div class="codeshots__logo-text-btn">
                    <div class="codeshots__logo-text">
                        <div>
                            <img src="./img/logo/code-short.png" alt="">
                        </div>
                        <div>
                            <h3>CodeShots</h3>
                            <p>Դիտիր ՏՏ ոլորտին վերաբերիալ հետաքրքիր տեսանյութեր</p>
                        </div>
                    </div>
                    <button>Դիտել</button>
                </div>
            </div>
        </section>

        <section class="web-book">
            <div class="container">
                <dec></dec>
                <dec></dec>
                <img src="./img/logo/web-book.png" alt="">
                <div class="web-book__text-btn">
                    <h3>Web Books</h3>
                    <p>Վեբ գրքեր որոնց միջոցով կարող եք սովորել ծրագրվորում</p>
                    <button>Կարդալ</button>
                </div>
            </div>
        </section>

        <section class="form">
            <div class="container">
                <img src="./img/vector/undraw_forms_re_pkrt.svg" alt="">
                <form action="">
                    <h3>Կապի Հաստատում</h3>
                    <label for="name">Անուն</label>
                    <input type="text" name="" id="name" required>
                    <label for="email">Էլ․ Հասցե</label>
                    <input type="email" name="" id="email" required>
                    <label for="text">Տեքստ</label>
                    <textarea name="" id="text" cols="30" rows="10" required></textarea>
                    <button>Ուղարկել</button>
                </form>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <img src="./img/logo/TCFLogo.png" alt="">

                <div class="footer__lists">
                    <ul>
                        <li><a href="#">Գլխավոր</a></li>
                        <li><a href="#">Մեր Մասին</a></li>
                        <li><a href="#">Կոնտակտ</a></li>
                        <li><a id="footer-login" >Մուտք</a></li>
                        <li><a id="footer-signup" >Գրանցում</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Դասընթացներ</a></li>
                        <li><a href="#">Ծառայություներ</a></li>
                        <li><a href="#">Ֆորում</a></li>
                        <li><a href="#">CodeShots</a></li>
                        <li><a href="#">Web Books</a></li>
                    </ul>

                    <img src="./img/logo/code-short.png" alt="">
                    <img src="./img/logo/web-book.png" alt="">
                </div>
            </div>
            <hr>
            <span>TheCodeFather - 2022</span>
        </footer>
    </main>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/main.js"></script>
    <?php session_unset(); ?>
</body>
</html>