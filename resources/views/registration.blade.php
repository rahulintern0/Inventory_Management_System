<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                  <div class="mb-md-5 mt-md-4 pb-5">

                    <h2 class="fw-bold mb-2 text-uppercase">Registration</h2>
                    <p class="text-white-50 mb-5">Please enter your Registration and password!</p>
                    <form action="{{ URL::to('RegistrationUser') }}" method="POST">
                        @csrf
                        <div data-mdb-input-init class="form-outline form-white mb-4">
                            <input type="text" name="name" id="typeEmailX" class="form-control form-control-lg" />
                            <label class="form-label" for="typeEmailX">Name</label>
                          </div>
                        <div data-mdb-input-init class="form-outline form-white mb-4">
                            <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                            <label class="form-label" for="typeEmailX">Email</label>
                          </div>

                          <div data-mdb-input-init class="form-outline form-white mb-4">
                            <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                            <label class="form-label" for="typePasswordX">Password</label>
                          </div>

                          <p class="small mb-3 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                          <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Registration</button>

                    </form>
                  </div>

                  <div>
                    <p class="mb-0">Already have an account? <a href="#!" class="text-white-50 fw-bold">login</a>
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
