<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-3 mt-5">
                <div class="card-body">
                    <form>
                  
    
                      <div class="row">
                      
                        <div class="col-sm-6">
                          <!-- radio -->
                         
                        </div>
                      </div>
    
                     
                    </form>
                  </div>
                <form action="{{ route('paper.submit') }}" method="POST">
                    @csrf
                    <ol>
                       @foreach ($data as $item)
                       <li>
                           <p>{{ $item->question }}</p>
                        <div class="form-group">
                            <div class="form-check">
                              <input type="radio" name="{{ $item->id }}" value="a">
                              <label class="form-check-label">A) {{ $item->a }}</label>
                            </div>
                            <div class="form-check">
                              <input type="radio" name="{{ $item->id }}" value="b">
                              <label class="form-check-label">B) {{ $item->b }}</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="{{ $item->id }}" value="c">
                                <label class="form-check-label">C) {{ $item->c }}</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="{{ $item->id }}" value="d">
                                <label class="form-check-label">D) {{ $item->d }}</label>
                            </div>
                          </div>
                          
                        </li>
                       @endforeach
                    </ol>
                    
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
