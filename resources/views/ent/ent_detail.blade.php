@extends('ent.layout')
@section('title','รายละเอียดข้อมูลผู้สมัคร')

@section('content')
<body>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-1">
                <div class="card" style="width:150px">
                    <img src="https://www.w3schools.com/images/lamp.jpg"
                        class="img-thumbnail" style="position:absolute;height:180px;left:85px;top:100px;">
                </div>
            </div>

            <div class="row">
                <div class="col-md-1" style="top:300px;">
                    <button type="button" class="btn btn-primary"
                        style="margin:5px; width:150px;background-color:#6369ED;">ข้อมูลส่วนตัว</button>
                    <button type="button" class="btn btn-primary"
                        style="margin:5px; width:150px;background-color:#6369ED;">ประวัติการศึกษา</button>
                    <button type="button" class="btn btn-primary"
                        style="margin:5px; width:150px;background-color:#6369ED;">ความสามารถ</button>
                    <button type="button" class="btn btn-primary"
                        style="margin:5px; width:150px;background-color:#6369ED;">ข้อมูลการติดต่อ</button>
                    <button type="button" class="btn btn-primary"
                        style="margin:5px; width:150px;background-color:#6369ED;">ภูมิลำเนา</button>
                    <button type="button" class="btn btn-primary"
                        style="margin:5px; width:150px;background-color:#6369ED;">ที่อยู่ปัจจุบัน</button>
                </div>
            </div>



            <div class="col-1">
                <div class="card" style="position:absolute;height:290px;width:800px;top:-190px;left:-200px;">
                    <div class="card-haeder" style="height:40px;background-color:#6369ED; color:White;">
                        <div class="card-body" style="position:relative;top:-15px;">
                            <p>รายละเอียดข้อมูลส่วนตัว</p>
                        </div>
                    </div>
                    <div class="card-body" style="font-size: 15px;top:1px">
                        <p class="card-text">ชื่อ - นามสกุล : นาย ภาณุวัฒน์ มังสังข์ </p>
                        <p class="card-text">เพศ : ชาย</p>
                        <p class="card-text">สัญชาติ : ไทย</p>
                        <p class="card-text">เชื้อชาติ : ไทย</p>
                        <p class="card-text">ศาสนา : พุทธ</p>
                        <p class="card-text">สถานะภาพทางทหาร : ผ่านการเกณฑ์ทหารแล้ว</p>
                        <div class="card-body col-sm-9" style="font-size: 15px;position:absolute;top:40px;left:350px;">
                            <p class="card-text">วันเกิด : 25 พฤศจิกายน 2541</p>
                            <p class="card-text">อายุ : 22 ปี</p>
                            <p class="card-text">ส่วนสูง : 165 Cm
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;น้ำหนัก
                                : 56 Kg</p>
                        </div>
                    </div>
                </div>

                <div class="card" style="position:absolute;height:220px;width:800px;top:135px;left:-200px;">
                    <div class="card-haeder" style="height:40px;background-color:#6369ED; color:White;">
                        <div class="card-body" style="position:relative;top:-15px;">
                            <p>ประวัติการศึกษา</p>
                        </div>
                    </div>
                    <div class="card-body" style="font-size: 15px;top:1px">
                        <p class="card-text">จบการศึกษาปีที่ : พ.ศ.2564</p>
                        <p class="card-text">สถานศึกษา :
                            มหาวิทยาลัยพะเยา&nbsp;&nbsp;&nbsp;คณะเทคโนโลยีสารสนเทศ&nbsp;&nbsp;&nbsp;สาชาวิทยาการคอมพิวเตอร์
                        </p>
                        <p class="card-text">วุฒิการศึกษา : ปริญญาตรี (วทบ.)</p>
                        <p class="card-text">เกรดเฉลี่ย (GPA.) : x.xx </p>
                    </div>
                </div>

                <div class="card" style="position:absolute;height:220px;width:800px;top:395px;left:-200px;">
                    <div class="card-haeder" style="height:40px;background-color:#6369ED; color:White;">
                        <div class="card-body" style="position:relative;top:-15px;">
                            <p>ความสามารถ</p>
                        </div>
                    </div>
                    <div class="card-body" style="font-size: 15px;top:1px">
                        <p class="card-text">จบการศึกษาปีที่ : พ.ศ.2564</p>
                        <p class="card-text">สถานศึกษา :
                            มหาวิทยาลัยพะเยา&nbsp;&nbsp;&nbsp;คณะเทคโนโลยีสารสนเทศ&nbsp;&nbsp;&nbsp;สาชาวิทยาการคอมพิวเตอร์
                        </p>
                        <p class="card-text">วุฒิการศึกษา : ปริญญาตรี (วทบ.)</p>
                        <p class="card-text">เกรดเฉลี่ย (GPA.) : x.xx </p>
                    </div>
                </div>

                <div class="card" style="position:absolute;height:220px;width:800px;top:650px;left:-200px;">
                    <div class="card-haeder" style="height:40px;background-color:#6369ED; color:White;">
                        <div class="card-body" style="position:relative;top:-15px;">
                            <p>ข้อมูลการติดต่อ</p>
                        </div>
                    </div>
                    <div class="card-body" style="font-size: 15px;top:1px">
                        <p class="card-text">จบการศึกษาปีที่ : พ.ศ.2564</p>
                        <p class="card-text">สถานศึกษา :
                            มหาวิทยาลัยพะเยา&nbsp;&nbsp;&nbsp;คณะเทคโนโลยีสารสนเทศ&nbsp;&nbsp;&nbsp;สาชาวิทยาการคอมพิวเตอร์
                        </p>
                        <p class="card-text">วุฒิการศึกษา : ปริญญาตรี (วทบ.)</p>
                        <p class="card-text">เกรดเฉลี่ย (GPA.) : x.xx </p>
                    </div>
                </div>

                <div class="card" style="position:absolute;height:220px;width:800px;top:900px;left:-200px;">
                    <div class="card-haeder" style="height:40px;background-color:#6369ED; color:White;">
                        <div class="card-body" style="position:relative;top:-15px;">
                            <p>ภูมิลำเนา</p>
                        </div>
                    </div>
                    <div class="card-body" style="font-size: 15px;top:1px">
                        <p class="card-text">จบการศึกษาปีที่ : พ.ศ.2564</p>
                        <p class="card-text">สถานศึกษา :
                            มหาวิทยาลัยพะเยา&nbsp;&nbsp;&nbsp;คณะเทคโนโลยีสารสนเทศ&nbsp;&nbsp;&nbsp;สาชาวิทยาการคอมพิวเตอร์
                        </p>
                        <p class="card-text">วุฒิการศึกษา : ปริญญาตรี (วทบ.)</p>
                        <p class="card-text">เกรดเฉลี่ย (GPA.) : x.xx </p>
                    </div>
                </div>

                <div class="card" style="position:absolute;height:220px;width:800px;top:1150px;left:-200px;">
                    <div class="card-haeder" style="height:40px;background-color:#6369ED; color:White;">
                        <div class="card-body" style="position:relative;top:-15px;">
                            <p>ที่อยู่ปัจจุบัน</p>
                        </div>
                    </div>
                    <div class="card-body" style="font-size: 15px;top:1px">
                        <p class="card-text">จบการศึกษาปีที่ : พ.ศ.2564</p>
                        <p class="card-text">สถานศึกษา :
                            มหาวิทยาลัยพะเยา&nbsp;&nbsp;&nbsp;คณะเทคโนโลยีสารสนเทศ&nbsp;&nbsp;&nbsp;สาชาวิทยาการคอมพิวเตอร์
                        </p>
                        <p class="card-text">วุฒิการศึกษา : ปริญญาตรี (วทบ.)</p>
                        <p class="card-text">เกรดเฉลี่ย (GPA.) : x.xx </p>
                    </div>
                    <br>
                    <footer class="bg-light text-center text-lg-start" style="width:100%;">
                        <div class="text-center p-3" style="background-color: White;">
                        </div>
                    </footer>
                </div>

            </div>
        </div>
    </div>
</body>
@endsection