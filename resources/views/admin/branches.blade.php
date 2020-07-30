@extends('admin.header')
@section('content')
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Branches</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <form name="insert" action="{{ route('branch.store') }}" method="post">
                            @csrf
                                    <div class="card-body">
                                <table width="100%" height="117"  border="0">
                                <tr>
                            <th width="27%" height="63" scope="row">Sate :</th>
                            <td width="73%"><select name="state" id="state" class="form-control state" >
                            <option value="">Select State</option>
                            @foreach($state as $state)
                              
                            <option value="{{ $state->StCode }}">{{ $state->StateName }}</option>
                              
                            @endforeach
                            </select></td>
                            </tr >
                           <tr >
                          <th scope="row">District :</th>
                           <td><select name="district" id="district-list" class="form-control">
                           <option value="">Select</option>
                           </select></td>
                              </tr>
                              <tr>
                           <th scope="row">Branch name:</th>
                            <td><input  name="branch" id="branch" class="form-control">
                           </td>
                            </tr>
                            <tr>
                            <th scope="row">Address Line1:</th>
                            <td><input  name="add1" id="add1" class="form-control">
                           </td>
          
                           </tr>

                            <tr>
                            <th scope="row">Address Line2:</th>
                            <td><input  name="add2" id="add2" class="form-control">
                           </td>
          
                           </tr>

                            <tr>
                            <th scope="row">Pincode:</th>
                            <td><input  name="pincode" id="pincode" class="form-control">
                           </td>
          
                           </tr>
                          
                              
                       </table><br>
                        <div class="form-group" style="text-align: center;"><input type="submit" name="submit1" id="submit1" class="btn btn-primary" value="Add Branch"></div>
                                        
                   </div>
                           </form>
                            </div>
                        </div> <!-- .card -->

                   
                    <!--/.col-->
                     
                    
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Branch Name</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Branch Name</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($branch as $branch)
                                         

                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $branch->b_name }}</td>
                                          
                                            <td>
                                            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">
                                                <i class="fa fa-close"></i>
                                            </a>
                                            <form action="{{ route('branch.destroy', $branch->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            </form>
                                            </td>
                                        </tr>
                                       
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                     </div>     
    @if(Session::has('brancheAdd'))
     
        <script type="text/javascript">
            alert("{{ Session::get('branchAdd') }}");
        </script>
    @endif

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


<script>
$(document).ready(function(){
    $(document).on('change', '#state', function(){
        //console.log('its change');
        
        var id = $(this).val();
        
        var op = " ";
        //console.log(id)
        $.ajax({
            type:'get',
            url:'{{ route("branch.create") }}',
            data:{'id':id},
            success:function(data){
                //console.log("success");
                //console.log(data);
                //console.log(data.length);

                op += '<option value="">Select District</option>';
                for(var i=0; i<data.length; i++){
                    op += '<option value="'+data[i].DistrictName+'">'+data[i].DistrictName+'</option>';
                }
                $('#district-list').html(op);
                

            }
        });
    });
});
</script>


@endsection