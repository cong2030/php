<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tin;

class TinController extends Controller
{
    public function index()
    {
        $tinList = Tin::all();
        return view('Tin.danhsach', compact('tinList'));
    }

    public function create()
    {
        return view('Tin.them');
    }

    public function store(Request $request)
    {
        Tin::create($request->all());
        return redirect('/tin');
    }

    public function edit($id)
    {
        $tin = Tin::findOrFail($id);
        return view('Tin.capnhattin', compact('tin'));
    }

    public function update(Request $request, $id)
    {
        $tin = Tin::findOrFail($id);
        $tin->update($request->all());
        return redirect('/tin');
    }

    public function destroy($id)
    {
        Tin::findOrFail($id)->delete();
        return redirect('/tin');
    }
}

?>