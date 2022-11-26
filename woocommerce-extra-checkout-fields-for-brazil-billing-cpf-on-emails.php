function woo_display_email_order_user_meta( $order, $sent_to_admin, $plain_text ) {
 
    if ($order->billing_cpf){
        echo '<br><p> <strong>CPF DO CLIENTE: </strong>'. $order->billing_cpf.'</p>';
    } 
    if ($order->billing_cnpj){ 
        echo '<br><p> <strong>CNPJ: </strong>'. $order->billing_cnpj. '</p>';
    } 
 
}
add_action('woocommerce_email_customer_details', 'woo_display_email_order_user_meta', 30, 3 );