<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Event;
use Validator;
use App\Http\Resources\EventResource;
use Illuminate\Http\JsonResponse;
use DB;


class EventsController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth:sanctum', ['except' => ['validateParamsForGetEvents']]);
    }

    public function getEventsFromMonthAndYear( Request $request ) : JsonResponse
    {
        $events = Event::where(DB::raw('MONTH(created_at)'), $request->month)
                       ->where(DB::raw('YEAR(created_at)'), $request->year)
                       ->get();
        $validator = self::validateParamsForGetEvents($request);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        return $this->sendResponse(EventResource::collection($events), 'Events retrieved successfully.');

    }

    private function validateParamsForGetEvents ( $request )
    {
        $validator = Validator::make($request->all(), [
            'month' => 'required',
            'year' => 'required',
        ]);
        return $validator;
    }
}
