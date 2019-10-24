<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartyRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;


class PartyGuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PartyRequest $req)
    {
        /*
        $validator = Validator::make($req->all(), [
            'nome' => 'required|max:255|min:4|alpha'            
        ],[
            'nome' => ''
        ])->validate();
*/
        //$validacao = null;
       /* try{
            $validator->validate();
         //   $validacao = $req->validate([
         //       'nome' => 'required'
         //   ]);
        }catch(ValidationException $e){
          //  dd($validacao);
            dd($e->getMessage());
        }    */

        //PHP puro: 
        //session_start()
        //$_SESSION['nome'] = $_GET['nome']
        if($req->nome){
            session()->put('nome', $req->nome);
        }

        return view('boaTarde', ['nome' => $req->nome]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(session('nome')){
           return session('nome');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
