<?php
if ($url == 'news')
{
    // -- get pagevariables
    $page = new Page($url);
    $title = $page->getTitle();
    $style = 'master';

    // -- get newsdata
    $newsList = News::getNews(true);

    // -- get img
    $images = getImages($url);

    // -- views
    $view = 'news.view.php';
    $master = 'master';
} else if ($url == 'news/add')
{
    if (Authentication::login_check() == true)
    {
        // -- load newsdata
        if (isset($_GET['q'])) {
            $news = new News($_GET['q']);
        }

        // -- get pagevariables
        $title = 'dashboard';
        $style = 'admin';

        // -- views
        $view = 'addnews.view.php';
        $master = 'admin';
    } else {
        header('location: /dashboard');
    }
} else if ($url == 'news/edit')
{
    if (Authentication::login_check() == true)
    {
        // -- get newsdata
        $newsList = News::getNews(false);

        // -- get pagevariables
        $title = 'dashboard';
        $style = 'admin';

        // -- views
        $view = 'editnews.view.php';
        $master = 'admin';
    } else {
        header('location: /dashboard');
    }
} else if ($url == 'page/edit')
{
    if (Authentication::login_check() == true)
    {
        $page = new Page('news');
        $title = 'dashboard';
        $style = 'admin';
        $view = 'editpage.view.php';
        $master = 'admin';
    } else {
        header('location: /dashboard');
    }
}
