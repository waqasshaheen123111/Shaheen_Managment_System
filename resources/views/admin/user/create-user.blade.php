@extends('layouts.master')
@section('content')


<div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col-sm-12">
          <div class="page-sub-header">
            <h3 class="page-title">Add Users</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="students.html">Users</a>
              </li>
              <li class="breadcrumb-item active">Add Users</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card comman-shadow">
          <div class="card-body">
            <form action="{{url('admin/users')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="row">
                <div class="col-12">
                  <h5 class="form-title student-info">User Information <span>
                      <a href="javascript:;">
                        <i class="feather-more-vertical"></i>
                      </a>
                    </span>
                  </h5>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Name <span class="login-danger">*</span>
                    </label>
                    <input class="form-control" name="name" type="text" placeholder="Enter First Name">
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                      <label>E-Mail <span class="login-danger">*</span>
                      </label>
                      <input class="form-control" name="email" type="text" placeholder="Enter Email Address">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                      <label>Password <span class="login-danger">*</span>
                      </label>
                      <input class="form-control" name="password" type="password" placeholder="Enter Your Password">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group local-forms calendar-icon">
                    <label>Date Of Birth <span class="login-danger">*</span></label>
                    <input class="form-control datetimepicker" name="date" type="text" placeholder="DD-MM-YYYY">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                    <label>Mobile </label>
                    <input class="form-control" type="text" name="mobile" placeholder="Enter your Mobile Number">
                    </div>
                </div>
                <div class="col-12 col-sm-4">


                    <div class="form-group local-forms">
                        <input class="form-control" type="text" name="address" placeholder="Enter your Address" id="address-input">
                        <div id="address-dropdown"></div>
                    

                    </div>


                </div>















                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Role  <span class="login-danger">*</span>
                    </label>
                    <select id="select_role" name="role" class="form-control select">
                      <option>Select Role</option>
                      <option value="0" >User</option>
                      <option value="3">Teacher</option>
                      <option value="2">Student</option>
                      <option value="4" id="parents" >Parents</option>
                    </select>
                  </div>
                </div>
                <div class="row check_me card card-primary get_class d-none">



                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                          <label> Class <span class="login-danger">*</span>
                          </label>
                            <select id="select_role"  class="form-control select">
                                <option>Select your Class</option>
                                @foreach ($classes as $class)
                                <option value="{{$class->id}}" >{{$class->name.' ('.$class->groups.' )'}}</option>

                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                    


                                
                   
                 
                <div class="row">
                    <div class="col-md-12">
                        {{-- <h5><a href="" data-bs-toggle="modal" data-bs-target="#signup-modal">Sign Up Modal</a></h5> --}}
                        <h5><a  href="#" class="offset-5 text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" >Add new one Parent</a></h5>
                    </div>
                   

                </div>
                {{-- <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="text-center mt-2 mb-4">
                            <div class="auth-logo">
                              <a href="index.html" class="logo logo-dark">
                                <span class="logo-lg">
                                  <img src="assets/img/logo.png" alt="" height="42">
                                </span>
                              </a>
                            </div>
                          </div>
                          <form class="px-3" action="#">
                            <div class="mb-3">
                              <label for="username" class="form-label">Name</label>
                              <input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty">
                            </div>
                            <div class="mb-3">
                              <label for="emailaddress" class="form-label">Email address</label>
                              <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                            </div>
                            <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                            </div>
                            <div class="mb-3">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                <label class="form-check-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a>
                                </label>
                              </div>
                            </div>
                            <div class="mb-3 text-center">
                              <button class="btn btn-primary" type="submit">Sign Up Free</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div> --}}

                <div class="col-sm-12">
                    <div class="card card-table comman-shadow">
                      <div class="card-body pb-0">
                        <div class="page-header">
                          <div class="row align-items-center">
                            <div class="col">
                              <h3 class="page-title">Parents</h3>
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">
                              <a id="simple_view" class="btn btn-outline-gray me-2">
                                <i class="feather-list"></i>
                              </a>
                              <a href="students-grid.html" class="btn btn-outline-gray me-2 active">
                                <i class="feather-grid "></i>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="student-pro-list">
                          <div class="row dynamic_row_parent">
              
                            @foreach ($parents as $parent)
                                  
                             
                            <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                              <div class="card">
                                <div class="card-body">
                                  <div class="student-box flex-fill">
                                    <div class="student-img">
                                      
                                        
                                  <img class="img-fluid" alt="Students Info" style="height: 150px;width:200px" src="{{asset('uploads/users/'.$parent->user->images->first()->img)}}">
                                     
                                    </div>
                                    <div class="student-content pb-0">
                                      <h5>
                                        <label class="file-upload image-upbtn mb-0">
                                            {{-- {{dd($parent->user->images->first()->img);}} --}}
                                           
                                            {{$parent->user->name}}
                                        </label>
                                        <input type="checkbox" name="parent" value="{{$parent->id}}">
                                      </h5>
                                     <h5></h5>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endforeach
              
                            {{-- Hello  --}}
                            {{-- this is changes --}}
                            {{-- this is changes --}}

              
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
             
            {{-- <div  class="card-body">    
                <div class="row dynamic_row_parent" >
                    @foreach ($parents as $parent)
                        
                            
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('uploads/users/'.$parent->user->images->first()->img)}}" height="150px" width="150px" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">{{$parent->user->name}}</h5>
                              
                            </div>
                          </div>
                            <input type="checkbox" name="parent" value="{{$parent->id}}">
                        @endforeach

                    
                       
                </div>
            </div>   
                --}}
               
                    
             
            </div>
                {{-- <div class="col-12 col-sm-4">
                  <div class="form-group local-forms calendar-icon">
                    <label>Date Of Birth <span class="login-danger">*</span>
                    </label>
                    <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
                  </div>
                </div> --}}
           
              
               
            
              
           
            
             
                <div class="col-12 col-sm-12" id="container">
                    <div class="row default_row">
                        <div class="form-group students-up-files col-12 col-sm-4">
                          <label>Upload Student Photo (150px X 150px)</label>
                          <div class="uplod">
                            <label class="file-upload image-upbtn mb-0">
                              Choose File
                              <input id="image_1" name="dp[]" type="file" class="custom-file-input image-append">
                            </label>
                          </div>
                        </div>
                        <div id="output_1" class="col-12 offset-sm-2 col-sm-2 d-none">
                          <img class="img-fluid" id="preview_1" height="150px" width="150px">
                        </div>
                        <div class="col-12 offset-sm-2 col-sm-2" id="add_button_1">
                          <button class="btn btn-success mt-4 add-row">Add</button>
                        </div>
                    </div>
                  
                </div>
                <div class="col-12">
                  <div class="student-submit">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


 
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Parent</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form id="form2">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name">
                </div>
            
                <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password">
                </div>
          
                <div class="form-group col-md-6">
                    <label for="">Select Role </label>
                    <select  name="role" class="form-control" aria-label="Default select example"  >
                       
                        <option value="4"  >Parents</option>
                    </select>
                </div>
                <div class="form-group col-md-6" >
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="dp" type="file" class="custom-file-input image-append">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        
                     
                    </div>
                    
                   
                </div>    
            </div>
          
            </div>
            <div class="modal-footer">
                <button id="closed" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Save changes</button>
            </div>
            
        </form>
      </div>
    </div>
  </div>








@endsection
@push('push-script')

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
{{-- 
<script>
    // Get the input field and the dropdown list
    const inputField = document.getElementById('address-input');
    const dropdownList = document.getElementById('address-dropdown');

    // Send a GET request to the Nominatim API with the search query
    function searchAddress(query) {
        const url = `https://nominatim.openstreetmap.org/search?format=json&limit=5&q=${query}`;
        axios.get(url).then(response => {
            // Parse the response and extract the address suggestions
            const suggestions = response.data.map(result => result.display_name);

            // Create a dropdown list with the extracted address suggestions
            const dropdownHTML = suggestions.map(suggestion => `<div>${suggestion}</div>`).join('');
            dropdownList.innerHTML = dropdownHTML;

            // Show the dropdown list below the address field
            dropdownList.style.display = 'block';
        }).catch(error => {
            console.error(error);
        });
    }

    // Handle the input field's keyup event
    inputField.addEventListener('keyup', event => {
        const query = event.target.value;
        if (query.length > 3) {
            searchAddress(query);
        } else {
            dropdownList.style.display = 'none';
        }
    });
</script> --}}
<script>
    const addressInput = document.querySelector('#address-input');
const addressDropdown = document.querySelector('#address-dropdown');

// Add event listener to the input field
addressInput.addEventListener('keyup', (event) => {
  const address = event.target.value;

  // Make an AJAX request to the Nominatim API to get suggestions based on the entered address
  axios.get(`https://nominatim.openstreetmap.org/search?q=${address}&format=json`)
    .then((response) => {
      // Clear the previous suggestions from the dropdown
      addressDropdown.innerHTML = '';

      // Loop through the response data and add each suggestion to the dropdown
      response.data.forEach((place) => {
        const suggestion = document.createElement('div');
        suggestion.classList.add('dropdown-item');
        suggestion.innerText = place.display_name;
        suggestion.addEventListener('click', () => {
          // Set the value of the input field to the selected suggestion
          addressInput.value = place.display_name;

          // Hide the dropdown
          addressDropdown.innerHTML = '';
        });

        addressDropdown.appendChild(suggestion);
      });
    })
    .catch((error) => {
      console.error(error);
    });
});
</script>

<script>
$(document).ready(function() {
    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
  var addButton = $('.add-row');
  var container = $('#container');
  var index = 1;

  $(addButton).click(function() {
    event.preventDefault();
 
    index++;
    var newRow = $('<div class="row new_row"></div>');
    var formGroup = $('<div class="form-group students-up-files col-12 col-sm-4"></div>');
    var label = $('<label>Upload Student Photo (150px X 150px)</label>');
    var uplod = $('<div class="uplod"></div>');
    var fileLabel = $('<label class="file-upload image-upbtn mb-0">Choose File</label>');
    var inputFile = $('<input id="image_' + index + '" name="dp[]" type="file" class="custom-file-input image-append">');
    var outputDiv = $('<div id="output_' + index + '" class="col-12 offset-sm-2 col-sm-2 d-none"></div>');
    var img = $('<img class="img-fluid" id="preview_' + index + '" height="150px" width="150px">');
  

    var removeButtonDiv = $('<div class="col-12 offset-sm-2 col-sm-2"></div>');
    
    // create remove button only if it is not the first row
    if (index > 1) {
      var removeBtn = $('<button class="btn btn-danger mt-4 remove-row">Remove</button>');
      removeButtonDiv.append(removeBtn);
    }
    
    // append elements to newRow
    uplod.append(fileLabel);
    uplod.append(inputFile);
    formGroup.append(label);
    formGroup.append(uplod);
    outputDiv.append(img);

    newRow.append(formGroup);
    newRow.append(outputDiv);

    newRow.append(removeButtonDiv);
    container.append(newRow);
  });

  $(document).on('change', '.image-append', function() {
    var id = $(this).attr('id').split('_')[1];
    var img = $('#preview_' + id);
    var outputDiv = $('#output_' + id);
    var file = $(this)[0].files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      img.attr('src', e.target.result);
      outputDiv.removeClass('d-none');
    };
    reader.readAsDataURL(file);
  });

  $(document).on('click', '.remove-row', function() {
    $(this).closest('.new_row').remove();
  });


  $("#select_role").change(function() {
            var selected_role = $(this).children("option:selected").val();
      
           
            if (selected_role=='2') {
               $(".get_class").removeClass("d-none");
            }else{
                $(".get_class").addClass("d-none");
            }
           
    });







//    For add new parent with ajax method through dynamicallay
    $("form#form2").submit(function(e){
            e.preventDefault();
            var formData = new  FormData($(this)[0]);
            // return 0;
            $.ajax({
                type: "post",
                url:  "{{url('admin/users/parents')}}",
                data:formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(res) {
                    // alert(res.message);
                    console.log(res)
                   
                    $(".dynamic_row_parent").html(res.html);
                    $("#closed").click();
                    alert(res.message);
                }
                
            });
        });




        // End Here








});





//     $('#image_1').change(function(event) {
//         var id = $(this).attr('id').split("_")[1];
//         $('#output_'+id).removeClass('d-none');
//         var output = $('#preview_'+id).get(0);
//         output.src = URL.createObjectURL(event.target.files[0]);
//     });
// });


</script>

@endpush