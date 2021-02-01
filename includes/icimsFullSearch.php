<?php

add_shortcode('icims_full_search','icims_jobs_search_full');

function icims_jobs_search_full(){
 
	ob_start(); ?>

	<form accept-charset="utf-8" id="searchForm" name="searchForm" action="https://careers-avantus.icims.com/jobs/search?in_iframe=1&amp;hashed=-435653955" onsubmit="return VerifySearchParameters();" target="_blank" style="margin:auto; max-width:100%">
<input type="hidden" name="ss" value="1">
<input type="hidden" name="in_iframe" value="1">
<div class="iCIMS_JobSearchTable">
<div id="search_core_mobile_container_no_show">
<div id="advanced_search_filters_mobile_modal_no_show">
<div class="input-group">
<label for="jsb_f_keywords_i"></label>
<div class="form-group has-feedback">
<input type="text" id="jsb_f_keywords_i" class="form-control Field_SearchKeywords iCIMS_RoundedInput" name="searchKeyword" maxlength="100" value="" placeholder=" Start your job search here"><input type="submit" id="jsb_form_submit_i" class="iCIMS_PrimaryButton" value="Search" target="_blank">
<span class="form-control-feedback glyphicons glyphicons-search" aria-hidden="true"></span>
</div>
</div>
 
<div class="" id="searchFormAdvancedFilters">
<div class="iCIMS_Table">
<div class="iCIMS_TableRow">
<div class="iCIMS_InfoData iCIMS_InfoData_JobSearch iCIMS_TableCell">
<label for="jsb_f_position_s" id="jsb_f_position_label">
Category
</label>
<select id="jsb_f_position_s" class="Field_SearchMultiSelect" name="searchCategory">
<option value="" selected="selected">
(All)
</option>
<option value="8713">Accounting/Budget/Finance</option>
<option value="24471">Acquisition/Contracting</option>
<option value="8718">Administrative Support</option>
<option value="39750">Asset Management</option>
<option value="24470">Business Development</option>
<option value="24469">Consulting/Strategy</option>
<option value="38799">Data Analytics</option>
<option value="24468">Facilities and Engineering</option>
<option value="8730">Information Technology</option>
<option value="8739">Management/Executive</option>
<option value="24467">Operations</option>
<option value="2140">Other</option>
<option value="24465">Program/Mission Support</option>
<option value="24466">Project/Program Management</option>
<option value="24464">Protective Services</option>
<option value="37932">Public Affairs</option>
<option value="24472">Subject Matter Expert</option>
<option value="43369">Technical Writing</option>
</select>
</div>
<div class="iCIMS_InfoData iCIMS_InfoData_JobSearch iCIMS_TableCell">
<label for="jsb_f_location_s" id="jsb_f_location_label">
Location
</label>
<select id="jsb_f_location_s" class="Field_SearchMultiSelect" onchange="icimsLocationChange(this)" name="searchLocation">
<option value="" selected="selected">
(All)
</option>
<option value="currentLocation">(Current Location)</option>
<option value="12781--">US</option>
<option value="12781--CONUS">US-CONUS</option>
<option value="12781-12782-Huntsville,">US-AL-Huntsville,</option>
<option value="12781-12784-San Luis">US-AZ-San Luis</option>
<option value="12781-12784-Yuma">US-AZ-Yuma</option>
<option value="12781-12789-">US-CA</option>
<option value="12781-12789-Beale AFB">US-CA-Beale AFB</option>
<option value="12781-12789-Laguna Niguel">US-CA-Laguna Niguel</option>
<option value="12781-12790-Colorado Springs">US-CO-Colorado Springs</option>
<option value="12781-12790-Schriever AFB">US-CO-Schriever AFB</option>
<option value="12781-12832-Washington">US-DC-Washington</option>
<option value="12781-12793-Hurlbert Field">US-FL-Hurlbert Field</option>
<option value="12781-12793-Melbourne">US-FL-Melbourne</option>
<option value="12781-12795-Ft. Shafter">US-HI-Ft. Shafter</option>
<option value="12781-12798-Indianapolis">US-IN-Indianapolis</option>
<option value="12781-12804-Annapolis Junction">US-MD-Annapolis Junction</option>
<option value="12781-12804-Bethesda">US-MD-Bethesda</option>
<option value="12781-12804-Fort Meade">US-MD-Fort Meade</option>
<option value="12781-12804-Ft. Meade">US-MD-Ft. Meade</option>
<option value="12781-12804-Silver Spring">US-MD-Silver Spring</option>
<option value="12781-12811-Omaha">US-NE-Omaha</option>
<option value="12781-12819-Wright-Patterson AFB">US-OH-Wright-Patterson AFB</option>
<option value="12781-12827-El Paso">US-TX-El Paso</option>
<option value="12781-12827-Euless">US-TX-Euless</option>
<option value="12781-12827-McAllen">US-TX-McAllen</option>
<option value="12781-12827-Zapata">US-TX-Zapata</option>
<option value="12781-12830-">US-VA</option>
<option value="12781-12830-Alexandria">US-VA-Alexandria</option>
<option value="12781-12830-Arlington">US-VA-Arlington</option>
<option value="12781-12830-Arlington (Crystal City)">US-VA-Arlington (Crystal City)</option>
<option value="12781-12830-Ashburn">US-VA-Ashburn</option>
<option value="12781-12830-Chantilly">US-VA-Chantilly</option>
<option value="12781-12830-Falls Church">US-VA-Falls Church</option>
<option value="12781-12830-Fort Belvoir">US-VA-Fort Belvoir</option>
<option value="12781-12830-Ft. Eustis">US-VA-Ft. Eustis</option>
<option value="12781-12830-Herndon">US-VA-Herndon</option>
<option value="12781-12830-McLean">US-VA-McLean</option>
<option value="12781-12830-Quantico">US-VA-Quantico</option>
<option value="12781-12830-Reston">US-VA-Reston</option>
<option value="12781-12830-Springfield">US-VA-Springfield</option>
<option value="12781-12829-Swanton">US-VT-Swanton</option>
<option value="12781-12833-Clarksburg">US-WV-Clarksburg</option>
</select>
<input type="hidden" id="lat" name="latitude" value="">
<input type="hidden" id="lon" name="longitude" value="">
</div>
<div class="iCIMS_InfoData iCIMS_InfoData_JobSearch iCIMS_TableCell">
<div class="iCIMS_Zip_Code_Block iCIMS_ZipRadiusBlock">
<label for="jsb_f_zipcode_i">
Zip Code
</label>
<input type="text" id="jsb_f_zipcode_i" name="searchZip" class="iCIMS_RoundedInput form-control" value="">
</div>
</div>
<div class="iCIMS_InfoField_JobSearch_Zip iCIMS_TableCell">
<div class="iCIMS_Radius_Block iCIMS_ZipRadiusBlock">
<div class="iCIMS_InfoData iCIMS_Radius_Input">
<label for="jsb_f_zipradius_s">
Find jobs within
(miles)
</label>
<select id="jsb_f_zipradius_s" name="searchRadius" class="iCIMS_RoundedInput">
<option value="5">5</option>
<option value="10">10</option>
<option value="15">15</option>
<option value="20" selected="selected">20</option>
<option value="25">25</option>
<option value="35">35</option>
<option value="50">50</option>
<option value="75">75</option>
<option value="100">100</option>
<option value="150">150</option>
<option value="200">200</option>
</select>
</div>
</div>
</div>
</div>
</div>
</div><!--
<div class="iCIMS_Table iCIMS_Search_Action_Container">
<div class="iCIMS_TableRow">
<div class="iCIMS_InfoData iCIMS_InfoData_JobSearch iCIMS_TableCell iCIMS_JobSearchSubmitBtn_Mobile">
<input type="submit" id="jsb_form_submit_i_mobile" class="iCIMS_PrimaryButton" value="Search">
</div>
</div>
</div>-->
</div>
</div>
</div>
</form> <?php

	$returnFullJobString = ob_get_contents();
	ob_end_clean();
	return $returnFullJobString;
		
}

?>
