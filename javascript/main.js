// JavaScript Document
	function removeAtt(no){				
		var tags=document.getElementsByTagName('input');				
				if(no==1){
					tags[0].removeAttribute('class');
					tags[0].value='';
					}												
				if(no==2){
					tags[1].removeAttribute('class');
					tags[1].value='';
					}	
				if(no==3){
					tags[2].removeAttribute('class');
					tags[2].value='';
					}	
				if(no==4){
					tags[3].removeAttribute('class');
					tags[3].value='';
					}
				if(no==5){
					tags[4].removeAttribute('class');
					tags[4].value='';
					}										
			}						
