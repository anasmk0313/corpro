@extends('admin.header')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update Slider</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">



                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            
                            <div class="card-body">

                               <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Slider1</th>
                                            <th scope="col">Slider2</th>
                                            <th scope="col">Slider3</th>
                                         
                                        </tr>
                                    </thead>
                        @foreach($slider as $slider)
                            
                        <tr id="tblrow">
                            <td>  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><img src="{{ asset('storage/images/slider/'.$slider->image1) }}" width="100px" height="100px" title="click here to update image"></button></td>
                            <td> <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1"><img src="{{ asset('storage/images/slider/'.$slider->image2) }}" width="100px" height="100px" title="click here to update image"></button></td>
                            <td> <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2"><img src="{{ asset('storage/images/slider/'.$slider->image3) }}" width="100px" height="100px" title="click here to update image"></button></td>
                        </tr>
                        
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update Slider1</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form action="{{ route('slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">

                                            <div class="custom-file mb-3">
                                            @csrf
                                            @method('put')
                                                <input type="hidden" value="1" name="slideid1">
                                                <input type="file" class="custom-file-input" id="customFile" name="slide1" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            
                                            <div class="col-md-3 offset-md-3">
                                                <input type="submit" class="btn btn-primary" name="submit1" value="change image">
                                            </div>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update Slider2</h4>
                                    </div>
                                
                                    <div class="modal-body">

                                        <form action="{{ route('slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">

                                            <div class="custom-file mb-3">
                                            @csrf
                                            @method('put')
                                                <input type="hidden" value="2" name="slideid2">
                                                <input type="file" class="custom-file-input" id="customFile" name="slide2" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            
                                            <div class="col-md-3 offset-md-3">
                                                <input type="submit" class="btn btn-primary" name="submit2" value="change image">
                                            </div>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update Slider3</h4>
                                    </div>
                                 
                                    <div class="modal-body">

                                        <form action="{{ route('slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">

                                            <div class="custom-file mb-3">
                                            @csrf
                                            @method('put')
                                                <input type="hidden" value="3" name="slideid3">
                                                <input type="file" class="custom-file-input" id="customFile" name="slide3" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            
                                            <div class="col-md-3 offset-md-3">
                                                <input type="submit" class="btn btn-primary" name="submit3" value="change image">
                                            </div>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </table>

              

                           </div>
                          </div>
                        </div>
                        </div> <!-- .card -->



                    </div>

                   


@endsection