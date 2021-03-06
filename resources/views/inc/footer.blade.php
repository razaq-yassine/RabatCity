


<link  href="/css/styleTheme.css" rel="stylesheet">
<link  href="/css/responsive/responsive.css" rel="stylesheet">
    <footer class="fplus-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="footer-nav-widget">
                        <nav>
                            <ul>
                                <img src="/storage/LogoMakr_3lfcP2.png" alt="" style="width: 124px;margin-top: -20px;padding-bottom: 19px;" >
                                <li><a href="/Themes/actualites">Actualités</a></li>
                                <li><a href="/Themes/services">Services</a></li>
                                <li><a href="/Themes/activites">Activites</a></li>
                                <li><a href="/Themes/evenement">Evénements</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="footer-nav-widget">
                        <nav>
                            <ul>
                                <br>
                                <li><a href="/Arrondissements">Arrondissement</a></li>
                                <li><a href="/Themes/commune">Commune</a></li>
                                <li><a href="/#contact">Contactez-nous</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-md-3 grow">
                       <a href="/Arrondissements"><img src="/storage/RabatMap.png"></a>
                </div>
                <div class="col-12 col-md-3">
                    <div class="subscribe-widget">
                        <p>Abonnez-vous</p>
                        {!! Form::open(['action' => 'NewsletterController@store', 'method' => 'post']) !!}
                            <input type="email" name="s-email" id="subscribeEmail" placeholder="Entrer votre email">
                            <button type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    {!! Form::close() !!}
                    </div>
                    <div class="footer-social-widget">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-12 text-center text-white"><small><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Razaq & Touhama</small>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
        </div>

    </footer>

<!-- Popper js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<!-- All Plugins js -->
<script type="application/javascript" src="/js/others/plugins.js"></script>
<!-- Active JS -->
<script type="application/javascript" src="/js/active.js"></script>
