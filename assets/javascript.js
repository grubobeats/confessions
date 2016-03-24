
$(function () {
  //$('.like').click(function () { likeFunction(this); });
});
// function works only on first id
function likeFunction(caller)  {
	var post_id = caller.parentElement.getAttribute('post-id');
	//alert(post_id);
	var address = "assets/ajax_requests.php";
	$(caller).find("span").html("Thanks.");
	$.ajax({
		type: 	"POST",
		url: 	address,
		data: { data: post_id },
		success: function (msg) { $(caller).find("span").html(msg); },
		error: 	function () {
			console.log('error');
		}
	});
}