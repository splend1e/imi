<head>
<script type="text/javascript">
$('#f_city, #f_city_label').hide();
$('#f_state').change(function(){
    var state_id = $('#f_state').val();
    if (state_id != ""){
        var post_url = "/index.php/control_form/get_cities/" + state_id;
        $.ajax({
            type: "POST",
             url: post_url,
             success: function(cities) //we're calling the response json array 'cities'
              {
                $('#f_city').empty();
                $('#f_city, #f_city_label').show();
                   $.each(cities,function(id,city) 
                   {
                    var opt = $('<option />'); // here we're creating a new select option for each group
                      opt.val(id);
                      opt.text(city);
                      $('#f_city').append(opt); 
                });
               } //end success
         }); //end AJAX
    } else {
        $('#f_city').empty();
        $('#f_city, #f_city_label').hide();
    }//end if
}); //end change 
</script>
</head>

<body>

	<?php echo form_open('control_form/add_all'); ?>
	<label for="f_state">State<span class="red">*</span> </label>
	<select id="f_state" name="f_state">
		<option value=""></option>
		<?php
		foreach($states as $state){
                echo '<option value="' . $state->id . '">' . $state->state_name . '</option>';
            }
            ?>
	</select>
	<label for="f_city">City<span class="red">*</span> </label>
	<!--this will be filled based on the tree selection above-->
	<select id="f_city" name="f_city" id="f_city_label">
		<option value=""></option>
	</select>
	<label for="f_membername">Member Name<span class="red">*</span> </label>
	<!--<input type="text" name="f_membername"/>-->
	<?php echo form_close(); ?>
</body>
