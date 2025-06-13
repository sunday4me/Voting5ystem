<?php 
session_start();
include("connect.php");

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$uid = $_SESSION['id'];
$gid = $_POST['groupid'];
$votes = $_POST['groupvotes'];

// Validate inputs
if (!is_numeric($gid) || !is_numeric($votes)) {
    echo '<script>
    alert("Invalid input!");
    window.location="../partials/dashboard.php";
    </script>';
    exit();
}

// Check if user has already voted
$stmt = $con->prepare("SELECT status FROM userdata WHERE id=?");
$stmt->bind_param("i", $uid);
$stmt->execute();
$stmt->bind_result($status);
$stmt->fetch();
$stmt->close();

if ($status == 1) {
    echo '<script>
    alert("You have already voted!");
    window.location="../partials/dashboard.php";
    </script>';
    exit();
}

$totalvotes = $votes + 1;

// Update votes and status
$stmt = $con->prepare("UPDATE userdata SET votes=? WHERE id=?");
$stmt->bind_param("ii", $totalvotes, $gid);
$updatevotes = $stmt->execute();
$stmt->close();

$stmt = $con->prepare("UPDATE userdata SET status=1 WHERE id=?");
$stmt->bind_param("i", $uid);
$updatestatus = $stmt->execute();
$stmt->close();

if ($updatevotes && $updatestatus) {
    $getgroups = mysqli_query($con, "SELECT username, photo, votes, id FROM userdata WHERE standard='group'");
    $groups = mysqli_fetch_all($getgroups, MYSQLI_ASSOC);
    $_SESSION["groups"] = $groups;
    $_SESSION["status"] = 1;

    echo '<script>
    alert("Hurray!!! Voting was Successful ");
    window.location="../partials/dashboard.php";
    </script>';
} else {
    echo '<script>
    alert("Technical Error !!! Vote after sometime");
    window.location="../partials/dashboard.php";
    </script>';
}