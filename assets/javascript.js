 new WOW().init();
 
function likePost(caller)  {
	var post_id = caller.parentElement.getAttribute('post-id');
	//alert(post_id);
	var address = "assets/ajax_like.php";
	$(caller).find("span").html("Thanks.");
	$.ajax({
		type: 	"POST",
		url: 	address,
		data: { data: post_id },
		success: function (msg) { 
			$(caller).html("You approved. <span class='badge'>"+ msg + "</span>"); 
			$(caller).parent().parent().children().children(".like_dislike").attr("disabled", "disabled");
		},
		error: 	function () {
			console.log('error');
		}
	});
}

function dislike(caller)  {
	var post_id = caller.parentElement.getAttribute('post-id');
	//alert(post_id);
	var address = "assets/ajax_dislike.php";
	$(caller).find("span").html("Guilty!");
	$.ajax({
		type: 	"POST",
		url: 	address,
		data: { data: post_id },
		success: function (msg) { 
			$(caller).html("You judged it. <span class='badge'>"+ msg + "</span>"); 
			$(caller).parent().parent().children().children(".like_dislike").attr("disabled", "disabled");

		},
		error: 	function () {
			console.log('error');
		}
	});
}

function comment(caller) {
	var post_id = caller.parentElement.getAttribute('post-id');
	var address = "single_post.php?pid=" + post_id;
	 window.location.href= address;
}

function postComment(unique_id)  {
	var post_id = unique_id;
	var comment = document.getElementById("comment").value;
	var button = document.getElementById("add_comment");
	//alert(post_id);
	var address = "assets/ajax_add_comment.php";
	
	if (comment === "") {
		alert("Please, write comment.")
	} else {
		button.innerHTML = "Adding...";
		$("#table").html("<tr><td>Loading comment...</td></tr>");
		$.ajax({
			type: 	"POST",
			url: 	address,
			data: { comment: comment, unique_id: unique_id },
			success: function (resoult) { 
				$("#table").html(resoult); 
				button.disabled = true;
				button.innerHTML = "Thank you for your comment.";
			},
			error: 	function () {
				$("#table").html("Error... Error!"); 
			}
		});
	}
}