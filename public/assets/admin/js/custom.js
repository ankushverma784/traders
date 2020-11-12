//side bar toogle
$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
    })
});


// data tables
$(document).ready(function() {
    $('.userdatatables').DataTable();
});

$(document).ready(function() {
    $('.datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        autoclose: true,
        todayHighlight: true,
  
  });
});;
 
// js for Add on Agreement button +
$(document).ready(function() {
    var i=1;  
    $("#add-new").click(function(){
        i++;  
        $('#input_fields_wrap').append('<div id="row'+i+'"class="dynamic-added mb-1"><tr><td><div class="row" ><div class="col-md-11"><div class="row"><div class="col-lg-2"><select class="custom-select custom-select-md" name="select_material[]" value=""  required="true"><option selected="" disabled="">Select Material</option><option value="AGGREGATE">Aggregate</option><option value="CEMENT">Cement</option><option value="BRICK">Brick</option><option value="SAND">Sand</option></select></div><div class="col-lg-2"><select class="custom-select custom-select-md" name="material_type[]"  value="" required="true"><option selected="" disabled="">Material Type</option><option value="abc">Abc</option><option value="xyz">Xyz</option></select></div><div class="col-lg-2"><select class="custom-select custom-select-md" name="quantity_type[]" value={{}} required="" ><option selected="" disabled="">Quantity Type</option><option value="Bag">Bag</option><option value="Pieces">Pieces</option><option value="Quantel">Quantel</option></select></div><div class="col-lg-3 rate-input"><input id="tax0" class="form-control" type="number" placeholder="Min Rate" name="min_rate[]" required=""></div><div class="col-lg-3 rate-input"><input id="total-price0" class="form-control" type="number" placeholder="Max Rate" name="max_rate[]" required=""></div></div></div><div class="col-md-1 rate-btn"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div></div></td></tr>');  
    });  	
});  



$(document).on('click', '.btn_remove', function(){  
    var button_id = $(this).attr("id");   
    $('#row'+button_id+'').remove();  
});





// Js for Edit page on Purchase  

$(document).ready(function() {
    var j=1;  
    $("#add_field").click(function(){
        j++;  
        $('#input_fields_wrap').append('<div id="row'+j+'" class="dynamic-added mb-1"><tr><td><div class="row"><div class="col-md-11"><div class="row"><div class="col-lg-2"><select class="custom-select custom-select-md" name="material-name[]" ><option selected="" disabled="">Select Material</option><option value="Aggregate">Aggregate</option><option value="Cement">Cement</option><option value="Brick">Brick</option><option value="Sand">Sand</option></select></div><div class="col-lg-2"><select class="custom-select custom-select-md" name="material-type[]" placeholder="Material Type"><option selected="" disabled="">Material Type</option><option value="Abc">Abc</option><option value="Xyz">Xyz</option></select></div><div class="col-lg-2"><select class="custom-select custom-select-md" name="material-quantity-type[]"><option selected="" disabled="">Quantity Type</option><option value="Bag">Bag</option><option value="Pieces">Pieces</option><option value="Quantel">Quantel</option></select></div><div class="col-lg-1"><input id="quantity0" class="form-control" type="number" placeholder="Qty" name="material-quantity[]" required="" onchange="getTotalPrice(0);calculateTotal();" autocomplete="off"></div><div class="col-lg-1 "><input class="form-control" type="number" placeholder="Price" name="material-price[]" required="" onkeyup="getTotalPrice(0);calculateTotal();" autocomplete="off"></div><div class="col-lg-1"><input class="form-control" type="text" placeholder="0%" name="material-gst[]" required="" id="gst0"></div><div class="col-lg-1 "><input  class="form-control" type="number" placeholder="Tax" name="material-tax[]" required="" readonly=""></div><div class="col-lg-2"><input  class="form-control" type="number" placeholder="Total Price" name="material-total-price[]" required="" readonly=""></div></div></div><div class="col-md-1"><button type="button" name="remove" id="'+j+'" class="btn btn-danger remove">X</button></div></div></td></tr>'); 
    });  	
});  

$(document).on('click', '.remove', function(){  
    var button_id = $(this).attr("id");   
    $('#row'+button_id+'').remove();  
});


// Tax Calculation on Purchase Create Page

$(document).ready(function(){

    // $("#quantity").change(function(){
    //     // var s = (($("#material_price").val())*($("#material_gst").val())*($("#quantity").val()));
    //     // var tax = s/100;
    //     // $("#tax").val(tax);
    //     console.log('test');
    // }); 
    $("#qyt").change(function(){
        $("#total_price").val();
      });  
      $("#material_price").change(function(){
        if (quantity.val()=="" || material_price.val()=="" )
        $('#tax').val('tax');
        $("#tax").val(tax);
      });
    });




// with company template

$(document).ready(function() {
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.addimage').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $(".uploadprofile").change(function() {
        readURL(this);
    });
});

function pageRedirect() {
    window.location.href = "mover-profile.php";
};

function pageRedirect2() {
    window.location.href = "customer-profile.php";
};

// ClassicEditor
//     .create(document.querySelector('#editor'))
//     .then(editor => {
//         console.log(editor);
//     })
//     .catch(error => {
//         console.log(error);
//     });


// Update record
// $(document).on("click", ".update" , function() {
// var user_id = $(this).data('id');

// var name = $('#usrName'+user_id).val();
// // var photo = $('#imgUpd'+user_id).val();

// if(name != '' ){   //&& email != ''
//    $.ajax({
//       url: 'admin.update',
//       type: 'post',
//       data: {_token: CSRF_TOKEN,name:usrName,photo: imgUpd},
//       success: function(response){ alert(response); }
//    });
// }else{
//    alert('Fill all fields');
// }
// });


// $(document).ready(function() {

//     $('#data_form').on('submit', function(e) {

//         var form_data = $(this).serialize();

//         $.ajax({
//             type: "POST",
//             url: 'admin.update',
//             data: form_data,
//             success: function(data) {

//                 $('#usrName').text($("#usrName").val());

//             },
//             error: function() {
//                 alert('failed');
//             }
//         });

//         e.preventDefault();
//     });

// });


// $('#input_fields_wrap').click (function (e) {
//     e.preventDefault();
//     $(this).closest('tr').remove();
// })
// $('p input[type="button').click(function () {
//     $('#input_fields_wrap').append('<tr><td><input type="text" class="fname" /></td><td><input type="button" value="Delete" /></td></tr>')
// });

// $('.myModal').on('click', function() {
//     $('#exampleModal').trigger('focus')
//         // $('#myModal').modal('toggle')
// });


// $(document).ready(function () {
 
//  /* When click edit user */
//  $('.editModalBtn').click(function(e) {
//     e.preventDefault();
//     var purchase_id = $(this).data('id');
//     $.ajax({
//         type: 'post',
//         data: {_token: CSRF_TOKEN,purchaseid: purchase_id,name: name,address: address},
//        url: $.get('purchase/' + user_id +'/edit', function (data) {

//             $('#editModal').html("Edit User");
//             // $('#btn-save').val("edit-user");
//             $('#editModal').modal('show');
//             $('#purchase_id').val(data.id);
//             $('#name').val(data.name);
//             $('#email').val(data.email);
//         })
//     })
//  })


//delete user login
// $('.editModalBtn').click(function(e) {
//     e.preventDefault();
//     var purchase_id = $(this).data('id');
//     confirm("Are You sure want to delete !");
//     $.ajax({
//     type: "DELETE",
//     url: "{{ url('purchase')}}"+'/'+purchase_id,
//     success: function (data) {
//     $("#purchase_id" + purchase_id).remove();
//     },
//     error: function (data) {
//     console.log('Error:', data);
//     }
//     });
//     });   
//     });

// $('.editModalBtn').click(function(e) {
//     e.preventDefault();
//     var purchase_id = $(this).data('id');
  
//     // var name = $('#name_'+edit_id).val();
//     // var email = $('#email_'+edit_id).val();
  
    
//       $.ajax({
//         url: 'ajaxView',
//         type: 'post',
//         data: {_token: CSRF_TOKEN,purchaseid: purchase_id,name: name,address: address},
//         success: function(response){
//           alert(response);
//         },
        
//         error: function(error) {
//             alert("error", error);
//         }  
        
//     });
//   });


//   $('.editModalBtn').click (function(e) {
//     e.preventDefault();
//     var purchase_id = $(this).data('id');
//     $.get('purchase/' + purchase_id +'/edit', function (data) {
//         $('#userCrudModal').html("Edit User");
//         $('#btn-save').val("edit-user");
//         $('#ajax-crud-modal').modal('show');
//         $('#user_id').val(data.id);
//         $('#name').val(data.name);
//         $('#email').val(data.email);
//         })
//           $.ajax({
//               type: 'post',
//               url: '/ajaxView',
//               data: {
//                   '_token': $('input[name=_token]').val(),
//                   'id': $("#purchase_id").val(),
//                   'name': $('#name').val()
//               },
//               success: function(data) {
//                   console.log(data);
//                 //   $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
//               }
//           });
//       });

    

// $('.editModalBtn').click(function(e) {
//     e.preventDefault();
//     var purchase_id = $(this).data('id');
//     var token = $('input[name=_token]').val();


    // $.ajax({
    //     url: 'ajaxView '+ purchase_id,
    //     method: 'POST',
        // dataType:"JSON",
        // data: {
        //     purchase_id: purchase_id,
        //     _token: token
      
        // },
        // data: {
        //     '_token': $('input[name=_token]').val(),
        //     'purchase_id': purchase_id
        // },
        // success: function(data) {
        //     console.log(data);
        // },

        // var id = $(this).data('id');
   
        // success: function (data) {
             
        //      $('#exampleModal').html("name");
        //     //  $('.editModalBtn').val("Edit");
        //      $('#purchase_id').val(data.data.id);
        //      $('#name').val(data.data.name);
        //      $('#address').val(data.data.address);
        //  },

        // success: function(data) {
        //     var parsedData = $.parseJSON(data.d);
        //     $('#name').val(data.name);
            // $('.modal-body').html(data);
            // success: function(data) {  
            //     var purchaseDetails = $.parseJSON(data.id);  
            //     $.each(purchaseDetails, function(index, value) {  
            //         $("#mobile").val(value.mobile);  
            //         name: $('#name').val();
            //         $("#address").val(value.address);  
                     
            //     });  
                // success: function (data) {
                //     console.log(data);
                //     // $('#purchase_id').val(data.id);
                //     $('#name').val(data.name);
                //     $('#address').val(data.address);
                // },

            // $('#show_name').html(data);  
            // $('#show_name').html(data);  
            // $("#name").val() ;
            // $("#address").val() ;

            // $("#modal").html("<div id='message'></div>");
            // console.log(data);
 
//         error: function(error) {
//             console.log("error", error);
//         },
//     });
// });


// $(document).ready(function() {

//     $('#editModal').click(function() {

//         var userid = $(this).data('id');

//         // AJAX request
//         $.ajax({
//             url: 'purchase/edit',
//             type: 'post',
//             data: { userid: userid },
//             success: function(response) {
//                 // Add response in Modal body
//                 $('#editModel').html(response);

//                 // Display Modal
//                 $('#editModel').modal('show');
//             }
//         });
//     });
// });







// $('#editModal').click(function(f) {
//     f.preventDefault(); // avoid to execute the actual submit of the form.


//     $.ajax({
//         url: '',
//         type: "POST",

//         data: { id: id, mobile: mobile, name: name, city: city, address: address, update: 1 }, // serializes the form's elements.
//         success: function(data) {
//             data = JSON.parse(data);
//             if (data.error) {
//                 message: "error ",
//                 $('#editModal').modal('hide');
//             }
//             else {
//                 $('#editModal').modal('hide');


//             }
//         }
//     });

// });


// $(document).ready(function () {

//     edit_purchase()
    
//     $.ajaxSetup({
//         headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//     });
    
//     //Get all company
//     function edit_purchase() {
        
//         $.ajax({
//             url: root_url,
//             type:'GET',
//             data: {    purchase_id: purchase_id,
//                     _token: token }
//         }).done(function(data){
//             table_data_row(data.data)
//         });
//     }
    
//     //Company table row
//     function table_data_row(data) {
    
//         var	rows = '';
        
//         $.each( data, function( key, value ) {
            
//               rows = rows + '<tr>';
//               rows = rows + '<td>'+value.name+'</td>';
//               rows = rows + '<td>'+value.address+'</td>';
//               rows = rows + '<td data-id="'+value.id+'">';
//                     rows = rows + '<a class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" id="editCompany" data-id="'+value.id+'" data-toggle="modal" data-target="#modal-id">Edit</a> ';
//                     rows = rows + '<a class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" id="deleteCompany" data-id="'+value.id+'" >Delete</a> ';
//                     rows = rows + '</td>';
//               rows = rows + '</tr>';
//         });
    
//         $("tbody").html(rows);
//     }
    
//     //Insert company data
//      $('#editModal').click(function(f) {
//        f.preventDefault(); // avoid to execute the actual submit of the form.
    
//         $('#modal-id').modal('show');
    
//     });
//         //Edit modal window
//         $('body').on('click', '#editModal', function (event) {
    
//             event.preventDefault();
//             var id = $(this).data('id');
           
//             $.get(store+'/'+ id+'/edit', function (data) {
                 
//                  $('#editModal').html("editModal");
//                  $('#editModal').modal('show');
//                  $('#editModal').val(data.data.id);
//                  $('#name').val(data.data.name);
//                  $('#address').val(data.data.address);
//              })
//         });

    
    // //Save data into database
    // $('body').on('click', '#submit', function (event) {
    //     event.preventDefault()
    //     var id = $("#company_id").val();
    //     var name = $("#name").val();
    //     var address = $("#address").val();
       
    //     $.ajax({
    //       url: store,
    //       type: "POST",
    //       data: {
    //         id: id,
    //         name: name,
    //         address: address
    //       },
    //       dataType: 'json',
    //       success: function (data) {
              
    //           $('#companydata').trigger("reset");
    //           $('#modal-id').modal('hide');
    //           Swal.fire({
    //             position: 'top-end',
    //             icon: 'success',
    //             title: 'Success',
    //             showConfirmButton: false,
    //             timer: 1500
    //           })
    //           get_company_data()
    //       },
    //       error: function (data) {
    //           console.log('Error......');
    //       }
    //   });
    // });
    

    
     //DeleteCompany
    //  $('body').on('click', '#deleteCompany', function (event) {
    //     if(!confirm("Do you really want to do this?")) {
    //        return false;
    //      }
    
    //      event.preventDefault();
    //     var id = $(this).attr('data-id');
     
    //     $.ajax(
    //         {
    //           url: store+'/'+id,
    //           type: 'DELETE',
    //           data: {
    //                 id: id
    //         },
    //         success: function (response){
              
    //             Swal.fire(
    //               'Remind!',
    //               'Company deleted successfully!',
    //               'success'
    //             )
    //             get_company_data()
    //         }
    //      });
    //       return false;
    //    });
    
    // });