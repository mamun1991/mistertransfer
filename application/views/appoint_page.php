<?php include'header.php'; ?>



<div class="container pt-5">



<div class=" ">

	<h3>New Appoinment</h3>

</div>

<form method="post" action="<?php echo base_url('Main/save_appointment') ?>">

  <div class="form-group">

    <label for="exampleInputEmail1"><strong>❂ Date & Time</strong></label>

    <input type="datetime-local" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter driver">

   

  </div>

	 <div class="form-group">

    <label for="exampleFormControlSelect1"><strong>♖ Hotel</strong></label>
<!-- 
    <select class="form-control" id="exampleFormControlSelect1" name="hotel_id">

    <?php 



foreach ($hotel as $key) {



	?>



<option value="<?php echo $key->id;?>"><?php echo $key->hotel_name; ?></option>

<?php }

     ?>

    </select> -->


    <input type="text" name="hotel_id"  class="form-control">

  

  </div>

   <div class="form-group">

    <label for="exampleFormControlSelect1"><strong>⚐ Destination</strong></label>

    <select class="form-control" id="exampleFormControlSelect1" name="destiny_id">

      <?php 
        foreach ($destiny as $key1) {
	    ?>



<option value="<?php echo $key1->id;?>"><?php echo $key1->destiny; ?></option>

<?php }

     ?>

    </select>

  </div>
  <div class="form-group">

    <label for="exampleFormControlSelect1"><strong>Name</strong></label>

    <input type="text" name="name"  class="form-control">

  </div>


  <div class="form-group">

    <label for="exampleFormControlSelect1"><strong>Booking Number</strong></label>

    <input type="text" name="number"  class="form-control">

  </div>


  <!--  -->

  <div class="form-group">

    <label for="exampleFormControlSelect1"><strong>Price</strong></label>

    <input type="text" name="Price"  class="form-control">

  </div>

  <div class="form-group">

    <label for="exampleFormControlSelect1"><strong>Pax</strong></label>

    <input type="text" name="pax"  class="form-control">

  </div>


<div class="form-check">

  <input class="form-check-input" type="radio" name="type" value="Departures" id="flexRadioDefault1" checked>

  <label class="form-check-label" for="flexRadioDefault1">

    Departures

  </label>

</div>

<div class="form-check pb-5">

  <input class="form-check-input" type="radio" name="type"  value="Arrivals" id="flexRadioDefault2" >

  <label class="form-check-label" for="flexRadioDefault2">

   Arrivals

  </label><br>

  <input style="display:none;" type="text" name="details" id="otherAnswer" />

</div>





 

   <button type="submit" class="btn btn-primary ">Save data</button>

 

</form>



</div>

<script type="text/javascript">

	

 $(document).ready(function() {

            $("input[type='radio']").change(function() {

                if ($(this).val() == "Arrivals") {

                    $("#otherAnswer").show();

                } else {

                    $("#otherAnswer").hide();

                }

            });

        });

</script>