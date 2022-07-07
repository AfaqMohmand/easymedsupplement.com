<?php 

    include "base.html";
    if (isset($_POST["zip_submit"])){
        $zip_code = $_POST["zip_code"];
    }

?>
<style>

.inputBoxDisclaimer{
    margin-left:20px;
}
    
@media screen and (min-width:768px) and (max-width:991px){
    /*.mainCheckDisclaimer{*/
    /*    margin-left:30px !important;*/
    /*}*/
    .disclaim{
        margin-left:-30px !important;
    }
}
@media screen and (min-width:991px){
    .disclaim{
        margin-left:-15px !important;
    }
}


</style>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<div class="container" style="margin-top:100px;">
    <h2 class="text-center">Compare Medicare Supplements Quotes From The Nations Top Rated Carriers</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 shadow p-5 mt-3 mb-3" style="border-radius: 20px;">
            <h2 class="text-center mb-3"
                style="background-color: #4f1a52; color:#fff; padding:10px; border-radius:10px;">Get Instant Quote
                Online</h2>
            <form action="thankyou.php" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="">First Name</label><input style="border-radius:20px;" name="first_name" type="text"
                            class="form-control" onkeypress="return (event.charCode > 64 &&
                      event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Last Name</label><input style="border-radius:20px;" name="last_name" type="text"
                            class="form-control" onkeypress="return (event.charCode > 64 &&
                      event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <?php if (isset($zip_code)){ ?>
                    <div class="col-lg-6">
                        <label for="">Zip Code</label><input style="border-radius:20px;" value="<?php echo $zip_code; ?>" name="zip_code" type="text"
                            class="form-control" pattern="[0-9]{5}" maxlength="5">
                    </div>
                    <?php } else {?>
                        <div class="col-lg-6">
                            <label for="">Zip Code</label><input style="border-radius:20px;" name="zip_code" type="text"
                                class="form-control" pattern="[0-9]{5}" maxlength="5">
                        </div>
                        <?php } ?>
                    <div class="col-lg-6">
                        <label for="">DOB</label><input style="border-radius:20px;" name="dob" max="9999-12-31" type="date"
                            class="form-control" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <label for="">Address</label><input style="border-radius:20px;" name="address" type="text"
                            class="form-control" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Gender</label>
                        <select style="border-radius:10px; width:100%; background-color:#fff;" name="gender"
                            class="form-control" id="" required>
                            <option value="">Select Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <label for="">Email Address</label><input style="border-radius:20px;" type="email"
                            name="email_address" class="form-control" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Phone Number</label><input style="border-radius:20px;" type="text"
                            name="phone_number" class="form-control" minlength="10" maxlength="10" required>
                    </div>
                </div>
                <!--<div><input style="margin-top:05px;" class="disclaimerCheck" type="checkbox" id="leadid_tcpa_disclosure" required/><div class="disclaimerDescription"><label for="leadid_tcpa_disclosure"><span class="disclaimerDescriptionText">By checking this box and submitting this form, I agree to the Terms and Conditions and Privacy Policy of affordablemedigap.com, their agents and <a href="https://affordablemedigap.com/our-marketing-partners.php">MarketingPartners</a> to contact me about Medicare insurance as per health insurance, including but not limited to Medicare Advantage, Medicare Supplement, and Prescription Drug plans. In addition, other non-insurance offers can also contact me by telephone calls and text messages to the number I provided above. I agree to receive telemarketing calls and pre-recorded messages via an auto dialed phone system, even if my telephone number is a mobile number that is currently listed on any state, federal or corporate Do Not Call list. I understand that my consent is not a condition of purchase of any goods or services and that I may revoke my consent at any time. I understand that standard message and data rates may apply.</span></label></div></div>-->
                
                <input id="leadid_token" name="universal_leadid" type="hidden" value="" />
                <p class="text-center">
                    <input type="submit" name="submit" value="Get Instant Quote" class="btn btn-primary mt-3 p-2"
                        style="background-color: #4f1a52; color:#fff; border:none; border-radius: 10px;">
                </p>
                <p>
                    <div class="row mt-2">
                <div class="col-1 mainCheckDisclaimer">
                    <input type="checkbox" id="leadid_tcpa_disclosure" required/>
                </div>
                <div class="col-10">
                    <label for="leadid_tcpa_disclosure" class="disclaim">By checking this box and submitting this form, I agree to the Terms and Conditions and Privacy Policy of affordablemedigap.com, their agents and <a href="https://affordablemedigap.com/our-marketing-partners.php">MarketingPartners</a> to contact me about Medicare insurance as per health insurance, including but not limited to Medicare Advantage, Medicare Supplement, and Prescription Drug plans. In addition, other non-insurance offers can also contact me by telephone calls and text messages to the number I provided above. I agree to receive telemarketing calls and pre-recorded messages via an auto dialed phone system, even if my telephone number is a mobile number that is currently listed on any state, federal or corporate Do Not Call list. I understand that my consent is not a condition of purchase of any goods or services and that I may revoke my consent at any time. I understand that standard message and data rates may apply.</label>
                </div>
                </div>
                </p>

            </form>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>

<!--Jornaya-->

<script id="LeadiDscript" type="text/javascript">
    (function () {
        var s = document.createElement('script');
        s.id = 'LeadiDscript_campaign';
        s.type = 'text/javascript';
        s.async = true;
        s.src = '//create.lidstatic.com/campaign/3b513dc6-02b0-336b-0c8d-23896690cc37.js?snippet_version=2';
        var LeadiDscript = document.getElementById('LeadiDscript');
        LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
    })();
</script>
<noscript><img
        src='//create.leadid.com/noscript.gif?lac=c5c08682-5142-b211-d44b-3a67d7f058bd&lck=3b513dc6-02b0-336b-0c8d-23896690cc37&snippet_version=2' /></noscript>

<!--End Jornaya-->


<script>
        $(function() {
			$("input[name='zip_code']").on('input', function(e) {
			$(this).val($(this).val().replace(/[^0-9]/g, ''));
			});
		});

        $(function() {
		    $("input[name='phone_number']").on('input', function(e) {
			$(this).val($(this).val().replace(/[^0-9]/g, ''));
		});
	});
    	</script>



<?php include "footer.html"; ?>