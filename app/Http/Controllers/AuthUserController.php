<?php

namespace App\Http\Controllers;

use App\Models\AuthUser;
use App\Models\RmRecord;
use Illuminate\Http\Request;
use Auth;
use GuzzleHttp\Client;


class AuthUserController extends Controller
{
    public function home()
    {
        return view('front_landing_view.index');
    }

    public function login(Request $request)
    {
        // dd($request->only(['email','password']));
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (Auth::guard('authUser')->attempt(['email' => $data["email"], 'password' => $data["password"]])) {
                return view('admin_view.rm_report.dashboard');
            } else {
                return redirect()->back()->with("error_message", "Invalid email or password");
            }
        }
        return view('front_landing_view.index');
    }

    public function rm_position()
    {
        return view('admin_view.rm_report.rm_position');
    }

    public function rm_position_data(Request $request)
    {
        if ($request->isMethod('post')) {

            $rm_form_info =  $request->input('name');
            $parts =  explode('/', $rm_form_info);
            $names  = $parts[0];
            $emails = $parts[1];
            $name =  trim($names);
            $email =  trim($emails);


            $rm_details = RmRecord::where('rm_email', $email)->get();

            $url = 'https://mebiz.ombplc.com/MPRRepo/trustcomms/RelOfficersDetails';
            $authToken = 'MzQxNjBmZGUtYjJmMi0wZDBjYWY2NGY4MWE6MzQ5NjBGREVFQUNBNDRGNUIyRjIwRDBDQUY2NEY4MUFxbntuc2xZd3p4eSVSdHd5bGZsaiVHZnNwVXFo';
            $RelationshipOfficerName = $name;

            // Initialize the Guzzle client
            $client = new Client();

            try {
                $response = $client->request('POST', $url, [
                    'headers' => [
                        'AuthToken' => $authToken,
                    ],

                    // 'form_params' => [
                    //     'RelationshipOfficerName' => $RelationshipOfficerName,
                    //     // Send the username as form data
                    // ],

                    'json' => [
                        'RelationshipOfficerName' => $RelationshipOfficerName,
                    ],
                ]);

                // $statusCode = $response->getStatusCode(); //200
                $apiResponse = $response->getBody()->getContents();

                //  dd($apiResponse); die;

                $data = json_decode($apiResponse, true);


                $responseCode = $data['responseCode'];
                $responseText = $data['responseText'];

                if ($responseCode == '00' && $responseText == 'Success') {

                    return view('admin_view.rm_report.rm_position', [
                        'apiData' => ['status' => $rm_details, 'data' =>$data['data'] ] ]);
                    // return view('admin_view.rm_report.rm_position', [ 'apiData' => $data['data'] ]);

                } else {

                    return view('admin_view.rm_report.rm_position', [
                        'apiData' => ['status' => 'error', 'message' => 'No record found']
                    ]);

                }

            } catch (\Exception $e) {
                return view('admin_view.rm_report.rm_position', [
                    'apiData' => ['status' => 'fatal_error', 'message' => $e->getMessage()]
                ]);
            }

        }
        return view('front_landing_view.index');
    }


    public function rm_branch_data(Request $request){
        if ($request->isMethod('post')) {

            $url = 'https://mebiz.ombplc.com/MPRRepo/trustcomms/RelOfficersBranchDetailsDate';
            $authToken = 'MzQxNjBmZGUtYjJmMi0wZDBjYWY2NGY4MWE6MzQ5NjBGREVFQUNBNDRGNUIyRjIwRDBDQUY2NEY4MUFxbntuc2xZd3p4eSVSdHd5bGZsaiVHZnNwVXFo';
            $BranchCode = $request->input('branch');
            $Processdate = $request->input('date');

            // Initialize the Guzzle client
            $client = new Client();

            try {
                $response = $client->request('POST', $url, [
                    'headers' => [
                        'AuthToken' => $authToken,
                    ],

                    // 'form_params' => [
                    //     'BranchCode' => $BranchCode,
                    //     // Send the username as form data
                    // ],

                    'json' => [
                        'BranchCode' => $BranchCode,
                        'Processdate' => $Processdate,
                    ],
                ]);


                // $statusCode = $response->getStatusCode(); //200
                $apiResponse = $response->getBody()->getContents();

                //  dd($apiResponse); die;

                $data = json_decode($apiResponse, true);

                $responseCode = $data['responseCode'];
                $responseText = $data['responseText'];

                if ($responseCode == '00' && $responseText == 'Success') {

                    return view('admin_view.rm_report.rm_position', [
                        'apiData' => ['state' => 'success', 'data' => $data['data']]]);

                } else {

                    return view('admin_view.rm_report.rm_position', [
                        'apiData' => ['state' => 'error', 'message' => 'No record found']
                    ]);

                }

            } catch (\Exception $e) {
                return view('admin_view.rm_report.rm_position', [
                    'apiData' => ['state' => 'fatal_error', 'message' => $e->getMessage()]
                ]);
            }

        }
        return view('front_landing_view.index');

    }


}
