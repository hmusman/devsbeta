<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\AboutRequest as StoreRequest;
use App\Http\Requests\AboutRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class AboutCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class AboutCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\About');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/about');
        $this->crud->setEntityNameStrings('about', 'abouts');
         
         $this->crud->addFields([
            [  'label'=>'Name',
                'name'=>'name',
             'type'=>'text',
            ],
             [  'label'=>'Designation',
                'name'=>'designation',
              'type'=>'text',
        ] ,     [  'label'=>'Email',
                'name'=>'email',
             'type'=>'text',
            ], [  'label'=>'Phone',
                'name'=>'phone',
             'type'=>'text',
            ], [  'label'=>'Image',
                'name'=>'image',
             'type'=>'image',
             'upload'=>'true',
             'crop'=>'true',
            ],]);
         $this->crud->addColumns([['name'=>'name'],
            ['name'=>'designation'],
            ['name'=>'email'],
            ['name'=>'phone'],
            ['name'=>'image','type'=>'image'],]);
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add asterisk for fields that are required in AboutRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
