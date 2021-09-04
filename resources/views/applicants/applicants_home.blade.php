@extends('applicants.layout')
@section('title','หน้าหลัก')

@section('content')

<body>  
    <div class="container w-100" style="margin-top:100px;" alt="Max-width 100%">
        <div class="row">
            <div class="col-sm">
                <a type="button" href="{{ route('applicants_show_history') }}" class="btn btn-danger" style="width:300px;">การฝากประวัติ</a>
                <br>
                <br>
                <br>
                <div class="card-header" style="width:300px;height:43px;background-color:#E94242;color:white">
                    <span class="align-top">รายชื่อของคนที่อาจรู้จัก</span>
                </div>
                <div class="card" style="width:300px">
                    <div class="card-body" style="width:100%">
                        <table class="table table-hover">
                            <tr>
                                <td>พันธการ ปิงเมือง</td>
                            </tr>
                            <tr>
                                <td>ภาณุวัฒน์ มังสังข์ </td>
                            </tr>
                            <tr>
                                <td>วีรภัทร เยเกอร์</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="card" style="width: 490px;">
                    <div class="card-body">
                        <h4 class="card-title" style="font-size:13px;float:right">วันที่ประกาศรับสมัคร</h4>
                        <div class="col-sm-10" style="left:120px">
                            <img src="https://cdn.icon-icons.com/icons2/916/PNG/512/Human_icon-icons.com_71855.png" class="img-thumbnail" style="position:absolute;float:left;height: 100px;left:-123px">
                            <p class="card-text" style="margin:1px">ตำแหน่งงาน</p>
                            <p class="card-text" style="margin:1px">จำนวนที่เปิดรับ</p>
                            <p class="card-text" style="margin:1px">ชื่อบริษัท</p>
                            <p class="card-text" style="margin:1px">สถานที่ตั้งบริษัท</p>
                            <button type="button" class="btn btn-warning position-relative" style="left:105px;top:15px;width:100px">สนใจ</button>
                            <button type="button" class="btn  position-relative" style="left:110px;top:15px;background-color:#6369ED;color:white">ดูรายละเอียด</button>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="card" style="width: 490px;">
                    <div class="card-body">
                        <h4 class="card-title" style="font-size:13px;float:right">วันที่ประกาศรับสมัคร</h4>
                        <div class="col-sm-10" style="left:120px">
                            <img src="https://cdn.icon-icons.com/icons2/916/PNG/512/Human_icon-icons.com_71855.png" class="img-thumbnail" style="position:absolute;float:left;height: 100px;left:-123px">
                            <p class="card-text" style="margin:1px">ตำแหน่งงาน</p>
                            <p class="card-text" style="margin:1px">จำนวนที่เปิดรับ</p>
                            <p class="card-text" style="margin:1px">ชื่อบริษัท</p>
                            <p class="card-text" style="margin:1px">สถานที่ตั้งบริษัท</p>
                            <button type="button" class="btn btn-warning position-relative" style="left:105px;top:15px;width:100px;">สนใจ</button>
                            <button type="button" class="btn  position-relative" style="left:110px;top:15px;background-color:#6369ED;color:white">ดูรายละเอียด</button>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="card" style="width: 490px;">
                    <div class="card-body">
                        <h4 class="card-title" style="font-size:13px;float:right">วันที่ประกาศรับสมัคร</h4>
                        <div class="col-sm-10" style="left:120px">
                            <img src="https://cdn.icon-icons.com/icons2/916/PNG/512/Human_icon-icons.com_71855.png" class="img-thumbnail" style="position:absolute;float:left;height: 100px;left:-123px">
                            <p class="card-text" style="margin:1px">ตำแหน่งงาน</p>
                            <p class="card-text" style="margin:1px">จำนวนที่เปิดรับ</p>
                            <p class="card-text" style="margin:1px">ชื่อบริษัท</p>
                            <p class="card-text" style="margin:1px">สถานที่ตั้งบริษัท</p>
                            <button type="button" class="btn btn-warning position-relative" style="left:105px;top:15px;width:100px">สนใจ</button>
                            <button type="button" class="btn  position-relative" style="left:110px;top:15px;background-color:#6369ED;color:white">ดูรายละเอียด</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="height:100%;width:100%;margin-left:50px">
                <div class="card-header" style="background-color:#E94242;color:white;height:100%;">
                    <span class="align-top">งานยอดนิยม</span>
                </div>
                <div class="card">
                    <div class="card-body" style="width:100%;">
                        <table class="table table-hover">
                            <tr>
                                <td>Programmer</td>
                            </tr>
                            <tr>
                                <td>Web Programmer</td>
                            </tr>
                            <tr>
                                <td>Design UX/UI</td>
                            </tr>
                            <tr>
                                <td>Tester</td>
                            </tr>
                            <tr>
                                <td>Mobile Developer</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br>

                <div class="card-header" style="background-color:#E94242;color:white;height:100%;">
                    <span class="align-top">งานที่ไม่นิยม</span>
                </div>
                <div class="card">
                    <div class="card-body" style="width:100%;">
                        <table class="table table-hover">
                            <tr>
                                <td>Project Manager</td>
                            </tr>
                            <tr>
                                <td>System Engineer</td>
                            </tr>
                            <tr>
                                <td>System Analyst </td>
                            </tr>
                            <tr>
                                <td>IT Consulting</td>
                            </tr>
                            <tr>
                                <td>IT Support</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
        <br>
    </div>

</body>


@endsection