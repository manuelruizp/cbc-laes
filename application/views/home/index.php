<main class="container mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Home</h1>
    </div>

    <h2 class="h4">Tu(s) curso(s) asignado(s)</h2>

    <table class="table table-sm">
        <thead>
            <tr>
                <th>Curso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user_grade_levels as $user_grade_level) : ?>
                <tr>
                    <td><?= $user_grade_level['grade_level_title'] ?></td>

                    <td><a href="<?= site_url(['evaluation', 'grade_level', $user_grade_level['grade_level_id']]); ?>">Ver listado</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>