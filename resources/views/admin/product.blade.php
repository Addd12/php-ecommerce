<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
        .title{
            color:white; 
            padding-top: 25px; 
            font-size: 25px
        }
        label
        {
          display: inline-block;
          width: 200px;
        }
    </style>
  </head>
  <body>
        @include('admin.sidebar')
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <h1 class="title">Add Products</h1>
                @if(session()->has('message'))
                <div class="alert alert-success">
                  <button type="button" class="btn-close" data-bs-dismiss="alert">X</button>
                  
                  {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div style="padding: 15px">
                    <label>Product title</label>
                    <input style="color: black" type="text" name="title" placeholder="Product title" required=""/>
                  </div>

                  <div style="padding: 15px">
                    <label>Product price</label>
                    <input style="color: black" type="number" name="price" placeholder="Product price" required=""/>
                  </div>

                  <div style="padding: 15px">
                    <label>Product description</label>
                    <input style="color: black" type="text" name="des" placeholder="Product description" required=""/>
                  </div>

                  <div style="padding: 15px">
                    <label>Product quantity</label>
                    <input style="color: black" style="color: black" type="text" name="quantity" placeholder="Product quantity" required=""/>
                  </div>

                  <div style="padding: 15px">
                    <input type="file" name="file"/>
                  </div>

                  <div style="padding: 15px">
                    <input type="submit"/>
                  </div>
                </form>
            </div>
        </div>
        @include('admin.script')
        
  </body>
</html>