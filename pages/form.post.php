<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESPONSIVE LAYOUT STRUCTURE</title>
    <link rel="stylesheet" href="../css/customstyle.css">
    
</head>
<body>
    <!--STARTING TAG HEADER-->
    <header>
    <div>
        <h1>GREENHARVEST GROCERY STORE</h1>
        <h3>GREENY AND HEALTHY LIFESTYLE</h3>
    <div>
     <div class="container">
        <a href="../index.html">Home</a> |
        <a href="../pages/about.html">About</a> |
        <a href="../pages/contactus.html">Contact Us</a> |
       
        <button id="submit_btn"><a href="../pages/login.html">Login</a></button>
    </div>
</header>
<!--END TAG HEADER-->

<!--STARTING TAG HEADER-->
   <section>
    <nav>
        <ul>
            <li>
                <a href="./Heading.html">Heading</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="./Images.html">Images</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="./Tables.html">Tables</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="./Forms.html">Forms</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="./List.html">HTML List</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href=".">Form Post Method</a>
            </li>
        </ul>
    </nav>
    <article>
        <h2>Form Method Post Action</h2>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $fullname = htmlspecialchars($_POST['name']);
                $yourage = htmlspecialchars($_POST['age']);

                echo "<h2> Your name is : ".$fullname. "</h2>";
                echo "<h2> Your age is : ".$yourage. "</h2>";
            }
        
        ?>
    </article>
   </section> 
   <!--END TAG HEADER-->

    <!--STARTING TAG FOOTER-->
    <footer>
        <h2>GREENHARVEST</h2>
        <div>
            <a href="./AboutUs.html"> About Us </a> |
            <a href="./Privacy policy.html"> Privacy policy </a> |
            <a href="./Contact.html"> Contact </a> |
        </div>
        <div>
            <p>
                Copyrights &copy; GREENHARVEST (PHILIPPINES)
                PRIVATE LIMITED. All rights reserved.
            </p>
        </div>
     </footer>
     <!--END TAG FOOTER-->

     
</body>
</html>