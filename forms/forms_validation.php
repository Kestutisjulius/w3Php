<?php echo '<pre>';?>
            <h3>Text Fields</h3>
Name:       <input type="text" name="name">
E-mail:     <input type="text" name="email">
Website:    <input type="text" name="website">
Comment:    <textarea name="comment" rows="5" cols="40"></textarea>
            <h3>Radio Buttons</h3>
            <p>Gender:</p>
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <p>The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.</p>
                <p>The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.</p>
                <a href="https://www.w3schools.com/php/php_form_validation.asp"></a>