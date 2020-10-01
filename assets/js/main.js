var todoText = $('textarea#todo');

$('button.clean').click(function(){
	todoText.val("").focus();
});

$('button.add').click(function() {
	var todoTextValue = $('textarea#todo').val();
	if (!todoText.val().trim()){
		alert("Boş değer eklenemez. Tekrar Deneyiniz.");
		todoText.focus();
	}else {
		var pathname = window.location.pathname;
		$.ajax({
			url: pathname+"ekle.php",
			type: 'POST',
			data: {todotext: todoTextValue},
		})
		.done(function(data) {
			var veri = $.parseJSON(data);
			$('#list').append('<li class="show">'+veri+'</li>');
		})
		.fail(function() {
			console.log("error");
		});

		todoText.val("").focus();
	}
});
