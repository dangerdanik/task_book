<div class="container" >

    <div class="auth_div container">

        <h1>Страница авторизации</h1>

    </div>

    <table align="center">
        <th>
        <td>
            <form  action="" method="post">

                <div class="form-group">
                    <label>Имя пользователя</label>

                    <input type="text" class="form-control" name="login" id="name" placeholder="Имя пользователя" value="<?= $_POST['login'] ?>">

                    <!--        </div>
                    
                            <div class="form-group col-xs-3">-->

                    <label>Пароль</label>

                    <input type="password" class="form-control" name="password" id="name" placeholder="Пароль" value="<?= $_POST['password'] ?>">

                    <br>

                    <button type="submit"  name="submit" class="btn btn-primary">Войти</button>

                </div>
            </form>
        </td>
        </th>
    </table>
</p>
</div>
<?php extract($data); ?>

<?php if ($login_status == "access_granted") { ?>

    <p align="center" style="color:green">Авторизация прошла успешно.</p>

<?php } elseif ($login_status == "access_denied") { ?>

    <p align="center" style="color:red">Логин и/или пароль введены неверно.</p>

<?php } ?>
