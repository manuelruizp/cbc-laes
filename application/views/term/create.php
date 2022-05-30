<main class="container mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Crear nuevo término de evaluación</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/students/create" class="btn btn-sm btn-outline-secondary">Volver a Términos de Evaluación</a>
            </div>
        </div>
    </div>
    <?php echo form_open('term/create', ['class' => 'row g-3']); ?>
    <div class="col-md-12">
        <label for="title" class="form-label">Titulo</label>
        <?= form_input(
            [
                'name' => 'title',
                'class' =>  form_error('title') ? 'form-control is-invalid' : 'form-control',
                'id' => 'title',
                'placeholder' => 'Titulo del término de la evaluación',
            ]
        ); ?>
        <div class="invalid-feedback">
            El título es obligatorio.
        </div>
    </div>
    <div class="col-md-6">
        <label for="start_date" class="form-label">Fecha de inicio</label>
        <?= form_input(
            [
                'class' =>  form_error('start_date') ? 'form-control is-invalid' : 'form-control',
                'id' => 'start_date',
                'name' => 'start_date',
                'placeholder' => 'dd/mm/yyyy',
            ]
        ); ?>
        <div class="invalid-feedback">
            La fecha de inicio es obligatoria.
        </div>
    </div>
    <div class="col-6">
        <label for="end_date" class="form-label">Fecha de finalización</label>
        <?= form_input(
            [
                'class' =>  form_error('end_date') ? 'form-control is-invalid' : 'form-control',
                'id' => 'end_date',
                'name' => 'end_date',
                'placeholder' => 'dd/mm/yyyy',
            ]
        ); ?>
        <div class="invalid-feedback">
            La fecha de finalización es obligatoria.
        </div>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Crear término de evaluación</button>
        <a href="/term" class="btn btn-secondary">Cancelar</a>
    </div>
    </form>

</main>

<script>
    $("#start_date").datepicker({
        dateFormat: "dd/mm/yy",
    });
    $("#end_date").datepicker({
        dateFormat: "dd/mm/yy",
    });
</script>