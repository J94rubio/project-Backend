<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    
    public function read (Request $request){
    
        $form = new Form();
        $info = $form->all();

        return response()->json($info);
    
    }

    public function create(Request $request){

        $form = new Form();

        $form->nombreapellido = $request->input("nombreapellido");
        $form->correoelectronico = $request->input("correoelectronico");
        $form->telefono = $request->input("telefono");
        $form->mensaje = $request->input("mensaje");
        $form->contacto = $request->input("contacto");
        $form->horario = $request->input("horario");

        $form->save();

        $message = ["message" => "¡Formulario enviado con exito!"];
        
        return response()->json($message);

    }

    public function update(Request $request){
        $idForm = $request->query("id");
        $form = new Form();
        $findForm = $form->find($idForm);

        $findForm->nombreapellido=$request->input("nombreapellido");
        $findForm->correoelectronico=$request->input("correoelectronico");
        $findForm->telefono=$request->input("telefono");
        $findForm->mensaje=$request->input("mensaje");
        $findForm->contacto=$request->input("contacto");
        $findForm->horario=$request->input("horario");

        $findForm->save();

        $message = ["message" => "Actualizació Exitosa!",
            "idFomr" => $request->query("id"),
            "nameForm" => $findForm->nombreapellido
        ];

        return $message;
    }

    public function delete(Request $request){
        
        $idForm = $request->query("id");

        $form = new Form();

        $formParticular = $form->find($idForm);

        $formParticular->delete();

        $message=[
            "message" => "Eliminación exitosa!",
            "idForm" => $request->query("id")
        ];

        return $message;
    }

}
