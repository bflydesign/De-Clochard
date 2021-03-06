<main>
<div class="row">
    <div class="col-lg-offset-2">
        <p><span class="site-title">Restaurant De Clochard</span></p>

        <p>Een impressie van onze zaak</p>

        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $images_per_page;
        $end = $start + $images_per_page;
        if ($end > $total) {
            $end = $total;
        }
        ?>

        <div class="row" id="gallery">
            <div class="hidden">
                <?php for ($i = 0; $i < $start; $i++) { ?>
                    <a class="fancybox" rel="group" href="<?php print '/upload/img/galerij/'.basename($images[$i]); ?>">
                        <img src="<?php print '/upload/.thumbs/img/galerij/'.basename($images[$i]); ?>" alt="Restaurant De Clochard"/>
                    </a>
                <?php } ?>
            </div>

            <?php for ($i = $start; $i < $end; $i++) { ?>
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <a class="fancybox" rel="group" href="<?php print '/upload/img/galerij/'.basename($images[$i]); ?>">
                        <img src="<?php print '/upload/.thumbs/img/galerij/'.basename($images[$i]); ?>" alt="Restaurant De Clochard"/>
                    </a>
                </div>
            <?php } ?>

            <div class="hidden">
                <?php for ($i = $end; $i < count($images); $i++) { ?>
                    <a class="fancybox" rel="group" href="<?php print '/upload/img/galerij/'.basename($images[$i]); ?>">
                        <img src="<?php print '/upload/.thumbs/img/galerij/'.basename($images[$i]); ?>" alt="Restaurant De Clochard"/>
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 text-left">
                <?php if ($page > 1) { ?>
                    <a href="/galerij?page=<?php print $page - 1; ?>">
                        <span class="fa fa-arrow-left"></span>
                        vorige pagina
                    </a>
                <?php } ?>
            </div>
            <div class="col-lg-6 text-right">
                <?php if ($total_pages > $page) { ?>
                    <a href="/galerij?page=<?php print $page + 1; ?>">
                        volgende pagina
                        <span class="fa fa-arrow-right"></span>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</main>