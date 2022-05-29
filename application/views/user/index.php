<main class="container mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestión de usuarios</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/students/create" class="btn btn-sm btn-outline-secondary">Crear usuario</a>
            </div>
        </div>
    </div>

    <?= form_open('user/index', ['class' => 'row g-3 align-items-center']) ?>
    <div class="col-auto">
        <label for="name" class="col-form-label">Nombre</label>
    </div>
    <div class="col-auto">
        <input type="text" name="search" class="form-control" value="<?= $search_query; ?>">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary">Buscar</button>
        <a class="btn btn-outline-secondary" href="/user">Reiniciar</a>
    </div>
    <?= form_close(); ?>

    <table class="table">
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
                        <td><?= $user['last_name'] . ", " . $user['first_name']  ?></td>
                        <td><?= $user['email']; ?></td>
                        <td><?= $user['username'] ?></td>
                        <td>
                            <a href="<?= site_url(['user', 'view', $user['id']]); ?> ">Ver</a>
                            <a href="<?= site_url(['user', 'view', $user['id']]); ?> ">Editar</a>
                            <a href="<?= site_url(['user', 'view', $user['id']]); ?> ">Desactivar</a>
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