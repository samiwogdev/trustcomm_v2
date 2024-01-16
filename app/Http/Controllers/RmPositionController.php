<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\AuthUser;
use App\Models\RmBranch;
use App\Models\RmRecord;
use Illuminate\Http\Request;
use Auth;
use GuzzleHttp\Client;

class RmPositionController extends Controller
{

    public function rm_position()
    {
        if (Auth::guard('authUser')->check()) {
            $rm_branches = RmBranch::orderBy('rm_branchDetails')->get();
            $rm_records = RmRecord::orderBy('rm_lastName')->get();
            return view('admin_view.rm_report.rm_position', ['rm_branches' => $rm_branches, 'rm_records' => $rm_records]);
        } else {
            return redirect()->route('home');
        }
    }

    public function rm_position_avg()
    {
        if (Auth::guard('authUser')->check()) {
            $rm_branches = RmBranch::orderBy('rm_branchDetails')->get();
            $rm_records = RmRecord::orderBy('rm_lastName')->get();
            return view('admin_view.rm_report.rm_position_avg', ['rm_branches' => $rm_branches, 'rm_records' => $rm_records]);
        } else {
            return redirect()->route('home');
        }
    }

    public function rm_position_data(Request $request)
    {
        if (Auth::guard('authUser')->check()) {
            if ($request->isMethod('post')) {

                $rm_form_info = $request->input('name');
                $parts = explode('/', $rm_form_info);
                $names = $parts[0];
                $emails = $parts[1];
                $name = trim($names);
                $email = trim($emails);


                $rm_details = RmRecord::where('rm_email', $email)->get();
                $rm_branches = RmBranch::orderBy('rm_branchDetails')->get();
                $rm_records = RmRecord::orderBy('rm_lastName')->get();

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

                        return view('admin_view.rm_report.rm_position', ['rm_branches' => $rm_branches, 'rm_records' => $rm_records], [
                            'apiData' => ['status' => $rm_details, 'data' => $data['data']]
                        ]);
                        // return view('admin_view.rm_report.rm_position', [ 'apiData' => $data['data'] ]);

                    } else {

                        return view('admin_view.rm_report.rm_position', ['rm_branches' => $rm_branches, 'rm_records' => $rm_records], [
                            'apiNoRecord' => ['status' => 'error', 'errorMsg' => 'NoRecord']
                        ]);

                    }

                } catch (\Exception $e) {
                    return view('admin_view.rm_report.rm_position', ['rm_branches' => $rm_branches, 'rm_records' => $rm_records], [
                        'apiNoInternet' => ['status' => 'fatal_error', 'fatalMsg' => 'noInternet']
                    ]);
                }
            }
            return view('front_landing_view.index');
        } else {
            return redirect()->route('home');
        }
    }

    public function rm_vg_position_data(Request $request)
    {
        if (Auth::guard('authUser')->check()) {
            if ($request->isMethod('post')) {

                $rm_form_info = $request->input('name');
                $parts = explode('/', $rm_form_info);
                $names = $parts[0];
                $emails = $parts[1];
                $name = trim($names);
                $email = trim($emails);


                $rm_details = RmRecord::where('rm_email', $email)->get();
                $rm_branches = RmBranch::orderBy('rm_branchDetails')->get();
                $rm_records = RmRecord::orderBy('rm_lastName')->get();

                $url = 'https://mebiz.ombplc.com/MPRRepo/trustcomms/RelOffrAverageBals';
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

                        return view('admin_view.rm_report.rm_position', ['rm_branches' => $rm_branches, 'rm_records' => $rm_records], [
                            'apiData' => ['status' => $rm_details, 'data' => $data['data']]
                        ]);
                        // return view('admin_view.rm_report.rm_position', [ 'apiData' => $data['data'] ]);

                    } else {

                        return view('admin_view.rm_report.rm_position', ['rm_branches' => $rm_branches, 'rm_records' => $rm_records], [
                            'apiNoRecord' => ['status' => 'error', 'errorMsg' => 'NoRecord']
                        ]);

                    }

                } catch (\Exception $e) {
                    return view('admin_view.rm_report.rm_position', ['rm_branches' => $rm_branches, 'rm_records' => $rm_records], [
                        'apiNoInternet' => ['status' => 'fatal_error', 'fatalMsg' => 'noInternet']
                    ]);
                }
            }
            return view('front_landing_view.index');
        } else {
            return redirect()->route('home');
        }
    }

    public function rm_position_data_branch(Request $request)
    {
        if (Auth::guard('authUser')->check()) {
            if ($request->isMethod('post')) {

                $url = 'https://mebiz.ombplc.com/MPRRepo/trustcomms/RelOfficersBranchDetailsDate';
                $authToken = 'MzQxNjBmZGUtYjJmMi0wZDBjYWY2NGY4MWE6MzQ5NjBGREVFQUNBNDRGNUIyRjIwRDBDQUY2NEY4MUFxbntuc2xZd3p4eSVSdHd5bGZsaiVHZnNwVXFo';
                $BranchCode = $request->input('branch');
                $Processdate = $request->input('date');

                $rm_branches = RmBranch::orderBy('rm_branchDetails')->get();
                $rm_branch_infos = RmBranch::where('rm_branchCode', $BranchCode)->get();
                // dd($rm_branch_infos); exit;
                $rm_records = RmRecord::orderBy('rm_lastName')->get();

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

                    $data = json_decode($apiResponse, true);

                    $responseCode = $data['responseCode'];
                    $responseText = $data['responseText'];

                    if ($responseCode == '00' && $responseText == 'Success') {

                        // return view('admin_view.rm_report.rm_position', ['rm_branch_infos' => $rm_branch_infos], ['rm_branches' => $rm_branches, 'rm_records' => $rm_records], [
                        //     'apiData' => ['state' => 'success', 'data' => $data['data'] ]
                        // ]);

                        return view('admin_view.rm_report.rm_position', ['rm_branches' => $rm_branches, 'rm_records' => $rm_records, 'rm_branch_infos' => $rm_branch_infos], [
                            'apiData' => ['state' => 'success', 'data' => $data['data'] ]
                        ]);

                    } else {
                        return view('admin_view.rm_report.rm_position', ['rm_branches' => $rm_branches, 'rm_records' => $rm_records], [
                            'apiNoRecord' => ['status' => 'error', 'errorMsg' => 'NoRecord']
                        ]);

                    }

                } catch (\Exception $e) {
                    return view('admin_view.rm_report.rm_position', ['rm_branches' => $rm_branches, 'rm_records' => $rm_records], [
                        'apiNoInternet' => ['status' => 'fatal_error', 'fatalMsg' => 'noInternet']
                    ]);
                }

            }
            return view('front_landing_view.index');

        } else {
            return redirect()->route('home');
        }
    }
}
