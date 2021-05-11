<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> UVS | GMBASE</title>
        <meta charset = "utf-8" />
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    </head>

    <body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Expand at sm</a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample03" style="">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Guide</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Pole</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                <?php foreach(\App\Model\Entity\Pole::all() as $pole):?>
                    <li><a href='./' class="dropdown-item" href="#"><?=$pole->getName()?></a></li>
                <?php endforeach;?>

            </ul>
          </li>
        </ul>
        
        <ul class="navbar-nav mb-2 mb-sm-0">
            <li class="nav-item dropdown d-block col-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu fs-6" aria-labelledby="dropdown03">
              <li>
                <a class="dropdown-item" href="#">
                <div class="text-center d-inline">
                    <img src="..." class="rounded-cirle" alt="...">
                </div>
                Profil
              </a>
              </li>
              <li><a class="dropdown-item" href="#">parametrage</a></li>
              <li><a class="dropdown-item btn-link" href="#">Deconnection</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>