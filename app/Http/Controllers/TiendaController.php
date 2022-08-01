<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Talle;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function index(){

        $productos = Producto::with(['categoria'])->get();
        $categorias = Categoria::all();

        return view ('tienda/index',[
            'productos' => $productos,
            'categorias' =>$categorias
        ]);
    }

    public function agregarForm(){

        $producto = Producto::all();
        $categorias = Categoria::all();
        $talles = Talle::all();

        return view('tienda/agregar', [
            'producto' => $producto,
            'categorias' =>$categorias,
            'talles' => $talles
        ]);
    }

    public function verDetalle($id){

        $producto = Producto::findOrfail($id);

        return view('tienda/verDetalle', [
            'producto' => $producto
        ]);
    }

    public function categoria($categoria_id){

        $productos = Producto::where('categoria_id',$categoria_id)->get();
        $categorias = Categoria::all();

        return view ('tienda/categoria',[
            'productos' => $productos,
            'categorias' =>$categorias
        ]);
    }

    public function agregarEjecutar(Request $request){

        $request->validate([
            'nombre' => 'required|min:4',
            'precio' => 'required|numeric',
        ],[
            'nombre.required' => 'Tenés que ingresar el nombre del producto',
            'nombre.min' => 'El nombre del producto debe tener al menos min: caractéres',
            'precio.required' => 'Tenés que ingresar el precio del producto',
            'nombre.numeric' => 'El precio debe ser un dato numérico',
        ]); 
        $data = $request->all();

        if($request->hasFile('imagen')) {

            $data['imagen'] = date('YmHis') . "." . $request->file('imagen')->getClientOriginalExtension();

            $request->file('imagen')->move(public_path('/img'), $data['imagen']);
        }

        $producto = Producto::create($data);

        $producto->talles()->attach($data['talle_id']);

        return redirect()
            ->route('tienda.index')
            ->with('messagge.success', 'Tu producto <b>' . e($data['nombre']) . '</b> fue agregado exitosamente !');
        
    }

    public function eliminar(int $id) {

        $producto = Producto::findOrfail($id);
        $producto->talles()->detach();
        $producto->delete();
        
        // unlink(public_path('img/'. $producto->imagen));

        return redirect()
        ->route('tienda.index')
        ->with('messagge.success', 'Tu producto <b>' . e($producto->nombre) . '</b> ha sido eliminada con éxito !');
    }

    public function editarForm(int $id) {

        $producto = Producto::findOrfail($id);
        $categorias = Categoria::all();
        $talles = Talle::all();

        return view('tienda/editarForm', [
            'producto' => $producto,
            'categorias' => $categorias,
            'talles' => $talles
        ]);
    }

    public function editarEjecutar(Request $request, int $id) {

        $producto = Producto::findOrfail($id);

        $request->validate([
            'nombre' => 'required|min:4',
            'precio' => 'required|numeric',
        ],[
            'nombre.required' => 'Tenés que ingresar el nombre del producto',
            'nombre.min' => 'El nombre del producto debe tener al menos min: caractéres',
            'precio.required' => 'Tenés que ingresar el precio del producto',
            'nombre.numeric' => 'El precio debe ser un dato numérico',
        ]);

        $data = $request->all();

        
        if($request->hasFile('imagen')) {

            $data['imagen'] = date('YmHis') . "." . $request->file('imagen')->getClientOriginalExtension();

            $request->file('imagen')->move(public_path('/img'), $data['imagen']);
        }

        $producto->update($data);

        return redirect()
        ->route('tienda.index')
        ->with('messagge.success', 'Tu producto <b>' . e($producto->nombre) . '</b> se editó correctamente !');
    }

}
