<h1>Список задач</h1>
<p>

    <a href="task/create" type="button" class="btn btn-success">Создать</a>

<table id="dtBasicExample" class="table table-striped table-bordered table-sm">
    <thead>
        <tr>
            <th>id</th>
            <th>Имя</th>
            <th>E-mail</th>
            <th>Задача</th>
            <th>Статус</th>
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
            </tr>

        <?php endforeach; ?>


    </tbody>
</table>



</p>