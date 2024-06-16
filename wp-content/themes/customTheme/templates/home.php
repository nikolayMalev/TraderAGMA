<?php /* Template Name: Homepage */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <script type='module' src='<?php echo get_template_directory_uri(); ?>/dist/js/main.js'></script>
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

        <section class="section-cards">
            <div class="shell">
                <div class="section__head">
                    <h2>The Process of Becoming a <br/> <span>TopTier Funded Trader</span></h2>

                    <p>Our 2-Phase evaluation process identifies skilled traders to join our proprietary firm. Manage virtual funds remotely and grow your simulated account with our scaling plan.</p>
                </div><!-- /.section__head -->

                <div class="section__body">
                    <h3>How it Works</h3>

                    <div class="section__cards">
                        <div class="card">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/images/horse-riding.png" class='card__image'>

                            <h5>Phase 1</h5>
                            
                            <div class="card__entry">
                                <p>Prove your skills and discipline by observing the Simulated Trading Objectives.</p>

                                <ul>
                                    <li>Grow your simulated account to the Target Amount.</li>
                                    <li>Achieve your Target within the simulated Drawdown limit.</li>
                                    <li>Stick to the Simulated Trading Rules.</li>
                                </ul>
                            </div><!-- /.card__entry -->
                        </div><!--/.card -->

                        <div class="card">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/images/trophy.png" class='card__image'>

                            <h5>Phase 2</h5>

                            <p></p>

                            <div class="card__entry">
                                <p>Prove your skills and discipline by observing the Simulated Trading Objectives.</p>

                                <ul>
                                    <li>Grow your simulated account to the Target Amount.</li>
                                    <li>Achieve your Target within the simulated Drawdown limit.</li>
                                    <li>Stick to the Simulated Trading Rules.</li>
                                </ul>
                            </div><!-- /.card__entry -->
                        </div><!--/.card -->
                    </div><!-- /.section__cards -->

                    <div class="section__actions">
                        <h3>FPTrader</h3>

                        <p>You are now a 
                            <span>FPTrader</span>
                            ! Trade responsibly and consistently and you can earn up to XX% of the profit you make. If you are profitable month after months, we offer to increase your account balance according to our scaling plan.
                        </p>
                    </div><!-- /.section__actions -->
                </div><!-- /.section__body -->
            </div><!-- /.shell-->
        </section><!-- /.section-cards -->

        <section class="section-programs">
            <div class="shell">
                <div class="section__head">
                    <h2>Evaluation Programs</h2>
                </div><!-- /.section__head -->

                <div class="tabs-programs js-tabs-programs">
                    <div class="tabs__head">
                        <div class="tabs__nav">
                            <ul>

                            </ul>
                        </div><!-- /.tabs__nav -->
                    </div><!-- /.tabs__head --> 
                </div><!-- /.tabs-programs -->
            </div><!-- /.shell-->
        </section><!-- /.section-programs -->

        <section class="section-content-accordion">
            <div class="shell">
                <div class="section__inner">
                    <div class="section__content">
                        <h2>Evaluation Criteria for <br/> 
                            <span>Sim Funded Accounts</span>
                        </h2>

                        <p>Follow these simple steps to start trading with a
                        simulated funded account.</p>
                        
                        <div class="section__actions">
                            <a href="#" class='btn btn--outlined'>Read FAQ</a>

                            <a href="#" class='btn'>Start the challenge</a>
                        </div><!-- /.section__actions -->
                    </div><!-- /.section__content -->

                    <div class="section__accordion">
                        <div class="accordion-criteria js-accordion-criteria">
                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <h5>10% Overall Virtual Loss</h5>

                                    <a class="accordion__btn"></a>
                                </div><!-- /.accordion__head -->

                                <div class="accordion__body">
                                    <p>Your sim account equity may not at any point drop lower than 10% of your sim accounts initial value depending on your challenge type. <br/>For example, if you start with $100 000 and your max overall has is 10% ($10 000) then your sim account's equity should not at any point drop lower than $90 000.</p>

                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion-section -->
                               
                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <h5>10% tier 1 virtual profit target</h5>

                                    <a class="accordion__btn"></a>
                                </div><!-- /.accordion__head -->

                                <div class="accordion__body">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius sunt quaerat cumque, reiciendis a ratione, molestias architecto delectus similique obcaecati iure recusandae alias aliquid iusto, minus vero esse ad illum.</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion-section -->
                            
                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <h5>5% tier 2 virtual profit targets</h5>

                                    <a class="accordion__btn"></a>
                                </div><!-- /.accordion__head -->

                                <div class="accordion__body">
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, in consequatur dignissimos ipsum vitae inventore aliquid est repudiandae corporis ullam ab earum autem? Odit aspernatur tempore non? Libero, odit distinctio.
                                    </p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion-section -->

                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <h5>minimum sim trading days</h5>

                                    <a class="accordion__btn"></a>
                                </div><!-- /.accordion__head -->

                                <div class="accordion__body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem consequuntur voluptas deserunt autem vero officiis tenetur eos, dolores nemo earum aspernatur beatae! At numquam atque quae dicta dignissimos tempore.</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion-section -->

                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <h5>minimum days of sim trading</h5>

                                    <a class="accordion__btn"></a>
                                </div><!-- /.accordion__head -->

                                <div class="accordion__body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo labore nulla nemo architecto, ducimus ea et ullam, deserunt repudiandae itaque rem. Quaerat ab, explicabo error repudiandae numquam deserunt inventore! Amet.</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion-section -->
                        </div><!-- /.accordion-criteria js-accordion-criteria -->
                    </div><!-- /.section__accordion -->
                </div><!-- /.section__inner -->
            </div><!-- /.shell-->
        </section><!-- /.section-content-accordion --> 
    </main><!-- /.main -->
</body>
</html>