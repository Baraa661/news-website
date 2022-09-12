<html>

<!-- Mirrored from www.nobleui.com/laravel/template/demo1-rtl/tables/basic-tables by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Aug 2022 17:49:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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

    <div class="row my-2">
      <div class="col"></div>
      <div class="col-10">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title" style="color: rgb(253, 168, 182)">Dashboard</h3>
            <p class="text-muted mb-3">
              <button type="button" class="btn btn-danger mb-1 mb-md-0"><a href="{{ route('news.create') }}" style="color: white">Add</a></button>
            </p>
            <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $no = 1;    
                    @endphp
                    @foreach ($news as $n)
                      <tr>
                          <th>{{$no++}}</th>
                          <td>{{substr($n->title,0,30)}}</td>
                          <td>{{$n->Category->name}}</td>
                          <td>
                              <button type="button" class="btn btn-inverse-info mb-1 mb-md-0"><a href="{{route('news.show',$n)}}">View</a></button>
                              <button type="button" class="btn btn-inverse-warning mb-1 mb-md-0">Edit</button>
                              <button type="button" class="btn btn-inverse-danger mb-1 mb-md-0"><a href="#" style="color: hotpink;">Delete</a></button>
                          </td>
                      </tr>
                    @endforeach
                    
                  </tbody>
                </table>
            </div>
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