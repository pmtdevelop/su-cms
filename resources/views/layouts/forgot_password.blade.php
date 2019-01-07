<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Log In</title>
    <link href="css/global.css" rel="stylesheet">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
</head>
<body class="loggedout_body">

<div class="loggedout_fluid_container">
    <div class="loggedout_vcenter">

        <div id="loggedout_container">
            <div id="loggedout_module">
                <a href="http://www.vultr.com" class="login-element"></a>
                Enter your email address to retrieve your password
                <hr class="hr20"/>
                <form method="post">
                    <input type="hidden" name="csrf_token" value="rwomY1BiQzSut3APyOYQXdnjKglGu183a7IW/xt4iik=">
                    <input type="hidden" name="action" value="forgot_password">
                    <input name="email" type="text" class="flexwidth100" placeholder="Email Address" value="" required="required" autofocus/>
                    <hr class="hr20"/>


                    <hr class="hr15"/>
                    <input type="submit" value="Retrieve Password" class="flexwidth100" onclick="this.disabled = true; this.form.submit();  this.value = 'Please wait...'"/>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
