<?php
if (is_array($alert)) {
    
    extract($alert);
}
// print_r($alert);
?>

<?php if ($change_task == "ok") { ?>

    <div id="ok_task" class="alert alert-success" role="alert">

        Текст задачи изменен <a href="/admin"> к задачам</a>

    </div>

<?php } ?>

<h1>Изменение задачи пользователя - <?= $data['user_name'] ?></h1>

<form action="" method="POST">


    <div class="form-group">
        <label for="exampleTextarea">Задача</label>
        <textarea class="form-control" name="task" id="task" rows="3"> <?= trim($data['task']) ?> </textarea>

        <!--        скрытое поле с данными-->
        <input hidden name="id" value="<?= $data['id'] ?>">

    </div>

    <button type="submit" name="submit" class="btn btn-primary">Изменить</button>

</form>
