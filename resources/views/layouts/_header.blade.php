
    <nav class="navbar navbar-expand-lg navbar-light fixed top-0">
        <div class="container-fluid">
          <a class="navbar-brand" >TS-IMMO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('proprietes.create') }}">Ajouter un propriété</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('proprietes.index') }}">Propriétes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('proprietaires.create') }}">Ajouter un Propriétaire</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('proprietaires.index') }}">Propriétaires</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('agences.create') }}">Ajouter un Agence</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('agences.index') }}">Agences</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>