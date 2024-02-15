<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Illidaris</title>
  <!-- Estilos -->
  <link rel="stylesheet" href="css/styles.css">
  <!-- Icon -->
  <link rel="icon" href="assets/images/logo.png">
  <!-- Links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://kit.fontawesome.com/df283a506e.js" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">
  <!-- /////////////////////////////////////////////////////////////////////////// -->
  <!-- ***************** INICIO DE LA SECCIÓN DEL HEADER ***************** -->
  <header>
    <nav class="fixed-top navbar navbar-expand-lg fondo" data-bs-theme="dark">
      <div class="container-fluid">

        <a href="#inicio" class="navbar-brand">
          <img src="assets/images/logo.png" alt="" height="64">
        </a>

        <!-- Button trigger modal -->
        <!-- <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reproductor">
          <span><i class="bi bi-music-note"></i></span>
        </button> -->

        <button class="btn player" onclick="back()">
          <span>
            <i class="bi bi-skip-start-circle-fill"></i>
          </span>
        </button>
        <!-- Botón play/pause -->
        <button class="btn player" onclick="player()">
          <span>
            <i id="player" class="bi bi-pause-circle-fill"></i>
          </span>
        </button>
        <!-- Botón next -->
        <button class="btn player" onclick="next()">
          <span>
            <i class="bi bi-skip-end-circle-fill" role="button"></i>
          </span>
        </button>
        <!-- <i onclick="hi()" class="bi bi-volume-up-fill"></i> -->
        <input type="range" onchange="controlarVolumen()" class="volume" min="0" max="100" value="40" id="volumen">

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link-text" href="#Illidaris">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link-text" href="#Stores">Stores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link-text" href="#Subastas">Subastas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link-text" href="#ListaEstafadores">Lista de Estafadores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link-text" href="#Alianza">Alianza</a>
            </li>
            <li class="nav-item">
              <a class="nav-link-text" href="#Streaming">Streaming</a>
            </li>
            <li class="nav-item">
              <a class="nav-link-text" href="#Memes">Memes</a>
            </li>

            <li class="nav-item">
              <a class="nav-link-text" href="#Bosting">Bosting</a>
            </li>

            <li class="nav-item">
              <a class="nav-link-text" href="#Torneos">Torneos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link-text" href="#Sorteos">Sorteos</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>

  </header>
  <!-- ***************** FIN DE LA SECCIÓN DEL HEADER ***************** -->
  <!-- /////////////////////////////////////////////////////////////////////////// -->
  <!-- /////////////////////////////////////////////////////////////////////////// -->
  <!-- ***************** INICIO DE LA SECCIÓN PRINCIPAL DEL CONTENIDO ***************** -->

  <section id="inicio">
    <!-- Video página principal -->
    <div class="embed-responsive video-responsive ratio ratio-21x9">
      <video class="embed-responsive-item" src="assets/videos/cinematica.mp4" autoplay loop muted playsinline style="object-fit: cover;"></video>
    </div>

    <!-- inicia modal de reproductor -->
    <div class="modal" id="reproductor">
      <div class="modal-dialog">
        <div class="modal-content bg-dark" data-bs-theme="dark">

          <div class="modal-header">
            <h5 class="modal-title">Reproductor</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-md-center">
                <div class="col-md-8 d-flex justify-content-center align-items-center gap-2">
                  Botón back
                  <button class="btn player" onclick="back()">
                    <span>
                      <i class="bi bi-skip-start-circle-fill"></i>
                    </span>
                  </button>
                  Botón play/pause
                  <button class="btn player" onclick="player()">
                    <span>
                      <i id="player" class="bi bi-pause-circle-fill"></i>
                    </span>
                  </button>
                  Botón next
                  <button class="btn player" onclick="next()">
                    <span>
                      <i class="bi bi-skip-end-circle-fill" role="button"></i>
                    </span>
                  </button>
                </div>
              </div>

              <div class="row justify-content-md-center">
                <div class="col-md-8 d-flex justify-content-center align-items-center gap-2">
                  <i onclick="hi()" class="bi bi-volume-up-fill"></i>
                  <input type="range" onchange="controlarVolumen()" class="volume" min="0" max="100" value="40" id="volumen">
                </div>
              </div>

            </div>

          </div> -->


        </div>
      </div>
    </div>
    <!-- Termina modal de reproductor -->
  </section>

  <div id="img-intermedio" class="d-flex justify-content-center align-items-center gap-2">
    <img src="assets/images/img-intermedio/167511.gif" class="img-1 img-fluid" alt="Illidari">
  </div>

  <section id="Illidaris">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="card altura fondo">
            <div class="card-body img-bg" id="fondo-illi" style="min-height: 20rem;">
              <h2 class="titulo">¿Porque somos illidaris?</h2>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <p class="text-center text-white">Los Illidaris, al igual que la orden Illidari en World of Warcraft, son un tributo a aquellos
                      que sacrifican todo para proteger lo que tienen.
                      En nuestra asociación, los Illidaris, nos esforzamos por crear una comunidad sana y evitar que las personas sean
                      estafadas al realizar compras en el mundo de DotA.
                      Estamos reuniendo al mejor equipo para ofrecer servicios de venta, compra, intermediación, información del juego
                      y transmisiones en vivo. Únete a nosotros y forma
                      parte de esta orden que se considera una familia dispuesta a proteger a los suyos. También tenemos alianzas con
                      nuestra página principal,
                      la orden Stonehall, quienes son nuestros hermanos mayores y están a nuestro servicio. <br>¡Únete a los Illidaris
                      y luchemos juntos!
                    </p>
                    <div class="d-flex justify-content-center">
                      <a href="https://www.facebook.com/luisalbertoolvieracontreras" target="_blank" role="button" class="btn-illidari">
                        <i class="bi bi-facebook"></i> Facebook
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card fondo altura">
            <div class="card-body">
              <h1 class="titulo">Comunidad Illidaris</h1>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <center>
                      <img src="assets/images/logo.png" class="img-fluid" alt="Logo illidari" width="200px" />
                    </center>
                  </div>
                  <div class="col-md-6 img-bg" id="comunidad-bg">
                    <p class="card-text text-center text-white">¡Atención, aventureros! ¿Buscas un refugio donde puedas sentirte en casa? ¡Únete a la
                      comunidad Illidaris! Te esperan numerosos reinos donde hallarás tu lugar.
                      Con Dota 1, Dota 2, Heroes of Newerth, Heroes of the Storm, LoL, Mobile Legends, GunZ: The Duel, Fortnite,
                      Farlight 84, y mucho más. Además, te ofrecemos servicios para mejorar tu
                      destreza en el juego y entretenimiento, de la mano de nuestros talentosos creadores de contenido.
                      <br>¡Descubre un nuevo hogar en Illidaris!
                    </p>
                    <div class="d-flex justify-content-center">
                      <a href="https://chat.whatsapp.com/LH1rigerA7GEkGS3N7wnQp" target="_blank" role="button" class="btn-illidari">
                        <i class="bi bi-whatsapp"></i>
                        WhatsApp
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card altura fondo" style="min-height: 20rem;">
            <div class="card-body align-middle img-bg" id="dota2">
              <h2 class="titulo">Comunidad de Defense of the Ancients y Dota 2</h2>
              <p class="card-text text-center text-white">¡Saludos a los nuevos usuarios! ¡Únanse a la comunidad Illidaris para disfrutar de Defense of
                the Ancients y Dota 2! Aquí encontrarán información actualizada, tiendas,
                servicios de mejora de habilidades, intermediarios, salas de juego, desafíos y torneos. <br>¡Únete a esta
                familia dotera con Illidaris y lleva tu experiencia al siguiente nivel!
              </p>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <a href="https://www.facebook.com/groups/illidaris/?ref=share" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-facebook"></i>
                      Facebook
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://chat.whatsapp.com/JwO7Di9Uz2A2elJIfhVNKQ" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-whatsapp"></i>
                      WhatsApp
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://discord.com/invite/wMGZsb8G" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-discord"></i>
                      Discord
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
        </div>

        <div class="col-md-12">
          <div class="card altura fondo" style="min-height: 20rem;">
            <div class="card-body img-bg" id="lol">
              <h2 class="titulo">Comunidad League Of Legends</h2>
              <p class="card-text text-center text-white">¡Hola nuevos jugadores de League of Legends! ¡Bienvenidos a la comunidad! Únanse a nosotros
                en Illidaris, donde encontrarán información útil, tiendas, impulsores,
                intermediarios, grupos de juego, desafíos y torneos. Únete a nuestra familia lolera y disfruta de todo lo que
                tenemos para ofrecer. <br> ¡Nos vemos en la grieta!
              </p>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <a href="https://www.facebook.com/groups/1435721154022638/?ref=share" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-facebook"></i>
                      Facebook
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://discord.com/invite/wMGZsb8G" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-whatsapp"></i>
                      WhatsApp
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://discord.com/invite/G6TxdBb8" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-discord"></i>
                      Discord
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
        </div>

        <div class="col-md-12">
          <div class="card altura fondo" style="min-height: 20rem;">
            <div class="card-body img-bg" id="cml">
              <h2 class="titulo">Comunidad Mobile Legends</h2>
              <p class="card-text text-center text-white">¡Hola a todos los nuevos jugadores de Mobile Legends! ¡Únanse a
                nuestra vibrante comunidad de Illidaris! Aquí encontrarán información útil, tiendas, servicios de mejora de
                habilidades, intermediarios, salas de juego, desafíos y torneos emocionantes. <br> ¡Únete a nosotros y forma
                parte de esta increíble familia de jugadores!
              </p>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <a href="https://www.facebook.com/groups/751847986820688/?ref=share" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-facebook"></i>
                      Facebook
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://chat.whatsapp.com/B5KTAjiNHqbApRvLy4xFq1" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-whatsapp"></i>
                      WhatsApp
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://discord.com/invite/G6TxdBb8" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-discord"></i>
                      Discord
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
        </div>

        <div class="col-md-12">
          <div class="card altura fondo" style="min-height: 20rem;">
            <div class="card-body img-bg" id="chon">
              <h1 class="titulo">Comunidad Heroes Of Newerth</h1>
              <p class="card-text text-center text-white">Bienvenidos a la comunidad Illidaris, donde buscamos revivir el emocionante mundo de Heroes
                of Newerth.
                Aquí encontrarás una segunda familia apasionada por el juego y ansiosa por compartir esta experiencia contigo.
              </p>
              <p class="text-center text-white">Estamos comprometidos en mantener viva la llama de Heroes of Newerth, y para celebrar este compromiso,
                planeamos realizar sorteos en efectivo,
                torneos y transmisiones en directo. ¡Esperamos que te unas a nosotros en esta emocionante aventura y que juntos
                podamos hacer que este juego perdure por mucho tiempo más!</p>
              <p class="text-center text-white">¡Bienvenidos a Illidaris, donde la pasión por HoN nunca muere!</p>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <a href="https://www.facebook.com/groups/1202740754019234/?ref=share" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-facebook"></i>
                      Facebook
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://chat.whatsapp.com/FP28lePJLCeILd7DH5uC0V" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-whatsapp"></i>
                      WhatsApp
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://discord.com/invite/G6TxdBb8" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-discord"></i>
                      Discord
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
        </div>

        <div class="col-md-12">
          <div class="card altura fondo" style="min-height: 20rem;">
            <div class="card-body img-bg" id="chots">
              <h2 class="titulo">Comunidad Heroes Of The Storm</h2>
              <p class="card-text text-center text-white">¡Bienvenidos nuevos miembros a la comunidad Illidaris! Estamos emocionados de darles la
                bienvenida a nuestro mundo de Heroes of the Storm, donde somos una segunda familia dedicada a revivir este
                emocionante juego para que no quede en el olvido. Estén atentos a nuestros sorteos de dinero en dólares, torneos
                y transmisiones en vivo.
                <br>¡Únanse a nosotros para disfrutar juntos de la emoción y la competencia!
              </p>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <a href="https://www.facebook.com/groups/402405125634713/?ref=share" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-facebook"></i>
                      Facebook
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://chat.whatsapp.com/Ij2NAsnOsNTKxZQQXMdQid" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-whatsapp"></i>
                      WhatsApp
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://discord.com/invite/G6TxdBb8" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-discord"></i>
                      Discord
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
        </div>

        <div class="col-md-12">
          <div class="card altura fondo" style="min-height: 20rem;">
            <div class="card-body img-bg" id="cf">
              <h2 class="titulo">Comunidad Fortnite</h2>
              <p class="card-text text-center text-white">¡Saludos, nuevos miembros de la comunidad Illidari! ¡Bienvenidos a nuestro grupo! Aquí, somos
                más que una familia,
                somos una hermandad unida por nuestra pasión por Fortnite. Estamos comprometidos a jugar de manera competitiva,
                participar en torneos, realizar sorteos y apoyar la venta segura de recargas y cuentas para que nadie sea
                estafado. Además, contaremos con el respaldo de un streamer especializado en Fortnite. <br> ¡Juntos,
                alcanzaremos nuevas alturas en el juego y disfrutaremos de una experiencia increíble!
              </p>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <a href="https://www.facebook.com/groups/753243413334498/?ref=share" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-facebook"></i>
                      Facebook
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://chat.whatsapp.com/HxcUHMfJFsIAtJsD3bVF5Z" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-whatsapp"></i>
                      WhatsApp
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://discord.com/invite/G6TxdBb8" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-discord"></i>
                      Discord
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br><br>
        </div>

        <div class="col-md-12">
          <div class="card altura fondo" style="min-height: 20rem;">
            <div class="card-body img-bg" id="cf84">
              <h2 class="titulo">Comunidad Farlight 84</h2>
              <p class="card-text text-center text-white">Bienvenidos a nuestro grupo, donde somos más que una familia. Estamos aquí para jugar puro
                Farlight 84,
                competir, organizar torneos y sorteos. Además, apoyamos la venta segura de recargas y cuentas para que nadie sea
                estafado.
                También contaremos con el respaldo de un streamer de Fortnite.
              </p>
              <p class="text-center text-white">¡Prepárense para vivir grandes experiencias y disfrutar al máximo! Juntos, alcanzaremos nuevos logros y nos
                convertiremos
                en una fuerza imparable en el mundo de los juegos. <br>¡Bienvenidos a los Illidaris!
              </p>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <a href="https://www.facebook.com/groups/766462604932948/?ref=share" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-facebook"></i>
                      Facebook
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://chat.whatsapp.com/G4GyI9ikwsa3kZud4680nf" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-whatsapp"></i>
                      WhatsApp
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://discord.com/invite/G6TxdBb8" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-discord"></i>
                      Discord
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br><br>
        </div>

        <div class="col-md-12">
          <div class="card altura fondo" style="min-height: 20rem;">
            <div class="card-body img-bg" id="cg">
              <h2 class="titulo">Comunidad Gunz</h2>
              <p class="card-text text-center text-white">¡Bienvenidos a la comunidad Illidaris! Estamos emocionados de dar la bienvenida a nuevos
                miembros que deseen adentrarse en el mundo del juego Gunz. En Illidaris, somos una segunda familia y nos
                esforzamos por revivir este juego para que no caiga en el olvido. Estén atentos a sorteos de dinero en dólares,
                torneos y transmisiones en vivo. <br> ¡Únanse a nosotros y sean parte de esta emocionante aventura!
              </p>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <a href="https://www.facebook.com/groups/720575686710054/?ref=share" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-facebook"></i>
                      Facebook
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://chat.whatsapp.com/H7tQZQDV9beIVvshjbaaOz" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-whatsapp"></i>
                      WhatsApp
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://discord.com/invite/G6TxdBb8" class="btn-illidari" target="_blank" role="button">
                      <i class="bi bi-discord"></i>
                      Discord
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="img-intermedio" class="d-flex justify-content-center align-items-center gap-2">
    <img src="assets/images/img-intermedio/1706897615296.webp" class="img-1 img-fluid" alt="Illidari">
  </div>

  <section id="Stores">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card fondo">
            <div class="card-body">
              <h1 class="titulo">Stores de dota 2</h1>
              <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100 bg-dark">
                    <a href="https://www.facebook.com/VergilESCM2" class=" negro">
                      <img src="assets/images/store/storeillidaris.webp" class="card-img-top img-fluid" alt="..."></a>
                    <div class="card-body">
                      <h3 class="card-title text-white">Store Illidaris</h3>
                    </div>
                    <div class="card-footer">
                      <p class="text-warning">Store</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 bg-dark">
                    <a href="https://www.facebook.com/profile.php?id=61552427646853"><img src="assets/images/store/finyjake.webp" class="card-img-top img-fluid" alt="..."></a>
                    <div class="card-body">
                      <h3 class="card-title text-white">La Tiendita de Finn y Jake</h3>
                    </div>
                    <div class="card-footer">
                      <p class="text-warning">Store</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 bg-dark">
                    <a href="https://www.facebook.com/ktonydota2">
                      <img src="assets/images/store/store3.webp" class="card-img-top img-fluid" alt="..."></a>
                    <div class="card-body">
                      <h3 class="card-title text-white">Ktony dota2</h3>
                    </div>
                    <div class="card-footer">
                      <p class="text-warning" style="color: #ffc300;">Store y venta de cuentas</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 bg-dark">
                    <a href="https://www.facebook.com/profile.php?id=61553071711374">
                      <img src="assets/images/store/wanka-1.webp" class="card-img-top img-fluid" alt="..."></a>
                    <div class="card-body">
                      <h3 class="card-title text-white">Wanka Store</h3>
                    </div>
                    <div class="card-footer">
                      <p class="text-warning">Store</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 bg-dark">
                    <a href="https://www.facebook.com/profile.php?id=61553071711374">
                      <img src="assets/images/store/vortexdk.webp" class="card-img-top img-fluid" alt="..."></a>
                    <div class="card-body">
                      <h3 class="card-title text-white">Store y Venta de Cuentas</h3>
                    </div>
                    <div class="card-footer">
                      <p class="text-warning">Store</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 bg-dark">
                    <a href="https://www.facebook.com/ThisIsAperture3D/"><img src="assets/images/store/artefiguras.webp" class="card-img-top img-fluid" alt="..."></a>
                    <div class="card-body">
                      <h3 class="card-title text-white">Aperture Creations 3D Studio</h3>
                    </div>
                    <div class="card-footer">
                      <p class="text-warning">Venta de esculturas</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="img-intermedio" class="d-flex justify-content-center align-items-center gap-2">
    <img src="assets/images/fondos/20240129_212551_0000.png" class="img-1 img-fluid" alt="Illidari">
  </div>

  <section id="Subastas">
    <div class="container-fluid">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="card altura-sa fondo">
          <div class="card-body img-bg" id="subastas-ap">
            <h2 class="titulo">Subastas y Apuestas</h2>
            <p class="card-text text-center text-white">¡Bienvenidos a Subastas y Apuestas Illidaris! Nuestro servicio ofrece un espacio seguro y confiable para subastar skins y otros artículos, así como la oportunidad de participar en apuestas. Priorizamos la integridad y seguridad de todas las transacciones, permitiendo a nuestros usuarios utilizar intermediarios de otras comunidades respetadas.
              Nuestro compromiso es fomentar prácticas comerciales justas y evitar que las personas sean víctimas de estafas.<br> ¡Únete a nuestra comunidad y comercia con tranquilidad!</p>
            <div class="d-flex justify-content-center">
              <a href="https://chat.whatsapp.com/KxwN2t6Vnk1HKIa5KYjdEs" role="button" target="_blank" class="btn-illidari"><i class="bi bi-whatsapp"></i> WhatsApp</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <div id="img-intermedio" class="d-flex justify-content-center align-items-center gap-2">
          <img src="assets/images/img-intermedio/1704324336361.webp" class="img-1 img-fluid"  alt="Illidari">
        </div> -->
  <br><br>
  <section id="Bosting">
    <div class="container-fluid">
      <div class="row justify-content-md-center">
        <div class="col-md-12">
          <div class="card fondo">
            <div class="card-body">
              <h1 class="titulo">Bosting</h1>
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/boosting/dolares-ktony.webp" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/boosting/ktony-euros.webp" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/boosting/KTONY-soles.webp" class="d-block w-100 img-fluid" alt="...">
                  </div>
                </div>
                <span class="span-image">
                  <a href="https://www.facebook.com/ktonydota2" target="_blank">
                    <img src="assets/images/boosting/botonxd.webp" alt="Ktony">
                  </a>
                </span>
              </div>
              <br><br>
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/boosting/euros.webp" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/boosting/soles.webp" class="d-block w-100 img-fluid" alt="...">
                  </div>
                </div>
                <span class="span-image">
                  <a href="https://www.facebook.com/VortexDK777" target="_blank">
                    <img src="assets/images/boosting/logovortex2.webp" alt="Vortexdk">
                  </a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <br><br>
  <section id="ListaEstafadores">
    <div style="background-image: url('assets/images/estafadores/20231129_164942_0000.webp'); width: 100%; height: 900px;">
      <center>
        <h1 class="titulo">Lista de Estafadores</h1>
        <input type="text" id="searchInput" placeholder="Buscar...">
        <div id="estafadoresList" style="display: none; height: 650px;">
          <ul id="estafadoresUl">
            <!-- Aquí se llenará dinámicamente la lista de estafadores que estan almacenados en el js-->
          </ul>
        </div>
      </center>
    </div>
  </section>

  <!-- <div id="img-intermedio" class="d-flex justify-content-center align-items-center gap-2">
          <img src="assets/images/img-intermedio/20240202_194100_0000.webp" class="img-1 img-fluid"  alt="Illidari">
        </div> -->
  <br><br>
  <section id="Alianza">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card fondo">
            <div class="card-body">
              <h1 class="titulo">Alianza SpectralTemple</h1>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-5">
                    <img src="assets/images/alianza/alianza7.webp" class="img-fluid" alt="" />
                  </div>
                  <div class="col-md-7" id="Alianza-bg">
                    <p class="text-white text-white">La alianza con SpectralTemplel ha sido una verdadera bendición para los amantes de los videojuegos y la diversión en
                      línea.
                      Su página web ofrece un tesoro de información sobre videojuegos, manteniéndolos al tanto de las últimas novedades,
                      reseñas y consejos. La emoción se multiplica gracias a sus sorteos,
                      que brindan a la comunidad la oportunidad de ganar premios emocionantes. ¡Es un lugar donde la diversión nunca
                      termina! Estamos emocionados de ser parte de esta alianza que nos permite
                      disfrutar aún más de nuestro pasatiempo favorito, sabiendo que estamos en manos de expertos apasionados y
                      comprometidos.
                    </p>
                    <div class="d-flex justify-content-center">
                      <a href="https://chat.whatsapp.com/LH1rigerA7GEkGS3N7wnQp" target="_blank" role="button" class="btn-illidari">
                        <i class="bi bi-whatsapp"></i>
                        WhatsApp
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="img-intermedio" class="d-flex justify-content-center align-items-center gap-2">
    <img src="assets/images/img-intermedio/20231110.webp" class="img-1 img-fluid" alt="Illidari">
  </div>

  <section id="Streaming">
    <div class="container">
      <center>
        <h1 class="titulo">Creadores de Contenido</h1>
        <div>
          <video src="assets/videos/InShot_20240109_222321027.mp4" controls></video>
        </div>
      </center>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Doblajes Retro</p>
              <div class="icons">
                <a href="https://www.youtube.com/@Ugonce"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/vgonce.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Dota 2</p>
              <div class="icons">
                <a href="https://www.twitch.tv/quantumricktv?sr=a"><i class="bi bi-twitch"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/quantumricktv.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Dota 2</p>
              <div class="icons">
                <a href="https://www.facebook.com/VergilESCM"><i class="bi bi-facebook"></i></a>
                <a href="https://www.youtube.com/@vergilescm"><i class="bi bi-youtube"></i></a>
                <a href="https://www.twitch.tv/VergilESCM"><i class="bi bi-twitch"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/vergil.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Dota 2</p>
              <div class="icons">
                <a href="https://www.youtube.com/@khdgamer28"><i class="bi bi-youtube"></i></a>
                <a href="https://www.twitch.tv/KHD28?sr=a"><i class="bi bi-twitch"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/khg.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Dota 2</p>
              <div class="icons">
                <a href="https://www.facebook.com/profile.php?id=61555132630749&mibextid=ZbWKwL"><i class="bi bi-facebook"></i></a>
                <a href="https://www.youtube.com/@MalfurionGC"><i class="bi bi-youtube"></i></a>
                <a href="https://www.twitch.tv/malfuriongc"><i class="bi bi-twitch"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/malfuriongc.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Warcraft</p>
              <div class="icons"></div>
              <a href="https://www.youtube.com/@Warglaive"><i class="bi bi-youtube"></i></a>
            </div>
            <img src="assets/images/streaming/warglaive.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p>Hon</p>
              <div class="icons">
                <a href="https://www.youtube.com/@HoNKiller"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/honkiller.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Gunz</p>
              <div class="icons">
                <a href="https://www.youtube.com/@PitterJimenezB/videos"><i class="bi bi-facebook"></i></a>
                <a href="https://www.youtube.com/@PitterJimenezB/featured"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/pitterjimenez.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Farlight 84</p>
              <div class="icons">
                <a href="https://www.youtube.com/@locke_h2"><i class="bi bi-youtube"></i></a>
                <a href="https://www.tiktok.com/@locke_h2?_t=8inOWf1OvKP&_r=1"><i class="bi bi-tiktok"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/locke.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Farlight 84</p>
              <div class="icons">
                <a href="https://www.facebook.com/LamannFt"><i class="bi bi-facebook"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/laman.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Gunz y Fornite</p>
              <div class="icons">
                <a href="https://www.twitch.tv/jorklenis2"><i class="bi bi-twitch"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/jorklenis.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Farlight 84</p>
              <div class="icons">
                <a href="https://www.tiktok.com/@crhistian.castro?_t=8iptFLmq1zy&_r=1"><i class="bi bi-tiktok"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/cristiancastro.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">LOL</p>
              <div class="icons">
                <a href="https://www.twitch.tv/napakill?sr=a"><i class="bi bi-twitch"></i></a>
                <a href="https://www.tiktok.com/@nappakill?lang=es&is_from_webapp=1&sender_device=mobile&sender_web_id=7321078850611594784"><i class="bi bi-tiktok"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/nappa-kill.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Fornite y LOL</p>
              <div class="icons">
                <a href="https://www.twitch.tv/edikun0310?sr=a"><i class="bi bi-twitch"></i></a>
                <a href="https://www.instagram.com/edikun0310"><i class="bi bi-instagram"></i></a>
                <a href="https://www.tiktok.com/@edikun0310?lang=es&is_from_webapp=1&sender_device=mobile&sender_web_id=7321078850611594784"><i class="bi bi-tiktok"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/edin.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">LOL</p>
              <div class="icons">
                <a href="https://www.twitch.tv/xjesusmiguel17?sr=a"><i class="bi bi-twitch"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/xjesusmiguel17.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Dota 2</p>
              <div class="icons">
                <a href="https://www.facebook.com/ElTioRickEspecial"><i class="bi bi-facebook"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/tiorick.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Dota 2</p>
              <div class="icons">
                <a href="https://www.youtube.com/@VortexdkBoostingMMR"><i class="bi bi-youtube"></i></a>
                <a href="https://www.twitch.tv/merlinidk"><i class="bi bi-twitch"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/vortexdk.webp" class="card-img-bottom" alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header">
              <p class="m-0">Dota 2</p>
              <div class="icons">
                <a href="https://www.youtube.com/@HarvinGame"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
            <img src="assets/images/streaming/harvin.webp" class="card-img-bottom" alt="...">
          </div>
        </div>


      </div>
    </div>
  </section>
  <br><br>
  <!-- <div id="img-intermedio" class="d-flex justify-content-center align-items-center gap-2">
          <img src="assets/images/img-intermedio/20240202_194906_0000.webp" class="img-1 img-fluid"  alt="Illidari">
        </div> -->



  <div id="img-intermedio" class="d-flex justify-content-center align-items-center gap-2">
    <img src="assets/images/img-intermedio/giphy-3-1.gif" class="img-1 img-fluid" alt="Illidari">
  </div>


  <!-- <div id="img-intermedio" class="d-flex justify-content-center align-items-center gap-2">
          <img src="assets/images/img-intermedio/20240106_120232_0000.webp" class="img-1 img-fluid"  alt="Illidari">
        </div> -->


  <section id="Torneos">
    <h1 class="titulo">Torneos</h1>
    <div class="container-fluid">
      <div class="row justify-content-md-center">
        <div class="col-md-12">
          <div class="card fondo">
            <div class="card-body">
              <h3 class="titulo">Inscripciones</h3>
              <div class="container-fluid">
                <div class="row">
                  <!-- Sección img personaje -->
                  <div class="col-md-4 d-flex justify-content-center align-items-center gap-2">
                    <img src="assets/images/formulario-inscripcion.png" alt="Inscripciones" class="img-fluid form-image">
                  </div>

                  <!-- Sección del formulario -->
                  <div class="col-md-8 text-white">

                    <form class="row g-3" action="sendForm.php" method="post">
                      <div class="col-6">
                        <label for="inputMail" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="inputMail" name="correo" required>
                      </div>
                      <div class="col-6">
                        <label for="inputTel" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="inputTel" name="phone" required>
                      </div>
                      <div class="col-12">
                        <label for="inputSubject" class="form-label">Elige un motivo</label>
                        <select id="inputSubject" class="form-select" name="clan" required>
                          <option selected>Solicitud de clan</option>
                          <option>Solicitud de reto</option>
                          <option>Solicitud de torneo</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label for="inputCountry" class="form-label">País</label>
                        <input type="text" class="form-control" id="inputCountry" name="country" required>
                      </div>
                      <div class="col-md-4">
                        <label for="inputGame" class="form-label">Juego</label>
                        <input type="text" class="form-control" id="inputGame" name="game" required>
                      </div>
                      <div class="col-md-4">
                        <label for="inputClan" class="form-label">Nombre del clan</label>
                        <input type="text" class="form-control" id="inputClan" name="clanname" required>
                      </div>
                      <div class="col-12">
                        <label for="inputFullName" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="inputFullName" name="fullname" required>
                      </div>
                      <div class="col-12">
                        <label for="inputUser" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="inputUser" name="user" required>
                      </div>
                      <div class="col-12">
                        <label for="inputID" class="form-label">ID</label>
                        <input type="text" class="form-control" id="inputID" name="id" required>
                      </div>
                      <div id="playerFields">

                      </div>
                      <div class="col-12">
                        <button type="button" id="addPlayer" class="btn btn-outline-warning">
                          Agregar jugador
                        </button>
                      </div>

                      <br><br>
                      <div class="col-12">
                        <div class="d-grid gap-2">
                          <button type="submit" class="btn btn-warning">Enviar</button>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <center>
        <img src="assets/images/torneo.png" class="img-fluid" alt="">
      </center>
    </div>
  </section>
  <br><br>
  <!-- <div id="img-intermedio" class="d-flex justify-content-center align-items-center gap-2">
          <img src="assets/images/img-intermedio/a2836dab7db8fa8e7d81a9448c5bf4d4.webp" class="img-1 img-fluid"  alt="Illidari">
        </div> -->

  <section id="Sorteos">
    <div class="container">
      <center>
        <h1 class="titulo">Sorteos y Referencias</h1>
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-6">
              <div id="carouselExampleAutoplaying1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/sorteos/sorteo1.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/sorteos/sorteo6.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/sorteos/sorteo5.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/sorteos/sorteo4.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/sorteos/sorteo3.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/sorteos/sorteo2.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/sorteos/sorteo7.webp" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>


            <div class="col-md-6">
              <div id="carouselExampleAutoplaying2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/sorteos/sorteo1.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/sorteos/sorteo6.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/sorteos/sorteo5.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/sorteos/sorteo4.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/sorteos/sorteo3.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/sorteos/sorteo2.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/sorteos/sorteo7.webp" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>

          </div>
        </div>
      </center>
    </div>
  </section>
  <br><br><br>
  <section id="Memes">

    <div class="container">
      <center>
        <h1 class="titulo">Memes</h1>
      </center>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/memes/meme10.webp" class="card-img-top " alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/memes/meme2.webp" class="card-img-top " alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/memes/meme3.webp" class="card-img-top " alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/memes/meme5.webp" class="card-img-top " alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/memes/meme8.webp" class="card-img-top " alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/memes/meme16.webp" class="card-img-top " alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/memes/meme11.webp" class="card-img-top " alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/memes/meme12.webp" class="card-img-top " alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/memes/meme15.webp" class="card-img-top " alt="...">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/memes/meme1.webp" class="card-img-top " alt="...">
          </div>
        </div>
      </div>
    </div>

  </section>
  <br><br>



  <!-- ***************** FIN DE LA SECCIÓN PRINCIPAL DEL CONTENIDO ***************** -->
  <!-- /////////////////////////////////////////////////////////////////////////// -->
  <!-- /////////////////////////////////////////////////////////////////////////// -->
  <!-- ***************** INICIO DE LA SECCIÓN DEL FOOTER ***************** -->
  <footer id="Footer">
    <div class="footer-content">
      <img src="assets/images/logo.png" alt="Logo de la empresa">
      <p> &copy; Copyright 2024. Todos los derechos reservados. Comunidad Illidaris.</p>
    </div>
  </footer>
  <!-- ***************** FIN DE LA SECCIÓN DEL FOOTER ***************** -->
  <!-- /////////////////////////////////////////////////////////////////////////// -->
  <!-- ***************** SECCIÓN DE SCRIPTS *****************-->
  <script src="js/app.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/lista.js"></script>
  <script src="js/formulario.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>