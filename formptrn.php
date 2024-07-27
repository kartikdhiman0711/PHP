<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="ptrnform.php" method="GET">
      <!-- Username: <input type = "text" id = "usrname" name = "usrname"><br><br> -->
      First Name: <input type="text" id="fname" name="fname" /><br /><br />
      <!-- Middle Name: <input type = "text" id = "mname" name = "mname"><br><br> -->
      Last Name: <input type="text" id="lname" name="lname" /><br /><br />
      <!-- Enter your Date of Birth (min age: 18 and max age: 24)<br><br>
        Day: <input type = "number" id = "day" name = "month" min = 1 max = 31><br><br>
        Month: <input type = "number" id = "month" name = "month" min = 1 max = 12><br><br>
        Year: <input type = "number" id = "year" name = "year" min = 2001 max = 2005><br><br> -->
      Date of Birth: <input type="text" id="dob" name="dob" /><br /><br />
      Email Id: <input type="text" id="email" name="email" /><br /><br />
      Password:
      <input type="password" value="FakePSW" id="myInput" /><br /><br />
      <input type="checkbox" onclick="myFunction()" />Show Password

      <script>
        function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
      </script>
      <!-- Confirm Password: <input type = "password" id = "cpwd" name = "cpwd"><br><br> -->
      <!-- Gender: <input type="radio" name="gender" value="male"> Male  -->
      <!-- <input type="radio" name="gender" value="female"> Female<br><br> -->
      <input type="submit" />
    </form>
  </body>
</html>
