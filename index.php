<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="javascript.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <!-- sending api call using action -->
  <form action="action.php" method="post">
    <input id="name" placeholder="first_name" name="name" />

    <button type="submit">Send Message</button>
  </form>
  <!-- using ajax in javascript file -->
  <input id="name" placeholder="first_name" name="person_name" />
  <button id="btn">fetch</button>
</body>

</html>