@extends('admin.header')
@section('content')
        <!-- Header-->


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>View Products</h1>
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

                               <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Image</th>
                                           
                                             <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($product->reverse() as $pro)
                                           
                                        <tr>
                                            <td>{{ $loop->iteration}} </td>
                                             <td>{{ $pro->title }}</td>
                                            
                                             <td><img src= "{{ asset('storage/images/products/'.$pro->image) }}"  height='50',width='50'></td>
                                            
                                       
                                            
                                          <td> <a href="{{ route('product.edit',$pro->id) }}"> <i class='fa fa-eye'> </i></a></td>
                                       
                                            
                                            
                                             <td>
                                               <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()"> <i class='fa fa-close'> </i></a>
                                               <form action="{{ route('product.destroy', $pro->id) }}" method="post">
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
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->
                   
                    <!--/.col-->
                @if(Session::has('productUpdate'))
                    <script type="text/javascript">
                        alert("{{ Session::get('productUpdate') }}");
                    </script>
                @endif          

@endsection