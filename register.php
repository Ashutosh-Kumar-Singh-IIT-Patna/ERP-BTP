<?php
// register.php
session_start();
require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    check_csrf_token($_POST['csrf_token']);
    
    $roll_number = sanitize_input($_POST['roll_number']);
    $full_name = sanitize_input($_POST['full_name']);
    $preferred_name = sanitize_input($_POST['preferred_name']);
    $dob = sanitize_input($_POST['dob']);
    $gender = sanitize_input($_POST['gender']);
    $mother_tongue_id = (int) $_POST['mother_tongue_id'];
    $religion = sanitize_input($_POST['religion']);
    $nationality = sanitize_input($_POST['nationality']);
    $state = sanitize_input($_POST['state']);
    $blood_group = sanitize_input($_POST['blood_group']);
    $category = sanitize_input($_POST['category']);
    $country_code = sanitize_input($_POST['country_code']);
    $mobile_no = sanitize_input($_POST['mobile_no']);
    $whatsapp_no = sanitize_input($_POST['whatsapp_no']);
    $course = sanitize_input($_POST['course']);
    $department = sanitize_input($_POST['department']);
    $branch = sanitize_input($_POST['branch']);
    $specialization = sanitize_input($_POST['specialization']);
    $hostel_name = sanitize_input($_POST['hostel_name']);
    $hostel_block = sanitize_input($_POST['hostel_block']);
    $hostel_room_no = sanitize_input($_POST['hostel_room_no']);
    $webmail = sanitize_input($_POST['webmail']);
    $alt_mail = sanitize_input($_POST['alt_mail']);
    $date_of_admission = sanitize_input($_POST['date_of_admission']);
    $father_name = sanitize_input($_POST['father_name']);
    $mother_name = sanitize_input($_POST['mother_name']);
    $father_phone = sanitize_input($_POST['father_phone']);
    $mother_phone = sanitize_input($_POST['mother_phone']);
    $father_profession_id = (int) $_POST['father_profession_id'];
    $mother_profession_id = (int) $_POST['mother_profession_id'];
    $annual_income = sanitize_input($_POST['annual_income']);

    $sql = "INSERT INTO acad_users (
                roll_number, full_name, preferred_name, dob, gender, 
                mother_tongue_id, religion, nationality, state, blood_group, 
                category, country_code, mobile_no, whatsapp_no, course, 
                department, branch, specialization, hostel_name, hostel_block, 
                hostel_room_no, webmail, alt_mail, date_of_admission, 
                father_name, mother_name, father_phone, mother_phone, 
                father_profession_id, mother_profession_id, annual_income
            ) VALUES (
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
            )";

    $params = [
        'sssssissssssssssssssssssssssiis', 
        $roll_number, $full_name, $preferred_name, $dob, $gender, 
        $mother_tongue_id, $religion, $nationality, $state, $blood_group, 
        $category, $country_code, $mobile_no, $whatsapp_no, $course, 
        $department, $branch, $specialization, $hostel_name, $hostel_block, 
        $hostel_room_no, $webmail, $alt_mail, $date_of_admission, 
        $father_name, $mother_name, $father_phone, $mother_phone, 
        $father_profession_id, $mother_profession_id, $annual_income
    ];


    if (execute_query($sql, $params)) {
        echo "Registration successful!";
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>
