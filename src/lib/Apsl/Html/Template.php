<?php

namespace Apsl\Html;


class Template
{
    protected string $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function render(array $data = [])
    {
        ob_start();//заголовок сохраняется во внутреннем буфере.

        foreach ($data as $varName => $varValue) {//$varName(ключ) => $varValue(значення)
            $$varName = $varValue;
        }

        include $this->file;//не розумію

        return ob_get_clean();
    }
}
