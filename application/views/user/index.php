<main class="container mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestión de usuarios</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/user/create" class="btn btn-sm btn-outline-secondary">Crear usuario</a>
            </div>
        </div>
    </div>

    <?= form_open('user/index', ['class' => 'row g-2 align-items-center justify-content-end']) ?>
    <div class="col-auto">
        <input type="text" name="search_user" class="form-control form-control-sm" placeholder="Buscar..." value="<?= $search_user; ?>">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
        <a class="btn btn-outline-secondary  btn-sm" href="/user/index/0/1">Reiniciar</a>
    </div>
    <?= form_close(); ?>

    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Nombre de usuario</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($users) > 0) : ?>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['last_name'] . ", " . $user['first_name'] . $user['middle_name'] ?></a>
                        </td>
                        <td><?= $user['email']; ?></td>
                        <td><?= $user['username'] ?></td>
                        <td>
                            <a data-bs-toggle="tooltip" title="Editar" href="<?= site_url(['user', 'edit', $user['id']]); ?> "><i class="fa-regular fa-pen-to-square"></i></a>
                            <a data-bs-toggle="tooltip" title="Asignar curso" href="<?= site_url(['user', 'assign', $user['id']]); ?> "><i class="fa-regular fa-rectangle-list"></i></a>
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