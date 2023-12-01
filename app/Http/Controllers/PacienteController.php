<?php    
namespace App\Http\Controllers;
    
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
    
class PacienteController extends Controller
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
        
        $query = Paciente::query();

    if ($request->has('nombres')) {
        $query->where('nombres', 'LIKE', '%' . $request->input('nombres') . '%');
    }

    if ($request->has('apellidos')) {
        $query->where('apellidos', 'LIKE', '%' . $request->input('apellidos') . '%');
    }

    if ($request->has('n_cedula')) {
        $query->where('n_cedula', 'LIKE', '%' . $request->input('n_cedula') . '%');
    }

    if ($request->has('pais')) {
        $query->where('pais', 'LIKE', '%' . $request->input('pais') . '%');
    }

    if ($request->has('edad')) {
        $query->where('edad', 'LIKE', '%' . $request->input('edad') . '%');
    }

    $pacientes = $query->paginate(500);  // Obtiene todos los resultados con paginación.

    return view('pacientes.index', compact('pacientes'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('pacientes.create');
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
            'id',
            'c_paciente',
            'tipo_doc',
            'n_cedula',
            'historia',
            'apellidos',
            'nombres',
            'edad',
            'f_nacimiento',
            'pais',
            'ciudad',
            'domicilio',
            'telefono_1',
            'telefono_2',
            'estado_civil',
            'sexo',
            'n_conyugue',
            'apellidos_g',
            'nombres_g',
            'f_registro',
        ]);
    
        Paciente::create($request->all());
    
        return redirect()->route('pacientes.index')
                        ->with('success','Paciente creado de manera exitosa.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $Paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente): View
    {
        return view('pacientes.show',compact('paciente'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente): View
    {
        return view('pacientes.edit',compact('paciente'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente): RedirectResponse
    {
         request()->validate([
        
            'c_paciente',
            'tipo_doc',
            'n_cedula',
            'historia',
            'apellidos',
            'nombres',
            'edad',
            'f_nacimiento',
            'pais',
            'ciudad',
            'domicilio',
            'telefono_1',
            'telefono_2',
            'estado_civil',
            'sexo',
            'n_conyugue',
            'apellidos_g',
            'nombres_g',
            'f_registro',
        ]);
    
        $paciente->update($request->all());
    
        return redirect()->route('pacientes.index')
                        ->with('success','Paciente actualizado exitosamente.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente): RedirectResponse
    {
        $paciente->delete();
    
        return redirect()->route('pacientes.index')
                        ->with('success','Paciente eliminado exitosamente.');
    }
}