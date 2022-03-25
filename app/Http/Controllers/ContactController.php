<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Country;
use App\Models\Organization;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Para filtrar todos los campos posibles se usa Request, y creamos la variable filters
        // en la cual capturamos los que se a enviado por el Request en el campo search
        $filters = $request->all('search');

        // Pasando datos para la vista, crea la variable
        // Con all trae todo, con with y get permite traer en un array las relaciones
        // Usar paginate para traer solamente 15 registros por default y los datos de paginacion
        $contacts = Contact::with('organization')
                    // llamamos al scopeFilter referenciado en el modelo Contact
                    ->filter($filters)
                    ->latest('id')
                    ->paginate();
        
        // pasa los datos como segundo parametro con compact que crea un array de lo obtenido del modelo
        return Inertia::render('Contacts/Index', compact('contacts', 'filters'));
        // estos datos tienen que pasarse a la vista Vue como props, y tapescript
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Rescatamos las variables de las relaciones
        $organizations = Organization::all();
        $countries = Country::all();

        return Inertia::render('Contacts/Create', compact('organizations', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'organization_id' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country_id' => 'required',
            'postal_code' => 'required'
        ]);

        $contact = Contact::create($data);
        return redirect()->route('contacts.edit', $contact);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        // Rescatamos las variables de las relaciones
        $organizations = Organization::all();
        $countries = Country::all();

        // Al traer $contact me trae el registro con el id llamado
        // return $contact ;
        // lo pasamos a la vista con el metodo compact
        return Inertia::render('Contacts/Edit', compact('contact', 'organizations', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'organization_id' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country_id' => 'required',
            'postal_code' => 'required'
        ]);

        $contact->update($data);

        return redirect()->route('contacts.edit', $contact);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index');
    }
}
