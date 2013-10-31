$(document).ready(function() {
	$('#DataTable').find('tbody tr').hover(
		function(){ $(this).find('td').addClass('table_highlighted');}, 
		function(){	$(this).find('td').removeClass('table_highlighted');}
	);				
	$('#DataTable').dataTable({			
		"sScrollY": "100%",
		"sScrollX": "100%",
		"fnDrawCallback": 
		function(oSettings ) {						
			if ( oSettings.bSorted || oSettings.bFiltered ){
				for ( var i=0, iLen=oSettings.aiDisplay.length ; i<iLen ; i++ ){
					$('td:eq(0)', oSettings.aoData[ oSettings.aiDisplay[i] ].nTr ).html( i+1 );
				}
			}
		},		
		"bStateSave": true,
		"bFilter": false,
		"bInfo": false,
		"bPaginate": false,
		"oLanguage":{
			"sUrl": "mvc/templates/script/dataTables.vietnamese.txt"
		}
	});
});