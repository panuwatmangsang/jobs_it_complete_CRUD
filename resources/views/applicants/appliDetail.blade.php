<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company Detail</title>
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
    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <img src="img_orange_flowers.jpg" style="float:left" class="img-thumbnail " width="110"
                            height="140">

                        <div class="date" style="float:right;">
                            <p class="card-text" style=" font-size:15px;">วันที่ลงประกาศ </p>
                            <br><br><br><br><br>
                            <button type="button" class="btn"
                                style="background-color:#E94242; color:White;">สมัครงาน</button>
                        </div>

                        <div class="detail" style="float:left; margin-left:10px;">
                            <p>ชื่อบริษัท</p>
                            <button type="button" class="btn btn-primary">ข้อมูลบริษัท</button>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <p class="card-text" style="margin:1px">ตำแหน่งงาน</p>
                            <p class="card-text" style="margin:1px">จำนวนที่รับสมัคร</p>
                            <p class="card-text" style="margin:1px">สถานที่ปฏิบัติงาน</p>
                            <p class="card-text" style="margin:1px">เงินเดือน</p>
                            <p class="card-text" style="margin:1px">ประสบการณ์การทำงาน</p>
                            <p class="card-text" style="margin:1px">สวัสดิการ</p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="head position-relative ml-3 mt-1">
                        <p class="card-text" style="font-size:18px;">แผนที่</p>
                    </div>
                    <div id="map-container-google-2" class="z-depth-1-half map-container ml-3">
                        <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0"  allowfullscreen></iframe>
                    </div>
                </div>
            </div>







        </div>
    </div>
</body>

</html>