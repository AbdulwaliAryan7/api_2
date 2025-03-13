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
                <form wire:submit="save">
                    <div class="form-group mr-2">
                        <!-- Small Label -->
                        <label for="exampleSelect" class="col-form-label-sm" style="margin-right: 5%;"> از</label>
                        <!-- Select Box -->
                        <select wire:model="countryFrom" class=" form-control-sm" id="exampleSelect"
                            style="border:none; margin-right: 5%;">
                            <option value=""> كشور مبدا</option>
                            <option value="afghanistan"> افغانستان</option>
                            <option value="uzbekistan">اوزبكستان</option>
                            <option value="tajikistan">تاجيكستان</option>
                        </select>
                        @error('countryFrom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- Small Label -->
                        <label for="exampleSelect mr-2" class="col-form-label-sm" style="margin-right: 5%;">به</label>

                        <select wire:model="countryTo" class="form-control-sm mr-2" id="exampleSelect"
                            style="border:none; margin-right: 5%;">
                            <option value=""> كشور مقصد</option>
                            <option value="afghanistan">افغانستان</option>
                            <option value="uzbekistan">اوزبكستان</option>
                            <option value="tajikistan">تاجيكستان</option>
                            </select>
                        @error('countryTo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-3 p-1 m-2" style="border:1px solid white; border-radius: 5px; ">
                    <label for="exampleSelect mr-2" class="col-form-label-sm">اموال</label>

                    <select wire:model="amwal_type" class="form-control-sm" id="exampleSelect"
                        style="border:none;  margin-right: 20%;">
                        <option value=""> اموال</option>
                        <option value="export">صادرات</option>
                        <option value="import">واردات</option>
                        <option value="transfer">ترانزيت</option>
                    </select>
                    @error('amwal')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-5 p-1 m-2" style="border:1px solid white; border-radius: 5px; ">
                    <label for="exampleSelect mr-2" class="col-form-label-sm">ازطريق</label>

                    <select wire:model="az_taraq" class="form-control-sm" id="exampleSelect"
                        style="border:none;  margin-right: 20%;">
                        <option value=""> ازطريق</option>
                        <option value="ship">كشتي</option>
                        <option value="truck">موتر</option>
                        <option value="rail">ريل</option>
                        <option value="port">بندر</option>
                    </select>
                    @error('az_taraq')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <label for="exampleSelect" class="col-form-label-sm" style="margin-right: 20%;"> تخليه و
                        وباركيري</label>
                </div>
                <div class="col-md-2 p-1 m-2" style="border:1px solid white; border-radius: 5px; ">
                    <label for="exampleSelect" class="col-form-label-sm">شده </label>

                    <select wire:model="shode" class="form-control-sm " id="exampleSelect"
                        style="border:none; margin-right: 10%;">
                        <option value=""> شده </option>
                        <option value="ship">كشتي</option>
                        <option value="truck">موتر</option>
                        <option value="rail">ريل</option>
                        <option value="port">بندر</option>
                    </select>
                    @error('shode')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
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
                        @error('company_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1">اسم شركت</label></td>
                            <td><input type="text" wire:model="company_name" class="form-control-sm" id="exampleSelect"
                                    placeholder="اسم شركت" style="border:none; margin-right: 5px;"><br></td>
                        </tr>
                        @error('company_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر </label></td>
                            <td><input type="text" wire:model="number" class="form-control-sm" id="exampleSelect"
                                    placeholder="نمبر" style="border:none; margin-right: 5px;"><br></td>
                        </tr>
                        @error('number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر اكت</label></td>
                            <td><input type="text" wire:model="number_act" class="form-control-sm"
                                    id="exampleSelect" placeholder="نمبر اكت"
                                    style="border:none; margin-right: 5px;"><br></td>
                        </tr>
                        @error('number_act')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر كود</label></td>
                            <td><input type="text" wire:model="number_code" class="form-control-sm" id="exampleSelect"
                                    placeholder="نمبر  كود" style="border:none; margin-right: 5px;"><br></td>
                        </tr>
                        @error('number_code')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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
                        @error('date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1"> جنس نوع </label></td>
                            <td><input type="text" wire:model="product_type" class="form-control-sm" id="exampleSelect"
                                    placeholder="نوع جنسيت" style="border:none; margin-right: 5px;"><br></td>
                        </tr>
                        @error('product_type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1"> معدوده</label></td>
                            <td><input type="text" wire:model="maoda" class="form-control-sm" id="exampleSelect"
                                    placeholder="معدوده" style="border:none; margin-right: 5px;"><br>
                            </td>
                        </tr>
                        @error('maoda')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1">مروجه</label></td>
                            <td><input type="text" wire:model="maroja" class="form-control-sm" id="exampleSelect"
                                    placeholder="مروجه" style="border:none; margin-right: 5px;"><br></td>
                        </tr>
                        @error('maroja')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </table>

                </div>

                <div class="col-md-2 p-1"
                    style="border:1px solid white; border-radius: 5px; margin-right: 10%; margin-top: 10px; margin-bottom: 10px;">
                    <h6 class="text-center">وزن</h6>
                    <table class="mt-2">
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm">تن </label></td>
                            <td><input type="text" wire:model="wigth_by_ton" class="form-control-sm"
                                    id="exampleSelect" placeholder="تن"
                                    style="border:none; margin-right: 10px; width: 100px;"></td>
                        </tr>
                        @error('wigth_by_ton')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm">كيلو</label></td>
                            <td><input type="text" wire:model="wigth_by_kg" class="form-control-sm" id="exampleSelect" placeholder="كيلو"
                                    style="border:none; margin-right: 10px; width: 100px;"></td>
                        </tr>
                        @error('wigth_by_kg')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm">كرام</label></td>
                            <td><input type="text" wire:model="wigth_by_gram" class="form-control-sm" id="exampleSelect"
                                    placeholder="كرام" style="border:none; margin-right: 10px; width: 100px;"></td>
                        </tr>
                        @error('wigth_by_gram')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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
                            <td><input type="date" wire:model="date_of_takhliye" class="form-control-sm" id="exampleSelect" placeholder="تاريخ تخليه"
                                    style="border:none; margin-right: 5px;"><br></td>
                        </tr>
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1">اسم نماينده</label></td>
                            <td><input type="text" wire:model="name_of_representative" class="form-control-sm" id="exampleSelect" placeholder="اسم نماينده"
                                    style="border:none; margin-right: 5px;"><br></td>
                        </tr>
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1">بار جالاني </label></td>
                            <td><input type="text" wire:model="bar_jalani" class="form-control-sm" id="exampleSelect" placeholder="بار جالاني"
                                    style="border:none; margin-right: 5px;"><br></td>
                        </tr>
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبربارنامه</label></td>
                            <td><input type="text" wire:model="number_of_barname" class="form-control-sm" id="exampleSelect" placeholder="نمبربارنامه"
                                    style="border:none; margin-right: 5px;"><br></td>
                        </tr>
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1">نمبر كود</label></td>
                            <td><input type="text" wire:model="number_of_code" class="form-control-sm" id="exampleSelect" placeholder="نمبر  كود"
                                    style="border:none; margin-right: 5px;"><br></td>
                        </tr>

                    </table>



                </div>
                <div class="col-md-3 p-1"
                    style="border:1px solid white; border-radius: 5px; margin-right:7%; margin-top: 10px; margin-bottom: 10px;">
                    <table class="mt-2">
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1">اسم دريور </label></td>
                            <td><input type="text" wire:model="name_of_driver" class="form-control-sm" id="exampleSelect" placeholder="اسم دريور"
                                    style="border:none; margin-right: 5px;"><br></td>
                        </tr>
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1">پلیت نمبر </label></td>
                            <td><input type="text" wire:model="plate_number" class="form-control-sm" id="exampleSelect" placeholder="پلیت نمبر"
                                    style="border:none; margin-right: 5px;"><br></td>
                        </tr>
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1">معدوده</label></td>
                            <td><input type="text" wire:model="send_maoda" class="form-control-sm" id="exampleSelect" placeholder="معدوده"
                                    style="border:none; margin-right: 5px;"><br></td>
                        </tr>
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm mt-1">مروجه</label></td>
                            <td><input type="text" wire:model="send_maroja" class="form-control-sm" id="exampleSelect" placeholder="مروجه"
                                    style="border:none; margin-right: 5px;"><br></td>
                        </tr>

                    </table>

                </div>

                <div class="col-md-2 p-1"
                    style="border:1px solid white; border-radius: 5px; margin-right: 10%; margin-top: 10px; margin-bottom: 10px;">
                    <h6 class="text-center">وزن</h6>
                    <table class="mt-2">
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm">تن</label></td>
                            <td><input type="text" wire:model="send_wigth_by_ton" class="form-control-sm" id="exampleSelect" placeholder="تن"
                                    style="border:none; margin-right: 10px; width: 100px;"></td>
                        </tr>
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm">كيلو</label></td>
                            <td><input type="text" wire:model="send_wigth_by_kg" class="form-control-sm" id="exampleSelect" placeholder="كيلو"
                                    style="border:none; margin-right: 10px; width: 100px;"></td>
                        </tr>
                        <tr>
                            <td><label for="exampleSelect" class="col-form-label-sm">كرام</label></td>
                            <td><input type="text" wire:model="send_wigth_by_gram" class="form-control-sm" id="exampleSelect" placeholder="كرام"
                                    style="border:none; margin-right: 10px; width: 100px;"></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 p-1 mt-2 mb-5">
                    <button class="btn btn-success">ثبت</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>