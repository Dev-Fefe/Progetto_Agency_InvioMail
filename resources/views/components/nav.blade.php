    
    <!-- NavBar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="{{route('homepage')}}">Agency</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-ellipsis-vertical text-light fs-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-0">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{route('service')}}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{route('about-us')}}">Chi siamo?</a>
                </li>
            </ul>


          <!-- Bottone per aprire il modal -->
          <button type="button" class="btn btn-link text-white btn-modal px-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Effettua login <i class="fa-solid fa-user"></i>
          </button>

          <!-- Pulsante per la Dark Mode -->
          <div id="themeToggle" class="theme-toggle ms-md-2 py-2">
            <i id="icon" class="fas fa-sun toggle-icon text-warning"></i>
          </div>
          
      </div>
      
  </div>
</nav>

      <!-- Modal di Login -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog px-md-5">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title form-title" id="exampleModalLabel">Effettua il login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="position-relative m-2">
                <input type="email" class="form-control pe-1" placeholder="Email*" required>
            </div>
            <div class="position-relative m-2">
                <input type="password" class="form-control pe-1" placeholder="Password*" required>
            </div>
            </div>
                    
            <div class="modal-footer">
            <button type="submit" class="btn submit">
                Login
            </button>
            <p class="signup-link">
                No account?
                <a href="{{route('homepage')}}">Registrati</a>
            </p>
            </div>
        </div>
        </div>
    </div>
