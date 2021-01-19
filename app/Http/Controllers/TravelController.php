<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;
use Exception;

class TravelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Add Facility
     *
     * @return json
     */
    public function addTravelPackage(Request $request)
    {
        \Log::debug("input travel");
        \Log::debug($request->all());

        try{

            $name           = $request->name;
            $travel_type    = $request->travel_type;
            $address        = $request->address;
            $longitude      = $request->longitude;
            $latitude       = $request->latitude;
            $price_from     = $request->price_from;
            $price_to       = $request->price_to;
            $logo           = $request->logo;
            $cover_image    = $request->cover_image;

            /* List Validation
            * 1. Name tidak boleh kosong
            * 2. Travel Type tidak boleh kosong
            * 3. Address tidak boleh kosong
            * 4. Longitude tidak boleh kosong
            * 5. Latitude tidak boleh kosong
            * 6. Longitude harus angka
            * 7. Latitude harus angka
            * 8. Price From tidak boleh kosong
            * 9. Price To tidak boleh kosong
            * 10. Price From harus angka
            * 11. Price To harus angka
            * 12. Logo tidak boleh kosong
            * 13. Cover Image tidak boleh kosong
            */

            // 1. Name tidak boleh kosong
            if($name == '' || $name == NULL){
                throw new Exception("Name tidak boleh kosong");
            }

            // 2. Travel Type tidak boleh kosong
            if($travel_type == '' || $travel_type == NULL){
                throw new Exception("Travel Type tidak boleh kosong");
            }

            // 3. Address tidak boleh kosong
            if($address == '' || $address == NULL){
                throw new Exception("Address tidak boleh kosong");
            }

            // 4. Longitude tidak boleh kosong
            if($longitude == '' || $longitude == NULL){
                throw new Exception("Longitude tidak boleh kosong");
            }

            // 5. Latitude tidak boleh kosong
            if($latitude == '' || $latitude == NULL){
                throw new Exception("Latitude tidak boleh kosong");
            }

            // 6. Longitude harus angka
            if(!is_numeric($longitude)){
                throw new Exception("Longitude harus angka");
            }

            // 7. Latitude harus angka
            if(!is_numeric($latitude)){
                throw new Exception("Latitude harus angka");
            }

            // 8. Price From tidak boleh kosong
            if($price_from == '' || $price_from == NULL){
                throw new Exception("Price From tidak boleh kosong");
            }

            // 9. Price To tidak boleh kosong
            if($price_to == '' || $price_to == NULL){
                throw new Exception("Price To tidak boleh kosong");
            }

            // 10. Price From harus angka
            if(!is_numeric($price_from)){
                throw new Exception("Price From harus angka");
            }

            // 11. Price To harus angka
            if(!is_numeric($price_to)){
                throw new Exception("Price To harus angka");
            }
            // 12. Logo tidak boleh kosong
            if($logo == '' || $logo == NULL){
                throw new Exception("Logo tidak boleh kosong");
            }

            // 13. Cover Image tidak boleh kosong
            if($cover_image == '' || $cover_image == NULL){
                throw new Exception("Cover Image tidak boleh kosong");
            }

            $TravelPackage              = new TravelPackage();
            $TravelPackage->name        = $name;
            $TravelPackage->travel_type = $travel_type;
            $TravelPackage->address     = $address;
            $TravelPackage->longitude   = $longitude;
            $TravelPackage->latitude    = $latitude;
            $TravelPackage->price_to    = $price_to;
            $TravelPackage->price_from  = $price_from;
            $TravelPackage->logo        = $logo;
            $TravelPackage->cover_image = $cover_image;

            $TravelPackage->save();

            return response()->json([
                "status"=> "success"
            ],200);

        }catch(Exception $e){
            \Log::debug($e->getMessage());

            return response()->json([
                "message"=> $e->getMessage()
            ],200);
        }

    }
}