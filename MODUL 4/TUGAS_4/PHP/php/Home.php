<?php
// Koneksi ke database
include 'PHP/Config/config.php';

// Ambil data buku dari database
$result = $conn->query("SELECT * FROM books");

if ($result->num_rows > 0) {
    $books = [];
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
} else {
    $books = [];
}
$conn->close();
?>