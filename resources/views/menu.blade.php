<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MENU</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Catégories
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ url('categories/create') }}">nouvelle categorie</a></li>
                  <li><a class="dropdown-item" href="{{ url('categories') }}">Liste des categories</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Documents
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ url('documents/create') }}">nouveau document</a></li>
                  <li><a class="dropdown-item" href="{{ url('documents') }}">Liste des documents</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Etudiants
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ url('etudiants/create') }}">nouveau etudiant</a></li>
                  <li><a class="dropdown-item" href="{{ url('etudiants') }}">Liste des etudiants</a></li>
                </ul>
              </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nationalité
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('nationalites/create') }}">nouveau</a></li>
              <li><a class="dropdown-item" href="{{ url('nationalites') }}">Liste des nationalités</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Niveau
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('niveaux/create') }}">nouveau</a></li>
              <li><a class="dropdown-item" href="{{ url('niveaux') }}">Liste des niveaux</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Piéces
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('pieces/create') }}">nouveau</a></li>
              <li><a class="dropdown-item" href="{{ url('pieces') }}">Liste des piéces</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Recherche</button>
        </form>
      </div>
    </div>
  </nav>


  