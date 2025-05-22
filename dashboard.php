<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: Adminlogin.php");
    exit();
}

function getCount($table, $condition = 1) {
    $conn = new mysqli("localhost", "root", "", "E_Clothing_Store");
    if ($conn->connect_error) return "Connection error";
    $result = $conn->query("SELECT COUNT(*) as count FROM $table WHERE $condition");
    $row = $result->fetch_assoc();
    return $row['count'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .hamburger {
    font-size: 24px;
    cursor: pointer;
    padding: 5px 10px;
    background-color: #34495e;
    border-radius: 4px;
}

.sidebar {
    width: 200px;
    background-color: #2c3e50;
    color: white;
    height: 100vh;
    padding: 20px;
    transition: all 0.3s ease;
}
.sidebar.hide {
    margin-left: -220px; 
}
</style>
</head>
<body>
    <div class="header">
        <div class="profile">Welcome, <?php echo $_SESSION['email']; ?></div>
        <div class="nav">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="#">Disclaimer</a>
            <a href="#">Privacy</a>
            <a href="#">Sitemap</a>
            <a href="#">Terms</a>
            <a class="logout" href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="sidebar" id="sidebar">
            <h3>Menu</h3>
            <a href="#"><i class="fas fa-users"></i> Users</a>
            <a href="#"><i class="fas fa-tshirt"></i> Products</a>
            <a href="#"><i class="fas fa-shopping-cart"></i> Orders</a>
            <a href="#"><i class="fas fa-tags"></i> Categories</a>
        </div>

        <div class="main">
            <div class="cards">
                <div class="card">
                    <h3>Total Users</h3>
                    <p><?php echo getCount('User'); ?> registered users</p>
                </div>
                <div class="card">
                    <h3>Total Products</h3>
                    <p><?php echo getCount('Product'); ?> items listed</p>
                </div>
                <div class="card">
                    <h3>Pending Orders</h3>
                    <p><?php echo getCount("Orders", "Order_Status='pending'"); ?> orders waiting</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 E-Clothing Store. All Rights Reserved.</p>
    </div>
    <script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('hide');
    }
</script>

</body>
</html>