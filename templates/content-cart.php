<?php do_action( 'woocommerce_before_cart' ); ?>
<!-- cart section end -->
<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
                    <div class="cart-table">
                        <h3>Your Cart</h3>
                        <div class="cart-table-warp">
                            <table>
                            <thead>
                                <tr>
                                    <th class="product-th">Product</th>
                                    <th class="quy-th">Quantity</th>
                                    <th class="size-th">Size</th>
                                    <th class="total-th">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                                $_product   = $cart_item['data'];
                                $product_id = $cart_item['product_id'];   
                                
                                echo "<pre>";
                                //print_r($_product);
                                echo "</pre>";
                                

                                if( $_product->is_type( 'simple' ) ){
                                    // No variations to product 
                                } elseif( $_product->is_type( 'variable' ) ){
                                   echo" Product has variations";
                                }

                                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                    $product_permalink = $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '';
                            ?>
                                <tr>
                                    <td class="product-col">
                                        <?php
                                        $thumbnail = $_product->get_image();

                                        if ( ! $product_permalink ) {
                                            echo $thumbnail; // PHPCS: XSS ok.
                                        } else {
                                            printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                                        }
                                        ?>
                                        <!-- <img src="img/cart/1.jpg" alt=""> -->
                                        <div class="pc-title">
                                        <?php
                                            if ( ! $product_permalink ) {
                                                echo "<h4>".wp_kses_post( $_product->get_name() . '&nbsp;' )."</h4>";
                                            } else {
                                                echo wp_kses_post( sprintf( '<a href="%s"><h4>%s</h4></a>', esc_url( $product_permalink ), $_product->get_name() ) );
                                            }

                                            do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                                            // Meta data.
                                            echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                                            // Backorder notification.
                                            if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                                echo wp_kses_post( '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>' );
                                            }
                                        ?>                                            
                                            <p>
                                                <?php
                                                    echo WC()->cart->get_product_price( $_product ); // PHPCS: XSS ok.
                                                ?>
                                            </p>
                                        </div>
                                    </td>
                                    <td class="quy-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="size-col"><h4>Size M</h4></td>
                                    <td class="total-col">
                                        <h4>
                                            <?php
                                                echo WC()->cart->get_product_price( $_product ); // PHPCS: XSS ok.
                                            ?>
                                        </h4>
                                    </td>
                                </tr>    
                            <?php } } ?>                           
                            </tbody>
                        </table>
                        </div>
                        <div class="total-cost">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <button type="submit" class="btn btn-light" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>">Update cart</button>
                                </div>
                                <div class="col-md-6">
                                    <h6>Total 
                                        <span>
                                            <?php echo WC()->cart->get_cart_total( $_product, $cart_item['quantity'] ); ?>
                                        </span>
                                    </h6>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 card-right">
                
                <form class="woocommerce-cart-form promo-code-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">                    
                    <input type="text" placeholder="Enter promo code">
                    <button type="submit">Submit</button>
                </form>
                <a href="" class="site-btn">Proceed to checkout</a>
                <a href="" class="site-btn sb-dark">Continue shopping</a>
            </div>
        </div>
    </div>
</section>
<!-- cart section end -->