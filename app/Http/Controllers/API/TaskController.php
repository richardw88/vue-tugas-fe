<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Exception;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tampilTask()
    {
        $message = 'Hello World';
        return ApiFormatter::createApi(200, "Success", $message);

    }
    public function index()
    {
        //
        $data = Task::all();
        if($data) {
            return ApiFormatter::createApi(200, "Success", $data);
        } else {
            return ApiFormatter::createApi(400, 'Error');
        }
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

    public function savedata(Request $request){
        try {
            $data = $request->validate([
                'username'=> 'required'
            ]);

            $helloworld = Task::create($data);

            return ApiFormatter::createApi(200,'succes', 'Data Berhasil diinput'); 
            

        
        }
        catch (Exception $error){
            return ApiFormatter::createApi(400, 'Error');
        }
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
