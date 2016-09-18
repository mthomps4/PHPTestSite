<?php
  require "vendor/autoload.php";
  date_default_timezone_set("America/Louisville");

  //$log = new Monolog\Logger('name');
  //$log->pushHandler(new Monolog\Handler\StreamHandler('app.txt', Monolog\Logger::WARNING));

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


  //BACK TO SLIM 2.6.^
  $app = new \Slim\Slim();

  $app->get('/', function() use($app) {
    $app->render("index.html");
  });

  $app->get('/contact', function() {
      echo "Feel free to contact us.";
  });

  $app->run();
?>
