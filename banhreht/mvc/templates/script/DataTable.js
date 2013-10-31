$(document).ready(function()
{
	$('#DataTable').find('tbody tr').hover(
			function(){ $(this).find('td').addClass('table_highlighted');}, 
			function(){	$(this).find('td').removeClass('table_highlighted');}
		);				
		$('#DataTable').dataTable({					
			"sScrollY": "505px",
			"fnDrawCallback": 
			function(oSettings ) {						
				if ( oSettings.bSorted || oSettings.bFiltered ){
					for ( var i=0, iLen=oSettings.aiDisplay.length ; i<iLen ; i++ ){
						$('td:eq(0)', oSettings.aoData[ oSettings.aiDisplay[i] ].nTr ).html( i+1 );
					}
				}
				if ( oSettings.aiDisplay.length == 0 ){
					return;
				}
			
				var nTrs = $('#DataTable tbody tr');
				var iColspan = nTrs[0].getElementsByTagName('td').length;
				var sLastGroup = "";
				for ( var i=0 ; i<nTrs.length ; i++ ){
					var iDisplayIndex = oSettings._iDisplayStart + i;
					var sGroup = oSettings.aoData[ oSettings.aiDisplay[iDisplayIndex] ]._aData[1];
					if ( sGroup != sLastGroup ){
						var nGroup = document.createElement( 'tr' );
						var nCell = document.createElement( 'td' );
						nCell.colSpan = iColspan;
						nCell.className = "group";
						nCell.innerHTML = sGroup;
						nGroup.appendChild( nCell );
						nTrs[i].parentNode.insertBefore( nGroup, nTrs[i] );
						sLastGroup = sGroup;
					}
				}
			},
			"aoColumns": [ 
				null,
				{ "bVisible":    false },
				null,
				null,
				null,
				null,
				null
			],
			"bStateSave": true,
			"bFilter": false,
			"bInfo": false,
			"bSort": false,
			"bPaginate": false,
			"sDom": 'lfr<"giveHeight"t>ip'
		});	
});