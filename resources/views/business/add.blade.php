@extends('layouts.app')

@section('content')


<style>
.f1-step {
  position: relative;
  float: left;
  padding: 0 5px;
  text-align: CENTER;
}
.f1-step-icon {
  width: 48px;
  height: 48px;
  margin-top: 0;
  background: #f35b3f;
  font-size: 22px;
  line-height: 48px;
}
.f1-step-icon {
  display: inline-block;
  width: 40px;
  height: 40px;
  margin-top: 4px;
  background: #ddd;
  font-size: 16px;
  color: #fff;
  line-height: 40px;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.step-active{
  background: #f35b3f;
}

.nvla{
  background: #fcaec9;
}


</style>

 

 

 <div class="container">
<div class="row">
<div  class="col-md-3" ></div> 
<div id="example" class="col-md-6" style="height:900px"></div> 
<div  class="col-md-3" ></div> 
</div> 
</div> 
@endsection




                 
 
              
                