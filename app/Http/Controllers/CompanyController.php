<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function create()
    {
        $data = request()->all();
        array_shift($data);
        function base62_encode($data)
        {
            $outstring = '';
            $len = 5;
            for ($i = 0; $i < $len; $i += 8) {
                $chunk = substr($data, $i, 8);
                $outlen = ceil((strlen($chunk) * 8) / 6);
                $x = bin2hex($chunk);
                $number = ltrim($x, '0');
                if ($number === '') {
                    $number = '0';
                }
                $w = gmp_strval(gmp_init($number, 16), 62);
                $pad = str_pad($w, $outlen, '0', STR_PAD_LEFT);
                $outstring .= $pad;
            }
            return $outstring;
        }

        $hash = base62_encode(implode($data));

        // $company = new Company;
        //
        // $company->company = request()->company;
        // $company->title = request()->title;
        // $company->url = request()->url;
        // $company->hash = base62_encode(implode($data));

        $company = request()->company;
        $title = request()->title;
        $url = request()->url;


        $companyrecord = Company::updateOrCreate(
            ['hash' => $hash],
            ['company' => $company,
            'title' => $title ,
            'url' => $url]
        );

        $results = Company::paginate(10);

        $data["hash"] = $hash;

        return view('create', compact('data', 'results'));
    }


    public function show()
    {
        $results = Company::paginate(10);
        return view('create', compact('results'));
    }
}
