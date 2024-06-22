<?php /* Template Name: Homepage */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TraderAgma</title>
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

                    <div class="nav-menu-btn">
                        <div class="nav-menu__icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.nav-menu__icon -->
                    </div><!-- /.nav-menu-btn -->

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
            <div class="shell">
                <div class="section__content">
                    <h4>“The goal of a successful trader is to make the best trades. Money is secondary.”</h4>

                    <p>- Alexander Elder</p>
                </div><!-- /.section__content --> 
            </div><!-- /.shell-->
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

                        <div class="card card--alt">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/images/trophy.png" class='card__image'>

                            <h5>Phase 2</h5>

                            <p>Reach the target and maintain your virtual profit levels throughout your final evaluation period to get verified.</p>

                            <div class="card__entry"> 
                                <ul>
                                    <li>Maintain pofitability & minimize losses.</li>
                                    <li>Ensure trading consistency & discipline.</li>
                                    <li>Stick to the Simulated Trading Rules.</li>
                                </ul>
                            </div><!-- /.card__entry -->
                        </div><!--/.card -->
                    </div><!-- /.section__cards -->

                    <div class="section__actions">
                        <h3>FPTrader</h3>

                        <p>You are now a 
                            <span>FPTrader</span>! Trade responsibly and consistently and you can earn up to XX% of the profit you make. If you are profitable month after months, we offer to increase your account balance according to our scaling plan.
                        </p>

                        <a href="#" class="btn">Start the challenge</a>
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
                            <div class="tabs__balance">
                                <h6>Select balance</h6>
                                <ul>
                                    <a href="" class='tabs__balance-pointer'></a>
                                    <li><a href="#">$5,000</a></li>
                                    <li><a href="#">$10,000</a></li>
                                    <li><a href="#">$25,000</a></li>
                                    <li><a href="#">$50,000</a></li>
                                    <li><a href="#">$100,000</a></li>
                                    <li><a href="#">$200,000</a></li>
                                    <li><a href="#">$250,000</a></li>
                                    <li><a href="#">$500,000</a></li>
                                </ul>
                            </div><!-- /.tabs__balance -->

                            <div class="tabs__programs">
                                <h6>Select program</h6>
                                <ul>
                                    <li>
                                        <a href="">
                                            Rapid
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/images/rapid.svg" class='tabs__program-default'/>
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/images/rapid-white.svg" class='tabs__program-current'/>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class='tabs__program-btn is-current'>
                                            2-Step
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/images/2step-gray.svg" class='tabs__program-default'/>
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/images/2step.svg" class='tabs__program-current'/>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- /.tabs__programs -->
                        </div><!-- /.tabs__nav -->
                    </div><!-- /.tabs__head -->

                    <div class="tabs__body">
                        <div class="tab__heading-2step is-visible">
                            <p>Step 1</p>
                            <p>Step 2</p>
                            <p>Funded</p>
                        </div><!-- /.tab__heading-2step -->

                        <div class="tab__heading-rapid">
                            <p>Rapid</p>
                            <p>Funded</p>
                        </div><!-- /.tab__heading-rapid -->

                        <div class="accordion-tab js-accordion-tab">
                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <div class="accordion__title">
                                        <a href="" class="accordion__btn"></a><!-- /.accordion__btn -->
                                        <h6>Profit Target</h6>
                                    </div><!-- /.accordion__title -->

                                    <p>10%</p>
                                    <p>5%</p>
                                    <p>No limit</p>
                                </div><!-- /.accordion__head -->
                                <div class="accordion__body">
                                    <p>The Profit Target represents the realized closed profit percentage that the trader must achieve in relation to their account's initial balance, in order to successfully pass the Assessment. Funded Accounts do not have Profit Targets or limits.</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion__section -->

                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <div class="accordion__title">
                                        <a href="" class="accordion__btn"></a><!-- /.accordion__btn -->
                                        <h6>Daily loss limit</h6>
                                    </div><!-- /.accordion__title -->
                                    <p>4%</</p>
                                    <p>4%</</p>
                                    <p>4%</</p>
                                </div><!-- /.accordion__head -->
                                <div class="accordion__body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam at ipsum blanditiis tempore ducimus. Ad ab nesciunt excepturi exercitationem vitae iste eligendi, atque officiis consequatur obcaecati, necessitatibus, dolorum aperiam iure!</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion__section -->

                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <div class="accordion__title">
                                        <a href="" class="accordion__btn"></a><!-- /.accordion__btn -->
                                        <h6>Max drawdown</h6>
                                    </div><!-- /.accordion__title -->

                                    <p>8%</p>
                                    <p>8%</p>
                                    <p>8%</p>
                                </div><!-- /.accordion__head -->
                                <div class="accordion__body">
                                    <p>The Profit Target represents the realized closed profit percentage that the trader must achieve in relation to their account's initial balance, in order to successfully pass the Assessment. Funded Accounts do not have Profit Targets or limits.</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion__section -->

                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <div class="accordion__title">
                                        <a href="" class="accordion__btn"></a><!-- /.accordion__btn -->
                                        <h6>Inactivity period</h6>
                                    </div><!-- /.accordion__title -->
                                    <p>30 days</</p>
                                    <p>30 days</</p>
                                    <p>30 days</</p>
                                </div><!-- /.accordion__head -->
                                <div class="accordion__body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nostrum veritatis ea eius dignissimos quo eaque, perspiciatis corrupti, laboriosam nobis quos similique voluptates libero quae unde error dolorem. Repellat, consectetur.</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion__section -->

                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <div class="accordion__title">
                                        <a href="" class="accordion__btn"></a><!-- /.accordion__btn -->
                                        <h6>Leverage</h6>
                                    </div><!-- /.accordion__title -->
                                    <p>1:30</p>
                                    <p>1:30</p>
                                    <p>1:30</p>
                                </div><!-- /.accordion__head -->
                                <div class="accordion__body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam incidunt iste consequatur dignissimos esse minus distinctio, repellendus repudiandae culpa perferendis, reprehenderit fuga voluptas assumenda tempore nemo nisi odio aspernatur cumque.</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion__section -->

                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <div class="accordion__title">
                                        <a href="" class="accordion__btn"></a><!-- /.accordion__btn -->
                                        <h6>Stoploss required</h6>
                                    </div><!-- /.accordion__title -->
                                    <p>No</</p>
                                    <p>No</</p>
                                    <p>No</</p>
                                </div><!-- /.accordion__head -->
                                <div class="accordion__body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur molestias perspiciatis aperiam, at nemo nobis! Natus reiciendis quos quaerat. Laboriosam voluptatibus hic sunt blanditiis porro voluptatum molestias amet assumenda fuga?</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion__section -->

                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <div class="accordion__title">
                                        <a href="" class="accordion__btn"></a><!-- /.accordion__btn -->
                                        <h6>Weekend positions</h6>
                                    </div><!-- /.accordion__title -->
                                    <p>No</</p>
                                    <p>No</</p>
                                    <p>No</</p>
                                </div><!-- /.accordion__head -->
                                <div class="accordion__body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quae facilis obcaecati officia, delectus tenetur deleniti perferendis eaque corporis veritatis molestiae vel harum dolore quos sequi reprehenderit nesciunt, doloremque laudantium.</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion__section -->

                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <div class="accordion__title">
                                        <a href="" class="accordion__btn"></a><!-- /.accordion__btn -->
                                        <h6>Trading day limits</h6>
                                    </div><!-- /.accordion__title -->
                                    <p>None</</p>
                                    <p>None</</p>
                                    <p>None</</p>
                                </div><!-- /.accordion__head -->
                                <div class="accordion__body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ea suscipit eos quam nostrum ullam, ducimus numquam error asperiores enim rerum recusandae maxime quos molestias voluptatum reiciendis officiis labore. Laudantium.</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion__section -->

                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <div class="accordion__title">
                                        <a href="" class="accordion__btn"></a><!-- /.accordion__btn -->
                                        <h6>Profit share</h6>
                                    </div><!-- /.accordion__title -->
                                    <p>No</</p>
                                    <p>No</</p>
                                    <p>Up to 90%</</p>
                                </div><!-- /.accordion__head -->
                                <div class="accordion__body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit sunt unde est itaque architecto eveniet accusamus doloribus ea! Aut quasi incidunt id! Sequi voluptas aliquid dolorem eaque? Ipsum, expedita cupiditate?</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion__section -->
                        </div><!-- /.accordion-tab -->
                    </div><!-- /.tabs__body -->

                    <div class="tabs__footer">
                        <h6>Account price: 
                            <span>$56.00</span>
                        </h6>
                        <p>Add-ons available during checkout</p>
                    </div><!-- /.tabs__footer -->
                </div><!-- /.tabs-programs -->

                <div class="section__actions">
                    <a href="" class='btn'>Start FPT Assessment</a>
                </div><!-- /.section__actions -->
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

        <section class="section-cta">
            <div class="shell">
                <div class="section__inner">
                    <div class='section__entry'>
                        <h2>Join the Team of Our <br/>
                            <span>Successful Traders</span>
                        </h2>

                        <p>If you are ready, accept our challenge and become a FPTrader. <br/> You can even try the entire process completely <br/> free of charge.</p>
                    </div><!-- /.section__entry --> 

                    <div class="section__actions">
                        <a href="" class=" btn btn--outlined">Free trial</a>

                        <a href="" class="btn">Start the challenge</a>
                    </div><!-- /.section__actions -->
                </div><!-- /.section__inner
            </div><!-- /.shell-->
        </section><!-- /.section-cta -->

        <section class="section-faq">
            <div class="shell">
                <div class="section__inner">
                    <div class="section__head">
                        <h2>Got More Questions? </br>
                            <span>Explore the FAQ</span>
                        </h2>
                    </div><!-- /.section__head -->

                    <div class="section__body">
                        <div class="accordion-faq js-accordion-faq">
                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <div class="accordion__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/src/images/investor.svg" class='card__image'>

                                    </div><!-- /.accordion__image -->

                                    <div class="accordion__title">
                                        <div class="accordion__entry">
                                            <h5>Getting started</h5>

                                            <p>General information to know about TopTier Trader</p>
                                        </div><!-- /.accordion__entry -->
                                        
                                        <a href="#" class="accordion__btn"></a>
                                    </div><!-- /.accordion__title -->
                                </div><!-- /.accordion__head -->

                                <div class="accordion__body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, nostrum. Ipsam, dolorem laborum accusamus, itaque veritatis enim ipsum aliquam blanditiis consectetur est perspiciatis consequatur? Sed tenetur dolorem minus quod distinctio?</p>

                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion__section -->

                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <div class="accordion__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/src/images/dashboard.svg" class='card__image'>

                                    </div><!-- /.accordion__image -->

                                    <div class="accordion__title">
                                        <div class="accordion__entry">
                                            <h5>Dashboard</h5>

                                            <p>How to navigate the dashboard </p>
                                        </div><!-- /.accordion__entry -->
                                        
                                        <a href="#" class="accordion__btn"></a>
                                    </div><!-- /.accordion__title -->
                                </div><!-- /.accordion__head -->

                                <div class="accordion__body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, nostrum. Ipsam, dolorem laborum accusamus, itaque veritatis enim ipsum aliquam blanditiis consectetur est perspiciatis consequatur? Sed tenetur dolorem minus quod distinctio?</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion__section -->

                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <div class="accordion__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/src/images/competition.svg" class='card__image'>

                                    </div><!-- /.accordion__image -->

                                    <div class="accordion__title">
                                        <div class="accordion__entry">
                                            <h5>Competition</h5>

                                            <p>Information regarding our free monthly competition</p>
                                        </div><!-- /.accordion__entry -->
                                        
                                        <a href="#" class="accordion__btn"></a>
                                    </div><!-- /.accordion__title -->
                                </div><!-- /.accordion__head -->

                                <div class="accordion__body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, nostrum. Ipsam, dolorem laborum accusamus, itaque veritatis enim ipsum aliquam blanditiis consectetur est perspiciatis consequatur? Sed tenetur dolorem minus quod distinctio?</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion__section -->

                            <div class="accordion__section">
                                <div class="accordion__head">
                                    <div class="accordion__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/src/images/wallet.svg" class='card__image'>

                                    </div><!-- /.accordion__image -->

                                    <div class="accordion__title">
                                        <div class="accordion__entry">
                                            <h5>Payouts</h5>

                                            <p>Information regarding our Payouts process</p>
                                        </div><!-- /.accordion__entry -->
                                        
                                        <a href="#" class="accordion__btn"></a>
                                    </div><!-- /.accordion__title -->
                                </div><!-- /.accordion__head -->

                                <div class="accordion__body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, nostrum. Ipsam, dolorem laborum accusamus, itaque veritatis enim ipsum aliquam blanditiis consectetur est perspiciatis consequatur? Sed tenetur dolorem minus quod distinctio?</p>
                                </div><!-- /.accordion__body -->
                            </div><!-- /.accordion__section -->
                        </div><!-- /.accordion -->
                    </div><!-- /.section__body -->

                    <div class="section__actions">
                        <a href="" class="btn btn--outlined">Read FAQ</a>
                    </div><!-- /.section__actions -->
                </div><!-- /.section__inner -->
            </div><!-- /.shell-->
        </section><!-- /.section-faq -->
    </main><!-- /.main -->

    <footer class="footer">
        <div class="shell">
            <div class="footer__inner">
                <a href="" class="footer__logo">
                    <span>Tradelogo</span>

                    <p>Business Tagline</p>
                </a><!-- /.footer__logo -->

                <nav class="footer__nav">
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
                </nav><!-- /.footer__nav -->

                <div class="socials">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/images/facebook.svg">
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/images/x.svg">
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/images/instagram.svg">
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/images/youtube.svg">
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/images/discord.svg">
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/images/telegram.svg">
                            </a>
                        </li>
                    </ul>
                </div><!-- /.socials -->
            </div><!-- /.footer__inner -->

            <div class="footer__content">
                <p>All content published and distributed by Iconic Exchange FZCO t/a Blue Guardian and its affiliates (collectively, the “Company”) is to be treated as general information only. None of the information provided by the Company or contained here is intended (a) as investment advice, (b) as an offer or solicitation of an offer to buy or sell or (c) as a recommendation, endorsement or sponsorship of any security, company or fund. Testimonials appearing may not be representative of other clients or customers and is not a guarantee of future performance or success. Blue Guardian Capital is not a broker. we do not accept client deposits. All program fees are used for operation costs including, but not limited to, staff, technology and other business related expenses. Blue Guardian itself does not carry out any regulated activities, the only exclusive activities we carry out is Trading Education and consequently is not required to be authorized by the regulatory authority.</p>
            </div><!-- /.footer__content -->

            <ul class="footer__links">
                <li>
                    <a href="#">Terms & Conditions</a>
                </li>
                <li>
                    <a href="#">Refund Policy</a>
                </li>
                <li>
                    <a href="#">Privacy Policy</a>
                </li>
            </ul><!-- /.footer__links -->

            <div class="copyright">
                <p>© TraderLogo 2024. All rights reserved</p>
            </div>
        </div><!-- /.shell-->
    </footer><!-- /.footer -->
</body>
</html>