<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProgramRequest;
use App\Models\Program;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProgramCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProgramCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation { reorder as traitReorder; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Program::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/program');
        CRUD::setEntityNameStrings('program', 'programs');

        $this->commonSetup();
    }

    protected function commonSetup() {
        CRUD::orderBy('order', 'asc');

        CRUD::addField([
            'type'  => 'text',
            'name'  => 'name',
        ]);
        CRUD::addField([
            'type'  => 'text',
            'name'  => 'tracks',
            'hint' => 'Use format [1, 2, ...]',
        ]);
        // CRUD::addField([
        //     'type'      => 'relationship',
        //     'name'      => 'tracks', // the db column for the foreign key
        // ]);
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
        // CRUD::removeButton('delete');
        CRUD::removeButton('show');

        CRUD::removeColumn('order');
        CRUD::removeColumn('tracks');
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProgramRequest::class);

        $this->commonSetupCreate();
    }

    protected function commonSetupCreate() {

        CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */

        CRUD::removeField('order');
		//CRUD::removeField('user_id');
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

    protected function setupReorderOperation()
    {
        // define which model attribute will be shown on draggable elements
        $this->crud->set('reorder.label', 'name');
        // define how deep the admin is allowed to nest the items
        // for infinite levels, set it to 0
        $this->crud->set('reorder.max_level', 1);
    }

    public function saveReorder() {
        $this->crud->hasAccessOrFail('reorder');

        $all_entries = \Request::input('tree');
        $count = 1;
        foreach ($all_entries as $key => $entry) {
            if ($entry['item_id'] != '' && $entry['item_id'] != null) {
                $item = $this->crud->model->find($entry['item_id']);
                $item->order = $count*10;
                $item->save();

                $count++;
            }
        }
        return true;
    }

    public function store()
    {
        return $this->commonStore(Program::max('order'));
    }

    protected function commonStore($order) {
        $this->crud->getRequest()->request->add(['order' => $order+10]);
        $this->crud->addField(['type' => 'hidden', 'name' => 'order']);
        $response = $this->traitStore();
        return $response;
    }
}
