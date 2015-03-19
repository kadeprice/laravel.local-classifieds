<?php namespace Classifieds\Http\Controllers;

use Classifieds\Http\Controllers\Controller;

use Illuminate\Http\Request;
//use Illuminate\Http\Response;

use Classifieds\Drop;

class DropsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
            return Drop::all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(\Illuminate\Http\Request $request)
	{
            $description =  $request->only('description');
//            return $description['description'];
            $drop = new Drop();
            $drop->username = 'kade';
            $drop->pin = '1234';
            $drop->description = $description['description'];
            $drop->drop_date = date("Y-m-d h:m:i");
            $drop->save();
            
//            Drop::create(
//                    [
//                     'username' => 'kade',
//                     'pin' => '1234',
//                     'description' => 'AWESOME DROP',
//                     'drop_date' => date("Y-m-d h:m:i")
//                    ]
//                );
            return response()->json([
                       'error' => false,
                        'username' => 'kade',
                        'date' => $drop->toArray()
                    ],200);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
            $drops = Drop::whereUsername($id)->get();

            $html = "<table class='table table-condensed'>
                        <thead class='bg-info'>
                            <tr>
                                <th>Username</th>
                                <th>Date</th>
                                <th>Desc</th>
                            </tr>
                        </thead>";
            foreach($drops as $drop){
                $html .="<tr>
                            <td>$drop[username]</td>
                            <td>$drop[drop_date]</td>
                            <td>$drop[description]</td>
                        </tr>";
            }
            $html .= "</table>";
            return response()->json([
                       'error' => false,
                        'username' => $id,
                        'html' => $html
                    ],404);
                    
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
