(function($) {
	 // DOM Ready
	$(function() {
		// Binding a click event
		// From jQuery v.1.7.0 use .on() instead of .bind()
		$('#my-button').on('click', function(e) {
			// Prevents the default action to be triggered. 
			e.preventDefault();
			
			$.ajax({
				dataType: "html",
				url: 'GUI/login.php',
				success: function(data){
					$('.contentPopup').html(data);
					$('#loginPopup').bPopup({
						fadeSpeed: 'slow', //can be a string ('slow'/'fast') or int
						followSpeed: 1500, //can be a string ('slow'/'fast') or int
						closeClass: 'closePopup',
					});
				},
				error: function(){
					alert("error");
				}	
			});
			// Triggering bPopup when click event is fired		
		});
	});
})(jQuery);
			
function CheckError()
{
	myFrmObj = document.frmLogin;
	if(myFrmObj.name.value == "")
	{
		window.alert("Please check name again");
		myFrmObj.name.focus();
		return false;
	}
	if(myFrmObj.location.value == "")
	{
		window.alert("Please check location again");
		myFrmObj.location.focus();
		return false;
	}
	if(myFrmObj.email.value == "")
	{
		window.alert("Please check email again");
		myFrmObj.email.focus();
		return false;
	}
	if(myFrmObj.FBname.value == "")
	{
		window.alert("Please check nick name again");
		myFrmObj.FBname.focus();
		return false;
	}
	if(myFrmObj.password.value == "")
	{
		window.alert("Please check password again");
		myFrmObj.password.focus();
		return false;
	}           
	if(!myFrmObj.agree.checked)   
	{	
		window.alert("Please check Terms & Conditions again");
		myFrmObj.agree.focus();
		return false;
	}     
	return true;
}