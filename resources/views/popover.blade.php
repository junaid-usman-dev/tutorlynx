<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>



<div class="container">
    <h1>Popover Example</h1>
    <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
</div>

<div class="container">
    <h1>Popover Example 2</h1>
    <input title="Dismissible popover" type="text" placeholder="Input Field" data-toggle="popover" data-trigger="focus" data-content="And here's some amazing content. It's very engaging. Right?" />
</div>

<div class="popover" role="tooltip">
    <div class="arrow">
    </div>
    <h3 class="popover-header">test header</h3>
    <div class="popover-body">
        test body body
    </div>
</div>


<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
//     $('.popover-dismiss').popover({
//   trigger: 'focus'
// })  
});
</script>

</body>
</html>
