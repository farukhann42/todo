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
		$.ajax({
			url: "http://localhost/todoProject/islemler.php",
			type: 'POST',
			data: {todotext: todoTextValue},
		})
		.done(function(data) {
			$('#list').append('<li class="show">'+data+'</li>');
		})
		.fail(function() {
			console.log("error");
		});

		todoText.val("").focus();
	}
});

$('button.sil').click(function() {
	var id = $(this).data('id');
	var url = "http://localhost/todoProject/index.php?page=del";
	$.ajax({
		url: url,
		type: 'POST',
		data: {id: id},
	})
	.done(function() {
		alert("success");
		location.reload();
	})
	.fail(function() {
		console.log("error");
	});
});

$('button.update').click(function() {
	var id = $(this).data('id');
	var newText = $('textarea#todo').val();
	if (!todoText.val().trim()){
		alert("Boş değer eklenemez. Tekrar Deneyiniz.");
		todoText.focus();
	}else {
		$.ajax({
			url: "http://localhost/todoProject/guncelle.php",
			type: 'POST',
			data: {
				id: id,
				text: newText
			},
		})
		.done(function() {
			alert("success");
			window.location.replace('http://localhost/todoProject/index.php?page=list');
		})
		.fail(function() {
			console.log("error");
		});
	}
});