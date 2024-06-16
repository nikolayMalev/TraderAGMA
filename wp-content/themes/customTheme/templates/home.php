<?php /* Template Name: Homepage */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css">
</head> 
<body>
    <header class="header">
        <div class="shell">
            <div class="header__inner">
                <div class="header__nav">
                    <a href="#" class="logo">
                        <span>Tradelogo</span>

                        <p>Business Tagline</p>
                    </a><!-- /.logo -->

                    <nav class="nav">
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>

                            <li>
                                <a href="#">How it Works</a>
                            </li>

                            <li>
                                <a href="#">Programs</a>
                            </li>

                            <li>
                                <a href="#">Symbols</a>
                            </li>

                            <li>
                                <a href="#">Learn</a>
                            </li>

                            <li>
                                <a href="#">Competition</a>
                            </li>

                            <li>
                                <a href="#">Be a Partner</a>
                            </li>

                            <li>
                                <a href="#">About Us</a>
                            </li>
                        </ul>
                    </nav><!-- /.nav -->
                </div><!-- /.header__nav -->

                <div class="header__actions">
                    <a href="" class="header__btn">Dashboard</a>
                </div><!-- /.header__actions -->
            </div><!-- /.header__inner -->
        </div><!-- /.shell --> 
    </header><!-- /.header --> 

    <main class="main">
        <section class="hero">
            <div class="shell shell--large">
                <div class="hero__inner">
                    <div class="hero__content">
                        <p>
                            <strong>FPTraders</strong>
                        </p>

                        <h1>Wanted</h1>

                        <p>Test your shootout skills and become a FPtraider <span>Legend.</span> </p>

                        <p>Advance at your own speed and get up to <br/> <span>$500’000</span> in funding.</p>

                        <div class="hero__actions">
                            <a href="#" class="btn btn--outlined">Read FAQ</a>

                            <a href="#" class="btn">Start Trading</a>
                        </div><!-- /.hero__actions -->
                    </div><!-- /.hero__content -->

                    <div class="hero__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/images/hero-image.png" alt="Hero Image">
                    </div><!-- /.hero__image -->
                </div><!-- /.hero__inner -->
            </div><!-- /.shell-->
        </section><!-- /.hero --> 

        <section class="section-intro">
            <div class="section__content">
                <h4>“The goal of a successful trader is to make the best trades. Money is secondary.”</h4>

                <p>- Alexander Elder</p>
            </div><!-- /.section__content --> 
        </section><!-- /.section-intro --> 
    </main><!-- /.main -->
</body>
</html>