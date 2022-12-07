<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RifeRegisterRequest;
use App\Http\Requests\RifeUserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RifeUserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RifeUserCrudController extends UserCrudController
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
        CRUD::setModel(\App\Models\RifeUser::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/rifeuser');
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
        CRUD::setValidation(RifeRegisterRequest::class);

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