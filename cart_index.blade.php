@extends('layouts.includes.main')
@section('title','Cart')
@section('content')

<div class="container"> 
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="#">Library</a></li>
  <li class="breadcrumb-item active">Data</li>
</ol>
<div class="row">
<div class="col-md-8 ">
  <div class="panel panel-default">
    <div class="panel-heading">Edit Cart</div>
      <div class="panel-body">
<br>
    <div class="row">
     <div class="col-md-5">
        <div class="thumnail-image">
          <img src="{{asset('/images/product_image.jpg')}}" alt="" />
           </div>
        </div>
    <div class="col-md-7">    
        <div class="title-product"> <h4 style="margin-top: 0;"><b>DressBerry Women Navy Blue Solid Chambray A-Line Dress</b></h4></div>
           <form action="#" method="post">
                {{ csrf_field() }}
                 {{ method_field('PUT') }}
               <input name="image" type="hidden" value="">
                  <div class="price"> <p> $10</p></div>
    <div class="row">
        <div class="col-xs-2">
            <label>QTY :</label>
        </div>
        <div class="col-md-8">
             <select  type="text" name="qty" class="form-control" >
                    <option value="#" class="disable selected">1</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
              </select>
        </div>
    </div>
    <br>
    <div class="row"> 
        <div class="col-md-2">
            <label>SIZE :</label>
        </div>
          <div class="col-md-8">
              <select name="size" class="form-control" >
                    <option value="#" >S</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
              </select>
        </div>
    </div>
    <br>
    <div class="row">
       <div class="col-md-4"></div>
         <div class="col-md-3">
            <button type="submit" class="btn btn-success btn-sm btn-block"><i class="fa fa-check"></i></button>
         </div>
       </form> 
        <div class="col-md-3"> 
            <form action="#" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                 <button type="submit" class="btn btn-danger btn-block btn-sm"><i class="fa fa-trash-o"></i></button>
            </form>

         </div>
        </div>
      </div>
     </div> <!-- row foreach -->
<hr>
  </div> <!-- panel body -->
       <div class="panel-footer">
          <div class="row">
            <div class="panel-footer">
           </div>
         <div class="col-md-7">
             <a href="#" class="btn btn-success" style="background-color: #303734; border: none">Continue Shopping</a>
              <a href="#" class="btn btn-success" style="background-color: #303734; border: none">Checkout Now</a>
          </div>
                     
          <div class="col-md-5">
             <div class="row">
                 <div class="col-md-5">
                     <b>
                      Items: 1 <br>
                      Tax: $10 <br> 
                      </b>
                </div>
                  <div class="col-md-7">
                      <b>
                        Sub Total: $10 <br>
                        Grand Total: $10</b>
                  </div>
            </div>
          </div>
         </div>
      </div> <!-- panel footer -->       
    </div>
</div> <!-- col md 8 -->

         <div class="col-md-4">
           @include('layouts.includes.sidebar_right')
        </div> <!-- col md 4 -->

    </div>
</div> <!-- container -->

@endsection
