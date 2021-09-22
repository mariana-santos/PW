
<div class="container">
    <form action="?controller=StudentsController&<?php echo isset($student->id) ? "method=atualizar&id={$student->id}" : "method=salvar"; ?>" method="post" >
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Alunos</span>
            </div>
            <div class="card-body">
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Nome:</label>
                <input type="text" class="form-control col-sm-8" name="nome" id="nome" value="<?php
                echo isset($student->nome) ? $student->nome : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Turma</label>
                <input type="text" class="form-control col-sm-8" name="turma" id="turma" value="<?php
                echo isset($student->turma) ? $student->turma : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Email:</label>
                <input type="text" class="form-control col-sm-8" name="email" id="email" value="<?php
                echo isset($student->email) ? $student->email : null;
                ?>" />
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($student->id) ? $student->id : null; ?>" />
                <button class="btn btn-success" type="submit">Salvar</button>
                <button class="btn btn-secondary">Limpar</button>
                <a class="btn btn-danger" href="?controller=StudentsController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
</div>