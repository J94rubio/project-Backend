<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Books;

class BookController extends Controller
{

    public function read(Request $request){

        $book = new Books();

        $data = $book->all();

        return  response()->json($data);
    }

    public function create(Request $request){

        $book = new Books();

        $book->name = $request->input("name");
        $book->isbn = $request->input("isbn");
        $book->author = $request->input("author");
        $book->edition = $request->input("edition");
        $book->title = $request->input("title");

        $book->save();

        $message=["message" => "Registro exitoso!"];
        
        return response()->json($message);
    }

    public function update(Request $request){

        $idBook = $request->query("id");

        $book = new Books();

        $bookParticular = $book->find($idBook);

        $bookParticular->name = $request->input("name");
        $bookParticular->isbn = $request->input("isbn");
        $bookParticular->author = $request->input("author");
        $bookParticular->edition = $request->input("edition");
        $bookParticular->title = $request->input("title");

        $bookParticular->save();

        $message=[
            "message" => "Actialización exitosa!",
            "idBook" => $request->query("id"),
            "nameBook" => $bookParticular->name,
            "isb" => $bookParticular->isbn,
            "title" => $bookParticular->title
        ];


        return $message;
    }

    public function delete(Request $request){
        
        $idBook = $request->query("id");

        $book = new Books();

        $bookParticular = $book->find($idBook);

        $bookParticular->delete();

        $message=[
            "message" => "Eliminación exitosa!",
            "idBook" => $request->query("id")
        ];

        return $message;
    }

}
