       <!-- shopping-cart-area start -->
       <div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <h3 class="page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Until Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php if($products) : foreach($products as $product): ?>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="/assets/img/basket/cart-3.jpg" alt=""></a>
                                        </td>
                                        <td class="product-name"><a href="#"><?= $product['id'] ?></a></td>
                                        <td class="product-price-cart"><span class="amount">$<?= $product['price'] ?></span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="<?= $product['count'] ?>">
                                            </div>
                                        </td>
                                        <td class="product-subtotal">$<?= intval($product['price']) * intval($product['count']) ?></td>
                                        <td class="product-remove"><a href="#"><i class="ti-trash"></i></a></td>
                                    </tr>
<?php endforeach; endif;?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="#">Оформить заказ</a>
                                            <button>Обновить</button>
                                        </div>
                                        <div class="cart-clear">
                                            <a href="/cart/clear">Очистить корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>