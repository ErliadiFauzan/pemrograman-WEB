<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="CSS/CRUD.css"> 
</head>
<body>
    <!-- Header with Navigation -->
    <header>
        <div class="container">
            <h1>Library</h1>
            <nav>
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="About.html">About Us</a></li>
                    <li><a href="Register.html">Register</a></li>
                    <li><a href="Contact.html">Contact</a></li>
                    <li><a href="CRUD.php">Add Book</a></li>
                </ul>
            </nav>
        </div>
    </header>
<div class="container-mm">
    <h1>CRUD Buku</h1>

    <!-- Tab navigation -->
    <div class="tabs">
        <div class="tab" data-tab="get">GET</div>
        <div class="tab" data-tab="post">POST</div>
        <div class="tab" data-tab="put">PUT</div>
        <div class="tab" data-tab="delete">DELETE</div>
    </div>

    <!-- Form GET -->
    <div class="tab-content" id="get">
        <h2>Cari Buku berdasarkan ID</h2>
        <form method="GET" action="">
            <input type="text" name="search" placeholder="Cari buku berdasarkan ID..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <button type="submit">Cari</button>
        </form>
    </div>

    <!-- Form POST -->
    <div class="tab-content" id="post">
        <h2>Tambah Buku Baru</h2>
        <form method="POST" action="">
            <input type="text" name="nama_buku" placeholder="Nama Buku" required>
            <input type="text" name="author" placeholder="Author" required>
            <button type="submit" name="action" value="create">Tambahkan</button>
        </form>
    </div>

    <!-- Form PUT -->
    <div class="tab-content" id="put">
        <h2>Ubah Data Buku</h2>
        <form method="POST" action="">
            <input type="text" name="id" placeholder="ID Buku" required>
            <input type="text" name="nama_buku" placeholder="Nama Buku Baru" required>
            <input type="text" name="author" placeholder="Author Baru" required>
            <button type="submit" name="action" value="update">Ubah</button>
        </form>
    </div>

    <!-- Form DELETE -->
    <div class="tab-content" id="delete">
        <h2>Hapus Buku</h2>
        <form method="POST" action="">
            <input type="text" name="id" placeholder="ID Buku yang akan dihapus" required>
            <button type="submit" name="action" value="delete">Hapus</button>
        </form>
    </div>

    <!-- Menampilkan data Buku -->
    <div class="search-container">
    <?php include 'PHP/php/CRUD.php'; ?>
</div>
    </div>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Library Home. All rights reserved.</p>
    </footer>
    <script src="JS/CRUD.js"></script>
</body>
</html>
