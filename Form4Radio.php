<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Receiving input</title>
    </head>
    <body>
        <font size = 5>Thank you: Got your input.</font>
        <br>
        <?php
        $last_name = $_POST["last_name"];
        $first_name = $_POST["first_name"];
        $email_id = $_POST["email"];
        $class = $_POST["class"];
        $university = $_POST["university"];
        $phone_number = $_POST["phone_number"];
        $gender = $_POST["gender"];
        $dob = date("d/m/Y", strtotime($_POST["dob"]));
        $address = $_POST["address"];
        $city = $_POST["city"];
        $postal_code = $_POST["postal_code"];
        $state = $_POST["state"];
        $hobbies = $_POST["hobbies"];
        $other_hobbies = $_POST["hobbies_text"];
        $qualification = $_POST["qualification"];

        echo "Hello, " . $first_name . " " . $last_name . "<br>";

        echo "You are studying at $class , $university"
        . " <br>Your email ID is $email_id"
        . "<br>Your Phone number is $phone_number"
        . "<br>Your are living at $address, $city, $state"
        . "<br>Your postal code is $postal_code"
        . "<br>You are a $gender"
        . "<br>You were born on $dob";

        echo "<br> Your hobbies is: ";
        if (empty($hobbies)) {
            if (empty($other_hobbies)) {
                echo "You don't select any hobbies";
            } else {
                echo $other_hobbies;
            }
        } else {
            $hobbies_num = count($hobbies);
            for ($i = 0; $i < $hobbies_num; $i++) {
                echo "<br>$i. $hobbies[$i]";
            }
        }

        echo "<br>Your qualification is " . $qualification;
        ?>
    </body>
</html>