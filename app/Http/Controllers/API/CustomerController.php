<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;

class CustomerController extends BaseController
{
    //
    public function __construct()
    {
        $this->middleware('auth:sanctum', ['except' => ['validateFields']]);
    }

    public function getCustomers( Request $request ){
        $customers = Customer::get();
        return $this->sendResponse($customers, 'Success');
    }

    public function getCustomer( $id ){
        $customer = Customer::find($id);
        if( !$customer )
            return $this->sendError('El cliente no existe');

        return $this->sendResponse($customer, 'Success');
    }

    public function createCustomer( Request $request ){
        $validator = $this->validateFields($request);
        if( $validator->fails() ){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $fields = $request->all();
        $customer = Customer::create($fields);

        return $this->sendResponse([ 'success' => true, 'data' => $customer ], 'Customer register succesfully');
    }

    public function validateFields( $requestFields ){
        $validator = Validator::make( $requestFields->all(), [
            'boy_name' => 'required',
            'boy_paternal_surname' => 'required',
            'boy_mother_surname' => 'required',
            'girl_name' => 'required',
            'girl_paternal_surname' => 'required',
            'girl_mother_surname' => 'required',
            'address' => 'required',
            'street_number' => 'required',
            'state' => 'required',
            'telephone' => 'required',
            'second_telephone' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'tiktok' => 'required',
            'ine_id' => 'required',
        ]);

        return $validator;
    }
}
