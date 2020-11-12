<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    {{--    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">--}}
    {{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">--}}
    {{--    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">--}}
    {{--    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">--}}
    {{--    <meta name="author" content="ThemeSelect">--}}
    <title>Login</title>
    <link rel="apple-touch-icon" href="{{ asset('dashboard/theme-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashboard/theme-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/theme-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/theme-assets/vendors/css/charts/chartist.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/theme-assets/css/app-lite.css')}}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/theme-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/theme-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/theme-assets/css/pages/dashboard-ecommerce.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">


</div>

<div class="app-content content">
    <div class="row match-height">

        <div class="col-xl-5 col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="heading-multiple-thumbnails"><center>Login</center></h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>

                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="login-form">
                            <div class="input-group search-box">
                                <div class="position-relative has-icon-right full-width">
                                    <input class="form-control" id="username" type="text" placeholder="Enter Username" class="username-input">
                                    <input class="form-control" id="password" type="password" placeholder="Search Password" class="password-input">
                                    <button type="button" class="btn btn-primary btn-login">Login</button>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
</div>

<style>
    #username{
        margin: 12px auto;

    }
    #password{
        margin: 0 auto;
    }
    .btn-login{
        margin:0 auto;
        align-content: center;
    }
</style>
</body>
</html>
