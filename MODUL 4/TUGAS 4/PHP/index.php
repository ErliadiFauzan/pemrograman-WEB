<?php
header("Content-Type: application/json");
include 'config.php';

$method = $_SERVER['REQUEST_METHOD'];
parse_str(file_get_contents("php://input"), $input);

switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $result = $conn->query("SELECT * FROM books WHERE id = $id");
            echo json_encode($result->fetch_assoc());
        } else {
            $result = $conn->query("SELECT * FROM books");
            $books = [];
            while ($row = $result->fetch_assoc()) {
                $books[] = $row;
            }
            echo json_encode($books);
        }
        break;

    case 'POST':
        $nama_buku = $input['nama_buku'];
        $author = $input['author'];
        $sql = "INSERT INTO books (nama_buku, author) VALUES ('$nama_buku', '$author')";
        $result = $conn->query($sql);
        echo json_encode(["id" => $conn->insert_id]);
        break;

    case 'PUT':
        $id = intval($input['id']);
        $nama_buku = $input['nama_buku'];
        $author = $input['author'];
        $sql = "UPDATE books SET nama_buku = '$nama_buku', author = '$author' WHERE id = $id";
        $result = $conn->query($sql);
        echo json_encode(["updated" => $result]);
        break;

    case 'DELETE':
        $id = intval($input['id']);
        $sql = "DELETE FROM books WHERE id = $id";
        $result = $conn->query($sql);
        echo json_encode(["deleted" => $result]);
        break;

    default:
        echo json_encode(["message" => "Method not allowed"]);
        break;
}

$conn->close();
?>
