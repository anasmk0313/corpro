@extends('admin.header')
@section('content')

        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Category</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                        
                        
                            <form action="{{ route('category.update',$category->id) }}"  name="form1" method="POST">
                            @csrf
                            @method('put')
                                 <div class="card-body">
                                 <div class="card-header"><strong>Edit</strong><small> Category</small></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="Exam" class=" form-control-label"> Exam Category</label><input type="text" name="cat_name" placeholder="New Category" class="form-control" value="{{ $category->category }}"></div>
                                 

                                      <div class="form-group"><input type="submit" name="submit1" id="submit1" placeholder="Exam In Minutes" class="btn btn-success" value="Update Exam"></div>
                                        
                                            </div>

                                 </div>
                             </form>
                             
                            </div>
                        </div> <!-- .card -->

                     </div>     

    @if(Session::has('categoryUpdate'))
        <script type="text/javascript">
            alert("{{ Session::get('categoryUpdate') }}");
            window.location.href ="../../category";
        </script>
    @endif
    
    
@endsection