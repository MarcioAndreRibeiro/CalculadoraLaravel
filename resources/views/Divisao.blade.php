<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Divisão</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<h2>CALCULADORA</h2>

<form method="post" action="/resultado">
{{csrf_field()}}

  Número 1:<br>
  <input type="number" name="num1" id="">
  <br>
  Número 2:<br>
  <input type="number" name="num2" id="">
  
  <button type="submit" value="dividir">Dividir</button>
</form>

    
</body>
</html>