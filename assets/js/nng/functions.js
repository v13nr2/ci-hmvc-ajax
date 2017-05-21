
function loadContent(x){
		$( "#contentLTE" ).empty();
		$( "#contentLTE" ).load( x );
	}
	
function myFunction() {
    var txt;
    var person = prompt("Please enter your todo:", "isikan todo");
    if (person == null || person == "") {
        txt = "Anda membatalkan todo.";
    } else {
        txt = person;
    }
		$.ajax({ 
				 type: "POST",   
				 url: "todo/insert",   
				 data: {
					todo:txt,
				 },
				 dataType: 'json',
				 async: true,
				 success : function(response)
				 {
					alert(response.results[0].message);
					dataTodo();
				 },
				 failure: function(){
					alert("Terkendala Jaringan.");
				 }
		});
		
}

 function delTodo(x){
	$.ajax({ 
				 type: "POST",   
				 url: "todo/delete",   
				 data: {
					id:x,
				 },
				 dataType: 'json',
				 async: true,
				 success : function(response)
				 {
					alert(response.results[0].message);
				 },
				 failure: function(){
					alert("Terkendala Jaringan.");
				 }
		});
		dataTodo();
 } 

 function dataTodo(){
	 $('#nngTodo').empty();
	$.ajax({ 
				 type: "POST",   
				 url: "todo/getTodo",   
				 data: {
					id:'',
				 },
				 dataType: 'html',
				 async: true,
				 success : function(response)
				 {
					$('#nngTodo').append(response);
				 },
				 failure: function(){
					alert("Terkendala Jaringan.");
				 }
		});
 } 
dataTodo();