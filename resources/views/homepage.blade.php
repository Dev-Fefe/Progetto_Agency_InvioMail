<x-layout>
     <!-- Header -->
     <header class="container-fluid">
        <div class="row vh-100 header text-center text-light align-items-center">
            <div class="col-12">
                <h1>Agency</h1>
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
            </div>
        </div>
     </header>
    
     @if (session('emailSent'))
        <div class="alert alert-success">
            {{ session('emailSent') }}
        </div>
    @endif


    <!-- main -->
    <main>
        <!-- section 1 -->
         <section class="container">
            <div class="row justify-content-around align-items-center mt-4 pb-4">
                <div class="col-12 text-center mt-5 mb-3">
                    <h2>Lorem ipsum dolor sit.</h2>
                </div>
                <div class="col-12 col-md-5">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper h-img-custom">
                            <div class="swiper-slide"><img src="/media/work1.jpg" class="" alt=""></div>
                            <div class="swiper-slide"><img src="/media/work2.jpg" class="" alt=""></div>
                            <div class="swiper-slide"><img src="/media/work3.jpg" class="" alt=""></div>
                        </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-12 col-md-5 text-center text-md-start">
                    <h5 class="fw-bold mt-4">Lorem, ipsum.</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. <strong>Fugiat </strong>similique voluptatem tempora deserunt iste minima ipsa, rem illum optio ut quibusdam adipisci, omnis, quidem hic magni <strong>exercitationem</strong> porro in alias.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. <strong>Fugiat </strong>similique voluptatem tempora deserunt iste minima ipsa, rem illum optio ut quibusdam adipisci, omnis, quidem hic magni <strong>exercitationem</strong> porro in alias.</p>
                </div>
            </div>
         </section>

        <!-- section 2  -->
        <section class="container">
            <div class="row text-center justify-content-around pb-4 border-top border-bottom">
                <div class="col-12 text-center mt-5 mb-3">
                    <h2>Lorem ipsum dolor sit.</h2>
                </div>
                <div class="col-12 col-md-3">
                    <p class="text-number">Partner</p>
                    <p id="Collab"></p>
                </div>
                <div class="col-12 col-md-3">
                    <p class="text-number">Vendite</p>
                    <p id="Vendite"></p>
                </div>
                <div class="col-12 col-md-3">
                    <p class="text-number">Clienti</p>
                    <p id="Client"></p>
                </div>
            </div>
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
        slidesPerView: 1,
        spaceBetween: 30,
        keyboard: {
            enabled: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
    </script>
    
</x-layout>