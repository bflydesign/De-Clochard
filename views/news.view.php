<div class="row">
    <div class="col-lg-offset-2">
        <span class="site-title">Restaurant De Clochard</span>

        <!-- INTRO -->
        <?php if (isset($page) && $page->getPublish() == 1) { ?>
            <article class="intro">
                <?php print $page->getContent(); ?>
            </article>
        <?php } ?>

        <!-- NIEUWSBERICHTEN -->
        <?php if (!empty($newsList)) {
            foreach ($newsList as $newsItem) { ?>
                <article class="clearfix newsitem" id="newsitem-<?php print $newsItem->getId(); ?>">
                    <span class="share">
                        <a class="fa fa-facebook sharebutton-news" id="<?php print $newsItem->getId(); ?>"></a>
                        <a class="fa fa-twitter" href="https://twitter.com/share?text=<?php print $newsItem->getTitle(); ?>&url=http://www.declochard.be/news#newsitem-<?php print $newsItem->getId(); ?>" target="_blank" class="logo-twitter"></a>
                        <a class="fa fa-envelope" href="mailto:?SUBJECT=Restaurant%20De%20Clochard&BODY=http://www.declochard.be/news#newsitem-<?php print $newsItem->getId(); ?>" class="logo-mail"></a>
                    </span>
                    <span class="title" id="news-title-<?php print $newsItem->getId(); ?>"><?php print $newsItem->getTitle(); ?></span>
                    <div class="created">
                        <span class="date" id="news-date-<?php print $newsItem->getId(); ?>"><?php print $newsItem->getDateCreated()->format('d-m-Y'); ?></span>
                        <span class="time" id="news-time-<?php print $newsItem->getId(); ?>">@<?php print $newsItem->getDateCreated()->format('H:i'); ?></span>
                    </div>
                    <span class="message" id="news-message-<?php print $newsItem->getId(); ?>"><?php print $newsItem->getContent(); ?></span>
                    <span class="modified" id="news-modified-<?php print $newsItem->getId(); ?>">Laatst gewijzigd op <?php print $newsItem->getDateModified()->format('d-m-Y H:i'); ?></span>
                </article>

                <hr class="redline"/>
            <?php } //endforeach
        } //endif ?>
    </div>
</div>