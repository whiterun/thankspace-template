$(function() {
	var $button = $("<div id='source-button' class='btn btn-primary btn-xs'>&lt; &gt;</div>").click(function(){
		var index =  $('.bs-component').index( $(this).parent() );
		$.get(window.location.href, function(data){
			var html = $(data).find('.bs-component').eq(index).html();
			html = cleanSource(html);
			$("#source-modal pre").text(html);
			$("#source-modal").modal();
		})
	});
	
	$('.bs-component [data-toggle="popover"]').popover();
	$('.bs-component [data-toggle="tooltip"]').tooltip();
	
	$(".bs-component").hover(function(){
		$(this).append($button);
		$button.show();
	}, function(){
		$button.hide();
	});
	
	function cleanSource(html) {
		var lines = html.split(/\n/);
		
		lines.shift();
		lines.splice(-1, 1);
		
		var indentSize = lines[0].length - lines[0].trim().length,
			re = new RegExp(" {" + indentSize + "}");
			
		lines = lines.map(function(line){
			if (line.match(re)) {
				line = line.substring(indentSize);
			}
			
			return line;
		});
		
		lines = lines.join("\n");
		return lines;
	}
	
	$(".icons-material .icon").each(function() {
		$(this).after("<br><br><code>" + $(this).attr("class").replace("icon ", "") + "</code>");
	});
	
	$.material.init();
	
	$(".shor").noUiSlider({
		start: 40,
		connect: "lower",
		range: {
			min: 0,
			max: 100
		}
	});
	
	$(".svert").noUiSlider({
		orientation: "vertical",
		start: 40,
		connect: "lower",
		range: {
			min: 0,
			max: 100
		}
	});
	
	$('#jumlahbox').change(function () {
		var style = $(this).val() == 21 ? 'block' : 'none';
		$('#many_box').css('display', style);
	});
	
	$('#wowstuffs').change(function () {
		var style = $(this).val() == 4 ? 'block' : 'none';
		$('#wowstuffsother').css('display', style);
	});
	
	$('#Wowdiv').hide();
	$('#div2').show();
	
	$('#id_radio1').click(function () {
		$('#div2').hide('fast');
		$('#Wowdiv').show('fast');
	});
	
	$('#id_radio2').click(function () {
		$('#Wowdiv').hide('fast');
		$('#div2').show('fast');
	});
	
	$('.start-intro').click(function(e)
	{
		e.preventDefault();
		var intro = introJs();
		intro.setOption('showProgress', 'true');
		
		intro.setOptions({
			steps: [
				{
					element: '#step1',
					intro: "Hai, Selamat datang di ThankSpace, layanan on-demand storage yang melayani kebutuhan Space sesuai kebutuhan. Saya Adam, Tour Guide tampan dari Galaxy Far Far Away! Untuk melanjutkan tour ini, Anda bisa klik Next!",
					position: 'right'
				},
				{
					element: '#step2',
					intro: "Untuk lebih memahami layanan ThankSpace, Anda bisa mencoba melihat explanation video dari kami. <i>wasn't</i> that fun?",
					position: 'left'
				},
				{
					element: '#step3',
					intro: 'Saat ini, layanan on-demand storage ThankSpace melayani dua kota besar di Indonesia',
				},
				{
					element: '#step4',
					intro: 'Harga jakdakdak'
				},
				{
					element: '#step5',
					intro: 'Satu langkah lagi untuk membuat. Klik Done dan Klik Order'
				}
			]
		});
		
		intro.setOption('showBullets', 'true');
		intro.start();
	});
});