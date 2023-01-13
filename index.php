<!DOCTYPE html>
<html lang="de"
    xmlns="http://www.w3.org/1999/xhtml"
    xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Digitale Warteschlange für das Halloweenhaus Schmalenbeck">
    <meta name="publisher" content="SP Universe">
    <meta name="copyright" content="SP Universe">
    <meta name="audience" content="Everyone">
    <meta charset="utf-8"/>
    <title>Stormstory Feed</title>
    <link rel="apple-touch-icon" sizes="180x180" href="app/client/src/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="app/client/src/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="app/client/src/images/favicon-16x16.png">
    <link rel="mask-icon" href="app/client/src/images/safari-pinned-tab.svg" color="#5bbad5">

    <meta property="og:title" content="Stormstory Feed" />
    <meta property="og:site_name" content="Stormstory Feed" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Ein Feed von Stormstory - Der Schülerzeitung der Stormarnschule">
    <meta property="og:url" content="$Link" />
    <meta property="og:locale" content="de_DE" />

    <meta name="msapplication-TileColor" content="#102C4D">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#FFFFFF">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#102C4D">

    <link rel="shortcut icon" type="image/x-icon" href="favicon-32x32.png" />
    <link rel="stylesheet" href="app/client/dist/css/styles.css">

</head>
<body>
    <div class="content_wrap">

        <div class="title_wrap">
            <div class="title_image">
                <img src="app/client/src/images/StormstoryLogo.png" alt="Logo von Stormstory">
            </div>
            <h1 class="title">Neues von Stormstory</h1>
            <p>Eure digitale Schülerzeitung</p>
            <p>stormstory.de</p>
            <img class="header_image" src="app/client/src/images/stormstory_header.png" alt="Header von Stormstory">
        </div>

        <div class="rss_wrap">
            <?php
                $feed_url = "https://www.stormstory.de/feed/";
                //get the rss feed and create divs for each item
                $rss = simplexml_load_file($feed_url);
                $amount = 0;
                foreach ($rss->channel->item as $item) {
                    echo "<div class='rss_item'>";
                    echo "<h2>$item->title</h2>";
                    echo "<p>$item->description</p>";
                    echo "</div>";
                    $amount += 1;

                    if($amount >= 3){
                        break;
                    }
                }
            ?>
        </div>
    </div>
</body>
