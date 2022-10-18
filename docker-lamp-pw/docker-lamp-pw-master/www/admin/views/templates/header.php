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
    <header class="p-3 text-center text-white bg-dark">
      <h1>Área administrativa</h1>
      <a href="?controller=main&action=logout">Sair</a>
    </header>
    <div class="container-fluid">
      <div class="row">
        <nav class="p-3 col-md-3">
          <h2>Menu</h2>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="?controller=main&action=index">Home</a>
            </li>
          </ul>
          <h3>Clientes</h3>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="?controller=client&action=listClients">Listar Clientes</a>
            </li>
            <li class="nav-item">
              <a id="registro"class="nav-link" href="?controller=client&action=insertClient">Cadastrar Cliente</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
