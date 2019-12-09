<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PortfolioRequest as StoreRequest;
use App\Http\Requests\PortfolioRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class PortfolioCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PortfolioCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Portfolio');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/portfolio');
        $this->crud->setEntityNameStrings('portfolio', 'portfolios');

    
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
         $this->crud->addColumn([
            'name' => 'id',
            'type' => 'delete_checkbox',
            'lable' => ''
        ]);

        $this->crud->setFromDb();

        $this->crud->allowAccess('show');

       
        $this->crud->removeField('skills');

        $this->crud->addColumns([

            [
                'name' => 'image',
                'type' => 'image',
               
            ],
            
        ]);
       
        $this->crud->addFields([
            [
                'name' => 'challenge',
                'type' => 'ckeditor'
            ],
            [
                'name' => 'image',
                'type' => 'image',
                'upload' => true,
                'crop' => true,
                 'hint'=>'Recommended size is 580*450',
            ],
            [
                'name' => 'subimage1',
             
                'type' => 'image',
    'upload' => true,
   'hint'=>'Recommended size is 1140*650',
            ],
              [
                'name' => 'subimage2',
             
                'type' => 'image',
    'upload' => true,
  
            ],
              [
                'name' => 'subimage3',
             
                'type' => 'image',
    'upload' => true,

            ],
              [
                'name' => 'subimage4',
             
                'type' => 'image',
    'upload' => true,
    
            ],
              [
                'name' => 'subimage5',
             
                'type' => 'image',
    'upload' => true,
    
            ],
              [
                'name' => 'subimage6',
             
                'type' => 'image',
    'upload' => true,
   
            ],
            [  // Select
   'label' => "Category",
   'type' => 'select',
   'name' => 'categories_id', // the db column for the foreign key
   'entity' => 'categories', // the method that defines the relationship in your Model
   'attribute' => 'name', // foreign key attribute that is shown to user
   'model' => "App\Models\Category" // foreign key model
],
           
        ]);
       
        // add asterisk for fields that are required in PortfolioRequest
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
