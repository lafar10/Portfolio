<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../../images/10.png">

    <title>Lafar Ayoub | Porfolio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('../../css/welcome.css') }}" rel="stylesheet">

    <script src="{{ asset('../../js/welcome.js') }}"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>

</head>

<body >
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top shadow">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="../../images/10.png" alt="" style="width:160px;height:70px;"
                    srcset=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><i class="bi bi-house-heart text-warning"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><i class="bi bi-file-earmark-person text-warning"></i>About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skil"><i class="bi bi-box text-warning"></i> My Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#proj"><i class="bi bi-code-slash text-warning"></i> My Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#serv"><i class="bi bi-sliders text-warning"></i> My Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cont"><i class="bi bi-telephone-fill text-warning"></i>Contact Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Lafar-Ayoub-CV.pdf" download><i class="bi bi-file-pdf-fill text-warning"></i> CV</a>
                    </li>

                    <li class="nav-item" style="margin-top: 5px">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="https://github.com/lafar10" ><i class="bi bi-github text-secondary"  id="gigi"></i></a>&nbsp;
                        <a href="https://ma.linkedin.com/in/ayoub-lafar-6ab53616b/ar?trk=people-guest_people_search-card"><i class="bi bi-linkedin text-info" id="lklk"></i></a>&nbsp;
                        <a href="" ><i class="bi bi-instagram text-danger" id="inin"></i></a>&nbsp;
                        <a href="https://m.facebook.com/people/Ayoub-Lafar/100011483552380" ><i class="bi bi-facebook text-primary" id="fbfb"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <br>
        <div class="row bg-dark" id="about">


            <div class="col-lg-6">

                <img src="../../images/prof2.jpg" style="width:80%;height:100%;margin-left:70px;" id="iimmgg" >

            </div>
            <div class="col-lg-6">
                <br>
                <div id="div1">
                    <br>
                    <br>
                    <h5 id="or">Hello! I'm</h5>
                    <br>
                    <h1 id="aaa">Lafar </h1>
                    <h1 id="aaa">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ayoub</h1>
                    <br>
                    <h4 id="or">Full-Stack Laravel & React JS</h4>
                    <br>
                    <h6 id="aaa">I'm Professional Technician Informatics Development</h6>
                    <br>
                    <a href="../LAFAR_AYOUB.pdf" download class="btn btn-outline-secondary" id="down">DOWNLOAD CV</a>

                </div>
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div align="center">
        <h1 class="display-5">My Skills</h1>
        <hr style="width:75px;height:5px;">
    </div>
    <br>
    <br>
    <br>
    <div class="container" id="skil">
        <div id="carouselExampleIndicators" class="carousel slide bg-dark" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div align="center">
                        <br>
                        <br>
                        <h4 class="display-6" style="color:orange;font-style:italic;">Back-End</h4>
                        <br>
                        <h4 class="display-7 text-white">Laravel (6,7,8 | Liwewire)</h4>
                        <h4 class="display-7 text-white">ASP.Net (WFA , MVC5) <strong style="color:orange;">&</strong> ADO.Net</h4>
                        <h4 class="display-7 text-white">PHP <strong style="color:orange;">&</strong> C# <strong
                                style="color:orange;">&</strong> JavaScript</h4>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="carousel-item">
                    <div align="center">
                        <br>
                        <br>
                        <h4 class="display-6" style="color:orange;font-style:italic;">Front-End</h4>
                        <br>
                        <h4 class="display-7 text-white">ReactJS</h4>
                        <h4 class="display-7 text-white">HTML <strong style="color:orange;">&</strong> CSS</h4>
                        <h4 class="display-7 text-white">Bootstrap <strong style="color:orange;">&</strong> JQuery</h4>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="carousel-item">
                    <div align="center">
                        <br>
                        <br>
                        <h4 class="display-6" style="color:orange;font-style:italic;">DataBase</h4>
                        <br>
                        <h4 class="display-7 text-white">MySQL</h4>
                        <h4 class="display-7 text-white">SQLServer</h4>
                        <h4 class="display-7 text-white">SQLite</h4>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="carousel-item">
                    <div align="center">
                        <br>
                        <br>
                        <h4 class="display-6" style="color:orange;font-style:italic;">CMS</h4>
                        <br>
                        <h4 class="display-7 text-white">WordPress</h4>
                        <h4 class="display-7 text-white">Woo-Commerce</h4>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="carousel-item">
                    <div align="center">
                        <br>
                        <br>
                        <h4 class="display-6" style="color:orange;font-style:italic;">Other Skills</h4>
                        <br>
                        <h4 class="display-7 text-white">PostMan <strong style="color:orange;">&</strong> RestAPI <strong style="color:orange;">&</strong> Xampp <strong
                                style="color:orange;">&</strong> GitHub</h4>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div align="center">
        <h1 class="display-5" id="proj">My Projects</h1>
        <hr style="width:75px;height:5px;">
    </div>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div align="center">
                    <img src="../../images/app2.PNG" style="width:100%;height:100%" alt="" srcset="">
                    <br><br>
                    <h4 class="display-7">Cabinet Médical</h4>
                    <h5 class="display-7" style="color:goldenrod">Laravel & MySQL</h5>
                    <a href="https://github.com/lafar10/Cabinet-M-dical-Laravel" id="git"><i
                            class="bi bi-github"></i></a>
                </div>
                <br>
            </div>
            <div class="col-md-4">
                <div align="center">
                    <img src="../../images/fayaj.jpg" style="width:100%;height:100%" alt="" srcset="">
                    <br><br>
                    <h4 class="display-7">Transport</h4>
                    <h5 class="display-7" style="color:goldenrod">Laravel & MySQL</h5>
                    <a href="https://github.com/lafar10/Gestion-Transport-Laravel" id="git"><i
                            class="bi bi-github"></i></a>
                </div>
                <br>
            </div>
            <div class="col-md-4">
                <div align="center">
                    <img src="../../images/ft1.jpg" style="width:100%;height:100%" alt="" srcset="">
                    <br>
                    <br>
                    <h4 class="display-7">Fitness-Club</h4>
                    <h5 class="display-7" style="color:goldenrod">Laravel & ReactJS & MySQL</h5>
                    <a href="https://github.com/lafar10/react_JS_Salle_Sport" id="git"><i
                            class="bi bi-github"></i></a>
                </div>
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row bg-secondary">
            <div class="col-md-3" align="center">
                <br>
                <br>
                <h1 class="display-7 text-white counter">150</h1>
                <h4 class="display-7 text-white"><i class="bi bi-book"></i> TUTORIAL</h4>
                <br>
                <br>
            </div>
            <div class="col-md-3" align="center">
                <br>
                <br>
                <h1 class="display-7 text-white counter">400</h1>
                <h4 class="display-7 text-white"><i class="bi bi-file-earmark"></i> PAGES</h4>
                <br>
                <br>
            </div>
            <div class="col-md-3" align="center">
                <br>
                <br>
                <h1 class="display-7 text-white counter">10</h1>
                <h4 class="display-7 text-white"><i class="bi bi-basket"></i> Sales</h4>
                <br>
                <br>
            </div>
            <div class="col-md-3" align="center">
                <br>
                <br>
                <h1 class="display-7 text-white counter">20</h1>
                <h4 class="display-7 text-white"><i class="bi bi-file-earmark-zip-fill"></i> PROJECTS</h4>
                <br>
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div align="center">
        <h1 class="display-5">My Services</h1>
        <hr style="width:75px;height:5px;">
    </div>

    <div class="container">
        <div class="row" id="serv">
            <div class="col-md-4">
                <div align="center">
                    <img src="../../images/db.png" style="width:100%;height:300px" alt="" srcset="">
                    <br>
                    <h4 class="display-7">Database Architecture</h4>
                    <h5 class="display-7" style="color:goldenrod">Make Architecture & Modeling Databases</h5>
                </div>
                <br>
            </div>
            <div class="col-md-4">
                <div align="center">
                    <img src="../../images/cd.png" style="width:100%;height:300px" alt="" srcset="">
                    <br>
                    <h4 class="display-7">Back-End Code</h4>
                    <h5 class="display-7" style="color:goldenrod">Make Your Websites Dynamics.</h5>
                </div>
                <br>
            </div>
            <div class="col-md-4">
                <div align="center">
                    <img src="../../images/ui.png" style="width:100%;height:300px" alt="" srcset="">
                    <br>
                    <h4 class="display-7">UI Design</h4>
                    <h5 class="display-7" style="color:goldenrod">Make User Interfaces & Responsive Pages.</h5>
                </div>
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container border shadow-lg">
        <br>
        <br>
        <div align="center">
            <h1 class="display-5">Contact Me</h1>
            <hr style="width:75px;height:5px;">
        </div>
        <br>
        <br>
        <div class="row " align="center" id="cont">
            <div class="col-md-12">
                <h4 class="display-7"><i class="bi bi-envelope-check"></i>&nbsp; Ayoub_lafar@hotmail.com </h4>
                <br>
            </div>
            <div class="col-md-12">
                <h4 class="display-7"><i class="bi bi-whatsapp"></i>&nbsp; +(212) 6 23 79 35 49 </h4>
                <br>
            </div>
            <div class="col-md-12">
                <h4 class="display-7"><i class="bi bi-geo-alt"></i>&nbsp; Boulevard Mohammed V N°196, OuedZem ,
                    Morocco . </h4>
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row bg-warning">
            <div class="col-md-3" align="center">
                <br>
                <br>
                <a href="https://github.com/lafar10"><i class="bi bi-github" id="gi"></i></a>
                <br>
                <br>
                <br>
            </div>
            <div class="col-md-3" align="center">
                <br>
                <br>
                <a href="http://"> <i class="bi bi-instagram" id="in"></i></a>
                <br>
                <br>
                <br>
            </div>
            <div class="col-md-3" align="center">
                <br>
                <br>
                <a href="https://m.facebook.com/people/Ayoub-Lafar/100011483552380"> <i class="bi bi-facebook"
                        id="fb"></i></a>
                <br>
                <br>
                <br>
            </div>
            <div class="col-md-3" align="center">
                <br>
                <br>
                <a href="https://ma.linkedin.com/in/ayoub-lafar-6ab53616b/ar?trk=people-guest_people_search-card"><i
                        class="bi bi-linkedin" id="lk"></i></a>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>


    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a class="nav-link text-muted" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link text-muted" href="#about">About Me</a></li>
                <li class="nav-item"><a class="nav-link text-muted" href="#skil">My Skills</a></li>
                <li class="nav-item"><a class="nav-link text-muted" href="#proj">My Projects</a></li>
                <li class="nav-item"><a class="nav-link text-muted" href="#serv">My Services</a></li>
            </ul>
            <p class="text-center text-muted">Created With <i class="bi bi-heart-fill text-danger"></i> By Lafar Ayoub <br> LA10 Company, Inc, 20{{Carbon\Carbon::now()->format('y')}} All rights reserved &copy; .</p>
        </footer>
    </div>


    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="../../jquery.counterup.min.js"></script>
    <script>

        $(document).ready(function(){

            $('#iimmgg').fadeIn(6000)

        })

        $('.counter').counterUp({
            delay: 10,
            time: 3000
        })
    </script>
</body>

</html>
