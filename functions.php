<?php
// functions.php
require_once 'config.php';

$conn = db_connect();

function execute_query($sql, $params = []) {
    global $conn;
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        error_log("SQL Error: " . $conn->error . "\nSQL: $sql", 3, LOG_FILE_PATH);
        return false;
    }

    if ($params) {
        $stmt->bind_param(...$params);
    }

    try {
        $stmt->execute();
        $result = $stmt->get_result();

        // Log query in the database
        $traceback = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        $trace_str = print_r($traceback, true);
        $log_sql = "INSERT INTO acad_queries_log (query, traceback) VALUES (?, ?)";
        $log_stmt = $conn->prepare($log_sql);
        $log_stmt->bind_param("ss", $sql, $trace_str);
        $log_stmt->execute();

        // Log query in file
        error_log("Executed Query: $sql\nTraceback: $trace_str", 3, LOG_FILE_PATH);

        return true;

    } catch (Exception $e) {
        error_log("Exception: " . $e->getMessage(), 3, LOG_FILE_PATH);
        return false;
    }
}

function sanitize_input($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

function get_dropdown_options($table) {
    global $conn;
    $sql = "SELECT id, " . ($table === 'acad_mother_tongue' ? 'language' : 'profession') . " AS value FROM $table";
    $result = execute_query($sql);
    $options = [];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $options[] = $row;
        }
    }
    return $options;
}

// CSRF token generation
function generate_csrf_token() {
    return bin2hex(random_bytes(32));
}

function check_csrf_token($token) {
    if ($_SESSION['csrf_token'] !== $token) {
        die("CSRF token validation failed.");
    }
}
?>
