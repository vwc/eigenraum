<?php get_header(); ?>

<header>

    <div class="container galerie">

        <?php echo display_bootstrap_slider(); ?>
    </div>
        <div class="container" id="logobig"></div>
</header>

<section class="teaser">
    <div class="container">
        <h1>Wohnen . Wirken . Wohlf&uuml;hlen</h1>
        <p class="lead">
                        <?php
                        $page = get_page_by_title('Startseite-Headertext');
                        $content = apply_filters('the_content', $page->post_content);
                        echo $content;
                        ?>
        </p>
    </div>
</section>

<div class="container">
    <section class="trio-middle">
        <div class="row">
            <div class="stroke">
                <hr />
                <h2>&Uuml;BERBLICK</h2>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="/immobilienberatung">
                    <h3>SELBST<span class="dot">.</span>
                        <br />SICHER<span class="dot">.</span>
                        <br />ANKOMMEN<span class="dot">.</span>
                    </h3>
                    <div class="box-header-selbstsicher"></div>
                    <div class="box-content">
                        <h4>IMMOBILIENBERATUNG</h4>
                </a>
  <!--                      <p><span class="zitat">Sicherheit durch Beweglichkeit</span><br />
                            Immobilien sind unbeweglich – W&uuml;nsche, 
                            Anforderungen, Budget und Angebot sind agil.
                            Lassen Sie uns gemeinsam ein f&uuml;r Sie passendes 
                            Paket schn&uuml;ren – auf Ihrem Weg zur Traumimmobilie. 
                        </p>-->
                    <p>
                        <?php
                        $page = get_page_by_title('Startseite-Immobilienberatung');
                        $content = apply_filters('the_content', $page->post_content);
                        echo $content;
                        ?>
                    </p>
                    </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="/business-knigge">
                    <h3>SELBST<span class="dot">.</span>
                        <br />BEWUSST<span class="dot">.</span>
                        <br />ANKOMMEN<span class="dot">.</span>
                    </h3>
                    <div class="box-header-selbstbewusst"></div>
                    <div class="box-content">
                        <h4>BUSINESS KNIGGE</h4>
                </a>
                    <p>
                        <?php
                        $page = get_page_by_title('Startseite-Business-Knigge');
                        $content = apply_filters('the_content', $page->post_content);
                        echo $content;
                        ?>
                    </p>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="/entspannung">
                    <h3>SELBST<span class="dot">.</span>
                        <br />BESTIMMT<span class="dot">.</span>
                        <br />ANKOMMEN<span class="dot">.</span>
                    </h3>
                    <div class="box-header-selbstbestimmt"></div>
                    <div class="box-content">
                        <h4>ENTSPANNUNG</h4>
                </a>
                    <p>
                        <?php
                        $page = get_page_by_title('Startseite-Entspannung');
                        $content = apply_filters('the_content', $page->post_content);
                        echo $content;
                        ?>
                    </p>
                    </div>
            </div>
        </div>
    </section>
    <section class="trio-bottom">
        <div class="row">
            <div class="stroke">
                <hr />
                <h2>EINBLICK</h2>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="/immobilien">
                    <div class="box-header-immobilien"></div>
                    <div class="box-content">
                        <h4>IMMOBILIEN</h4>
                    <p>
                        <?php
                        $page = get_page_by_title('Startseite-Immobilien');
                        $content = apply_filters('the_content', $page->post_content);
                        echo $content;
                        ?>
                    </p>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="/dein-eigenraum">
                    <div class="box-header-kunst"></div>
                    <div class="box-content">
                        <h4>DEIN EIGENRAUM</h4>
                    <p>
                        <?php
                        $page = get_page_by_title('Startseite-Dein-Eigenraum');
                        $content = apply_filters('the_content', $page->post_content);
                        echo $content;
                        ?>
                    </p>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="/susanne-beck">
                    <div class="box-header-susanne"></div>
                    <div class="box-content">
                        <h4>SUSANNE BECK</h4>
                    <p>
                        <?php
                        $page = get_page_by_title('Startseite-Susanne-Beck');
                        $content = apply_filters('the_content', $page->post_content);
                        echo $content;
                        ?>
                    </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>