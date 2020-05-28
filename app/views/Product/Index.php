
<div class="shop-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    Чтобы добавить несколько товаров используйте ссылки с другим id, например:<br/><hr/>
<a href="/product/index/1">Продукт 1</a>
<a href="/product/index/2">Продукт 2</a>
<a href="/product/index/3">Продукт 3</a>
<a href="/product/index/4">Продукт 4</a>
<hr/>
Текущий id товара: <? echo $id; ?><br/><hr/>
т.к. мы не используем базу, и нет панели администратора
для добавления товаров, то все данные генерируются на этой странице.
Вы можете указать другую стоимость товара тут
<input type="text" id="newPrice" value="20.00">
                        <div class="product-details-img">
                            <img src="/assets/img/product-details/l1.jpg"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-content">
                            <h2>Dog Calcium Food</h2>

                            <div class="product-price">
                                <span class="new">$20.00 </span>
                                <span class="old">$50.00</span>
                            </div>
                            <div class="in-stock">
                                <span><i class="ion-android-checkbox-outline"></i> In Stock</span>
                            </div>
                            <div class="sku">
                                <span>SKU#: MS04</span>
                            </div>
                            <p>Founded in 1989, Jack & Jones is a Danish brand that offers cool, relaxed designs that express a strong visual style through their diffusion lines, Jack & Jones intelligence and Jack & Jones vintage.</p>

                            <div class="quality-wrapper mt-30 product-quantity">
                                <label>Qty:</label>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                </div>
                            </div>
                            <div class="product-list-action">
                                <div class="product-list-action-left">
                                <?php if(CartModel::productExistById($id)):?>
                                    <a class="addtocart-btn" id="<? echo $id; ?>" href="/cart/" title="Add to cart">
                                        <i class="ion-bag"></i>В корзине
                                    </a>
                                <?php else: ?>
                                <a class="addtocart-btn" id="<? echo $id; ?>" href="javascript:void(0)" title="Add to cart">
                                        <i class="ion-bag"></i>Add to cart
                                    </a>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>