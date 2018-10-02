<?php include '../templates/header.php'; ?>

    <!-- Dit is een voorbeeld van het post type: event (aankomend) -->
    
    <div class="breadcrumb">
        <a href="/index.php">Sprout.nl</a>
        <a href="/events.php">Events</a>
        <a href="/evenement/the-next-web-conference-2018.php">The Next Web Conference 2018</a>
    </div>

    <section class="events">
        
        <article class="event">
            <header class="event__header">
                <h1 class="event__title">The Next Web Conference 2018</h1>
                <div class="event__intro">Op 24 en 25 mei vindt in Amsterdam de grootste techconferentie van Europa plaats: TNW Conference 2018. Tienduizend bezoekers vanuit de hele wereld komen hier luisteren naar sprekers als Constantijn van Oranje Nassau (StartupDelta), Anjali Sud (Vimeo), Mike Curtis (Airbnb), John Collison (Stripe) Rich Pierson (Headspace), Alex Le (Reddit) en vele anderen!</div>
                <div class="event__hero figure">
                    <img src="../images/uploads/events/the_next_web.jpg" class="figure__image" />
                </div>
                <div class="event__info">
                    <div class="event__infoItem" name="location"><i class="event__icon fa fa-map-marker"></i><div><a href="https://goo.gl/maps/ZTBrAnb34aU2" target="_blank">Westergasfabriek Amsterdam</a></div></div>
                    <div class="event__infoItem" name="date time"><i class="event__icon fa fa-clock-o"></i><div>24 en 25 mei - 09:00 tot 18:00</div></div>
                    <div class="event__infoItem" name="price"><i class="event__icon fa fa-euro"></i><div>515,- (excl BTW)</div></div>
                    <div class="event__infoItem" name="discount"><i class="event__icon fa fa-star"></i><div>10% korting</div></div>
                </div>
            </header>

            <main class="event__body">
                <p>Met honderd side-events, 200 investeringsfondsen, 1500 startups en een epische hack battle is dit een event dat je als techliefhebber niet mag missen. Bekijk op de website het hele programma en sprekersoverzicht.</p>
                <p>Als partner van dit evenement is Sprout aanwezig en publiceert met regelmaat over sprekers en het programma.</p>
            </main>

             <div class="event__signup">
                <h3 class="event__signupTitle">Deelnemen</h3>
                <p>Speciaal voor Sprout Members mogen wij een exclusieve korting aanbieden. Members krijgen voor het Super Early Bird-tarief 10% korting. hiermee krijg je toegang tot de volledige tweedaagse conferentie, het openings én eindfeest en inzicht in de gastenlijst.</p>
                <div class="event__options">
                    <div class="event__externallink">
                        <a href="http://www.google.com/" target="_new" class="button button--secondary"><i class="fa fa-external-link" aria-hidden="true"></i> aanmelden</a>
                    </div>
                    <div class="event__coupon">
                        <span class="event__couponLabel">Kortingscode:</span>
                        <span class="event__couponCode">
                            <?php if($_COOKIE['sprout-role'] == "premium"): ?>
                                TR03DBI2
                            <?php elseif($_COOKIE['sprout-role'] == "unknown"): ?>
                                ********
                            <?php endif; ?>
                        </span>
                    </div>
                </div>

                <?php include '../templates/widgets/premiumteaser--events.php'; ?>

            </div>
        </article>

    </section>

    <div class="relatedArticles">
        <h4 class="relatedArticles__title">Bekijk ook deze evenementen</h4>
        <div class="grid grid--tablet-6">
            <div class="grid__cell">
                <a href="../evenement/the-next-web-conference-2018.php" class="card card--event card--horizontal" tag="retail">
                    <div class="card__figurecontainer">
                        <div class="card__figure">
                            <img src="../images/uploads/events/31117510996_761d4bdc26_k.jpg" class="card__image" />
                        </div>
                    </div>
                    <div class="card__content">
                        <span class="card__heading">27 Maart 2018</span>
                        <h3 class="card__title">Workshop Backup jouw Mac</h3>
                        <p class="card__excerpt">Op 19 april is Gelderland het epicentrum van iedereen die bouwt aan de toekomst van Nederland. Een toekomst waarin innovaties in Nederland een vruchtbare voedingsbodem hebben. Een toekomst waarin innovaties succesvol bijdragen aan het oplossen van grote uitdagingen.</p>
                    </div>
                </a>
            </div>
            <div class="grid__cell">
                <a href="../evenement/the-next-web-conference-2018.php" class="card card--horizontal card--partner" tag="retail">
                    <div class="card__figurecontainer">
                        <div class="card__figure">
                            <img src="../images/uploads/events/MYC_30.jpg" class="card__image" />
                        </div>
                    </div>
                    <div class="card__content">
                        <span class="card__heading">27 April 2018</span>
                        <h3 class="card__title">Young Business Award - halve finale</h3>
                        <p class="card__excerpt">Tijdens de vijfde editie van de Young Business Award stelt de YBA Foundation met partners een prijzenport van 15.000 euro beschikbaar voor de ‘Beste Jonge Onderneming van Nederland’. Uit de ruim 175 inschrijvingen zijn er 12 semi-finalisten geselecteerd om te strijden voor een podiumplek.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>

<aside id="aside">

    <div class="aside__panelgroup">              
        <div class="banner banner--rectangle">
            <img src="http://via.placeholder.com/285x140" class="banner__image" />
        </div>
    </div>

    <div class="aside__panelgroup">
        <div class="panel panel--headed panel--headed-overflow">
            <h3 class="panel__title">Mede mogelijk door</h3>
            <img src="../images/uploads/partners/logo-postnl-channel-sprout.png" class="panel__figure" />
            <a href="#" class="button button--primary button--center" onClick="openForm('register')">Whitepaper downloaden</a>
        </div>

        <div class="panel">
            <h3 class="panel__title"><i class="panel__title-icon fa fa-folder"></i>Alles over...</h3>
            <ul class="linkList">
                <li class="linkList-item"><a class="linkList__link" href="/topic/direct-marketing.php">Retail</a></li>
                <li class="linkList-item"><a class="linkList__link" href="/topic/direct-marketing.php">Crowdfunding</a></li>
            </ul>
        </div>
    </div>


    <div class="aside__panelgroup">
        <div class="banner banner--rectangle">
            <img src="http://via.placeholder.com/285x140" class="banner__image" />
        </div>

        <div class="banner banner--rectangle">
            <img src="http://via.placeholder.com/285x140" class="banner__image" />
        </div>
    </div>

</aside>
        
<?php include '../templates/footer.php'; ?>