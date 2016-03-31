<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class EchoAction
{
    public function __construct(CaptchaService $captchaService)
    {
        $this->captchaService = $captchaService;
    }

    public function dispatch(Request $request, Response $response, $args = [])
    {
        return $response->write($this->captchaService->getCaptcha()->toString());
    }
}
?>
