<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function about()
    {
        // return view('pages/about')->with([
        // 'first' => 'Chris',
        // 'last' => '<span style="color: red;">Winsor</span>'
        // ]);
        //
        // $data = [];
        // $data['first'] = 'Chris';
        // $data['last'] = '<span style="color: red;">Winsor</span>';
        // return view('pages/about', $data);
        //
        // $first = 'Fox';
        // $last = 'Mulder';
        // return view('pages/about', compact('first', 'last'));
        //
        // $people = [];
        $people = [
            'Taylor Otwell',
            'Dayle Rees',
            'Eric Barnes'
        ];
        return view('pages/about', compact('people'));
    }

    public function contact()
    {
        return view('pages/contact');
    }
}
