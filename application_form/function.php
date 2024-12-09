<?php

require_once 'dbconf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $registration_number = $connect->real_escape_string($_POST['registration-number']);
    $full_name = $connect->real_escape_string($_POST['full-name']);
    $mobile_number = $connect->real_escape_string($_POST['mobile-number']);
    $email_id = $connect->real_escape_string($_POST['email-id']);
    $appointment_date = $connect->real_escape_string($_POST['appointment-date']);

    AddData($connect,$registration_number,$full_name,$mobile_number,$email_id,$appointment_date);
}
function AddData($connect,$registration_number,$full_name,$mobile_number,$email_id,$appointment_date){
    try{

        //Quary
        $sql = "INSERT INTO appointment_details (registration_number, full_name, mobile_number, email_id, appointment_date)
            VALUES ('$registration_number', '$full_name', '$mobile_number', '$email_id', '$appointment_date')";

        //execute the quary
        $result = mysqli_query($connect,$sql);

        if ($result){
            echo "Appointment booked successfully!";
        }else{
            die("Error".mysqli_error($connect));
        }

    } catch(Exception $e){
        die($e->getMessage());
    }
}

?>