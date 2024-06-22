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
                                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 0.5C7.16352 0.5 0 7.66352 0 16.5C0 24.0034 5.16608 30.2997 12.135 32.029V21.3896H8.83584V16.5H12.135V14.3931C12.135 8.94736 14.5997 6.4232 19.9462 6.4232C20.96 6.4232 22.7091 6.62224 23.4246 6.82064V11.2526C23.047 11.213 22.391 11.1931 21.5763 11.1931C18.953 11.1931 17.9392 12.187 17.9392 14.7707V16.5H23.1654L22.2675 21.3896H17.9392V32.3829C25.8618 31.4261 32.0006 24.6805 32.0006 16.5C32 7.66352 24.8365 0.5 16 0.5Z" fill="white"/>
                                </svg>                           
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.4352 0.0385742H27.9332L18.1065 11.2699L29.6668 26.5532H20.6151L13.5255 17.284L5.41343 26.5532H0.912739L11.4234 14.54L0.333496 0.0385742H9.61497L16.0234 8.51102L23.4352 0.0385742ZM21.8566 23.8609H24.3489L8.26069 2.58942H5.58611L21.8566 23.8609Z" fill="white"/>
                                </svg>                            
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_115_1516)">
                                    <path d="M16 3.38125C20.275 3.38125 20.7813 3.4 22.4625 3.475C24.025 3.54375 24.8688 3.80625 25.4313 4.025C26.175 4.3125 26.7125 4.6625 27.2688 5.21875C27.8313 5.78125 28.175 6.3125 28.4625 7.05625C28.6813 7.61875 28.9438 8.46875 29.0125 10.025C29.0875 11.7125 29.1063 12.2188 29.1063 16.4875C29.1063 20.7625 29.0875 21.2688 29.0125 22.95C28.9438 24.5125 28.6813 25.3563 28.4625 25.9188C28.175 26.6625 27.825 27.2 27.2688 27.7563C26.7063 28.3188 26.175 28.6625 25.4313 28.95C24.8688 29.1688 24.0188 29.4313 22.4625 29.5C20.775 29.575 20.2688 29.5938 16 29.5938C11.725 29.5938 11.2188 29.575 9.5375 29.5C7.975 29.4313 7.13125 29.1688 6.56875 28.95C5.825 28.6625 5.2875 28.3125 4.73125 27.7563C4.16875 27.1938 3.825 26.6625 3.5375 25.9188C3.31875 25.3563 3.05625 24.5063 2.9875 22.95C2.9125 21.2625 2.89375 20.7563 2.89375 16.4875C2.89375 12.2125 2.9125 11.7062 2.9875 10.025C3.05625 8.4625 3.31875 7.61875 3.5375 7.05625C3.825 6.3125 4.175 5.775 4.73125 5.21875C5.29375 4.65625 5.825 4.3125 6.56875 4.025C7.13125 3.80625 7.98125 3.54375 9.5375 3.475C11.2188 3.4 11.725 3.38125 16 3.38125ZM16 0.5C11.6563 0.5 11.1125 0.51875 9.40625 0.59375C7.70625 0.66875 6.5375 0.94375 5.525 1.3375C4.46875 1.75 3.575 2.29375 2.6875 3.1875C1.79375 4.075 1.25 4.96875 0.8375 6.01875C0.44375 7.0375 0.16875 8.2 0.09375 9.9C0.01875 11.6125 0 12.1563 0 16.5C0 20.8438 0.01875 21.3875 0.09375 23.0938C0.16875 24.7938 0.44375 25.9625 0.8375 26.975C1.25 28.0313 1.79375 28.925 2.6875 29.8125C3.575 30.7 4.46875 31.25 5.51875 31.6563C6.5375 32.05 7.7 32.325 9.4 32.4C11.1063 32.475 11.65 32.4937 15.9938 32.4937C20.3375 32.4937 20.8813 32.475 22.5875 32.4C24.2875 32.325 25.4563 32.05 26.4688 31.6563C27.5188 31.25 28.4125 30.7 29.3 29.8125C30.1875 28.925 30.7375 28.0313 31.1438 26.9813C31.5375 25.9625 31.8125 24.8 31.8875 23.1C31.9625 21.3938 31.9813 20.85 31.9813 16.5063C31.9813 12.1625 31.9625 11.6188 31.8875 9.9125C31.8125 8.2125 31.5375 7.04375 31.1438 6.03125C30.75 4.96875 30.2063 4.075 29.3125 3.1875C28.425 2.3 27.5313 1.75 26.4813 1.34375C25.4625 0.95 24.3 0.675 22.6 0.6C20.8875 0.51875 20.3438 0.5 16 0.5Z" fill="white"/>
                                    <path d="M16 8.28125C11.4625 8.28125 7.78125 11.9625 7.78125 16.5C7.78125 21.0375 11.4625 24.7188 16 24.7188C20.5375 24.7188 24.2188 21.0375 24.2188 16.5C24.2188 11.9625 20.5375 8.28125 16 8.28125ZM16 21.8312C13.0563 21.8312 10.6687 19.4438 10.6687 16.5C10.6687 13.5563 13.0563 11.1687 16 11.1687C18.9438 11.1687 21.3312 13.5563 21.3312 16.5C21.3312 19.4438 18.9438 21.8312 16 21.8312Z" fill="white"/>
                                    <path d="M26.4625 7.95635C26.4625 9.01885 25.6 9.8751 24.5438 9.8751C23.4813 9.8751 22.625 9.0126 22.625 7.95635C22.625 6.89385 23.4875 6.0376 24.5438 6.0376C25.6 6.0376 26.4625 6.9001 26.4625 7.95635Z" fill="white"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_115_1516">
                                    <rect width="32" height="32" fill="white" transform="translate(0 0.5)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg width="32" height="23" viewBox="0 0 32 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.6812 5.0999C31.6812 5.0999 31.3688 2.89365 30.4063 1.9249C29.1875 0.649902 27.825 0.643652 27.2 0.568652C22.725 0.243652 16.0063 0.243652 16.0063 0.243652H15.9937C15.9937 0.243652 9.275 0.243652 4.8 0.568652C4.175 0.643652 2.8125 0.649902 1.59375 1.9249C0.63125 2.89365 0.325 5.0999 0.325 5.0999C0.325 5.0999 0 7.69365 0 10.2812V12.7062C0 15.2937 0.31875 17.8874 0.31875 17.8874C0.31875 17.8874 0.63125 20.0937 1.5875 21.0624C2.80625 22.3374 4.40625 22.2937 5.11875 22.4312C7.68125 22.6749 16 22.7499 16 22.7499C16 22.7499 22.725 22.7374 27.2 22.4187C27.825 22.3437 29.1875 22.3374 30.4063 21.0624C31.3688 20.0937 31.6812 17.8874 31.6812 17.8874C31.6812 17.8874 32 15.2999 32 12.7062V10.2812C32 7.69365 31.6812 5.0999 31.6812 5.0999ZM12.6938 15.6499V6.65615L21.3375 11.1687L12.6938 15.6499Z" fill="white"/>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg width="32" height="25" viewBox="0 0 32 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0894 2.04093C25.0498 1.10508 22.8626 0.415598 20.5759 0.0206995C20.5342 0.0130781 20.4926 0.0321244 20.4712 0.0702179C20.1899 0.570505 19.8783 1.22317 19.6601 1.73616C17.2005 1.36794 14.7536 1.36794 12.3444 1.73616C12.1262 1.21177 11.8033 0.570505 11.5208 0.0702179C11.4993 0.0333954 11.4577 0.0143491 11.4161 0.0206995C9.13055 0.414336 6.94341 1.10382 4.90258 2.04093C4.88491 2.04854 4.86977 2.06125 4.85972 2.07775C0.711189 8.27556 -0.425267 14.321 0.13224 20.2916C0.134763 20.3208 0.15116 20.3487 0.173864 20.3665C2.91095 22.3765 5.56228 23.5968 8.16437 24.4056C8.20602 24.4183 8.25014 24.4031 8.27664 24.3688C8.89217 23.5283 9.44086 22.6419 9.9113 21.7099C9.93906 21.6553 9.91256 21.5905 9.85582 21.569C8.98551 21.2388 8.1568 20.8363 7.35964 20.3792C7.29659 20.3424 7.29154 20.2522 7.34954 20.209C7.5173 20.0833 7.68509 19.9525 7.84527 19.8204C7.87425 19.7963 7.91464 19.7912 7.94871 19.8065C13.1857 22.1975 18.8554 22.1975 24.0306 19.8065C24.0647 19.79 24.1051 19.7951 24.1353 19.8192C24.2955 19.9512 24.4633 20.0833 24.6323 20.209C24.6903 20.2522 24.6865 20.3424 24.6235 20.3792C23.8263 20.8452 22.9976 21.2388 22.126 21.5677C22.0693 21.5893 22.044 21.6553 22.0718 21.7099C22.5523 22.6406 23.101 23.5269 23.7052 24.3676C23.7304 24.4031 23.7758 24.4183 23.8175 24.4056C26.4322 23.5968 29.0835 22.3765 31.8206 20.3665C31.8446 20.3487 31.8597 20.322 31.8622 20.2928C32.5294 13.3902 30.7447 7.39435 27.131 2.07901C27.1221 2.06125 27.107 2.04854 27.0894 2.04093ZM10.6934 16.6561C9.11666 16.6561 7.81751 15.2086 7.81751 13.4309C7.81751 11.6532 9.09147 10.2057 10.6934 10.2057C12.3078 10.2057 13.5944 11.6659 13.5692 13.4309C13.5692 15.2086 12.2952 16.6561 10.6934 16.6561ZM21.3263 16.6561C19.7497 16.6561 18.4505 15.2086 18.4505 13.4309C18.4505 11.6532 19.7244 10.2057 21.3263 10.2057C22.9408 10.2057 24.2274 11.6659 24.2022 13.4309C24.2022 15.2086 22.9408 16.6561 21.3263 16.6561Z" fill="white"/>
                                </svg>                           
                             </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32 16.5C32 25.3366 24.8366 32.5 16 32.5C7.16344 32.5 0 25.3366 0 16.5C0 7.66344 7.16344 0.5 16 0.5C24.8366 0.5 32 7.66344 32 16.5ZM16.5734 12.3119C15.0171 12.9592 11.9068 14.2989 7.24252 16.3311C6.48511 16.6323 6.08834 16.927 6.05222 17.2151C5.99118 17.702 6.60095 17.8937 7.43129 18.1548C7.54424 18.1903 7.66127 18.2271 7.78125 18.2661C8.59818 18.5317 9.6971 18.8424 10.2684 18.8547C10.7866 18.8659 11.365 18.6523 12.0035 18.2138C16.3615 15.272 18.6112 13.7851 18.7524 13.753C18.8521 13.7304 18.9901 13.702 19.0837 13.7851C19.1772 13.8683 19.168 14.0258 19.1581 14.068C19.0977 14.3255 16.7042 16.5508 15.4655 17.7024C15.0793 18.0614 14.8054 18.316 14.7494 18.3742C14.624 18.5045 14.4962 18.6277 14.3733 18.7461C13.6144 19.4778 13.0452 20.0264 14.4048 20.9224C15.0582 21.3529 15.581 21.709 16.1026 22.0642C16.6722 22.4521 17.2404 22.839 17.9755 23.3209C18.1628 23.4437 18.3416 23.5712 18.5159 23.6954C19.1788 24.168 19.7743 24.5926 20.5101 24.5248C20.9377 24.4855 21.3793 24.0835 21.6036 22.8845C22.1336 20.0509 23.1755 13.9113 23.4163 11.3813C23.4374 11.1596 23.4108 10.876 23.3895 10.7514C23.3682 10.6269 23.3237 10.4495 23.1618 10.3181C22.9701 10.1626 22.6742 10.1298 22.5418 10.1321C21.94 10.1427 21.0167 10.4638 16.5734 12.3119Z" fill="white"/>
                                </svg>
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