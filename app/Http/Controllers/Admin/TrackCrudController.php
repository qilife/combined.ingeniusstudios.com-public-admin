<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TrackRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TrackCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TrackCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Track::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/track');
        CRUD::setEntityNameStrings('track', 'tracks');

        $this->commonSetup();
    }

    protected function commonSetup() {
        CRUD::orderBy('id', 'asc');

        CRUD::addField([
            'type'      => 'select',
            'name'      => 'album_id', // the db column for the foreign key
			'options'   => (function ($query) {
        return $query->orderBy('name', 'ASC')->get();
    }), //  you can use this to filter the results show in the select
        ]);
		
    }
		
	

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
		//CRUD::orderBy('order', 'desc');
        CRUD::setFromDb(); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
        // CRUD::removeButton('delete');
        CRUD::removeButton('show');

        CRUD::removeColumn('filename');

        CRUD::addColumn([
            'name'      => 'id', // the db column for the foreign key
        ]);
        CRUD::addColumn([
            'type'      => 'relationship',
            'name'      => 'album',
			'searchLogic' => false,
			'orderable'  => true,
			'orderLogic' => function ($query, $column, $columnDirection) {
        return $query->leftJoin('albums', 'albums.id', '=', 'tracks.album_id')
            ->orderBy('albums.name', $columnDirection)->select('tracks.*');
    }, // the db column for the foreign key
			
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(TrackRequest::class);

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
        $this->setupCreateOperation();
    }
	//public function update()
//    {
//		//echo 1; exit;
//		//print_r(request()->toArray());exit;
//        $this->crud->setRequest($this->crud->validateRequest());
//		
//        /** @var \Illuminate\Http\Request $request */
//        $request = $this->crud->getRequest();
//
//        // Encrypt password if specified.
//        if ($request->input('id')) {
//			//print_r($request); echo 1; exit;
//			//$request->request->remove('password');
//            $request->request->set('id');
//        } else {
//			//print_r($request); echo 2; exit;
//            $request->request->remove('id');
//        }
//
//        $this->crud->setRequest($request);
//        $this->crud->unsetValidation(); // Validation has already been run
//
//        return $this->traitUpdate();
//    }
}
