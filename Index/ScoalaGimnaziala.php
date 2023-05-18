<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Școala Gimnazială Alexandru Podoleanu</title>
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Custom CSS-->
    <link rel="stylesheet" href="./style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>



<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <button class="go-top-btn">
        <img src="../Imagini/pencil-arrow.png" alt="arrow up">
    </button>
    <section class="header">

        <nav>
            <a href="./ScoalaGimnaziala.php"><img src="../Imagini/logo-bgremove.png"></a>


            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">Acasă</a></li>
                    <li><a href="#about">Despre noi</a></li>
                    <li><a href="#project">Proiecte</a></li>
                    <li><a href="#galerie">Galerie</a></li>
                    <li><a href="#program">Program</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>

        </nav>

        <div class="text-box">
            <h1>Școala Gimnazială ,,Alexandru Podoleanu"</h1>
            <p>Valorile dominante sunt: egalitarism, cooperare, muncă în echipă, respect reciproc, atașament față de
                copii, respectul pentru profesie, libertate de exprimare, receptivitate la nou, creativitate,
                entuziasm,
                dorința de afirmare. </p>
            <a href="../LogRegister/LoginPage.php" class="hero-btn">Conectează-te</a>

        </div>

    </section>
    <!--Despre noi section-->
    <section id="about" class="about">

        <h1>Despre noi</h1>
        <p>Școala “Alexandru Podoleanu” este școala care va forma fiecărui elev deprinderile și capacitățile
            necesare continuării studiilor în colegii, licee și școli profesionale pentru a deveni competent și
            autonom.</p>
        <div class="row">
            <div class="course-col">
                <h3>MISIUNEA</h3>
                <p><br>Şcoala Gimnazială “Alexandru Podoleanu” este şcoala deschisă fiecărui elev pentru dezvoltarea
                    sa personală spre a avea şanse egale de educaţie şi cultură.
                </p>
            </div>
            <div class="course-col">
                <h3>VIZIUNEA</h3>
                <p>Este școala care va căuta, va recunoaște și va dezvolta aptitudinile fiecărui elev pentru a fi
                    capabil să se adapteze unei societăți dinamice, căreia să-i respecte valorile cultural, morale
                    și democratice.</p>
            </div>
            <div class="course-col">
                <h3>DEVIZA

                </h3>
                <p><br>„NU ÎNVĂȚĂM PENTRU ȘCOALA, ÎNVĂȚĂM PENTRU VIAȚĂ!”</p>
            </div>
        </div>


    </section>

    <!--Proiecte section-->
    <section id="project" class="project">
        <h1>Proiecte importante ale școlii</h1>
        <p>Învățarea trebuie să treacă dincolo de zidurile casei, încorporând discipline și activități complexe care
            să-i ajute pe elevi să se integreze intr-o societate aflată în continuă schimbare.</p>
        <div class="project-box">
            <div class="projects">
                <div class="card card1">
                    <div class="card-content">
                        <h5>Prezentare EuCodez</h5>
                    </div>
                </div>
                <div class="card card2">
                    <div class="card-content">
                        <h5>Erasmus</h5>
                    </div>
                </div>
                <div class="card card3">
                    <div class="card-content">
                        <h5>Cycling Day</h5>
                    </div>
                </div>
                <div class="card card4">
                    <div class="card-content">
                        <h5>Info Lab</h5>
                    </div>
                </div>
                <div class="card card5">
                    <div class="card-content">
                        <h5>Robotics</h5>
                    </div>
                </div>
                <div class="card card6">
                    <div class="card-content">
                        <h5>Painting it together</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--Carusel de imagini-->
    <section id="galerie" , class="galerie">
        <h1>Galerie</h1>
        <p>,,Nu zidurile fac o școală, ci spiritul care domnește în ea." Regele Ferdinand I</p>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section id="galerie" class="carouselExampleRide">
                        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../Imagini/carousel/scpodoleni.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../Imagini/carousel/hol.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../Imagini/carousel/cancelarie.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../Imagini/carousel/scoala.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </section>




    <!--Program-->

    <section id="program" class="program">
        <h1>Programul școlii</h1>
        <p class="program-info">Luni-Vineri: 8:00-14:00</p>
        <p class="program-info">Secretariat: Luni-Vineri: 8:00-15:00</p>
    </section>

    <!--Contact-->
    <section id="contact" class="contact">
        <h1>Contact</h1>
        <p class="contact-info">Director: +400765453632</p>
        <p class="contact-info">Secretariat: 0233266255</p>
        <p class="contact-info">Contabilitate: 0233266254</p>

        
    </section>

    

    <footer>
        <div class="footer-content">
            <h3>Școala Gimnazială ,,Alexandru Podoleanu"</h3>
            <p>str. Speranței, nr. 4, Podoleni</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>



            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; 2023 Școala Gimnazială ,,Alexandru Podoleanu" .designed by <span>Vladina
                    Surdu</span></p>
        </div>
    </footer>

    <!--JavaScript for Toggle Menu-->
    <script src="index.js">
    </script>
    <!--Jquery pentru smooth scrolling-->
    <script>
        $(document).ready(function () {
            $("a").on('click', function (event) {

                if (this.hash !== "") {
                  
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {
                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>

</body>

</html>