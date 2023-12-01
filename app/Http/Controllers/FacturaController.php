<?php    
namespace App\Http\Controllers;
    
use App\Models\Factura;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
    
class FacturaController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $query = Factura::query();

    if ($request->has('t_paciente')) {
        $query->where('t_paciente', 'LIKE', '%' . $request->input('t_paciente') . '%');
    }

    if ($request->has('factura')) {
        $query->where('factura', 'LIKE', '%' . $request->input('factura') . '%');
    }

    if ($request->has('cliente')) {
        $query->where('cliente', 'LIKE', '%' . $request->input('cliente') . '%');
    }

    $facturas = $query->paginate(500);  // Obtiene todos los resultados con paginación.

    return view('facturas.index', compact('facturas'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
       
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Factura  $Factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura): View
    {
        return view('facturas.show',compact('factura'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura): View
    {
        return view('facturas.edit',compact('factura'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $Factura): RedirectResponse
    {
        request()->validate([
        
            'id',
            't_paciente',
            'factura',
            'dpto',
            'tipo_doc',
            'factura_fiscal',
            'f_ingreso',
            'f_cierre',
            'cliente',
            'n_cedula',
            'valor',
            'credito',
            'f_registro',
            'dias_incapacidad',
            'fecha_egreso',
            'estado_salida',
            'diagnostico',
            's_factura',
        ]);
    
        $factura->update($request->all());
    
        return redirect()->route('facturas.index')
                        ->with('success','Factura actualizada exitosamente.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factura  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura): RedirectResponse
    {
       
    }
}