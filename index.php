<?php include_once('templates/header.php')  ?>
        <div class="row p-4">
            <div class="col-lg-8">
                <div class="jumbotron m-2">
                    <h1 class="display-5">Dr. (Mrs) Vaishali J. Dongre (Kolambikar)</h1>
                    <h2>M.B.B.S., D.V.V., (Mumbai)</h2>
                    Dr. Vaishali is eminent & experienced senior dermatologist in Aurangabad City. Practicing since more than 10 years. She is specialised in cosmetology, dermatology, vinerology, leprosis treatments.
                </div>
            </div>
            <div class="col-lg-4">
                <img src="images\WhatsApp Image 2021-11-27 at 13.08.43.jpeg" class="rounded-circle" width="350" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img src="images\skin.jpeg" class="img-fluid" width="340">
            </div>
            <div class="col-lg-6">
                <form action="process.php" method="post">
                    <div class="form-group">
                        <h2><u><b> Book Appointment </b></u></h2>
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="p_name" id="name" aria-describedby="helpId" placeholder="name" required>
                        <!-- <small id="helpId " class="form-text text-muted ">Help text</small> -->
                    </div>
                    <div class="form-group">
                        <label for="contact_no">Contact No.</label>
                        <input type="number" class="form-control " name="contact_no" id="" aria-describedby="helpId " placeholder="contact no" required>
                        <!-- <small id="helpId " class="form-text text-muted ">Help text</small> -->
                    </div>
                    <div class="form-group ">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="" aria-describedby="helpId" placeholder="city" required>
                        <!-- <small id="helpId " class="form-text text-muted ">Help text</small> -->
                    </div>
                    <div class="form-group">
                        <label for="appointment_date"> Appointment Date </label>
                        <input type="date" class="form-control" name="appointment_date" id="" aria-describedby="helpId" placeholder="date" required>
                        <!-- <small id="helpId " class="form-text text-muted ">Help text</small> -->
                    </div>
                    <div class="form-group ">
                        <label for="opd">Select OPD</label>
                        <select class="form-control" name="opd" id="opd" required>
                      <option>opd 1</option>
                      <option>opd 2</option>                    
                    </select>
                    </div>
                    <button type="submit" class="btn btn-success" style="margin-bottom: 5%;">Submit</button>
                </form>
            </div>
        </div>
    
    <?php include_once('templates/footer.php')  ?>