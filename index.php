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

  $app = new \Slim\App();

  $app->get('/hello/{name}', function ($request, $response) {
      $name = $request->getAttribute('name');
      $response->getBody()->write("Hello, $name");
      return $response;
  });

  $app->get('/', function(){
    echo "Hello, this is the Home Page.";
  });

  $app->get('/contact', function(){
    echo "Contact us now!";
  });

  $app->run();
?>
