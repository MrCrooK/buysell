function RSGoPro_InitMaskPhone() {
	if( $('.maskPhone').length>0 ) {
		$(".maskPhone").mask("+7 (999) 999-9999");
	}
}

$(document).ready(function(){
	
	// props
	$(document).on('focus','.f_text input[type="text"], .f_textarea input[type="text"], .f_text textarea, .f_textarea textarea',function(){
		$vl = $(this).parents('.vl');
		if( $vl.find('.description').length>0 )
		{
			$vl.find('.description').fadeIn(150);
		}
	}).on('blur','.f_text input[type="text"], .f_textarea input[type="text"], .f_text textarea, .f_textarea textarea',function(){
		$vl = $(this).parents('.vl');
		if( $vl.find('.description').length>0 )
		{
			$vl.find('.description').fadeOut(150);
		}
	});
	
	if( $('.line.f_location').find('.search-suggest').val()!='' && parseInt($('.line.f_location').find('input[type="hidden"]').val())>0 ) {
		submitForm();
	}

	RSGoPro_InitMaskPhone();
	
});