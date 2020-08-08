@extends("layouts.app")
@section("title","Color-Selector")
@section("content")

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="faq-full">
                    <div class="faq-details">
                        <div class="panel-group" id="accordion">
                            <!-- Panel Default -->
                            <?php
                            $i=1;
                            ?>
                            @foreach($category as $category)
                            
                            @if ($i==1) 
                            <div class="panel panel-default border-none">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" class="active" data-parent="#accordion"  href="#{{$category->id}}" >
                                            <span class="acc-icons"></span>{{$category->category}}
                                        </a>
                                    </h4>
                                </div>
                                <div  class="panel-collapse collapse in" id="{{$category->id}}">
                                   <div class="panel-body border-none innerpanel" id="check1">
                                
                                   
                                </div>

                              
                            </div>
                            </div>
                            
                            @else
                            
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                    <a data-toggle="collapse" class="active" data-parent="#accordion" data-id="{{$category->id}}" id="cat_id2"   href="#{{$category->id}}" >
                                            <span class="acc-icons"></span>{{$category->category}}
                                        </a>
                                    </h4>
                                </div>
                                <div id="{{$category->id}}" class="panel-collapse collapse">
                                    <div class="panel-body innerpanel" id="check2">
                                       
                                        
                                    </div>
                                </div>
                            </div>
                          
                            @endif
                            <?php
                            $i++;
                            ?>
                            
                            @endforeach
                           

                            <!-- End Panel Default -->
                          
                        </div>
                    </div>
                    <!-- End FAQ -->
                </div>
            </div>
@foreach($single__product as $product_details)
<div id="p_details">
    <div class="col-md-4 col-sm-3 col-xs-6">
    <div class="about-image">
        <img src="{{$product_details->image}}" alt="">
    </div>
</div>


<div class="col-md-5 col-sm-4 col-xs-12">
    <div class="about-content p-0">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="about-image">
                    <img src="{{ asset('storage/images/products/'.$product_details->image) }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="about-image">
                    <img src="{{ asset('storage/images/products/'.$product_details->image1) }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="about-image">
                    <img src="{{ asset('storage/images/products/'.$product_details->image2) }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="about-image">
                    <img src="{{ asset('storage/images/products/'.$product_details->image3) }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


</div>
</div>
</div>
   </div>
@endforeach

      
     
          <div class="about-area area-padding">
    <div class="container">
        <div class="row pspec">
            <div class="col-md-12 text-center">
                <h2>Product Specification</h2>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-8">

            <div id="p_details1">
            @foreach($product_detail as $product_detail)
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 left">
                        <p>{{ $product_detail->specifications }}</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 right">
                        <p>{{ $product_detail->values }}</p>
                    </div>
                </div>

            @endforeach
           </div>
    
           </div>
    </div>
</div>
</div>
</div>
@endsection


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

     <script>
   $(document).ready(function() {
       let cat_id          = 1;
        $.ajax({
            url: "/productsdetails",
            type: "POST",
            data:{ 
                cat_id:cat_id,
                _token:'{{ csrf_token() }}'
            },
            success: function(dataResult){
                var resultData = JSON.parse(dataResult);
                var bodyData = '';
                
                
                                        
                $.each(resultData,function(index,row){
                    bodyData+="<div class='row' id='"+row.id+"' onClick='myFun(this.id)'>"
                    bodyData+= "<div class='col-md-4 col-sm-4 col-xs-4'>"
                    //bodyData+= "<img class='floatleft' src='/"+row.image+"'>";
                    bodyData+= "<img class='floatleft' src='{{ asset("storage/images/products/") }}/"+row.image+"'>";
                    bodyData+=  "</div>";
                    bodyData+=" <div class='col-md-8 col-sm-8 col-xs-8 p-0'>"
                    bodyData+=row.title;               
                    bodyData+="</div>";
                    bodyData+="</div>";
                   
    
                    
                })
                $("#check1").html(bodyData);
            }
        });
   });


     

    $(document).ready(function() {
    $('a[data-toggle="collapse"]').click(function(){


     let cat_id          = $(this).attr('data-id');
        $.ajax({
            url: "/productsdetails",
            type: "POST",
            data:{ 
                cat_id:cat_id,
                _token:'{{ csrf_token() }}'
            },
            success: function(dataResult){
                var resultData = JSON.parse(dataResult);
                var bodyData = '';
                
                
                                        
                $.each(resultData,function(index,row){
                    bodyData+="<div class='row'   id='"+row.id+"' onClick='myFun(this.id)'>"
                    bodyData+= "<div class='col-md-4 col-sm-4 col-xs-4'>"
                    //bodyData+= "<img class='floatleft' src='/"+row.image+"'>";
                    bodyData+= "<img class='floatleft' src='{{ asset("storage/images/products/") }}/"+row.image+"'>";
                    bodyData+=  "</div>";
                    bodyData+=" <div class='col-md-8 col-sm-8 col-xs-8 p-0'>";
                    bodyData+=row.title ;               
                    bodyData+="</div>";
                    bodyData+="</div>";
    
                    
                })
                $("#check2").html(bodyData);
                
            }
        });
                 
    });
   });



      myFun=(p_id)=>{
     
        $.ajax({
            url: "/products_details/"+p_id,
            type: "GET",
           
            success: function(dataResult){
                var resultData = JSON.parse(dataResult);
                var bodyData = '';
                var bodyData1 = '';
                                     
                                   
                $.each(resultData,function(index,row){
                   
                bodyData+='<div class="col-md-4 col-sm-3 col-xs-6"> <div class="about-image"><img src="{{ asset('storage/images/products/') }}/'+row.image+'" alt=""></div></div> <div class="col-md-5 col-sm-4 col-xs-12"> <div class="about-content p-0"><div class="row">'
                bodyData+='<div class="col-md-6 col-sm-6 col-xs-12"><div class="about-image"><img src="{{ asset('storage/images/products/') }}/'+row.image+'" alt=""></div></div><div class="col-md-6 col-sm-6 col-xs-12"><div class="about-image"><img src="{{ asset('storage/images/products/') }}/'+row.image1+'" alt=""> </div> </div>';
                bodyData+='<div class="col-md-6 col-sm-6 col-xs-12"><div class="about-image"><img src="{{ asset('storage/images/products/') }}/'+row.image2+'" alt=""></div></div><div class="col-md-6 col-sm-6 col-xs-12"><div class="about-image"><img src="{{ asset('storage/images/products/') }}/'+row.image3+'" alt=""> </div> </div></div></div> </div>';
                

                bodyData1+=' <div class="row">  <div class="col-md-6 col-sm-6 col-xs-6 left"> <p>'+row.specifications+'</p> </div><div class="col-md-6 col-sm-6 col-xs-6 right"><p>'+row.values+'</p></div></div>';
                //bodyData1+='<div class="row">  <div class="col-md-6 col-sm-6 col-xs-6 left"> <p>Weight/Pc</p> </div><div class="col-md-6 col-sm-6 col-xs-6 right"><p>'+row.weight+'</p></div></div><div class="row">  <div class="col-md-6 col-sm-6 col-xs-6 left"> <p>Thickness</p> </div><div class="col-md-6 col-sm-6 col-xs-6 right"><p>'+row.thickness+'</p></div></div>';
                //bodyData1+='<div class="row">  <div class="col-md-6 col-sm-6 col-xs-6 left"> <p>Water Absorption</p> </div><div class="col-md-6 col-sm-6 col-xs-6 right"><p>'+row.water_absorption+'</p></div></div><div class="row">  <div class="col-md-6 col-sm-6 col-xs-6 left"> <p>Composition</p> </div><div class="col-md-6 col-sm-6 col-xs-6 right"><p>'+row.composition+'</p></div></div>';
                //bodyData1+='<div class="row">  <div class="col-md-6 col-sm-6 col-xs-6 left"> <p>Installation</p> </div><div class="col-md-6 col-sm-6 col-xs-6 right"><p>'+row.installation+'</p></div></div><div class="row">  <div class="col-md-6 col-sm-6 col-xs-6 left"> <p>Working life</p> </div><div class="col-md-6 col-sm-6 col-xs-6 right"><p>'+row.working_life+'</p></div></div>';
//         
              
                })
                $("#p_details").html(bodyData);
                $("#p_details1").html(bodyData1);
                
            }
                 
            });
 
       }

      
        </script>



