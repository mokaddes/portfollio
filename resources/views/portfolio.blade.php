<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mokaddes Hosain - Software Developer | portfolio 2022</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <meta name="description" content="Mokaddes Hosain - Software Developer | portfolio " . {{date('Y')}}>
    <meta name="author" content="Mokaddes Hosain">

    {{-- <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=latin-ext"
          rel="stylesheet">

    <link href="{{ asset('assets/css/agency.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-2010060-39"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', '');
    </script>


</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><i class="fa fa-code"></i></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#page-top"><i class="fa fa-fw fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#professional"><i class="fa fa-fw fa-code"></i>
                        Professional <span class="sr-only">Skills</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#projects"><i class="fa fa-fw fa-project-diagram"></i>
                        Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#frameworks"><i class="fa fa-fw fa-briefcase"></i>
                        Frameworks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#tools"><i class="fa fa-fw fa-wrench"></i> Tools</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#personal"><i class="fa fa-fw fa-user"></i> Personal
                        <span class="sr-only">Skills</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <p class="intro-lead-in">Mokaddes Hosain</p>
            <h1 class="intro-heading text-uppercase"><strong>PHP Developer</strong></h1>
            <p>portfolio</p>
            {{-- <p class="text-muted">1.0.0-beta</p> --}}
        </div>
        <div class="py-3">
            <a class="btn btn-lg btn-outline-secondary js-scroll-trigger" href="#professional">
                <span class="sr-only">Show more</span>
                <i class="fa fa-chevron-down"></i>
            </a>
        </div>
    </div>
</header>
<section id="professional">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header">
                    <h2>Professional Skills</h2>
                    <h3>Knowledge and technologies I use to create websites and applications</h3>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/php.svg') }}" alt="PHP">
                    </div>
                    <h3 class="service-heading">PHP</h3>
                    <p class="text-muted">I use PHP&nbsp;7 language to develop web applications</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/laravel.svg') }}" alt="Laravel">
                    </div>
                    <h3 class="service-heading">Laravel</h3>
                    <p class="text-muted">I use Laravel framework to develop robust web applications</p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/html.svg') }}" alt="HTML5">
                    </div>
                    <h3 class="service-heading">HTML5</h3>
                    <p class="text-muted">I have expertise in creating semantic and accessible HTML5 markup</p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/css.svg') }}" alt="CSS3">
                    </div>
                    <h3 class="service-heading">CSS3</h3>
                    <p class="text-muted">I apply modern CSS3 techniques for styling and layout design</p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/javascript.svg') }}" alt="JavaScript">
                    </div>
                    <h3 class="service-heading">JavaScript</h3>
                    <p class="text-muted">I leverage JavaScript to create interactive and dynamic web experiences</p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/bootstrap.svg') }}" alt="Bootstrap">
                    </div>
                    <h3 class="service-heading">Bootstrap</h3>
                    <p class="text-muted">I utilize Bootstrap framework for responsive and mobile-first web development</p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/jquery.svg') }}" alt="jQuery" >
                    </div>
                    <h3 class="service-heading">jQuery</h3>
                    <p class="text-muted">I use jQuery library for simplifying DOM manipulation and AJAX interactions</p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/rest.svg') }}" alt="REST API">
                    </div>
                    <h3 class="service-heading">REST API</h3>
                    <p class="text-muted">I design and develop RESTful APIs for seamless integration of web services</p>
                </div>
            </div>

            <!-- Add more relevant skills in a similar format -->

            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/database.svg') }}" alt="Database">
                    </div>
                    <h3 class="service-heading">Database</h3>
                    <p class="text-muted">I use relational databases MySQL and MariaDB to store data</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/apache.svg') }}" alt="Apache Server">
                    </div>
                    <h3 class="service-heading">Apache Server</h3>
                    <p class="text-muted">I use Apache server to serve sites</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header">
                    <h2>Projects</h2>
                    <h3>The projects I have worked on</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <a href="https://www.knihovny.cz" title="knihovny.cz" target="_blank" rel="nofollow">
                        <img class="img-fluid d-block mx-auto img-desaturated"
                             src="/assets/img/projects/knihovny.cz.svg') }}" alt="knihovny.cz">
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <a href="https://www.inpage.cz/" title="inPage" target="_blank" rel="nofollow">
                        <img class="img-fluid d-block mx-auto img-desaturated"
                             src="/assets/img/projects/inpage.svg') }}" alt="inPage">
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <a href="https://www.zoner.eu/" title="ZONER software" target="_blank" rel="nofollow">
                        <img class="img-fluid d-block mx-auto img-desaturated" src="/assets/img/projects/zoner.svg') }}"
                             alt="ZONER software">
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <a href="https://www.zoner.cz/" title="Zoner Photo Studio" target="_blank" rel="nofollow">
                        <img class="img-fluid d-block mx-auto img-desaturated" src="/assets/img/projects/zps.svg') }}"
                             alt="Zoner Photo Studio">
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <a href="https://www.sslmarket.cz/" title="SSL market" target="_blank" rel="nofollow">
                        <img class="img-fluid d-block mx-auto img-desaturated"
                             src="/assets/img/projects/sslmarket.svg') }}" alt="SSL market">
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <a href="https://www.czechia.com/" title="Czechia" target="_blank" rel="nofollow">
                        <img class="img-fluid d-block mx-auto img-desaturated"
                             src="/assets/img/projects/czechia.svg') }}" alt="Czechia">
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <a href="http://gransy.cz/" title="Gransy" target="_blank" rel="nofollow">
                        <img class="img-fluid d-block mx-auto img-desaturated"
                             src="/assets/img/projects/gransy.svg') }}" alt="Gransy">
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <a href="http://www.langreal.cz/" title="langreal.cz" target="_blank" rel="nofollow">
                        <img class="img-fluid d-block mx-auto img-desaturated"
                             src="/assets/img/projects/langreal.svg') }}" alt="langreal.cz">
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <a href="https://www.rawmarket.cz" title="RAWmarket.cz" target="_blank" rel="nofollow">
                        <img class="img-fluid d-block mx-auto img-desaturated" src="/assets/img/projects/rawmarket.png"
                             alt="RAWmarket.cz">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="frameworks">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header">
                    <h2>Frameworks</h2>
                    <h3>On the shoulders of giants</h3>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/laravel.svg') }}" alt="Laravel">
                    </div>
                    <h4>Laravel</h4>
                    <p class="text-muted">PHP framework Laravel</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/orm.svg') }}" alt="ORM">
                    </div>
                    <h4>ORM</h4>
                    <p class="text-muted">Doctrine&nbsp;ORM, Eloquent&nbsp;ORM</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/bootstrap.svg') }}" alt="Bootstrap">
                    </div>
                    <h4>Bootstrap</h4>
                    <p class="text-muted">HTML, CSS, and JS library</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/jquery.svg') }}" alt="jQuery" >
                    </div>
                    <h4>jQuery</h4>
                    <p class="text-muted"> Javascript library</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="tools" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header">
                    <h2>Tools and principles</h2>
                    <h3>I use daily</h3>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/phpstorm.svg') }}" alt="PhpStorm IDE">
                    </div>
                    <h4>PhpStorm IDE</h4>
                    <p class="text-muted">Development Environment</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/terminal.svg') }}" alt="Terminal">
                    </div>
                    <h4>Terminal</h4>
                    <p class="text-muted">Command line</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/chrome.svg') }}" alt="Chrome">
                    </div>
                    <h4>Chrome</h4>
                    <p class="text-muted">Google Chrome Web Browser</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/git.svg') }}" alt="Git">
                    </div>
                    <h4>Git</h4>
                    <p class="text-muted">Version control system </p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/composer.svg') }}" alt="Composer">
                    </div>
                    <h4>Composer</h4>
                    <p class="text-muted">Dependency Manager for PHP</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/phpunit.svg') }}" alt="PHP Unit">
                    </div>
                    <h4>PHP Unit</h4>
                    <p class="text-muted">Unit tests</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/phpstan.svg') }}" alt="PHPStan">
                    </div>
                    <h4>PHPStan</h4>
                    <p class="text-muted">PHP Static Analysis Tool</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/rabbitmq.svg') }}" alt="RabbitMQ">
                    </div>
                    <h4>RabbitMQ</h4>
                    <p class="text-muted">Message Queuing</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/aws.svg') }}" alt="AWS">
                    </div>
                    <h4>AWS</h4>
                    <p class="text-muted">Amazon Web Services</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/oop.svg') }}" alt="OOP">
                    </div>
                    <h4>OOP</h4>
                    <p class="text-muted">Think in objects</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/dry.svg') }}" alt="DRY">
                    </div>
                    <h4>DRY</h4>
                    <p class="text-muted">Don't repeat yourself</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="mini">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header">
                    <h2>Last but not least</h2>
                    <h3>I'm familiar with&hellip;</h3>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/sql.svg') }}" alt="SQL">
                    </div>
                    <p>SQL</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/adminer.svg') }}" alt="Adminer">
                    </div>
                    <p>Adminer</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/algolia.svg') }}" alt="Algolia">
                    </div>
                    <p>Algolia</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/angular.svg') }}" alt="Angular">
                    </div>
                    <p>Angular</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/bitmaps-graphics.svg') }}" alt="Bitmaps graphics">
                    </div>
                    <p>Bitmaps graphics</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/crud.svg') }}" alt="CRUD">
                    </div>
                    <p>CRUD</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/css3.svg') }}" alt="CSS 3">
                    </div>
                    <p>CSS 3</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/design-patterns.svg') }}" alt="Design patterns">
                    </div>
                    <p>Design patterns</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/digital-ocean.svg') }}" alt="Digital Ocean">
                    </div>
                    <p>Digital Ocean</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/docker.svg') }}" alt="Docker">
                    </div>
                    <p>Docker</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/drupal.svg') }}" alt="Drupal CMS">
                    </div>
                    <p>Drupal CMS</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/elasticsearch.svg') }}" alt="Elastic Search">
                    </div>
                    <p>Elastic Search</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/firebase.svg') }}" alt="Firebase">
                    </div>
                    <p>Firebase</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/fontawesome.svg') }}" alt="Font Awesome">
                    </div>
                    <p>Font Awesome</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/github.svg') }}" alt="Github">
                    </div>
                    <p>Github</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/gitkraken.svg') }}" alt="Gitkraken">
                    </div>
                    <p>Gitkraken</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/gitlab.svg') }}" alt="Gitlab">
                    </div>
                    <p>Gitlab</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/html5.svg') }}" alt="HTML 5">
                    </div>
                    <p>HTML 5</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/illustrator.svg') }}" alt="Illustrator">
                    </div>
                    <p>Illustrator</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/java.svg') }}" alt="Java">
                    </div>
                    <p>Java</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/jenkins.svg') }}" alt="Jenkins">
                    </div>
                    <p>Jenkins</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/less.svg') }}" alt="Less">
                    </div>
                    <p>Less</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/linux.svg') }}" alt="Linux">
                    </div>
                    <p>Linux</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/mongodb.svg') }}" alt="MongoDB">
                    </div>
                    <p>MongoDB</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/node-js.svg') }}" alt="Node JS">
                    </div>
                    <p>Node JS</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/npm.svg') }}" alt="NPM">
                    </div>
                    <p>NPM</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/owasp.svg') }}" alt="OWASP">
                    </div>
                    <p>OWASP</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/photoshop.svg') }}" alt="Photoshop">
                    </div>
                    <p>Photoshop</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/php-fig.svg') }}" alt="PHP-FIG">
                    </div>
                    <p>PHP-FIG</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/python.svg') }}" alt="Python">
                    </div>
                    <p>Python</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/sass.svg') }}" alt="Sass">
                    </div>
                    <p>Sass</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/slack.svg') }}" alt="Slack">
                    </div>
                    <p>Slack</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/typescript.svg') }}" alt="TypeScript">
                    </div>
                    <p>TypeScript</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/uml.svg') }}" alt="UML">
                    </div>
                    <p>UML</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/vector-graphics.svg') }}" alt="Vector graphics">
                    </div>
                    <p>Vector graphics</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/vuejs.svg') }}" alt="Vue.js">
                    </div>
                    <p>Vue.js</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/wordpress.svg') }}" alt="Wordpress">
                    </div>
                    <p>Wordpress</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/xml.svg') }}" alt="XML">
                    </div>
                    <p>XML</p>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/xslt.svg') }}" alt="XSLT">
                    </div>
                    <p>XSLT</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="personal" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header">
                    <h2 class="section-heading text-uppercase">Personal Skills</h2>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/globe-americas.svg') }}" alt="English">
                    </div>
                    <h4>English</h4>
                    <p class="text-muted">I can read and write English</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/stopwatch.svg') }}" alt="Ready">
                    </div>
                    <h4>Ready</h4>
                    <p class="text-muted">I'm ready to&nbsp;code</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/team.svg') }}" alt="Team">
                    </div>
                    <h4>Team</h4>
                    <p class="text-muted">I'm a team player</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/heart.svg') }}" alt="Enjoy">
                    </div>
                    <h4>Enjoy</h4>
                    <p class="text-muted">I enjoy software development</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/tachometer.svg') }}" alt="Engagement">
                    </div>
                    <h4>Engagement</h4>
                    <p class="text-muted">I work in full engagement</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-body">
                    <div class="fa-stack fa-1x mb-3">
                        <img src="{{ asset('assets/icons/analytical-skills.svg') }}" alt="Analytical">
                    </div>
                    <h4>Analytical</h4>
                    <p class="text-muted">Analytical skills</p>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/in/mokaddes/" target="_blank" rel="nofollow"
                           title="My LinkedIn Profile">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/mokaddesru/" target="_blank" rel="nofollow"
                           title="My LinkedIn Profile">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <span class="copyright">&copy; 2022 | Mokaddes Hosain</span>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"
        integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<script src="{{asset('assets/js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('assets/js/contact_me.js')}}"></script>

<script src="{{asset('assets/js/agency.min.js')}}"></script>

</body>

</html>
