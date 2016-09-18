<?php
  require "vendor/autoload.php";
  date_default_timezone_set("America/Louisville");

  // $log = new Monolog\Logger('name');
  // $log->pushHandler(new Monolog\Handler\StreamHandler('app.txt', Monolog\Logger::WARNING));

  // use Monolog\Logger;
  // use Monolog\Handler\StreamHandler;
  // $log = new Logger('name');
  // $log->pushHandler(new StreamHandler('app.txt', Logger::WARNING));
  // $log->addWarning('Foo');


  // SLIM 3.^ stuff
  // $app = new \Slim\App();
  //
  // $app->get('/hello/{name}', function ($request, $response) {
  //     $name = $request->getAttribute('name');
  //     $response->getBody()->write("Hello, $name");
  //     return $response;
  // });



  // BACK TO SLIM 2.6.^
  $app = new \Slim\Slim(array(
      'view' => new \Slim\Views\Twig(),
  ));//Overrides view class and uses our own

  $view = $app->view();
  $view->parserOptions = array(
    'debug' => true
  );

  $view->parserExtensions = array(
    new \Slim\Views\TwigExtensions()
  );

  $app->get('/', function() use($app) {
    $app->render("about.twig");
  });

  $app->get('/contact', function() use($app) {
    $app->render("contact.twig");
  });

  $app->run();
?>
