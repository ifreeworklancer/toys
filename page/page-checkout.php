<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
require_once('../views/sections/intro-page.php');
?>

    <!-- checkout -->
    <section id="page-checkout" class="page page-checkout">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-title">
                        <?= $page_checkout['title']; ?>
                    </h1>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer.php');