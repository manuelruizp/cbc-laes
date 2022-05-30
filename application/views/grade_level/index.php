<main class="container mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestión de Cursos y secciones</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/grade_level/create" class="btn btn-sm btn-outline-secondary">Crear curso</a>
            </div>
        </div>
    </div>

    <?= form_open('grade_level/index', ['class' => 'row g-2 align-items-center justify-content-end']) ?>
    <div class="col-auto">
        <input type="text" name="search_grade_level" class="form-control form-control-sm" placeholder="Buscar..." value="<?= $search_grade_level; ?>">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
        <a class="btn btn-outline-secondary  btn-sm" href="/grade_level/index/0/1">Reiniciar</a>
    </div>
    <?= form_close(); ?>

    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">Título</th>
                <th scope="col">Título abreviado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($grade_levels) > 0) : ?>
                <?php foreach ($grade_levels as $grade_level) : ?>
                    <tr>
                        <td>
                            <a href="<?= site_url(['grade_levels', 'view', $grade_level['title']]); ?> ">
                                <?= $grade_level['title'] ?>
                            </a>
                        </td>
                        <td><?= $grade_level['title_abbr']; ?></td>
                        <td>
                            <a href="<?= site_url(['grade_level', 'edit', $grade_level['id']]); ?> ">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="4" class="text-center">No hay registros para mostrar.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <?= $this->pagination->create_links();    ?>
    </nav>
</main>