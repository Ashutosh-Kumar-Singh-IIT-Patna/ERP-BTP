<?php
require_once '../functions.php';

// Get roll number from the URL
$roll_number = isset($_GET['roll_number']) ? sanitize_input($_GET['roll_number']) : null;

if (!$roll_number) {
    die('Roll number is required.');
}

// Fetch user data from the database
$sql = "SELECT * FROM acad_users WHERE roll_number = ?";
$query_result = execute_query($sql, ['s', $roll_number]);
$user = $query_result['result'] ? $query_result['result']->fetch_assoc() : null;

if (!$user) {
    die('User not found.');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Profile: <?= htmlspecialchars($user['full_name']); ?></h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= htmlspecialchars($user['photo_path']); ?>" alt="Profile Photo" class="img-thumbnail">
                    </div>
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Full Name</th>
                                    <td><?= htmlspecialchars($user['full_name']); ?></td>
                                </tr>
                                <tr>
                                    <th>Preferred Name</th>
                                    <td><?= htmlspecialchars($user['preferred_name']); ?></td>
                                </tr>
                                <tr>
                                    <th>Date of Birth</th>
                                    <td><?= htmlspecialchars($user['dob']); ?></td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td><?= htmlspecialchars($user['gender']); ?></td>
                                </tr>
                                <tr>
                                    <th>Mother Tongue</th>
                                    <td><?= htmlspecialchars($user['mother_tongue']); ?></td>
                                </tr>
                                <tr>
                                    <th>Religion</th>
                                    <td><?= htmlspecialchars($user['religion']); ?></td>
                                </tr>
                                <tr>
                                    <th>Nationality</th>
                                    <td><?= htmlspecialchars($user['nationality']); ?></td>
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td><?= htmlspecialchars($user['state']); ?></td>
                                </tr>
                                <tr>
                                    <th>Blood Group</th>
                                    <td><?= htmlspecialchars($user['blood_group']); ?></td>
                                </tr>
                                <tr>
                                    <th>Mobile No</th>
                                    <td><?= htmlspecialchars($user['mobile_no']); ?></td>
                                </tr>
                                <tr>
                                    <th>WhatsApp No</th>
                                    <td><?= htmlspecialchars($user['whatsapp_no']); ?></td>
                                </tr>
                                <tr>
                                    <th>Course</th>
                                    <td><?= htmlspecialchars($user['course']); ?></td>
                                </tr>
                                <tr>
                                    <th>Department</th>
                                    <td><?= htmlspecialchars($user['department']); ?></td>
                                </tr>
                                <tr>
                                    <th>Branch</th>
                                    <td><?= htmlspecialchars($user['branch']); ?></td>
                                </tr>
                                <tr>
                                    <th>Specialization</th>
                                    <td><?= htmlspecialchars($user['specialization']); ?></td>
                                </tr>
                                <tr>
                                    <th>Hostel Name</th>
                                    <td><?= htmlspecialchars($user['hostel_name']); ?></td>
                                </tr>
                                <tr>
                                    <th>Hostel Block</th>
                                    <td><?= htmlspecialchars($user['hostel_block']); ?></td>
                                </tr>
                                <tr>
                                    <th>Hostel Room No</th>
                                    <td><?= htmlspecialchars($user['hostel_room_no']); ?></td>
                                </tr>
                                <tr>
                                    <th>Webmail</th>
                                    <td><?= htmlspecialchars($user['webmail']); ?></td>
                                </tr>
                                <tr>
                                    <th>Alternative Email</th>
                                    <td><?= htmlspecialchars($user['alt_mail']); ?></td>
                                </tr>
                                <tr>
                                    <th>Date of Admission</th>
                                    <td><?= htmlspecialchars($user['date_of_admission']); ?></td>
                                </tr>
                                <tr>
                                    <th>Father's Name</th>
                                    <td><?= htmlspecialchars($user['father_name']); ?></td>
                                </tr>
                                <tr>
                                    <th>Mother's Name</th>
                                    <td><?= htmlspecialchars($user['mother_name']); ?></td>
                                </tr>
                                <tr>
                                    <th>Father's Phone</th>
                                    <td><?= htmlspecialchars($user['father_phone']); ?></td>
                                </tr>
                                <tr>
                                    <th>Mother's Phone</th>
                                    <td><?= htmlspecialchars($user['mother_phone']); ?></td>
                                </tr>
                                <tr>
                                    <th>Father's Profession</th>
                                    <td><?= htmlspecialchars($user['father_profession']); ?></td>
                                </tr>
                                <tr>
                                    <th>Mother's Profession</th>
                                    <td><?= htmlspecialchars($user['mother_profession']); ?></td>
                                </tr>
                                <tr>
                                    <th>Annual Income</th>
                                    <td><?= htmlspecialchars($user['annual_income']); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
