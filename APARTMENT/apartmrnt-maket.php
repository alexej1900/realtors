<div class="house-item mb-4 col-12 col-md-6">
    <div id="carouselExampleControls<?php echo $forms["id"];?>" class="carousel slide" data-interval="false" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item carousel-item-1 active">
                <img src="<?php echo $forms["foto1"];?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item carousel-item-2">
                <img src="<?php echo $forms["foto2"];?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item carousel-item-3">
                <img src="<?php echo $forms["foto3"];?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item carousel-item-4">
                <img src="<?php echo $forms["foto4"];?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls<?php echo $forms["id"];?>" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls<?php echo $forms["id"];?>" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="house-descr">
        <p><?php echo $forms["description"];?></p>
    </div>
    <a class="btn btn-secondary btn-lg btn-block" href="apartmentItem.php?id=<?php echo $forms['id'];?>" role="button">ПОДРОБНЕЕ</a>
    
</div>