@extends('admin.header')
@section('content')
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update Product</h1>
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
                                 <div class="col-lg-12">
                                 @foreach($products as $pro)
                                     
                             <form action="{{ route('product.update', $pro->id) }}"  name="form1" method="POST" enctype="multipart/form-data">
                          <div class="card">
                        @csrf
                        @method('put')
                                 <div class="card-body">
                                 <div class="card-header"><strong>Update Product</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="Exam" class=" form-control-label"> Product</label><input type="text" name="p_name" value="{{ $pro->title}}" placeholder="Add Question" class="form-control" ></div>
                                     <div class="form-group">
                                  <label for="sel1">Select list:</label>
                                  <select class="form-control" id="sel1" name="category">

                                     <option value="{{ $pro->category_id }}" selected hidden></option>
                                      @foreach($category as $cat)
                                         
                                         <option value="{{ $cat->id }}">{{ $cat->category}}</option>
                                            
                                      @endforeach

                                      </select>
                                    </div>
                                    <div class="form-group"><img src="{{ asset('storage/images/products/'.$pro->image) }}" height="50" width="50"><br><label for="Time" class=" form-control-label"> {{ $pro->image }}</label><input type="file" name="p_image1" placeholder="Update Image" class="form-control" style="padding-bottom:40px;"><br>
                                    <img src="{{ asset('storage/images/products/'.$pro->image1) }}" height="50" width="50"><br><label for="Time" class=" form-control-label"> {{ $pro->image1 }}</label><input type="file" name="p_image2" placeholder="Product Image" class="form-control" style="padding-bottom:40px;"><br>
                                    <img src="{{ asset('storage/images/products/'.$pro->image2) }}" height="50" width="50"><br><label for="Time" class=" form-control-label"> {{ $pro->image2 }}</label><input type="file" name="p_image3" placeholder="Product Image" class="form-control" style="padding-bottom:40px;"><br>
                                    <img src="{{ asset('storage/images/products/'.$pro->image3) }}" height="50" width="50"><br><label for="Time" class=" form-control-label"> {{ $pro->image3 }}</label><input type="file" name="p_image4" placeholder="Product Image" class="form-control" style="padding-bottom:40px;"></div>
                                     
                                     @foreach($product_details as $pro_details)
                                         
    
                                        <table class="table" id="myTable">
                        
                                            <tr>
                                                <input type="hidden" name="id[]" value="{{ $pro_details->id }}">
                                                <td><input type="text" name="spec[]"  value="{{ $pro_details->specifications}}" class="form-control" ></td>
                                                <td><input type="text" name="value[]"  value="{{ $pro_details->values}}" class="form-control" ></td>
                                                
                                            </tr>
                                        </table>
                                     
                                     @endforeach
                                       
                                      <div class="form-group"><input type="submit" name="submit1" id="submit1" placeholder="Exam In Minutes" class="btn btn-success" value="Update Product"></div>
                                        </div>

                                            </div>

                                 </div>
                                </form>
                                
                               @endforeach
                            </div>
                             </div>
                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->

@endsection