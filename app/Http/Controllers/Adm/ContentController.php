<?php

namespace App\Http\Controllers\Adm;

use App\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function list($section, $tipo) {

        // Dado el tipo de contenido (imagen, texto, descargable, etc), arrojara una vista pertinente al parametro proporcionado
        if ($tipo == 'texto') {
            $contenido = Content::seccionTipo($section, $tipo)->orderBy('order')->paginate(8);
            return view('adm.contenido.texto.index', compact('contenido', 'section'));
        }
        if ($tipo == 'imagen') {
            $contenido = Content::seccionTipo($section, $tipo)->orderBy('order')->paginate(8);
            return view('adm.contenido.imagen.index', compact('contenido', 'section'));
        }
        if ($tipo == 'descargable') {
            $contenido = Content::seccionTipo($section, $tipo)->orderBy('order')->paginate(8);
            return view('adm.contenido.descargable.index', compact('contenido', 'section'));
        }
        if ($tipo == 'video') {
            $contenido = Content::seccionTipo($section, $tipo)->orderBy('order')->paginate(8);
            return view('adm.contenido.videos.index', compact('contenido', 'section'));
        }
    }

    public function store(Request $request) {
        $contenido = Content::create($request->all());

        if ($request->file('image'))
        {
            $path = Storage::disk('public')->put('uploads/contenido/imagenes',$request->file('image'));
            $contenido->fill(['image' => asset($path)])->save();
        }
        if ($request->type == 'descargable') {
            $path = Storage::disk('public')->put('uploads/contenido/descargas',$request->file('ficha'));
            $contenido->fill(['ficha' => asset($path)])->save();
        }


        return back()->with('success', 'Creado correctamente');

    }
    public function edit($section, Content $contenido) {
        if ($contenido->type == 'texto') {
            return view('adm.contenido.texto.edit', compact('contenido'));
        }
        if ($contenido->type == 'imagen') {
            return view('adm.contenido.imagen.edit', compact('contenido'));
        }
        if ($contenido->type == 'descargable') {
            return view('adm.contenido.descargable.edit', compact('contenido'));
        }
        if ($contenido->type == 'video') {
            return view('adm.contenido.videos.edit', compact('contenido'));
        }
    }

    public function update(Request $request, Content $contenido) {

        $contenido->fill($request->all())->save();

        if ($request->file('image'))
        {
            $path = Storage::disk('public')->put('uploads/contenido/imagenes',$request->file('image'));
            $contenido->fill(['image' => asset($path)])->save();
        }
        if ($request->type == 'descargable') {
            $path = Storage::disk('public')->put('uploads/contenido/descargas',$request->file('ficha'));
            $contenido->fill(['ficha' => asset($path)])->save();
        }


        return back()->with('success', 'Actualizado correctamente');

    }
}
