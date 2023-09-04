<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Form</title>
</head>
<body>

    <!-- multistep form -->
    <form id="msform" method="post" action="{{route('document.submit')}}">
        @csrf
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">First Setup</li>
            <li>Model Experience</li>
            <li>Legal Adults</li>
            <li>Your Stats</li>
            <li>Your Dominations</li>
            <li>Question & Ans</li>
            <li>Aggrement</li>
            <li>Network & Signature</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
            <h2 class="fs-title">New Model Application Form</h2>
            <h3 class="fs-subtitle">Kindly fill out the form with your details.</h3>
            
            <div class="flex-container">
                <div class="form-check">
                    <input class="form-check-input" name="pornstar" type="checkbox" value="Pornstar">
                    <label class="form-check-label" for="flexCheckDefault">
                        Pornstar
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="cam_model" type="checkbox" value="Cam Model" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Cam Model
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="social_media_star" type="checkbox" value="Social Media Star" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Social Media Star
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="magazine_model" type="checkbox" value="Magazine Model" id="flexCheckChecked" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Magazine Model
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="other" type="checkbox" value="Others" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Others
                    </label>
                </div>

            </div>
            <div class="form-container">
                <div class="form-row">
                    <div class="input-group mb-3">
                        <label> Your Real First & Last Name* </label><br />
                        <input type="text" name="name" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                    <div class="input-group mb-3">
                        <label> Your Stage First & Last Name* </label><br />
                        <input type="text" name="stage_name" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3">
                        <label> Email* </label><br />
                        <input type="email" name="email" class="form-control" placeholder="example@domain.com" aria-label="Username" size="40">
                    </div>
                    <div class="input-group mb-3">
                        <label> Phone* </label><br />
                        <input type="tel" name="phone" class="form-control" placeholder="+1-999-999-9999" aria-label="Username" size="40">
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3">
                        <label> Nationality* </label><br />
                        <input type="text" name="nationality" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                    <div class="input-group mb-3">
                        <label> Age* </label><br />
                        <input type="number" name="age" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3">
                        <label> Date of birth </label><br />
                        <input type="date" name="dob" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>

                    <div class="input-group mb-3">
                        <label> Marital status* </label><br />
                        <select name="marital_status" class="" aria-required="true" aria-invalid="false">
                            <option value="">---</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div>
                </div>
            </div>


            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
            <h2>Model Experience</h2>
            <div class="form-container model-ex">
                <div class="form-row row">
                    <div class="input-group mb-3 col-6">
                        <label> Are you a foreign model?* </label><br />
                        <span class="">
                            <label class="">
                                <input type="radio" name="foreign_model" value="Yes" />
                                <span class="wpcf7-list-item-label">Yes</span>
                            </label>

                            <label>
                                <input type="radio" name="foreign_model" value="No" />
                                <span class="wpcf7-list-item-label">No</span>
                            </label>
                        </span>
                    </div>
                    <div class="input-group mb-3 col-6">
                        <label> Have you Modeled before?* </label><br />
                        <span class="">
                            <label class="">
                                <input type="radio" name="medeled_before" value="Yes" />
                                <span class="wpcf7-list-item-label">Yes</span>
                            </label>

                            <label>
                                <input type="radio" name="medeled_before" value="No" />
                                <span class="wpcf7-list-item-label">No</span>
                            </label>
                        </span>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="input-group mb-3 resize col-6">
                        <label> What is your Base City?* </label><br />
                        <input type="text" name="base_city" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                    <div class="input-group mb-3 col-6">
                        <label> Do you Model in your Base City?* </label><br />
                        <span class="">
                            <label class="">
                                <input type="radio" name="model_base_city" value="Yes" />
                                <span class="wpcf7-list-item-label">Yes</span>
                            </label>

                            <label>
                                <input type="radio" name="model_base_city" value="No" />
                                <span class="wpcf7-list-item-label">No</span>
                            </label>
                        </span>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="input-group mb-3 col-6">
                        <label> Availability in Base City?* </label><br />
                        <span class="">
                            <label class="">
                                <input type="checkbox" name="availability_base_city" value="Yes" />
                                <span class="wpcf7-list-item-label">Yes</span>
                            </label>

                            <label>
                                <input type="checkbox" name="availability_base_city" value="No" />
                                <span class="wpcf7-list-item-label">No</span>
                            </label>
                        </span>
                    </div>
                    <div class="input-group mb-3 col-6">
                        <label> Do you travel often?* </label><br />
                        <span class="">
                            <label class="">
                                <input type="radio" name="travel_often" value="Yes" />
                                <span class="wpcf7-list-item-label">Yes</span>
                            </label>

                            <label>
                                <input type="radio" name="travel_often" value="No" />
                                <span class="wpcf7-list-item-label">No</span>
                            </label>
                        </span>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="input-group mb-3 col-6">
                        <label> Do you do model tours?* </label><br />
                        <span class="">
                            <label class="">
                                <input type="radio" name="model_tour" value="Yes" />
                                <span class="wpcf7-list-item-label">Yes</span>
                            </label>

                            <label>
                                <input type="radio" name="model_tour" value="No" />
                                <span class="wpcf7-list-item-label">No</span>
                            </label>
                        </span>
                    </div>
                    <div class="input-group mb-3 col-6">
                        <label> Are you an adult film star?* </label><br />
                        <span class="">
                            <label class="">
                                <input type="radio" name="adult_film_star" value="Yes" />
                                <span class="wpcf7-list-item-label">Yes</span>
                            </label>

                            <label>
                                <input type="radio" name="adult_film_star" value="No" />
                                <span class="wpcf7-list-item-label">No</span>
                            </label>
                        </span>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="input-group mb-3 resize col-6">
                        <label> If yes, which magazines or movies of note? </label><br />
                        <input type="text" name="magazine_movie_note" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                    <div class="input-group mb-3 resize col-6">
                        <label> Please mention your Freeone's Profile URL if you have? </label><br />
                        <input type="text" name="mention_facebook_url" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                </div>
            </div>
            

            <input type="button" name="previous" class="previous action-button" value="Previous" />

            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">All AIA Models are legal adults.</h2>
            
            <div class="form-container model-ex">
                <div class="form-row row">
                    <div class="input-group mb-3">
                        <label> Are you over the age of 18?* </label><br />
                        <label class="">
                            <input type="radio" name="over_eighteen" value="Yes" />
                            <span class="wpcf7-list-item-label">Yes</span>
                        </label>

                        <label>
                            <input type="radio" name="over_eighteen" value="No" />
                            <span class="wpcf7-list-item-label">No</span>
                        </label>
                    </div>
                </div>
                <div class="form-container">
                    <div class="form-row row">
                        <div class="input-group mb-3">
                            <label> Submit form of ID: Passport or Driver’s Licence for Proof of Age*</label><br />
                            <div class="file">
                                <input type="file" name="age_proof_file" size="40" class="" accept=".jpg,.jpeg,.png,.pdf" aria-required="true" aria-invalid="false" />
                            </div>
                        </div>
                    </div>

                    <div class="form-row row">
                        <div class="input-group mb-3">
                            <label> We must also have a picture of the back of your ID* </label><br />
                            <div class="file">
                                <input type="file" name="back_of_id_picture" size="40" class="" accept=".jpg,.jpeg,.png" aria-required="true" aria-invalid="false" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <!-- <button type="submit"  class="submit action-button" target="_top">Submit</button> -->
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Your Stats</h2>
            
            <div class="form-container">
                <div class="form-row">
                    <div class="input-group mb-3">
                        <label> Height* </label><br />
                        <input type="text" name="height" class="form-control" placeholder="Mention Inch/Cm" aria-label="Username" size="40">
                    </div>
                    <div class="input-group mb-3">
                        <label> Weight* </label><br />
                        <input type="text" name="weight" class="form-control" placeholder="Mention Kg/lbs" aria-label="Username" size="40">
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3">
                        <label> Bust Size* </label><br />
                        <input type="text" name="bust_size" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                    <div class="input-group mb-3">
                        <label> Cup Size* </label><br />
                        <input type="tel" name="cup_size" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3">
                        <label> Waist* </label><br />
                        <input type="text" name="waist" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                    <div class="input-group mb-3">
                        <label> Hips* </label><br />
                        <input type="number" name="hips" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                </div><div class="form-row">
                    <div class="input-group mb-3">
                        <label> Hair Color* </label><br />
                        <input type="text" name="hair_color" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                    <div class="input-group mb-3">
                        <label> Eye Color* </label><br />
                        <input type="text" name="eye_color" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 stat-input">
                        <label> Tatoos </label><br />
                        <input type="text" name="tatoos" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                </div>
            </div>

            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />

        </fieldset>
        <fieldset>
            <h2 class="fs-title">Your Donation For:</h2>
            <div class="form-container">
                <div class="form-row">
                    <div class="input-group mb-3">
                        <label> 30 Mins:* </label><br />
                        <input type="number" name="mins_30" class="form-control" placeholder="Mention Inch/Cm" aria-label="Username" size="40">
                    </div>
                    <div class="input-group mb-3">
                        <label> 1 Hour:* </label><br />
                        <input type="number" name="hour_1" class="form-control" placeholder="Mention Kg/lbs" aria-label="Username" size="40">
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3">
                        <label> 90 Mins:* </label><br />
                        <input type="number" name="mins_90" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                    <div class="input-group mb-3">
                        <label> 2 Hours:* </label><br />
                        <input type="number" name="hours_2" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3">
                        <label> 3 Hours:* </label><br />
                        <input type="number" name="hours_3" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                    <div class="input-group mb-3">
                        <label> 4 Hours:* </label><br />
                        <input type="number"  name="hours_4" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                </div><div class="form-row">
                    <div class="input-group mb-3">
                        <label> 5 Hours:* </label><br />
                        <input type="number" name="hours_5" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                    <div class="input-group mb-3">
                        <label> OverNight (8 Hours):* </label><br />
                        <input type="number"  name="overnight_8_hours" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 stat-input">
                        <label> OverDay (8 Hours):* </label><br />
                        <input type="number" name="overday_8_hours" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                </div>
            </div>
            
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Please answer these following questions</h2>
            
            <div class="form-container">
                <div class="form-row">
                    <div class="input-group mb-3">
                        <label> 1. What is your primary focus in the industry? </label><br />
                        <input type="text" name="primary_focus" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                    <div class="input-group mb-3">
                        <label> 2. What is your secondary focus in the industry? </label><br />
                        <input type="text" name="secondary_focus" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3">
                        <label> 3. What fetish do you entertain?* </label><br />
                        <select name="entertain" class="qa-select" aria-required="true" aria-invalid="false">
                            <option value="">---</option>
                            <option value="Femdome">Femdome</option>
                            <option value="Submissive">Submissive</option>
                            <option value="Bondages">Bondages</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 stat-input">
                        <label> 4. Do you have any racial objections?* </label><br />
                        <input type="text" name="racial_objections" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
                    </div>
                </div>

                <div class="form-row row">
                    <div class="input-group mb-3">
                        <label> 4. Do you only see:* </label><br />
                        <label class="model-ex">
                            <input type="checkbox" name="only_see" value="Yes" />
                            <span class="wpcf7-list-item-label">Men</span>
                        </label>

                        <label class="model-ex">
                            <input type="checkbox" name="only_see" value="No" />
                            <span class="wpcf7-list-item-label">Women</span>
                        </label>
                        <label class="model-ex">
                            <input type="checkbox" name="only_see" value="No" />
                            <span class="wpcf7-list-item-label">Couple</span>
                        </label>
                        <label class="model-ex">
                            <input type="checkbox" name="only_see" value="No" />
                            <span class="wpcf7-list-item-label">Transgender</span>
                        </label>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="upload-container">
                        <h1>Upload Your Photos</h1>
                        <p>High resolution & professionally shot photos are preferred. No Selfies Please.</p>
                        <input type="file" name="image_multiple" id="image_multiple" accept="image/*" multiple>
                        <div id="image-preview"></div>
                    </div>
                    <!-- <label>Upload your photos*</label>
                    <span class="">
                        <input type="file" size="40" class="" aria-required="true" aria-invalid="false" multiple="multiple" data-min="3" data-max="30" data-id="45936" accept="." />
                    </span>   -->                                  
                </div>
            </div>
            
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
            <h2> Please read carefully the agreement</h2>
            
            <div class="myBox">
                <div class="scrollable">
                    <h2> INDEPENDENT CONTRACTOR AGREEMENT</h2>
                    <h3>1. Parties and Introductory Statement</h3>
                    <p> In consideration of the mutual promises and obligations set forth herein below, the equities and sufficiency of which are hereby acknowledged, “Alluring Intros and Arrangements” (hereinafter “Company”), a business entity operating an interactive internet website providing interpersonal introduction services by and through the operation thereof which is commonly known by and accessible under the same name, and ________________________________________, a natural person and current resident of ______________________________________ and an independent contractor as set forth hereinbelow (hereinafter “Contractor”), collectively (“the Parties”), hereby mutually contract, covenant and agree as follows:
                    </p>
                    <h3> 2. Company Services </h3>
                    <p> By and through the operation of its interactive internet website, Company advertises and promotes to the general public the service of arranging lawful personal and/or internet social introductions by and between interested members of the general public (hereinafter “Customers”) and its Contractors, each and all of whom shall qualify as female models or actresses who are now or have previously personally appeared in either adult films which have historically been released to the general public or in print or social media of general circulation.<br />
                        Company neither advertises, promotes, or provides any other service(s) whatsoever, and hereby specifically disavows any inference or alleged implication to the contrary.<br />
                        With particularity, Company categorically disavows any intent or purpose to promote or facilitate the commission or conspiracy to commit conduct on the part of any person constituting the prostitution or “sex trafficking” of any person. And Contractor hereby warrants that she shall not engage in any such conduct pursuant to or as a result of any referral of Contractor by Company, and further acknowledges that she has been specifically advised and understands that Company shall not tolerate such conduct and shall affirmatively and vigorously endeavor to preclude the commission of such activity in the conduct of its business, as more fully set forth with particularity hereinafter.
                    </p>
                    <h3> 3.Contractor Services </h3>
                    <p> Contractor hereby represents and warrants that she is now, or has previously been, a female model or actress who currently, or has previously personally appeared in either adult films which have historically been released to the general public or in print or other social media of general circulation. Contractor further agrees to undertake introduction to designated Customers in accordance with referrals arranged by Company. Contractor further agrees not to undertake any other service(s) pursuant to any such referral by Company, and Contractor agrees that the undertaking of any such other service by Contractor pursuant to any such referral by Company shall constitute (among others hereinbelow specified) a prohibited act beyond the scope and in material breach of this agreement and justifying the immediate termination of Contractor’s retention by Company.</p>
                    <h3> 4. Independent Contractor Status </h3>
                    <p> Contractor agrees to undertake and execute this agreement in accordance with its terms and conditions as an independent contractor. And nothing herein shall be deemed to confer upon Contractor the status of an employee of Company or establish an employer-employee relationship between or among Contractor and Company or any other entity or person.<br><br />
                        Accordingly, Contractor assumes all responsibility for any and all taxes including without limitation, Federal, State, and local taxes. <br><br />
                        Any and all liability, which is attributable to Contractor’s conduct pursuant to or as a result of any referral of Contractor by Company which is inconsistent with or in material breach of any of the terms and conditions of this Agreement shall be assumed solely by Contractor, and Contractor shall hold Company harmless therefrom. <br><br />
                    Contractor understands and assumes the risks associated with her occupation including those implicating her safety. </p>
                    <h3>5. Limitations Upon Contractor Services and Material Breach</h3>
                    <p> Contractor shall in no event commit any violation of any federal, state or local statute, law or ordinance pursuant to or as a result of any referral by Company, or otherwise, while engaged in the performance of this Agreement, and Contractor agrees that any such conduct by Contractor shall constitute a prohibited act beyond the scope and in material breach of this Agreement, justifying the immediate termination of Contractor’s retention by Company. Contractor agrees that such conduct shall include, but is not limited to the commission, promotion, or facilitation, by speech or conduct, of any of the following:</p>
                    <ul>
                        <li>Soliciting Prostitution of any person;  </li>
                        <li>Prostitution of any person;  </li>
                        <li>Pandering of any person;  </li>
                        <li>Sex Trafficking of any person; </li>
                        <li>Living from The Earnings Of A Prostitute by any person;  </li>
                        <li>Theft by any person; and/or </li>
                        <li>Unlawful Possession, Use or Distribution of any controlled substance by any person. </li>
                    </ul>
                    <p>Contractor further hereby warrants that she shall affirmatively, categorically, and personally disavow any purpose or intent to engage in any criminal behavior whatsoever at the outset of her introduction to any and all Customers pursuant to the arrangement of Company, and further acknowledges that her failure to do so shall be deemed a material breach of this Agreement justifying the immediate termination of her retention by Company. </p>
                    <h3>6. Company Fees and Prohibition Upon Contractor Remissions to Company</h3>
                    <p>     Contractor hereby acknowledges that Company Customers are charged a “flat” fee as compensation to Company in exchange for its introduction of each Customer to its Contractors and that no other or incidental fees are charged or accepted by Company from its Customers. <br><br />
                    Contractor hereby further acknowledges that no remittance to Company by Contractor of any monies from whatever source derived shall be accepted from Contractor by Company.</p>
                    <h3> 7. Term of Engagement</h3>
                    <p> The duration of this Agreement shall be subject to the mutual will of the Parties and shall be terminable at the will of either Party at any time for any or no reason. Notice of termination by either party shall be immediately served in writing upon the other by sending it to the address listed below via any available means reasonably calculated to achieve that purpose. </p>
                    <h3>8. Entire Agreement and Modification</h3>
                    <p> The terms and conditions expressly set forth in this Agreement shall constitute the entire agreement of the Parties, any previous written or oral agreement notwithstanding, and may only be modified by a subsequent written agreement of equal dignity signed by the Parties hereto.
                    </p>
                    <p>
                        [DATE]<br />
                        [SIGNATURES]<br />
                        [CONTRACTOR INITIAL EVERY PAGE]
                    </p>
                    <p>10161 West Park Run Drive Suite 150 Las Vegas, NV 89145</p>
                </div>
            </div>
            
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
            <label> Add your Signature*</label><br />
            <div class="signature-container">
                <div class="canvas-container">
                    <canvas id="signature-canvas"></canvas>
                </div>
                <button id="clear-button">Clear</button>
            </div>

            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <button type="submit"  class="submit action-button" target="_top">Submit</button>

            <!-- <a href="https://twitter.com/GoktepeAtakan" class="submit action-button" target="_top">Submit</a> -->
        </fieldset>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
