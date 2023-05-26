function yannick(var1)
	{
        
        if(var1=='groupe')
            {
                //Afficher par groupe et masquer le numeor
                $('#design_numero').css('display','none');
                $('#design_groupe').css('display','block');
                $('#numero').css('display','none');
                $('#groupe').css('display','block');
                //alert("je suis un groupe");
                
            }
        else if(var1=='numero')
            {
                //Afficher numero et masquer le groupe
                $('#design_numero').css('display','block');
                $('#design_groupe').css('display','none');
                $('#numero').css('display','block');
                $('#groupe').css('display','none');
                //alert("je suis un numero");
            }
		
    }
    
    // function alert_ajax(xhr)
	// {
	// 	if (xhr.readyState==4) 
	// 		{
		
    //             var docXML= xhr.responseXML;
    //             var code= docXML.getElementsByTagName("code");
    //             var marche= docXML.getElementsByTagName("marche");

    //             $('#marche').html("");

    //             for (i=0; i<code.length; i++)
	// 				{ 
	// 							var codes = (code.item(i).firstChild.data);
		
	// 							var marches = (marche.item(i).firstChild.data);
								

	// 							$('#marche').append("<option value='"+codes+"'>"+marches+"</option>");
			
	// 				}


	// 			// var resultat= docXML.getElementsByTagName("resultatx");
	// 			// var resultats = (resultat.item(0).firstChild.data);
	// 			// var domaine= docXML.getElementsByTagName("domainex");
	// 			// var domaines = (domaine.item(0).firstChild.data);
				
	// 			// var codes = (code.item(0).firstChild.data);
	// 			// if(codes==1)
    //             //     {
	// 			// 		$('#commander').css('display','block');
	// 			// 		$('#result').after("<div id='commander' style='text-align:center;  margin-top:20px;'><a href='https://hosting.eliajimmy.net/client.php?codeproduit=6&query="+domaines+"' style='background:black; color:white; padding:15px;  font-size:12pt;'>COMMANDER</a></div>");
    //             //     }
                
    //             // $('#result').css('display','block');
    //             // $('#loader').css('display','none');
                
	// 			//   $('#result').html(resultats);

	// 			// //$('#result').css('display','none');
				
	// 			// //$('#result').html(" UN SIMPLE TEST");
				
				
	// 			// // for (i=0; i<domaine.length; i++)
	// 			// // 	{ 
	// 			// // 				var domaines = (domaine.item(i).firstChild.data);
		
	// 			// // 				var resultats = (resultat.item(i).firstChild.data);
								
								
								
								
	// 			// // 				$('#result').htm(" "+resultats+" ");
			
	// 			// // 	}
					
				
						
	// 		}
			
	// }


