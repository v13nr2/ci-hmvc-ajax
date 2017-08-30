
function reloadChat(){
	$('#chatboxnng').html('');
	$.ajax({ 
				 type: "POST",   
				 url: "chat/getChat",   
				 data: {
					room:'',
				 },
				 dataType: 'html',
				 async: true,
				 success : function(response)
				 {
					$('#chatboxnng').html(response);
				 },
				 failure: function(){
					alert("Terkendala Jaringan.");
				 }
		});
}
function addchat(){
		$.ajax({ 
				 type: "POST",   
				 url: "chat/addChat",   
				 data: {
					teks:$('#addchatteks').val(),
				 },
				 dataType: 'html',
				 async: true,
				 success : function(response)
				 {
					 for(i=0;i<=100000;i++){
					 }
					 reloadChat();
					//console.log(response);
				 },
				 failure: function(){
					alert("Terkendala Jaringan.");
				 }
		});
		$('#addchatteks').val('');
		reloadChat();
}
$(document).ready(function() {

		reloadChat();	
		
		$('#addchat').click(function(){
			addchat();
		});
});
