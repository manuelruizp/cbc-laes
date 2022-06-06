<main class="container mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestión de estudiantes</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/student/create" class="btn btn-sm btn-outline-secondary">Crear estudiante</a>
            </div>
        </div>
    </div>

    <?= form_open('student/index', ['class' => 'row g-2 align-items-center justify-content-end']) ?>
    <div class="col-auto">
        <input type="text" name="search_student" class="form-control form-control-sm" placeholder="Buscar..." value="<?= $search_student; ?>">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
        <a class="btn btn-outline-secondary  btn-sm" href="/student/index/0/1">Reiniciar</a>
    </div>
    <?= form_close(); ?>

    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Sexo</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($students) > 0) : ?>
                <?php foreach ($students as $student) : ?>
                    <tr>
                        <td><?= $student['paternal_last_name'] . " " . $student['maternal_last_name'] . ", " . $student['first_name'] . " " . $student['middle_name']  ?></a>
                        </td>
                        <td>
                            <?= $student['sex'] == 'M' ? 'Masculino' : 'Femenino'; ?>
                        </td>
                        <td>
                            <?= date("d/m/Y", strtotime($student['birthdate'])); ?>
                        </td>
                        <td>
                            <a href="<?= site_url(['student', 'edit', $student['id']]); ?> ">Editar</a>
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