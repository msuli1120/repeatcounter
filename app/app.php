<?php
  date_default_timezone_set('America/Los_Angeles');
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/RepeatCounter.php";

  session_start();
  if (empty($_SESSION['lists'])) {
    $_SESSION['lists'] = array();
  }

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
  ));

  $app->get("/", function () use ($app) {
    return $app['twig']->render('index.html.twig');
  });

  $app->post("/count", function () use ($app) {
    if(empty($_POST['word']) || empty($_POST['sentence'])) {
      return $app['twig']->render('erro.html.twig');
    } else {
      $new_count = new RepeatCounter($_POST['word'], $_POST['sentence']);
      $new_count->save();
      return $app['twig']->render('result.html.twig', array('results'=>RepeatCounter::getAll()));
    }
  });

  $app->post("/goback", function () use ($app) {
    return $app['twig']->render('index.html.twig');
  });

  $app->post("/delete", function () use ($app) {
    RepeatCounter::deleteAll();
    return $app['twig']->render('index.html.twig');
  });

  return $app;
?>
