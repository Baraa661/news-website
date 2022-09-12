<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive Laravel Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, laravel, theme, front-end, ui kit, web">
    <title>NobleUI - Laravel Admin Dashboard Template</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- CSRF Token -->
    <meta name="_token" content="8T72xOm23X3BWvQ9SCeB4UDjDxD3EyLPTCWzgtAe">

    <link rel="shortcut icon" href="../favicon.ico">

    <!-- plugin css -->
    <link href="../assets/fonts/feather-font/css/iconfont.css" rel="stylesheet" />
    <link href="../assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" />
    <link href="../assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" />
    <!-- end plugin css -->


    <!-- common css -->
    <link href="../css/app.rtl.css" rel="stylesheet" />
    <!-- end common css -->

</head>
<body data-base-url="https://www.nobleui.com/laravel/template/demo1-rtl">

    <script src="../assets/js/spinner.js"></script>

    <div class="row">
        <div class="col"></div>
        <div class="col-8 my-3">
            <div class="card rounded">
                <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                    <div class="ms-2">
                        <p>Title: {{$news->title}}</p>
                        <p class="tx-11 text-muted">Category: {{$news->Category->name}}</p>
                    </div>
                    </div>
                    
                </div>
                </div>
                <div class="card-body">
                    <p class="mb-3 tx-14">{{$news->content}}</p>
                    <img class="img-fluid" src="../assets/images/photos/img1.jpg" alt="">
                </div>
                <div class="card-footer bg-transparent">
                    <h4 class="tx-30 text-muted">Comments</h4>
                    
                    <ul class="list-group form-control" style="border: 0ch">
                        @foreach ($news->Comment as $c)
                            <li class="list-group-item form-contol" style="border-right: 0cm; border-left:0ch;">
                                {{$c->comment}}
                            </li>
                        @endforeach
                    </ul>
                </div>
                
            </div>
        
        </div>
        <div class="col"></div>

    </div>
    
    <!-- common js -->
    <script src="../assets/js/template.js"></script>
    <!-- end common js -->

</body>
</html>