<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>History</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="../css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="container col-10" style="margin-top:100px">
        <div class="row justify-content-center">
            <div class="card" style="width: 80%;height:100%">
                <div class="card-header" style="background-color:#E94242; color:White;height:40px;">
                    <p class="card-text" style="font-size: 18px;top:2px;text-align:center">ฝากประวัติ</p>
                </div>


                <div class="card-body">
                    <form>
                        <!-- ======================== ประวัติส่วนตัว ======================= -->
                        <div class="head position-relative mt-1">
                            <p class="card-text" style="font-size:18px;">ประวัติส่วนตัว</p>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 mt-2">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">นาย</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">นาง</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline3" name="customRadioInline1"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline3">นางสาว</label>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="form-inline form-group ">
                                    <label for="exampleFormControlTextarea1">ชื่อ:</label>
                                    <input type="text" class="form-control" placeholder="กรอกชื่อ">
                                    <label for="exampleFormControlTextarea1" class="ml-4">นามสกุล:</label>
                                    <input type="text" class="form-control" placeholder="กรอกนามสกุล">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-inline form-group ">
                                    <label for="exampleFormControlTextarea1">อีเมล:</label>
                                    <input type="text" class="form-control" placeholder="กรอกอีเมล">
                                    <label for="exampleFormControlTextarea1" class="ml-4">เบอร์โทรศัพท์:</label>
                                    <input type="text" class="form-control" placeholder="กรอกเบอร์โทรศัพท์">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-inline form-group ">
                                    <label for="exampleFormControlTextarea1">วันเกิด:</label>
                                    <input id="datepicker" width="276" />
                                    <script>
                                    $('#datepicker').datepicker({
                                        uiLibrary: 'bootstrap4'
                                    });
                                    </script>
                                    <label for="exampleFormControlTextarea1" class="ml-4">อายุ:</label>
                                    <input type="text" class="form-control" placeholder="กรอกอายุ">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="alert alert-danger p-1" role="alert"></div>
                        <br>
                        <!-- ===================================================================================================ประวัติการศึกษา================================================================================ -->
                        <div class="head position-relative mt-1">
                            <p class="card-text" style="font-size:18px;">ประวัติการศึกษา</p>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-inline form-group mt-3">
                                    <label for="exampleFormControlTextarea1">จบจากมหาวิทยาลัย/วิทลัย:</label>
                                    <input type="text" class="form-control" placeholder="กรอกชื่อมหาวิทยาลัย/วิทลัย">
                                    <label for="exampleFormControlTextarea1" class="ml-4">คณะ:</label>
                                    <input type="text" class="form-control" placeholder="กรอกคณะ">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-inline form-group mt-3">
                                    <label for="exampleFormControlTextarea1">สาขา:</label>
                                    <input type="text" class="form-control" placeholder="กรอกชื่อสาขา">
                                    <label for="exampleFormControlTextarea1" class="ml-4">GPA:</label>
                                    <input type="text" class="form-control" placeholder="กรอกGPA">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="exampleFormControlTextarea1">วุฒิการศึกษา:</label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline4" name="customRadioInline1"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline4">ม.6</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline5" name="customRadioInline1"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline5">ปวส.</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline6" name="customRadioInline1"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline6">ปวช.</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline7" name="customRadioInline1"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline7">ปริญญาตรี</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline8" name="customRadioInline1"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline8">ปริญญาโท</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="alert alert-danger p-1" role="alert"></div>
                        <br>
                        <!-- ===================================================================================================ประสบการณ์ทำงาน================================================================================ -->
                        <div class="head position-relative mt-1">
                            <p class="card-text" style="font-size:18px;">ประวัติการศึกษา</p>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-inline form-group">
                                    <label for="exampleFormControlTextarea1">ประสบการณ์ที่เคยทำงานกับบริษัท (ปี)
                                        :</label>
                                    <input type="text" class="form-control" style="width: 73%;"
                                        placeholder="กรอกประสบการณ์ที่เคยทำงานกับบริษัท (ปี)">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">ภาษาที่ถนัด</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">ภาษาที่เคยเรียน</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">ความสามารถพิเศษ</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">ผลงาน</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="alert alert-danger p-1" role="alert"></div>
                        <br>
                        <!-- ===================================================================================================ภูมิลำเนา================================================================================ -->
                        <div class="head position-relative mt-1">
                            <p class="card-text" style="font-size:18px;">ภูมิลำเนา</p>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="row">
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1" class="ml-4">หมู่บ้าน:</label>
                                    <input type="text" class="form-control" placeholder="กรอกหมู่บ้าน">
                                </div>
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1" class="ml-5">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" placeholder="กรอกบ้านเลขที่">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="row">
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1" class="ml-4">ซอย/ตรอก:</label>
                                    <input type="text" class="form-control" placeholder="กรอกซอย/ตรอก">
                                </div>
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1" class="ml-4">ถนน:</label>
                                    <input type="text" class="form-control" placeholder="กรอกถนน">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="row">
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1" class="ml-4">ตำบล:</label>
                                    <input type="text" class="form-control" placeholder="กรอกตำบล:">
                                </div>
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1" style="margin-left:58px">อำเภอ:</label>
                                    <input type="text" class="form-control" placeholder="กรอกอำเภอ">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="row">
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1" class="ml-4">จังหวัด:</label>
                                    <input type="text" class="form-control" placeholder="กรอกจังหวัด">
                                </div>
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1"
                                        style="margin-left:50px">รหัสไปรษณีย์:</label>
                                    <input type="text" class="form-control" placeholder="กรอกรหัสไปรษณีย์">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="alert alert-danger p-1" role="alert"></div>
                        <br>
                        <!-- ===================================================================================================ที่อยู่ปัจจุบัน================================================================================ -->
                        <div class="head position-relative mt-1">
                            <p class="card-text" style="font-size:18px;">ที่อยู่ปัจจุบัน</p>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="row">
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1" class="ml-4">หมู่บ้าน:</label>
                                    <input type="text" class="form-control" placeholder="กรอกหมู่บ้าน">
                                </div>
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1" class="ml-5">บ้านเลขที่:</label>
                                    <input type="text" class="form-control" placeholder="กรอกบ้านเลขที่">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="row">
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1" class="ml-4">ซอย/ตรอก:</label>
                                    <input type="text" class="form-control" placeholder="กรอกซอย/ตรอก">
                                </div>
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1" class="ml-4">ถนน:</label>
                                    <input type="text" class="form-control" placeholder="กรอกถนน">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="row">
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1" class="ml-4">ตำบล:</label>
                                    <input type="text" class="form-control" placeholder="กรอกตำบล:">
                                </div>
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1" style="margin-left:58px">อำเภอ:</label>
                                    <input type="text" class="form-control" placeholder="กรอกอำเภอ">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="row">
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1" class="ml-4">จังหวัด:</label>
                                    <input type="text" class="form-control" placeholder="กรอกจังหวัด">
                                </div>
                                <div class="form-inline form-group mt-6">
                                    <label for="exampleFormControlTextarea1"
                                        style="margin-left:50px">รหัสไปรษณีย์:</label>
                                    <input type="text" class="form-control" placeholder="กรอกรหัสไปรษณีย์">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="alert alert-danger p-1" role="alert"></div>
                        <br>
                        <button type="button" class="btn btn-warning">แก้ไข</button>
                        <button type="button" class="btn btn-danger"
                            style="float:right;margin-left:10px">ยกเลิก</button>
                        <button type="button" class="btn btn-success" style="float:right">ฝากประวัติ</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>