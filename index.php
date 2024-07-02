<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Country State City Town</title>
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
            <!-- Form for selecting country, state, city, and town -->
            <form action="" name="frm" method="post">
                <h3>Country State City Town Dropdown</h3>
                <!-- Section for dropdowns -->
                <section class="courses-section">
                    <div class="row">
                        <!-- Dropdown for selecting country -->
                        <div class="col-md-3">
                            <label for="country">Country</label>
                            <!-- Select element for country dropdown -->
                            <select type="text" name="country" id="country" class="form-control">
                                <option>Select Country</option>
                            </select>
                        </div>
                        <!-- Dropdown for selecting state -->
                        <div class="col-md-3">
                            <label for="state">State</label>
                            <select type="text" id="state" name="state" class="form-control"></select>
                        </div>
                        <!-- Dropdown for selecting city -->
                        <div class="col-md-3">
                            <label for="city">City</label>
                            <select name="city" id="city" class="form-control"></select>
                        </div>
                        <!-- Dropdown for selecting town -->
                        <div class="col-md-3">
                            <label for="town">Town</label>
                            <select name="town" id="town" class="form-control"></select>
                        </div>
                        <div class="col-md-3">
                            <label for="street">Street</label>
                            <select name="street" id="street" class="form-control">tamo </select>
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
            // When the country dropdown changes, load states for the selected country
            $('#country').change(function() {
                loadState($(this).find(':selected').val());
            });

            // When the state dropdown changes, load cities for the selected state
            $('#state').change(function() {
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
        function loadCountry() {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: "get=country"
            }).done(function(result) {
                // Clear existing options
                $('#country').empty();
                // Append default option
                $('#country').append($('<option>', { 
                    value: '',
                    text : 'Select Country' 
                }));
                // Append retrieved options
                $(result).each(function() {
                    $('#country').append($('<option>', { 
                        value: this.value,
                        text : this.text 
                    }));
                });
            });
        }

        // Function to load states for a given country
        function loadState(countryId) {
            $("#state").children().remove();
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: "get=state&countryId=" + countryId
            }).done(function(result) {
                $("#state").append($(result));
            });
        }

        // Function to load cities for a given state
        function loadCity(stateId) {
            $("#city").children().remove();
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: "get=city&stateId=" + stateId
            }).done(function(result) {
                $("#city").append($(result));
            });
        }

        // Function to load towns for a given city
        function loadTown(cityId) {
            $("#town").children().remove();
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: "get=town&cityId=" + cityId
            }).done(function(result) {
                $("#town").append($(result));
            });
        }

        // // Function to load towns for a given city
        // function loadStreet(townId) {
        //     $("#street").children().remove();
        //     $.ajax({
        //         type: "POST",
        //         url: "ajax.php",
        //         data: "get=town&cityId=" + cityId
        //     }).done(function(result) {
        //         $("#street").append($(result));
        //     });
        // }
        // Function to load streets for a given town
function loadStreet(townId) {
    $("#street").children().remove();
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: "get=street&townId=" + townId // Corrected parameter name to 'townId'
    }).done(function(result) {
        $("#street").append($(result));
    });
}


        // Initialize the countries
        loadCountry();
    </script>
</body>
</html>
