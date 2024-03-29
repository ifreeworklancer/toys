<!-- Intro Page -->
<section id="intro">
    <div class="intro-slider">
        <?php foreach ($intro['slider'] as $item) : ?>
            <div class="intro-slider-item">
                <a href="#">
                    <figure style="background-image: url('<?= $item; ?>');"></figure>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="slider-arrow slider-arrow--intro">
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
</section>
