<?php

class StudentsController extends Controller
{
 
    //Lista os alunos
    public function listar()
    {
        $students = Students::all();
        return $this->view('grade', ['students' => $students]);
    }
 
    //Mostrar um formulário p cadastrar um novo aluno
    public function criar()
    {
        return $this->view('form');
    }
 
    //Form p editar o aluno
    public function editar($dados)
    {
        $id = (int) $dados['id'];
        $student = Students::find($id);
 
        return $this->view('form', ['students' => $student]);
    }
 
    //salvar o aluno do form
    public function salvar()
    {
        $student = new Students;
        $student->nome = $this->request->nome;
        $student->turma = $this->request->turma;
        $student->email = $this->request->email;
        if ($student->save()) {
            return $this->listar();
        }
    }
 
    //Atualizar o aluno
    public function atualizar($dados)
    {
        $id = (int) $dados['id'];
        $student = Students::find($id);
        $student->nome = $this->request->nome;
        $student->turma = $this->request->turma;
        $student->email = $this->request->email;
        $student->save();
 
        return $this->listar();
    }
 
    //Excluir aluno pelo id
    public function excluir($dados)
    {
        $id = (int) $dados['id'];
        $student = Students::destroy($id);
        return $this->listar();
    }
}


?>