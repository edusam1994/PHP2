<!DOCTYPE html>
<html>
<head>
    <title>Subscriber Page</title>
  
   <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="View Subscribers.php">View Subscribers <span class="sr-only">(Followers)</span></a>
           
        </div>
    </nav>
    
    <section class="masthead">
        <h1>THE MATRIX VERSE </h1>
        <p style="font-family: 'Arial', sans-serif; font-size: 18px; letter-spacing: 1px; line-height: 1.5;">
    Join our exclusive subscriber community and unlock a world of knowledge, insights, and entertainment. Subscribe now to stay updated with the latest content, access exclusive resources, and be part of The Matrix Verse family. Don't miss out on this opportunity to dive deep into the realms of the matrix. Enter your name and email below and become part of our growing community today!
</p>

<section class="form-row row justify-content-center">
    <form method="post" action="add.php" class="form-horizontal col-md-6 col-md-offset-3">
        <div class="text-center">
            <p><input type="text" name="name" placeholder="Your Name"></p>
            <p><input type="text" name="email" placeholder="Your Email"></p>
            <p><input type="text" name="age" placeholder="Your Age"></p>
            <p><input type="text" name="phone" placeholder="Insert phone"></p>
            <input class="btn btn-primary order" type="submit" name="Submit" value="Add">
            <input class="btn btn-dark reset" type="reset" value="Clear">
        </div>
    </form>
</section>


    </main>
    <form method="post" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
    <!-- Add your JavaScript scripts or additional footer content here -->
    <script>
    // Example JavaScript code to handle form submission
    window.onload = function() {
        // Find the form element
        var form = document.querySelector('form');

        // Add an event listener for form submission
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Get form values
            var name = form.elements['name'].value;
            var email = form.elements['email'].value;
            var age = form.elements['age'].value;
            var interests = form.elements['phone'].value;

            // Perform validation and further processing if needed

            // Submit the form
            form.submit();
            
        });
    };
</script>

</body>
</html>
