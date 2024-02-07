<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <section>
        <a href="/welcome"><img src="/images/logo.png" width="20%"></a>
    </section>
    <section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form action="/login" method="POST">
            {{csrf_field()}}
            <h3>Log in</h3>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control form-control-lg"
                placeholder="Enter a valid email address" />
                <label class="form-label" for="email">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" id="password" name="password" class="form-control form-control-lg"
                placeholder="Enter password" />
                <label class="form-label" for="password">Password</label>
            </div>


            <div class="text-center text-lg-start mt-4 pt-2">
                <input type="submit" class="btn btn-primary"
                value="login">
                <a class="btn btn-danger" type="submit" href="welcome">Back to Home</a>
                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href=""
                    class="link-danger">Register</a></p>
            </div>

            </form>
        </div>
        </div>
    </div>
    </section>
    </body>
    </html>
