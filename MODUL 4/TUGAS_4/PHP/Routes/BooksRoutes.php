<?php

namespace PHP\Routes;

include (__DIR__."/../Controller/BookController.php");

use PHP\Controller\BookController;

class BooksRoutes{
    public function handel($method, $path){
        //jika request method  get dan path  sama dengan  '/api/product'
        var_dump($path);
        if($method == "GET" && $path == '/WEB/TUGAS_4/PHP/api/product'){
            $controller  = new BookController();
            echo $controller->index();
        }
        //jika request method put dan path sama dengan '/app/product'
        if ($method == "GET" && strpos($path,"/WEB/TUGAS_4/PHP/api/product") == 0){
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) -1];

            $controller = new BookController();
            echo $controller->getById($id); 
        }
        //jika request method put dan path sama dengan '/app/product'
        if ($method == "POST" && $path == "/WEB/TUGAS_4/PHP/api/product"){
            $controller  = new BookController();
            echo $controller->insert(); 
        }

        // JIKA REQUEST METHOD PUT DAN PATH SAMA DENGAN '/api/product/{id}'
        if ($method == "PUT" && strpos($path, "/WEB/TUGAS_4/PHP/api/product/") === 0) {
            $pathParts = explode("/", $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new BookController();
            echo $controller->update($id);
            return;
        }
        //jika request method put dan path sama dengan '/app/product'
        if ($method == 'DELETE' && strpos($path,"/WEB/TUGAS_4/PHP/api/product/") == 0){
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) -1];

            $controller = new BookController();
            echo $controller->delete($id);        
        }
    }
}