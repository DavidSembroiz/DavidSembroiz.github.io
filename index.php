<!DOCTYPE html>
<html>
<head>
    <title>David - Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset = "UTF-8">

    <link rel = "stylesheet" href = "css/bootstrap.min.css" >
    <link rel = "stylesheet" href = "css/styles.css">
    <link rel = "stylesheet" href = "css/font-awesome.min.css" >
    <link rel = "stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel = "stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:400,300,700">
    <script src = "https://maps.googleapis.com/maps/api/js"></script>
</head>
<body class = "index" id = "home">
    <div class = "navbar navbar-custom navbar-fixed-top">
        <div class = "container">
            <div class = "navbar-header page-scroll">
                <a href = "#home" class = "navbar-brand page-scroll">David Sembroiz</a>
                <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = ".navbar-collapse">
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
            </div>
            <div class = "navbar-collapse collapse">
                <ul class = "nav navbar-nav navbar-right">
                    <li><a class = "page-scroll" href = "#profile">Profile</a></li>
                    <li><a class = "page-scroll" href = "#resume">Resume</a></li>
                    <li><a class = "page-scroll" href = "#publications">Publications</a></li>   
                    <li><a class = "page-scroll" href = "#projects">Projects</a></li>
                    <li><a class = "page-scroll" href = "#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section id = "intro" class = "section" style = "position: relative; z-index: 0; background: none;"></section>
    <section id = "profile" class = "section">
        <div class = "container">
            <div class = "row">
                <div class = "col-md-12 headline">
                    <h2>Bio</h2>
                    <p>Short description about me.</p>
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-2 col-sm-3">
                    <img class = "profile-img" src="img/profile.jpg" alt="profile">
                </div>
                <hr class = "visible-xs">
                <div class = "col-md-2   col-sm-3">
                    <div class = "profile-widget">
                        <h3>Skillset</h3>
                        <h5>Java</h5>
                        <h5>C++</h5>
                        <h5>Python</h5>
                        <h5>Ruby on Rails<h5>
                        <h5>HTML/CSS/JS</h5>
                    </div>
                    <hr class = "visible-xs">
                </div>
                <div class = "col-md-8 col-sm-6"> 
                    <h3>Professional profile</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis ipsum ac dolor mattis sodales. Curabitur accumsan, turpis ac accumsan gravida, orci sapien efficitur lorem, consequat faucibus ipsum felis at massa. Aenean eget mattis quam. Etiam mi nisl, gravida in ultricies ac, vehicula at lorem. Nullam augue nibh, porttitor id pulvinar eu, eleifend commodo ex.
                    </p>
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-3 col-sm-6">
                    <div class = "profile-widget">
                        <ul class = "widget-social">
                            <li>
                                <a href="https://www.linkedin.com/in/david-sembroiz-ausejo-8a370489/" target="_blank">
                                    <i class = "fa fa-linkedin fa-fw"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/david.sembroiz.ausejo" target="_blank">
                                    <i class = "fa fa-facebook fa-fw"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/DavidSembroiz" target="_blank">
                                    <i class = "fa fa-github-alt fa-fw"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id ="resume" class = "callout">
        <div class="container">
            <div class = "row">
                <div class = "col-md-12 headline">
                    <h2>Resume</h2>
                    <p>My education and experience.</p>
                </div>
            </div>
            <div class ="row">
                <div class = "col-md-3">
                    <h3>Education</h3>
                </div>
                <div class = "col-md-6 col-sm-9">
                    <h4>PhD in Computer Architecture</h4>
                    <p>
                        Internet of Things (IoT) is increasingly becoming more important in our daily lives. The PhD aims to research and study
                        the current state of such world, specifically in Smart Buildings, to contribute with a new architecture ranging from the
                        physical layer up to the application. Moreover, this architecture must be scalable, interoperable and also cloud connected, to
                        link this world with the Big Data one. Once the sensor data is cloud-stored, the architecture aims to provide tools for 
                        pattern recognition inside a building so automatic actuation can be performed. To do so, Machine Learning techniques are applied.
                        Also, prediction is part of the automatic actuation for increasing user's comfort.
                    </p>
                    <hr class = "hidden-xs">
                </div>
                <div class = "col-md-3 col-sm-3">
                    <h5><i class="fa fa-graduation-cap"></i>UPC</h5>
                    <i class="fa fa-calendar"></i>2015 - Now
                    <hr class = "visible-xs">
                </div>
                <div class = "col-md-6 col-md-offset-3 col-sm-9">
                    <h4>Master in Innovation and Research in Informatics</h4>
                    <p>
                        Master specialized in research and innovation. Focused for people who want to obtain a high level of knowledge 
                        to work in a R+D+I department afterwards. I also specialized myself in Computer Networks and Distributed Systems.
                    </p>
                    <hr class = "hidden-xs">
                </div>
                <div class = "col-md-3 col-sm-3">
                    <h5><i class="fa fa-graduation-cap"></i>UPC</h5>
                    <i class="fa fa-calendar"></i>2013 - 2015
                    <hr class = "visible-xs">
                </div>
                <div class = "col-md-6 col-md-offset-3 col-sm-9">
                    <h4>Computer Science</h4>
                    <p>
                        Bachelor's degree obtained in the <i>Facultat d'Informàtica de de Barcelona (FIB).</i>
                        The degree offers a general formation in most of the areas of Informatics: High Performance Computing, 
                        Software Engineering, System Integration, Advanced Programming Techniques and Computer Networks and Operating
                        Systems. I specialized myself in Computer Networks.
                    </p>
                    <hr class = "hidden-xs">
                </div>
                <div class = "col-md-3 col-sm-3">
                    <h5><i class="fa fa-graduation-cap"></i>UPC</h5>
                    <i class="fa fa-calendar"></i>2008 - 2013
                    <hr class = "visible-xs">
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-3">
                    <h3>Certificates</h3>
                </div>
                <div class="col-md-2 col-sm-3">
                    <img src="img/coursera.png" style= "width: 95px;" alt="Header">
                </div>
                <div class = "col-md-5 col-sm-6">
                    <h4>Interactive Programming in Python</h4>
                    <p>
                        Throughout the course, simple interactive games had been built using Python
                    </p>
                    <hr class = "hidden-xs">
                </div>
                <div class = "col-md-2 col-sm-3">
                    <h5>
                        <a data-toggle="modal" data-target="#coursera-modal" style = "cursor: pointer;"><i class="fa fa-search tools"></i></a>
                        <a href="download.php?download_file=coursera_python.pdf"><i class="fa fa-download"></i></a>
                    </h5>
                    <hr class = "visible-xs">
                </div>
                <hr class = "hidden-xs">
            </div>
            <div class = "row">
                <div class="col-md-2 col-md-offset-3 col-sm-3">
                    <img src="img/udacity.png" style= "width: 95px;" alt="Header">
                </div>
                <div class = "col-md-5 col-sm-6">
                    <h4>HTML5 Game Development</h4>
                    <p>
                        Building high performace web apps
                    </p>
                    <hr class = "hidden-xs">
                </div>
                <div class = "col-md-2 col-sm-3">
                    <h5>
                        <a data-toggle="modal" data-target="#udacity-html5-modal" style = "cursor: pointer;"><i class="fa fa-search tools"></i></a>
                        <a href="download.php?download_file=udacity_html5.pdf"><i class="fa fa-download"></i></a>
                    </h5>
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-5 col-md-offset-5 col-sm-offset-3 col-sm-6">
                    <h4>Web Development</h4>
                    <p>
                        How to build a blog
                    </p>
                    <hr class = "hidden-xs">
                </div>
                <div class = "col-md-2 col-sm-3">
                    <h5>
                        <a data-toggle="modal" data-target="#udacity-webdev-modal" style = "cursor: pointer;"><i class="fa fa-search tools"></i></a>
                        <a href="download.php?download_file=udacity_webdev.pdf"><i class="fa fa-download"></i></a>
                    </h5>
                    <hr class = "visible-xs">
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-3">
                    <h3>Languages</h3>
                </div>
                <div class = "col-md-3 col-sm-4">
                    <h4>English</h4>
                    <p>
                        C1
                    </p>
                </div>
                <div class = "col-md-3  col-sm-4">
                    <h4>Spanish</h4>
                    <p>
                        Native proficiency
                    </p>
                </div>
                <div class = "col-md-3  col-sm-4">
                    <h4>Catalan</h4>
                    <p>
                        Native proficiency
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id ="publications" class = "section">
        <div class="container">
            <div class = "row">
                <div class = "col-md-12 headline">
                    <h2>Publications</h2>
                    <p>My published articles.</p>
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-3">
                    <h3>Journals</h3>
                </div>
                <div class = "col-md-7 col-sm-10">
                    <p>
                        Sergio Ricciardi, <b>David Sembroiz-Ausejo</b>, Francesco Palmieri, Germán Santos-Boada, Jordi Perelló, Davide Careglio, <i>“A hybrid load-balancing and energy-aware RWA algorithm for telecommunication networks”</i>, Computer Communications, ISSN: 0140-3664, <b>SCI index (2014): 1.695.</b>
                    </p>
                    <hr class = "hidden-xs">
                </div>
                <div class = "col-md-2 col-sm-2">
                    <h5>
                        <a href = "http://dx.doi.org/10.1016/j.comcom.2015.06.010" target = "_blank" style = "cursor: pointer;"><i class="fa fa-search tools"></i></a>
                        <a href="download.php?download_file=#"><i class="fa fa-download"></i></a>
                    </h5>
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-3">
                    <h3>Book Chapters</h3>
                </div>
                <div class = "col-md-7 col-sm-10">
                    <p>
                        <b>David Sembroiz-Ausejo</b>, Sergio Ricciardi, Davide Careglio, <i>“A novel Cloud-based IoT Architecture for Smart Building Automation”</i>, Security and Resilience in Intelligent Data-Centric Systems and Communication Networks. in press.
                    </p>
                    <hr class = "hidden-xs">
                </div>
                <div class = "col-md-2 col-sm-2">
                    <h5>
                        <a href = "#" target = "_blank" style = "cursor: pointer;"><i class="fa fa-search tools"></i></a>
                        <a href="download.php?download_file=#"><i class="fa fa-download"></i></a>
                    </h5>
                </div>
            </div>
        </div>
    </section>
    <section id ="projects" class = "callout">
        <div class="container">
            <div class = "row">
                <div class = "col-md-12 headline">
                    <h2>Projects</h2>
                    <p>Group and personal projects.</p>
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-3">
                        <h3>Java</h3>
                </div>
                <div class = "col-md-9 col-sm-12">
                    <h4><a href="https://github.com/DavidSembroiz/HyLERA" target="_blank" style = "cursor: pointer;">HyLERA<i class = "fa fa-external-link link-icon"></i></a></h4>
                   <p>
                        Simulator for the Hybrid Load balancing and Energy awareness Routing and wavelength assignment Algorithm for Telecommunication Networks.
                    </p>
                    <hr class = "hidden-xs">
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-offset-3 col-md-9 col-sm-12">
                    <h4><a href="https://github.com/DavidSembroiz/EnvironmentalInterface" target="_blank" style = "cursor: pointer;">Environmental Interface<i class = "fa fa-external-link link-icon"></i></a></h4>
                   <p>
                        Complementary application used during the PhD. The interface acts as the Middleware between the physical WSN and the Cloud by receiving sensor messages and standardizing them into JSON files. These files are then stored in the Cloud so that any application can retrieve such information.
                    </p>
                    <hr class = "hidden-xs">
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-offset-3 col-md-9 col-sm-12">
                    <h4><a href="https://github.com/DavidSembroiz/Actuator-Manager" target="_blank" style = "cursor: pointer;">Actuator Manager<i class = "fa fa-external-link link-icon"></i></a></h4>
                   <p>
                        Complementary application used during the PhD for controlling the simulated actuators and receiving the automatic actuations performed by the simulator. 
                    </p>
                    <hr class = "hidden-xs">
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-3">
                        <h3>C/C++</h3>
                </div>
                <div class = "col-md-9 col-sm-12">
                    <h4><a href="https://github.com/DavidSembroiz/XM1000" target="_blank" style = "cursor: pointer;">XM1000 Sensor Software<i class = "fa fa-external-link link-icon"></i></a></h4>
                   <p>
                    Software made for the <a href= "https://www.advanticsys.com/ target="_blank" style = "cursor: pointer;">AdvanticSys</a> XM1000 mote modules.
                    </p>
                    <hr class = "hidden-xs">
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-3">
                        <h3>Ruby on Rails</h3>
                </div>
                <div class = "col-md-9 col-sm-12">
                    <h4>
                        <a href="https://github.com/DavidSembroiz/Photobook" target="_blank" style = "cursor: pointer;">Photobook<i class = "fa fa-external-link link-icon"></i></a>
                        <a href = "https://photobookbeta.herokuapp.com/" target="_blank" style = "cursor: pointer;""><i class="fa fa-desktop demo-icon" aria-hidden="true"></i></a>
                    </h4>
                   <p>
                    Instagram-like application made to learn the basics of Ruby on Rails.
                    </p>
                    <hr class = "hidden-xs">
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-3">
                        <h3>Python</h3>
                </div>
                <div class = "col-md-9 col-sm-12">
                    <h4><a href="https://github.com/DavidSembroiz/AlienInvasion" target="_blank" style = "cursor: pointer;">Alien Invasion<i class = "fa fa-external-link link-icon"></i></a></h4>
                   <p>
                    A basic version of the well-known alien scape game made with Pygame.
                    </p>
                    <hr class = "hidden-xs">
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-3">
                        <h3>Android</h3>
                </div>
                <div class = "col-md-9 col-sm-12">
                    <h4><a href="https://github.com/DavidSembroiz/Asteroids" target="_blank" style = "cursor: pointer;">Asteroids<i class = "fa fa-external-link link-icon"></i></a></h4>
                    
                   <p>
                        Asteroids game for Android created by following an online course.
                    </p>
                    <hr class = "hidden-xs">
                </div>
            </div>
            <!--<div class = "col-md-4 col-sm-6">
                <div class = "project-item">
                    <div class = "project-item-img">
                        <img src = "img/background.jpg" alt>
                    </div>
                    <div class = "project-item-desc">
                    </div>
                </div>
            </div>
            <div class = "col-md-4 col-sm-6">
                <div class = "project-item">
                    <div class = "project-item-img">
                        <img src = "img/geant.jpg" alt>
                    </div>
                    <div class = "project-item-desc">
                    </div>
                </div>
            </div>
            <div class = "col-md-4 col-sm-6">
                <div class = "project-item">
                    <div class = "project-item-img">
                        <img src = "img/geant.jpg" alt>
                    </div>
                    <div class = "project-item-desc">
                    </div>
                </div>
            </div>
        </div>-->
    </section>
    <section id = "contact" class = "section">
        <div class = "container">
            <div class = "row">
                <div class = "col-md-12 headline">
                    <h2>Contact</h2>
                    <p>Email me or give me a ring.</p>
                </div>
                <div class = "col-md-6">
                    <ul class = "list-group">
                        <li class = "list-header">
                            <a href="http://www.upc.edu/?set_language=en" target="_blank"><img src="img/upc_logo.png" style= "width: 60px; height=60px" alt="image"></a>
                            UPC BarcelonaTech
                        </li>
                        <li class = "list-item">
                            <i class = "fa fa-fw fa-map-marker"></i>
                            Jordi Girona 1-3, Barcelona 08034 (Spain)
                        </li>
                        <li class = "list-item">
                            <i class = "fa fa-fw fa-building-o"></i>
                            D6-008
                        </li>
                        <li class = "list-item">
                            <i class = "fa fa-fw fa-phone"></i>
                            +34 93 401 71 82
                        </li>
                        <li class = "list-item">
                            <i class = "fa fa-fw fa-envelope"></i>
                            <a href="mailto:">sembroiz (AT) ac.upc.edu</a>
                        </li>
                        <li class = "list-item">
                            <i class = "fa fa-fw fa-envelope"></i>
                            <a href="mailto:">david.sembroiz (AT) gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class = "col-md-6 col-sm-">
                    <div id = "map-canvas"></div>
                </div>
            </div>
        </div>
    </section>
    <footer id = "footer">
        <div class = "container">
            <div class = "col-md-12">
                <p class = "copy">
                    © 2017 David, All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>
    
    <script src = "js/jquery.min.js"></script>
    <script src = "js/jquery.easing.min.js"></script>
    <script src = "js/jquery.validate.min.js"></script>
    <script src = "js/jquery.form.min.js"></script>
    <script src = "js/jquery.backstretch.min.js"></script>
    <script src = "js/bootstrap.min.js"></script>
    <script src = "js/main.js"></script>
</body>
</html>