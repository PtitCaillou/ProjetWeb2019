@yield('body')
       <h2>ELEMENTS LES PLUS VENDUS</h2>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="goodies">
      <img class="d-block w-100" src="images/pullCesi.jpg" alt="...">
        </div>
    </div>
    <div class="carousel-item">
        <div class="goodies">
      <img class="d-block w-100" src="images/goodies-bde.jpg" alt="...">
        </div>
    </div>
    <div class="carousel-item">
        <div class= "goodies">
      <img class="d-block w-100" src="images/mug-bde.jpg" style="height: 100%;" alt="...">
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>