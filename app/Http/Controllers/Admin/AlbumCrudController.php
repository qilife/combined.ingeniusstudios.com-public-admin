<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AlbumCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AlbumCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
	use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation { reorder as traitReorder; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Album::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/album');
        CRUD::setEntityNameStrings('album', 'albums');

        $this->commonSetup();
    }

    protected function commonSetup() {
        CRUD::orderBy('order', 'asc');
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

        CRUD::removeColumns(['benefits', 'category_id', 'image', 'sku'/*, 'order'*/]);

        CRUD::addColumn([
            'type'      => 'relationship',
            'name'      => 'category', // the db column for the foreign key
        ]);
        CRUD::addColumn([
            'type'  => 'boolean',
            'name'  => 'is_free',
        ]);
        CRUD::addColumn([
            'type'  => 'boolean',
            'name'  => 'is_active',
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
        CRUD::setValidation(AlbumRequest::class);

        $this->commonSetupCreate();
    }

    protected function commonSetupCreate() {
        // CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */

        // CRUD::removeField('order');
        CRUD::addField([
            'type'  => 'checkbox',
            'name'  => 'is_free',
        ]);
        CRUD::addField([
            'type'  => 'checkbox',
            'name'  => 'is_active',
        ]);
        CRUD::addField([
            'type'  => 'text',
            'name'  => 'name',
        ]);
        CRUD::addField([
            'type'      => 'select',
            'name'      => 'category_id', // the db column for the foreign key
        ]);
        CRUD::addField([
            'type'  => 'text',
            'name'  => 'audio_folder',
        ]);
        CRUD::addField([
            'name'  => 'image',
        ]);
        CRUD::addField([
            'type'      => 'relationship',
            'name'      => 'tracks', // the db column for the foreign key
            'attributes' => [
                'readonly'    => 'readonly',
                'disabled'    => 'disabled',
            ],
			/*'options'   => (function ($query) {
        return $query->orderBy('order', 'ASC')->get();
    }),*/
        ]);
        CRUD::addField([
            'type' => 'select2_multiple',
            'name' => 'tags', // the relationship name in your Model
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
        ]);
        CRUD::addField([
            'type'  => 'text',
            'name'  => 'benefits',
            'hint' => 'Use format ["Name", "Name", ...]',
        ]);
		CRUD::addField([
            'type'  => 'text',
            'name'  => 'sku',
        ]);
        CRUD::addField([
            'type'  => 'text',
            'name'  => 'order',
        ]);
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

    // protected function setupReorderOperation()
    // {
    //     // define which model attribute will be shown on draggable elements
    //     $this->crud->set('reorder.label', 'name');
    //     // define how deep the admin is allowed to nest the items
    //     // for infinite levels, set it to 0
    //     $this->crud->set('reorder.max_level', 1);
    // }

    // public function saveReorder() {
    //     $this->crud->hasAccessOrFail('reorder');

    //     $all_entries = \Request::input('tree');
    //     $count = 1;
    //     foreach ($all_entries as $key => $entry) {
    //         if ($entry['item_id'] != '' && $entry['item_id'] != null) {
    //             $item = $this->crud->model->find($entry['item_id']);
    //             $item->order = $count*10;
    //             $item->save();

    //             $count++;
    //         }
    //     }
    //     return true;
    // }

    public function store()
    {
        $this->commonStore(Album::max('order'));
    }

    protected function commonStore($max) {
        $this->crud->getRequest()->request->add(['order' => $max+10]);
        $this->crud->addField(['type' => 'hidden', 'name' => 'order']);
        $response = $this->traitStore();
        return $response;
    }
}
