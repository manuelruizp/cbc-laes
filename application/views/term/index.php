<main class="container mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestión de Periodos de evaluación</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="/term/create" class="btn btn-sm btn-outline-secondary">Crear periodo</a>
            </div>
        </div>
    </div>

    <?= form_open('term/index', ['class' => 'row g-2 align-items-center justify-content-end']) ?>
    <div class="col-auto">
        <input type="text" name="search_term" class="form-control form-control-sm" placeholder="Buscar periodo..." value="<?= $search_term; ?>">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
        <a class="btn btn-outline-secondary  btn-sm" href="/term/index/0/1">Reiniciar</a>
    </div>
    <?= form_close(); ?>

    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">Título</th>
                <th scope="col">Fecha de inicio</th>
                <th scope="col">Fecha de finalización</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($terms) > 0) : ?>
                <?php foreach ($terms as $term) : ?>
                    <tr>
                        <td>
                            <a href="<?= site_url(['terms', 'view', $term['title']]); ?> ">
                                <?= $term['title'] ?>
                            </a>
                        </td>
                        <td><?= $term['start_date']; ?></td>
                        <td><?= $term['end_date'] ?></td>
                        <td>
                            <a href="<?= site_url(['term', 'edit', $term['id']]); ?>">Editar</a>
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