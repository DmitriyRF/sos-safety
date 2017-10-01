<?php

 
function woocommerce_product_custom_fields()
{
    global $woocommerce, $post;

    echo '<div class="product_custom_field">';
    // Custom Product Text Field
    woocommerce_wp_text_input(
        array(
            'id' => '_custom_product_text_field',
            'placeholder' => 'Custom Product Text Field',
            'label' => __('Custom Product Text Field', 'woocommerce'),
            'desc_tip' => 'true'
        )
    );
    //Custom Product Number Field
    woocommerce_wp_text_input(
        array(
            'id' => '_custom_product_number_field',
            'placeholder' => 'Custom Product Number Field',
            'label' => __('Custom Product Number Field', 'woocommerce'),
            'type' => 'number',
            'custom_attributes' => array(
                'step' => 'any',
                'min' => '0'
            )
        )
    );
    //Custom Product  Textarea
    woocommerce_wp_textarea_input(
        array(
            'id' => '_custom_product_textarea',
            'placeholder' => 'Custom Product Textarea',
            'label' => __('Custom Product Textarea', 'woocommerce')
        )
    );
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
    	if (!empty($woocommerce_custom_sos_product_type_delivery) = "none")
        	update_post_meta($post_id, '_sos_product_type_delivery', $woocommerce_custom_sos_product_type_delivery);
	}
	
    if( isset( $_POST['_sos_product_type_delivery'] ) ){
	    $woocommerce_custom_sos_product_time_delivery = $_POST['_sos_product_time_delivery'];
	    if (!empty($woocommerce_custom_sos_product_time_delivery) = "none")
	        update_post_meta($post_id, '_sos_product_time_delivery', $woocommerce_custom_sos_product_time_delivery);
	}
}