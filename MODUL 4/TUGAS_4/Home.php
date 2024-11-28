<?php include 'PHP/php/Home.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Home</title>
    <link rel="stylesheet" href="CSS/HomeCSS.css"> 
</head>
<body>

    <header>
        <div class="container">
            <h1>Library Home</h1>
            <nav>
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="About.html">About Us</a></li>
                    <li><a href="Register.html">Register</a></li>
                    <li><a href="Contact.html">Contact</a></li>
                    <li><a href="CRUD.php">add</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <section>
                <h2>Selamat datang di Perpustakaan</h2>
                <p>Perpustakaan kami menyediakan banyak koleksi buku, jurnal, dan sumber daya digital untuk memenuhi kebutuhan penelitian dan membaca Anda.</p>
            </section>

            <section class="books">
                <h2>Koleksi Buku Kami</h2>
                
                <?php if (count($books) > 0): ?>
                    <ul>
                    <section class="db_book">
                        <?php foreach ($books as $book): ?>
                            <div class="book-card">
                                <div class="book-cover">
                                    <img src="CSS/assets/books/book1.jpg" alt="Buku 1">
                                </div>
                                <div class="book-info">
                                    <h3 class="book-title"><?php echo htmlspecialchars($book['nama_buku']); ?></h3>
                                    <p class="book-author"><strong>Penulis:</strong> <?php echo htmlspecialchars($book['author']); ?></p>
                                    <p class="book-upload"><strong>Tanggal Upload:</strong> <?php echo $book['tanggal_upload']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </section>

                    </ul>
                <?php else: ?>
                    <p>Belum ada buku yang tersedia.</p>
                <?php endif; ?>
                
            </section>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Library Home. All rights reserved.</p>
    </footer>

</body>
</html>
