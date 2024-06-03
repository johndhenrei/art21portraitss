<?php
session_start();

// Check if the user is logged in and set the cookie if needed
if (isset($_SESSION['customer_id'])) {
    setcookie('customer', $_SESSION['name'], time() + 3600, '/');
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dhenreiart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] == 'login') {
        // Handle login
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT customer_id, name, password FROM customer WHERE email=?";
        $login_stmt = $conn->prepare($sql);
        if ($login_stmt) {
            $login_stmt->bind_param("s", $email);
            $login_stmt->execute();
            $result = $login_stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['password'])) {
                    $_SESSION['customer_id'] = $row['customer_id'];
                    $_SESSION['name'] = $row['name'];
                    $login_success = true;
                    // Redirect to home page
                    header('Location: ../index.php');
                    exit(); // Make sure to exit after redirection
                } else {
                    $login_error = "Invalid password.";
                }
            } else {
                $login_error = "No user found with this email. Please sign up first.";
            }
            $login_stmt->close();
        } else {
            $login_error = "Database query failed: " . $conn->error;
        }
    } elseif (isset($_POST['action']) && $_POST['action'] == 'signup') {
        // Handle signup
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if the email is already used
        $sql = "SELECT email FROM customer WHERE email=?";
        $signup_stmt = $conn->prepare($sql);
        if ($signup_stmt) {
            $signup_stmt->bind_param("s", $email);
            $signup_stmt->execute();
            $result = $signup_stmt->get_result();

            if ($result->num_rows > 0) {
                $signup_error = "Email already exists. Please use a different email.";
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO customer (name, email, password) VALUES (?, ?, ?)";
                $insert_stmt = $conn->prepare($sql);
                if ($insert_stmt) {
                    $insert_stmt->bind_param("sss", $name, $email, $hashed_password);

                    if ($insert_stmt->execute()) {
                        $signup_success = "Signup successful! You can now log in.";
                    } else {
                        $signup_error = "Error: " . $insert_stmt->error;
                    }
                    $insert_stmt->close();
                } else {
                    $signup_error = "Database query failed: " . $conn->error;
                }
            }
            $signup_stmt->close();
        } else {
            $signup_error = "Database query failed: " . $conn->error;
        }
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <button id="loginBtn" class="toggle-btn active">Login</button>
                <button id="signupBtn" class="toggle-btn">Signup</button>
            </div>
            <div class="form-body">
                <form id="loginForm" class="form-content active" method="POST" action="" autocomplete="off">
                    <h2>Login</h2>
                    <?php if (isset($login_success)): ?>
                        <p class="success">Login successful! Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?></p>
                    <?php endif; ?>
                    <?php if (isset($login_error)): ?>
                        <p class="error"><?php echo htmlspecialchars($login_error); ?></p>
                    <?php endif; ?>
                    <input type="email" name="email" placeholder="Email" required autocomplete="off">
                    <input type="password" name="password" placeholder="Password" required autocomplete="off">
                    <input type="hidden" name="action" value="login">
                    <button type="submit">Login</button>
                </form>
                <form id="signupForm" class="form-content" method="POST" action="" autocomplete="off">
                    <h2>Signup</h2>
                    <?php if (isset($signup_success)): ?>
                        <p class="success"><?php echo htmlspecialchars($signup_success); ?></p>
                    <?php endif; ?>
                    <?php if (isset($signup_error)): ?>
                        <p class="error"><?php echo htmlspecialchars($signup_error); ?></p>
                    <?php endif; ?>
                    <input type="text" name="name" placeholder="Name" required autocomplete="off">
                    <input type="email" name="email" placeholder="Email" required autocomplete="off">
                    <input type="password" name="password" placeholder="Password" required autocomplete="off">
                    <input type="hidden" name="action" value="signup">
                    <button type="submit">Signup</button>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
