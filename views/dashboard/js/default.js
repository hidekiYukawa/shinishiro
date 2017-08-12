$(function() {
	
	$.get('dashboard/xhrGetListings', function(o) {
		
		for (var i = 0; i < o.length; i++)
		{
			$('#listInserts').append('<div>' + o[i].text + '<a class="del" rel="'+o[i].id+'" href="#">X</a></div>');
            console.log("ITEM + " + o[i].id);
		}
		
		$('.del').on('click', function() {
			console.log("CLICK");
			delItem = $(this);
			var id = $(this).attr('rel');

			console.log("ID:: " + id);
			
			$.post('dashboard/xhrDeleteListing', {'id': id}, function(o) {
                console.log("THIS: " + $(this).parent().html());
				delItem.parent().remove();

			}, 'json');
			
			return false;
		});
		
	}, 'json');
	
	
	
	$('#randomInsert').submit(function() {
		var url = $(this).attr('action');
		var data = $(this).serialize();
		
		$.post(url, data, function(o) {
			$('#listInserts').append('<div>' + o.text + '<a class="del" rel="'+ o.id +'" href="#">X</a></div>');		
		}, 'json');
		
		
		return false;
	});

});