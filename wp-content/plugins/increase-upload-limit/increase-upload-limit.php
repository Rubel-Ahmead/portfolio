<?php

/**
 * Plugin Name: Increase Upload Limit
 * Plugin URI: https://wordpress.org/plugins/increase-upload-limit/
 * Description: This Plugin lets you to increase the upload limit of Wordpress for LIFETIME FREE of Cost.
 * Version: 1.0
 * Author: Pavan Kumar Sadhu
 * Author URI: https://web-dev-pavan.blogspot.com/
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: increase-upload-limit
 * Tested up to: 5.8
 * Requires PHP: 5.6
 * @coypright: -2021 Code Assist (support: pavankumarsadhu08@gmail.com)

 */


function iul_increase_upload_limit_form()
{

?>

<div class="mainForm" style="   
    padding: 20px;
    margin-top: 20px;
    margin-right: 20px;display:flex;">

    <div style="width:50%;display:inline-block; background: white; padding: 20px;    vertical-align: top;" id="part1">
    <form action="options.php" method="post">

<?php

    settings_fields('increase-upload-limit-settings');
    do_settings_sections('increase-upload-limit-settings');
    submit_button('Save Changes');

?>
        </form>
</div>
<div style="width:10%;display:inline-block;vertical-align: top;" id="part2">

</div>
<div style="width:30%;display:inline-block; background: white; padding: 20px;text-align:center;vertical-align: top;" id="part3">

<p style="color: rebeccapurple;font-weight: 600;">
If you like Increase Upload Limit Plugin please leave us a ★★★★★ rating <a href="https://wordpress.org/plugins/increase-upload-limit/" target="_blank">
here
</a> . A huge thank you in advance!
</p>
<p style="color: rebeccapurple;font-weight: 600;">If you need more cool features like this, email me your requirement, will respond.</p>
<p style="color: black;font-weight: 600;">Email : <span style="color:#2271b1;text-decoration:underline;">pavankumarsadhu08@gmail.com</span> </p>
<p style="color: black;font-weight: 600;">  Website : <a href="https://web-dev-pavan.blogspot.com/" target="_blank">
Code Assist
</a> </p>

<p style="color: black;font-weight: 600;">Follow me on : <a href="https://www.linkedin.com/in/pavan-kumar-sadhu-47693818b/" target="_blank">LinkedIn</a></p>
</div>
    


    </div>

    <?php

    }

    //create menu for plugin

    function iul_register_increase_upload_limit_menu_page()
    {
    add_menu_page('Increase Upload Limit','Increase Upload Limit','manage_options','increase-upload-limit-settings','iul_increase_upload_limit_form','dashicons-sort',30);
    }
    add_action('admin_menu','iul_register_increase_upload_limit_menu_page');

    //register form fields

    function iul_display_frontend()
    {
 
        register_setting('increase-upload-limit-settings','input_upload_limit');
  
        add_settings_section('increase_upload_limit_label_section','','iul_increase_upload_limit_header','increase-upload-limit-settings');
  
        add_settings_field('input_upload_limit','Choose Upload Limit','iul_change_upload_limit','increase-upload-limit-settings','increase_upload_limit_label_section');

    }
    add_action('admin_init','iul_display_frontend');

    //welcome header

    function iul_increase_upload_limit_header()
    {
        echo '<h1 style="text-align:left;  ">Welcome to the Increase Upload Limit Plugin</h1>';
    }
   
   //store user selected value and update it
    function iul_change_upload_limit()
    {
        $upload_limit=get_option('input_upload_limit');
    ?>
  
    <select id="input_upload_limit" name="input_upload_limit">
    <option  value="64">64MB</option>
    <option  value="128">128MB</option>
    <option  value="500">500MB</option>
    <option  value="1000">1GB</option>
    <option  value="2000">2GB</option>
    <option  value="5000">5GB</option>
    <option  value="10000">10GB</option>
    <option  value="100000">100GB</option>
    <option  value="1000000">1000GB</option>
    </select>


    <?php

   if(isset($upload_limit))
   {
    
   ?>
   <script>
   document.getElementById("input_upload_limit").value="<?php echo isset($upload_limit) ? esc_html($upload_limit) : '64'; ?>";
   </script>
  <?php
   }


   }
    

   
   add_filter( 'upload_size_limit', 'iul_increase_upload_size_limit',20 );
    
   function iul_increase_upload_size_limit( $size ) {
       

    $size =  1024*1024 *(int) get_option('input_upload_limit');

      
        return $size;
    }