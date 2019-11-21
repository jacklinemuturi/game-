<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body >
  <div>
    <form action="form.php" method="POST">
      <label id="reg">REGISTRATION  FORM</label><br>
      <br>
      FirstName
      <input id = "fname" type = "text" placeholder = "Your FirstName" name = "Fgitname"><br>
      LastName   
      <input id = "lname" type = "text" placeholder = "Your LastName"  name = "Lname"><br>                
      Phonenumber   
      <input id = "phone" type = "phonenumber" placeholder = "phonenumber" name = "phonenumber"><br>
      Gender
      <input id = "gender" type = "radio" name = "gender" value = "male">Male
      <input id = "gender" type = "radio" name = "gender" value = "female">female<br><br>
      Date of birth
      <input id = "date" type="date" id="start" name="trip-start"><br><br>   
      Language
      <input id = "lang" type = "checkbox" name = "Language" value = "html">HTML
      <input id = "lang" type = "checkbox" name = "Language" value = "css">CSS
      <input id = "lang" type = "checkbox" name = "Language" value = "php">PHP
      <input id = "lang" type = "checkbox" name = "Language" value = "js">JS
      <input id = "lang" type = "checkbox" name = "Language" value = "go">GO<br><br>
      Hobbies
      <input id = "hobby" type = "checkbox" name = "hobbies" value = "swimming">swimming      
      <input id = "hobby" type = "checkbox" name = "hobbies" value = "dancing">dancing
      <input id = "hobby" type = "checkbox" name = "hobbies" value = "singing">singing
      <input id = "hobby" type = "checkbox" name = "hobbies" value = "gaming">gaming<br><br>
      Email
      <input id = "email" type = "email" placeholder = "Enter Your Email" name = "email"><br>     
      password
      <input id = "password" type = "password" placeholder = "Enter Your password" name = "pass"><br><br> 
      Retype password
      <input id = "pass" type = "retype" placeholder = "retype password" name = "retypepass"><br><br>
      Additional info<br>
      <textarea name = "info" id = "text" value = "Add info"></textarea><br>
      <input id = "terms" type = "checkbox" name = "term">Terms and conditions<br><br>
      <button class= "btn btn-success btn-block">REGISTER</button>
       
    </form>
  </div>

               
            
       
         

     
</body>
</html>