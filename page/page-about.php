<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
require_once('../views/sections/intro-page.php');
?>

    <!-- About -->
    <section id="page-about" class="page page-about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-title">
                        <?= $page_about['title']; ?>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10">
                    <div class="page-description">
                        <?= $page_about['description']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer.php');