<?php
$container = new \Slim\Container;
$container['randomizer'] = function()
{
    return new Randomizer();
};

$container['captchaService'] = function($container)
{
    $randomizer = $container->get('randomizer');
    return new CaptchaService($randomizer);
};

$container['captchaController'] = function($container)
{
    $captchaService = $container->get('captchaService');
    return new EchoAction($captchaService);
};

$app = new \Slim\App($container);
?>
