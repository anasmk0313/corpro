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
                                 @foreach($product as $pro)
                                     
                             <form action="{{ route('product.update', $pro->id) }}"  name="form1" method="POST" enctype="multipart/form-data">
                          <div class="card">
                        @csrf
                        @method('put')
                                 <div class="card-body">
                                 <div class="card-header"><strong>Update Product</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="Exam" class=" form-control-label"> Product</label><input type="text" name="title" value="{{ $pro->title}}" placeholder="Add Question" class="form-control" ></div>
                                     <div class="form-group">
                                  <label for="sel1">Select list:</label>
                                  <select class="form-control" id="sel1" name="category">

                                     <option value="{{ $pro->category_id }}" selected hidden></option>
                                      @foreach($category as $cat)
                                         
                                         <option value="{{ $cat->id }}">{{ $cat->category}}</option>
                                            
                                      @endforeach

                                      </select>
                                    </div> 
                                    <div class="form-group"><img src="{{ asset('storage/images/products/'.$pro->image)}}" height="50" width="50"><br><label for="Time" class=" form-control-label"> Image</label><input type="file" name="image" placeholder="Update Image" class="form-control" style="padding-bottom:40px;"></div>
                                     
                                       <div class="form-group"><label for="Size" class=" form-control-label"> Size</label><input type="text" name="size" placeholder="Size" value="{{ $pro->size }}" class="form-control" ></div>

                                       <div class="form-group"><label for="Weight" class=" form-control-label"> Weight</label><input type="text" name="weight" placeholder="Weight" value="{{ $pro->weight }}" class="form-control" ></div>
                                       <div class="form-group"><label for="Thickness" class=" form-control-label"> Thickness</label><input type="text" name="thickness" placeholder=" Thickness" value="{{ $pro->thickness }}" class="form-control" ></div>

                                         <div class="form-group"><label for="Water_absorption" class=" form-control-label"> Water_absorption</label><textarea name="water_absorption" placeholder="Water Absorption" class="form-control" >{{ $pro->water_absorption }}
                                         </textarea  >


                                           <div class="form-group"><label for="Composition" class=" form-control-label"> Composition</label><textarea  name="composition" placeholder="Composition"  class="form-control" >{{ $pro->composition }}
                                           </textarea >

                                             <div class="form-group"><label for="Installation" class=" form-control-label"> Installation</label><textarea name="installation" placeholder="Installation"  class="form-control" >{{ $pro->installation }}</textarea>

                                             <div class="form-group"><label for="Working Life" class=" form-control-label"> Working Life</label><textarea name="working_life" placeholder="Working life"  class="form-control" >{{ $pro->working_life }}</textarea>

                                      <div class="form-group"><input type="submit" name="submit1" id="submit1" placeholder="Exam In Minutes" class="btn btn-success" value="Update Question"></div>
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