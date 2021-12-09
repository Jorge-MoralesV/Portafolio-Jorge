<!DOCTYPE html>
<html lang="en">

<head class="fondo">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Jorge</title>

    <meta name="description" content="">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>

<body>

    <header>
        <div>
            <div>
                <div class="icono"> <a href="#id-inicio"><img src="assets/img/iconocurso.png" alt="icono" height="50px"></a> </div>
                <nav class="header-content" id="show-menu">
                    <a href="#id-inicio">Beginning</a>
                    <a href="#id-sobre-mi">About me</a>
                    <a href="#id-habilidades">Skills</a>
                    <a href="#id-portafolio">Portfolio</a>
                    <a href="#id-contacto">Contact</a>
                </nav>
            </div>
            <div id="icon-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!--Inicio-->
    <div id="id-inicio" class="inicio">
        <p class="p-inicio">
            <img class="inicio-img" src="assets/img/featured.png" alt="yo">
            Hello, I'm <br><span style="color:#5869DA;">Jorge </span>
        </p>
    </div>

    <!--Sobre mi-->
    <div id="id-sobre-mi" class="cont-sobre-mi">

        <div class="sobre-encabezado1">
            <h1 class="sub-titulo1">About me</h1>
        </div>

        <div class="cont-yo">
            <img class="yo-img" src="assets/img/yo2.jpeg" alt="yo">
            <p class="contenido-yo">
                My name is Jorge Morales Viveros, I am currently a student of the career in computer systems engineering, I specialize in the areas of Frontend and Backend. By working as a team I have initiative and proactivity, which allows me to analyze and create solutions favoring the progress of the projects contributing my ideas at opportune or decisive moments.
            </p>
            <button class="btn-cv" type="button" onclick="location.href='https://drive.google.com/file/d/1RYz57nFFRte9zrDQj-i7MzjiQGJkakOM/view?usp=sharing';" target="_blank">
                See CV
            </button>
        </div>

        <div class="cont-titulos">
            <h1 class="titulo-estudios">Studies</h1>
            <div>
                <div class="cont-isc">
                    <img class="isc-img" src="assets/img/isc.png" alt="isc">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Computer Systems<br>Engineering</p>
                            <p class="card-fecha">2017 / Present</p>
                            <p class="card-text">Higher Technological Institute of El Mante</p>
                        </div>
                    </div>
                </div>

                <div class="cont-mct">
                    <img class="mct-img" src="assets/img/mecatronica.png" alt="mecatronica">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Mechatronics<br>Technician</p>
                            <p class="card-fecha">2014 / 2017</p>
                            <p class="card-text">Industrial and Service Technology Baccalaureate Center No. 15</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Habilidades-->
    <div id="id-habilidades">
        <div class="sobre-encabezado2">
            <h1 class="sub-titulo2">Skills</h1>
        </div>
        <div class="cont-titulos">
            <h1 class="titulo-estudios"> Soft Skills </h1>
            <div>
                <ul class="cont-soft">
                    <li>
                        Creative
                    </li>
                    <li>
                        Organized
                    </li>
                    <li>
                        Teamwork
                    </li>
                    <li>
                        Analyst
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <h1 class="cont-habilidades">
                These are some languages and tools that I have used the most during the development of projects
            </h1>
            <div class="cont-lista">
                <div>
                    <p>
                        <li>Languages:</li>
                    </p>
                    <ul class="lista-leng">
                        <li> <img src="assets/img/lenguajes/java.png" alt="java"></li>
                        <li> <img src="assets/img/lenguajes/csharp.png" alt="c#"></li>
                        <li> <img src="assets/img/lenguajes/html5.png" alt="html5"></li>
                        <li> <img src="assets/img/lenguajes/css.png" alt="css3"></li>
                        <li> <img src="assets/img/lenguajes/python.png" alt="python"></li>
                    </ul>
                </div>
                <p>
                    <li>Tools:</li>
                </p>
                <ul class="lista-leng">
                    <li> <img src="assets/img/lenguajes/vs.png" alt="vs"></li>
                    <li> <img src="assets/img/lenguajes/sql.png" alt="sql"></li>
                    <li> <img src="assets/img/lenguajes/android.png" alt="android"></li>
                    <li> <img src="assets/img/lenguajes/xd.png" alt="xd"></li>
                    <li> <img src="assets/img/lenguajes/git.png" alt="git"></li>
                </ul>
            </div>

        </div>
    </div>
    </div>


    <!--Portafolio-->
    <div id="id-portafolio">
        <div class="sobre-encabezado3">
            <h1 class="sub-titulo3">Portfolio</h1>
        </div>
        <div class="card-1">
            <h1 class="titulo-estudios">
                Academic experience
            </h1>
            <h2 class="desc-port">
                These are some projects carried out during my academic training
            </h2>
            <div clas="cards">
                <div class="card-p1">
                    <img src="assets/img/turis.png" alt="">
                    <div class="card-body-p">
                        <h5 class="card-title-p"><span style="color:#054E4C;">Turisteca</span></h5>
                        <p class="card-text-p">Tourism consultation application developed in Java with Android Studio</p>
                    </div>
                </div>
                <div class="card-p1">
                    <img src="assets/img/nutri.png" alt="">
                    <div class="card-body-p">
                        <h5 class="card-title-p"><span style="color:#7BC144;">NutriAdvice</span></h5>
                        <p class="card-text-p">BMI calculation system that recommends prescriptions according to the result developed in C# with VS</p>
                    </div>
                </div>
                <div class="card-p1">
                    <img src="assets/img/food.png" alt="">
                    <div class="card-body-p">
                        <h5 class="card-title-p"><span style="color:#FFD400;">AppFood</span></h5>
                        <p class="card-text-p">Application for the sale of food for small businesses developed in Java with Android Studio</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!--Contact-->
    <div id="id-contacto">
        <div class="sobre-encabezado4">
            <h1 class="sub-titulo4">Contact me</h1>
        </div>
        <div class="cont-contac">
            <h1 class="titulo-estudios">
            For more information please contact
            </h1>
            <div class="todo-contacto">
                <ul>
                    <li>
                        <div>
                            <div class="contacto">
                                <p>
                                    <i class="fas fa-mobile"></i>
                                <p>8311832696</p>
                                </p>
                                <br>
                                <p>
                                    <i class="fas fa-envelope"></i>
                                <p><a href="mailto:jorgemoralesv99@gmail.com" target="_blank">jorgemoralesv99@gmail.com</a> </p>
                                </p>
                            </div>
                            <div class="redes">
                                <ul>
                                    <a href="https://www.facebook.com/jorge.moralesviv/" target="_blank">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/moralesv_jorge" target="_blank">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                    <a href="https://www.instagram.com/jorge_mviveros/?hl=es" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/jorge-morales-viveros-02b934107/" target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a href="https://github.com/Jorge-MoralesV" target="_blank">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="contacto-msj">
                            <div>
                                <div>
                                    <input class="nombre" type="text" placeholder="Enter your name" required>
                                </div>
                                <div>
                                    <input class="correo" type="email" placeholder="Enter your email" required>
                                </div>
                                <div>
                                    <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Leave a message"></textarea>
                                </div>
                            </div>
                            <button class="btn-contact" type="button" onclick="" target="_blank">
                                Send
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/funcion.js"></script>

</body>



</html>