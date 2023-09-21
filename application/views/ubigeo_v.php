<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $titulo ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <h2><?= $titulo ?></h2>
    </div>
    <div class="row">
      <div class="offset-1 col-2">
        <?= form_label('Departamento:', 'sDep', ['class' => 'form-label']) ?>
        <?= form_dropdown('sDep', $dptos, [], 'class="form-select" id="sDep"') ?>
      </div>
      <div class="col-3">
        <?= form_label('Provincias:', 'sPro', ['class' => 'form-label']) ?>
        <?= form_dropdown('sPro', [], [], 'class="form-select" id="sPro"') ?>
      </div>
      <div class="col-4">
        <?= form_label('Distritos:', 'sDis', ['class' => 'form-label']) ?>
        <?= form_dropdown('sDis', [], [], 'class="form-select" id="sDis"') ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="<?= base_url() ?>js/ubigeo.js"></script>
</body>

</html>