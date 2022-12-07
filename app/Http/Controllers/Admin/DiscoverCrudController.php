<?php

namespace App\Http\Controllers\Admin;

//use App\Http\Requests\TrackRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TrackCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DiscoverCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation; //{ update as traitUpdate; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Discover::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/discover');
        CRUD::setEntityNameStrings('discover', 'discover');

        $this->commonSetup();
    }

    protected function commonSetup() {
        CRUD::orderBy('id', 'asc');
		
	

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */}
    protected function setupListOperation()
    {
		//CRUD::orderBy('order', 'desc');
        CRUD::setFromDb(); // columns
		CRUD::setDefaultPageLength(-1);
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
		 CRUD::addColumn(['name' => 'device', 'type' => 'text']);
		 CRUD::addColumn(['name' => 'url', 'type' => 'text']);
         CRUD::removeButton('delete');
		 CRUD::removeButton('show');
		 //$this->crud->removeButton('create');
		 CRUD::removeButton('create');
		 CRUD::denyAccess('create');
		 
	}

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        //CRUD::setValidation(TrackRequest::class);

        $this->commonSetupCreate();
    }

    protected function commonSetupCreate() {
		
        CRUD::setFromDb(); // fields
		
		
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        CRUD::removeSaveActions(['save_and_preview','save_and_new','save_and_edit']);
		$this->setupCreateOperation();
		
    }
}
