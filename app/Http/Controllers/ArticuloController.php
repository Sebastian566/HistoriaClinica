<?php    
namespace App\Http\Controllers;
    
use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
    
class ArticuloController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    function __construct()
    {
         
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index(Request $request)
    {
        $tipoRedFiltro = $request->input('tipored');

    // Consulta para obtener los registros filtrados
    $articulos = Articulo::when($tipoRedFiltro, function ($query) use ($tipoRedFiltro) {
        return $query->where('tipored', $tipoRedFiltro);
    })->latest()->get();

    return view('articulos.index', compact('articulos'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('articulos.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        request()->validate([
            'servicio',
            'ot',
            'nombre_id',
            'direccion',
            'referencia',
            'g_claro',
            'tipored',
            'cap',
            'ubicacion_id',
            'fecha_inicio',
            'fecha_fin',
            'meses',
            'vr_contratado',
            'vr_ultifactura',
        ]);
    
        Articulo::create($request->all());
    
        return redirect()->route('articulos.index')
                        ->with('success','Articulo creado de manera exitosa.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo): View
    {
        return view('articulos.show',compact('articulo'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo): View
    {
        return view('articulos.edit',compact('articulo'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo): RedirectResponse
    {
         request()->validate([
            'servicio',
            'ot',
            'nombre_id',
            'direccion',
            'referencia',
            'g_claro',
            'tipored',
            'cap',
            'ubicacion_id',
            'fecha_inicio',
            'fecha_fin',
            'meses',
            'vr_contratado',
            'vr_ultifactura',
        ]);
    
        $articulo->update($request->all());
    
        return redirect()->route('articulos.index')
                        ->with('success','Articulo actualizado exitosamente.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo): RedirectResponse
    {
        $articulo->delete();
    
        return redirect()->route('articulos.index')
                        ->with('success','Articulo eliminado exitosamente.');
    }
}