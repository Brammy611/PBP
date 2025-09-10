<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $kampus = $_POST["kampus"];
    $prodi = $_POST["prodi"] ?? "";
    $hobi = $_POST["hobi"] ?? [];
    $password = $_POST["password"];

    $errors = [];

    // 1. Username hanya string (tidak boleh ada angka)
    if (!preg_match("/^[a-zA-Z]+$/", $username)) {
        $errors[] = "Username hanya boleh huruf tanpa angka.";
    }

    // 2. Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Alert sukses
    echo "<script>alert('Form submitted successfully!');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Informasi Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="detail">
        <h1>Detail Informasi Data</h1>
        <p>Username: <?php echo htmlspecialchars($username ?? ''); ?></p>
        <p>Email: <?php echo htmlspecialchars($email ?? ''); ?></p>
        <p>University: <?php echo htmlspecialchars($kampus ?? ''); ?></p>
        <p>Program Studi: <?php echo htmlspecialchars($prodi ?? ''); ?></p>
        <p>Hobbies: <?php echo isset($hobi) ? htmlspecialchars(implode(", ", $hobi)) : ''; ?></p>
    </div>
</body>
</html>