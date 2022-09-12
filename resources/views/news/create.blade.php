<!DOCTYPE html>

<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
      <div class="col-6 mt-5">
        <div class="card">
          <div class="card-body">
    
            <h6 class="card-title">Basic Form</h6>
    
            <form class="forms-sample" action="{{ route('news.store') }}" method="post" >
              @csrf
              <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="title">
              </div>
              <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category_id" id="category" class="form-select" aria-label="category">
                    @foreach($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" rows="10" aria-describedby="content"></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary me-2">Submit</button>
            </form>
    
          </div>
        </div>
      </div>
      <div class="col"></div>
    </div>
    

    <!-- common js -->
    <script src="../assets/js/template.js"></script>
    <!-- end common js -->

</body>

<!-- Mirrored from www.nobleui.com/laravel/template/demo1-rtl/forms/basic-elements by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Aug 2022 17:49:11 GMT -->
</html>