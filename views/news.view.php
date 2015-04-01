<main>
    <div class="box-full">
        <!-- INTRO -->
        <?php if(isset($page) && $page->getPublish() == 1) { ?>
            <article class="intro">
                <?php print $page->getContent(); ?>
            </article>
        <?php } ?>

        <!-- NIEUWSBERICHTEN -->
        <?php if (!empty($newsList)) {
            foreach ($newsList as $newsItem) { ?>
                <article class="clearfix whitebox newsitem" id="newsitem-<?php print $newsItem->getId(); ?>">
                    <span class="socialmedia">
                        <a class="logo-facebook sharebutton" id="<?php print $newsItem->getId(); ?>">&nbsp;</a>
                        <a href="https://twitter.com/share?text=<?php print $newsItem->getTitle(); ?>&url=http://www.bflydesign.be/news#newsitem-<?php print $newsItem->getId(); ?>" target="_blank" class="logo-twitter">&nbsp;</a>
                        <a href="mailto:?SUBJECT=Atelier%20VQ&BODY=http://www.bflydesign.be/news#newsitem-<?php print $newsItem->getId(); ?>" class="logo-mail">&nbsp;</a>
                    </span>
                    <span class="title" id="news-title-<?php print $newsItem->getId(); ?>"><?php print $newsItem->getTitle(); ?></span>
                    <span class="date" id="news-date-<?php print $newsItem->getId(); ?>"><?php print $newsItem->getDateCreated()->format('d-m-Y'); ?></span>
                    <span class="time" id="news-time-<?php print $newsItem->getId(); ?>">@<?php print $newsItem->getDateCreated()->format('H:i'); ?></span>
                    <span class="message" id="news-message-<?php print $newsItem->getId(); ?>"><?php print $newsItem->getContent(); ?></span>
                    <span class="modified" id="news-modified-<?php print $newsItem->getId(); ?>">Laatst gewijzigd op <?php print $newsItem->getDateModified()->format('d-m-Y H:i'); ?></span>
                </article>

                <hr class="redline"/>
            <?php } //endforeach
        } //endif ?>
    </div>
</main>