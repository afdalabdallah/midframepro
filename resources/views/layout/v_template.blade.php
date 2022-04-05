
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/site.css')}}"  />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3 d-flex justify-content-between">
            <div class="container-fluid d-flex w-100">
                <div>
                    <img src="{{URL::asset('logo1.png')}}" alt="logo" style="width:36px"/>
                     <a class="navbar-brand" asp-area="" asp-controller="q1" asp-action="Index">Medika</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
               
                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item active">
                            <a class="nav-link text-dark" href="/" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="/service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="/profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="/company">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" asp-area="" href="/collaboration">Collaboration</a>
                        </li>
                    </ul>
                </div>
                <div>
                  @guest
                    <ul class="navbar-nav flex-grow-1">
                      <li class="nav-item">
                        <a class="nav-link text-dark"  href="/signin">Sign In</a>
                      </li>
                      <li class="nav-item" style="background-color: pink; border-radius:12px">
                          <a class="nav-link text-dark" href="/signup">Sign Up</a>
                      </li>
                    </ul>
                  @endguest
                  @auth
                    <span>
                        {{ Auth::user()->firstName }}
                    </span>

                    <div>
                        <a  href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                  @endauth
                </div>
            </div>
        </nav>
    </header>

      @yield('content')

   <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" style="width:100%; bottom:0; position:relative">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset" style="text-decoration:none">
        <img src="{{URL::asset('wa.png')}}" style="width:26px"/>
      </a>
      <a href="" class="me-4 text-reset" style="text-decoration:none">
        <img src="{{URL::asset('ig.png')}}" style="width:26px"/>
      </a>
      <a href="" class="me-4 text-reset" style="text-decoration:none">
        <img src="{{URL::asset('telp.png')}}" style="width:26px"/>
      </a>
     
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <img src="{{URL::asset('logo1.png')}}" alt="logo" style="width:36px; margin-right:2px"/>Medika
          </h6>
          <p>
            Always providing the best for patients.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Userful Links
          </h6>
          <p>
            <a href="/" class="text-reset">Home</a>
          </p>
           <p>
            <a href="/service" class="text-reset">Service</a>
          </p>
          <p>
            <a href="/profile" class="text-reset">Profile</a>
          </p>
          <p>
            <a href="/company" class="text-reset">Company</a>
          </p>
          <p>
            <a href="/collaboration" class="text-reset">Collaboration</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Service
          </h6>
          <p>
            <a href="#!" class="text-reset">Appointments</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Check Up</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laboratory</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Medicine</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p>Jl. Teuku Umar No.460 C, Lamtemen Tim., Kec. Jaya Baru, Kota Banda Aceh</p>
          <p>
            afdalabdallahm@gmail.com
          </p>
          <p>
              +62 8236 7556 755
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="">medika.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    <script src="~/lib/jquery/dist/jquery.min.js"></script>
    <script src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="~/js/site.js" asp-append-version="true"></script>
    {{-- @await RenderSectionAsync("Scripts", required: false) --}}
</body>
</html>