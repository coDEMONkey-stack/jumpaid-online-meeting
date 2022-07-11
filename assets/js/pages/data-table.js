//[Data Table Javascript]

//Project:	VoiceX Admin - Responsive Admin Template
//Primary use:   Used only for the Data Table

$(function () {
    "use strict";

    $('#example1').DataTable();
    $('#example2').DataTable({
      'pageLength'  : 5,
      'bLengthChange': false,
      'searching'   : false
    });
    $('#example3').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

    $('#tb_stok').DataTable({
      'columns'     : [
        { 'searchable': false },
        { 'searchable': false },
        null,
        null,
        { 'searchable': false },
        { 'searchable': false },
        { 'searchable': false },
        { 'searchable': false },
        { 'searchable': false }
      ]
    });

    $('#tb_supplier').DataTable({
      'columns'     : [
        { 'searchable': false },
        null,
        { 'searchable': false },
        { 'searchable': false }
      ]
    });
	
	
	$('#example').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	} );
	
	$('#tickets').DataTable({
	  'paging'      : true,
	  'lengthChange': true,
	  'searching'   : true,
	  'ordering'    : true,
	  'info'        : true,
	  'autoWidth'   : false,
	});
	
	$('#productorder').DataTable({
	  'paging'      : true,
	  'lengthChange': true,
	  'searching'   : true,
	  'ordering'    : true,
	  'info'        : true,
	  'autoWidth'   : false,
	});
	

	$('#complex_header').DataTable();
	
	//--------Individual column searching
	
    // Setup - add a text input to each footer cell
    $('#example5 tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#example5').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
	
	
	
	
  }); // End of use strict