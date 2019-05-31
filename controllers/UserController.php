<?php

/**
 * Контроллер CartController
 */
class UserController {

    /**
     * Action для реєстрації користувача
     */
    public function actionRegister() {
        // Змінні для форми
        $fname = false;
        $name = false;
        $height = false;
        $bdate = false;
        $sex = false;
        $weight = false;
        $email = false;
        $password = false;
        $result = false;

        if (isset($_POST['do_signup'])) {
            //Якщо форма відправлена - отримуємо дані форми
            $data = $_POST;

            $fname = $data['fname'];
            $name = $data['name'];
            $height = $data['height'];
            $bdate = $data['bdate'];
            $sex = $data['sex'];
            $weight = $data['weight'];
            $email = $data['email'];
            $password = $data['password'];
            $password_2 = $data['password_2'];

            // Масив помилок
            $errors = false;

            // Валидация полей
            if (!User::checkName($name)) {
                $errors[] = 'Ім\'я не повинно бути коротше за 3 символи!';
            }
            if ($password != $password_2) {
                $errors[] = 'Паролі не збігаються!';
            }
            if (!User::checkName($fname)) {
                $errors[] = 'Прізвище не повинно бути коротше за 3 символи!';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильний email!';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не повинен бути коротшим 6-ти символів!';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такий email вже використовується!';
            }

            if ($errors == false) {
                // Якщо помилок нема - реєструємо користувача
                $result = User::register($fname, $name, $height, $bdate, $sex, $weight, $email, $password);
            }
        }

        // Підключаємо вид
        require_once(ROOT . '/views/site/register.php');
        return true;
    }

}
