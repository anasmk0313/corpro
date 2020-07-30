@extends('admin.header')
@section('content')
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
                                    <div class="form-group"><label for="Products" class=" form-control-label">Product Name</label><input type="text" name="p_name" placeholder="Product Name" class="form-control" ></div>

                                    <div class="form-group"><label for="Time" class=" form-control-label">Product Image</label><input type="file" name="p_image" placeholder="Product Image" class="form-control" style="padding-bottom:40px;"></div>

                                      <div class="form-group"><label for="Size" class=" form-control-label">Size</label><input type="text" name="size" placeholder="Product Size" class="form-control" ></div>

                                     <div class="form-group"><label for="Weight" class=" form-control-label">Weight</label><input type="text" name="weight" placeholder="Weight" class="form-control" ></div>

                                     <div class="form-group"><label for="Thickness" class=" form-control-label">Thickness</label><input type="text" name="thickness" placeholder="Thickness" class="form-control" ></div>

                                    <div class="form-group"><label for="Water Absorption" class=" form-control-label">Water Absorption</label><textarea  name="water_absorption" placeholder="Water Absorption" class="form-control" ></textarea >

                                         <div class="form-group"><label for="Composition" class=" form-control-label">Composition</label><textarea  name="composition" placeholder="Composition" class="form-control" ></textarea >

                                            <div class="form-group"><label for="Installation" class=" form-control-label">Installation</label><textarea  name="installation" placeholder="Installation" class="form-control" ></textarea >

                                               <div class="form-group"><label for="Working Life" class=" form-control-label">Working Life</label><textarea  name="working_life" placeholder="Working Life" class="form-control" ></textarea >

                                   
                                            
                                      <div class="form-group"><input type="submit" name="submit1" id="submit1" placeholder="Exam In Minutes" class="btn btn-success" value="Add Product"></div>
                                        
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