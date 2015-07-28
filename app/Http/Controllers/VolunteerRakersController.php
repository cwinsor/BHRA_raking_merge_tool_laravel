<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\VolunteerRaker;

class VolunteerRakersController extends Controller
{

    public function index()
    {
        $volunteerRakers = VolunteerRaker::all();
        
        // return $volunteerRakers;
        return view('bhra\volunteerRakers.index', compact('volunteerRakers'));
        // return veiw('articles.index')->with('articles', $articles);
    }

    public function show($id)
    {
        // $volunteerRaker = VolunteerRaker::find($id);
        // dd($volunteerRaker); // die-dump
        
        // if (isNull($volunteerRaker)) ...
        // if (!$volunteerRaker) {
        // abort(404);
        // }
        $volunteerRaker = VolunteerRaker::findOrFail($id);
        // return $id;
        // return $volunteerRaker;
        return view('bhra\volunteerRakers.show', compact('volunteerRaker'));
    }
}
