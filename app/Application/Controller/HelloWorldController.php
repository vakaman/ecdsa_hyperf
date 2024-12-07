<?php

declare(strict_types=1);

namespace Application\Controller;

class HelloWorldController extends AbstractController
{
    public function index(): array
    {
        return [
            'message' => 'Hello World!',
        ];
    }
}
