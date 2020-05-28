(function ($) {
    $('.cart-main-area .ti-trash').click(function(){
        const Product = $(this);
        $.ajax({
            url: '/cart/DeleteProductById',
            data: {
                id: $(this).parent().parent().parent().find(".product-name").text()
            },
            type: "post",
            success: function(response){
                if(response=='removed')
                {
                   Product.parent().parent().parent().remove();
                }
            }
          }); 
        return false;
    });

$('.cart-clear a').click(function ()
{
    $.ajax({
        url: '/cart/clear',
        type: "post",
        success: function(response){
            location.reload();
        }
      }); 
});

$("#newPrice").on("change", function() {
    $('.product-price .new').html("$"  + $(this).val());    
 });

$('.addtocart-btn').click(function(){
    $.ajax({
        url: '/cart/add',
        type: "post",
        data: { 
            id: $('.addtocart-btn').attr('id'), 
            price: $('.product-price .new').text().substr(1), 
            count: $('input[name=qtybutton]').val()
          },
        success: function(response){
            if(response == 'ok')
            {
                $('.addtocart-btn').attr("href", "/cart/");
                $('.addtocart-btn').first().after("").html("В корзине");
            }
        }
      });
});
    
})(jQuery);
