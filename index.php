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
    <h1 style="margin: 0 auto ">CONNEXION</h1>
    <div class="panel panel-info" style="margin: 0 auto">
        <div></div>
        <div class="panel-body" style="margin: 0 auto ">
            <p><i class="fas fa-user"></i></p>
            <form method="post"   >
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
                    <input class="btn btn-warning" type="button" onclick="ajax()" name="connexion"id="connexion" value ="Connexion">
                </div>

            </form>

        </div>
    </div>
</div>
<script>
    var inputUser = document.getElementById("userN");
    var inputPassword = document.getElementById("Password");
    var info = document.getElementById("info");

    function showMessage(){
        if((inputUser.value).trim()=="project" || (inputPassword.value).trim() == "bbs" )
        {
            info.innerHTML= "Bienvenue ";
            info.classList.remove("cache");
            info.classList.remove("alert-danger");
            info.classList.add("alert-success");
        }else {


            info.innerHTML="Erreur login ou password incorrect !!! ";
            info.classList.remove("cache");
            info.classList.remove("alert-success");
            info.classList.add("alert-danger");
        }
    }
    var ajax = function(){
        var xhttp=new XMLHttpRequest();
        var params="login=abdou&password=pass";

        xhttp.open("POST","server.php",true)

        xhttp.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
                alert(this.responseText);
            }

        }
        xhttp.send(params);
    }
</script>
</body>

</html>