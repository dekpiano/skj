<style>
@media (max-width: 575.98px) {
    .page-content {
        padding-top: 125px;
    }

    .page-content h1 {
        font-size: 31px
    }
}

@media (min-width: 576px) and (max-width: 767.98px) {}

@media (min-width: 768px) and (max-width: 991.98px) {
    .page-content {
        padding-top: 90px;
    }

    .page-content h1 {
        font-size: 31px
    }
}

@media (min-width: 992px) and (max-width: 1199.98px) {
    .page-content {
        padding-top: 130px;
    }

    .page-content h1 {
        font-size: 35px
    }
}

@media (min-width: 1200px) {
    .page-content {
        padding-top: 120px;
    }
}


.card {
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none
}

#htmltable th,
td {
    text-align: center;
}

.pl-3,
.px-3 {
    padding-left: 1rem !important
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #d2d2dc;
    border-radius: 0
}

.card .card-title {
    color: #000000;
    margin-bottom: 0.625rem;
    text-transform: capitalize;
    font-size: 1.5rem;
    font-weight: 500
}

.card .card-description {
    margin-bottom: .875rem;
    font-weight: 400;
    color: #76838f
}


.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar
}

.table,
.jsgrid .jsgrid-table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent
}

.table thead th,
.jsgrid .jsgrid-table thead th {
    border-top: 0;
    border-bottom-width: 1px;
    font-weight: 500;
    font-size: .875rem;
    text-transform: uppercase
}

.table td,
.jsgrid .jsgrid-table td {
    font-size: 1rem;
    padding: .875rem 0.9375rem
}

.badge {
    border-radius: 0;
    font-size: 12px;
    line-height: 1;
    padding: .375rem .5625rem;
    font-weight: normal
}

.btn {
    border-radius: 0
}

.page-content {
    background-image: url(uploads/sport/background.svg);
    background-attachment: fixed;
    background-size: cover;
}
</style>

<div class="page-content" id="page-content">
    <div class="">
        <h1 class="text-center">ตารางและผลการแข่งขัน กีฬาสีภายใน "สวนกุหลาบ 9 เกมส์" ครั้งที่ 14</h1>
        <h2 class="text-center">(Real Time)</h2>
        <?php 
require __DIR__ . '../../../../../vendor/autoload.php';

// configure the Google Client
$client = new \Google_Client();
$client->setApplicationName('Google Sheets API');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
// credentials.json is the key file we downloaded while setting up our Google Sheets API
$path = 'credentials.json';
$client->setAuthConfig($path);

// configure the Sheets Service
$service = new \Google_Service_Sheets($client);

$spreadsheetId = '1W3NB3czGyFiwfDsLl2vhwZa0SVzf0dXatYdK8QN8b2Y';
$spreadsheet = $service->spreadsheets->get($spreadsheetId);

$range_23 = '23 สิงหาคม 2565!A2:F5'; // here we use the name of the Sheet to get all the rows
$response_23 = $service->spreadsheets_values->get($spreadsheetId, $range_23);
$values_23 = $response_23->getValues();
 //print_r($response_23);
$range_24 = '24 สิงหาคม 2565!A2:F5'; // here we use the name of the Sheet to get all the rows
$response_24 = $service->spreadsheets_values->get($spreadsheetId, $range_24);
$values_24 = $response_24->getValues();

$range_25 = '25 สิงหาคม 2565!A2:F60'; // here we use the name of the Sheet to get all the rows
$response_25 = $service->spreadsheets_values->get($spreadsheetId, $range_25);
$values_25 = $response_25->getValues();

$range_26 = '26 สิงหาคม 2565!A2:F80'; // here we use the name of the Sheet to get all the rows
$response_26 = $service->spreadsheets_values->get($spreadsheetId, $range_26);
$values_26 = $response_26->getValues();

$range_thai = 'กีฬาไทย!A2:E35'; // here we use the name of the Sheet to get all the rows
$response_thai = $service->spreadsheets_values->get($spreadsheetId, $range_thai);
$values_thai = $response_thai->getValues();

?>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="card-title">โปรแกรมการแข่งขัน วันที่
                                    <?=$spreadsheet->sheets[0]->properties['title'];?></h1>
                                <p class="card-description"> </p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="htmltable" class="table table-hover">
                                <thead>
                                    <tr class="bg-primary text-white h3">
                                        <th>คู่ที่</th>
                                        <th>เวลา</th>
                                        <th>รายการ</th>
                                        <th>คู่แข่งขัน</th>
                                        <th>ผลการแข่งขัน</th>
                                        <th>หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach ($values_23 as $key => $value_23) :
                                    ?>
                                    <tr <?=$value_23[0] == "คู่ที่"?'class="bg-primary text-white h3"':""?>>
                                        <td><?=$value_23[0]?></td>
                                        <td><?=$value_23[1]?></td>
                                        <td><?=$value_23[2]?></td>
                                        <td><?=$value_23[3]?></td>
                                        <td class="text-center">
                                            <?php if(isset($value_23[4])):?>

                                            <label class="badge badge-success"><?=$value_23[4]?></label>

                                            <?php else: ?>
                                            <label class="badge badge-danger">รอผลการแข่งขัน</label>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php if(isset($value_23[5])):?>
                                            <?=$value_23[5]?>
                                            <?php else: ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-3">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="card-title">โปรแกรมการแข่งขัน วันที่กีฬา
                                    <?=$spreadsheet->sheets[1]->properties['title'];?></h4>
                                <p class="card-description"> </p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="htmltable" class="table table-hover">
                                <thead>
                                    <tr class="bg-primary text-white h3">
                                        <th>คู่ที่</th>
                                        <th>เวลา</th>
                                        <th>รายการ</th>
                                        <th>คู่แข่งขัน</th>
                                        <th>ผลการแข่งขัน</th>
                                        <th>หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach ($values_24 as $key => $value_24) :
                                    ?>
                                    <tr <?=$value_24[0] == "คู่ที่"?'class="bg-primary text-white h3"':""?>>
                                        <td><?=$value_24[0]?></td>
                                        <td><?=$value_24[1]?></td>
                                        <td><?=$value_24[2]?></td>
                                        <td><?=$value_24[3]?></td>
                                        <td>
                                            <?php if(isset($value_24[4])):?>
                                            <label class="badge badge-success"><?=$value_24[4]?></label>
                                            <?php else: ?>
                                            <label class="badge badge-danger">รอผลการแข่งขัน</label>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if(isset($value_24[5])):?>
                                            <label class="badge badge-success"><?=$value_24[5]?></label>
                                            <?php else: ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-3">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="card-title">โปรแกรมการแข่งขัน วันที่กีฬา
                                    <?=$spreadsheet->sheets[2]->properties['title'];?></h2>
                                <p class="card-description"> </p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="htmltable" class="table table-hover">
                                <thead>
                                    <tr class="bg-primary text-white h3">
                                        <th>คู่ที่</th>
                                        <th>เวลา</th>
                                        <th>รายการ</th>
                                        <th>คู่แข่งขัน</th>
                                        <th>ผลการแข่งขัน</th>
                                        <th>หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach ($values_25 as $key => $value_25) :
                                    ?>
                                    <tr <?=$value_25[0] == "คู่ที่"?'class="bg-primary text-white h3"':""?>>
                                        <td><?=$value_25[0]?></td>
                                        <td><?=$value_25[1]?></td>
                                        <td><?=$value_25[2]?></td>
                                        <td><?=$value_25[3]?></td>
                                        <td>
                                            <?php if(isset($value_25[4])):?>
                                            <?php if($value_25[4] != "ผลการแข่งขัน" && $value_25[4] ==""): ?>
                                            ผลการแข่งขัน
                                            <?php else: ?>
                                            <?php if($value_25[4] == "ผลการแข่งขัน") :  ?>
                                                <?=$value_25[4]?>
                                            <?php else: ?>
                                                <label class="badge badge-success"><?=$value_25[4]?></label>
                                            <?php endif; ?>
                                            <?php endif; ?>
                                            <?php else: ?>
                                            <label class="badge badge-danger">รอผลการแข่งขัน</label>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if(isset($value_25[5])):?>
                                            <?php if($value_25[5] != "หมายเหตุ"): ?>
                                            หมายเหตุ
                                            <?php else: ?>
                                            <label class="badge badge-Success"><?=$value_25[5]?></label>
                                            <?php endif; ?>

                                            <?php else: ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-3">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="card-title">โปรแกรมการแข่งขัน วันที่กีฬา
                                    <?=$spreadsheet->sheets[3]->properties['title'];?></h2>
                                <p class="card-description"> </p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="htmltable" class="table table-hover">
                                <thead>
                                    <tr class="bg-primary text-white h3">
                                        <th>คู่ที่</th>
                                        <th>เวลา</th>
                                        <th>รายการ</th>
                                        <th>คู่แข่งขัน</th>
                                        <th>ผลการแข่งขัน</th>
                                        <th>หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach ($values_26 as $key => $value_26) :
                                    ?>
                                    <tr <?=$value_26[0] == "คู่ที่"?'class="bg-primary text-white h3"':""?>>
                                        <td><?=$value_26[0]?></td>
                                        <td><?=$value_26[1]?></td>
                                        <td><?=$value_26[2]?></td>
                                        <td><?=$value_26[3]?></td>
                                        <td>
                                        <?php if(isset($value_26[4])):?>
                                            <?php if($value_26[4] != "ผลการแข่งขัน" && $value_26[4] ==""): ?>
                                            ผลการแข่งขัน
                                            <?php else: ?>
                                            <?php if($value_26[4] == "ผลการแข่งขัน") :  ?>
                                                <?=$value_26[4]?>
                                            <?php else: ?>
                                                <label class="badge badge-success"><?=$value_26[4]?></label>
                                            <?php endif; ?>
                                            <?php endif; ?>
                                            <?php else: ?>
                                            <label class="badge badge-danger">รอผลการแข่งขัน</label>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if(isset($value_26[5])):?>
                                            <?php if($value_26[5] != "หมายเหตุ"): ?>
                                            หมายเหตุ
                                            <?php else: ?>
                                            <label class="badge badge-Success"><?=$value_26[5]?></label>
                                            <?php endif; ?>

                                            <?php else: ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-3">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="card-title">โปรแกรมการแข่งขันกีฬาไทยพื้นบ้าน </h2>
                                <p class="card-description"> </p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="htmltable" class="table table-hover">
                                <thead>
                                    <tr class="bg-primary text-white h3">
                                        <th>ลำดับ</th>
                                        <th>รายการ</th>
                                        <th>คู่แข่งขัน</th>
                                        <th>ผลการแข่งขัน</th>
                                        <th>หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach ($values_thai as $key => $value_thai) :
                                    ?>
                                    <tr <?=$value_thai[0] == "ลำดับ"?'class="bg-primary text-white h3"':""?>>
                                        <td><?=$value_thai[0]?></td>
                                        <td><?=$value_thai[1]?></td>
                                        <td><?=$value_thai[2]?></td>
                                        <td>
                                        <?php if(isset($value_thai[3])):?>
                                            <?php if($value_thai[3] != "ผลการแข่งขัน" && $value_thai[3] ==""): ?>
                                            ผลการแข่งขัน
                                            <?php else: ?>
                                            <?php if($value_thai[3] == "ผลการแข่งขัน") :  ?>
                                                <?=$value_thai[3]?>
                                            <?php else: ?>
                                                <label class="badge badge-success"><?=$value_thai[3]?></label>
                                            <?php endif; ?>
                                            <?php endif; ?>
                                            <?php else: ?>
                                            <label class="badge badge-danger">รอผลการแข่งขัน</label>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if(isset($value_thai[4])):?>
                                            <?php if($value_thai[4] != "หมายเหตุ"): ?>
                                            หมายเหตุ
                                            <?php else: ?>
                                            <label class="badge badge-Success"><?=$value_thai[4]?></label>
                                            <?php endif; ?>

                                            <?php else: ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>