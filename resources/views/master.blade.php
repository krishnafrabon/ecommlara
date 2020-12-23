 <!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="{{asset('public/js/app.js')}}"></script>
 <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
 <link rel="stylesheet" href="{{asset('public/css/custom.css')}}">
</head>
<body>
 
 {{View::make('header')}}
 @yield('content')
 {{View::make('footer')}}
  
</body>
</html> 