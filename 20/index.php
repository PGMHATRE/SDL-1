<?php 
        // Check if the form is submitted
        if (isset($_GET['b1'])) { 
            // Get cookie name and value from form
            $cookie_name = $_GET['tf1']; 
            $cookie_value = $_GET['tf2']; 

            // Set the cookie
            setcookie($cookie_name, $cookie_value, time() + 3600); // Expires in 1 hour

            // Check if the cookie is set (will be available on next reload)
            if (isset($_COOKIE[$cookie_name])) { 
                echo "Cookie set successfully with below details:<br>";
                echo "Cookie Name: $cookie_name <br>";
                echo "Cookie Value: $cookie_value <br><br>";
            } else { 
                echo "Cookie is not set (Try refreshing the page to see it).";
            }
        }
        ?> 

        <!-- HTML form to take cookie name and value -->
        <html> 
        <body> 
            <form method="get"> 
                Enter Cookie Name: <input type="text" name="tf1"><br><br> 
                Enter Cookie Value: <input type="text" name="tf2"><br><br> 
                <input type="submit" name="b1" value="Set Cookie"> 
            </form> 
        </body> 
        </html>
