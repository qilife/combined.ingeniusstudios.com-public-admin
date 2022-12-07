<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ConsoleRegisterRequest;
use App\Http\Requests\ConsoleUserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ConsoleUserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ConsoleUserCrudController extends UserCrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation { update as traitUpdate; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\ConsoleUser::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/consoleuser');
        CRUD::setEntityNameStrings('user', 'users');

        parent::commonSetup();
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        parent::setupListOperation();
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ConsoleRegisterRequest::class);

        $this->commonSetupCreate(false);
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {	
        $this->commonSetupCreate(true);
    }
	
	protected function commonSetupCreate($is_update) {
        // CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
        // CRUD::removeField('password');
		//print_r($is_update);exit;
        CRUD::addField([   // Password
            'name'  => 'name',
        ]);
        if (!$is_update) {
            CRUD::addField([   // Password
                'name'  => 'email',
                'type'  => 'email'
            ]);
        } else {
            CRUD::addField([   // Password
                'name'  => 'email',
                'type'  => 'email',
                'attributes' => [
                    'disabled' => 'disabled'
                ]
            ]);
        }
		
		//print_r(Auth::user());exit;
		//$data = session()->all();
		//print_r($query);exit;
		/*$user_id = DB::table('users')
    		->select('name')
    		->where('is_admin', 1)
    		->get();
		print_r($user_id);exit;*/
        
            CRUD::addField([   // Password
                'name'  => 'password',
                'type'  => 'password'
            ]);
            CRUD::addField([   // Password
                'name'  => 'password_confirmation',
                'type'  => 'password'
            ]);
       
		
           
        
		
		
        CRUD::addField([
            'type'  => 'checkbox',
            'name'  => 'is_active',
			
        ]);
		CRUD::addField([
            'type'  => 'checkbox',
            'name'  => 'is_admin',
        ]);
        /*CRUD::addField([   // Checklist
            'label'     => 'Tiers',
            'type'      => 'checklist',
            'name'      => 'tiers',
            'entity'    => 'tiers',
            'attribute' => 'name',
            // 'model'     => 'App\Models\Tier',
            'pivot'     => true,
            'options'   => (function ($query) {
                return $query->orderBy('order', 'asc')->get()->pluck('name','id')->toArray();
            }),
        ]);
        CRUD::addField([   // Checklist
            'label'     => 'Categories',
            'type'      => 'checklist',
            'name'      => 'categories',
            'entity'    => 'categories',
            'attribute' => 'name',
            // 'model'     => 'App\Models\Category',
            'pivot'     => true,
            'options'   => (function ($query) {
                return $query->orderBy('order', 'asc')->get()->pluck('name','id')->toArray();
            }),
        ]);*/
		
		//CRUD::field('categories')->type('checkbox');
		//$this->crud->field('price')->type('number');
		CRUD::addField([   // two interconnected entities
    'label'             => 'Categories',
    'field_unique_name' => 'categories',
    'type'              => 'checklist_dependency',
    'name'              => ['tier', 'categories'], // the methods that define the relationship in your Models
    'subfields'         => [
        'primary' => [
            'label'            => 'Tiers',
            'name'             => 'tier', // the method that defines the relationship in your Model
            'entity'           => 'tier', // the method that defines the relationship in your Model
            'entity_secondary' => 'categories', // the method that defines the relationship in your Model
            'attribute'        => 'name', // foreign key attribute that is shown to user
            'model'            => "App\Models\ConsoleTier", // foreign key model
            'pivot'            => true, // on create&update, do you need to add/delete pivot table entries?
            /*'options'   => (function ($query) {
                return $query->orderBy('order', 'asc')->get()->pluck('name','id')->toArray();
            }),*/
        ],
        'secondary' => [
            'label'          => 'Categories',
            'name'           => 'categories', // the method that defines the relationship in your Model
            'entity'         => 'categories', // the method that defines the relationship in your Model
            'entity_primary' => 'tier', // the method that defines the relationship in your Model
            'attribute'      => 'name', // foreign key attribute that is shown to user
            'model'          => "App\Models\ConsoleCategory", // foreign key model
            'pivot'          => true,
			'class'       => 'form-control some-class', // on create&update, do you need to add/delete pivot table entries?
            /*'options'   => (function ($query) {
                return $query->orderBy('order', 'asc')->get()->pluck('name','id')->toArray();
            }),*/
        ],
    ],
]);
		
        CRUD::addField([   // Checklist
            'label'     => 'Albums',
            'type'      => 'checklist',
            'name'      => 'albums',
            'entity'    => 'albums',
            'attribute' => 'name',
            // 'model'     => 'App\Models\Album',
            'pivot'     => true,
            'options'   => (function ($query) {
                return $query->orderBy('order', 'asc')->get()->pluck('name','id')->toArray();
            }),
        ]);
    }

    public function store()
    {
        $this->crud->setRequest($this->crud->validateRequest());

        /** @var \Illuminate\Http\Request $request */
        $request = $this->crud->getRequest();

        // Encrypt password if specified.
        if ($request->input('password')) {
            $request->request->set('password', bcrypt($request->input('password')));
        } else {
            $request->request->remove('password');
        }

        $this->crud->setRequest($request);
        $this->crud->unsetValidation(); // Validation has already been run

        return $this->traitStore();
    }
	public function update()
    {
		//echo 1; exit;
        $this->crud->setRequest($this->crud->validateRequest());
		
        /** @var \Illuminate\Http\Request $request */
        $request = $this->crud->getRequest();

        // Encrypt password if specified.
        if ($request->input('password')) {
			//print_r($request); echo 1; exit;
			//$request->request->remove('password');
            $request->request->set('password', bcrypt($request->input('password')));
        } else {
			//print_r($request); echo 2; exit;
            $request->request->remove('password');
        }

        $this->crud->setRequest($request);
        $this->crud->unsetValidation(); // Validation has already been run

        return $this->traitUpdate();
    }
}
