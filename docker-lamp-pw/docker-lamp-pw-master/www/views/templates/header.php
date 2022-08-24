<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- jquery JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="assets/script/script.js"></script>
        <!-- icones -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <nav id="nav" class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
              <a id="logo" class="navbar-brand" href="?controler=site&action=home">Mvendas</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a id="home"class="nav-link" href="?controller=site&action=home">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a id="produtos" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Produtos</a>
                    <ul class="dropdown-menu">
                      <li><a id="dropMasculino" class="dropdown-item" href="?controller=site&action=masculino">Masculino</a></li>
                      <li><a id="dropFeminino" class="dropdown-item" href="?controller=site&action=feminino">Feminino</a></li>
                      <li><a id="dropInfantil" class="dropdown-item" href="?controller=site&action=infantil">Infantil</a></li>
                    </ul>
                  <li class="nav-item">
                    <a id="sobreNos"class="nav-link" href="?controller=site&action=sobreNos">Sobre Nós</a>
                  </li>
                  <li class="nav-item">
                    <a id="registro"class="nav-link" href="?controller=client&action=register">Registro</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
        </header>