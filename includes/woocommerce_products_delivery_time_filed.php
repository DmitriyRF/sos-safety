<?php

 
function woocommerce_product_custom_fields()
{
    global $woocommerce, $post;

    echo '<div class="product_custom_field">';
    // Custom Product Text Field
    woocommerce_wp_select(
    	array(
    		'id' => 	'_sos_product_type_delivery',
    		'label' => __('Product Delivery type', 'woocommerce'),
    		'options' => array_merge( 
    			array( 
    				'none' => __('Select unit', 'woocommerce'),
    				'0' => __('Ships via freight', 'woocommerce'),
    				'1' => __('Ships via Standard Ground', 'woocommerce') 
    			) 
    		), 
    		'desc_tip' => true, 
    		'description' => __('Needed if define the type of delivery', 'woocommerce')
    	)
    );

    woocommerce_wp_select(
    	array(
    		'id' => 	'_sos_product_time_delivery',
    		'label' => __('Product Delivery time', 'woocommerce'),
    		'options' => array_merge( 
    			array( 
    				'none' => __('Select period', 'woocommerce'),
    				'0' => __('3-4 days', 'woocommerce'),
    				'1' => __('1 week', 'woocommerce'),
    				'2' => __('1-2 weeks', 'woocommerce'), 
    				'3' => __('1-3 weeks', 'woocommerce') ,
    				'4' => __('2-5 weeks', 'woocommerce'), 
    				'5' => __('3-7 weeks', 'woocommerce'), 
    				'6' => __('5-8 weeks', 'woocommerce'), 
    				'7' => __('6-9 weeks', 'woocommerce'), 
    				'8' => __('8-10 weeks', 'woocommerce'), 
    				'9' => __('9-12 weeks', 'woocommerce')
    			) 
    		), 
    		'desc_tip' => true, 
    		'description' => __('Needed if define the time of delivery', 'woocommerce')
    	)
    );

    echo '</div>';
 
}


function woocommerce_product_custom_fields_save($post_id)
{
    if( isset( $_POST['_sos_product_type_delivery'] ) ){
    	$woocommerce_custom_sos_product_type_delivery = $_POST['_sos_product_type_delivery'];
    	if (!empty($woocommerce_custom_sos_product_type_delivery) == "none")
        	update_post_meta($post_id, '_sos_product_type_delivery', $woocommerce_custom_sos_product_type_delivery);
	}

    if( isset( $_POST['_sos_product_time_delivery'] ) ){
	    $woocommerce_custom_sos_product_time_delivery = $_POST['_sos_product_time_delivery'];
	    if (!empty($woocommerce_custom_sos_product_time_delivery) == "none")
	        update_post_meta($post_id, '_sos_product_time_delivery', $woocommerce_custom_sos_product_time_delivery);
	}
}

function woocommerce_product_custom_fields_display()
{
	?><p class="shipping-time-product"><?php
    if( $i = get_post_meta(get_the_ID(), '_sos_product_type_delivery', true) ){
    	?><i class="fa fa-truck" aria-hidden="true"></i><?php
	    switch ($i)
	    {
		    case 0:
		        echo " Ships via freight ";
		        break;			    
		    case 1:
		        echo " Ships via Standard Ground";
		        break;			    
		}
    } 
    if( $j = get_post_meta(get_the_ID(), '_sos_product_time_delivery', true) ){    
    	?> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php  
	    switch ($j)
	    {
		    case 0:
		        echo " 3-4 days ";
		        break;
		    case 1:
		        echo " 1 week ";
		        break;			    
		    case 2:
		        echo " 1-2 weeks ";
		        break;			    
		    case 3:
		        echo " 1-3 weeks ";
		        break;			    
		    case 4:
		        echo " 2-5 weeks ";
		        break;			    
		    case 5:
		        echo " 3-7 weeks ";
		        break;			    
		    case 6:
		        echo " 5-8 weeks ";
		        break;			    
		    case 7:
		        echo " 6-9 weeks ";
		        break;			    
		    case 8:
		        echo " 8-10 weeks ";
		        break;			   
		    case 9:
		        echo " 9-12 weeks ";
		        break;
		}
    }
    ?></p><?php
}