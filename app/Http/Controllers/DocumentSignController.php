<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\DocumentSignedMail;
use App\Models\DocumentSigned;

class DocumentSignController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function submit(Request $request)
    {
        // Validate the form inputs
        $validatedData = $request->validate([
            // Add validation rules here
        ]);
        // $data = new DocumentSigned();

        // if($request->pornstar == 'checked'){

        //     $data['pornstar'] = "Pornstar";

        // } 
        // elseif ($request->cam_model == 'checked')   {

        //     $data['cam_model'] = "Cam Model";
        // } 
        // elseif ($request->social_media_star == 'checked')   {

        //     $data['social_media_star'] = "Social Media Star";
        // } 
        // elseif ($request->magazine_model == 'checked')   {

        //     $data['magazine_model'] = "Magazine Model";
        // } 
        // elseif ($request->other == 'checked')   {

        //     $data['other'] = "Other";
        // } 

        $data['pornstar'] = $request->pornstar;
        $data['cam_model'] = $request->cam_model;
        $data['social_media_star'] = $request->social_media_star;
        $data['magazine_model'] = $request->magazine_model;
        $data['other'] = $request->other;
        $data['name'] = $request->name;
        $data['stage_name'] = $request->stage_name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['nationality'] = $request->nationality;
        $data['age'] = $request->age;
        $data['marital_status'] = $request->marital_status;


        $data['foreign_model'] = $request->foreign_model;
        $data['medeled_before'] = $request->medeled_before;
        $data['base_city'] = $request->base_city;
        $data['model_base_city'] = $request->model_base_city;
        $data['availability_base_city'] = $request->availability_base_city;
        $data['travel_often'] = $request->travel_often;
        $data['model_tour'] = $request->model_tour;
        $data['adult_film_star'] = $request->adult_film_star;
        $data['magazine_movie_note'] = $request->magazine_movie_note;
        $data['mention_facebook_url'] = $request->mention_facebook_url;


        $data['over_eighteen'] = $request->over_eighteen;
        $data['age_proof_file'] = $request->age_proof_file;
        $data['back_of_id_picture'] = $request->back_of_id_picture;


        $data['height'] = $request->height;
        $data['weight'] = $request->weight;
        $data['bust_size'] = $request->bust_size;
        $data['cup_size'] = $request->cup_size;
        $data['waist'] = $request->waist;
        $data['hips'] = $request->hips;
        $data['hair_color'] = $request->hair_color;
        $data['eye_color'] = $request->eye_color;
        $data['tatoos'] = $request->tatoos;


        $data['mins_30'] = $request->mins_30;
        $data['hour_1'] = $request->hour_1;
        $data['mins_90'] = $request->mins_90;
        $data['hours_2'] = $request->hours_2;
        $data['hours_3'] = $request->hours_3;
        $data['hours_4'] = $request->hours_4;
        $data['hours_5'] = $request->hours_5;
        $data['overnight_8_hours'] = $request->overnight_8_hours;
        $data['overday_8_hours'] = $request->overday_8_hours;


        $data['primary_focus'] = $request->primary_focus;
        $data['secondary_focus'] = $request->secondary_focus;
        $data['entertain'] = $request->entertain;
        $data['racial_objections'] = $request->racial_objections;
        $data['only_see'] = $request->only_see;
        $data['image_multiple'] = $request->image_multiple;

        dd($data);



        // Save form data to the database
        $formData = YourModel::create($validatedData);

        // Send email with the document to a specific address
        Mail::to('recipient@example.com')->send(new DocumentSigned($formData));

        return redirect()->route('document.sign')->with('success', 'Form submitted successfully.');
    }
}
