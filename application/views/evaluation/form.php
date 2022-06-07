<main class="container mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3"><?= $student['first_name']  . " " .  $student['middle_name']    . " " . $student['paternal_last_name']  . " " . $student['maternal_last_name'] ?> (<?= $student['grade_level_title'] ?>)</h1>
    </div>
    <?= form_open('evaluation/form/' . $student['grade_level_id'] . '/' . $student['id']) ?>

    <?=form_hidden('term_id', $rubrics[0]['term_id']); ?>
    <?=form_hidden('user_id', $rubrics[0]['user_id']); ?>
    <?=form_hidden('student_id', $student['id']); ?>
    <?php foreach ($rubrics as $rubric) : ?>
        <p class="mt-3 mb-1 fw-bold"><?= $rubric['rubric_id'] . ". " . $rubric['rubric_title'] ?></p>
        <div class="form-check">
            <input class="form-check-input rubric_<?= $rubric['rubric_id']; ?>" type="radio" value="non_compliance" name="rubric_<?= $rubric['rubric_id']; ?>">
            <label class="form-check-label" for="flexRadioDefault1">
                <?= $rubric['non_compliance'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input rubric_<?= $rubric['rubric_id']; ?>" type="radio" value="partial_compliance" name="rubric_<?= $rubric['rubric_id']; ?>">
            <label class="form-check-label" for="flexRadioDefault1">
                <?= $rubric['partial_compliance'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input rubric_<?= $rubric['rubric_id']; ?>" type="radio" value="compliance" name="rubric_<?= $rubric['rubric_id']; ?>">
            <label class="form-check-label" for="flexRadioDefault1">
                <?= $rubric['compliance'] ?>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input rubric_<?= $rubric['rubric_id']; ?>" type="radio" value="exceeds_compliance" name="rubric_<?= $rubric['rubric_id']; ?>">
            <label class="form-check-label" for="flexRadioDefault1">
                <?= $rubric['exceeds_compliance'] ?>
            </label>
        </div>
    <?php endforeach; ?>

    <button type="submit">Evaluar</button>
    <?= form_close(); ?>

</main>