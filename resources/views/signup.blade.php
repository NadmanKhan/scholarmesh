<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    <link href="style.scss" rel="stylesheet">
    <script type="text/javascript" src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js'></script>
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css'
    media="screen" />

    <style>
        #form-signup{
            width: 500px;
            margin: 0 auto;
            position: relative;
            top: 100px;
        }

    </style>

</head>


<body class="text-center bg-dark-secondary text-light-secondary">

<main id="form-signup">
        <form method="signup" action="create" id="form1">
            <div style="max-width: 400px;">

                <img class="mb-4" src="assets/brand/scholarmesh-logo.svg" alt="" width="72" height="57">
                
                <h2 class="form-signin-heading mb-3 fw-normal">
                    Signup</h2>
                <hr>
                <label for="firstname">
                    Firstname</label>
                <input name="firstname" type="text" id="txtUsername" class="form-control" placeholder="Enter Username"
                    required />
                <br />
                <label for="lastname">
                    Lastname</label>
                <input name="lastname" type="text" id="txtUsername" class="form-control" placeholder="Enter Username"
                    required />
                <br />
                <label for="Password">
                    Password</label>
                <input name="Password" type="password" id="txtPassword" title="Password must contain: Minimum 8 characters atleast 1 Alphabet and 1 Number"
                    class="form-control" placeholder="Enter Password" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" />
                <br />
                <label for="ConfirmPassword">
                    Confirm Password</label>
                <input name="ConfirmPassword" type="password" id="txtConfirmPassword" class="form-control"
                    placeholder="Confirm Password" />
                <br />
                <label for="Email">
                    Email</label>
                <input name="Email" id="txtEmail" class="form-control" placeholder="Enter Email"
                    required type="email" />
                <br />

                <label for="PhoneNumber">
                    Phone number</label>
                <input name="PhoneNumber" id="txtEmail" class="form-control" placeholder="Enter Phone number"
                    required type="email" />
                
                <br />
                <div class="form-check">
                      <input class="form-check-input" type="radio" name="IndividualRadio" id="exampleRadios1" value="option1" checked>
                      <label class="form-check-label" for="IndividualRadio">
                        Individual
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="PublisherRadio" id="exampleRadios2" value="option2">
                      <label class="form-check-label" for="PublisherRadio">
                        Publisher
                      </label>
                </div>

                <hr />
                <input type="submit" name="btnSignup" value="Sign up" id="btnSignup" class="w-100 btn btn-lg btn-primary" />
            </div>
        </form>
</main>


<script type="text/javascript">
    window.onload = function () {
        var txtPassword = document.getElementById("txtPassword");
        var txtConfirmPassword = document.getElementById("txtConfirmPassword");
        txtPassword.onchange = ConfirmPassword;
        txtConfirmPassword.onkeyup = ConfirmPassword;
        function ConfirmPassword() {
            txtConfirmPassword.setCustomValidity("");
            if (txtPassword.value != txtConfirmPassword.value) {
                txtConfirmPassword.setCustomValidity("Passwords do not match.");
            }
        }
    }
</script>

</body>
</html>
