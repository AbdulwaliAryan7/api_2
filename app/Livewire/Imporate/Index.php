<?php

namespace App\Livewire\Imporate;

use App\Models\Imporate;
use Livewire\Component;

class Index extends Component
{

    public  $id;
    public $imporate;
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
    public $maoda;
    public $maroja;
    public $wigth_by_ton;
    public $wigth_by_kg;
    public $wigth_by_gram;

    public $date_of_takhliye;
    public $name_of_representative;
    public $bar_jalani;

    public $number_of_barname;
    public $number_of_code;
    public $name_of_driver;
    public $plate_number;
    public $send_maoda;
    public $send_maroja;
    public $send_wigth_by_ton;
    public $send_wigth_by_kg;
    public $send_wigth_by_gram;
    
    

    public $isEdit = false;
    public function edit($id)
    {
        $this->id = $id;
        $this->isEdit = true;
        $this->imporate = Imporate::find($id);
        $this->countryFrom = $this->imporate->countryFrom;
        $this->countryTo = $this->imporate->countryTo;
        $this->amwal_type = $this->imporate->amwal_type;
        $this->az_taraq = $this->imporate->Tkhlaya_Az_tareq;
        $this->shode = $this->imporate->bar_ba;
        $this->company_number = $this->imporate->company_number;
        $this->company_name = $this->imporate->company_name;
        $this->number = $this->imporate->number_car;
        $this->number_act = $this->imporate->number_act;
        $this->number_code = $this->imporate->number_code;
        $this->date = $this->imporate->date;
        $this->product_type = $this->imporate->product_type;
        $this->maoda = $this->imporate->maoda;
        $this->maroja = $this->imporate->morawaga;
        $this->wigth_by_ton = $this->imporate->wigth_tan;
        $this->wigth_by_kg = $this->imporate->wigth_by_kg;
        $this->wigth_by_gram = $this->imporate->price_by_kg;
        $this->date_of_takhliye = $this->imporate->takhlaya_date;
        $this->name_of_representative = $this->imporate->representativ_name;
        $this->bar_jalani = $this->imporate->bar_chalany;
        $this->number_of_barname = $this->imporate->bar_nama_number;
        $this->number_of_code = $this->imporate->number_code;
        $this->name_of_driver = $this->imporate->driver_name;
        $this->plate_number = $this->imporate->send_number_car;
        $this->send_maoda = $this->imporate->send_maoda;
        $this->send_maroja = $this->imporate->send_morawaga;
        $this->send_wigth_by_ton = $this->imporate->send_wigth_tan;
        $this->send_wigth_by_kg = $this->imporate->send_wigth_by_kg;
        $this->send_wigth_by_gram = $this->imporate->send_wigth_by_gram;
        
    }
   
    public function update()
    {
       dd($this->id);
       
        $this->imporate->update(
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
        $this->isEdit = false;
        session()->flash('success', 'ريكارد با موفقيت به روز شد');
        
    }
    public function delete($id)
    {
        
        $imporate = Imporate::find($id);
        $imporate->delete();
        session()->flash('success', 'ريكارد با موفقيت حذف شد');
    }

    public function render()
    {
        $imporates = Imporate::all();
        return view('livewire.imporate.index', compact('imporates'));
    }
}
