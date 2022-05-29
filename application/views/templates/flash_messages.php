<?php if ($this->session->flashdata('success')) : ?>
    <div class="container mt-5 mb-2">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>¡Éxito!</strong> <?= $this->session->flashdata('success') ?>
        </div>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('error')) : ?>
    <div class="container mt-5 mb-2">
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>¡Error!</strong> <?= $this->session->flashdata('error') ?>
        </div>
    </div>
<?php endif; ?>