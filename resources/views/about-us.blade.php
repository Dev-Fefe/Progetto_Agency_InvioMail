<x-layout>
     <!-- Header -->
     <header class="container-fluid">
        <div class="row vh-100 header-chi-siamo text-center text-light align-items-center">
            <div class="col-12">
                <h1>Chi siamo</h1>
                <h4>Agency</h4>
            </div>
        </div>
     </header>
     @if (session('emailError'))
     <div class="alert alert-danger">
         {{ session('emailError') }}
     </div>
    @endif

     <!-- main -->
     <main>
        <!-- sezione 1 -->
         <section class="container">
            <div class="row text-center my-3">
                <div class="col-12">
                    <h2>Lorem ipsum dolor sit.</h2>
                </div>
            </div>
            <div class="row justify-content-around" id="containerTeam">
              @foreach ($aboutus as $singolo)
              <div class="col-6 col-md-3">
                <div class="card my-2">
                  <img src="{{$singolo['img']}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{$singolo['name']}}</h5>
                    <p class="card-text text-truncate">{{$singolo['description']}}</p>
                    <p class="card-text">{{$singolo['job']}}</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
         </section>
         <section class="container d-flex justify-content-center my-5">
            <form action="{{route('contatto.invio')}}" method="POST">
              @csrf
              <div class="card_custom">
                  <span class="card__title mt-3">Contattaci</span>
                  <p class="card__content">Contattaci per le info.</p>
                  <div class="card__form">
                    <input placeholder="Name" type="text" id="name" name="nome">
                    <input placeholder="Your Email" type="email" id="email" name="email">
                    <textarea name="messaggio" id="description"></textarea>
                    <button type="submit" class="sign-up mb-3">Sign up</button>
                  </div>
              </div>
            </form>
         </section>
      </main>


    <!-- footer  -->
    <div class="container-fluid" id="footerDark">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 text-light">
        <p class="col-md-4 mb-0 text-footer">&copy; 2024 Company, Inc</p>

        <a class="navbar-brand text-footer" href="{{route('homepage')}}">Agency</a>
    
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link px-2 text-light">Home</a></li>
          <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link px-2 text-light">Features</a></li>
          <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link px-2 text-light">Pricing</a></li>
          <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link px-2 text-light">FAQs</a></li>
          <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link px-2 text-light">About</a></li>
        </ul>
      </footer>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
      });
    </script>
  </x-layout>