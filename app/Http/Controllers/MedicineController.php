<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Medicine;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
    private $objUser;
    private $objMedicine;

    public function __construct(){
        $this->objUser=new User();
        $this->objMedicine=new Medicine();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$medicines = Medicine::all();
        $user = User::find(auth()->id());
        $medicines = $user->medicines()->get();
        return view('medicines.index', ['medicines'=>$medicines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->objUser->all();
        return view('medicines.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Medicine::create($request->all());
       return redirect()->route('medicines-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicines = $this->objMedicine->find($id);
        $users = $this->objUser->all();
        return view('medicines.edit', compact('medicines', 'users'));

        //$medicines = Medicine::where('id',$id)->first();
        //if(!empty($medicines)){
        //    return view('medicines.edit', ['medicines'=>$medicines]);
        //}else{
        //    return redirect()->route('medicines-index');
        //}
        
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
        $data = [
            'name' => $request->name,
            'tipo' => $request->tipo,
            'duracao' => $request->duracao,
            'data_inicio' => $request->data_inicio,
            'id_user' => $request->id_user,
        ];
        Medicine::where('id',$id)->update($data);
        return redirect()->route('medicines-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medicine::where('id',$id)->delete();
        return redirect()->route('medicines-index');
    }
}
