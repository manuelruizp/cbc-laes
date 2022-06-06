<main class="container mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar usuario</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/user" class="btn btn-sm btn-outline-secondary">Volver a usuarios</a>
            </div>
        </div>
    </div>

    <?= form_open('user/edit/' . $user['id'], ['class' => 'row g-3']); ?>

    <div class="col-md-3">
        <?= form_label('Primer nombre', 'first_name', ['class' => 'form-label']); ?>
        <?= form_input(
            [
                'class' =>  form_error('first_name') ? 'form-control is-invalid' : 'form-control',
                'id' => 'first_name',
                'name' => 'first_name',
                'value' => set_value('first_name', $user['first_name']),
            ]
        ); ?>
        <div class="invalid-feedback">
            El primer nombre es obligatorio.
        </div>
    </div>
    <div class="col-md-3">
        <?= form_label('Segundo nombre', 'middle_name', ['class' => 'form-label']); ?>
        <?= form_input(
            [
                'class' =>  form_error('middle_name') ? 'form-control is-invalid' : 'form-control',
                'id' => 'middle_name',
                'name' => 'middle_name',
                'value' => set_value('middle_name', $user['middle_name']),
            ]
        ); ?>
        <div class="invalid-feedback">
            El segundo nombre es obligatorio.
        </div>
    </div>

    <div class="col-md-6">
        <?= form_label('Apellidos', 'last_name', ['class' => 'form-label']); ?>
        <?= form_input(
            [
                'class' =>  form_error('last_name') ? 'form-control is-invalid' : 'form-control',
                'id' => 'last_name',
                'name' => 'last_name',
                'value' => set_value('last_name', $user['last_name']),
            ]
        ); ?>
        <div class="invalid-feedback">
            El campo de Apellidos es obligatorio.
        </div>
    </div>

    <div class="col-md-4">
        <?= form_label('Nombre de usuario', 'username', ['class' => 'form-label']); ?>
        <?= form_input(
            [
                'class' =>  form_error('username') ? 'form-control is-invalid' : 'form-control',
                'id' => 'username',
                'name' => 'username',
                'placeholder' => 'f.rodriguez',
                'value' => set_value('username', $user['username']),
            ]
        ); ?>
        <div class="invalid-feedback">
            El campo de Nombre del usuario es obligatorio.
        </div>
    </div>

    <div class="col-md-4">
        <?= form_label('Correo electrónico', 'email', ['class' => 'form-label']); ?>
        <?= form_input(
            [
                'class' =>  form_error('email') ? 'form-control is-invalid' : 'form-control',
                'id' => 'email',
                'name' => 'email',
                'placeholder' => 'f.rodriguez@cbc.edu.do',
                'value' => set_value('email', $user['email']),
            ]
        ); ?>
        <div class="invalid-feedback">
            El campo de Correo electrónico es obligatorio.
        </div>
    </div>

    <div class="col-md-4">
        <?= form_label('Rol del usuario', 'role', ['class' => 'form-label']); ?>
        <?= form_dropdown('role', ['' => 'Seleccione rol', 'Administrator' => 'Administrador',  'Supervisor' => 'Supervisor', 'Teacher' => 'Maestro'], set_value('role', $user['role']), ['class' =>  form_error('role') ? 'form-select is-invalid' : 'form-select']); ?>
        <div class="invalid-feedback">
            <?= form_error('role') ?>
        </div>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="/user" class="btn btn-secondary">Cancelar</a>
    </div>
    </form>
    <hr>

    <h4>Cursos asignados</h4>

    <table class="table table-sm" id="userGradeLevels">
        <thead>
            <th>Periodo de evaluación</th>
            <th>Curso</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <?php if (count($user_grade_levels) > 0) : ?>
                <?php foreach ($user_grade_levels as $grade_level_user) : ?>
                    <tr>
                        <td><?= $grade_level_user['term_title'] ?></td>
                        <td><?= $grade_level_user['grade_level_title'] ?></td>
                        <td>
                            <button data-bs-toggle="tooltip" title="Eliminar" onclick="deleteAssignment(this)" value="<?= $grade_level_user['id']; ?>">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>

                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td>Este usuario no tiene curso asignado para evaluar.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</main>

<script>
    function deleteAssignment(button) {
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                // Eliminar fila en la vista
                var indexRow = button.parentNode.parentNode.rowIndex;
                document.getElementById("userGradeLevels").deleteRow(indexRow);
            }
        };

        xmlhttp.open("GET", "/user/unassign/" + row.value, true);
        xmlhttp.setRequestHeader("X-Requested-With", "XMLHttpRequest");
        xmlhttp.send();
    }
</script>