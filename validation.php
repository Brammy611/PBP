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
