<?= $this->element('slider') ?>



<div class="nk-main">



    <div class="nk-header-title nk-header-title-lg nk-header-title-parallax nk-header-title-parallax-opacity">

        <div class="bg-image">

            <div style="background-image: url('https://octonia.fr/app/webroot/img/minia-trailer.png');"></div>

        </div>

        <div class="nk-header-table">

            <div class="nk-header-table-cell">

                <div class="container">



                    <br><br><br><br><br><br><br>



                    <div class="nk-header-text">



                        <a href="" target="" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">

                            <span>Nous rejoindre</span>

                        </a>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <a href="" class="nk-btn nk-btn-lg link-effect-4">

                            <span>Boutique</span>


                        </a>



                    </div>



                </div>

            </div>

        </div>



    </div>



    <div class="mnt-80">

        <div id="rev_slider_50_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="photography-carousel48" style="padding:0px;">

            <div id="rev_slider_50_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">

                <ul>

                    <li data-index="rs-185" data-transition="slideoverhorizontal" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="https://image.noelshack.com/fichiers/2017/46/6/1511019845-costume-boutique.png" data-rotate="0" data-saveperformance="off">

                        <img src="http://octonia.fr/app/webroot/img/kits/nouveau-item-1.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                    </li>

                    <li data-index="rs-192" data-transition="slideoververtical" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="http://octonia.fr/app/webroot/img/minia-trailer.png" data-rotate="0" data-saveperformance="off">

                        <img src="http://octonia.fr/app/webroot/img/kits/nouveau-item-2.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                    </li>

                    <li data-index="rs-186" data-transition="slideoverhorizontal" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="http://octonia.fr/app/webroot/img/zgeg.png" data-rotate="0" data-saveperformance="off">

                        <img src="http://octonia.fr/app/webroot/img/kits/nouveaux-spawn-5.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                    </li>

                    <li data-index="rs-183" data-transition="slideoververtical" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="http://octonia.fr/app/webroot/img/Plaquette%20des%20personnages.png" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off">

                        <img src="http://octonia.fr/app/webroot/img/kits/nouvelle-dimension-3.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                    </li>

                </ul>

                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>

            </div>

        </div>

    </div>



    <div class="container">

        <div class="nk-gap-6"></div>

        <div class="nk-gap-2"></div>

        <div class="row vertical-gap lg-gap">

            <div class="col-md-4">

                <div class="nk-ibox">

                    <div class="nk-ibox-icon nk-ibox-icon-circle">

                        <span class="ion-ios-game-controller-b"></span>

                    </div>

                    <div class="nk-ibox-cont">

                        <h2 class="nk-ibox-title">SERVEUR INEDIT REMPLI DE NOUVEAUTEES
</h2>

POUR TOUS LES JOUEURS PASSIONNES DE VRAI FACTION

.

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="nk-ibox">

                    <div class="nk-ibox-icon nk-ibox-icon-circle">

                        <span class="ion-fireball"></span>

                    </div>

                    <div class="nk-ibox-cont">

                        <h2 class="nk-ibox-title">MACHINES ULTRAS PERFORMANTES</h2>

                       AVEC UNE CAPACITE D'ACCUEIL DE 2400 JOUEURS



                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="nk-ibox">

                    <div class="nk-ibox-icon nk-ibox-icon-circle">

                        <span class="ion-ribbon-a"></span>

                    </div>

                    <div class="nk-ibox-cont">

                        <h2 class="nk-ibox-title">EVENTS REGULIERS TOUS LES JOURS</h2>

CHAQUE JOUR AU MOINS 1 EVENT SUR LE SERVEUR


                    </div>

                </div>

            </div>

        </div>

        <div class="nk-gap-2"></div>

        <div class="nk-gap-6"></div>

    </div>



    <div class="nk-box bg-dark-1">

        <div class="container text-center">

            <div class="nk-gap-1"></div>

            <h2 class="nk-title h1">Nos dernières actualités</h2>

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="nk-blog-list-classic">



                                <?php

                                if(!empty($search_news)) {



                                    $i = 0;

                                    foreach ($search_news as $news) {



                                        $i++;



                                        if($i > 3) {

                                            break;

                                        }



                                        echo '<div style="margin-bottom: -100px" class="nk-blog-post">';

                                        echo '<div class="nk-post-content">';

                                        echo '<h4><a href="'.$this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])).'">'.$news['News']['title'].'</a></h4>';

                                        echo '<span class="entry-author">&nbsp;';

                                        echo $Lang->get('GLOBAL__BY').' <a href="#">'.$news['News']['author'].'</a> '.$Lang->get('NEWS__POSTED_ON') . ' ' . $Lang->date($news['News']['created']);;

                                        echo ' </span>';

                                        echo '<p class="intro">';

                                        echo $this->Text->truncate($news['News']['content'], 1000, array('ellipsis' => '...', 'html' => true));

                                        echo '<p class="btn btn-default">';

                                        echo '<a href="'.$this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])).'" class="nk-btn link-effect-4">'.$Lang->get('NEWS__READ_MORE').'</a>';

                                        echo '</p>';

                                        echo '</div>';

                                        echo '</div>';

                                    }

                                } else {

                                    echo '<div class="alert alert-danger">'.$Lang->get('NEWS__NONE_PUBLISHED').'</div>';

                                }

                                ?>



                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <div class="container">

        <div class="nk-gap-6"></div>

        <div class="nk-gap-2"></div>

        <div class="row">

            <div class="col-md-8 offset-md-2">

                <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=aCVUMh3pT6o" data-video-thumb="https://octonia.fr/app/webroot/img/minia-trailer.png"></div>

            </div>

        </div>

        <div class="nk-gap-2"></div>

        <div class="nk-gap-6"></div>

    </div>



    <div class="nk-box bg-dark-1 text-center">

        <div class="nk-gap-6"></div>

        <div class="nk-gap-2"></div>

        <div class="bg-image op-3" style="background-image: url('https://octonia.fr/app/webroot/img/zgeg.png');"></div>

        <div class="container">

            <h2 class="display-4">Octonia V4</h2>

            <div class="nk-gap"></div>



            <div class="nk-gap-4"></div>



            <div class="nk-countdown" data-end="2017-10-22 5:00" data-timezone="EU"></div>

        </div>

        <div class="nk-gap-2"></div>

        <div class="nk-gap-6"></div>

    </div>



    <div class="nk-gap-6"></div>

    <div class="nk-gap-2"></div>

    <div class="nk-carousel-2" data-autoplay="12000" data-dots="true">

        <div class="nk-carousel-inner">

            <div>

                <div>

                    <blockquote class="nk-testimonial-2">


                        <div class="nk-testimonial-body">

                            <em>"Octonia est un projet totalement innovent, avec de nombreux ajouts inedits qu'une bonne communaute. Je vous conseille vivement de venir dessus, l'equipe d'Octonia sera presente pour vous aider. En esperant vous voir nombreux !"</em>

                        </div>

                        <div class="nk-testimonial-name h4">Fall0w_</div>

                        <div class="nk-testimonial-source">YouTuber sur Octonia</div>

                    </blockquote>

                </div>

            </div>

            <div>

                <div>

                    <blockquote class="nk-testimonial-2">

                        <div class="nk-testimonial-body">

                            <em>"Serveur de qualiter , l''un des seul serveur francais fluide ambiance du staff sympatique tres bonne qualiter de contenue je vous attente nombreux pour prendre du plaisir a jouer !"</em>

                        </div>

                        <div class="nk-testimonial-name h4">SwiftStay</div>

                        <div class="nk-testimonial-source">YouTuber sur Octonia</div>

                    </blockquote>

                </div>

            </div>

            <div>

                <div>

                    <blockquote class="nk-testimonial-2">

                        <div class="nk-testimonial-body">

                            <em>" Sur octonia, il y a assez de nouvelles fonctionnalites pour ne jamais etre a court d'idee. 
En effet sur les nouveautes que j'ai vu juste sur la v3, lorsque je suis arrive sur le launcher je voulais vraiment arriver a une fin mais ce n'etais bien sur pas possible.
Je trouve donc que Octonia est un serveur avec assez de nouveautes pour etre un bon serveur !"</em>

                        </div>

                        <div class="nk-testimonial-name h4">Spovly</div>

                        <div class="nk-testimonial-source">Octonia, Staff</div>

                    </blockquote>

                </div>

            </div>

            <div>

                <div>

                    <blockquote class="nk-testimonial-2">


                        <div class="nk-testimonial-body">

                            <em>"Octonia est un serveur de qualiter , un staff toujours present et un PvP parfaitement  fluide . Le meilleur PvP factions Fran�ais a ce jour ! En esperant vous voir nombreux sur le serveur !"</em>

                        </div>

                        <div class="nk-testimonial-name h4">zlKayzen</div>

                        <div class="nk-testimonial-source">Joueur Octonia</div>

                    </blockquote>

                </div>

            </div>

            <div>

                <div>

                    <blockquote class="nk-testimonial-2">


                        <div class="nk-testimonial-body">

                            <em>"Octonia ? C'est plus qu'un serveur , c'est une famille ! Le meilleur staff a l'ecoute, le pvp le plus fluide. Une revolution du Pvp Factions Francais ! Il est unique au monde, alors venez nombreux nous rejoindre !"</em>

                        </div>

                        <div class="nk-testimonial-name h4">Zayrox29</div>

                        <div class="nk-testimonial-source">Helper d'Octonia</div>

                    </blockquote>

                </div>

            </div>

        </div>

    </div>

    <div class="nk-gap-2"></div>

    <div class="nk-gap-6"></div>



</div>

<?= $Module->loadModules('home') ?>

 