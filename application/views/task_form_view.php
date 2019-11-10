<?php
extract($data);

 //print_r($field);
?>

<?php if ($create_task == "ok") { ?>

    <div id="ok_task" class="alert alert-success" role="alert">

        Создана новая задача <a href="/"> к задачам</a>

    </div>

<?php } ?>

<?php if ($field == "no") { ?>

    <div id="ok_task" class="alert alert-danger" role="alert">

        Не все поля заполнены

    </div>

<?php } ?>

<div style="<?= $alert_mail ?>" id="mailValidateAlert" class="alert alert-danger" role="alert">

    Не верно указан email

    <!--    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>-->

</div>

<!--<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.

</div>-->
<h1>Создание задачи</h1>

<form action="create" method="POST">

    <div class="form-group">
        <label>Имя пользователя</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="имя пользователя" value="<?= $_POST['name'] ?>">

    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email адрес</label>
        <input type="email" class="form-control" name="email" id="email1" aria-describedby="emailHelp" placeholder="укажите email" value="<?= $_POST['email'] ?>">

    </div>


    <div class="form-group">
        <label for="exampleTextarea">Описание задачи</label>
        <textarea class="form-control" name="task" id="task" rows="3"><?= $_POST['task'] ?></textarea>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Создать</button>

</form>

