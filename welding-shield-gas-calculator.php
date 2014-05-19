<?php include 'header.php'; ?>

	
		
	

<div class="list-container">
	<h3>Welding Shield Gas Calculator</h3>
	<div class="line-break"></div>
<form id="calcForm">				
	<div class="fillout-form-calculator">	
			<label for="stations"><span>*</span>How many welding stations will be supplied by the gas mixer?</label>
				<input type="text" id="stations" name="stations" title="The total number of welding arcs to be supplied by the gas mixer." class="required" /><br>
			<label for="flow_rate"><span>*</span>What is the average flow rate in terms of SCFH for a typical welding station?</label>
				<input type="text" id="flow_rate" name="flow_rate" title="The flow rate for each station is normally measured on a flow meter at the station. Typically flow rates are in the range of 25 to 50 SCFH (Standard Cubic Feet per Hour)." class="required" /><br>	
			<label for="duty_cycle"><span>*</span>What is the duty cycle in terms of % for the welding stations?</label>
				<input type="text" id="duty_cycle" name="duty_cycle" title="The duty cycle is the “on” time when there is welding and the gas is flowing compared to the total time. For example, if the welding was on for 30 seconds each minute, the duty cycle would be 50%." class="required" /><br>
			<label for="safty_margin"><span>*</span>A safety margin should be selected. What % safety margin is desired?</label>
				<input type="text" id="safty_margin" name="safty_margin" title="A safety margin will allow for unexpected increases in the mixed gas flow demand." class="required" /><br>
	</div>
				<div class="calc-radio">
				<label for="two_or_three_gas"><span>*</span>How many gases are needed to be mixed?</label>
					<input type="radio" name="two_or_three_gas" id="2_gas" value="2_gas" class="required" />2 Gases
					<input type="radio" name="two_or_three_gas" id="3_gas" value="3_gas" />3 Gases
				<br>
					<div class="O2_container">
					<label for="O2_or_not_O2"><span>*</span>Is Oxygen one of the three needed gases?</label>
						<input type="radio" name="O2_or_not_O2"  id="yes_O2" value="yes_O2" class="required" />Yes
						<input type="radio" name="O2_or_not_O2"  id="no_O2" value="no_O2" />No
					</div>
				</div>
				<div class="fillout-form-calculator">	
					<div class="majmin_container">				
									
						<label for="major_minor"><span>*</span>What is the required minor in major gas?</label>
							<select id="major_minor" name="major_minor" onchange="showfield(this.options[this.selectedIndex].value)" class="required" >
							<option value="">Please Select</option>
								<option value="HE_AR" name="HE_AR" >He in Ar</option>
								<option value="CO_2_AR" name="CO_2_AR" >CO<sub>2</sub> in Ar</option>
								<option value="O2_AR" name="O2_AR" >O<sub>2</sub> in Ar</option>
							</select>				
						</div>	
					</div>	

			

		
			
		


	<div id="submit-container_calc">	
	<div class="error-notes"></div>
	
	
	<input type="submit" id="submit" value="submit"/>
			<span>*</span>Required Fields	
	</div>
</form>
 <div id="required_SCFH"></div>
 <div id="no-matches">
 <p>Unfortunately, there are no gas mixers that fit your criteria. For a custom gas mixture, request a quote <a href="quote.php">online</a>, or call us at 219.362.6258.
 
 </div>
 
 
 
 
 
 
<div class = "table-wrap-calc" >
<h2 class="wrap-header">Results</h2>
	<table id="flowrate_sort" cellpadding="0" cellspacing="0">
<thead><tr>
	<th>Model</th>
	<th>Flow Rate SCFH</th>
	<th>Gas Mixture</th>
	<th>Description</th>

	
		
</tr></thead>
<tbody><tr class="selection-mixers">
	<td><a href="ss116.php">9775</td>
	<td>0-350</td>
	<td>0-50% He in Ar</td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss116.php">8500</td>
	<td>0-750</td>
	<td>0-50% CO<sub>2</sub> in Ar</td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss116.php">8505</td>
	<td>0-750</td>
	<td>0-10% O<sub>2</sub> in Ar</td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss117.php">8510</td>
	<td>0-750</td>
	<td>Fixed Ratio, Non O<sub>2</sub>, Non H<sub>2</sub></td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss117.php">8515</td>
	<td>0-750</td>
	<td>Fixed Ratio with O<sub>2</sub>, Non H<sub>2</sub></td>
	<td></td>
	
	
</tr><tr class="selection-mixers">
	<td><a href="ss120.php">9520</td>
	<td>0-750</td>
	<td>0-100% O<sub>2</sub> in CO<sub>2</sub></td>
	<td></td>

<tr class="selection-mixers">
	<td><a href="ss113.php">6105</td>
	<td>0-2,000</td>
	<td><div class="CO2-AR">0-30% CO<sub>2</sub> in Ar</div>
		<div class="O2-AR">0-10% O<sub>2</sub> in Ar</div>
		<div class="HE-AR">0-50% He in Ar<div></td>
	<td>Equipped with Gas Analyzer</td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss113.php">8105</td>
	<td>0-2,000</td>
	<td><div class="CO2-AR">0-30% CO<sub>2</sub> in Ar</div>
		<div class="O2-AR">0-10% O<sub>2</sub> in Ar</div>
		<div class="HE-AR">0-50% He in Ar<div></td>
	<td>Equipped with Gas Analyzer</td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss125.php">8106</td>
	<td>0-2,000</td>
	<td><div class="CO2-AR">0-30% CO<sub>2</sub> in Ar</div>
		<div class="O2-AR">0-10% O<sub>2</sub> in Ar</div>
		<div class="HE-AR">0-50% He in Ar<div></td>
	<td>Without Gas Analyzer</td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss113.php">6205</td>
	<td>0-5,000</td>
	<td><div class="CO2-AR">0-30% CO<sub>2</sub> in Ar</div>
		<div class="O2-AR">0-10% O<sub>2</sub> in Ar</div>
		<div class="HE-AR">0-50% He in Ar<div></td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss113.php">8205</td>
	<td>0-5,000</td>
	<td><div class="CO2-AR">0-30% CO<sub>2</sub> in Ar</div>
		<div class="O2-AR">0-10% O<sub>2</sub> in Ar</div>
		<div class="HE-AR">0-50% He in Ar<div></td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss113.php">6305</td>
	<td>0-10,000</td>
	<td><div class="CO2-AR">0-30% CO<sub>2</sub> in Ar</div>
		<div class="O2-AR">0-10% O<sub>2</sub> in Ar</div>
		<div class="HE-AR">0-50% He in Ar<div></td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss113.php">8305</td>
	<td>0-10,000</td>
	<td><div class="CO2-AR">0-30% CO<sub>2</sub> in Ar</div>
		<div class="O2-AR">0-10% O<sub>2</sub> in Ar</div>
		<div class="HE-AR">0-50% He in Ar<div></td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss113.php">6405</td>
	<td>0-20,000</td>
	<td><div class="CO2-AR">0-30% CO<sub>2</sub> in Ar</div>
		<div class="O2-AR">0-10% O<sub>2</sub> in Ar</div>
		<div class="HE-AR">0-50% He in Ar<div></td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss113.php">8405</td>
	<td>0-20,000</td>
	<td><div class="CO2-AR">0-30% CO<sub>2</sub> in Ar</div>
		<div class="O2-AR">0-10% O<sub>2</sub> in Ar</div>
		<div class="HE-AR">0-50% He in Ar<div></td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss114.php">8450</td>
	<td>0-5,000</td>
	<td>0-10% H<sub>2</sub> in Ar</td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss118.php">8610</td>
	<td>0-750</td>
	<td>Fixed Ratio, Non O<sub>2</sub></td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss118.php">8615</td>
	<td>0-750</td>
	<td>Fixed Ratio, with O<sub>2</sub></td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss118.php">8110</td>
	<td>0-2,000</td>
	<td>Fixed Ratio, Non O<sub>2</sub></td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss118.php">8115</td>
	<td>0-5,000</td>
	<td>Fixed Ratio, with O<sub>2</sub></td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss118.php">8210</td>
	<td>0-5,000</td>
	<td>Fixed Ratio, Non O<sub>2</sub></td>
	<td></td>

	
</tr><tr class="selection-mixers">
	<td><a href="ss118.php">8215</td>
	<td>0-5,000</td>
	<td>Fixed Ratio, with O<sub>2</sub></td>
	<td></td>

	
</tr>	
	
</tbody>
</table>
</div>







</div>
<div class="listend"></div>

<div class="footer">
Thermco Instrument Corporation&reg; | Copyright 2014
</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
  	<script src="js/jquery.animate-enhanced.min.js"></script>
  	<script src="js/hammer.min.js"></script>
  	<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
  	<script src="js/application.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
	<script type="text/javascript">
	
$(document).ready(function(){

	

        $('input[name=two_or_three_gas]').click(function(){
            if (this.id == "3_gas"){
				$("option:selected").prop("selected", false );
				$(".majmin_container").hide();
                $(".O2_container").css({"display": "block"});
            }		
            if (this.id == "2_gas"){
				$(".O2_or_not_O2").prop( "checked", false );			
				$(".O2_container").hide();
                $(".majmin_container").css({"display": "block"});
            }
        });



    $('#calcForm').validate({ // initialize the plugin
        rules: {
            stations: {
                required: true,
				number: true
            },
            flow_rate: {
                required: true,
				number: true
            },			
            duty_cycle: {
                required: true,
				range: [0, 100]
            },
            safty_margin: {
                required: true,
				range: [0, 100]
            }				
			
			
        },
		submitHandler: function(form) {
		//Prepare results on click, and if clicked again
		$('#no-matches').hide();		
		$('.table-wrap-calc').show();
		$('.CO2-AR').show();
		$('.HE-AR').show();		
		$('.O2-AR').show();		
		$('.table-wrap-calc tr.selection-mixers').hide();

    var numStation = $("#stations").val();
	var numFlow_rate = $("#flow_rate").val();
	var numDuty_cycle = $("#duty_cycle").val();
	var numSafty_margin = $("#safty_margin").val();
	var gasRadio = $("input:radio[name=gas]:checked").val();
	
		//required SCFH 
	var SCFH = Math.round(numStation * numFlow_rate * (numDuty_cycle/100) * (1 +(numSafty_margin/100)));
 
	
	  //SCFH <= 350
	  if (SCFH <= 350 && ($("#major_minor option:selected" ).val() === "HE_AR") ) {
		$('#flowrate_sort td:contains("9775")').parents("tr").show();		
		$('#flowrate_sort td:contains("8510")').parents("tr").show();	
	  }
	  else if (SCFH <= 350 && ($("#major_minor option:selected" ).val() === "CO_2_AR") ) {
		$('#flowrate_sort td:contains("8500")').parents("tr").show();		
		$('#flowrate_sort td:contains("8510")').parents("tr").show();	
	  }	  
	  else if (SCFH <= 350 && ($("#major_minor option:selected" ).val() === "O2_AR") ) {
		$('#flowrate_sort td:contains("8505")').parents("tr").show();		
		$('#flowrate_sort td:contains("8515")').parents("tr").show();	
	  }	 	  
	  else if (SCFH <= 350 && ($('input[name=O2_or_not_O2]:checked', '#calcForm').val() === "no_O2") ) {
		$('#flowrate_sort td:contains("8610")').parents("tr").show();		
	  }	 		  
	  else if (SCFH <= 350 && ($('input[name=O2_or_not_O2]:checked', '#calcForm').val() === "yes_O2") ) {
		$('#flowrate_sort td:contains("8615")').parents("tr").show();		
	  }	 	  
	  //SCFH > 350 && SCFH <= 500  
	  else if ((SCFH > 350 && SCFH <= 500) && ($("#major_minor option:selected" ).val() === "HE_AR") ) {
		$('#flowrate_sort td:contains("6105")').parents("tr").show();		
		$('#flowrate_sort td:contains("8105")').parents("tr").show();
		$('#flowrate_sort td:contains("8510")').parents("tr").show();		
	  }	  
	  else if ((SCFH > 350 && SCFH <= 500) && ($("#major_minor option:selected" ).val() === "CO_2_AR") ) {
		$('#flowrate_sort td:contains("8500")').parents("tr").show();		
		$('#flowrate_sort td:contains("8510")').parents("tr").show();
	  }	  	  
	  else if ((SCFH > 350 && SCFH <= 500) && ($("#major_minor option:selected" ).val() === "O2_AR") ) {
		$('#flowrate_sort td:contains("8505")').parents("tr").show();		
		$('#flowrate_sort td:contains("8515")').parents("tr").show();
	  }		  
	  else if ((SCFH > 350 && SCFH <= 500) && ($('input[name=O2_or_not_O2]:checked', '#calcForm').val() === "no_O2") ) {
		$('#flowrate_sort td:contains("8610")').parents("tr").show();		
	  }		  
	  else if ((SCFH > 350 && SCFH <= 500) && ($('input[name=O2_or_not_O2]:checked', '#calcForm').val() === "yes_O2") ) {
		$('#flowrate_sort td:contains("8615")').parents("tr").show();		
	  }		  
	  //SCFH > 500 && SCFH <= 750	  
	   else if ((SCFH > 500 && SCFH <= 750) && ($("#major_minor option:selected" ).val() === "HE_AR") ) {
		$('#flowrate_sort td:contains("6105")').parents("tr").show();
		$('#flowrate_sort td:contains("8105")').parents("tr").show();
		$('#flowrate_sort td:contains("8510")').parents("tr").show();		
	  }		  
	   else if ((SCFH > 500 && SCFH <= 750) && ($("#major_minor option:selected" ).val() === "CO_2_AR") ) {
		$('#flowrate_sort td:contains("8500")').parents("tr").show();
		$('#flowrate_sort td:contains("8510")').parents("tr").show();
	  }		  
	   else if ((SCFH > 500 && SCFH <= 750) && ($("#major_minor option:selected" ).val() === "O2_AR") ) {
		$('#flowrate_sort td:contains("8505")').parents("tr").show();
		$('#flowrate_sort td:contains("8515")').parents("tr").show();
	  }		  
	  else if ((SCFH > 500 && SCFH <= 750) && ($('input[name=O2_or_not_O2]:checked', '#calcForm').val() === "no_O2") ) {
		$('#flowrate_sort td:contains("8610")').parents("tr").show();
	  }		  
	  else if ((SCFH > 500 && SCFH <= 750) && ($('input[name=O2_or_not_O2]:checked', '#calcForm').val() === "yes_O2") ) {
		$('#flowrate_sort td:contains("8615")').parents("tr").show();		
	  }	
	  //SCFH > 750 && SCFH <= 2000	  
	   else if ((SCFH > 750 && SCFH <= 2000) && ($("#major_minor option:selected" ).val() === "HE_AR") ) {
		$('#flowrate_sort td:contains("6105")').parents("tr").show();
		$('#flowrate_sort td:contains("8105")').parents("tr").show();
	  }		  
	   else if ((SCFH > 750 && SCFH <= 2000) && ($("#major_minor option:selected" ).val() === "CO_2_AR") ) {
		$('#flowrate_sort td:contains("6105")').parents("tr").show();
		$('#flowrate_sort td:contains("8105")').parents("tr").show();
		$('#flowrate_sort td:contains("8106")').parents("tr").show();		
	  }		  
	   else if ((SCFH > 750 && SCFH <= 2000) && ($("#major_minor option:selected" ).val() === "O2_AR") ) {
		$('#flowrate_sort td:contains("6105")').parents("tr").show();
		$('#flowrate_sort td:contains("8105")').parents("tr").show();
		$('#flowrate_sort td:contains("8106")').parents("tr").show();	
	  }		  
	   else if ((SCFH > 750 && SCFH <= 2000) && ($('input[name=O2_or_not_O2]:checked', '#calcForm').val() === "no_O2") ) {
		$('#flowrate_sort td:contains("8110")').parents("tr").show();
	  }		  
	   else if ((SCFH > 750 && SCFH <= 2000) && ($('input[name=O2_or_not_O2]:checked', '#calcForm').val() === "yes_O2") ) {
		$('#flowrate_sort td:contains("8115")').parents("tr").show();		
	  }	
	  //SCFH > 2000 && SCFH <= 5000	
	   else if ((SCFH > 2000 && SCFH <= 5000) && ($("#major_minor option:selected" ).val() === "HE_AR") ) {
		$('#flowrate_sort td:contains("6205")').parents("tr").show();
		$('#flowrate_sort td:contains("8205")').parents("tr").show();
	  }		  
	   else if ((SCFH > 2000 && SCFH <= 5000) && ($("#major_minor option:selected" ).val() === "CO_2_AR") ) {
		$('#flowrate_sort td:contains("6205")').parents("tr").show();
		$('#flowrate_sort td:contains("8205")').parents("tr").show();
	  }		  
	   else if ((SCFH > 2000 && SCFH <= 5000) && ($("#major_minor option:selected" ).val() === "O2_AR") ) {
		$('#flowrate_sort td:contains("6205")').parents("tr").show();
		$('#flowrate_sort td:contains("8205")').parents("tr").show();	
	  }		  
	   else if ((SCFH > 2000 && SCFH <= 5000) && ($('input[name=O2_or_not_O2]:checked', '#calcForm').val() === "no_O2") ) {
		$('#flowrate_sort td:contains("8210")').parents("tr").show();
	  }		  
	   else if ((SCFH > 2000 && SCFH <= 5000) && ($('input[name=O2_or_not_O2]:checked', '#calcForm').val() === "yes_O2") ) {
		$('#flowrate_sort td:contains("8215")').parents("tr").show();		
	  }	
	  //SCFH > 5000 && SCFH <= 10000	
	   else if ((SCFH > 5000 && SCFH <= 10000) && ($("#major_minor option:selected" ).val() === "HE_AR") ) {
		$('#flowrate_sort td:contains("6305")').parents("tr").show();
		$('#flowrate_sort td:contains("8305")').parents("tr").show();
	  }		  
	   else if ((SCFH > 5000 && SCFH <= 10000) && ($("#major_minor option:selected" ).val() === "CO_2_AR") ) {
		$('#flowrate_sort td:contains("6305")').parents("tr").show();
		$('#flowrate_sort td:contains("8305")').parents("tr").show();
	  }		  
	   else if ((SCFH > 5000 && SCFH <= 10000) && ($("#major_minor option:selected" ).val() === "O2_AR") ) {
		$('#flowrate_sort td:contains("6305")').parents("tr").show();
		$('#flowrate_sort td:contains("8305")').parents("tr").show();	
	  }		  
	  //SCFH > 10000 && SCFH <= 20000	
	   else if ((SCFH > 10000 && SCFH <= 20000) && ($("#major_minor option:selected" ).val() === "HE_AR") ) {
		$('#flowrate_sort td:contains("6405")').parents("tr").show();
		$('#flowrate_sort td:contains("8405")').parents("tr").show();
	  }		  
	   else if ((SCFH > 10000 && SCFH <= 20000) && ($("#major_minor option:selected" ).val() === "CO_2_AR") ) {
		$('#flowrate_sort td:contains("6405")').parents("tr").show();
		$('#flowrate_sort td:contains("8405")').parents("tr").show();
	  }		  
	   else if ((SCFH > 10000 && SCFH <= 20000) && ($("#major_minor option:selected" ).val() === "O2_AR") ) {
		$('#flowrate_sort td:contains("6405")').parents("tr").show();
		$('#flowrate_sort td:contains("8405")').parents("tr").show();	
	  }	
	  else {
	    $('.table-wrap-calc').hide();
		$('#no-matches').show();
		$('#required_SCFH').hide();
	  }	
	  //Remove unwanted gas ranges, for 2 gas mixer results
	  if (($("#major_minor option:selected" ).val() === "HE_AR")) {
	    $('.CO2-AR').hide();
		$('.O2-AR').hide();
	  }
	  if (($("#major_minor option:selected" ).val() === "CO_2_AR")) {
	    $('.HE-AR').hide();
		$('.O2-AR').hide();
	  }	  
	  if (($("#major_minor option:selected" ).val() === "O2_AR")) {
	    $('.HE-AR').hide();
	    $('.CO2-AR').hide();
	  }	

	  //if no results qualify  
	    $('#required_SCFH').empty();	
		
		$('#required_SCFH').append("<b>Your required SCFH is "+SCFH+":</b>");
		
		
	
		$("tr:visible:even").addClass("even");
		$("tr:visible:odd").addClass("odd");
	  
		return false;
		},
        errorLabelContainer: ".error-notes",
        wrapper: "li"
       
    });
	$("#stations:input, #flow_rate:input, #duty_cycle:input, #safty_margin:input").tooltip({
 
	 	
      // place tooltip on the right edge
      position: "center right",
 
      // a little tweaking of the position
      offset: [20, 10],
 
      // use the built-in fadeIn/fadeOut effect
      effect: "fade",
 
      // custom opacity setting
      opacity: 1.0
 
      });


   
});
</script>
	
	
	
	
	
	
	
	
	
	
	
	
	



</body>
</html> 