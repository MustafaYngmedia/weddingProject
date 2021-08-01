<h3>Personal Information</h3>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-name" type="text" value="{{@$details->full_name}}" name="full_name" data-constraints="@Required"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-name">Full Name</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                <label>Sex</label><br />
                    Male <input type="radio" value="1" {{@$details->gender == "1" ? 'checked="checked"' : ''}} name="gender" />
                    Female <input type="radio" value="2" {{@$details->gender == "2" ? 'checked="checked"' : ''}} name="gender" />
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-shakha" type="text" value="{{@$details->shakha}}" name="shakha" data-constraints="@Required"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-shakha">Shakha</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-dob" type="input" value="{{@$details->dob}}" name="dob" data-constraints="@Required"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-dob">D.O.B</label>
                </div>
                
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-complexion" type="text" value="{{@$details->complexion}}" name="complexion"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-complexion">Complexion</label>
                </div>
                
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-mother_tongue" type="text" value="{{@$details->mother_tongue}}" name="mother_tongue"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-mother_tongue">Mother Tongue</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-blood_group" type="text" value="{{@$details->blood_group}}" name="blood_group"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-blood_group">Blood Group</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                <label>Marital Status:</label><br />
                    Unmarried <input type="radio" value="1"  {{@$details->marital_status == "1" ? 'checked="checked"' : ''}}  name="marital_status" />
                    Divorcee <input type="radio" value="2"  {{@$details->marital_status == "2" ? 'checked="checked"' : ''}} name="marital_status" />
                    Widow <input type="radio" value="3"  {{@$details->marital_status == "3" ? 'checked="checked"' : ''}}  name="marital_status" />
                    Widower <input type="radio" value="4"  {{@$details->marital_status == "4" ? 'checked="checked"' : ''}}  name="marital_status" />
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-divorced_date" type="text" value="{{@$details->divorced_date}}" name="divorced_date"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-divorced_date">if Divorcee/ Widow/ Widower, Since when?</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-duration_of_previouse_life" type="text" value="{{@$details->duration_of_previouse_life}}" name="duration_of_previouse_life"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-duration_of_previouse_life">Duration of Previous Married Life</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-address" type="text" value="{{@$details->address}}" name="address"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-address">Address for Communication</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-mobile" type="text" value="{{@$details->mobile}}" data-constraints="@Required" name="mobile"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-mobile">Phone/Mobile</label>
                </div>


                <h3>Other Details:</h3>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-gotra" type="text" value="{{@$details->gotra}}" name="gotra"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-gotra">Gotra</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-rashi" type="text" value="{{@$details->rashi}}" name="rashi"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-rashi">Rashi</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-nakashatra" type="text" value="{{@$details->nakashatra}}" name="nakashatra"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-nakashatra">Nakashatra</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-nadi" type="text" value="{{@$details->nadi}}" name="nadi"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-nadi">Nadi</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-gotra" type="text" value="{{@$details->gotra}}" name="gotra"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-gotra">Gotra</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-gan" type="text" value="{{@$details->gan}}" name="gan"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-gan">Gotra</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-charan" type="text" value="{{@$details->charan}}" name="charan"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-charan">Gotra</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-mangal" type="text" value="{{@$details->mangal}}" name="mangal"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-mangal">Mangal</label>
                </div>

                <h3>Education And Occupation</h3>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-qualification" type="text" value="{{@$details->qualification}}" data-constraints="@Required" name="qualification"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-qualification">Qualification</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-work_name" type="text" value="{{@$details->work_name}}" data-constraints="@Required" name="work_name"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-work_name">Office/Company Name</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-designation" type="text" value="{{@$details->designation}}" data-constraints="@Required" name="designation"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-designation">Designation</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-income_pa" type="text" value="{{@$details->income_pa}}" data-constraints="@Required" name="income_pa"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-income_pa">Income p.a</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-experience" type="text" value="{{@$details->experience}}" data-constraints="@Required" name="experience"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-experience">Experience</label>
                </div>

                <h3>Family Details</h3>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-mother_name" type="text" value="{{@$details->mother_name}}" data-constraints="@Required" name="mother_name"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-mother_name">Mother Name</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-mother_occupation" type="text" value="{{@$details->mother_occupation}}" name="mother_occupation"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-mother_occupation">Mother Occupation</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-father_name" type="text" value="{{@$details->father_name}}" data-constraints="@Required" name="father_name"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-father_name">Father Name</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-father_occupation" type="text" value="{{@$details->father_occupation}}" name="father_occupation"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-father_occupation">Father Occupation</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-no_of_brothers" type="text" value="{{@$details->no_of_brothers}}" name="no_of_brothers"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-no_of_brothers">No of Brothers</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-no_of_sisters" type="text" value="{{@$details->no_of_sisters}}" name="no_of_sisters"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-no_of_sisters">No of Sisters</label>
                </div>
                <h3>Expections About Alliance:</h3>
                <div class="form-wrap form-wrap-icon">
                    <label>Bride/Bride groom:</label><br />
                    Working <input type="radio" value="1" {{@$details->alliance_working == "1" ? 'checked="checked"' : ''}} name="alliance_working" />
                    Not Working <input type="radio" value="2" {{@$details->alliance_working == "2" ? 'checked="checked"' : ''}} name="alliance_working" />
                    Not Necessary <input type="radio" value="3" {{@$details->alliance_working == "3" ? 'checked="checked"' : ''}} name="alliance_working" />
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-alliance_qualification" type="text" value="{{@$details->alliance_qualification}}" name="alliance_qualification"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-alliance_qualification">Qualification</label>
                </div>
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-occupation_profile" type="text" value="{{@$details->occupation_profile}}" name="occupation_profile"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-occupation_profile">Occupation Profile</label>
                </div>

                <div class="form-wrap form-wrap-icon">
                  <input class="form-input form-control-has-validation" id="register-any_other_information" type="text" value="{{@$details->any_other_information}}" name="any_other_information"><span class="form-validation"></span>
                  <label class="form-label rd-input-label" for="register-any_other_information">Any Other Information</label>
                </div>

                Note:Only the details written in the Marriage Bureau Information Form by ther Applicant have been presented by
                us.Investigate thoroughly about the Bridegroom/Bride you choose. Only after enquiring about their personal and
                occupational details we suggest you to proceed further if you are completely satisfied.Reshim Gathi Marriage Bureau
                is only information centre. We do not guarantee the authenticity of the information given here. We hercby request you
                to kindly enquire thoroughly about the veracity of the details in the information form and then only finalise your
                decision. 

                
                <div class="form-wrap form-wrap-group group-1 group-middle">
                  <button class="button button-lg button-primary" type="submit">Save</button>
                </div>
                <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id"/>
                @if(@$details->status != 1)
                <div class="form-wrap form-wrap-group group-1 group-middle">
                  <button class="button button-lg button-primary" id="pay_fees">Pay Fees</button>
                </div>
                @endif
                @section('footer2')
                    <script>
                        $("#pay_fees").click(function(e){
                            e.preventDefault();
                        const amount = "3000";
                        var options = {
                                "key": "rzp_test_vpAW8J5jy9JZ6l",
                                "amount": amount*100, // Example:  paise = INR 20,
                                "name": "Wedding",
                                "description": "description",
                                "image": "{{url('/img/logo.png')}}",// COMPANY LOGO
                                "handler": function (response){
                                    e.preventDefault();
                                    $("#razorpay_payment_id").val(response.razorpay_payment_id)
                                    $(".registerDetailForm").submit();
                                },
                                "prefill": {
                                "name": "{{$user->name}}", // pass customer name
                                "email": "{{$user->email}}",// customer email
                                },
                                "theme": {
                                "color": "#15b8f3" // screen color
                                }
                            };
                            var propay = new Razorpay(options);
                            propay.open();
                        })
                    </script>
                @endsection