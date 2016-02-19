<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider, array(
        "twig.path" => __DIR__.'/../views'
    ));

    $app->get('/', function () use ($app){
        return $app['twig']->render('index.html.twig');
    });

    $app->get('/results', function () use ($app){
        $new_repeatCounter = new RepeatCounter;
        $word = $_GET['word'];
        $sentence = $_GET['sentence'];
        $results = $new_repeatCounter->countRepeats($sentence, $word);
        return $app['twig']->render('results.html.twig', array(
            'count' => $results, 'word' => $word, 'sentence' => $sentence
        ));
    });
    return $app;
?>
