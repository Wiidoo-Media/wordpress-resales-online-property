<?php


add_shortcode('wiidoomedia_free_ro_plugin','wiidoomedia_free_ro_plugin');
function wiidoomedia_free_ro_plugin( $atts ) {
 	$a = shortcode_atts( array(
		'newdev' => 'include',
		'filtr_id' => '',
		'filtr_lbl' => 'Sales',
		'price_min' => 0,
		'price_max' => 50000000,
		'price_step' => 10000,
		'prop_box' => 1,
		'loc_box' => 1,
		'wiipagesize' => 12,
		'sngl_pg_slug' => 'property-details',
	), $atts );
	
	$wii_newdev = $a['newdev'];
	$wii_filtr_id = $a['filtr_id'];
	$wii_filtr_lbl = $a['filtr_lbl'];
	$wii_price_min = $a['price_min'];
	$wii_price_max = $a['price_max'];
	$wii_price_step = $a['price_step'];
	$wii_prop_box = $a['prop_box'];
	$wii_loc_box = $a['loc_box'];
	$wii_p_PageSize = $a['wiipagesize'];
	$sngl_pg_slug = $a['sngl_pg_slug'];
	
  // wp_enqueue_script('wii_jquery',plugins_url('../js/start_v2.js', __FILE__),array('jquery', 'jquery-effects-core', 'jquery-ui-core'));
  //  wp_enqueue_script( 'select2', plugin_dir_url( __FILE__ ) . '../js/select2.full.min.js');

if ($_GET["P_ApiId"]!="") {
    $deffi = $_GET["P_ApiId"];
}else{
$deffi = $wii_filtr_id;
}
if ($_GET["lang"]!="") {
    $saved_lang = $_GET["lang"];
}else{
    $saved_lang = "en";
}
if ($_GET["p_PageNo"]!="") {
    $page_no = $_GET["p_PageNo"];
}else{
    $page_no = 1;
}

//$output = '<i class="fa fa-sync fas fa-3x fa-spin"></i>';
$roh_api_key = esc_attr( get_option( 'roh-api-key' ) );
$roh_client_id = esc_attr( get_option( 'roh-client-id' ) );
if ($wii_filtr_id2!=NULL) {
	$def_width = '20%';
	$wii_trig1 = 1;
	$wii_pad_loc = '8px';

}else{
	if ($wii_prop_box!=0) {
		$def_width = '25%';
	if ($wii_loc_box!=0) {
		$def_width = '25%';
	}else{
		$def_width = '33.33%';
		$wii_pad_typ = '8px 8px 8px 0px';
	}
	}else{
		$def_width = '33.33%';
	}
	$wii_pad_loc = '8px 8px 8px 0px';
	$wii_trig1 = 0;
}
if ($wii_filtr_id3!=NULL) {
	$wii_trig2 = 1;
}else{
	$wii_trig2 = 0;
}
$wiicopy = plugins_url('../images/copy.png', __FILE__);
$quetions = plugins_url('../images/quetions.png', __FILE__);
$spineer = plugins_url('../images/spineer.png', __FILE__);
$redo = plugins_url('../images/redo.png', __FILE__);
$share = plugins_url('../images/share.png', __FILE__);
$chevdown = plugins_url('../images/chevdown.png', __FILE__);
$chevup = plugins_url('../images/chevup.png', __FILE__);
$search = plugins_url('../images/search.png', __FILE__);
$chevight = plugins_url('../images/chevight.png', __FILE__);
$chevleft = plugins_url('../images/chevleft.png', __FILE__);
$ddl = plugins_url('../images/ddl.png', __FILE__);
$ddr = plugins_url('../images/ddr.png', __FILE__);
$sortit = plugins_url('../images/sortit.png', __FILE__);
$wiilist = plugins_url('../images/list.png', __FILE__);
$gridview = plugins_url('../images/gridview.png', __FILE__);
$xit = plugins_url('../images/xit.png', __FILE__);
?>




<div id="wiidoo_searcher" class="w3-row-padding" style="max-width:1200px;margin: 0px auto;margin-top:13px;background: #f4f4f4">

		
			<div class="w3-bar w3-right-align">
			<button class="w3-button w3-padding-small" title="Reset this search" onclick="WiiRest()"><img src="<?=$redo?>" style="height:24px;padding:3px;margin:1px"></button>
			<button id="filter01_but" onclick="filter0();" class="w3-button w3-padding-small" title="Share this search"><img src="<?=$share?>" style="height:24px;padding:3px;margin:1px"></button>
			</div>

	
		<div class="w3-cell-row" style="padding:3px;display: block">
			<?php
			if ($wii_trig1!=0) {
			?>
			<div class="w3-cell w3-mobile" style="padding: 0px 8px 0px 0px;width:<?=$def_width?>;min-width:<?=$def_width?>">
				<select class="w3-select p_PropertyListing" name="p_PropertyListing[]" id="p_PropertyListing" multiple="multiple" data-width="100%" data-placeholder="<?=esc_html__( 'Listing', 'resales-marbella-wp-plugin' )?>" title="<?=esc_html__( 'Start typing a Listing or click to see all', 'resales-marbella-wp-plugin' )?>">
				<option value="<?=$wii_filtr_id?>"><?=$wii_filtr_lbl?></option>
							<?php
							if ($wii_filtr_id2!=NULL) {
							?>
				<option value="<?=$wii_filtr_id2?>"><?=$wii_filtr_lbl2?></option>
							<?php
							}
							if ($wii_filtr_id3!=NULL) {
							?>
				<option value="<?=$wii_filtr_id3?>"><?=$wii_filtr_lbl3?></option>
							<?php
							}
							if ($wii_filtr_id4!=NULL) {
							?>
				<option value="<?=$wii_filtr_id4?>"><?=$wii_filtr_lbl4?></option>
							<?php
							}
							?>
			  </select>
			</div>
			<?php
			}
						
							if ($wii_loc_box!=0) {
							?>
			
			<div class="w3-cell w3-mobile" style="padding:<?=$wii_pad_loc?>;width:<?=$def_width?>;min-width:<?=$def_width?>">
				<select class="w3-select plocs" id="plocs" name="plocs[]" multiple="multiple" data-width="100%" data-placeholder="<?=esc_html__( 'Location', 'resales-marbella-wp-plugin' )?>" title="<?=esc_html__( 'Start typing a Location or click to see all', 'resales-marbella-wp-plugin' )?>">
				<option value="1">Connecting API</option>
			  </select>

			</div>

							<?php
							}
							if ($wii_prop_box!=0) {
							?>
			<div class="w3-cell w3-mobile" style="padding-right:8px;width:<?=$def_width?>;min-width:<?=$def_width?>">
				<select class="w3-select ptypi" name="ptypei[]" multiple="multiple" id="p_PropertyTypes" data-width="100%" data-placeholder="<?=esc_html__( 'Property Types', 'resales-marbella-wp-plugin' )?>" title="<?=esc_html__( 'Start typing a Property type or click to see all', 'resales-marbella-wp-plugin' )?>">
				<option value="1">Connecting API</option>
			  </select>
			</div>
							<?php
							}
							?>

			<div id="001alpha"  class="w3-cell w3-mobile" style="padding:8px 8px 0px 0px;width:<?=$def_width?>;min-width:<?=$def_width?>">
					<select class="w3-select alt_select" name="beds2" id="beds2" data-width="100%" title="Select minimum bedrooms needed">
					<option value=""><?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>	
					<option value="0"><?=esc_html__( 'Studio', 'resales-marbella-wp-plugin' )?></option>	
					<option value="1">1 <?=esc_html__( 'Bedroom', 'resales-marbella-wp-plugin' )?></option>
					<option value="2">2 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="3">3 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="4">4 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="5">5 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="6">6 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="7">7 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="8">8 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="9">9 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="10">10 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="11">11 Bedroom</option>
					<option value="12">12 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="13">13 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="14">14 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="15">15 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="16">16 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="17">17 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="18">18 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="19">19 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
					<option value="20">20 <?=esc_html__( 'Bedrooms', 'resales-marbella-wp-plugin' )?></option>
				  </select>

			</div>
			<div class="w3-cell w3-mobile" style="padding: 8px 8px 8px 0px;width:<?=$def_width?>;min-width:<?=$def_width?>">

					<div class="w3-row">
						<div id="pri_min_select" class="w3-col s6">
								<?php
								echo '<select class="w3-select alt_select" name="price2_min" id="price2_min" data-width="100%" title="Select your price minimum">
							<option value="">'.esc_html__( 'Price Min', 'resales-marbella-wp-plugin' ).'</option>';
								$from = $wii_price_min;
								$to = $wii_price_max;
								$increment = $wii_price_step;
								for($i = $from; $i<=$to; $i+=$increment){
									echo '<option value="'.$i.'" class="l2">&euro;'.number_format($i).'</option>';
								}

								echo '</select>';
								?>
						  
						</div>
						<div class="w3-col s6">
								<?php
								echo '<select class="w3-select alt_select" name="price2_max" id="price2_max" data-width="100%">
							<option value="">'.esc_html__( 'Price Max', 'resales-marbella-wp-plugin' ).'</option>';
								$from = $wii_price_min;
								$to = $wii_price_max;
								$increment = $wii_price_step;
								for($i = $from; $i<=$to; $i+=$increment){
									echo '<option value="'.$i.'" class="l2">&euro;'.number_format($i).'</option>';
								}

								echo '</select>';
								?>
						  
						</div>
					</div>

			</div>
		</div>
		
		
		
		


<div class="w3-row" style="padding-left:3px;padding-right:3px;margin-bottom:13px;display: block;">
			<div class="w3-col s12 m12 l6">
				<button class="w3-button wii-ref w3-small w3-padding-small" style="border: 1px solid #939393;background-color: white;color:#707070"> <?=esc_html__( 'Resales Ref', 'resales-marbella-wp-plugin' )?>#</button>
			</div>
	
			<div class="w3-col s12 m12 l6">
				<button id="search_but" onclick="show__rohresults2();" class="w3-button w3-small w3-right w3-padding-small" style="background-color: #8f8f8f;color:white;margin-top:3px"><img src="<?=$search?>" style="height:21px;margin-top:1px;"> <?=esc_html__( 'Search', 'resales-marbella-wp-plugin' )?> ( <span id="PropertyCount_view" style="font-weight:bold"><img id="wii-spinner" class="w3-spin" src="<?=$spineer?>" style="height:13px;margin-top: 8px;"></span> )</button>
			</div>
		</div>
		
</div>

<div class="w3-row w3-padding-16" style="max-width:1200px;margin: 0px auto;background: #e1e1e1">
	<div class="w3-col s12 m12 l3">
		

		<div class="w3-dropdown-click">
		<button class="w3-button sorta"><img src="<?=$sortit?>" style="height:24px;padding:3px;margin:1px"> <?=esc_html__( 'Sort by', 'resales-marbella-wp-plugin' )?></button>
		<div id="sorta_div" class="w3-dropdown-content w3-bar-block w3-border w3-small">
		  <a href="javascript:void(0)" onclick="show_list2(0)" class="w3-bar-item w3-button tooly w3-padding-small" title="Ascending"><?=esc_html__( 'Price ascending', 'resales-marbella-wp-plugin' )?></a>
		  <a href="javascript:void(0)" onclick="show_list2(1)" class="w3-bar-item w3-button w3-padding-small" title="<?=esc_html__( 'Descending', 'resales-marbella-wp-plugin' )?>"><?=esc_html__( 'Price descending', 'resales-marbella-wp-plugin' )?></a>
		  <a href="javascript:void(0)" onclick="show_list2(2)" class="w3-bar-item w3-button w3-padding-small" title="<?=esc_html__( 'Alphabetical', 'resales-marbella-wp-plugin' )?>"><?=esc_html__( 'Location', 'resales-marbella-wp-plugin' )?></a>
		  <a href="javascript:void(0)" onclick="show_list2(3)" class="w3-bar-item w3-button w3-padding-small" title="<?=esc_html__( 'Recently updated first', 'resales-marbella-wp-plugin' )?>"><?=esc_html__( 'Latest updated', 'resales-marbella-wp-plugin' )?></a>
		  <a href="javascript:void(0)" onclick="show_list2(4)" class="w3-bar-item w3-button w3-padding-small" title="<?=esc_html__( 'Oldest updated first', 'resales-marbella-wp-plugin' )?>"><?=esc_html__( 'Oldest updated', 'resales-marbella-wp-plugin' )?></a>
		  <a href="javascript:void(0)" onclick="show_list2(5)" class="w3-bar-item w3-button w3-padding-small" title="<?=esc_html__( 'Most recent first', 'resales-marbella-wp-plugin' )?>"><?=esc_html__( 'Latest listed', 'resales-marbella-wp-plugin' )?></a>
		  <a href="javascript:void(0)" onclick="show_list2(6)" class="w3-bar-item w3-button w3-padding-small" title="<?=esc_html__( 'Oldest first', 'resales-marbella-wp-plugin' )?>"><?=esc_html__( 'Oldest listed', 'resales-marbella-wp-plugin' )?></a>
		</div>
	  </div>

			  
	</div>
	<div class="w3-col s12 m12 l6">
		<div id="wii_search_head" class="w3-row-padding">
			<div class="w3-col s2 w3-center" style="padding-top:5px"><a title="<?=esc_html__( 'Previous Page', 'resales-marbella-wp-plugin' )?>" href="javascript:void(0)" class="wii-1-prev" style="font-size:21px;"><</a></div>
			<div class="w3-col s2 w3-center" style="padding-top:5px"><a title="<?=esc_html__( 'First Page', 'resales-marbella-wp-plugin' )?>"  href="javascript:void(0)" class="wii-1-first" style="font-size:21px;"><<</a></div>
			<div class="w3-col s4 w3-center">
				<select class="w3-select alt_select" name="p_PageNo" id="p_PageNo" data-width="100%" title="<?=esc_html__( 'Select a page', 'resales-marbella-wp-plugin' )?>">
				<option value="1">Page 1</option>
				<option value="1">Page 2</option>
				<option value="1">Page 3</option>
				<option value="1">Page 4</option>
				<option value="1">Page 5</option>
				<option value="1">Page 6</option>
				<option value="1">Page 7</option>
				</select>
			</div>
			<div class="w3-col s2 w3-center" style="padding-top:5px"><a title="<?=esc_html__( 'Last Page', 'resales-marbella-wp-plugin' )?>" href="javascript:void(0)" class="wii-1-last" style="font-size:21px;">>></a></div>
			<div class="w3-col s2 w3-center" style="padding-top:5px"><a title="<?=esc_html__( 'Next Page', 'resales-marbella-wp-plugin' )?>" href="javascript:void(0)" class="wii-1-next" style="font-size:21px;">></a></div>
		
		
			

			
		
		
		</div>
		</div>	
<div class="w3-col s12 m12 l3">
	<div class="w3-bar">
	 <button id="listviewgrid" class="w3-bar-item w3-button w3-right" disabled onclick="listacti(1);" style="border:none;cursor:not-allowed;"><img src="<?=$gridview?>" style="height:24px;"></button>
	  <button id="listviewpanel" class="w3-bar-item w3-button w3-right" onclick="listacti(2);" style="border:none;cursor:pointer;"><img src="<?=$wiilist?>" style="height:24px;"></button>
	</div>
</div>

</div>
<div id="roh_spinner" class="w3-row w3-center">
	<img src="/wp-content/plugins/resales-marbella-wp-master/images/loading4.gif" class="w3-image">
</div>
<div id="roh_results" class="w3-row w3-center" style="max-width:1200px;margin: 0px auto;margin-top:13px">
	
</div>
		<div id="wii_search_footer" class="w3-row-padding w3-padding-16" style="max-width:1200px;margin: 0px auto;background: #e1e1e1">
			<div class="w3-col s2" style="padding-top: 5px"><a title="<?=esc_html__( 'Previous Page', 'resales-marbella-wp-plugin' )?>" href="javascript:void(0)" class="wii-1-prev" style="font-size:21px;"><</a></div>
			<div class="w3-col s2" style="padding-top: 5px"><a title="<?=esc_html__( 'First Page', 'resales-marbella-wp-plugin' )?>" href="javascript:void(0)" class="wii-1-first" style="font-size:21px;"><<</a></div>
			<div class="w3-col s4 w3-center">
				<select class="w3-select alt_select" name="p_PageNo2" id="p_PageNo2" data-width="100%">
				<option value="1">Page 1</option>
				<option value="1">Page 2</option>
				<option value="1">Page 3</option>
				<option value="1">Page 4</option>
				<option value="1">Page 5</option>
				<option value="1">Page 6</option>
				<option value="1">Page 7</option>
				</select>
			</div>
			<div class="w3-col s2" style="padding-top: 5px"><a href="javascript:void(0)" title="<?=esc_html__( 'Last Page', 'resales-marbella-wp-plugin' )?>" class="w3-right wii-1-last" style="font-size:21px">>></a></div>
			<div class="w3-col s2" style="padding-top: 5px"><a title="<?=esc_html__( 'Next Page', 'resales-marbella-wp-plugin' )?>" href="javascript:void(0)" class="wii-1-next w3-right" style="font-size:21px;">></a></div>
		
		
			

			
		
		
		</div>
    <input type="hidden" id="roh_api_key" value="<?=$roh_api_key?>">
    <input type="hidden" id="roh_client_id" value="<?=$roh_client_id?>">
    <input type="hidden" id="saved_loc_cmd" value="<?=$wii_pref_area?>">
    <input type="hidden" id="saved_loc_cnt" value="0">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd1" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd2" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd3" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd4" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd5" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd6" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd7" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd8" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd9" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd10" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd11" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd12" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd13" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd14" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd15" value="">
    <input type="hidden" id="saved_p_MustHaveFeatures_cmd16" value="">
    <input type="hidden" id="saved_feat_cnt" value="0">
    <input type="hidden" id="saved_p_PropertyTypes_cmd" value="<?=$wii_proptypes?>">
    <input type="hidden" id="saved_type_cnt" value="0">
    <input type="hidden" id="saved_baths_cmd" value="">
    <input type="hidden" id="saved_p_SortType_cmd" value="3">
    <input type="hidden" id="saved_beds_cmd" value="">
    <input type="hidden" id="P_ApiId" value="<?=$deffi?>">
    <input type="hidden" id="QueryId_shw" value="<?=$_GET["QueryId"]?>">
    <input type="hidden" id="saved_lang" value="<?=$_GET["lang"]?>">
    <input type="hidden" id="saved_p_PageNo_cmd" value="<?=$page_no?>">
    <input type="hidden" id="saved_listview_cmd" value="1">
    <input type="hidden" id="saved_plots_cmd" value="10">
    <input type="hidden" id="saved_terra_cmd" value="0">
    <input type="hidden" id="saved_built_cmd" value="0">
    <input type="hidden" id="p_PageSize" value="<?=$wii_p_PageSize?>">
    <input type="hidden" id="p_new_devs" value="<?=$wii_newdev?>">
	<input type="hidden" id="saved_p_Min_cmd" value="<?=$wii_price_min?>">
	<input type="hidden" id="saved_p_Max_cmd" value="<?=$wii_price_max?>">
	<input type="hidden" id="sngl_pg_slug" value="<?=$sngl_pg_slug?>">
	<input type="hidden" id="prop_box" value="<?=$wii_prop_box?>">
	
	<div id="filter01" class="w3-modal">
    <div class="w3-modal-content" style="margin-top:8%;">
    <header class="w3-container w3-border">
      <span onclick="document.getElementById('filter01').style.display='none'" 
      class="w3-button w3-display-topright"><img src="<?=$xit?>" style="height:17px;padding:3px;margin:1px"></span>
      <h2 class="w3-center w3-padding"><?=esc_html__( 'Share Property Search', 'resales-marbella-wp-plugin' )?></h2>
    </header>					
      <div class="w3-container w3-padding-32">
							
	
								
	  <p class="w3-center">
		<button class="w3-button" onclick="wii_clipcopy()"><img src="<?=$wiicopy?>" style="height:24px;padding:3px;margin:1px"></button>
	  <?=esc_html__( 'Copy link for this search to clipboard', 'resales-marbella-wp-plugin' )?> <a href="https://en.wikipedia.org/wiki/Clipboard_(computing)" target="_blank" class="w3-button">
	  <img src="<?=$quetions?>" style="height:24px;padding:3px;margin:1px"></a>
	  </p>	
    <input type="text" name="wii_link2" id="wii_link2" value="link">
		  
					
				
		</div>
	  
    </div>
  </div>


        		<div id="ref_chkor" class="w3-modal">
				<div class="w3-modal-content" style="margin-top:50px;max-width: 377px">
				  <div class="w3-container w3-padding-32">
					<button class="w3-button w3-display-topright Sa_ref_off"><img src="<?=$xit?>" style="height:17px;padding:3px;margin:1px"></button>
                    <form id="prop_viewo" action="/<?=$sngl_pg_slug?>/" method="get">
					<label class=""><b><?=esc_html__( 'Reference number', 'resales-marbella-wp-plugin' )?></b></label>
					<input id="Sa_ref" name="P_RefId" class="w3-input w3-border" type="text">
                    
                    <input type="hidden" name="lang" value="<?=$saved_lang?>">
                    <input type="hidden" name="P_ApiId" value="<?=$deffi?>'">

                    </form>
					<button id="Seekor_ref" onclick="Seekor_ref();" class="w3-button w3-right" style=""><?=esc_html__( 'Search', 'resales-marbella-wp-plugin' )?></button>
					<span id="sa_ref_mess"></span><span id="ref_spin" style="display:none"><img src="<?=$spineer?>" class="w3-spin" style="height:24px;padding:3px;margin:1px"></span>
				  </div>
				</div>
			  </div>
										
										
<?php

wp_enqueue_script('jquery');
wp_enqueue_script('jquery-ui-core');
wp_enqueue_script('jquery-ui-tooltip');
wp_enqueue_script( 'select2', plugin_dir_url( __FILE__ ) . '../js/select2.full.min.js');
wp_enqueue_script( 'startpropfly3', plugin_dir_url( __FILE__ ) . '../js/custom_free.js');

}

