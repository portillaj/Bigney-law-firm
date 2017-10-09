<?php include 'header.php';?>


<!--ATTORNEY SECTION -->
<secion class="attorneys">
    <div class="container">
        <h2 class="text-center display-3 mt-5 mb-5">Our Attorneys</h2>
        <div class="row text-center">
            <div class="col-lg-6 bg-dark text-center">
                <img class="david" src="img/attorney-1.png" />
                <h3 class="mt-4">David R. Bigney</h3>
                <p class="job d-inline">Attorney</p>
                <hr class="break" />
                <div class='text-center'>

                    <p class="attorney-bio">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            </div>
            <div class="col-lg-6">
                <img class="david" src="img/attorney.png" />
            </div>
        </div>
    </div>
</secion>


<!-- NEW/MEDIA SECTION -->
<section class="news-section">
    <div class="container pt-4">
        <div class="d-flex justify-content-around" >
        <?php foreach ($newsImages as $news) : ?>
            <img class="news-img" src="img/<?= $news; ?>"/>
        <?php endforeach ?>
</section>


<?php include 'footer.php';?>
