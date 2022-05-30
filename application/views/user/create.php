<main class="container mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Nuevo usuario</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/user" class="btn btn-sm btn-outline-secondary">Volver a usuarios</a>
            </div>
        </div>
    </div>

    <?php echo form_open('user/create', ['class' => 'row g-3']); ?>

    <div class="col-md-3">
        <?= form_label('Primer nombre', 'first_name', ['class' => 'form-label']); ?>
        <?= form_input(
            [
                'class' =>  form_error('first_name') ? 'form-control is-invalid' : 'form-control',
                'id' => 'first_name',
                'name' => 'first_name',
                'value' => set_value('first_name'),
            ]
        ); ?>
        <div class="invalid-feedback">
            <?= form_error('first_name') ?>
        </div>
    </div>

    <div class="col-md-3">
        <?= form_label('Segundo nombre', 'middle_name', ['class' => 'form-label']); ?>
        <?= form_input(
            [
                'class' =>  form_error('middle_name') ? 'form-control is-invalid' : 'form-control',
                'id' => 'middle_name',
                'name' => 'middle_name',
                'value' => set_value('middle_name')
            ]
        ); ?>
        <div class="invalid-feedback">
            <?= form_error('middle_name') ?>

        </div>
    </div>

    <div class="col-md-6">
        <?= form_label('Apellidos', 'last_name', ['class' => 'form-label']); ?>
        <?= form_input(
            [
                'class' =>  form_error('last_name') ? 'form-control is-invalid' : 'form-control',
                'id' => 'last_name',
                'name' => 'last_name',
                'value' => set_value('last_name')
            ]
        ); ?>
        <div class="invalid-feedback">
            <?= form_error('last_name') ?>

        </div>
    </div>

    <div class="col-md-6">
        <?= form_label('Nombre de usuario', 'username', ['class' => 'form-label']); ?>
        <?= form_input(
            [
                'class' =>  form_error('username') ? 'form-control is-invalid' : 'form-control',
                'id' => 'username',
                'name' => 'username',
                'placeholder' => 'f.rodriguez',
                'value' => set_value('username')
            ]
        ); ?>
        <div class="invalid-feedback">
            <?= form_error('username') ?>
        </div>
    </div>

    <div class="col-md-6">
        <?= form_label('Correo electrónico', 'email', ['class' => 'form-label']); ?>
        <?= form_input(
            [
                'class' =>  form_error('email') ? 'form-control is-invalid' : 'form-control',
                'id' => 'email',
                'name' => 'email',
                'placeholder' => 'f.rodriguez@cbc.edu.do',
                'value' => set_value('email')
            ]
        ); ?>
        <div class="invalid-feedback">
            <?= form_error('email') ?>
        </div>
    </div>

    <div class="col-md-6">
        <?= form_label('Contraseña', 'password', ['class' => 'form-label']); ?>
        <?= form_input(
            [
                'class' =>  form_error('password') ? 'form-control is-invalid' : 'form-control',
                'id' => 'password',
                'name' => 'password',
                'value' => set_value('password')
            ]
        ); ?>
        <div class="invalid-feedback">
            <?= form_error('password') ?>

        </div>
    </div>


    <div class="col-md-6">
        <?= form_label('Repetir contraseña', 'password2', ['class' => 'form-label']); ?>
        <?= form_input(
            [
                'class' =>  form_error('password') ? 'form-control is-invalid' : 'form-control',
                'id' => 'password2',
                'name' => 'password2',
                'value' => set_value('password2')
            ]
        ); ?>
        <div class="invalid-feedback">
            <?= form_error('password2') ?>
        </div>
    </div>

    <div class="col-md-3">
        <?= form_label('Rol del usuario', 'role', ['class' => 'form-label']); ?>
        <?= form_dropdown('role', ['' => 'Seleccione rol', 'Administrator' => 'Administrador',  'Supervisor' => 'Supervisor', 'Teacher' => 'Maestro'], set_value('role'), ['class' =>  form_error('role') ? 'form-select is-invalid' : 'form-select']); ?>
        <div class="invalid-feedback">
            <?= form_error('role') ?>
        </div>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="/term" class="btn btn-secondary">Cancelar</a>
    </div>
    </form>
</main>