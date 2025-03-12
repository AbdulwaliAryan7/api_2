@extends('layouts.app')

@section('content')
    <div class="container " style="background-color:rgb(147, 155, 172);">
        <div class="row">
            <div class="col-md-12 mt-2">
                <h5 class="text-center text-warning">اموال ترنزيتي ازطريق موتر تخليه وباركيري شده به كشتي</h5>
                <div class="border border-white mt-3 p-1" style="border-radius: 5px; width: 300px; margin: 0 auto;">
                <form>
      <div class="form-group mr-2">
        <!-- Small Label -->
        <label for="exampleSelect" class="col-form-label-sm"> از</label>
        <!-- Select Box -->
        <select class=" form-control-sm"  id="exampleSelect" style="border:none; margin-right: 20px;">
          <option>افغانستان</option>
          <option>Option 2</option>
          <option>Option 3</option>
          <option>Option 4</option>
        </select>
        <!-- Small Label -->
        <label for="exampleSelect mr-2" class="col-form-label-sm">به</label>

        <select class="form-control-sm mr-2" id="exampleSelect" style="border:none; margin-right: 20px;">
          <option>افغانستان</option>
          <option>Option 2</option>
          <option>Option 3</option>
          <option>Option 4</option>
        </select>
      </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-3 p-1 m-2" style="border:1px solid white; border-radius: 5px; ">
        <label for="exampleSelect mr-2" class="col-form-label-sm">اموال</label>

<select class="form-control-sm" id="exampleSelect" style="border:none;  margin-right: 20px;">
  <option>صادرات</option>
  <option>Option 2</option>
  <option>Option 3</option>
  <option>Option 4</option>
</select>
        </div>
        <div class="col-md-5 p-1 m-2" style="border:1px solid white; border-radius: 5px; ">
        <label for="exampleSelect mr-2" class="col-form-label-sm">ازطريق</label>

<select class="form-control-sm" id="exampleSelect" style="border:none;  margin-right: 20px;">
  <option>كشتي</option>
  <option>Option 2</option>
  <option>Option 3</option>
  <option>Option 4</option>
</select>
<label for="exampleSelect" class="col-form-label-sm"> تخليه و وباركيري</label>
        </div>
        <div class="col-md-2 p-1 m-2" style="border:1px solid white; border-radius: 5px; ">
        <label for="exampleSelect" class="col-form-label-sm">شده  </label>

<select class="form-control-sm " id="exampleSelect" style="border:none">
  <option>به كشتي</option>
  <option>Option 2</option>
  <option>Option 3</option>
  <option>Option 4</option>
</select>
        </div>
       
 
 </div>

 <div class="row mt-3">
    <div class="col-md-5 p-1 m-2 mr-2" style="border:1px solid white; border-radius: 5px; ">
       <label for="exampleSelect" class="col-form-label-sm">اصل امد كالا</label>
       <select class="form-control-sm mr-2" id="exampleSelect" style="border:none; margin-right: 40px;">
        <option>به كشتي</option>
        <option>Option 2</option>
        <option>Option 3</option>
        <option>Option 4</option>
       </select>
    </div>
    
    <div class="col-md-5 p-1 m-2" style="border:1px solid white; border-radius: 5px; ">
       <label for="exampleSelect" class="col-form-label-sm">اصل امد كالا</label>
       <select class="form-control-sm mr-2" id="exampleSelect" style="border:none; margin-right: 40px;">
        <option>به كشتي</option>
        <option>Option 2</option>
        <option>Option 3</option>
        <option>Option 4</option>
       </select>
    </div>

 </div>

 <div class="row">
    <div class="col-md-3 p-1 m-2" style="border:1px solid white; border-radius: 5px; ">
        <table>
            <tr>
                <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر شركت</label></td>
                <td><input type="text" class="form-control-sm" id="exampleSelect" placeholder="نمبر شركت" style="border:none; margin-right: 5px;"><br></td>
            </tr>
            <tr>
                <td><label for="exampleSelect" class="col-form-label-sm mt-1">اسم شركت</label></td>
                <td><input type="text" class="form-control-sm" id="exampleSelect" placeholder="اسم شركت" style="border:none; margin-right: 5px;"><br></td>
            </tr>
            <tr>
            <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر </label></td>
            <td><input type="text" class="form-control-sm" id="exampleSelect" placeholder="نمبر" style="border:none; margin-right: 5px;"><br></td>
            </tr>
            <tr>
                <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر اكت</label></td>
                <td><input type="text" class="form-control-sm" id="exampleSelect" placeholder="نمبر اكت" style="border:none; margin-right: 5px;"><br></td>
            </tr>
            <tr>
                <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر  كود</label></td>
                <td><input type="text" class="form-control-sm" id="exampleSelect" placeholder="نمبر  كود" style="border:none; margin-right: 5px;"><br></td>
            </tr>
           
        </table>
        
        
      
    </div>
    <div class="col-md-3 p-1 m-2 bg-info" style="border:1px solid white; border-radius: 5px; margin-right: 30px ">
        <table>
            <tr>
                <td><label for="exampleSelect" class="col-form-label-sm mt-1">تاريخ </label></td>
                <td><input type="date" class="form-control-sm" id="exampleSelect" placeholder="تاريخ" style="border:none; margin-right: 5px;"><br></td>
            </tr>
            <tr>
                <td><label for="exampleSelect" class="col-form-label-sm mt-1">كتكوري جنس</label></td>
                <td><input type="text" class="form-control-sm" id="exampleSelect" placeholder="كتكوري جنسيت" style="border:none; margin-right: 5px;"><br></td>
            </tr>
            <tr>
            <td><label for="exampleSelect" class="col-form-label-sm mt-1"> جنس نوع  </label></td>
            <td><input type="text" class="form-control-sm" id="exampleSelect" placeholder="نوع جنسيت" style="border:none; margin-right: 5px;"><br></td>
            </tr>
            <tr>
                <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر اكت</label></td>
                <td><input type="text" class="form-control-sm" id="exampleSelect" placeholder="نمبر اكت" style="border:none; margin-right: 5px;"><br></td>
            </tr>
            <tr>
                <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر  كود</label></td>
                <td><input type="text" class="form-control-sm" id="exampleSelect" placeholder="نمبر  كود" style="border:none; margin-right: 5px;"><br></td>
            </tr>
           
        </table>
        
        
      
    </div>
    
    <div class="col-md-3 p-1 m-2" style="border:1px solid white; border-radius: 5px; ">
        <label for="exampleSelect" class="col-form-label-sm">اصل امد كالا</label>
        <input type="text" class="form-control-sm" id="exampleSelect" style="border:none; margin-right: 10px;">
    </div>

 </div>
    </form>
   </div>
 </div>
 </div>
    </div>
@endsection


