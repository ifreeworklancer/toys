<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
require_once('../views/sections/intro-page.php');
?>

    <!-- Contacts -->
    <section id="page-contacts" class="page page-contacts">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-title">
                        <?= $page_contacts['title']; ?>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10">
                    <div class="contacts-item">
                        <ul class="contacts-list">
                            <li>
                                <a href="tel:<?= phone_link($phone) ?>">
                                    <svg width="15" height="15">
                                        <use xlink:href="#phone-icon"></use>
                                    </svg>
                                    <?= $phone; ?>
                                </a>
                            </li>
                        </ul>
                        <ul class="social-list">
                            <li>
                                <a href="<?= $instagram; ?>">
                                    <svg width="20" height="20">
                                        <use xlink:href="#instagram-icon"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $viber; ?>">
                                    <svg width="20" height="20">
                                        <use xlink:href="#viber-icon"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $telegram; ?>">
                                    <svg width="20" height="20">
                                        <use xlink:href="#telegram-icon"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer.php');