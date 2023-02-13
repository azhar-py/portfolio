function add_row(){
	var i = $('#table_data tr').length;

    var output = "";
    output += '<tr id="tr-'+i+'">';

    output +=	  '<td>';
    output +=	  '<input type="text" class="form-control" id="name-'+i+'" name="name[]"/>';
    output +=	  '</td>';

    output +=	  '<td>';
    output +=		  '<select class="form-control" aria-placeholder="Level" name="Level[]" id="Level-'+i+'">';
    output +=			  '<option selected disabled value="">Select Level</option>';
    output +=				'<option value="begning">begning</option>';                 
    output +=		  '</select>';
    output +=	  '</td>';


    output +=	  '<td>';
    output +=		  '<input type="number" class="form-control" id="percentage-'+i+'" name="percentage[]"/>';
    output +=	  '</td>';


    output +=	  '<td>';
    output +=		  '<button onclick="remove_row('+i+')" type="button"  class="float-right btn btn-sm btn-light-danger">-</button> ';
    output +=	  '</td>';
    output +=	'</tr>';

    $('#table_data').append(output); 


  }



  function remove_row(id){
	$('#tr-'+id).remove();
  }



  function successful_Add(text_val){
    Swal.fire({
        text: text_val,
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "Ok, got it!",
        timer: 1500,
        customClass: {
            confirmButton: "btn font-weight-bold btn-primary",
        }
    });
  }
  