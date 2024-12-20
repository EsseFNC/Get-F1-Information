<?php

/**
 * Constructs a query string for fetching driver data.
 *
 * Utilizes driver full name and car number obtained from POST request data
 * to form a query string for the drivers endpoint.
 *
 * @return string Query string with driver number and full name parameters.
 */     
function getDriverData() {

    // the last name must be all uppercase
    $firstLastName = explode(" ", $_POST["driver_full_name"]);

    // access the last name & make it all upperacase
    $firstLastName[1] = strtoupper($firstLastName[1]);

    $fullName = implode("%20", $firstLastName);
    $carNumber = $_POST["car_number"];

    return "drivers?driver_number=$carNumber&full_name=$fullName";
}

/**
 * Constructs a query string for fetching car data.
 *
 * Utilizes the car number obtained from the POST request data to form a query
 * string for the car_data endpoint.
 *
 * @return string Query string with driver number and session key parameters.
 */
function getCarData() {
    $carNumber = $_POST["car_number"];

    return "car_data?driver_number=$carNumber&session_key=latest";
}

/**
 * Constructs a query string for fetching interval data.
 *
 * Utilizes the car number obtained from the POST request data to form a query
 * string for the interval endpoint.
 *
 * @return string Query string with driver number and session key parameters.
 */
function getIntervalData() {
    $carNumber = $_POST["car_number"];

    return "intervals?driver_number=$carNumber&session_key=latest";
}

/**
 * Constructs a query string for fetching session data.
 *
 * Utilizes the country name, session name, and year obtained from the POST
 * request data to form a query string for the session endpoint.
 *
 * @return string Query string with country name, session name, and year parameters.
 */

function getSessionData() {
    $countryName = ucfirst($_POST["country_name"]);
    $countryName = str_replace(" ", "%20", $countryName);
    $sessionName = ucfirst($_POST["session_name"]);
    $sessionName = str_replace(" ", "%20", $sessionName);
    $year = $_POST["year"];

    return "sessions?country_name=$countryName&session_name=$sessionName&year=$year";
}

/**
 * Constructs a query string for fetching race control data.
 *
 * Utilizes the car number, race control type, start date, and end date obtained
 * from the POST request data to form a query string for the race control
 * endpoint.
 *
 * @return string Query string with car number, race control type, start date, and
 * end date parameters.
 */
function getRaceControlData() {
    $carNumber = $_POST["car_number"];
    $raceControlType = str_replace(" ", "%20", $_POST["race_control_type"]);
    $startDate = $_POST["start_date"];
    $endDate = $_POST["end_date"];    

    return "race_control?flag=$raceControlType&driver_number=$carNumber&date>=$startDate&date<$endDate";
}

?>