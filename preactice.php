<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>add_category add_sub_category City Town</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Styling for the page -->
    <style>
        body {
            background: #ccc;
        }
        form {
            background: #fff;
            padding: 30px;
            margin-top: 30px;
        }
        form h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Form for selecting add_category, add_sub_category, city, and town -->
            <form action="" name="frm" method="post">
                <h3>add_category add_sub_category City Town Dropdown</h3>
                <!-- Section for dropdowns -->
                <section class="courses-section">
                    <div class="row">
                        <!-- Dropdown for selecting add_category -->
                        <div class="col-md-3">
                            <label for="add_category">add_category --Select Category--</label>
                            <!-- Select element for add_category dropdown -->
                            <select type="text" name="add_category" id="add_category" class="form-control">
                                <option>Select add_category --Select Category--</option>
                            </select>
                        </div>
                        <!-- Dropdown for selecting add_sub_category -->
                        <div class="col-md-3">
                            <label for="add_sub_category">add_sub_category --Select Sub-Category--</label>
                            <select type="text" id="add_sub_category" name="add_sub_category" class="form-control"></select>
                        </div>
                       
                    </div>
                </section>
            </form>
        </div>
    </div>

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">
        // When the document is ready
        $(document).ready(function() {
            // When the add_category dropdown changes, load add_sub_categorys for the selected add_category
            $('#add_category').change(function() {
                loadadd_sub_category($(this).find(':selected').val());
            });

            // When the add_sub_category dropdown changes, load cities for the selected add_sub_category
            $('#add_sub_category').change(function() {
                loadCity($(this).find(':selected').val());
            });

            // When the city dropdown changes, load towns for the selected city
            $('#city').change(function() {
                loadTown($(this).find(':selected').val());
            });
        });
        $('#town').change(function() {
                loadStreet($(this).find(':selected').val());
            });
    
        

        // Function to load countries
        function loadadd_category() {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: "get=add_category"
            }).done(function(result) {
                // Clear existing options
                $('#add_category').empty();
                // Append default option
                $('#add_category').append($('<option>', { 
                    value: '',
                    text : 'Select add_category' 
                }));
                // Append retrieved options
                $(result).each(function() {
                    $('#add_category').append($('<option>', { 
                        value: this.value,
                        text : this.text 
                    }));
                });
            });
        }

        // Function to load add_sub_categorys for a given add_category
        function loadadd_sub_category(add_categoryId) {
            $("#add_sub_category").children().remove();
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: "get=add_sub_category&add_categoryId=" + add_categoryId
            }).done(function(result) {
                $("#add_sub_category").append($(result));
            });
        }

        // Function to load cities for a given add_sub_category
        function loadCity(add_sub_categoryId) {
            $("#city").children().remove();
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: "get=city&add_sub_categoryId=" + add_sub_categoryId
            }).done(function(result) {
                $("#city").append($(result));
            });
        }

      

        // Initialize the countries
        loadadd_category();
    </script>
</body>
</html>



<?php

include '../components/connect.php';

$add_categoryId = isset($_POST['add_categoryId']) ? $_POST['add_categoryId'] : 0;
$add_sub_categoryId = isset($_POST['add_sub_categoryId']) ? $_POST['add_sub_categoryId'] : 0;


$command = isset($_POST['get']) ? $_POST['get'] : "";

switch ($command) {
   case "add_category":
        $add_sub_categoryment = "SELECT id, name FROM countries";
        $dt = mysqli_query($conn, $add_sub_categoryment);
        while ($result = mysqli_fetch_array($dt)) {
            echo $result1 = "<option value=" . $result['id'] . ">" . $result['name'] . "</option>";
        }
        break;
    case "add_sub_category":
        $result1 = "<option>Select add_sub_category</option>";
        $add_sub_categoryment = "SELECT id, name FROM add_sub_categorys WHERE add_category_id=" . $add_categoryId;
        $dt = mysqli_query($conn, $add_sub_categoryment);
        while ($result = mysqli_fetch_array($dt)) {
            $result1 .= "<option value=" . $result['id'] . ">" . $result['name'] . "</option>";
        }
        echo $result1;
        break;
}

// Terminate the script
exit();

?>
