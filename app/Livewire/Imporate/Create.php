<?php

namespace App\Livewire\Imporate;

use App\Models\imporate;
use Livewire\Component;
use App\Models\Import;

class Create extends Component
{
    public $countryFrom;
    public $countryTo;
    public $amwal_type;
    public $az_taraq;
    public $shode;
    public $company_number;
    public $company_name;
    public $number;
    public $number_act;
    public $number_code;

    public $date;
    public $product_type;
    public $product_name;
    public $maroja;
    public $maoda;
    public $wigth_by_ton;
    public $wigth_by_kg;
    public $wigth_by_gram;
    public $date_of_takhliye;
    public $name_of_representative;
    public $bar_jalani;
    
    public $number_of_barname;
    public $name_of_driver;
    public $plate_number;
    public $send_maoda;
    
    public $send_maroja;
    public $send_wigth_by_ton;
    public $send_wigth_by_kg;
    public $send_wigth_by_gram;
    
    
    public $rules = [
        'countryFrom' => 'required',
        'countryTo' => 'required',
        'amwal' => 'required',
        'az_taraq' => 'required',
        'shode' => 'required',
        'company_number' => 'required',
        'company_name' => 'required',
        'number' => 'required',
        'number_act' => 'required',
        'number_code' => 'required',
        'date' => 'required',
        'product_type' => 'required',
        'maroja' => 'required',
        'maoda' => 'required',
        'wigth_by_ton' => 'required',
        'wigth_by_kg' => 'required',
        'wigth_by_gram' => 'required',
        'date_of_takhliye' => 'nullable',
        'name_of_representative' => 'nullable',
        'bar_jalani' => 'nullable',
        'number_of_barname' => 'nullable',
        'name_of_driver' => 'nullable',
        'plate_number' => 'nullable',
        'send_maoda' => 'nullable',
        'send_maroja' => 'nullable',
        'send_wigth_by_ton' => 'nullable',
        'send_wigth_by_kg' => 'nullable',
        'send_wigth_by_gram' => 'nullable',
        
    ];
public function save(){
    
    imporate::create(
        [
            'countryFrom' => $this->countryFrom,
            'countryTo' => $this->countryTo,
            'amwal_type' => $this->amwal_type,
            'Tkhlaya_Az_tareq' => $this->az_taraq,
            'bar_ba' => $this->shode,
            'company_number' => $this->company_number,
            'company_name' => $this->company_name,
            'number_car' => $this->number,
            'number_act' => $this->number_act,
            'number_code' => $this->number_code,
            'date' => $this->date,
            'product_type' => $this->product_type,
            'morawaga' => $this->maroja,
            'maoda' => $this->maoda,
            'wigth_tan' => $this->wigth_by_ton,
            'wigth_by_kg' => $this->wigth_by_kg,
            'price_by_kg' => $this->wigth_by_gram,
            'takhlaya_date' => $this->date_of_takhliye,
            'representativ_name' => $this->name_of_representative,
            'bar_chalany' => $this->bar_jalani,
            'bar_nama_number' => $this->number_of_barname,
            'send_date' => $this->date_of_takhliye,
            'driver_name' => $this->name_of_driver,
            'send_number_car' => $this->plate_number,
            'send_maoda' => $this->send_maoda,
            'send_morawaga' => $this->send_maroja,
            'send_wigth_tan' => $this->send_wigth_by_ton,
            'send_wigth_by_kg' => $this->send_wigth_by_kg,
            'send_wigth_by_gram' => $this->send_wigth_by_gram,
            
        ]
    );
    $this->resetFields(); 
    return redirect()->route('imporate.index')->with('success', 'اطلاعات با موفقیت ثبت شد');
    
}
public function resetFields(){
    $this->reset(); 
}   


    public function render()
    {
        return view('livewire.imporate.create');
    }
}