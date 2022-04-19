<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AddProduct extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
       
        // $lims_tax_list = Tax::where('is_active', 1)->get();x
        
        return view('components.add-product', compact(['lims_brand_list', 'categories', 'units', 'warehouses', 'barcodeTypes', 'brands']));
    }
}
