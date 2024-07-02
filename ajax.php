<?php

// Include the configuration file which contains database connection details
include('config.php');

//* $countryId = isset($_POST['countryId']) ? $_POST['countryId'] : 0;
//* the above code is equivalent to the below code
//* if (isset($_POST['countryId'])) {
      // If it is, assign its value to $countryId
      //* $countryId = $_POST['countryId'];
//* } else {
      // If it is not, set $countryId to 0
      //* $countryId = 0;
//* }

// Function to load countries

  // Retrieve the countryId from the POST request
    // $countryId = $_POST['countryId'];
// Retrieve countryId, stateId, and cityId from the POST request, defaulting to 0 if not set
$countryId = isset($_POST['countryId']) ? $_POST['countryId'] : 0;
$stateId = isset($_POST['stateId']) ? $_POST['stateId'] : 0;
$cityId = isset($_POST['cityId']) ? $_POST['cityId'] : 0;
$townId = isset($_POST['townId']) ? $_POST['townId'] : 0;
// $streetId = isset($_POST['streetId']) ? $_POST['streetId'] : 0;


// Determine the action to perform based on the 'get' parameter received in the POST request
$command = isset($_POST['get']) ? $_POST['get'] : "";

switch ($command) {
    // If the command is 'country', retrieve and output the list of countries
    case "country":
        // SQL statement to select id and name of countries from the database
        $statement = "SELECT id, name FROM countries";
        // Execute the SQL statement
        $dt = mysqli_query($conn, $statement);
        // Loop through the results and generate HTML options for each country
        while ($result = mysqli_fetch_array($dt)) {
            echo $result1 = "<option value=" . $result['id'] . ">" . $result['name'] . "</option>";
        }
        break;

    // If the command is 'state', retrieve and output the list of states for the specified country
    case "state":
        $result1 = "<option>Select State</option>";
        // SQL statement to select id and name of states for the specified country
        $statement = "SELECT id, name FROM states WHERE country_id=" . $countryId;
        // Execute the SQL statement
        $dt = mysqli_query($conn, $statement);
        // Loop through the results and append HTML options for each state to the result string
        while ($result = mysqli_fetch_array($dt)) {
            $result1 .= "<option value=" . $result['id'] . ">" . $result['name'] . "</option>";
        }
        // Output the result string containing options for states
        echo $result1;
        break;

    // If the command is 'city', retrieve and output the list of cities for the specified state
    case "city":
        $result1 = "<option>Select City</option>";
        // SQL statement to select id and name of cities for the specified state
        $statement = "SELECT id, name FROM cities WHERE state_id=" . $stateId;
        // Execute the SQL statement
        $dt = mysqli_query($conn, $statement);
        // Loop through the results and append HTML options for each city to the result string
        while ($result = mysqli_fetch_array($dt)) {
            $result1 .= "<option value=" . $result['id'] . ">" . $result['name'] . "</option>";
        }
        // Output the result string containing options for cities
        echo $result1;
        break;

    // If the command is 'town', retrieve and output the list of towns for the specified city
    case "town":
        $result1 = "<option>Select Town</option>";
        // SQL statement to select id and name of towns for the specified city
        $statement = "SELECT id, name FROM towns WHERE city_id=" . $cityId;
        // Execute the SQL statement
        $dt = mysqli_query($conn, $statement);
        // Loop through the results and append HTML options for each town to the result string
        while ($result = mysqli_fetch_array($dt)) {
            $result1 .= "<option value=" . $result['id'] . ">" . $result['name'] . "</option>";
        }
        // Output the result string containing options for towns
        echo $result1;
        break;

    // If the command is 'street', retrieve and output the list of streets for the specified town
    case "street":
        $result1 = "<option>Select Street</option>";
        // SQL statement to select id and name of streets for the specified town
        $statement = "SELECT id, name FROM streets WHERE town_id=" . $townId;
        // Execute the SQL statement
        $dt = mysqli_query($conn, $statement);
        // Loop through the results and append HTML options for each street to the result string
        while ($result = mysqli_fetch_array($dt)) {
            $result1 .= "<option value=" . $result['id'] . ">" . $result['name'] . "</option>";
        }
        // Output the result string containing options for streets
        echo $result1;
        break;



}

// Terminate the script
exit();

?>
