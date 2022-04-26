<?php

declare(strict_types=1);

namespace DiggPHP\Form\Component;

use DiggPHP\Form\ItemInterface;

class Col implements ItemInterface
{
    private $class = '';
    private $body = '';

    public function __construct(string $class = 'col')
    {
        $this->class = $class;
    }

    public function addItem(ItemInterface ...$items): self
    {
        $this->body .= implode('', $items);
        return $this;
    }

    public function __toString()
    {
        return '<div class="' . htmlspecialchars($this->class) . '">' . $this->body . '</div>';
    }
}
