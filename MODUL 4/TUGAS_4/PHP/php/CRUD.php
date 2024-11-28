<?php
        // Sertakan file konfigurasi database
        include 'PHP/Config/config.php';

        // Proses POST (create, update, dan delete)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_POST['action'];

            // Tambah Buku Baru
            if ($action === 'create') {
                $nama_buku = $conn->real_escape_string($_POST['nama_buku']);
                $author = $conn->real_escape_string($_POST['author']);

                $sqlInsert = "INSERT INTO books (nama_buku, author) VALUES ('$nama_buku', '$author')";
                if ($conn->query($sqlInsert) === TRUE) {
                    echo "<p>Buku berhasil ditambahkan.</p>";
                } else {
                    echo "<p>Error: " . $conn->error . "</p>";
                }
            }

            // Ubah Buku (PUT emulasi)
            if ($action === 'update') {
                $id = intval($_POST['id']);
                $nama_buku = $conn->real_escape_string($_POST['nama_buku']);
                $author = $conn->real_escape_string($_POST['author']);

                $sqlUpdate = "UPDATE books SET nama_buku = '$nama_buku', author = '$author' WHERE id = $id";
                if ($conn->query($sqlUpdate) === TRUE) {
                    echo "<p>Buku berhasil diubah.</p>";
                } else {
                    echo "<p>Error: " . $conn->error . "</p>";
                }
            }

            // Hapus Buku (DELETE emulasi)
            if ($action === 'delete') {
                $id = intval($_POST['id']);

                $sqlDelete = "DELETE FROM books WHERE id = $id";
                if ($conn->query($sqlDelete) === TRUE) {
                    echo "<p>Buku berhasil dihapus.</p>";
                } else {
                    echo "<p>Error: " . $conn->error . "</p>";
                }
            }
        }

        // Tangkap parameter ID (jika ada)
        $searchID = isset($_GET['search']) ? intval($_GET['search']) : 0;
        $sql = "SELECT * FROM books";

        // Filter query berdasarkan ID jika parameter ada
        if ($searchID > 0) {
            $sql .= " WHERE id = " . $conn->real_escape_string($searchID);
        }

        $result = $conn->query($sql);

        // Cek apakah ada data
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nama Buku</th>";
            echo "<th>Author</th>";
            echo "<th>Tanggal Upload</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            // Iterasi hasil query
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['nama_buku']) . "</td>";
                echo "<td>" . htmlspecialchars($row['author']) . "</td>";
                echo "<td>" . htmlspecialchars($row['tanggal_upload']) . "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>Tidak ada data ditemukan.</p>";
        }

        // Tutup koneksi
        $conn->close();
        ?>
