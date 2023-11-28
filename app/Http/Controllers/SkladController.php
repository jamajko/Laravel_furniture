<?php

namespace App\Http\Controllers;

use App\Exports\ViewExporter;
use App\Models\Material;
use App\Models\Product;
use App\Models\Good;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Maatwebsite\Excel\Facades\Excel;

class SkladController extends Controller
{
    public function sklad_view()
    {
        $user_id = Auth::user()->id;
        $materials =  Material::where('id', $user_id)->get();
        $products =  Product::where('id', $user_id)->get();
        $goods =  Good::where('id', $user_id)->get();
        return view('sklad', compact('materials', 'products', 'goods'));
    }

    public function export_material_f()
    {
        return Excel::download(new ViewExporter(), 'Test.xlsx');
    }


}
