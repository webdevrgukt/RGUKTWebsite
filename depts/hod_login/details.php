<?php
session_start(); 

$defaultName = 'XXXX';
$defaultEmail = isset($_SESSION['email']) ? $_SESSION['email'] : 'example@example.com';
$defaultDesignation = 'student'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 16px 20px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            margin-left:35%;
            background-image: url('https://via.placeholder.com/150');
            background-size: cover;
        }
        .profile-name {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .profile-bio {
            color: #555;
            font-size: 16px;
        }
        .form-group select {
            width: 50%;
            margin-left:30%;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h3><center>Profile Details</center></h3>
        <div class="profile-picture"></div> 
        <div class="profile-name"><p>Name: <?php echo htmlspecialchars($defaultName); ?></p></div>
        <div class="profile-bio">
            <p>Email: <?php echo htmlspecialchars($defaultEmail); ?></p>
            <form action="update_profile.php" method="post">
                <div class="form-group">
                    Designation
                    <select id="designation" name="designation" class="form-control">
                        <option value="student" <?php echo $defaultDesignation === 'student' ? 'selected' : ''; ?>>Student</option>
                        <option value="faculty" <?php echo $defaultDesignation === 'faculty' ? 'selected' : ''; ?>>Faculty</option>
                        <option value="hod" <?php echo $defaultDesignation === 'hod' ? 'selected' : ''; ?>>HOD</option>
                    </select>
                </div>
                <a href="logout.php">Logout</a>
            </form>
        </div>
    </div>
</body>
</html>
