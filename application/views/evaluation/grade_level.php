<main class="container mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $grade_level_title ?></h1>
    </div>

    <table class="table table-sm">
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student) : ?>
                <tr>
                    <td><?= $student['paternal_last_name'] . " " . $student['maternal_last_name'] . ", " . $student['first_name'] . " " . $student['middle_name'] ?></td>
                    <td><a href="<?= site_url(['evaluation', 'form', $student['grade_level_id'], $student['student_id']]); ?>">Evaluar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>