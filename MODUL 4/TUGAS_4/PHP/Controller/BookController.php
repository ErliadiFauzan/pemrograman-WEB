<?php

namespace PHP\Controller;

include(__DIR__ ."/../Traits/ApiResponseFormatter.php");
include(__DIR__ ."/../Models/Book.php");

use PHP\Models\Book;
use PHP\Traits\ApiResponseFormatter;

class BookController {
    use ApiResponseFormatter;

    // Fungsi untuk mendapatkan semua data
    public function index()
    {
        $bookModel = new Book();
        $response = $bookModel->findAll();
        return $this->apiResponse(200, "success", $response);
    }

    // Fungsi untuk mendapatkan data berdasarkan ID
    public function getById($id)
    {
        $bookModel = new Book();
        $response = $bookModel->findById($id);
        return $this->apiResponse(200, "success", $response);
    }

    // Fungsi untuk menambahkan data baru
    public function insert()
    {
        // Tangkap input JSON
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        // Validasi input
        if (json_last_error()) {
            return $this->apiResponse(400, "error invalid input", null);
        }

        if (empty($inputData['nama_buku']) || empty($inputData['author'])) {
            return $this->apiResponse(400, "error missing required fields", null);
        }

        $bookModel = new Book();
        $bookModel->create([
            "nama_buku" => $inputData['nama_buku'],
            "author" => $inputData['author']
        ]);

        return $this->apiResponse(200, 'success', "Book created successfully");
    }

    // Fungsi untuk memperbarui data berdasarkan ID
    public function update($id)
    {
        $jsonInput = file_get_contents("php://input");
        $inputData = json_decode($jsonInput, true);

        if (json_last_error()) {
            return $this->apiResponse(400, "error invalid input", null);
        }

        if (empty($inputData['nama_buku']) || empty($inputData['author'])) {
            return $this->apiResponse(400, "error missing required fields", null);
        }

        $bookModel = new Book();
        $bookModel->update([
            "nama_buku" => $inputData["nama_buku"],
            "author" => $inputData["author"]
        ], $id);

        return $this->apiResponse(200, "success", "Book updated successfully");
    }

    // Fungsi untuk menghapus data berdasarkan ID
    public function delete($id)
    {
        $bookModel = new Book();
        $bookModel->delete($id);

        return $this->apiResponse(200, 'success', "Book deleted successfully");
    }
}
