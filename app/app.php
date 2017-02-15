<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__."/../src/Replacer.php";
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();
    $app['debug']=true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->post('/display', function() use ($app) {

        $replacement = new Replacer($_POST['phrase'],$_POST['search'],$_POST['replacement']);
        $replacement->findAndReplaceWhole();
        $replacement->findAndReplacePartial();
        $replacement->isPalindrome();
        return $app['twig']->render('display.html.twig', array('replacement' => $replacement));
    });






    return $app;
?>
