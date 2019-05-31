<?php

/**
 * Клас User - модель для роботи з користувачами
 */
class User {

    /**
     * Реєстрація користувача
     * @param string $fname <p>Прізвище</p> 
     * @param string $name <p>Ім'я</p>
     * @param string $height <p>Зріст/p>
     * @param string $bdate <p>Дата народження/p>
     * @param string $sex <p>Стать/p>
     * @param string $weight <p>Вага/p>
     * @param string $email <p>E-mail</p>
     * @param string $password <p>Пароль</p>
     * @return boolean <p>Результат виконання методу</p>
     */
    public static function register($fname, $name, $height, $bdate, $sex, $weight, $email, $password) {

        $user = R::dispense('users');
        $user->fname = $fname;
        $user->name = $name;
        $user->height = $height;
        $user->bdate = $bdate;
        $user->sex = $sex;
        $user->weight = $weight;
        $user->sdate = new DateTime();
        $user->email = $email;
        $user->coach = NULL;
        $user->password = password_hash($password, PASSWORD_DEFAULT);
        return R::store($user);
    }

    /**
     * Проверяет ім'я: не менше, ніж 3 символи
     * @param string $name <p>Ім'я</p>
     * @return boolean <p>Результат виконання методу</p>
     */
    public static function checkName($name) {
        if (strlen($name) >= 3) {
            return true;
        }
        return false;
    }

    /**
     * Перевіряє email
     * @param string $email <p>E-mail</p>
     * @return boolean <p>Результат виконання методу</p>
     */
    public static function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    /**
     * Перевіряє пароль: не менше, ніж 6 символів
     * @param string $password <p>Пароль</p>
     * @return boolean <p>Результат виконання методу</p>
     */
    public static function checkPassword($password) {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    /**
     * Перевіряє чи зайнятий email іншим користувачем
     * @param type $email <p>E-mail</p>
     * @return boolean <p>Результат виконання методу</p>
     */
    public static function checkEmailExists($email) {
        if (R::count('users', "email = ?", array($email)) > 0)
            return true;
        return false;
    }

}
