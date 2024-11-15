<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $productos = Producto::paginate();

        return view('producto.index', compact('productos'))
            ->with('i', ($request->input('page', 1) - 1) * $productos->perPage());
    }

    public function userIndex(Request $request): View
    {
        $productos = Producto::paginate();

        return view('productos', compact('productos'))
            ->with('i', ($request->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $producto = new Producto();

        return view('producto.create', compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(ProductoRequest $request): RedirectResponse
    {
        // Validación de la imagen
        $validated = $request->validated();

        // Si se sube una imagen, guarda el archivo en el almacenamiento y obtiene su ruta
        if ($request->hasFile('imagen')) {
            $validated['imagen'] = $request->file('imagen')->store('productos', 'public');
        }

        // Crear el producto con los datos validados
        Producto::create($validated);

        return Redirect::route('productos.index')
            ->with('success', 'Producto creado exitosamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $producto = Producto::find($id);

        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductoRequest $request, Producto $producto): RedirectResponse
    {
        $producto->update($request->validated());

        return Redirect::route('productos.index')
            ->with('success', 'Producto updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Producto::find($id)->delete();

        return Redirect::route('productos.index')
            ->with('success', 'Producto deleted successfully');
    }
}
