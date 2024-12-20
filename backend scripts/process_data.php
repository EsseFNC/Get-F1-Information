<?php

// visit https://openf1.org/ for more information about the API

// ******** includes ********
include("url_methods.php");
include("print_data_methods.php");

// *******************************
//          FUNCTIONS
// *******************************
/**
 * Constructs the final URL for the API call based on the form type.
 *
 * Uses $_POST["form_type"] to determine which function to call to
 * get the data for the API call.
 *
 * @return string The final URL for the API call.
 */
function getFinalURL() {
    $url = "https://api.openf1.org/v1/";

    switch ($_POST["form_type"]) {
        case 'driver':
            $url .= getDriverData();
            break;

        case 'car':
            $url .= getCarData();
            break;

        case 'interval':
            $url .= getIntervalData();
            break;

        case 'session':
            $url .= getSessionData();
            break;

        case 'race_control':
            $url .= getRaceControlData();
            break;
    }

    return $url;
}

/**
 * Initializes and executes a cURL session for the given URL.
 *
 * @param string $url The URL to send the cURL request to.
 * @param string &$response A reference to store the response from the cURL execution.
 *
 * Those are the steps that the function makes:
 * - initialize a new cURL session;
 * - return the response instead of outputting it
 * - execute the request
 * - check for errors
 * - close cURL session
 */
function initCurlSession($url, &$response) {

    // initialize a new cURL session
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);

    // return the response instead of outputting it
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // execute the request
    $response = curl_exec($curl);

    // check for errors
    if (curl_errno($curl)) {
        echo "Request Error: " . curl_error($curl) . "<br>";
    }

    // close cURL session
    curl_close($curl);
}



// *******************************
//          MAIN CODE
// *******************************

if (isset($_POST["form_type"])) {
    $response = "";

    // get the OpenF1 API URL, as well the form data form getting the right API method
    $url = getFinalURL();
    initCurlSession($url, $response);

    // get data from cURL session in json format
    $data = json_decode($response, true);

    // test print
    if (isset($data)) {
        print_data($data, $_POST["form_type"], $url);
    } else {
        echo "Error: Data is not set.";
    }

} else {
    echo "You need to passs through the form first --> <a href='index.html'>Form</a>";
}

?>
