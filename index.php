<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/fontawesome-free-5.0.12/svg-with-js/css/fa-svg-with-js.css">
    <link type="text/css" rel="stylesheet" href="./public/css/bootstrap-cerulean.min.css">
    <link type="text/css" rel="stylesheet" href="./public/css/style.css">

    <title>Login</title>

</head>
<body bgcolor="#a52a2a">

<div class="col-md-5 col-xs-6 col-md-offset-3" style="margin-top:100px;">
    <h1 style="text-align: center;">CONNEXION</h1>
    <div class="panel panel-info">
        <div></div>
        <div class="panel-body">
            <p><i class="fas fa-user"></i></p>
            <form method="post"  action="">
                <div id="info" class="alert cache">

                </div>

                <div>
                    <!--Je n'arrive pas inserer les icons-->
                    <p><i class="fas fa-user"></i></p>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text"  name="username" id="userN" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="Password" placeholder="Password"/>
                </div>

                <div class="form-group" style="text-align: right;">
                    <input class="btn btn-warning" type="button" onclick="showMessage()" name="connexion"id="connexion" value ="Connexion">
                </div>

            </form>

        </div>
    </div>
</div>
<script>

    function showMessage(){
        var inputUser = document.getElementById("userN");
        var inputPassword = document.getElementById("Password");
        var info = document.getElementById("info");
        if((inputUser.value).trim()=="" || (inputPassword.value).trim() == "" )
        {
            info.innerHTML="Erreur login ou password vide !!! ";
            info.classList.remove("cache");
            info.classList.remove("alert-success");
            info.classList.add("alert-danger");
        }else{
            info.innerHTML= "Bienvenue "+inputUser.value;
            info.classList.remove("cache");
            info.classList.remove("alert-danger");
            info.classList.add("alert-success");
        }

    }
</script>
</body>

</html>