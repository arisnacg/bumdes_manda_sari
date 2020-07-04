var $modal = $('#modal');
var image = document.getElementById('image');
var cropper;
var first = true;

//button listener
$("#btnGambar").click(function(){
	$("#inputGambar").click()
})

//file listener
$("#inputGambar").on("change", function(e){
	var files = e.target.files;
	var reader;
	var file;
	var url;

	if (files && files.length > 0) {
		file = files[0];
		if (URL) {
			gantiGambar(URL.createObjectURL(file));
		} else if (FileReader) {
			reader = new FileReader();
			reader.onload = function (e) {
				gantiGambar(reader.result);
			};
			reader.readAsDataURL(file);
		}
	}
});


function gantiGambar(url){
	$(".info-cropper").show()
	if(!first){
		cropper.destroy();
		cropper = null;
	}
	image.src = url;
	cropper = new Cropper(image, {
		aspectRatio: 720/540,
		viewMode: 3,
		preview: '.preview'
	});
	first = false;
}

$("#uploadGambar").click(function(){
	var btn = $(this)
	var btnHtml = btn.html()
	canvas = cropper.getCroppedCanvas({
		minWidth: 720,
		minHeight:540
	});
	canvas.toBlob(function(blob) {
		url = URL.createObjectURL(blob);
		var reader = new FileReader()
		 reader.readAsDataURL(blob)
		 reader.onloadend = function() {
			var base64data = reader.result
			btn.html(`<span class="btn-label"><i class="fa fa-spin fa-spinner"></i></span> Sedang Mengupload..`)
			btn.attr("disabled", true)
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "/dashboard/gallery_usaha/",
				data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data, 'id_unit_usaha': ID_USAHA},
				success: function(data){
					Swal.fire({
						title: "SUKSES", 
						text: data.message, 
						type: "success"
					}).then(function(){
						window.location = "/dashboard/unit_usaha/gallery_usaha/"+ID_USAHA
					})
					btn.html(btnHtml)
					btn.attr("disabled", false)
				}
			})
		 }
	})
})
