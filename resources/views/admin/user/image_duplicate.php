
{{-- Code for Image duplication --}}
<div class="row">
    <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password">
    </div>

        <div class="form-group col-md-6">
            <label for="">Select Role </label>
            <select name="role" class="form-control" aria-label="Default select example">
                <option value="0" selected>User</option>
                <option value="3">Teacher</option>
                <option value="2">Student</option>
                <option value="4">Parents</option>
            </select>
        </div>
    </div>
    <div class="row append">
        <div class="col-md-12 d-flex" id="append_1">

            <div class="col-md-8" >
                <div class="form-group col-md-6" >
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input id="imge_1"  name="dp" type="file" class="custom-file-input image-append"  onchange="loadFile($(this),event)">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        
                     
                    </div>
                    
                   
                </div>                
                
            </div>
            <div id="output_1" class="col-md-2 d-none ">
                <img class="img-circle elevation-2" id="preview_1" height="150px" width="100px">
                
            </div>
            <div class="col-md-2" id="add_button_1">
                <button id="button-append" class="btn btn-success mt-4">Add</button>
            </div>
        </div>
        
    </div>

    <div class="row dynamic_row ">

    </div>




    <script>
        function loadFile(_this,event){
            // alert(_this.attr('id'))
            let id=_this.attr('id').split("_")[1];
            $('#output_'+id).removeClass("d-none");
            var output=document.getElementById('preview_'+id);
            output.src=URL.createObjectURL(event.target.files[0]);
        };
    </script>
    <script>
            $("#button-append").click(function() {        
                event.preventDefault()
                var counter= $("#counter").val();
                counter++;
                var clone=$('.append').clone()
                clone.find('[id*="1"]').each(function() {
                    this.id= this.id.replace('1',counter);

                });
                 clone.find("#output_"+counter).addClass('d-none')
                
                clone.find("#add_button_"+counter).html('<button id="button-append_'+counter+'" class="btn btn-danger mt-4"  onclick="removeRow($(this))">remove</button>')
              var dynamic_row= $('.dynamic_row').append(clone.html());
              $("#counter").val(counter)
               
            });   

            function removeRow(_this){
                event.preventDefault()
                var ab=_this.attr('id');
                // alert(ab);
                // alert(  ab.split('_')[1]);
                
                let id=ab.split('_')[1];
                $("#append_"+id).remove();
            }
    </script>