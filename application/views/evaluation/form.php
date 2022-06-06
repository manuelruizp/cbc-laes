<main class="container mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $student['first_name']  . " " .  $student['middle_name']    . " " . $student['paternal_last_name']  . " " . $student['maternal_last_name'] ?></h1>
    </div>

    <?php
    foreach($rubrics as $rubric) {
        echo $rubric['rubric_title'];
    }
    ?>

</main>