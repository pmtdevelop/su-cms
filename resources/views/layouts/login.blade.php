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
                <form method="post">
                    <input type="hidden" name="action" value="">
                    <div class="login-email">
                        <input name="username" type="text" class="flexwidth100" placeholder="Email Address" value="" required="required" autofocus/>
                    </div>
                    <hr class="hr15"/>
                    <div class="login-password">
                        <input name="password" type="password" class="flexwidth100" placeholder="Password" required="required">
                    </div>
                    <hr class="hr15"/>
                    <input type="submit" value="Login" class="flexwidth100" onclick="this.disabled = true; this.form.submit();  this.value = 'Logging in...'"/>
                    <hr class="hr20"/>
                    Help, I <a href="#">forgot my password</a>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
