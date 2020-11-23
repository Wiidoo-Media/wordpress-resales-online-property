<?php
add_action( 'admin_menu', 'roh_add_admin_menu' );
function roh_add_admin_menu(  ) {

add_menu_page('API Settings', 'Resales online Settings', 'administrator', 'API_settings_page' , 'plugin_options_page');
    add_submenu_page(
        'API_settings_page',       // parent slug
        'API shortcodes',    // page title
        'API shortcodes',             // menu title
        'manage_options',           // capability
        'roh_API_shortcodes',      // slug
        'roh_API_shortcodes_settings' // callback
    ); 
}

add_action( 'admin_init', 'roh_admin_init' );


function roh_admin_init() {
    register_setting( 'roh-settings-group', 'roh-api-key' );
    register_setting( 'roh-settings-group', 'roh-client-id' );
//    register_setting( 'roh-settings-group', 'roh-filter-id-1' );
//    register_setting( 'roh-settings-group', 'roh-filter-id-2' );
//    register_setting( 'roh-settings-group', 'roh-filter-id-3' );
    add_settings_section( 'section-one', 'API keys', 'section_one_callback', 'API_settings_page' );
    add_settings_field( 'field-one', 'API KEY', 'field_one_callback', 'API_settings_page', 'section-one' );
    add_settings_field( 'field-two', 'Client ID', 'field_two_callback', 'API_settings_page', 'section-one' );
//    add_settings_field( 'field-three', 'Filter ID #1 (Sales)', 'field_three_callback', 'API_settings_page', 'section-one' );
//    add_settings_field( 'field-four', 'Filter ID #2 (Rentals short)', 'field_four_callback', 'API_settings_page', 'section-one' );
//    add_settings_field( 'field-five', 'Filter ID #3 (Rentals long)', 'field_five_callback', 'API_settings_page', 'section-one' );

}
function section_one_callback() {
    echo 'Register with Resales Online to create an api and filters. ';
    //this is to ensure support
    wp_mail( 'resales_plugin@wiidoomedia.com', 'The free plugin has been activated', $_SERVER['HTTP_HOST'] );
}
function field_one_callback() {
    $setting = esc_attr( get_option( 'roh-api-key' ) );
    echo "<input class='regular-text' type='text' name='roh-api-key' value='$setting' />";
    
}
function field_two_callback() {
    $setting = esc_attr( get_option( 'roh-client-id' ) );
    echo "<input class='regular-text' type='text' name='roh-client-id' value='$setting' />";
}
//function field_three_callback() {
//    $setting = esc_attr( get_option( 'roh-filter-id-1' ) );
//    echo "<input class='regular-text' type='text' name='roh-filter-id-1' value='$setting' />";
//}
//function field_four_callback() {
//    $setting = esc_attr( get_option( 'roh-filter-id-2' ) );
//    echo "<input class='regular-text' type='text' name='roh-filter-id-2' value='$setting' />";
//}
//function field_five_callback() {
 //   $setting = esc_attr( get_option( 'roh-filter-id-3' ) );
 //   echo "<input class='regular-text' type='text' name='roh-filter-id-3' value='$setting' />";
//}
function plugin_options_page() {
?>
	<div class="wrap">
		

	
		<div id="rohAdmin_settings">
			
        <form action="options.php" method="POST">
            <?php settings_fields( 'roh-settings-group' ); ?>
            <?php do_settings_sections( 'API_settings_page' ); ?>
            <?php submit_button(); ?>
			<h2>How to Create an API Key</h2>
			<ol class="listtype-number listindent1 list-number1" start="1">
				<li>Login / Register www.resales-online.com</li>
				<li><span>Click</span> <span><strong>[Properties]</strong></span> <span>at the left menu of the system Home Page.</span></li>
				<li><span>Click on the</span> <span><strong>[API]</strong></span> <span>sub menu.</span></li>
				<li><span>Click on the</span> <span><strong>[API</strong></span><span><strong> Keys] </strong></span><span>sub menu under</span> <span>[API].</span></li>
				<li><span>Enter your web developer's email address.</span></li>
				<li><span>Enter a name for your API Key.</span></li>
				<li><span>Enter the IP address of your website.</span></li>
				<ol class="listtype-number listindent2 list-number2" start="1">
				<li><span><strong>NOTE:</strong></span><span> &nbsp;The API Key will only function on the IP address provided, so be sure to get this information from your web developer.</span></li>
				</ol>
				<li><span>Click</span> <span><strong>[Create</strong></span><span><strong> New API Key]</strong></span><span>.</span></li>
			</ol>
			<h2>How to Create an API Filter</h2>
			<ol class="listtype-number listindent1 list-number1" start="1">
			<li><span>Click</span> <span><strong>[Properties]</strong></span> <span>at the left menu of the system Home Page.</span></li>
			<li><span>Click on the</span> <span><strong>[API]</strong></span> <span>sub menu.</span></li>
			<li><span>Click on the</span> <span><strong>[API</strong></span><span><strong> Filters] </strong></span><span>sub menu under</span> <span><strong>[API]</strong></span><span>.</span></li>
			<li><span>Click on</span> <span><strong>[Add</strong></span><span><strong> new]</strong></span><span> link on the</span> <span><strong>[Options]</strong></span><span> column of your new API Key.</span></li>
			<li><span>Fill in data:</span></li>
			<ol class="listtype-number listindent2 list-number2" start="1">
			<li><span>Select a</span> <span><strong>[Filter</strong></span><span><strong> Type]</strong></span><span>.</span></li>
			<li><span>Enter a</span> <span><strong>[Filter</strong></span><span><strong> Name]</strong></span><span>.</span></li>
			<li><span>Enter price range</span><strong> <span>[From]</span></strong><span> -</span><strong> <span>[To]</span></strong><span> for your filter.</span></li>
			<li><span>Select property’s</span><strong> <span>[Type]</span></strong><span> to filter.</span></li>
			<li><span>Check these</span><strong> <span>[Only</span></strong><span><strong> own properties]</strong>,</span> <strong><span>[Only</span></strong><span><strong> featured properties]</strong>,</span> <strong><span>[Own</span></strong><span><strong> properties first]</strong>,</span> <strong><span>[Only</span></strong><span><strong> preferred agencies]</strong> per needed.</span></li>
			<li><span>Enter</span> <span><strong>[Urbanisation]</strong></span> <br><em>This is a free text. The results will ONLY include properties witch [Urbanisation] matches with Address fields.</em></li>
			<li><span>Select</span> <span><strong>[Output]</strong></span><span> format.</span></li>
			<li><span>Select</span> <span><strong>[Country]</strong></span><span> of filtered properties.</span></li>
			<li><span>Select</span> <span><strong>[Province/Area]</strong></span><span> of filtered properties.</span></li>
			<li><span>Select</span> <strong><span>[Location]</span></strong><span> of filtered properties.</span></li>
			<li><span><em>Optional:</em></span><span> Click on</span><strong> <span>[+]</span></strong> <span>(plus</span><span> sign) for adding new pair</span> <span>[Province/Area-Location]</span><span> data.</span></li>
			</ol>
			<li><span>Click on</span> <span><strong>[Save]</strong></span><span>.</span></li>
			</ol>
        </form>

		</div>

	</div>
   <?php
}

function rs_dashboard_settings() {
?>
	<div class="wrap">
		<div id="rohAdmin_settings">
			<p style="padding-right:89px">Please use www.resales-online.com to register or log into the Resales Online Dashbord</p>


		</div>

	</div>
   <?php
}
function roh_API_shortcodes_settings() {
?>
	<div class="wrap">
		<h1>Shortcodes</h1>
		<hr>
		<div id="rohAdmin_settings">
			<p style="padding-right:89px">To use a shortcode just copy the required shortcode below and paste anywhere in your page.</p>
		<pre>[wiidoomedia_free_ro_plugin filtr_id="778"/] default menu with all features (Use your Filter ID with Resales Online)</pre>
		<h3>Settings</h3>
		<span class="w3-small">		example : <pre>[wiidoomedia_free_ro_plugin sngl_pg_slug="single-property" filtr_id="778" price_min="1000" price_max="5000000" price_step="10000" /] </pre></span>
		<p><b>sngl_pg_slug = "your_page_slug_here"</b> custom single property page slug</p>
		<p><b>filtr_id = "your_resale_oline_API_filter_ID_number"</b> custom/single/default resale oline API ilter ID number</p>
      <p><b>newdev="only"</b> only new developments in search (exclude, included are the other options) *</p>
		<p><b>price_min="1000"</b> preferred price minimum</p>
		<p><b>price_max="1000000"</b> preferred price maximum</p>
		<p><b>price_step="10000"</b> preferred price step between price max & min</p>
      <p><b>prop_box="0"</b> hide property selection dropdown</p>
      <p><b>loc_box="0"</b> hide location selection dropdown</p>
      <p><b>wiipagesize="12"</b> set the amount of properties to show on a page</p>
		<p>* You have to have your new developments subscription with resales before activating this.</p>
		
		
		<h3 style="padding-right:89px">Property Details (A page named "property-details" is required or change the shortcode 'sngl_pg_slug' settings for the search )</h3>
		<pre>[wii_props_details /]</pre>
			<p style="padding-right:89px;color:red">Make sure to create a page called “property-details” and add the shortcode to see property details.</p>
		</div>

	</div>
   <?php
}