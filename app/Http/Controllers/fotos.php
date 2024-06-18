<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Editorial;

// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\File;



class fotos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vs_editoriales = Editorial::where('status', '=', 1)
        ->get();
        $editoriales = $this->cargarDT($vs_editoriales);
        return view('foto.index')->with('editorial', $editoriales);
    
    }

   
    public function create()
{
   //Abre el formulario de captura de registros
   return view('foto.create');
}

public function cargarDT($consulta)
   {
       $editoriales = [];
       foreach ($consulta as $key => $value) {
           $ruta = "eliminar" . $value['id'];
           $eliminar = route('editorialDelete', $value['id']);
           $actualizar = route('foto.edit', $value['id']);
           $acciones = '
          <div class="btn-acciones">
              <div class="btn-circle">
                  <a href="' . $actualizar . '" role="button" class="btn btn-success" title="Actualizar">
                      <i class="far fa-edit"></i>
                  </a>
                   <a role="button" class="btn btn-danger" onclick="modal('.$value['id'].')" data-bs-toggle="modal" data-bs-target="#exampleModal"">
                      <i class="far fa-trash-alt"></i>
                  </a>
              </div>
          </div>
';


           $editoriales[$key] = array(
               $acciones,
               $value['id'],
               $value['nombre'],
               $value['domicilio'],
               $value['correo'],
             
           );
       }




       return $editoriales;
   }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // guarda el registro capturado en un formulario

        $this-> validate($request,[
            'nombre' => 'required|min:5',
            'domicilio'=>['required'],
            'correo' => ['required'],
        ]);
        $editorial = new Editorial() ;
        $editorial->nombre = $request->input('nombre') ;
        $editorial->domicilio = $request->input('domicilio') ;
        $editorial->correo = $request->input('correo') ;
        $editorial->status =1 ;
        $editorial->save();
        return redirect()->route('foto.index')->with(array(
            'message' => 'La Editorial se ha guardado correctamente'
         ));
         }
         
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editorial = Editorial::findOrFail($id);
        return view ('foto.edit', array(
            'editorial'=>$editorial
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Guarda la información del formulario de edición
   $this->validate($request, [
    'nombre' => ['required|min:5'],
    'domicilio' => ['required'],
    'correo' => ['required'],
]);
$editorial = Editorial::findOrFail($id);
$editorial->nombre =  $request->input('nombre');
$editorial->domicilio = $request->input('domicilio');
$editorial->correo = $request->input('correo');
$editorial -> status = 1;
$editorial->save();
return redirect()->route('editorial.index')->with(array(
    'message' => 'La editorial se ha actualizado correctamente'
));
    }

    public function deleteEditorial($editorial_id){
        $editorial = Editorial::find($editorial_id);
        if($editorial){
            $editorial->status = 0;
            $editorial->update();
            return redirect()->route('foto.index')->with(array(
                "message" => "La editorial se ha eliminado correctamente"));
        }else{
            return redirect()->route('editoriales.index')->with(array(
                "message" => "La editorial que trata de eliminar no existe"));
        } //Fin del IF
     
     
     }
     
}
