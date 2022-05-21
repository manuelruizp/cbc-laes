<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <link rel="shortcut icon" href="/favicon.png">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/assets/bootstrap/js/bootstrap.js"></script>
</head>

<body>

    <main class="form-login w-100 m-auto">
        <?= form_open('auth/login'); ?>

        <img class="mb-4" src="/assets/images/logo.png" alt="" width="100%" height="100%">
        <h1 class="h3 mb-3 fw-normal">Por favor ingresar</h1>

        <div class="input-group">
            <?= form_input(
                [
                    'name' => 'username',
                    'value' => set_value('username'),
                    'class' =>  form_error('username') ? 'form-control is-invalid' : 'form-control',
                    'placeholder' => 'Nombre de usuario',
                    'autofocus' => 'autofocus'
                ]
            ); ?>
            <span class="input-group-text">@cbc.edu.do</span>
            <div class="invalid-feedback">
                <?= form_error('username'); ?>
            </div>
        </div>

        <div>
            <?= form_password(
                [
                    'name' => 'password',
                    'class' =>  form_error('password') ? 'form-control is-invalid' : 'form-control',
                    'value' => set_value('password'),
                    'placeholder' => 'Contraseña',
                ]
            ); ?>
            <div class="invalid-feedback">
                <?= form_error('password'); ?>
            </div>

        </div>

        <div>
            <?= form_dropdown('term_id', $terms, set_value('term_id'), ['class' => form_error('term_id') ? 'form-select is-invalid' : 'form-select']); ?>
            <div class="invalid-feedback">
                <?= form_error('term_id'); ?>
            </div>
        </div>

        <button class="mt-1 w-100 btn btn-md btn-primary" type="submit">Ingresar</button>

        <p class="mt-2 text-muted text-center">
            Sistema de Gestión de Evaluaciones LAES
            &copy; 2021–2022
        </p>

        <?= form_close(); ?>
    </main>

</body>

</html>