<?php
    date_default_timezone_set('America/Los_Angeles');

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('word_finder.html.twig');
    });

    $app->post("/finder", function() use ($app) {
        $newCounter = new RepeatCounter;
        $searchWord = $_POST['word-to-find'];
        $searchText = $_POST['search-string'];
        $numberOfFinds = $newCounter->CountRepeats($searchWord, $searchText);
        return $app['twig']->render('word_finder_results.html.twig', array('word'=>$searchWord, 'text' => $searchText, 'count' => $numberOfFinds['counter'], 'text_array' => $numberOfFinds['text_array'], 'original_array' => $numberOfFinds['original_string_array']));
    });


    return $app;
 ?>
