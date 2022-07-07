<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<div class="container px-1 py-5 mx-auto formMain">
    <div class="row d-flex justify-content-center align-items-end flex-row">
        <div class="col-xl-7 col-lg-12 col-md-9 col-11 text-center ">
            <h3 class=" fw-bolder mt-" style="color:#4f1a52;">Request a Quote</h3>
            <p>Just answer a few questions<br> so that we can finalize the right experience for you.</p>
            <div class="card shadow bg-white" style="padding: 30px; border: none;">
                <h5 class="text-center  mb-4">Powering world-class companies</h5>
                <form action="get_quote.php" class="form-card" method="POST">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                class="form-control-label px-3 ">First name<span class="text-danger"> *</span></label>
                            <input type="text" id="fname" name="fname" class="form-control  mt-2"
                                style="border-radius:10px ;" placeholder="Enter your first name" onkeypress="return (event.charCode > 64 &&
                      event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last
                                name<span class="text-danger"> *</span></label> <input type="text" id="lname"
                                class="form-control mt-2" name="lname" style="border-radius:10px ;"
                                placeholder="Enter your last name" onkeypress="return (event.charCode > 64 &&
                      event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                class="form-control-label px-3 mt-2">Email<span class="text-danger"> *</span></label>
                            <input type="email" id="email" name="email" class="form-control mt-2"
                                style="border-radius:10px ;" placeholder="" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                class="form-control-label px-3 mt-2">Phone number<span class="text-danger">
                                    *</span></label> <input type="text" id="mob" name="mob" class="form-control mt-2"
                                style="border-radius:10px ;" placeholder="" minlength="10" maxlength="10" required> </div>
                    </div>
                    <div class="row justify-content-center mt-2">

                            <div class="formButton">
                                <input type="submit" style="background-color:#4f1a52; color:#fff;" name="combineForm" value="Get Instant Quote" class="btn btn-primary">
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <script>
    $(function() {
		    $("input[name='mob']").on('input', function(e) {
			$(this).val($(this).val().replace(/[^0-9]/g, ''));
		    });
	    });
    </script>