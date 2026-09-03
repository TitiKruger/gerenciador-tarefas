<?php 

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController{
    public function index(){
        $model = new TaskModel();
        $tarefas = $model->findAll();

        return view('tasks/index', ['tarefas' => $tarefas]);
    }

    public function create(){
        return view('tasks/create');
    }

    public function store(){
        $rules = [
            'title' => 'required|min_length[3]',
            'status' => 'required|in_list[pendente,em andamento,concluída]',
        ];

        if (! $this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $model = new TaskModel();
        $model->save([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        return redirect()->to('/tasks');
    }

    public function edit($id){
        $model = new TaskModel();
        $tarefa= $model->find($id);

        return view('tasks/edit', ['tarefa' => $tarefa]);
    }

    public function update($id){
        $model = new TaskModel();

        $model->update($id, [
            'title'  => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        return redirect()->to('/tasks');
    }
}