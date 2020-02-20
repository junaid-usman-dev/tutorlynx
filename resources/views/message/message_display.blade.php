<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
</head>
<body>

<h2>Chat Messages</h2>

@foreach ($users_converstion as $user_converstion)

    @if( $user_converstion->sender_id == '2' )

        <div class="container darker sender">
            <img src="http://127.0.0.1:8000/images/835846562.jpg" alt="Avatar" class="right" style="width:100%;">
            <p>{{ $user_converstion->text }}</p>
            <span class="time-left">11:05</span>
        </div>

    @else

          <div class="container receiver">
              <img src="http://127.0.0.1:8000/images/835846562.jpg" alt="Avatar" style="width:100%;">
              <p>{{ $user_converstion->text }}</p>
              <span class="time-right">11:00</span>
          </div>

      @endif
@endforeach


<form action="{{ action('Message\MessageController@store') }}">
      Message:<br>
      <input type="hidden" name="sender_id" id="sender_id" value={{ $sender_id }} >
      <input type="hidden" name="receiver_id" id="receiver_id" value={{ $receiver_id }} >

      <input type="text" name="message" placeholder="message">
      <br><br>
      <input type="submit" value="Submit">
</form> 




</body>
</html>
