<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//////////////////////////////////////////////
use App\Http\Controllers\Controller;
use App\Models\MateriaPrima;

/**
 * Class EmpleadoController
 * @package App\Http\Controllers
 */
class MateriasPrimasController extends Controller
{
    public function show($id){
        $data = MateriaPrima::find($id);

        return response()->json($data, 200);
    }

    public function index(){
        $data = MateriaPrima::get();     

        return response()->json($data, 200);
    }

    public function store(Request $request){
        $MateriaPrimas = MateriaPrima::create($request->all());
        
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
          ], 200);
    }

    public function update(Request $request, $id){

        MateriaPrima::find($id)->update($request->all());
        
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }

    public function destroy($id){
        MateriaPrima::find($id)->delete();

        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
      }
}
