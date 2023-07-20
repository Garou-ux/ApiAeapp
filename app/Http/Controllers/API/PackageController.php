<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;
use App\Models\Package;

class PackageController extends BaseController
{
    //controlador de paquetes
    public function __construct()
    {
        //$this->middleware('auth:sanctum', ['except' => ['validateFields']]);
    }

    public function createPackage( Request $request ): JsonResponse
    {
        $validator = $this->validateFields($request);
        if( $validator->fails() ){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $fields = $request->all();
        $package = Package::create($fields);

        return $this->sendResponse([ 'success' => true, 'data' => $package ], 'Package register succesfully');
    }

    public function getPackages(){
        $packages = Package::get();
        return $this->sendResponse($packages, 'Success');
    }

    public function getPackageById( $id ){
        $package = Package::find($id);
        if ( !$package )
            return $this->sendError('El paquete no existe');

        return $this->sendResponse($package, 'Success');
    }

    private function validateFields( $requestFields ){
        $validator = Validator::make( $requestFields->all(), [
            'name' => 'required',
            'description' => 'required',
            'name' => 'required',
            'description' => 'required',
            'number_of_people' => 'required',
            'time_of_event' => 'required',
            'formal_menu' => 'required',
            'soft_drinks' => 'required',
            'pina_colada' => 'required',
            'whisky' => 'required',
            'civil_ceremony' => 'required',
            'tasting_menu' => 'required',
            'table_linen' => 'required',
            'full_assembly' => 'required',
            'service_staff' => 'required',
            'valet_parking' => 'required',
            'light_plant' => 'required',
            'customized_coordinator' => 'required',
            'price' => 'required',
        ]);
        return $validator;
    }
}
