<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('icons/bootstrap-icons.css') }}"/>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

    <title>Login &mdash; ScholarMesh</title>
</head>


<body class="text-center bg-dark-secondary text-light-secondary">

<main class="form-signin d-flex align-items-center">
    <div class="d-flex flex-column">
        <form action="/login" method="POST" class="needs-validation">
            @csrf

            <img class="m-5" src="{{ asset('svg/sm-full.svg') }}" alt="ScholarMesh logo" width="250rem"/>

            {{--<h2 class="my-3 fw-normal">Sign in</h2>--}}

            <div class="form-floating mt-3">
                <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" required/>
                <label for="email">Email address</label>
                <div class="invalid-feedback">
                    <p>Valid last name is required.</p>
                    <p>Valid last name is required.</p>
                </div>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="password" placeholder="Password" required/>
                <label for="password">Password</label>
                <div class="invalid-feedback">
                    <p>Valid last name is required.</p>
                    <p>Valid last name is required.</p>
                </div>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
        </form>

        <div class="row mt-5">
            <a href="/signup" class="fs-5">Don&rsquo;t have an account? Sign up.</a>
        </div>
    </div>

</main>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script>
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        let forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
</body>
</html>
