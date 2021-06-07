<?php

namespace App\Exports;

use App\Models\NhapDiem;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class ThiLai implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('admin.quanlysauthi.ds_hv_thi_lai',[
        	'ds_hv_thi_lai' =>NhapDiem::all()
        ]);
    }
    
}
