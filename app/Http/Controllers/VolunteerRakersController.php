<?php
namespace App\Http\Controllers;


//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\VolunteerRaker;

class VolunteerRakersController extends Controller
{

    public function index()
    {
        $volunteerRakers = VolunteerRaker::latest('updated_at')->get();
        
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
    
    public function create()
    {
        return view('bhra\volunteerRakers.create');
    }
    
    public function store()
    {
        $input = Request::all();
       //return $input;     

       // VolunteerRaker::create(['firstname'=>$input['firstname']]);
       // $volunteerRaker = new VolunteerRaker();
       // $volunteerRaker->firstname = $input['firstname'];

        //$input['blah'] = 'blah';
        // VolunteerRaker::create($input);  // note fillable field on VolunteerRaker class prevents mass injection

        $volunteerRaker = new VolunteerRaker();
        $volunteerRaker->firstname = $input['firstname'];
        $volunteerRaker->lastname = $input['lastname'];
        $volunteerRaker->email = $input['email'];
        $volunteerRaker->save();

//          VolunteerRaker::create($input);  // note fillable field on VolunteerRaker class prevents mass injection
        //  $volunteerRaker->save();
        
        
       return redirect('volunteerrakers');
    }
}
