<x-layout>



     <!-- Header -->
     <header class="container-fluid">
        <div class="row vh-100 header text-center text-light align-items-center">
            <div class="col-12">
                <h1>Services</h1>
                <h4>Agency</h4>
            </div>
        </div>
     </header>

    {{-- main  --}}
    <main>
        {{-- section  --}}
        <section class="container-fluid my-5 min-vh-100">
            <div class="row justify-content-between">
                @foreach ($service as $singolo)
                    <div class="col-12 col-md-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">{{$singolo['serviceName']}}</h5>
                            <a href="{{route('detail-service', ['id' => $singolo['id']])}}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div> 
                    </div>
                @endforeach

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
</x-layout>