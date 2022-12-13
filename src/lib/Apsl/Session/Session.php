<?php

namespace Apsl\Session;


class Session
{
    const DEFAULT_SESSION_NAME = 'session';
    const DEFAULT_SESSION_LIFETIME = 60 * 60;

    protected string $name;
    protected int $lifetime;

    //встановлює ім'я сесії, час сесії та запускає метод - для завершення сесії або початку сесії
    public function __construct(string $name = self::DEFAULT_SESSION_NAME, int $lifetime = self::DEFAULT_SESSION_LIFETIME)
    {
        $this->name = $name;
        $this->lifetime = $lifetime;

        $this->start();
    }

    public function start(bool $forceCreateNew = false) //метод для завершення сесії або початку сесії
    {
        if ($forceCreateNew && (session_status() === PHP_SESSION_ACTIVE)) { //якщо сесія активна session_destroy();
            session_destroy();
        }

        if (session_status() === PHP_SESSION_NONE) { //якщо сесія неактивна session_start();
            session_name($this->name);
            session_start([
                'gc_maxlifetime' => $this->lifetime,
                'cookie_lifetime' => $this->lifetime
            ]);
        }
    }

    public function destroy()
    {
        session_destroy();
    }

    public function getValue(string $name)//передаємо login
    {
        return ($_SESSION[$name] ?? null); //Ассоциативный массив, содержащий переменные сессии, которые доступны для текущего скрипта.
    }

    public function setValue(string $name, $value)
    {
        $_SESSION[$name] = $value;
    }
}
