<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use App\Models\Categoria;
use App\Models\Parabrisa;
use App\Models\Posicion;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;

class ParabrisaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Listar producto')->only('index');
        $this->middleware('can:Editar producto')->only('edit', 'update');
        $this->middleware('can:Crear producto')->only('create', 'store');
        $this->middleware('can:Eliminar producto')->only('destroy');
    }
    public function index()
    {
        //echo "hola mundo";
       // $parabrisas = Parabrisa::all();
        return view('parabrisas.index',compact('parabrisas'));
    }
    public function index2()
    {
        //echo "hola mundo";
        $parabrisas = Parabrisa::all();
        return view('parabrisas.index2',compact('parabrisas'));
    }
   
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $categorias = Categoria::all();
        
        return view('parabrisas.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        
        // Validar los datos del formulario
        $validatedData = $request->validate([
            
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'imagen'=>'required|image|max:2048',
            'marca' => 'required|string',
            'color' => 'required|string',
            'detalle' => 'nullable|string',
            'precio' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'categoria_id' => 'required|exists:categorias,id',
            
        ]);

        // Crear una nueva instancia de Parabrisa y asignar los valores
        $parabrisa = new Parabrisa();
        
        $parabrisa->titulo = $validatedData['titulo'];
        $parabrisa->descripcion = $validatedData['descripcion'];
        $parabrisa->marca = $validatedData['marca'];
       
        $imagenes=$request->file('imagen')->store('public/imagenes');
        $parabrisa->imagen= Storage::url($imagenes);
        $parabrisa->color = $validatedData['color'];
        $parabrisa->detalle= $validatedData['detalle'];
        $parabrisa->precio= $validatedData['precio'];      
        $parabrisa->categoria_id = $validatedData['categoria_id'];
    

        // Guardar el nuevo parabrisa en la base de datos
        $parabrisa->save();

        $bitacora = new Bitacora();
        $bitacora->accion = '+++CREAR ';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();
        
        // Redireccionar a una página de éxito o mostrar un mensaje
        return redirect()->route('admin.parabrisa.index')->with('info', 'El nuevo PARABRISA se creo satisfactoriamente!');
         // return $imagen;
    }

    /**
     * Display the specified resource.
     */
    public function show(Parabrisa $parabrisa)
    {
        return view('parabrisas.show',compact('parabrisa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parabrisa $parabrisa)
    {
        
        $categorias = Categoria::all();
        
        return view('parabrisas.edit',compact('categorias','parabrisa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parabrisa $parabrisa)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            
            'titulo' => 'required|string',
             'descripcion' => 'required|string',
             'imagen'=>'required|image|max:2048',
             'marca' => 'required|string',
             'color' => 'required|string',
             'detalle' => 'nullable|string',
              
            'categoria_id' => 'required|exists:categorias,id',
            'precio' => 'required|numeric',
            
        ]);
        

        
        $parabrisa->titulo = $validatedData['titulo'];
        $parabrisa->descripcion = $validatedData['descripcion'];
        $imagenes=$request->file('imagen')->store('public/imagenes');
        $parabrisa->imagen= $imagenes;
        $parabrisa->marca = $validatedData['marca'];
        $parabrisa->color = $validatedData['color'];
        $parabrisa->detalle = $validatedData['detalle'];
        $parabrisa->precio = $validatedData['precio'];
       
        $parabrisa->categoria_id = $validatedData['categoria_id'];
        

     

        // Actualizando informacion
        $parabrisa->save();

        $bitacora = new Bitacora();
        $bitacora->accion = '***ACTUALIZAR PARABRISA';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();

        // Redireccionar a una página de éxito o mostrar un mensaje
        return redirect()->route('admin.parabrisa.index')->with('info', 'Datos actualizados!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parabrisa $parabrisa)
    {
        $parabrisa->delete();

        $bitacora = new Bitacora();
        $bitacora->accion = 'XXX ELIMINAR PARABRISA';
        $bitacora->fecha_hora = now();
        $bitacora->fecha = now()->format('Y-m-d');
        $bitacora->user_id = auth()->id();
        $bitacora->save();

        return redirect()->route('admin.parabrisa.index')->with('info', 'El PARABRISA se eliminó con éxito!');
    }
}
