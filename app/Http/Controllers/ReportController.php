<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

class ReportController extends Controller
{


    public function index ()
    {
       

        $labels = [];
        $data = [];
        foreach ($this->chart() as $item) {
            $labels[] = $item->day;
            $data[] = $item->count;
            
        }
        return view('pages.reports.index' , compact('labels', 'data'));
    }

    public function chart ()
    {
        $query = Guest::select(
            DB::raw('DATE_FORMAT(created_at, "%d") as day'),
            DB::raw('count(*) as count')
        )
        ->whereMonth('created_at', '=', date('m'))
        ->groupBy('day')
        ->orderBy('day','ASC');
        
        return $query->get();

    }
    
}

