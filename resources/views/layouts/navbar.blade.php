<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <a class="navbar-brand" href="{{url('/')}}" ><h1><strong>QUIERO A MI MASCOTA</strong></h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>PERROS</strong></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/perros/informacion')}}">Informacion</a>
                    <a class="dropdown-item" href="{{url('/perros/productos')}}">Productos</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>GATOS</strong></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/gatos/informacion')}}">Informacion</a>
                    <a class="dropdown-item" href="{{url('/gatos/productos')}}">Productos</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="{{url('contactos')}}"><strong>CONTACTOS</strong><span class="sr-only">(current)</span></a>
            </li>
            
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><strong>BUSCAR</strong></button>
        </form>
    </div>
</nav>