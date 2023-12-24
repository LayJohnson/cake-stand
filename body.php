<style type="text/css">
.btn-custom {
background-color: #A627D0 
color: #fff; 
border: none; 
border-radius: 10px; 
}    

.card {
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
transition: transform 0.3s, box-shadow 0.3s; 
}

.card:hover {
transform: scale(1.05); 
box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); 
}
.carousel-item img {
width: 100%; 
height: auto; 
}

</style>
<body >

<!-- Contenedor del slider -->
<div class="container-fluid">
<div class="row">
<!-- Carrusel de imágenes -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
<div class="carousel-indicators">
<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
aria-label="Slide 2"></button>
<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
aria-label="Slide 3"></button>
<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
aria-label="Slide 4"></button>
</div>
<div class="carousel-inner">
<div class="carousel-item active" data-bs-interval="2000">
<div class="col-7 mx-auto"> <!-- Centrar la imagen -->
<img src="imagen/grasita_fina.jpeg" class="d-block w-100 img" alt="..."> <!-- Agrega la clase "img" aquí -->
<div class="carousel-caption d-none d-md-block">
    <h5> Tenis para vestir drip</h5>
    <p>🇺🇸 Puro tenis de los United States</p>
</div>
</div>
</div>

<div class="carousel-item" data-bs-interval="2000">
<div class="col-7 mx-auto"> <!-- Centrar la imagen -->
<img src="imagen/tenis1.jpeg" class="d-block w-100 img" alt="..."> <!-- Agrega la clase "img" aquí -->
<div class="carousel-caption d-none d-md-block">
    <h5> Se ven bien largos</h5>
    <p> No se cómo arreglarlo</p>
</div>
</div>
</div>

<div class="carousel-item" data-bs-interval="2000">
<div class="col-7 mx-auto"> <!-- Centrar la imagen -->
<img src="imagen/tenis2.jpeg" class="d-block w-100 img" alt="..."> <!-- Agrega la clase "img" aquí -->
<div class="carousel-caption d-none d-md-block">
    <h5> Estos sí se ven bien</h5>
    <p> 3000$</p>
</div>
</div>
</div>

<div class="carousel-item" data-bs-interval="2000">
<div class="col-7 mx-auto"> <!-- Centrar la imagen -->
<img src="imagen/tenis3.jpeg" class="d-block w-100 img" alt="..."> <!-- Agrega la clase "img" aquí -->
<div class="carousel-caption d-none d-md-block">
    <h5> Originales, no fake</h5>
    <p> 1000$</p>
</div>
</div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Anterior</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
data-bs-slide="next">
<span class="carousel-control-next-icon" ariahidden="true"></span>
<span class="visually-hidden">Siguiente</span>
</button>
</div>
</div>
</div>

<hr>
<!-- Contenido principal -->
<div class="container-fluid">
<div class="row">
<!-- Espacio para contenido adicional -->
<div class="col-md-4 offset-md-4 text-center">
<h3 class="tituloP border border-white rounded text-center" style="margin: 0;">Calidad Grasita ✔️</h3>

<h3><p class="tituloPB">Área de compras </p></h3>
<div style="margin-top: 50px;">
<a href="http://localhost/TrabajosenClase/compras.php" class="btn btn-custom" style="width: 90%; font-size: 3em;">Comprar</a>

</div>
</div>
</div>
</div>

<!-- Tarjetas de productos -->
<div class="container-fluid" style="margin-top: 300px">
<div class="row">
<div class="col-3">
<div class="card" style="width: 18rem;">
<img src="imagen/tenis1.jpeg" class="card-img-top" alt="Tenis 1" style="height: 300px;">
<div class="card-body">
<h5 class="card-title">Tenis 1</h5>
<p class="card-text">Adidas Feik</p>
<a href="http://localhost/TrabajosenClase/compras.php?tipo=1" class="btn btn-primary">Más info</a>
</div>
</div>
</div>
<div class="col-3">
<div class="card" style="width: 18rem;">
<img src="imagen/tenis2.jpeg" class="card-img-top" alt="Tenis 2" style="height: 300px;">
<div class="card-body">
<h5 class="card-title">Tenis 2</h5>
<p class="card-text">Supra Sin Faro</p>
<a href="http://localhost/TrabajosenClase/compras.php?tipo=2" class="btn btn-primary">Más info</a>
</div>
</div>
</div>
<div class="col-3">
<div class="card" style="width: 18rem;">
<img src="imagen/tenis3.jpeg" class="card-img-top" alt="Tenis 3" style="height: 300px;">
<div class="card-body">
<h5 class="card-title">Tenis 3</h5>
<p class="card-text">Mclareen para pies</p>
<a href="http://localhost/TrabajosenClase/compras.php?tipo=3" class="btn btn-primary">Más info</a>
</div>
</div>
</div>
<div class="col-3">
<div class="card" style="width: 18rem;">
<img src="imagen/tenis4.jpeg" class="card-img-top" alt="Tenis 4" style="height: 300px;">
<div class="card-body">
<h5 class="card-title">Tenis 4</h5>
<p class="card-text">Nike</p>
<a href="http://localhost/TrabajosenClase/compras.php?tipo=4" class="btn btn-primary">Más info</a>
</div>
</div>
</div>
</div>
</div>

<hr>
<div class="container-fluid">
<div class="row">
<div class="col-8">
<video autoplay loop muted="muted" width="100%">
<source src="video/vid1.mp4" type="video/mp4">
</video>
</div>
<div class="col-4 text-end">
<h3 class="tituloP border border-white rounded">Somos las 3 B</h3>
<p class="tituloPB">Tenis de calidad😄</p>
<div align="center" style="margin-top: 50px;">
<a href="bina.php" class="btn btn-success" style="width: 90%; font-size: 3em;">Bina</a>
</div>
</div>
</div>
</div>

</body>

