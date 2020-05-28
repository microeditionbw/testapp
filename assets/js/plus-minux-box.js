window.initPlusMinusBox = function () {
    /*----------------------------
    	Cart Plus Minus Button
    ------------------------------ */
    var CartPlusMinus = $('.cart-plus-minus');
    CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
    CartPlusMinus.append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function () {
        var newVal;
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() === "+") {
             newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
        $.ajax({
            url: '/cart/ChangeCount',
            data: {
                id: $button.parent().parent().parent().find(".product-name").text(),
                count: newVal
            },
            type: "post",
            success: function(response){
                console.log(response);
                $button.parent().parent().parent().find(".product-subtotal").html('$' + response);
            }
          }); 
    });
};

(function ($) {
    initPlusMinusBox();
})(jQuery);
