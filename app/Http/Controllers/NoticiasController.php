<?php

namespace App\Http\Controllers;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index(){

        $noticias = Noticia::all();

        return view ('noticias/index',[
            'noticias' => $noticias
        ]);
    }

    public function publicarNoticia(){

        return view ('noticias/publicarNoticia');
    }

    public function verNoticia($id){

        $noticia = Noticia::findOrfail($id);

        return view('noticias/verNoticia', [
            'noticia' => $noticia
        ]);
    }


    public function agregarEjecutar(Request $request){

        $request->validate([
            'titulo' => 'required|min:10',
            'texto' => 'required|min:10',
            'sinopsis' => 'required|min:10',
            'fecha_publicacion' => 'required',
        ],[
            'titulo.required' => 'Tenés que ingresar el titulo de la noticia',
            'titulo.min' => 'El titulo de la noticia debe tener al menos 10 caractéres',
            'texto.required' => 'Tenés que ingresar el texto de la noticia',
            'texto.min' => 'El texto debe tener al menos 10 caractéres',
            'sinopsis.required' => 'Tenés que ingresar la sinopsis de la noticia',
            'sinopsis.min' => 'la sinopsis debe tener al menos 10 caracteres',
            'fecha_publicacion.required' => 'Debés ingresar la fecha de publicación',
        ]);
        
        $data = $request->all();

        if($request->hasFile('imagen')) {

            $data['imagen'] = date('YmHis') . "." . $request->file('imagen')->getClientOriginalExtension();

            $request->file('imagen')->move(public_path('/img'), $data['imagen']);
        }

        Noticia::create($data);

        return redirect()
            ->route('noticias.index')
            ->with('messagge.success', 'La noticia <b>' . e($data['titulo']) . '</b> se publicó correctamente !');
        
    }

    public function editarNoticia(int $id) {

        $noticia = Noticia::findOrfail($id);

        return view('noticias/editarNoticia', [
            'noticia' => $noticia
        ]);
    }
    public function editarEjecutar(Request $request, int $id) {

        $noticia = Noticia::findOrfail($id);

        $request->validate([
            'titulo' => 'required|min:5',
            'texto' => 'required|min:10',
            'sinopsis' => 'required|min:10',
        ],[
            'titulo.required' => 'Tenés que ingresar el titulo de la noticia',
            'titulo.min' => 'El titulo de la noticia debe tener al menos min: caractéres',
            'texto.required' => 'Tenés que ingresar el texto de la noticia',
            'texto.min' => 'El texto debe tener al menos 10 caractéres',
            'sinopsis.required' => 'Tenés que ingresar la sinopsis de la noticia',
            'sinopsis.min' => 'la sinopsis debe tener al menos min: caractéres',
        ]);

        $data = $request->all();

        
        if($request->hasFile('imagen')) {

            $data['imagen'] = date('YmHis') . "." . $request->file('imagen')->getClientOriginalExtension();

            $request->file('imagen')->move(public_path('/img'), $data['imagen']);
        }

        $noticia->update($data);

        return redirect()
        ->route('noticias.index')
        ->with('messagge.success', 'Tu noticia <b>' . e($noticia->nombre) . '</b> se editó correctamente !');
    }

    public function eliminar(int $id) {

        $noticia = Noticia::findOrfail($id);
        $noticia->delete();
        //unlink(public_path('img/'. $noticia->imagen));

        return redirect()
        ->route('noticias.index')
        ->with('messagge.success', 'Tu noticia <b>' . e($noticia->nombre) . '</b> ha sido eliminada con éxito !');
    }
}
