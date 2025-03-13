<div class="mt-5">
    <style>
           table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
           
           border: 1px solid black;
        }
      th {
            background-color: #f2f2f2;
        }
    </style>
   @if($isEdit == false)
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center text-bold">اموال ترانزتي از طريق موتر تخليه و باركيري شده به كشتي</h4>
            </div>
        </div>
    </div>
    @endif
    @if(session('success'))
        <div class="alert alert-success fade show" id="success-alert">
            {{ session('success') }}
        </div>

        <script>
            setTimeout(function() {
                const alert = document.getElementById('success-alert');
                alert.classList.add('fade');
                setTimeout(function() {
                    alert.style.display = 'none';
                }, 500);
            }, 5000);
        </script>
    @endif
 @if($isEdit == false)
   <table class="table table-bordered" style="max-width: 120%; background-color:rgba(242, 242, 242, 0.9)">
    <thead class="" style="background-color: rgb(147, 155, 172)">
        <tr>
            <th rowspan="2">اسم شركت</th>
            <th colspan="6" class="text-center">صل آمد اصول ترانزتي از طريق موتر ها دربندر</th>
            <th colspan="3" class="text-center">وزن</th>
            <th colspan="6" class="text-center">صورت عبور ان از بندر</th>
            <th rowspan="2" class="text-center">معدوده</th>
            <th rowspan="2" class="text-center">مروجه</th>
            <th colspan="3" class="text-center">وزن</th>
            <!-- <th rowspan="2" class="text-center"> فی </th> -->
            <th rowspan="2" class="text-center"></th>
        </tr>
        <tr>
            <th>نمبر t1</th>
            <th>تاريخ</th>
            <th>نمبر فليت</th>
            <th>نوع جنس</th>
            <th>معدوده</th>
            <th>مروجه</th>
            <th>تن</th>  
            <th>کیلو</th>
            <th>گرم</th>
            <th>تاريخ تخليه</th>
            <th>اسم نماينده</th>
            <th>بار جالاني</th>
            <th>نمبر بار نامه</th>
            <th>تاريخ</th>
            <th>اسم كشتي</th>
            <th>تن</th>
            <th>کیلو</th>
            <th>گرم</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($imporates as $imporate)
            <tr>
                <td>{{ $imporate->company_name }}</td>
                <td>{{ $imporate->number }}</td>
                <td>{{ $imporate->date }}</td>
                <td>{{ $imporate->number_car }}</td>
                <td>{{ $imporate->product_type }}</td>
                <td>{{ $imporate->maoda }}</td>
                <td>{{ $imporate->morawaga }}</td>    
                <td>{{ $imporate->wigth_tan }}</td>
                <td>{{ $imporate->wigth_by_kg }}</td>
                <td>{{ $imporate->price_by_kg }}</td>
                <td>{{ $imporate->takhlaya_date }}</td>
                <td>{{ $imporate->representativ_name }}</td>
                <td>{{ $imporate->bar_chalany }}</td>
                <td>{{ $imporate->bar_nama_number }}</td>
                <td>{{ $imporate->send_date }}</td>
                <td>{{ $imporate->driver_name }}</td>
                <td>{{ $imporate->send_maoda }}</td>
                <td>{{ $imporate->send_morawaga }}</td>
                <td>{{ $imporate->send_wigth_tan }}</td>
                <td>{{ $imporate->send_wigth_by_kg }}</td>
                <td>{{ $imporate->send_wigth_by_gram }}</td>
                <!-- <td></td> -->
                <td>
                    <button wire:click="edit({{ $imporate->id }})" class="btn btn-primary btn-sm">تغير</button>
                    <a wire:click="delete({{ $imporate->id }})" wire:confirm="Are you sure you want to delete this item?" class="btn btn-danger btn-sm">حذف</a>
                </td>

            </tr>
        @endforeach
       
    </tbody>
</table>
@endif
@if($isEdit == true)
    <div class="container" style="background-color:rgb(147, 155, 172);">

        <div class="row">
            <div class="col-md-12 mt-2">
                <h5 class="text-center " style="color: rgba(155, 110, 26, 0.81);">اموال ترنزيتي ازطريق موتر تخليه وباركيري
                    شده به كشتي</h5>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="border border-white mt-3 p-1" style="border-radius: 5px; width: 400px; margin: 0 auto;">
                    <form wire:submit="update">
                        <div class="form-group mr-2">
                            <!-- Small Label -->
                            <label for="exampleSelect" class="col-form-label-sm" style="margin-right: 5%;"> از</label>
                            <!-- Select Box -->
                            <select wire:model="countryFrom" class=" form-control-sm" id="exampleSelect"
                                style="border:none; margin-right: 5%;">
                                <option value=""> كشور مبدا</option>
                                <option value="afghanistan" {{ $countryFrom == 'afghanistan' ? 'selected' : '' }}> افغانستان</option>
                                <option value="uzbekistan" {{ $countryFrom == 'uzbekistan' ? 'selected' : '' }}>اوزبكستان</option>
                                <option value="tajikistan" {{ $countryFrom == 'tajikistan' ? 'selected' : '' }}>تاجيكستان</option>
                            </select>
                            @error('countryFrom')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <!-- Small Label -->
                            <label for="exampleSelect mr-2" class="col-form-label-sm" style="margin-right: 5%;">به</label>

                            <select wire:model="countryTo" class="form-control-sm mr-2" id="exampleSelect"
                                style="border:none; margin-right: 5%;">
                                <option value=""> كشور مقصد</option>
                                <option value="afghanistan" {{ $countryTo == 'afghanistan' ? 'selected' : '' }}>افغانستان</option>
                                <option value="uzbekistan" {{ $countryTo == 'uzbekistan' ? 'selected' : '' }}>اوزبكستان</option>
                                <option value="tajikistan" {{ $countryTo == 'tajikistan' ? 'selected' : '' }}>تاجيكستان</option>
                            </select>
                           
                        </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-3 p-1 m-2" style="border:1px solid white; border-radius: 5px; ">
                        <label for="exampleSelect mr-2" class="col-form-label-sm">اموال</label>

                        <select wire:model="amwal_type" class="form-control-sm" id="exampleSelect"
                            style="border:none;  margin-right: 20%;">
                            <option value=""> اموال</option>
                            <option value="export" {{ $amwal_type == 'export' ? 'selected' : '' }}>صادرات</option>
                            <option value="import" {{ $amwal_type == 'import' ? 'selected' : '' }}>واردات</option>
                            <option value="transfer" {{ $amwal_type == 'transfer' ? 'selected' : '' }}>ترانزيت</option>
                        </select>
                       
                    </div>
                    <div class="col-md-5 p-1 m-2" style="border:1px solid white; border-radius: 5px; ">
                        <label for="exampleSelect mr-2" class="col-form-label-sm">ازطريق</label>

                        <select wire:model="az_taraq" class="form-control-sm" id="exampleSelect"
                            style="border:none;  margin-right: 20%;">
                            <option value=""> ازطريق</option>
                            <option value="ship" {{ $az_taraq == 'ship' ? 'selected' : '' }}>كشتي</option>
                            <option value="truck" {{ $az_taraq == 'truck' ? 'selected' : '' }}>موتر</option>
                            <option value="rail" {{ $az_taraq == 'rail' ? 'selected' : '' }}>ريل</option>
                            <option value="port" {{ $az_taraq == 'port' ? 'selected' : '' }}>بندر</option>
                        </select>
                       
                        <label for="exampleSelect" class="col-form-label-sm" style="margin-right: 20%;"> تخليه و
                            وباركيري</label>
                    </div>
                    <div class="col-md-2 p-1 m-2" style="border:1px solid white; border-radius: 5px; ">
                        <label for="exampleSelect" class="col-form-label-sm">شده </label>

                        <select wire:model="shode" class="form-control-sm " id="exampleSelect"
                            style="border:none; margin-right: 10%;">
                            <option value=""> شده </option>
                            <option value="ship" {{ $shode == 'ship' ? 'selected' : '' }}>كشتي</option>
                            <option value="truck" {{ $shode == 'truck' ? 'selected' : '' }}>موتر</option>
                            <option value="rail" {{ $shode == 'rail' ? 'selected' : '' }}>ريل</option>
                            <option value="port" {{ $shode == 'port' ? 'selected' : '' }}>بندر</option>
                        </select>
                       
                    </div>


                </div>

                <!-- <div class="row mt-3">
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

                </div> -->

                <div class="row">
                    <div class="col-md-3 p-1 m-2" style="border:1px solid white; border-radius: 5px; ">
                        <table class="mt-2">
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر شركت</label></td>
                                <td><input type="text" wire:model="company_number" class="form-control-sm"
                                        id="exampleSelect" placeholder="نمبر شركت"
                                        style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                          
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">اسم شركت</label></td>
                                <td><input type="text" wire:model="company_name" class="form-control-sm" id="exampleSelect"
                                        placeholder="اسم شركت" style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                           
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر </label></td>
                                <td><input type="text" wire:model="number" class="form-control-sm" id="exampleSelect"
                                        placeholder="نمبر" style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                          
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر اكت</label></td>
                                <td><input type="text" wire:model="number_act" class="form-control-sm" id="exampleSelect"
                                        placeholder="نمبر اكت" style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                           
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر كود</label></td>
                                <td><input type="text" wire:model="number_code" class="form-control-sm" id="exampleSelect"
                                        placeholder="نمبر  كود" style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                           
                        </table>
                    </div>
                    <div class="col-md-4 p-1"
                        style="border:1px solid white; border-radius: 5px; margin-right: 7%; margin-top: 10px; margin-bottom: 10px;">
                        <table class="mt-2">
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">تاريخ </label></td>
                                <td><input type="date" wire:model="date" class="form-control-sm" id="exampleSelect"
                                        placeholder="تاريخ" style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                            
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1"> جنس نوع </label></td>
                                <td><input type="text" wire:model="product_type" class="form-control-sm" id="exampleSelect"
                                        placeholder="نوع جنسيت" style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                          
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1"> معدوده</label></td>
                                <td><input type="text" wire:model="maoda" class="form-control-sm" id="exampleSelect"
                                        placeholder="معدوده" style="border:none; margin-right: 5px;"><br>
                                </td>
                            </tr>
                           
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">مروجه</label></td>
                                <td><input type="text" wire:model="maroja" class="form-control-sm" id="exampleSelect"
                                        placeholder="مروجه" style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                           
                        </table>

                    </div>

                    <div class="col-md-2 p-1"
                        style="border:1px solid white; border-radius: 5px; margin-right: 10%; margin-top: 10px; margin-bottom: 10px;">
                        <h6 class="text-center">وزن</h6>
                        <table class="mt-2">
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm">تن </label></td>
                                <td><input type="text" wire:model="wigth_by_ton" class="form-control-sm" id="exampleSelect"
                                        placeholder="تن" style="border:none; margin-right: 10px; width: 100px;"></td>
                            </tr>
                           
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm">كيلو</label></td>
                                <td><input type="text" wire:model="wigth_by_kg" class="form-control-sm" id="exampleSelect"
                                        placeholder="كيلو" style="border:none; margin-right: 10px; width: 100px;"></td>
                            </tr>
                          
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm">كرام</label></td>
                                <td><input type="text" wire:model="wigth_by_gram" class="form-control-sm" id="exampleSelect"
                                        placeholder="كرام" style="border:none; margin-right: 10px; width: 100px;"></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 p-1"
                        style="border:1px solid white; border-radius: 5px; margin-right:10%; margin-top: 20px; margin-bottom: 10px;">
                        <h6 class="text-center text-bold"> صورت عبور ان از بندر</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 p-1 m-2" style="border:1px solid white; border-radius: 5px; ">
                        <table class="mt-2">
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">تاريخ تخليه</label></td>
                                <td><input type="date" wire:model="date_of_takhliye" class="form-control-sm"
                                        id="exampleSelect" placeholder="تاريخ تخليه"
                                        style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">اسم نماينده</label></td>
                                <td><input type="text" wire:model="name_of_representative" class="form-control-sm"
                                        id="exampleSelect" placeholder="اسم نماينده"
                                        style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">بار جالاني </label></td>
                                <td><input type="text" wire:model="bar_jalani" class="form-control-sm" id="exampleSelect"
                                        placeholder="بار جالاني" style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبربارنامه</label></td>
                                <td><input type="text" wire:model="number_of_barname" class="form-control-sm"
                                        id="exampleSelect" placeholder="نمبربارنامه"
                                        style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر كود</label></td>
                                <td><input type="text" wire:model="number_of_code" class="form-control-sm"
                                        id="exampleSelect" placeholder="نمبر  كود"
                                        style="border:none; margin-right: 5px;"><br></td>
                            </tr>

                        </table>



                    </div>
                    <div class="col-md-3 p-1"
                        style="border:1px solid white; border-radius: 5px; margin-right:7%; margin-top: 10px; margin-bottom: 10px;">
                        <table class="mt-2">
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">اسم دريور </label></td>
                                <td><input type="text" wire:model="name_of_driver" class="form-control-sm"
                                        id="exampleSelect" placeholder="اسم دريور"
                                        style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">پلیت نمبر </label></td>
                                <td><input type="text" wire:model="plate_number" class="form-control-sm" id="exampleSelect"
                                        placeholder="پلیت نمبر" style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">معدوده</label></td>
                                <td><input type="text" wire:model="send_maoda" class="form-control-sm" id="exampleSelect"
                                        placeholder="معدوده" style="border:none; margin-right: 5px;"><br></td>
                            </tr>
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm mt-1">مروجه</label></td>
                                <td><input type="text" wire:model="send_maroja" class="form-control-sm" id="exampleSelect"
                                        placeholder="مروجه" style="border:none; margin-right: 5px;"><br></td>
                            </tr>

                        </table>

                    </div>

                    <div class="col-md-2 p-1"
                        style="border:1px solid white; border-radius: 5px; margin-right: 10%; margin-top: 10px; margin-bottom: 10px;">
                        <h6 class="text-center">وزن</h6>
                        <table class="mt-2">
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm">تن</label></td>
                                <td><input type="text" wire:model="send_wigth_by_ton" class="form-control-sm"
                                        id="exampleSelect" placeholder="تن"
                                        style="border:none; margin-right: 10px; width: 100px;"></td>
                            </tr>
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm">كيلو</label></td>
                                <td><input type="text" wire:model="send_wigth_by_kg" class="form-control-sm"
                                        id="exampleSelect" placeholder="كيلو"
                                        style="border:none; margin-right: 10px; width: 100px;"></td>
                            </tr>
                            <tr>
                                <td><label for="exampleSelect" class="col-form-label-sm">كرام</label></td>
                                <td><input type="text" wire:model="send_wigth_by_gram" class="form-control-sm"
                                        id="exampleSelect" placeholder="كرام"
                                        style="border:none; margin-right: 10px; width: 100px;"></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 p-1 mt-2 mb-5">
                        <button wire:click="update" class="btn btn-success">به روز رساني</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endif
</div>
