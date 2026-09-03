<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <main class="container py-5" style="max-width: 800px;">
        <div class="card shadow-lg">
            <div class="card-body p-4">

                <h1 class="fw-bold mb-4 text-center">NOVA TAREFA</h1>

                    <?php if (session('errors')): ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php foreach (session('errors') as $error): ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('tasks') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="title" class="form-label">Título</label>
                            <input type="text" class="form-control" name="title" value="<?= old('title') ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label>Descrição</label>
                            <input type="text" class="form-control" name="description" value="<?= old('description') ?>">
                        </div>
                        
                        <div>
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" name="status" id="status">
                                <option value="pendente" <?= old('status', 'pendente') == 'pendente' ? 'selected' : '' ?>>Pendente</option>
                                <option value="em andamento" <?= old('status') == 'em andamento' ? 'selected' : '' ?>>Em Andamento</option>
                                <option value="concluída" <?= old('status') == 'concluída' ? 'selected' : '' ?>>Concluída</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="<?= base_url('tasks') ?>" class="btn btn-outline-secondary rounded-pill">Cancelar</a>
                            <button type="submit" class="btn btn-primary rounded-pill">Salvar</button>
                    </div>
                        </div>
                    </form>
            </div>
        </div>
    </main>
</body>
</html>