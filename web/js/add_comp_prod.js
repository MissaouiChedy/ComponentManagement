
	function close_form(){
	 $('div#mask, div#DynamiqueFormContainerBorder, div#DynamiqueForm ').stop().fadeOut('slow');
	 return false;
	}

$(document).ready(function() {
$('div#DynamiqueFormContainerBorder').hide();

});

function numeric(num) {
     return (num >0);
}


function affich_Composant_Form() {
$(function() {
  
   
        	//clearQueue();
			/*$('#custom_file_upload').uploadifyUpload();*/
        // scroll to top
        $('html, body').animate({scrollTop:0}, 'fast');

        // before showing the modal window, reset the form incase of previous use.
        $('.success, .erreur').hide();
		
		 $('div#contact_header_comp_prod').hide();
		 $('table#tabFormChoice').hide();
        $('div#contact').fadeIn();
        $('form#compForm').fadeIn('slow');
        //document.getElementById("status-message").innerHTML='Télécharger les images de votre annonce :'; 
		//$('#status-message').val('Télécharger les images de votre annonce :');
        //show the mask and contact divs
        $('#mask').show().fadeTo('', 0.7);
		$('#close').fadeIn();
		$('div#ContactContainerBorder').fadeIn();
        
        
        // stop the modal link from doing its default action
    

 
	
       // close the modal window is close div or mask div are clicked.
    $('div#close').click(function() {
       close_form();

    });

    // when the Submit button is clicked...

	 $('input#submit').click(function() {
       
	  $('.erreur').hide().remove();
        //Inputed Strings
        var titre = $('#title').val(),
		    version = $('#version').val(),
			type = $('#type').val(),
			nature = $('#nature').val(),
			licence = $('#licence').val(),
			cout = $('#price').val(),
			id = $('#id_user').val();
			//id_annonce = $('#id_annonce').val(),
           
        
    
        //Error Count
        var error_count=0;
        
 
	 
	 		
		   
		   if(titre == '') {
                $('#contact_header').after('<p class="response-msg erreur">Veuillez saisir un titre pour votre composant</p>');
                error_count += 1;
            }
			
			 if(cout == ''  ) {
                $('#contact_header').after('<p class="response-msg erreur">Veuillez saisir un cout pour votre composant</p>');
                error_count += 1;
				
			
			
            }else 	 if( cout<=0 ) {
                $('#contact_header').after('<p class="response-msg erreur">Veuillez saisir un cout valide</p>');
                error_count += 1;
            }
			
			
			
			   //No Errors?
            if(error_count === 0) {
			
			
              		        $.ajax({
                    type: "post",
                    url: "modeles/add_composant.php",
                    data: "titre=" + titre + "&version=" + version+ "&type=" +type+ "&nature=" +nature+ "&licence=" +licence+ "&cout=" +cout+"&id_user=" +id,
					
					error: function() {
                        $('.erreur').hide();
                        $('#sendError').slideDown('slow');
                    },
                    success: function (data) {
                        
                        
						close_form();
						//afficher_derniere_annonce_publiee(id);
						 $(function() {
		   $('ul#addQuery').prepend(''+data+'');
		   $('ul#addQuery li:first').fadeIn('slow');
		   //$('div#response-msg').fadeOut('slow');
		   
		   });
						
                    }

  				
                });  
      
				//setTimeout('afficher_derniere_annonce_publiee('+id+');',1000);
				
            }
			
			
			
			
			

    });
	
	
	
            //No Errors?

   
    
});

}









$(function() {
    // load the modal window
      $('a.modal').click(function(){
   
        	//clearQueue();
			/*$('#custom_file_upload').uploadifyUpload();*/
        // scroll to top
        $('html, body').animate({scrollTop:0}, 'fast');

        // before showing the modal window, reset the form incase of previous use.
        $('.success, .erreur').hide();
		$('div#contact_header_comp_prod').fadeIn('slow');
		 $('form#compForm').hide();
        $('div#DynamiqueForm').fadeIn();
        $('table#tabFormChoice').fadeIn('slow');
        //document.getElementById("status-message").innerHTML='Télécharger les images de votre annonce :'; 
		//$('#status-message').val('Télécharger les images de votre annonce :');
        //show the mask and contact divs
        $('#mask').show().fadeTo('', 0.7);
		$('#close').fadeIn();
		$('div#DynamiqueFormContainerBorder').fadeIn();
        
        
        // stop the modal link from doing its default action
    

           return false;
    });
	
       // close the modal window is close div or mask div are clicked.
    $('div#close').click(function() {
       close_form();

    });

	 $('.composant').click(function() {
       affich_Composant_Form();

    });
	
	
	
    // when the Submit button is clicked...

            //No Errors?

   
    
});
