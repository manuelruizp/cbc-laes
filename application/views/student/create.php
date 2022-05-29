    <?php echo form_open('student/create', ['class' => 'row g-3']); ?>

    <div class="col-md-6">
        <label for="first_name" class="form-label">Primer nombre</label>
        <?= form_input(
            [
                'class' =>  form_error('first_name') ? 'form-control is-invalid' : 'form-control',
                'id' => 'first_name',
                'name' => 'first_name',
                'value' => set_value('first_name'),
            ]
        ); ?>
        <div class="invalid-feedback">
            El primer nombre es obligatorio.
        </div>
    </div>
    <div class="col-md-6">
        <label for="middle_name" class="form-label">Segundo nombre</label>
        <?= form_input(
            [
                'class' =>  form_error('middle_name') ? 'form-control is-invalid' : 'form-control',
                'id' => 'middle_name',
                'name' => 'middle_name',
                'value' => set_value('middle_name')
            ]
        ); ?>
        <div class="invalid-feedback">
            El segundo nombre es obligatorio.
        </div>
    </div>
    <div class="col-md-6">
        <label for="paternal_last_name" class="form-label">Primer apellido</label>
        <?= form_input(
            [
                'class' =>  form_error('paternal_last_name') ? 'form-control is-invalid' : 'form-control',
                'id' => 'paternal_last_name',
                'name' => 'paternal_last_name',
                'value' => set_value('paternal_last_name')
            ]
        ); ?>
        <div class="invalid-feedback">
            El segundo nombre es obligatorio.
        </div>
    </div>
    <div class="col-md-6">
        <label for="maternal_last_name" class="form-label">Segundo apellido</label>
        <?= form_input(
            [
                'class' =>  form_error('maternal_last_name') ? 'form-control is-invalid' : 'form-control',
                'id' => 'maternal_last_name',
                'name' => 'maternal_last_name',
                'value' => set_value('maternal_last_name')
            ]
        ); ?>
        <div class="invalid-feedback">
            El segundo nombre es obligatorio.
        </div>
    </div>

    <div class="col-md-4">
        <label for="student_id" class="form-label">ID del estudiante</label>
        <?= form_input(
            [
                'class' =>  form_error('student_id') ? 'form-control is-invalid' : 'form-control',
                'id' => 'student_id',
                'name' => 'student_id',
                'placeholder' => 'fulano.rodriguez',
                'value' => set_value('student_id')
            ]
        ); ?>
        <div class="invalid-feedback">
            El ID del estudiante es obligatorio.
        </div>
    </div>

    <div class="col-md-4">
        <label for="maternal_last_name" class="form-label">Sexo</label>
        <?= form_dropdown('sex', ['' => 'Seleccione sexo', 'M' => 'Masculino',  'F' => 'Femenino'], set_value('sex'), ['class' =>  form_error('sex') ? 'form-select is-invalid' : 'form-select']); ?>
        <div class="invalid-feedback">
            El sexo es obligatorio.
        </div>
    </div>

    <div class="col-md-4">
        <label for="birthdate" class="form-label">Fecha de nacimiento</label>
        <?= form_input(
            [
                'class' =>  form_error('birthdate') ? 'form-control is-invalid' : 'form-control',
                'id' => 'birthdate',
                'placeholder' => 'dd/mm/yyyy',
                'value' => set_value('birthdate'),
                'name' => 'birthdate'
            ]
        ); ?>
        <div class="invalid-feedback">
            La fecha de nacimiento es obligatoria.
        </div>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Crear estudiante</button>
        <a href="/term" class="btn btn-secondary">Cancelar</a>
    </div>
    </form>
    
    <script>
        $("#birthdate").datepicker({
            dateFormat: "dd/mm/yy",
            changeYear: true,
            changeMonth: true,
            yearRange: "1995:2022",
        });
    </script>