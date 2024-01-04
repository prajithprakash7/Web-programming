<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

    <h2>REGISTRATION FORM</h2>

   <form id="myForm">
    <label for="name">Name:</label>
    <input type="text" size="65" id="name" name="name" required>
    <br>
<br>

    <label for="email">Email:</label>
    <input type="email" size="65" id="email" name="email" required>
    <br>
<br>

    <label for="phone">Phone:</label>
    <input type="tel" size="65" id="phone" name="phone" pattern="[0-9]{10}" required>
    <br>
<br>
    <label for="address">Address:</label>
    <textarea id="address" rows="4" cols="45" name="address" required></textarea>
    <br>
<br>
    <label for="courses">Courses:</label>
    <select id="courses" name="courses" required>
      <option value="">Select a course</option>
      <option value="MCA">MCA</option>
      <option value="MTECH">MTECH</option>
<option value="Msc">Msc</option>
      <option value="BTECH">BTECH</option>
      <!-- Add more options as needed -->
    </select>
    <br>
<br>


        <input type="submit" value="Submit">
    </form>

    <script>
        function validateForm() {
            // Reset error messages
            document.getElementById("nameError").innerHTML = "";
            document.getElementById("emailError").innerHTML = "";
            document.getElementById("passwordError").innerHTML = "";

            // Get form values
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            // Validate Name
            if (name === "") {
                document.getElementById("nameError").innerHTML = "Name is required";
                return;
            }

            // Validate Email
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById("emailError").innerHTML = "Invalid email address";
                return;
            }

            // Validate Password
            if (password.length < 8) {
                document.getElementById("telephoneError").innerHTML = " must be at least 10 characters long";
                return;
            }
  // Validate telephone
            var phoneRegex = /^[0-9]{10}$/;
            if (telephone.length < 10) {
                document.getElementById("passwordError").innerHTML = "Password must be at least 8 characters long";
                return;
}

            // If all validations pass, you can submit the form or perform other actions
            alert("Form submitted successfully!");
        }
    </script>

</body>
</html>


	
