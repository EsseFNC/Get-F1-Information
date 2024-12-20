<?php

function print_data($data, $formType, $url) {

    // echo "<pre>"; print_r($data); echo "</pre>";
    echo $url . "<br>";

    if (empty($data)) {
        echo "<h3>Something went wrong</h3>";
        return;
    }

    switch ($formType) {
        case 'driver':
            print_driverData($data);
            break;
        
        case 'car':
            print_carData($data);
            break;

        case 'interval':
            print_intervalData($data);
            break;

        case 'session':
            print_sessionData($data);
            break;

        case 'race_control':
            print_raceControlData($data);
            break;
        
        default:
            echo "<h3>Something went wrong</h3>";
            break;
    }
}

function print_driverData($data) {
    
    echo "
        <h3>" . $data[0]['full_name'] . "</h3>

        <img src='" . $data[0]['headshot_url'] . "' alt='Driver Headshot'>

        <table border = 1>
            <tr>
                <th>First Name</th>
                <td>" . $data[0]['first_name'] . "</td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td>" . $data[0]['last_name'] . "</td>
            </tr>
            <tr>
                <th>Driver Number</th>
                <td>" . $data[0]['driver_number'] . "</td>
            </tr>
            <tr>
                <th>Driver Team</th>
                <td>" . $data[0]['team_name'] . "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>" . $data[0]['country_code'] . "</td>
            </tr>
        </table>
    ";
}

function print_carData($data) {
    
    echo "
        <h3>Live info of car number " .  $data[0]['driver_number'] . ":</h3>

        <table border = 1>
            <tr>
                <th>Speed</th>
                <td>" . $data[0]['speed'] . "</td>
            </tr>
            <tr>
                <th>DRS Status</th>
                <td>" . $data[0]['drs'] . "</td>
            </tr>
            <tr>
                <th>N. Gear</th>
                <td>" . $data[0]['n_gear'] . "</td>
            </tr>
            <tr>
                <th>RPM</th>
                <td>" . $data[0]['rpm'] . "</td>
            </tr>
            <tr>
                <th>Throttle</th>
                <td>" . $data[0]['throttle'] . "</td>
            </tr>
        </table>
    ";
}

function print_intervalData($data) {
    
    echo "<h3>Gap to race leader of car " . $data[0]['driver_number'] . " => " . $data[0]['gap_to_leader'] . "</h3>";
    echo "<h3>Gap to car ahead of car " . $data[0]['driver_number'] . " => " . $data[0]['interval'] . "</h3>";
}

function print_sessionData($data) {
    
    echo "
        <h3>Session data of circuit key " . $data[0]['circuit_key'] . " in " . $data[0]['year'] . "</h3>

        <table border = 1>
            <tr>
                <th>Location</th>
                <td>" . $data[0]['location'] . "</td>
            </tr>
            <tr>
                <th>Session Name</th>
                <td>" . $data[0]['session_name'] . "</td>
            </tr>
            <tr>
                <th>Session Type</th>
                <td>" . $data[0]['session_type'] . "</td>
            </tr>
            <tr>
                <th>Country Name</th>
                <td>" . $data[0]['country_name'] . "</td>
            </tr>
        </table>
    ";

}

function print_raceControlData($data) {
    
    echo "
        <h3>Race Control of car " . $data[0]['driver_number'] . "</h3> 

        <table border = 1>
            <tr>
                <th>Date</th>
                <td>" . $data[0]['date'] . "</td>
            </tr>
            <tr>
                <th>Lap Number</th>
                <td>" . $data[0]['lap_number'] . "</td>
            </tr>
            <tr>
                <th>Flag</th>
                <td>" . $data[0]['flag'] . "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>" . $data[0]['category'] . "</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>" . $data[0]['message'] . "</td>
            </tr>
            <tr>
                <th>scope</th>
                <td>" . $data[0]['scope'] . "</td>
            </tr>
            <tr>
                <th>Sector</th>
                <td>" . $data[0]['sector'] . "</td>
            </tr>
        </table>
    ";
}


?>