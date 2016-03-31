<?php
require_once __DIR__.'/registration.php';
$app->get('/foo', function($req, $res)
{
    return $this->captchaController->dispatch($req, $res);
});
?>
