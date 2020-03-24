<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tech;

class TechController extends Controller
{
  private $validationTech = [
      'name' => 'required|string|max:255',
      'price' => 'required|numeric|min:1',
      'shop' => 'required|max:255',
      'description' => 'required|string',
      'shipping_times' => 'required|max:255'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teches = Tech::all();
        return view('teches.index', compact('teches'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('teches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->all();

       $request->validate([
         'name' => 'required|string|max:255',
         'price' => 'required|numeric|min:1',
         'shop' => 'required|max:255',
         'description' => 'required|string',
         'shipping_times' => 'required|max:255'
       ]);
       $newTech = new Tech;
        // $newTech->name = $data['name'];
        // $newTech->price = $data['price'];
        // $newTech->shop = $data['shop'];
        // $newTech->description = $data['description'];
        // $newTech->expediction_price = $data['expediction price'];
        $newTech->fill($data);
        $saved = $newTech->save();

        if($saved) {
          return redirect()->route('teches.index');
        }
        dd('non salvato');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //   $tech = Tech::find($id);
    //   if(empty($tech)){
    //     abort('404');
    //   }
    //   return view('teches.show', compact('tech'));
    // }

    public function show(Tech $tech)
    {
      // $tech = Tech::find($id);
      if(empty($tech)){
        abort('404');
      }
      return view('teches.show', compact('tech'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tech $tech)
    {
      if(empty($tech)){
        abort('404');
      }
        return view('teches.create', compact('tech'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tech = Tech::find($id);
        if(empty($tech)){
          abort('404');
        }

        $data = $request->all();
        $request->validate($this->validationTech);
        $updated = $tech->update($data);
        dd($updated);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
