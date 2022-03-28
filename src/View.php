<?php

declare(strict_types=1);

namespace App;

use App\Exceptions\ViewNotFoundException;

class View
{
    public function __construct(protected string $view, protected array $params = [])
    {
    }

    public function render()
    {
        $viewPath = '../views/'.$this->view.'.php';

        if (!file_exists($viewPath)) {
            throw new ViewNotFoundException();
        }

        ob_start();

        include $viewPath;

        return ob_get_clean();

        //require $viewPath;
    }

    public function __get(mixed $variable)
    {

        return $this->params[$variable];
    }
}