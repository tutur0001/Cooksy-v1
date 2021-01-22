<?php

namespace App\Core;

class View
{
    public function __construct(
        private string $view,
        private array $data = [],
    ) {
        if (!file_exists(__DIR__.'/../views/'.$this->view.'.php')) {
            throw new \Exception(sprintf('View "%s" doesn\'t exist.', $this->view));
        }
    }

    public function __destruct() {
        extract($this->data);
        require_once __DIR__.'/../views/'.$this->view.'.php';
    }
}
