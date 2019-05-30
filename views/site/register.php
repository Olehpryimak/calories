<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container" style="margin-top: 4%">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7"><div class="well row">
                <h2 style="text-align: center">Sign Up</h2>
                <div class="form-group col-md-6">
                    <form style="text-align: center" id="signup" action="/" method="post">
                        <h3 style="text-align: center">Клієнт:</h3>
                        <br>
                        <input type="text" name="fname" value="" class="form-control" placeholder="Ваше прівище" required >
                        <br>
                        <input type="text" name="name" value="" class="form-control" placeholder="Ваше ім'я" required >
                        <br>
                        <input type="text" name="pob" value="" class="form-control" placeholder="Ваше по-батькові" required >
                        <br>
                        <input type="number" name="height" min ="140" max="220" value="" class="form-control" placeholder="Ваш зріст" required >
                        <br>
                        <input type="date" name="bdate" value="" class="form-control" placeholder="Дата народження" required >
                        <br>
                        <select size="1" title="Ваша стать"  name="sex" class="form-control" required >
                            <option >Чоловіча</option>
                            <option >Жіноча</option>
                        </select>
                        <br>
                        <input type="tel" name="tel" value="" class="form-control" placeholder="Номер телефону" required >
                        <br>
                        <input type="number" name="weight" min="40" max="300" value="" class="form-control" placeholder="Ваша вага" required >
                        <br>
                        <input type="password" name="password" value="" class="form-control" placeholder="Введіть пароль" required  >
                        <br>
                        <input type="password" name="password_2" value="" class="form-control" placeholder="Повторіть пароль" required >
                        <br>
                        <button type="submit"  class="btn btn-success" name="do_signup">Зареєструватися</button>
                    </form>
                </div>
                <div class="form-group col-md-6" >
                    <form style="text-align: center" id="signup" action="/" method="post">
                        <h3 style="text-align: center">Тренер:</h3>
                        <br>
                        <input type="text" name="fname" value="" class="form-control" placeholder="Ваше прівище" required >
                        <br>
                        <input type="text" name="name" value="" class="form-control" placeholder="Ваше ім'я" required >
                        <br>
                        <input type="text" name="pob" value="" class="form-control" placeholder="Ваше по-батькові" required >
                        <br>
                        <input type="tel" name="tel" value="" class="form-control" placeholder="Номер телефону" required >
                        <br>
                        <input type="password" name="password" value="" class="form-control" placeholder="Введіть пароль" required  >
                        <br>
                        <input type="password" name="password_2" value="" class="form-control" placeholder="Повторіть пароль" required >
                        <br>
                        <button type="submit"  class="btn btn-success" name="do_signup_coach">Зареєструватися</button>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <div class="well">

                <div class="form-group">
                    <form action="/" method="post">
                        <div style="text-align: center">
                            <h2>Sign In</h2>
                        </div>
                        <br>
                        <input type="tel" name="tel" value="" class="form-control" placeholder="Введіть номер телефону" required>
                        <br>
                        <input type="password" name="password" value="" class="form-control" placeholder="Введіть пароль" required>
                        <input type="hidden" name="timezone" id="tz">
                        <br>

                        <div style="text-align: center">
                            <button type="submit"  name="do_login" class="btn btn-success btn-md" >Вхід</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
