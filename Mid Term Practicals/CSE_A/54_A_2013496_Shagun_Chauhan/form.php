<?php include("insert.php"); ?>

<!DOCTYPE html>

<html>
    <head>
        <title>Form</title>

        <style>
            body {
                margin: 30px;
                padding: auto;
            }
        </style>
    </head>

    <body>
        <form action="" method="POST" name="form1" id="form1">
            <div>
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" placeholder="Your Username" required>
                <br><br>
            </div>
            <div>
                <label for="email">E-Mail: </label>
                <input type="email" id="email" name="email" placeholder="Mail@example.com" pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*" required>
                <br><br>
            </div>
            <div>
                <label for="number">Contact:</label>
                <input type="text" id="number" name="number" placeholder="Contact Number" minlength="10" maxlength="10" required onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));"><br><br>
            </div>
            <div>
                <span>Gender: </span>
                <input type="radio" id="male" name="gender" value="Male" required>
                <label for="male"> Male </label>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female"> Female </label>
                <input type="radio" id="other" name="gender" value="Other">
                <label for="other"> Other </label>
                <br><br>
            </div>
            <div>
                <label for="city">City: </label>
                <select name="city" id="city" required>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Jaipur">Jaipur</option>
                    <option value="Mussorie">Mussorie</option>
                    <option value="Nanital">Nanital</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Pune">Pune</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Lucknow">Lucknow</option>
                </select>
                <br><br>
            </div>
            <div>
                <input type="submit" name="submit" id="submit" value="SUBMIT">
            <div>
        </form>
    </body>

    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</html>