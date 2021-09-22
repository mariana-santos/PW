
<h1>Lista de alunos</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped" style="top:40px;">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Turma</th>
                <th>Email</th>
                <th><a href="?controller=StudentsController&method=criar" class="btn">
                    <img src="img/add.png">
                </a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($students) {
                foreach ($students as $student) {
                    ?>
                    <tr>
                        <td><?php echo $student->nome; ?></td>
                        <td><?php echo $student->turma; ?></td>
                        <td><?php echo $student->email; ?></td>
                        <td>
                            <a href="?controller=StudentsController&method=editar&id=<?php echo $student->id; ?>" class="btn">
                                <img src="img/edit.png">
                            </a>
                            <a href="?controller=StudentsController&method=excluir&id=<?php echo $student->id; ?>" class="btn">
                                <img src="img/delete.png">
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>