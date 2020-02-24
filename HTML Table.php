<form action="">
    name: <label>
             <input type="text" name="name" />
          </label> <br />
    Phone Number: <label>
                     <input type="text" name="phone" />
                  </label> <br />
    age: <label>
             <input type="text" name="age" />
         </label> <br />
    Address: <label>
                <input type="text" name="address" />
             </label> <br />

    <input type="submit" value="Submit">
</form>

<?php

if (isset($_GET['name']) &&
    isset($_GET['phone']) &&
    isset($_GET['age']) &&
    isset($_GET['address'])) {

    $name = htmlspecialchars($_GET['name']);
    $phone = htmlspecialchars($_GET['phone']);
    $age = htmlspecialchars($_GET['age']);
    $address = htmlspecialchars($_GET['address']);

    echo "<table border='2'>";
    $key = "";
    $value = "";

    for ($i = 1; $i <= 4; $i++) {
        switch ($i) {
            case "1":
                $key = "Name";
                $value = $name;
                    break;
            case "2":
                $key = "Phone Number";
                $value = $phone;
                    break;
            case "3":
                $key = "Age";
                $value = $age;
                    break;
            case "4":
                $key = "Address";
                $value = $address;
                    break;
        }
        echo "<tr>
                <td style='background-color: orange'>$key</td>
                <td>$value</td>
              </tr>";
    }
    echo "</table>";
}
