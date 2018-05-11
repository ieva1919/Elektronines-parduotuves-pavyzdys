$(document).ready(function(){
    $('.carousel').carousel();
  });

$(document).ready(function(){

	$('.add-to-cart').click(function() {
		var product = $(this).attr("data-product");
		var count = $(this).parents(".gaminys").find(".count").val();

		$.get('/addtocart.php?product=' + product + '&count=' + count, function( data ) {
			
			$('#myModal').modal('show')

		});

	})
});

function setCart(product, count) {
	$.get('/addtocart.php?product=' + product + '&set=' + count, function( data ) {
		window.location.reload();
	});

}

function back() {
	window.history.back();
}