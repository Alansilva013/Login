<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href= "{{asset('estilos/estilos.css')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>AF academy</title>
  </head>
  <body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="{{asset('estilos/escuela.png')}}"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Somos AF academy</h4>
                </div>

                <form action="{{route('register')}}" method="post">
                    @csrf 
                  <p>Registrate</p>

                  <div class="form-outline mb-4">
                    <input type="text" name="name" id="form2Example11" class="form-control"
                      placeholder="Ingresa tu nombre" />
                    <label class="form-label" for="form2Example11">Nombre</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" name="email" id="form2Example11" class="form-control"
                      placeholder="Ingresa tu correo" />
                    <label class="form-label" for="form2Example11">Correo</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="form2Example22" class="form-control"
                      placeholder="Ingresa tu contraseña" />
                    <label class="form-label" for="form2Example22">Contraseña</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password_confirmation" id="form2Example22" class="form-control"
                      placeholder="Confirma tu contraseña" />
                    <label class="form-label" for="form2Example22">Confirmar contraseña</label>
                  </div>



                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrate</button>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Login</p>
                    <a href="{{ route('login') }}" class="btn btn-outline-danger">Ir al Login</a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Bienvenido a nuestro centro de estudios.</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>