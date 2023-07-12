<div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-50 m-auto" src="{{ asset('/') }}img/image-1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-50 m-auto" src="{{ asset('/') }}img/image-2.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-50 m-auto" src="{{ asset('/') }}img/image-3.jpg" alt="Third slide">
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
        {{-- <h1 class="text-primary mb-4">P3I JATIM</h1>
        <h1 class="text-white display-3 mb-5">Subtitle</h1> --}}