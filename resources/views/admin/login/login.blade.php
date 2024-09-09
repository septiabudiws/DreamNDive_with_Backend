<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('loginn') }}/img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('loginn') }}/css/bootstrap.min.css">
  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="{{ asset('loginn') }}/css/fontawesome-all.min.css">
  <!-- Flaticon CSS -->
  <link rel="stylesheet" href="{{ asset('loginn') }}/font/flaticon.css">
  <!-- Google Web Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('loginn') }}/style.css">
</head>

<body>
  <div id="preloader" class="preloader">
    <div class='inner'>
      <div class='line1'></div>
      <div class='line2'></div>
      <div class='line3'></div>
    </div>
  </div>

  <section class="fxt-template-animation fxt-template-layout4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-12 fxt-bg-wrap">
          <div class="fxt-bg-img" data-bg-image="{{ asset('loginn') }}/img/bg.jpg">
            <div class="fxt-header">
              <div class="fxt-transformY-50 fxt-transition-delay-1">
              </div>
              <div class="fxt-transformY-50 fxt-transition-delay-2">
                <h1>DreamNDive</h1>
              </div>
              <div class="fxt-transformY-50 fxt-transition-delay-3">
                <p>Jangan Lupa Untuk Bersemangat Menjalani Hari-Hari Yang Melelahkan Ini Ya<br> WOPYUUUUUU <3</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12 fxt-bg-color">
          <div class="fxt-content">
            <div class="fxt-form">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $item)
                      <li>{{ $item }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <form method="POST">
                @csrf
                <div class="form-group">
                  <label for="email" class="input-label">Email Address</label>
                  <input value="{{ old('email') }}" type="email" id="email" class="form-control" name="email"
                    required="required">
                </div>
                <div class="form-group">
                  <label for="password" class="input-label">Password</label>
                  <input id="password" type="password" class="form-control" name="password" placeholder="********"
                    required="required">
                  <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                </div>
                <div class="form-group">
                  <button type="submit" class="fxt-btn-fill">Log in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- jquery-->
  <script src="{{ asset('loginn') }}/js/jquery.min.js"></script>
  <!-- Bootstrap js -->
  <script src="{{ asset('loginn') }}/js/bootstrap.min.js"></script>
  <!-- Imagesloaded js -->
  <script src="{{ asset('loginn') }}/js/imagesloaded.pkgd.min.js"></script>
  <!-- Validator js -->
  <script src="{{ asset('loginn') }}/js/validator.min.js"></script>
  <!-- Custom Js -->
  <script src="{{ asset('loginn') }}/js/main.js"></script>

</body>

</html>
