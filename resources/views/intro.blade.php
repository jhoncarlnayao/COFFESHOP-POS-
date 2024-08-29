<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/introduction.css') }}">
    <title>Document</title>
</head>
<body>
  <div class="biglogo">
    <img src="{{ asset('images/biglogo.png') }}" alt="">
  </div>




  <script>
  
    setTimeout(function() {
        window.location.href = "{{ url('login') }}";
    }, 5000);
</script>
</body>
</html>