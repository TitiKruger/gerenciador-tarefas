<?php 

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController{
    public function index(){
        $model = new TaskModel();
        $tarefas = $model->findAll();

        return view('tasks/index', ['tarefas' => $tarefas]);
    }

}