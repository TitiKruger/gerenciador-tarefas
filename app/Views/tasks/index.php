<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">
    <main class="container py-5" style="max-width: 1000px;">
        <div class="card shadow-lg">
            <div class="card-body p-4">

                <h1 class="fw-bold mb-4 text-center">TAREFAS</h1>

                <a href="<?= base_url('tasks/create') ?>" class="btn btn-primary rounded-pill mb-3">+ Nova Tarefa</a>

                <table class="table table-bordered align-middle text-center ">
                    <thead>
                        <tr>
                            <th class="text-start">Título</th>
                            <th style="width: 160px;">Status</th>
                            <th style="width: 80px;">Editar</th>
                            <th style="width: 80px;">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(empty($tarefas)): ?>
                            <tr>
                                <td colspan="4" class="text-center">Nenhuma tarefa cadastrada</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach($tarefas as $tarefa): ?>
                                <tr>
                                    <td class="text-start"><?= esc($tarefa['title']) ?></td>

                                    <td>
                                        <?php if($tarefa['status'] === 'concluída'): ?>
                                            <span class="badge rounded-pill bg-success">Concluída</span>
                                        <?php elseif($tarefa['status'] === 'em andamento'): ?>
                                            <span class="badge rounded-pill bg-warning text-dark">Em Andamento</span>
                                        <?php else: ?>
                                            <span class="badge rounded-pill bg-danger">Pendente</span>
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        <a href="<?= base_url('tasks/edit/' . $tarefa['id']) ?>" class="btn btn-sm btn-outline-secondary" title="Editar">✏️</a>
                                    </td>

                                    <td>
                                        <form action="<?= base_url('tasks/delete/' . $tarefa['id']) ?>" method="post" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir esta tarefa?');">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Excluir">🗑️</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </main>
</body>
</html>