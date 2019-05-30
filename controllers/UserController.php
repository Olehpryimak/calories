<?php

/**
 * Контроллер CartController
 */
class UserController
{

    /**
     * Action для реєстрації користувача
     */
    public function actionRegister()
    {
        // Підключаємо вид
        require_once(ROOT . '/views/site/register.php');
        return true;
    }

}


