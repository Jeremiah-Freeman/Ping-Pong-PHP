<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/pingPong.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('homeView.html.twig');
    });

    $app->post("/new", function() use ($app) {
        $pingPong = new Pong;
        $result = $pingPong->pingify($_POST['userInput']);
        return $app['twig']->render('ping.html.twig', array('result'=>$result));
    });

    return $app;
?>
