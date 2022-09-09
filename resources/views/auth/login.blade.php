
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nguyễn Vinh - Demo Login</title>
    <!-- Bootstrap -->
    <link href="{{ asset('modules/layout/assets/bootstrap/dist/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('modules/layout/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('modules/layout/assets/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">

</head>

<body class="login">
    <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
        <section class="login_content">
            <form method="post">
                @csrf
                <h1>Login Admin</h1>
                <div>
                    <input name="email" type="email" class="form-control" placeholder="Email" required="" />
                </div>
                <div>
                    <input name="password" type="password" class="form-control" placeholder="Password" required="" />
                </div>
                <div>
                    <button type="submit" class="btn btn-round btn-warning">Đăng nhập</button>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <div>
                        <p>@2022 All Rights Reserved. Nguyen Vinh! is a Cms module. Privacy and Terms</p>
                    </div>
                </div>
            </form>
        </section>
        </div>
    </div>
    </div>
</body>
</html>
