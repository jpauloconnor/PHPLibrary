<!--
Run xampp:
Results found at localhost:
http://localhost:8080/php-101-fundamentals/01-forms/01-httppost.php
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Post - Modified from PS Tutorial</title>
</head>
<body>
    <?php
      if (isset($_POST['submit'])) {
        $ok = true;
        if (!isset($_POST['name']) || $_POST['name'] === '') {
            $ok = false;
        }
        if (!isset($_POST['password']) || $_POST['password'] === '') {
            $ok = false;
        }
        if (!isset($_POST['gender']) || $_POST['gender'] === '') {
            $ok = false;
        }
        if (!isset($_POST['news']) || $_POST['news'] === '') {
            $ok = false;
        }
        if (!isset($_POST['languages']) || !is_array($_POST['languages'])
              || count($_POST['languages']) === 0) {
            $ok = false;
        }
    
        if ($ok) {
          printf('Username: %s
          <br>Password: %s
          <br>Gender: %s
          <br>Language(s): %s
          <br>Coding Newsletter: %s',
              htmlspecialchars($_POST['name']),
              htmlspecialchars($_POST['password']),
              htmlspecialchars($_POST['gender']),
              htmlspecialchars(implode(' ', $_POST['languages'])),
              htmlspecialchars($_POST['news']));
        }
      }
    ?>

    <form method="post" action="">
    User name: <input type="text" name="name"><br>
    Password: <input type="password" name="password"><br>
    Gender:
        <input type="radio" name="gender" value="f">female
        <input type="radio" name="gender" value="m">male<br>
    Coding Languages:
        <select name="languages[]" multiple size="3">
            <option value="php">PHP</option>
            <option value="js">JavaScript</option>
            <option value="cs">C#</option>
            <option value="jv">Java</option>
        </select><br>
    <input type="checkbox" name="news" value="ok">Sign me up for the newsletter.<br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>