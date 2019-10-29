<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
require_once('../views/sections/intro-page.php');
?>

    <!-- Reviews -->
    <section id="page-reviews" class="page page-reviews">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-title">
                        <?= $page_reviews['title']; ?>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="reviews-slider">
                        <?php foreach ($page_reviews['slider'] as $item) : ?>
                            <div class="reviews-slider-item">
                                <img src="<?= $item; ?>" alt="title">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="slider-arrow slider-arrow--reviews">
                        <div class="slider-arrow-item slider-arrow-item--prev">
                            <svg width="20" height="20">
                                <use xlink:href="#arrow-prev"></use>
                            </svg>
                        </div>
                        <div class="slider-arrow-item slider-arrow-item--next">
                            <svg width="20" height="20">
                                <use xlink:href="#arrow-next"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer.php');