<!-- 
Assignment Title: HTML, Basic OOP, and Superglobal Variables in PHP
#Task 1: HTML Basics
Create an HTML form that allows users to input their name and email address. The form should have two fields: one for name and one for email. Use appropriate HTML tags to structure the form. 
#Task 2: Basic OOP in PHP

Create a PHP class called "Person" with the following properties and methods:
Properties:

Name
Email

Methods:
setName($name): sets the name property

setEmail($email): sets the email property

getName(): returns the name property

getEmail(): returns the email property

Create an instance of the Person class and set the name and email properties. Use the getName() and getEmail() methods to display the properties on the webpage.

#Task 3: Superglobal Variables in PHP

Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal variable. Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and email properties based on the form data. Use the getName() and getEmail() methods to display the properties on the webpage
-->


<!DOCTYPE html>
<html>
<head>
  <title>Person Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h2>Person Form</h2>
    <form action="" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <?php
    class Person {
      private $name;
      private $email;

      public function setName($name) {
        $this->name = $name;
      }

      public function setEmail($email) {
        $this->email = $email;
      }

      public function getName() {
        return $this->name;
      }

      public function getEmail() {
        return $this->email;
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST["name"];
      $email = $_POST["email"];

      $person = new Person();
      $person->setName($name);
      $person->setEmail($email);

      echo "<h2>Person Data</h2>";
      echo "<p><strong>Name:</strong> " . $person->getName() . "</p>";
      echo "<p><strong>Email:</strong> " . $person->getEmail() . "</p>";
    }
    ?>
  </div>
</body>
</html>


