<?php

namespace PHP\Models;

include(__DIR__ . "/../Config/DatabaseConfig.php");

use PHP\Config\DatabaseConfig;
use mysqli;

class Book extends DatabaseConfig
{
    public $conn;

    public function __construct()
    {
        // Koneksi ke database MySQL
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database_name, $this->port);
        
        // Cek koneksi
        if ($this->conn->connect_error) {
            die("Connecting Failed..." . $this->conn->connect_error);
        }
    }

    // Fungsi menampilkan semua data
    public function findAll()
    {
        $sql = "SELECT * FROM books";
        $result = $this->conn->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    // Fungsi menampilkan data berdasarkan ID
    public function findById($id)
    {
        $sql = "SELECT * FROM books WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data; // Mengembalikan data yang ditemukan
    }

    // Fungsi membuat data baru
    public function create($data)
    {
        $namaBuku = $data['nama_buku'];
        $author = $data['author'];
        $query = "INSERT INTO books (nama_buku, author) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ss", $namaBuku, $author);
        $stmt->execute();
    }

    // Fungsi update data
    public function update($data, $id)
    {
        $namaBuku = $data['nama_buku'];
        $author = $data['author'];
        $query = "UPDATE books SET nama_buku = ?, author = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssi", $namaBuku, $author, $id);
        $stmt->execute();
    }

    // Fungsi delete data berdasarkan ID
    public function delete($id)
    {
        $query = "DELETE FROM books WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
