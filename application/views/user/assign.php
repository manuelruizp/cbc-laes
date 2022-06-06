<main class="container mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Assignar curso a usuario</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/user" class="btn btn-sm btn-outline-secondary">Volver a usuarios</a>
            </div>
        </div>
    </div>

    <?= form_open('user/assign/' . $user['id'], ['class' => 'row g-2'], ['user_id' => $user['id']]); ?>
    <div class="col-md-12">
        <label for="user_full_name" class="form-label">Nombre del usuario</label>
        <input type="text" class="form-control" id="user_full_name" value="<?= $user['first_name'] . " " . $user['last_name'] ?>" readonly>
    </div>

    <div class="col-md-6">
        <label for="term_id" class="form-label">Selecione periodo de evaluación</label>
        <?= form_dropdown('term_id', $terms, '', ['class' => 'form-select']); ?>
    </div>

    <div class="col-md-6">
        <label for="grade_level_id" class="form-label">Selecione curso</label>
        <?= form_dropdown('grade_level_id', $grade_levels, '', ['class' => 'form-select']); ?>
    </div>


    <h4>Rúbricas</h4>
    <?php foreach ($rubrics as $rubric) : ?>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="rubrics[]" value="<?= $rubric['id']; ?>" id="rubric<?= $rubric['id'] ?>">
            <label class="form-check-label" for="rubric<?= $rubric['id'] ?>">
                <?= $rubric['id'] . ". " . $rubric['title']; ?>
            </label>
        </div>
    <?php endforeach; ?>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Asignar</button>
    </div>

    </form>
</main>