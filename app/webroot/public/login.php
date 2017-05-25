<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>登陆后台系统</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
</head>

<body class="login">
<div id="login">
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper" style="margin-top: 130px">
        <div class="row">
            <section class="login_content col-xs-offset-4 col-xs-4">
                <form @submit="login" method="post">
                    <h1>Login Form</h1>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" v-model="username"
                               name="username" required=""/>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" v-model="password"
                               name="password" required=""/>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="提交" class="btn btn-primary btn-lg btn-block"/>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>

<script type="text/javascript" src="js/vue.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</html>


