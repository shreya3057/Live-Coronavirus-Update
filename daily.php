
<section class="corona_update container fluid">
		<div class="my-3">
		<h2>CORONA DAILY UPDATE IN INDIA</h2>
		<div class="table-responsive">
		<table class="table text-center" id="tbl" style="width:100% ">
<?php
    $data = file_get_contents('https://api.covid19india.org/data.json');
    $coronadata=json_decode($data , true);
    $totalcount=count($coronadata['cases_time_series']);
    $i=0;
    while($i<$totalcount)
    {
?>
    <tr>
        <th class="text-left" colspan="6">DATE & MONTH & YEAR</th>
    </tr>
    <th colspan="6" class="text-left"><?php echo $coronadata['cases_time_series'][$i]['date']."<br>" ?></th>
    <tr class="text-capitalize text-white">
        <th style="color: #fff; background:#2196f3">Total Confirmed</th>
        <th style="color: #fff; background:#2196f3">Daily Confirmed</th>
        <th style="color: #fff; background:#2196f3">Daily Recovered</th>
        <th style="color: #fff; background:#2196f3">Daily Deceased</th>
        <th style="color: #fff; background:#2196f3">Total Recovered</th>
        <th style="color: #fff; background:#2196f3">Total Deceased</th>
    </tr>
    <tr class="mb-5">
        <td style="background : #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['totalconfirmed']."<br>" ?></td>
        <td style="background : #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['dailyconfirmed']."<br>" ?></td>
        <td style="background : #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['dailyrecovered']."<br>" ?></td>
        <td style="background : #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['dailydeceased']."<br>" ?></td>
        <td style="background : #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['totalrecovered']."<br>" ?></td>
        <td style="background : #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['totaldeceased']."<br>" ?></td>
    </tr>
    <?php
        $i++;
    }
    ?>
        </table>
        </div>