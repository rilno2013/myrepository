<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CU-DADIRAH | Login</title>

    <link href="<?= base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?= base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg" background="<?= base_url('assets/img/dadirah.jpg')?>">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to CU-Dadirah</h2>

                <p>
                Credit Union Dalan Diak Rai Hamutuk harii iha loron 8 Janeiro 2007, iha area subscrição municipio Dili, posto administrativo Dom Aleixo, Suco Colmera, Edifício Fomento – Mandarin. 
                </p>

                <p>
                Hahú loron 6 fulan Fevereiro tinan 2014, Direcção Nacional de registo e Notariado, Ministerio Justiça, Timor Leste, atribui personalidade jurídika (Legalidade) CU Dadirah, nebe identifika ho numero 207/2013.
                </p>

                <p>
                CU Dadirah harii tamba necessidade no exigência hodi sai laboratório aprendizagem ba funcionario Direcção Nacional Cooperativa e Micro, Pequena Empresa (DNCPE), iha altura neba
                </p>

               
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <p class="text-center"><img src="assets/img/dadirah.png" width="75" height="75"></p>
                    <form class="m-t" role="form">
                        <div class="form-group">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" id="userpass" name="userpass" class="form-control" placeholder="Password" required="">
                        </div>
                        <button type="button" id="btn-login" class="btn btn-primary block full-width m-b">Login</button>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>

                    </form>
                    <p class="m-t">
                        <small>Creditu Uniaun Dadirah &copy; <?=date('Y')?></small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Creditu Uniaun Dalan Diak Rai Hamutuk
            </div>
            <div class="col-md-6 text-right">
               <small>© 2022- <?=date('Y')?></small>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <!-- Toastr -->
    <script src="assets/js/plugins/toastr/toastr.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#btn-login").on("click",function(){
                var username= $("#username").val();
                var userpass= $("#userpass").val();
                if(username==""){
                    alert("Favor prense username!");
                    $("#username").focus();
                    return false;
                }

                if(userpass==""){
                    alert("Favor prense password!");
                    $("#userpass").focus();
                    return false;
                }

                $.ajax({
                    type:"POST",
                    url:"<?= base_url('auth/fn_login')?>",
                    dataType:"text",
                    data:{username:username,userpass:userpass},
                    success:function(res){
                        if(res==1){
                           window.location.href="<?= base_url('home/fn_getstock')?>";
                        }else{
                           alert("Login la susesu. Favor hare fila fali ita nia asesu username password!");
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>
