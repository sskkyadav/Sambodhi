<?php

// Real Estate Meta Data
function realestate_agent_custom_meta_your_properties() {
    add_meta_box( 
    	'bn_meta', __( 'Properties Meta Feilds', 'realestate-agent' ), 
    	'realestate_agent_meta_callback_your_properties', 
    	'post', 
    	'normal',
    	'high'
    );
}

/* Hook things in for admin*/
if (is_admin()){
  add_action('admin_menu', 'realestate_agent_custom_meta_your_properties');
}

function realestate_agent_meta_callback_your_properties( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'realestate_agent_meta_nonce_your_properties' );
    $bn_stored_meta = get_post_meta( $post->ID );
    $your_properties_count = get_post_meta( $post->ID, 'realestate_agent_your_properties_count', true );
    ?>
    <div id="your_properties_meta">
        <table id="list">
            <tbody id="the-list" data-wp-lists="list:meta">
                <tr id="meta-8">
                    <td class="left">
                        <?php esc_html_e( 'Properties Count', 'realestate-agent' )?>
                    </td>
                    <td class="left">
                        <input type="text" name="realestate_agent_your_properties_count" id="realestate_agent_your_properties_count" value="<?php echo esc_attr($your_properties_count); ?>" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}

/* Saves the custom meta input */
function realestate_agent_meta_save_your_properties( $post_id ) {
    if (!isset($_POST['realestate_agent_meta_nonce_your_properties']) || !wp_verify_nonce( strip_tags( wp_unslash( $_POST['realestate_agent_meta_nonce_your_properties']) ), basename(__FILE__))) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Save Package Amount
    if( isset( $_POST[ 'realestate_agent_your_properties_count' ] ) ) {
        update_post_meta( $post_id, 'realestate_agent_your_properties_count', strip_tags( wp_unslash( $_POST[ 'realestate_agent_your_properties_count' ]) ) );
    }
}
add_action( 'save_post', 'realestate_agent_meta_save_your_properties' );