<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InstructionRequest;
use App\Models\Instruction;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TierCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class InstructionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
//    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation { reorder as traitReorder; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
		
		
        CRUD::setModel(\App\Models\Instruction::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/instruction');
        CRUD::setEntityNameStrings('instruction', 'instructions');

        $this->commonSetup();
    }

    protected function commonSetup() {
        CRUD::orderBy('id', 'asc');
		
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
//		echo '4';die;
        CRUD::setFromDb(); // columns
		$this->crud->removeButton('create');
        
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {

        CRUD::setValidation(InstructionRequest::class);

        $this->commonSetupCreate();
    }

    protected function commonSetupCreate() {
        //CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
		CRUD::addField([   // Browse
            'name'  => 'name',
			'label' => 'Instruction PDF',
//			'type'  => 'browse',
			'type' => 'upload',
			'upload' => true,
    		'disk' => 'document_uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
	    ]);
		
        //CRUD::removeField('order');
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
		
        $this->setupCreateOperation();
    }

    public function store()
    {
	
        $this->crud->setRequest($this->crud->validateRequest());

        /** @var \Illuminate\Http\Request $request */
        $request = $this->crud->getRequest();
		
		$path = $request->file('name')->storeAs('instruction', 'file_name', 'document_uploads');
		
        $this->crud->unsetValidation(); // Validation has already been run

        return $this->traitStore();
    }

}
