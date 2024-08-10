<?php
// index.php
session_start();
require_once 'functions.php';

$csrf_token = generate_csrf_token();
$_SESSION['csrf_token'] = $csrf_token;

$mother_tongue_options = get_dropdown_options('acad_mother_tongue');
$profession_options = get_dropdown_options('acad_profession');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>User Registration</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2>User Registration</h2>
    <form method="post" action="register.php">
        <input type="hidden" name="csrf_token" value="<?= $csrf_token; ?>">

        <div class="mb-3">
            <label for="roll_number" class="form-label">Roll Number</label>
            <input type="text" class="form-control" id="roll_number" name="roll_number" required>
        </div>

        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" required>
        </div>

        <div class="mb-3">
            <label for="preferred_name" class="form-label">Preferred Name</label>
            <input type="text" class="form-control" id="preferred_name" name="preferred_name">
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="mother_tongue_id" class="form-label">Mother Tongue</label>
            <select class="form-control" id="mother_tongue_id" name="mother_tongue_id" required>
                <?php foreach ($mother_tongue_options as $option): ?>
                    <option value="<?= $option['id']; ?>"><?= $option['value']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="religion" class="form-label">Religion</label>
            <select class="form-control" id="religion" name="religion" required>
                <option value="hindu">Hindu</option>
                <option value="muslim">Muslim</option>
                <option value="christian">Christian</option>
                <option value="jain">Jain</option>
                <option value="budhism">Budhism</option>
                <option value="others">Others</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nationality" class="form-label">Nationality</label>
            <input type="text" class="form-control" id="nationality" name="nationality" required>
        </div>

        <div class="mb-3">
            <label for="state" class="form-label">State</label>
            <input type="text" class="form-control" id="state" name="state" required>
        </div>

        <div class="mb-3">
            <label for="blood_group" class="form-label">Blood Group</label>
            <input type="text" class="form-control" id="blood_group" name="blood_group" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-control" id="category" name="category" required>
                <option value="general">General</option>
                <option value="sc">SC</option>
                <option value="st">ST</option>
                <option value="obc">OBC</option>
                <option value="ews">EWS</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="country_code" class="form-label">Country Code</label>
            <input type="text" class="form-control" id="country_code" name="country_code" required>
        </div>

        <div class="mb-3">
            <label for="mobile_no" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="mobile_no" name="mobile_no" required>
        </div>

        <div class="mb-3">
            <label for="whatsapp_no" class="form-label">WhatsApp Number</label>
            <input type="text" class="form-control" id="whatsapp_no" name="whatsapp_no">
        </div>

        <div class="mb-3">
            <label for="course" class="form-label">Course</label>
            <select class="form-control" id="course" name="course" required>
                <option value="btech">BTech</option>
                <option value="bsc">BSc</option>
                <option value="msc">MSc</option>
                <option value="mtech">MTech</option>
                <option value="phd">PhD</option>
                <option value="bs">BS</option>
                <option value="dual">Dual</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <input type="text" class="form-control" id="department" name="department" required>
        </div>

        <div class="mb-3">
            <label for="branch" class="form-label">Branch</label>
            <input type="text" class="form-control" id="branch" name="branch" required>
        </div>

        <div class="mb-3">
            <label for="specialization" class="form-label">Specialization</label>
            <input type="text" class="form-control" id="specialization" name="specialization">
        </div>

        <div class="mb-3">
            <label for="hostel_name" class="form-label">Hostel Name</label>
            <input type="text" class="form-control" id="hostel_name" name="hostel_name" required>
        </div>

        <div class="mb-3">
            <label for="hostel_block" class="form-label">Hostel Block</label>
            <input type="text" class="form-control" id="hostel_block" name="hostel_block" required>
        </div>

        <div class="mb-3">
            <label for="hostel_room_no" class="form-label">Hostel Room Number</label>
            <input type="text" class="form-control" id="hostel_room_no" name="hostel_room_no" required>
        </div>

        <div class="mb-3">
            <label for="webmail" class="form-label">Webmail</label>
            <input type="email" class="form-control" id="webmail" name="webmail" required>
        </div>

        <div class="mb-3">
            <label for="alt_mail" class="form-label">Alternate Email</label>
            <input type="email" class="form-control" id="alt_mail" name="alt_mail">
        </div>

        <div class="mb-3">
            <label for="date_of_admission" class="form-label">Date of Admission</label>
            <input type="date" class="form-control" id="date_of_admission" name="date_of_admission" required>
        </div>

        <div class="mb-3">
            <label for="father_name" class="form-label">Father's Name</label>
            <input type="text" class="form-control" id="father_name" name="father_name" required>
        </div>

        <div class="mb-3">
            <label for="mother_name" class="form-label">Mother's Name</label>
            <input type="text" class="form-control" id="mother_name" name="mother_name" required>
        </div>

        <div class="mb-3">
            <label for="father_phone" class="form-label">Father's Phone</label>
            <input type="text" class="form-control" id="father_phone" name="father_phone" required>
        </div>

        <div class="mb-3">
            <label for="mother_phone" class="form-label">Mother's Phone</label>
            <input type="text" class="form-control" id="mother_phone" name="mother_phone" required>
        </div>

        <div class="mb-3">
            <label for="father_profession_id" class="form-label">Father's Profession</label>
            <select class="form-control" id="father_profession_id" name="father_profession_id" required>
                <?php foreach ($profession_options as $option): ?>
                    <option value="<?= $option['id']; ?>"><?= $option['value']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="mother_profession_id" class="form-label">Mother's Profession</label>
            <select class="form-control" id="mother_profession_id" name="mother_profession_id" required>
                <?php foreach ($profession_options as $option): ?>
                    <option value="<?= $option['id']; ?>"><?= $option['value']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="annual_income" class="form-label">Annual Income (in LPA, just write integers only)</label>
            <input type="text" class="form-control" id="annual_income" name="annual_income" required>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
</body>
</html>
