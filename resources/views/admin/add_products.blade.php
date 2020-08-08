@extends('admin.header')
@section('content')

<style>
   .addbt{
       display:flex;
       justify-content: space-between;
   }
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.js"></script>

 <script type='text/javascript'>
// $(window).load(function(){
// $(document).ready(function () {
//     $('.hidediv').hide();
//     $('#option1').show();
//     $('#prodop').change(function () {
//         $('.hidediv').hide();
//         $('#'+$(this).val()).fadeIn();
//     });
// });
 
// });
</script>
<script type="text/javascript">
        function displayResult()
        {
            document.getElementById("myTable").insertRow(-1).innerHTML = '<td><input type="text" name="spec[]"  placeholder="Specification" class="form-control" ></td><td><input type="text" name="value[]"  placeholder="Value" class="form-control" ></td>';
        }
        function delrow()
        {
            document.getElementById("myTable").deleteRow(0);
        }
        </script>
<style>
    .hidediv{
        display:none;
    }
</style>

        <!-- Header-->


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Products</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                               <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                             <form action=" {{ route('product.store') }}"  name="form1" method="POST" enctype="multipart/form-data">
                          <div class="card">
                        @csrf
                                 <div class="card-body">
                                 <div class="card-header"><strong>Add New Products</small></div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                  <label for="sel1">Select list:</label>
                                  <select class="form-control" id="sel1" name="category">
                                        @foreach($category as $cat)
                                          
                                         <option value="{{ $cat->id }}">{{ $cat->category}}</option>
                                        @endforeach
                                     
                                      </select>
                                    </div> 
                                   
                                        
                                        <!-- options-->
                                        
                                            
                                            <div class="form-group"><label for="Products" class=" form-control-label">Product Name</label><input type="text" name="p_name" placeholder="Product Name" class="form-control" ></div>

                                    <div class="form-group"><label for="Time" class=" form-control-label">Product Image</label><input type="file" name="p_image1" placeholder="Product Image" class="form-control" style="padding-bottom:40px;"><br>
                                    <input type="file" name="p_image2" placeholder="Product Image" class="form-control" style="padding-bottom:40px;"><br>
                                    <input type="file" name="p_image3" placeholder="Product Image" class="form-control" style="padding-bottom:40px;"><br>
                                    <input type="file" name="p_image4" placeholder="Product Image" class="form-control" style="padding-bottom:40px;"></div>
                                    
                                            <div class="form-group pt-3 addbt">
                                                <button class="btn btn-success" type="button" onclick="displayResult()">Insert new row</button> 
                                                <button class="btn btn-danger align-right" type="button" onclick="delrow()">Delete row</button> 
                                            </div>
                                            
                                            <div class=" table-responsive">
                                            <table class="table" id="myTable">
                                                <tr>
                                                    <td><input type="text" name="spec[]"  placeholder="Specification" class="form-control" ></td>
                                                    <td><input type="text" name="value[]"  placeholder="Value" class="form-control" ></td>
                                                </tr>
                                            </table>
                                            </div>
                                            <div class="form-group pt-3"><input type="submit" name="" id="" class="btn btn-success" value="Add Product"></div>
                                            
                                        
                                        
                                    </div>

                                 </div>
                            
                            </div>
                             </div>
                            
                             </form>
                            </div>
                        <!-- .card -->

                     </div>     

                            </div>

<!-- 
                   
                    /.col-->
                                          
                                       

@if(Session::has('productAdd'))
    
    <script type="text/javascript">
        alert("{{ Session::get('productAdd')}}");
    </script>
@endif
    
@endsection