<!DOCTYPE html>
<head>
    
    <title>art gallery</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

    <h2>gallery</h2>

   <form id="myForm">
    <label for="name">Name:</label>
    <input type="text" size="65" id="name" name="name" required>
    <br>
<br>

    <label for="date">Date:</label>
    <input type="date" size="65" id="email" name="email" required>
    <br>
<br>

 <label for="style">Style:</label>
    <input type="style" size="65" id="email" name="email" required>
    <br>
<br>

 <input type="submit" value="Submit">
    </form>

 <script>
   function validateForm() {
            
            document.getElementById("nameError").innerHTML = "";
            document.getElementById("dateError").innerHTML = "";
            document.getElementById("styleError").innerHTML = "";

            
            var name = document.getElementById("name").value;
            var date = document.getElementById("date").value;
            var style = document.getElementById("style").value;

            
            if (name === "") {
                document.getElementById("nameError").innerHTML = "Name is required";
                return;
            }

            
            if (date === "") {
                document.getElementById("dateError").innerHTML = "Name is required";
                return;
            }

          
            if (style === "") {
                document.getElementById("styleError").innerHTML = "Name is required";
                return;
            }

          
            alert("Form submitted successfully!");
        }
    </script>

</body>
</html>

