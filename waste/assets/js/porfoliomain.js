$(document).ready(function(){

		// porfolio counting
		setInterval(function(){
			var E_port_count = $('.each_portfolio').length;
			var android_port_count = $('.port1').length;
			var wp_port_count = $('.port2').length;
			var wd_port_count = $('.port3').length;
			$('#all_portfolio_link sup').html(E_port_count);
			$('.port_navs li:nth-child(2) sup').html(android_port_count);
			$('.port_navs li:nth-child(3) sup').html(wp_port_count);
			$('.port_navs li:nth-child(4) sup').html(wd_port_count);
		},1000);

		$('.port_navs li').click(function(){
			var data_filter = $(this).children('a').attr('data-filter');
			$('.each_portfolio').hide();
			$('.'+data_filter).show();
		});
		
	// on scroll load more data
    var _token = $('input[name="_token"]').val();
     load_data('', _token);

		 function load_data(id="", _token)
		 {
		  $.ajax({
		   url:"load_data",
		   method:"POST",
		   data:{id:id, _token:_token},
		   success:function(data)
		   {
		    $('#load_more').remove();
		    $('.post_data').append(data);
		   }
		  });
		 }
		 var flag = true;
	$(window).scroll(function() {
	    if($(window).scrollTop() + $(window).height() > $(document).height() - 400) {
	           // ajax call get data from server and append to the div
	           // $(window).unbind('scroll');
	           var id = $('#load_more_button').data('id');
	            $('#load_more_button').html('<b>Loading...</b>');
	            if (id >= 1) {
	            	if (flag == true) {
	            		load_data(id, _token);
	            		flag = false;
	            		setTimeout(function(){
							flag = true;
						},1000);
	            	}
	            }      
	    }
	});
  });
// 	var flag = false;
// var scrollFlag = false;

// $(window).scroll(function(event) {
//         var scroll = $(window).scrollTop();
//     var height=$(document).height()-400;
//     if((scroll>height || !flag) && !scrollFlag) {
//     // ajax call get data from server and append to the div
//       var id = $('#load_more_button').data('id');
//       $('#load_more_button').html('<b>Loading...</b>');
//       if (id >= 1) {
//         load_data(id, _token);  
//       }  
//       flag=true;  
//       scrollFlag=true;
//     }
// });




// jQuery(document).ready(function(){
// 	var all_portfolios = jQuery('#totalPortfoios').val();//9
// 	var threshold = 4;
// 	// jQuery('#load_more_btn').click(function(){
// 	// 	for(var i = threshold; i <= threshold+2; i++){
// 	// 		jQuery('#port'+i).css('opacity','1');		
// 	// 	}
// 	// 	threshold+=3;
// 	// });
// // 	 $(window).scroll(function() {
// //     if($(window).scrollTop() == $(document).height() - $(window).height()) {
// //            for(var i = threshold; i <= threshold+2; i++){
// // 			jQuery('#port'+i).css('opacity','1');		
// // 		}
// // 		threshold+=3;
// //     }
// // });
// $(window).scroll(function() {
//    if($(window).scrollTop() + $(window).height() > $(document).height() - 800) {
//        for(var i = threshold; i <= threshold+2; i++){
// 			jQuery('#port'+i).css('opacity','1');		
// 		}
// 		threshold+=3;
//    }
// });
// 	// function loadMore(){
// 	// 	threshold++;
// 	// 	for(var i = threshold; i <= threshold+2; i++){
// 	// 		jQuery('.each_portfolio:nth-child('+i+')').show();		
// 	// 	}
// 	// }
// 	// jQuery('.each_portfolio').show();
// });
