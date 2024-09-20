<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index() {
        
            $series = [
                'Punisher',
                'Lost',
                'Revenge'
            ];
    
            $html = '<ul>';
    
            foreach ($series as $series) {
                $html .= "<li>$series</li>";
        }
             $html .= '</ul>';
    
             echo $html;
        }
}

