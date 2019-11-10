<h1>Панель администрирования</h1>
<p>

    <a href="task/create" type="button" class="btn btn-success">Создать</a>

<table id="dtAdminExample" class="table table-striped table-bordered table-sm">
    <thead>
        <tr>
            <th>id</th>
            <th>Имя</th>
            <th>E-mail</th>
            <th>Задача</th>
            <th>Статус</th>
            <th>Выполнено</th>
            <th>Изменить</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($data as $row) : ?>

            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['user_name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['task'] ?></td>
                <td><?php
                    if ($row['status'] == FALSE) {

                        echo 'Не выполнено ';
                    } else {
                        echo 'Выполнено ';
                    }

                    if ($row['admin_update'] != FALSE) {

                        echo '/ Отредактировано администратором';
                    }
                    ?></td>
                <td>

                    <input type="checkbox" value="<?= $row['id'] ?>" class="form-check-input" id="<?= $row['id'] ?>">

                </td>

                <td>

                    <a class="nav-link" href="/admin/change/?id=<?= $row['id'] ?>"> <i class="glyphicon glyphicon-plus" aria-hidden="true"></i> </a>

                </td>
            </tr>

<?php endforeach; ?>


    </tbody>
</table>

</p>
