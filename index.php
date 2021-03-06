<!DOCTYPE html>
<html lang="fr" class="sr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="Venez observer mes projets sur mon Portfolio. J'aspire à devenir développeur Full-Stack, alors n'hésitez pas à me contacter si mon profil vous intéresse." />
    <meta name="author" content="Dylan Charton" />
    <title>Dylan Charton - Développeur Web</title>
    <!-- Recaptcha script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- My stylesheet -->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- ScrollReveal Library -->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body id="accueil">
<div class="loader-wrapper">
    <div id="loader-top" class="d-flex justify-content-center align-items-center"></div>
    <div id="loader-bottom" class="d-flex justify-content-center "></div>
    <div class="progress-bar"></div>
</div>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navReveal" id="mainNav">
        <div class="container px-4 px-lg-5">
            <div class="col-2">
                <a class="navbar-brand" href="#accueil">Dylan Charton</a>
            </div>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse col-9" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#apropos">À propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#competences">Compétences</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projets">Projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contactez-moi</a></li>
                    <li class="nav-item"><a class="nav-link" href="assets/cv_dylancharton.pdf" target="_blank"
                            rel="noopener">CV</a></li>
                </ul>

            </div>
        </div>
        
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="polygon d-flex align-items-center justify-content-center">
            <img src="assets/img/photo.png" alt="Photo" id="my-photo" class="appearRightMain load-hidden">
            <div class="text-start">
                <h1 class="mx-auto my-0 px-4 text-uppercase appearLeftMain load-hidden">
                    <span class="letter">D</span>
                    <span class="letter">Y</span>
                    <span class="letter">L</span>
                    <span class="letter">A</span>
                    <span class="letter">N</span>
                    <br />
                    <span class="ps-5 letter">C</span>
                    <span class="letter">H</span>
                    <span class="letter">A</span>
                    <span class="letter">R</span>
                    <span class="letter">T</span>
                    <span class="letter">O</span>
                    <span class="letter">N</span>
                </h1>
                <h2 class="mx-auto mt-2 mb-5 px-4 appearLeftTextMain " id="what-i-am">Développeur Web et Web Mobile
                    en formation à l'Access Code School de
                    Lons-le-Saunier</h2>
                <p class="text-white-50 px-4 appearLeftTextMain l" id="seeking">En recherche d'un stage du 10/01/2022
                    au 04/03/2022</p>
            </div>
        </div>


    </header>
    <!-- About-->
    <section class="about-section" id="apropos">
        <div id="polygon-two"></div>
        <div class="container-fluid px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 align-items-end">
                <div class="col-lg-4 d-none d-lg-block about-content">
                    <div class="about-img appearLeft"></div>
                </div>
                <div class="col-12 col-lg-8 about-content">

                    <h2 class="text-white mb-5 text-end appearLeftTitle" id="about-title">Qui suis-je ?</h2>
                    <p class="text-white appearLeftText">
                        Après quelques expériences en management de la grande distribution qui m'ont appris la rigueur,
                        l'organisation et le sens de la communication, j'ai entrepris un virage me menant vers les
                        métiers de l'informatique. Le jeu vidéo est le pilier de ce qui m'a fait m'intéresser par la
                        suite au développement des nouvelles technologies et à la culture d'Internet.
                    </p>
                    <p class="text-white appearLeftText">Aujourd'hui, en formation à l'Access Code School de
                        Lons-le-Saunier,
                        j'entreprends de devenir développeur Full-Stack car j'aime énormément la polyvalence. Ma
                        curiosité me pousse chaque jour à m'améliorer, les projets suivants en sont les témoins les plus
                        fidèles.</p>
                </div>

            </div>

        </div>
    </section>
    <section class="skills-section justify-content-center" id="competences">
        <div class="container-fluid px-4 px-lg-5 row d-flex">
            <h2 class="text-center skill-title soberReveal">Compétences</h2>
            <div class="col-12 col-lg-8">
                <h4 class="skill-sub text-center soberReveal">Compétences techniques</h4>
                <div class="row justify-content-center text-center skills-div-one py-5">
                    <div class="col-3"><img data-src="assets/img/gityellow.svg" src="assets/img/loader.png"
                            alt="Icône Git" class="img-fluid lazyload"></div>
                    <div class="col-3"><img data-src="assets/img/githubyellow.svg" src="assets/img/loader.png"
                            class="img-fluid lazyload" alt="Icône Github">
                    </div>
                    <div class="col-3"><img data-src="assets/img/wordpressyellow.svg" src="assets/img/loader.png"
                            alt="Icône Wordpress" class="img-fluid lazyload"></div>
                    <div class="col-3"><img data-src="assets/img/visualstudiocode.svg" src="assets/img/loader.png"
                            alt="Icône Visual Studio Code" class="img-fluid lazyload"></div>

                </div>
                <div class="row justify-content-center text-center skills-div-two py-5">
                    <div class="col-3"><img data-src="assets/img/phpyellow.svg" src="assets/img/loader.png"
                            alt="Icône PHP" class="img-fluid lazyload"></div>
                    <div class="col-3"><img data-src="assets/img/Laravelyellow.svg" src="assets/img/loader.png"
                            class="img-fluid lazyload" alt="Icône Laravel">
                    </div>
                    <div class="col-3"><img data-src="assets/img/mysqlyellowblue.svg" src="assets/img/loader.png"
                            alt="Icône MySQL" class="img-fluid lazyload">
                    </div>
                </div>
                <div class="row justify-content-center text-center skills-div-three py-5">
                    <div class="col-2"><img data-src="assets/img/jsyellow.svg" src="assets/img/loader.png"
                            alt="Icône JavaScript" class="img-fluid lazyload">
                    </div>
                    <div class="col-2"><img data-src="assets/img/vuejsyellow.svg" src="assets/img/loader.png"
                            class="img-fluid lazyload" alt="Icône VueJS"></div>
                    <div class="col-2"><img data-src="assets/img/bootstrapyellow.svg" src="assets/img/loader.png"
                            alt="Icône Bootstrap" class="img-fluid lazyload"></div>
                    <div class="col-2"><img data-src="assets/img/cssyellow.svg" src="assets/img/loader.png"
                            alt="Icône CSS" class="img-fluid lazyload"></div>
                    <div class="col-2"><img data-src="assets/img/htmlyellow.svg" src="assets/img/loader.png"
                            alt="Icône HTML" class="img-fluid lazyload"></div>
                </div>

            </div>
            <div class="col-lg-4 col-12">
                <h4 class="skill-sub text-center soberReveal">Soft-skills</h4>
                <div class="row justify-content-center appearLeftSkills">
                    <div class="soft-skills">Curiosité</div>
                    <div class="soft-skills">Organisation</div>
                    <div class="soft-skills">Persévérance</div>
                    <div class="soft-skills">Communication</div>
                    <div class="soft-skills">Autonomie</div>
                    <div class="soft-skills">Management d'équipe</div>
                </div>
                <h4 class="skill-sub text-center py-4 soberReveal">Langues</h4>
                <div class="row justify-content-center appearLeftSkills">
                    <div class="soft-skills">Français - Natif</div>
                    <div class="soft-skills">Anglais - Bilingue</div>
                </div>
            </div>
        </div>

    </section>
    <div id="typewriter" class="row text-center justify-content-evenly align-items-center">
        <img data-src="assets/img/planet.svg" src="assets/img/loader.png" alt="Planète"
            class="img-fluid hobbies-icons planet soberReveal lazyload">
        <img data-src="assets/img/game-controller.svg" src="assets/img/loader.png" alt="Manette"
            class="img-fluid hobbies-icons gamepad soberReveal lazyload">
        <img data-src="assets/img/book.svg" src="assets/img/loader.png" alt="Livre"
            class="img-fluid hobbies-icons book soberReveal lazyload">
        <img data-src="assets/img/fouet.svg" src="assets/img/loader.png" alt="Fouet"
            class="img-fluid hobbies-icons fouet soberReveal lazyload">
    </div>
    <!-- Projects-->
    <section class="projects-section px-lg-5 px-0" id="projets">
        <div class="project-title mb-5 text-center soberReveal">Mes projets</div>
        <div class="container px-4 px-lg-5">
            <!-- Project One -->
            <div class="row gx-0 mb-lg-0 justify-content-center">
                <div class="col-lg-6 bg-white project-img">
                    <img class="img-fluid shadow  projectRevealLeft lazyload" data-src="assets/img/mntn-mockup.png"
                        src="assets/img/loader.png" alt="MNTN Mockup" />
                    <div class="overlay">
                        <div class="know-more">+</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100 project-frame">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="projectTextRight project-caption-t">MNTN</h4>
                                <p class="mb-0 projectTextRight project-caption-sub">Un projet réalisé en cours de
                                    formation.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0 projectTextRight" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="unroll">

                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mockup">
                        <img data-src="assets/img/techsini-mntn.png" src="assets/img/loader.png"
                            class="img-fluid project-mockup-size lazyload" alt="Mockup MNTN">
                    </div>
                    <div class="col-12 col-lg-6 project-description">
                        <p class="py-3 px-4">Le principe de ce projet était de reproduire <a
                                href="https://www.figma.com/community/file/788675347108478517" target="_blank"
                                class="inline-link" rel="noopener">cette maquette</a> de la façon la plus fidèle
                            possible. Il m'a
                            permis de découvrir Bootstrap et d'affiner mes connaissances naissantes en matière
                            d'intégration Web. C'est aussi avec ce projet que j'ai découvert Visual Studio Code et
                            quelques plugins parmis les plus utiles. </p>

                        <div class="d-flex justify-content-center">
                        <a href="https://dylanc903.promo-93.codeur.online/mntn/" class="btn btn-outline-info"
                            target="_blank" rel="noopener">En voir
                            plus</a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Project Two -->
            <div class="row gx-0 mb-lg-0 justify-content-center">
                <div class="col-lg-6 bg-white project-img">
                    <img class="img-fluid shadow projectRevealLeft lazyload"
                        data-src="assets/img/mockup-tourdepize-figma.png" src="assets/img/loader.png"
                        alt="Le crédit Lédonien Mockup" />
                    <div class="overlay">
                        <div class="know-more">+</div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project-frame">
                        <div class="d-flex h-100 project-frame">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="projectTextRight project-caption-t">La Tour de Pize (Maquette)</h4>
                                <p class="mb-0 projectTextRight project-caption-sub">Un projet réalisé en cours de
                                    formation.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0 projectTextRight" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="unroll">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mockup">
                        <img data-src="assets/img/techsini-tourdepize.png" src="assets/img/loader.png"
                            class="img-fluid project-mockup-size lazyload" alt="Mockup La Tour de Pize">
                    </div>
                    <div class="col-12 col-lg-6 project-description">
                        <p class="py-3 px-4">Il s'agit de la première maquette que j'ai réalisé lors de ma formation.
                            Elle m'a permis de découvrir Figma et ses fonctionnalités de façon plus approfondie que lors
                            du projet précédent. Il s'agissait ici de proposer une solution pour refaire <a
                                href="https://www.latourdepize.com/" target="_blank" class="inline-link"
                                rel="noopener">ce site</a> en y intégrant directement une solution de consultation de la
                            carte et de commande. </p>

                        <div class="d-flex justify-content-center">
                        <a href="https://www.figma.com/proto/MdQsIVvL7dlIf1TbsWdibr/La-Tour-de-Pize-Dylan-Charton?node-id=3%3A2&starting-point-node-id=3%3A2"
                            class="btn btn-outline-info me-2" target="_blank" rel="noopener">Prototype Mobile</a>
                        <a href="https://www.figma.com/proto/MdQsIVvL7dlIf1TbsWdibr/La-Tour-de-Pize-Dylan-Charton?node-id=93%3A893&starting-point-node-id=93%3A893"
                            class="btn btn-outline-info" target="_blank" rel="noopener">Prototype PC</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Three -->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6 bg-white project-img">
                    <img class="img-fluid shadow projectRevealRight lazyload"
                        data-src="assets/img/tourdepize-mockup.png" src="assets/img/loader.png"
                        alt="La Tour de Pize Mockup" />
                    <div class="overlay">
                        <div class="know-more">+</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100 project-frame">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="projectTextLeft project-caption-t">La Tour de Pize (Intégration)</h4>
                                <p class="mb-0 projectTextLeft project-caption-sub">Un projet réalisé en cours de
                                    formation.</p>
                                <hr class="d-none d-lg-block mb-0 me-0 projectTextLeft" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="unroll">

                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mockup">
                        <img data-src="assets/img/techsini-latourdepize.png" src="assets/img/loader.png"
                            class="img-fluid project-mockup-size lazyload" alt="Mockup La Tour de Pize">
                    </div>
                    <div class="col-12 col-lg-6 project-description">
                        <p class="py-3 px-4">Lors de ce projet, j'ai effectué l'intégration de la maquette d'un camarade
                            de formation qu'il a réalisé grâce à Figma. Ce projet a été fait en une semaine environ.
                            J'ai de nouveau utilisé Bootstrap pour m'aider. Ce projet a aussi été ma première approche
                            du JavaScript grâce au menu. J'ai simplement effectué le changement de couleur au clique sur
                            les boutons </p>
                            <p class="py-3 px-4">Maquette réalisée par <a href="https://lucasm.promo-93.codeur.online/portfolio/index.html" target="_blank" rel="noopener" class="inline-link">Lucas Morille-Roy</a></p>

                        <div class="d-flex justify-content-center">
                        <a href="https://dylanc903.promo-93.codeur.online/latourdepize//" class="btn btn-outline-info"
                            target="_blank" rel="noopener">En voir
                            plus</a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Project Four-->
            <div class="row gx-0 mb-lg-0 justify-content-center">
                <div class="col-lg-6 bg-white project-img">
                    <img class="img-fluid shadow projectRevealLeft lazyload"
                        data-src="assets/img/credit-ledonien-mockup.png" src="assets/img/loader.png"
                        alt="Le crédit Lédonien Mockup" />
                    <div class="overlay">
                        <div class="know-more">+</div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project-frame">
                        <div class="d-flex h-100 project-frame">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="projectTextRight project-caption-t">Le Crédit Lédonien</h4>
                                <p class="mb-0 projectTextRight project-caption-sub">Un projet réalisé en cours de
                                    formation.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0 projectTextRight" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="unroll">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mockup">
                        <img data-src="assets/img/techsini-credit.png" src="assets/img/loader.png"
                            class="img-fluid project-mockup-size lazyload" alt="Mockup Crédit Lédonien">
                    </div>
                    <div class="col-12 col-lg-6 project-description">
                        <p class="py-3 px-4">Ce projet a été réalisé avec Francis Pernot et Marley Sorhaindo. J'ai pu
                            pratiquer un peu plus le JavaScript sur ce projet. J'ai effectivement créé le slider à
                            gauche de l'écran et le menu de navigation. C'est également le premier projet où Git et
                            GitHub m'ont été très utile pour le travail de groupe, en témoigne la fréquence de commit
                            sur le <a href="https://github.com/Freench/Projet-3-Credit-Ledonien" target="_blank"
                                class="inline-link" rel="noopener">repository</a>. La particularité de ce projet est
                            qu'il devait être réalisé sans framework CSS. </p>

                        <div class="d-flex justify-content-center">
                        <a href="https://dylanc903.promo-93.codeur.online/credit-ledonien/index.php#"
                            class="btn btn-outline-info" target="_blank" rel="noopener">En voir
                            plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Five -->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6 bg-white project-img">
                    <img class="img-fluid shadow projectRevealRight lazyload"
                        data-src="assets/img/pierrefeuille-mockup.png" src="assets/img/loader.png"
                        alt="Pierre feuille ciseaux Mockup" />
                    <div class="overlay">
                        <div class="know-more">+</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project-frame">
                        <div class="d-flex h-100 project-frame">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="projectTextLeft project-caption-t">Pierre - Feuille - Ciseaux - Spock -
                                    Lézard</h4>
                                <p class="mb-0 projectTextLeft project-caption-sub">Un projet réalisé en cours de
                                    formation.</p>
                                <hr class="d-none d-lg-block mb-0 me-0 projectTextLeft" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="unroll">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mockup">
                        <img data-src="assets/img/techsini-pfc.png" src="assets/img/loader.png"
                            class="img-fluid project-mockup-size lazyload" alt="Mockup Pierre feuille ciseaux">
                    </div>
                    <div class="col-12 col-lg-6 project-description">
                        <p class="py-3 px-4">Ce projet était un projet très axé sur le JavaScript. J'ai créé un
                            Pierre-Feuille-Ciseaux-Spock-Lézard inspiré par le protagoniste d'une célèbre série. Il
                            était demandé qu'un compteur de parties gagnées ainsi que des parties perdues soit présent
                            et que ces données soient sauvegardées dans le navigateur de recherche selon la méthode de
                            localStorage. Un bouton de réinitialisation offre la possibilité de remettre à zéro le
                            compteur.<br /> J'ai réalisé les cartes à jouer avec Figma en utilisant pour base des SVG <a
                                href="https://commons.wikimedia.org/wiki/File:Pierre_ciseaux_feuille_l%C3%A9zard_spock_aligned.svg"
                                target="_blank" class="inline-link" rel="noopener">disponibles en accès libre</a>. Ce
                            fichier m'a d'ailleurs inspiré le logo du jeu. </p>

                        <div class="d-flex justify-content-center">
                            <a href="https://dylanc903.promo-93.codeur.online/pierre-feuille-ciseaux/"
                            class="btn btn-outline-info" target="_blank" rel="noopener">En voir
                            plus</a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Project six -->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6 bg-white project-img">
                    <img class="img-fluid shadow projectRevealRight lazyload"
                        data-src="assets/img/mockup-portfolio-main.png" src="assets/img/loader.png"
                        alt="Pierre feuille ciseaux Mockup" />
                    <div class="overlay">
                        <div class="know-more">+</div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project-frame">
                        <div class="d-flex h-100 project-frame">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="projectTextLeft project-caption-t">Mon Portfolio</h4>
                                <p class="mb-0 projectTextLeft project-caption-sub">Un projet réalisé en cours de
                                    formation.</p>
                                <hr class="d-none d-lg-block mb-0 me-0 projectTextLeft" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="unroll">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mockup">
                        <img data-src="assets/img/techsini-portfolio.png" src="assets/img/loader.png"
                            class="img-fluid project-mockup-size lazyload" alt="Mockup Portfolio">
                    </div>
                    <div class="col-12 col-lg-6 project-description">
                        <p class="py-3 px-4"> Ce projet consistait à la réalisation d'un portfolio qui comporterait tous
                            les projets que j'ai réalisés à ce jour. Le principe était de chercher un template Bootstrap
                            sur lequel m'appuyer mais aucun n'a su me convenir. J'ai donc pris un template relativement
                            neutre que j'ai adapté en fonction de mes goûts grâce à Bootstrap. <br />Pour mes mockups
                            j'ai utilisé les sites <a href="https://techsini.com/multi-mockup/index.php" target="_blank"
                                class="inline-link" rel="noopener">Techsini</a>, <a href="https://placeit.net/"
                                target="_blank" class="inline-link" rel="noopener">PlaceIt</a> ainsi qu'un peu du
                            logiciel Photoshop de la suite Adobe.<br /> J'ai découvert des librairies JavaScript
                            (LazyLoad et ScrollReveal notamment) qui me sont très utiles pour optimiser mon site. Il
                            reste néanmoins perfectible et j'ai hâte de l'améliorer davantage grâce aux connaissances
                            que j'acquérirai au fil de mon parcours. </p>

                    </div>

                </div>
            </div>
            <!-- Project seven -->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6 bg-white project-img">
                    <img class="img-fluid shadow projectRevealRight lazyload" data-src="assets/img/mockup-sdis.png"
                        src="assets/img/loader.png" alt="Eval'Secours Mockup" />
                    <div class="overlay">
                        <div class="know-more">+</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project-frame">
                        <div class="d-flex h-100 project-frame">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="projectTextLeft project-caption-t">Éval'Secours SDIS 25</h4>
                                <p class="mb-0 projectTextLeft project-caption-sub">Un projet en cours de réalisation,
                                    dans la continuité du Hacking Health de Besançon 2021</p>
                                <hr class="d-none d-lg-block mb-0 me-0 projectTextLeft" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="unroll">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mockup">
                        <img data-src="assets/img/carte_intervention.png" src="assets/img/loader.png"
                            class="img-fluid project-mockup-size lazyload mt-4" alt="Carte d'intervention">
                    </div>
                    <div class="col-12 col-lg-6 project-description">
                        <p class="py-3 px-4">Ce projet est né durant le Hacking Health de Besançon qui s'est déroulé du
                            1er au 3 octobre 2021. J'ai donc mis à contribution ce que j'ai appris au service du <a
                                href="https://www.sdis25.fr/" target="_blank" class="inline-link" rel="noopener">SDIS
                                25</a>. Nous avons pensé à une carte d'intervention, distribuable aux victimes et
                            témoins et sur laquelle figure un numéro qui identifie la personne sans stocker aucune
                            donnée sensible. <br /> Il est aussi important de mettre un sens sur ce questionnaire et de
                            montrer à la personne prise en charge que sa contribution servira à améliorer les services
                            du SDIS. <br /> J'ai géré essentiellement la partie visuelle, avec la carte, et les
                            maquettes du site web qui sont toujours en construction.</p>
                        <div class="btn btn-secondary">Bientôt disponible</div>
                    </div>

                </div>
            </div>
            <!-- Project eight -->
        <div class="row gx-0 justify-content-center">
            <div class="col-lg-6 bg-white project-img">
                <img class="img-fluid shadow projectRevealRight lazyload"
                    data-src="assets/img/mockup-conciergerie.png" src="assets/img/loader.png"
                    alt="Conciergerie Lédonienne Mockup" />
                <div class="overlay">
                    <div class="know-more">+</div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project-frame">
                    <div class="d-flex h-100 project-frame">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="projectTextLeft project-caption-t">CRUD de la Conciergerie Lédonienne</h4>
                            <p class="mb-0 projectTextLeft project-caption-sub">Un projet réalisé en cours de
                                formation.</p>
                            <hr class="d-none d-lg-block mb-0 me-0 projectTextLeft" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="unroll">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 mockup">
                    <img data-src="assets/img/techsini-conciergerie.png" src="assets/img/loader.png"
                        class="img-fluid project-mockup-size lazyload" alt="Mockup Portfolio">
                </div>
                <div class="col-12 col-lg-6 project-description">
                    <p class="py-3 px-4"> Ce projet tourne essentiellement autour de PHP et de la manipulation de bases de données. Plus précisément, il s'agissait ici de mettre en place un CRUD. Une administration destinée à un concierge est donc un support tout à fait pédagogique. Le grand principe était donc de réaliser des requêtes SQL (réalisées via MySQL) en utilisant le PDO (PHP Data Object) afin de permettre à un concierge de tenir à jour les interventions réalisées.</p>
                    <p class="py-3 px-4">Dans un second temps, j'ai mis en place un système de création de compte et de connexion afin d'accéder au système d'administration.</p>
                    <div class="d-flex justify-content-center">
                    <a href="https://dylanc903.promo-93.codeur.online/conciergerie/"
                            class="btn btn-outline-info" target="_blank" rel="noopener">En voir
                            plus</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- Project nine -->
        <div class="row gx-0 justify-content-center">
                <div class="col-lg-6 bg-white project-img">
                    <img class="img-fluid shadow projectRevealRight lazyload" data-src="assets/img/mockup-music.png"
                        src="assets/img/loader.png" alt="Music Band Mockup" />
                    <div class="overlay">
                        <div class="know-more">+</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project-frame">
                        <div class="d-flex h-100 project-frame">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="projectTextLeft project-caption-t">Music Band</h4>
                                <p class="mb-0 projectTextLeft project-caption-sub">Un projet réalisé en cours de formation</p>
                                <hr class="d-none d-lg-block mb-0 me-0 projectTextLeft" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="unroll">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mockup">
                        <img data-src="assets/img/techsini-music.png" src="assets/img/loader.png"
                            class="img-fluid project-mockup-size lazyload mt-4" alt="Mockup Music Band">
                    </div>
                    <div class="col-12 col-lg-6 project-description">
                        <p class="px-4">L'objectif de ce projet était d'apprendre à aller chercher des informations dans une API (Application Programming Interface) car c'est un moyen très efficace de communiquer avec des services et d'accéder à des informations laissées à disposition. Cela facilite grandement le travail de développement et donne une grande flexibilité dans la conception d'un site. Ici, il s'agissait de l'API de <a
                                href="https://developers.deezer.com/api" target="_blank" class="inline-link" rel="noopener">Deezer</a>.</p>
                        <p class="py-3 px-4"> Sur ce projet, j'ai d'abord effectué la structuration de la page puis l'intégration du header et du footer. Ensuite, je me suis intéressé à l'API en elle même et au fonctionnement de la requête, avec la méthode 'fetch' puis avec la création d'un objet 'XMLHttpRequest'. Enfin, c'est avec la méthode du SDK (Software Development Tool) de Deezer que nous avons communiqué avec l'API. Ce SDK me permettra par la suite d'implémenter un lecteur afin d'écouter des extraits des musiques des Top 10.   </p>
                        <div class=" d-flex justify-content-center">
                            <a href="https://dylanc903.promo-93.codeur.online/music-band/"
                            class="btn btn-outline-info" target="_blank" rel="noopener">En voir
                            plus</a>
                        </div>
                    </div>

                </div>
            </div>
        
        
        
    </section>

    <!-- Contact-->
    <section class="contact-section">
        <div class="text-center pb-5 contact-me" id="contact">N'hésitez pas à me contacter !</div>
        <div class="container px-5 col-12 col-lg-6">
            <form method="POST" action="form/action.php" onsubmit="return validateRecaptcha();"
                class="d-flex flex-column justify-content-center">
                <input type="text" name="nom" placeholder="Votre nom" class="form-control"
                    value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
                <input type="email" name="mail" placeholder="Votre email" class="form-control"
                    value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
                <textarea name="message" placeholder="Votre message" class="form-control"
                    style="height: 10rem;"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
                <!-- <div class="g-recaptcha" data-sitekey="6Ldg9IccAAAAANuHgqtuMCHJD1FbregBFs0Vo5Hi"></div>
                <br /> -->
                <!-- I am going to work on the third version of recaptcha. Seems better. -->
                <div class="d-flex align-items-center justify-content-center mb-3">
                <input type="checkbox" name="agreement" required>
                <span class="text-white ms-2">J'accepte que mes données soient utilisées dans l'unique but de me recontacter.</span>
                </div>
                <input type="submit" value="Envoyer !" class="btn btn-info m-auto" name="mailform" />
            </form>
        </div>
    </section>
    <section class="container-fluid px-0 py-2" id="find-more">
        <div class="container">
            <div class="row findmore-elements align-items-center justify-content-center d-flex">
                <a href="https://www.linkedin.com/in/dylan-charton/" target="_blank" rel="noopener" id="linkedin"
                    class="mx-3"><img data-src="assets/img/linkedin.svg" src="assets/img/loader.png"
                        alt="Icône LinkedIn" class="lazyload"></a>
                <a href="https://github.com/DylanCharton" target="_blank" rel="noopener" id="github-findmore"
                    class="mx-3"><img data-src="assets/img/githublink.svg" src="assets/img/loader.png"
                        alt="Icône GitHub" class="lazyload"></a>
                <a href="assets/cv_dylancharton.pdf" target="_blank" rel="noopener" id="my-resume" class="mx-3"><img
                        data-src="assets/img/resume.svg" src="assets/img/loader.png" alt="Icône CV"
                        class="lazyload"></a>

            </div>
        </div>
        <a href="#accueil"><img src="assets/img/up.svg" alt="Flèche pour remonter" id="uparrow"></a>

    </section>
    <!-- Footer-->
    <footer class="footer small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Dylan Charton 2021</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous" async></script>
    <script src="js/lazysizes.min.js" async></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js" async></script>
</body>

</html>