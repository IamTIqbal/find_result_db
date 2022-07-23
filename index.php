<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=auto, initial-scale=1.0">
    <title>AITVET Result</title>
    <link rel="stylesheet" href="style.css">
    <link href="boot.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="favicon.png">
</head>
<body lang=EN-US>
    <div class="hprint">
        <form action="" method="GET">
            <div class="input-group mb-3">
                <input type="number" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['roll']; } ?>" class="form-control" placeholder="Enter Your Broad Roll" required>
                <button type="submit" class="btn btn-primary">Find</button>
                <button onClick="window.print()">Print</button>
            </div>
        </form>
    </div>
    <div class=aiitsection1>
        <table class=iqbalTable>
            <tbody>
            <!--SQL Connection -->
            <?php 
                $con = mysqli_connect("localhost","root","","result");

                if(isset($_GET['search']))
                {
                    $roll = $_GET['search'];
                    $query = "SELECT * FROM cmt_result_1st WHERE CONCAT(roll) LIKE '%$roll%' ";
                    $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0)
                {
                foreach($query_run as $data)
                {
                    ?>
            <!--Result Sheet -->
        <tr style='height:14.35pt'>
            <td class="custom-p" width=784 colspan=19 valign=top style='width:588.0pt;border:none;'>
                <span style='font-size:15.0pt;font-family:"Times New Roman",serif'><br><br><br>Ahsanullah Institute of Technical &amp; Vocational Education &amp; Training<br>(AITVET) </span><br>
                A Sister Concern of Ahsanullah University of Science of Technology<br>Sponsored by Dhaka Ahsania Mission and affiliated with Bangladesh Technical Education Board<br>
                <span class=span-101><o:p><span style='text-decoration:none'>&nbsp;</span> <br>
                <b><u><span class="span-101">ACADEMIC TRANSCRIPT </span></u></b><br>
                <b><span class="span-102">DIPLOMA-IN-ENGINEERING (Duration 4 Years)<br><?= $data['semester']; ?> SEMESTER EXAMINATION-<?= $data['exam_year']; ?> </span></b><br>
                <span class="span-102">Held in the month of <?= $data['exam_held']; ?> 2021</span><span class="span-3768"> </span><br>
            </td>
        </tr>
        <tr style='tiqbal:1;height:14.35pt'>
            <td class="custom-p" width=784 colspan=19 valign=top style='width:588.0pt;border:none;'> 
            </td>
        </tr>
        <tr style='tiqbal:2;height:14.35pt'>
            <td width=168 colspan=5 valign=top style='width:126.25pt;border:none;text-align:left;'>
                <span class="span-103">Serial No. </span>
            </td>
            <td width=162 colspan=5 valign=top style='width:121.7pt;border:none;text-align:left;'>
                <b><span class="span-103"><?= $data['sl']; ?></span></b>
            </td>
            <td class="custom-p" width=453 colspan=9 rowspan=5 valign=top style='width:340.05pt;text-align:left;border:none;'>
                 &nbsp; 
            </td>
        </tr>
        <tr style='tiqbal:3;height:14.35pt'>
            <td class="custom-p" width=168 colspan=5 valign=top style='width:126.25pt;border:none;text-align:left;'>
                <b><span class="span-103">Technology </span></b>
            </td>
            <td width=162 colspan=5 valign=top style='width:121.7pt;border:none;text-align:left;'>
                <b><span class="span-103"><?= $data['tc']; ?> - <?= $data['technology']; ?> </span></b>
            </td>
        </tr>
        <tr style='tiqbal:4;height:14.35pt'>
            <td width=168 colspan=5 valign=top style='width:126.25pt;border:none;text-align:left;'>
                <span class="span-103">Name of the Examinee </span>
            </td>
            <td width=162 colspan=5 valign=top style='width:121.7pt;border:none;text-align:left;'>
                <b><span class="span-103"><?= $data['name']; ?></span></b>
            </td>
        </tr>
        <tr style='tiqbal:5;height:14.35pt'>
            <td class=iqbal width=168 colspan=5 valign=top style='width:126.25pt;border:none;text-align:left;'>
                <span class="span-103">Father&#39s Name </span>
            </td>
            <td class=iqbal width=162 colspan=5 valign=top style='text-align:left;width:121.7pt;border:none;'>
                <b><span class="span-103"><?= $data['fname']; ?></span></b>
            </td>
        </tr>
        <tr style='tiqbal:6;height:14.35pt'>
            <td width=168 colspan=5 valign=top style='width:126.25pt;border:none;text-align:left;'>
                <span class="span-103">Mother&#39s Name </span>
            </td>
            <td width=162 colspan=5 valign=top style='width:121.7pt;border:none;text-align:left;'>
                <span class=SpellE><b><span  class="span-103"><?= $data['mname']; ?></span></b>
            </td>
        </tr>
        <tr style='tiqbal:7;height:14.35pt'>
            <td width=784 colspan=19 valign=top style='width:588.0pt;border:none;text-align:left;'>
                <span class="span-3768"><o:p>&nbsp; 
            </td>
        </tr>
        <tr style='tiqbal:8;height:14.35pt'>
            <td width=114 colspan=3 valign=top style='width:85.75pt;border:none;text-align:left;'>
                <b><span class="span-3768">Broad Roll No </span></b>
            </td>
            <td width=93 colspan=3 valign=top style='width:69.75pt;border:none;text-align:left;'>
                <b><span class="span-3768"><?= $data['roll']; ?></span></b>
            </td>
            <td width=77 colspan=2 valign=top style='width:80pt;border:none;text-align:left;'>
                <b><span class="span-3768">Reg. No. </span></b>
            </td>
            <td width=95 colspan=4 valign=top style='width:68.9pt;border:none;text-align:left;'>
                <b><span class="span-3768"><?= $data['reg']; ?></span></b>
            </td>
            <td class="custom-p" width=77 colspan=2 valign=top style='width:58.05pt;border:none;text-align:left;'>
                <b><span class="span-3768">Session </span></b>
            </td>
            <td class="custom-p" width=101 colspan=2 valign=top style='width:75.9pt;border:none;text-align:left;'>
                <b><span class="span-3768"><?= $data['session']; ?></span></b>
            </td>
            <td width=74 valign=top style='width:55.6pt;border:none;text-align:left;'>
                <b>GPA</b>
            </td>
            <td width=76 valign=top style='width:56.95pt;border:none;text-align:left;'>
                <b><span class="span-3768"><?= $data['cgpa']; ?></span></b>
            </td>
            <td width=76 valign=top style='width:37.1pt;border:none;text-align:left;'>
                <b> &nbsp; </b>
            </td>
        </tr>
        <tr style='tiqbal:9;height:13.75pt'>
            <td width=156 colspan=4 valign=top style='width:116.8pt;border:none;text-align:left;padding:0in 5.4pt 0in 5.4pt;height:13.75pt'>
                <b><span class="span-3768">Institute Name </span></b>
            </td>
            <td width=628 colspan=15 valign=top style='width:471.2pt;border:none;text-align:left;padding:0in 5.4pt 0in 5.4pt;height:13.75pt'>
                <b><span class="span-3768">50528 - Ahsanullah Institute of Technical &amp; Vocational Education &amp; Training (AITVET), Dhaka </span></b>
            </td>
        </tr>
        <tr style='tiqbal:10;height:28.7pt'>
            <td width=784 colspan=19 valign=top style='width:588.0pt;border:none;border-bottom:solid windowtext 1.0pt;tiqbal-border-bottom-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.7pt'>
                 &nbsp; 
            </td>
        </tr>
        <tr style='tiqbal:11;height:14.35pt'>
            <td width=36 class="id-888">
                <span class="span-3768">Sl. No. </span>
            </td>
            <td width=72 class="span-175">
                <span class="span-3768">Subject Code </span>
            </td>
            <td width=204 colspan=7 class="c123">
                <span class="span-3768">Name of Subject </span>
            </td>
            <td width=60 colspan=2  class="td-101">
                <span class="span-3768">Credit Hours </span>
            </td>
            <td width=54 colspan=2 class="span-675">
                <span class="span-3768">Full Marks </span>
            </td>
            <td width=72 colspan=2 class="span-175">
                <span class="span-3768">Marks Obtained </span>
            </td>
            <td width=59 class="grd-101">
                <span class="span-3768">Letter Grade </span>
            </td>
            <td width=74 class="td-gpa">
                <span class="span-3768">Grade Point </span>
            </td>
            <td width=76 class="gpa-avg">
                <span class="span-3768">Grade Point Average (GPA) </span>
            </td>
            <td width=76 class="remarks">
                <span class="span-3768">Remarks </span>
            </td>
        </tr>
        <tr style='tiqbal:12;height:14.35pt'>
            <td width=36 class="sl-101"'>
                <span class="span-3768">1 </span>
            </td>
            <td width=72 class="span-72">
                <span class="span-3768">66611 </span>
            </td>
            <td width=204 colspan=7 class=sub-999>
                <span class="span-3768">Computer Application </span>
            </td>
            <td width=60 colspan=2  class="td-101">
                <span class="span-3768">2 </span>
            </td>
            <td width=54 colspan=2 class="span-675">
                <span class="span-3768">100 </span>
            </td>
            <td width=72 colspan=2 class="span-175">
                <span class="span-3768"><?= $data['66611']; ?></span>
            </td>
            <td width=59 class="grd-101">
                <span class="span-3768">A+ </span>
            </td>
            <td width=74 class="td-gpa">
                <span class="span-3768"><?= $data['gpa_66611']; ?></span>
            </td>
            <td width=76 rowspan=7 class="gpa-avg">
                <span class="span-3768"><?= $data['cgpa']; ?> </span>
            </td>
            <td width=76 rowspan=7 class="pass-fail">
                <span class="span-3768"><?= $data['remarks']; ?></span>
            </td>
        </tr>
        <tr style='tiqbal:13;height:14.35pt'>
            <td width=36 class="sl-101"'>
                <span class="span-3768">2 </span>
            </td>
            <td width=72 class="span-72">
                <span class="span-3768">65812 </span>
            </td>
            <td width=204 colspan=7 class=sub-999>
                <span class="span-3768">Physical Education &amp; Life Skill Development </span>
            </td>
            <td width=60 colspan=2  class="td-101">
                <span class="span-3768">1 </span>
            </td>
            <td width=54 colspan=2 class="span-675">
                <span class="span-3768">50 </span>
            </td>
            <td width=72 colspan=2 class="span-175">
                <span class="span-3768"><?= $data['65812']; ?></span>
            </td>
            <td width=59 class="grd-101">
                <span class="span-3768">B </span>
            </td>
            <td width=74 class="td-gpa">
                <span class="span-3768"><?= $data['gpa_65812']; ?></span>
            </td>
        </tr>
        <tr style='tiqbal:14;height:14.35pt'>
            <td width=36 class="sl-101"'>
                <span class="span-3768">3 </span>
            </td>
            <td width=72 class="span-72">
                <span class="span-3768">66712 </span>
            </td>
            <td width=204 colspan=7 class="span-999">
                <span class="span-3768">Electrical Engineering Fundamentals </span>
            </td>
            <td width=60 colspan=2  class="td-101">
                <span class="span-3768">4 </span>
            </td>
            <td width=54 colspan=2 class="span-675">
                <span class="span-3768">200 </span>
            </td>
            <td width=72 colspan=2 class="span-175">
                <span class="span-3768"><?= $data['66712']; ?></span>
            </td>
            <td width=59 class="grd-101">
                <span class="span-3768">A+ </span>
            </td>
            <td width=74 class="td-gpa">
                <span class="span-3768"><?= $data['gpa_66712']; ?></span>
            </td>
        </tr>
        <tr style='tiqbal:15;height:14.35pt'>
            <td width=36 class="sl-101"'>
                <span class="span-3768">4 </span>
            </td>
            <td width=72 class="span-72">
                <span class="span-3768">65712 </span>
            </td>
            <td width=204 colspan=7 class="span-999">
                <span class="span-3768">English </span>
            </td>
            <td width=60 colspan=2  class="td-101">
                <span class="span-3768">2 </span>
            </td>
            <td width=54 colspan=2 class="span-675">
                <span class="span-3768">100 </span>
            </td>
            <td width=72 colspan=2 class="span-175">
                <span class="span-3768"><?= $data['65712']; ?></span>
            </td>
            <td width=59 class="grd-101">
                <span class="span-3768">C+ </span>
            </td>
            <td width=74 class="td-gpa">
                <span class="span-3768"><?= $data['gpa_65712']; ?></span>
            </td>
        </tr>
        <tr style='tiqbal:16;height:14.35pt'>
            <td width=36 class="sl-101"'>
                <span class="span-3768">5 </span>
            </td>
            <td width=72 class="span-72">
                <span class="span-3768">65911 </span>
            </td>
            <td width=204 colspan=7 class=sub-999>
                <span class="span-3768">Mathematics-1 </span>
            </td>
            <td width=60 colspan=2  class="td-101">
                <span class="span-3768">4 </span>
            </td>
            <td width=54 colspan=2 class="span-675">
                <span class="span-3768">200 </span>
            </td>
            <td width=72 colspan=2 class="span-175">
                <span class="span-3768"><?= $data['65911']; ?></span>
            </td>
            <td width=59 class="grd-101">
                <span class="span-3768">A+ </span>
            </td>
            <td width=74 class="td-gpa">
                <span class="span-3768"><?= $data['gpa_65911']; ?></span>
            </td>
        </tr>
        <tr style='tiqbal:17;height:14.35pt'>
            <td width=36 class="sl-101"'>
                <span class="span-3768">6 </span>
            </td>
            <td width=72 class="span-72">
                <span class="span-3768">65912 </span>
            </td>
            <td width=204 colspan=7 class=sub-999>
                <span class="span-3768">Physics-1 </span>
            </td>
            <td width=60 colspan=2  class="td-101">
                <span class="span-3768">4 </span>
            </td>
            <td width=54 colspan=2 class="span-675">
                <span class="span-3768">200 </span>
            </td>
            <td width=72 colspan=2 class="span-175">
                <span class="span-3768"><?= $data['65912']; ?></span>
            </td>
            <td width=59 class="grd-101">
                <span class="span-3768">B+ </span>
            </td>
            <td width=74 class="td-gpa">
                <span class="span-3768"><?= $data['gpa_65912']; ?></span>
            </td>
        </tr>
        <tr style='tiqbal:18;height:14.35pt'>
            <td width=36 class="sl-101"'>
                <span class="span-3768">7 </span>
            </td>
            <td width=72 class="span-72">
                <span class="span-3768">65711 </span>
            </td>
            <td width=204 colspan=7 class=sub-999>
                <span class="span-3768">Bangla </span>
            </td>
            <td width=60 colspan=2  class="td-101">
                <span class="span-3768">4 </span>
            </td>
            <td width=54 colspan=2 class="span-675">
                <span class="span-3768">200 </span>
            </td>
            <td width=72 colspan=2 class="span-175">
                <span class="span-3768"><?= $data['65711']; ?></span>
            </td>
            <td width=59 class="grd-101">
                <span class="span-3768">B+ </span>
            </td>
            <td width=74 class="td-gpa">
                <span class="span-3768"><?= $data['gpa_65711']; ?></span>
            </td>
        </tr>
        <tr style='tiqbal:19;height:29.2pt'>
            <td width=784 colspan=19 class="un-998">
                 &nbsp; 
            </td>
        </tr>
        <tr style='tiqbal:20;height:14.35pt'>
            <td width=255 colspan=7 valign=top class="un-997">
                <span class=SpellE><span class="span-3768">eSign</span></span><span class="span-3768"> </span>
            </td>
            <td width=303 colspan=9 valign=top class="un-995">
                <span class=SpellE><span class="span-3768">eSign</span></span><span class="span-3768"> </span>
            </td>
            <td width=226 colspan=3 valign=top class="un-996">
                <span class=SpellE><span class="span-3768">eSign</span></span><span class="span-3768"> </span>
            </td>
        </tr>
        <tr style='tiqbal:21;height:14.35pt'>
            <td width=255 colspan=7 valign=top class="un-997">
                <span class="span-3768">Prepared by </span>
            </td>
            <td width=303 colspan=9 valign=top class="un-995">
                <span class="span-3768">In-Charge <b><?= $data['technology']; ?></b> </span>
            </td>
            <td width=226 colspan=3 valign=top class="un-996">
                <b><i><span class="span-3768">Principal </span></i></b>
            </td>
        </tr>
        <tr style='tiqbal:22;height:14.35pt'>
            <td width=784 colspan=19 valign=top class="footer">
                <b> &nbsp; </b>
            </td>
        </tr>
        <tr style='tiqbal:23;height:14.35pt'>
            <td width=255 colspan=7 valign=top class="un-997">
                 &nbsp; 
            </td>
            <td width=303 colspan=9 valign=top class="un-995">
                 &nbsp; 
            </td>
            <td width=226 colspan=3 valign=top class="un-996">
                <span class=SpellE><span class="span-3768"><?= $data['compared_by']; ?></span></span><span class="span-3768"> </span>
            </td>
        </tr>
        <tr style='tiqbal:24;height:14.35pt'>
            <td width=255 colspan=7 valign=top class="un-997">
                <span class="span-3768">Date: <?= $data['result_date']; ?></span>
            </td>
            <td width=303 colspan=9 valign=top class="un-995">
                 &nbsp; 
            </td>
            <td width=226 colspan=3 valign=top class="un-996">
                <span class="span-3768">Compared by </span>
            </td>
        </tr>
        <tr style='tiqbal:25;tiqbal-yfti-lastrow:yes;height:14.35pt'>
            <td width=784 colspan=19 valign=top class="footer">
                <span class="span-3768">20, West <span class=SpellE>Tejturi</span> Bazar Road, <span class=SpellE>Tejgan</span>, Dhaka-1215 </span>
                <span class="span-3768">Telephone: (880-2) 9130508, 9130613, 9120248; E-mail: itvetofaust@yahoo.com; Web: aitvet.edu.bd </span>
            </td>
        </tr>
        <![if !supportMisalignedColumns]>
        <tr height=0>
            <td width=36 style='border:none'></td>
            <td width=72 style='border:none'></td>
            <td width=6 style='border:none'></td>
            <td width=41 style='border:none'></td>
            <td width=13 style='border:none'></td>
            <td width=39 style='border:none'></td>
            <td width=47 style='border:none'></td>
            <td width=29 style='border:none'></td>
            <td width=28 style='border:none'></td>
            <td width=18 style='border:none'></td>
            <td width=42 style='border:none'></td>
            <td width=7 style='border:none'></td>
            <td width=47 style='border:none'></td>
            <td width=30 style='border:none'></td>
            <td width=42 style='border:none'></td>
            <td width=59 style='border:none'></td>
            <td width=74 style='border:none'></td>
            <td width=76 style='border:none'></td>
            <td width=76 style='border:none'></td>
        </tr>
            </tbody>
            <tbody>
                <!--Else Connection mySQL -->
            <?php
                }
                }
                else
                {
                ?>
                <tr>
                <td class="custom-p" width=784 colspan=9 valign=top style='width:588.0pt;border:none;'>Enter A Valid Roll Number No </td>
                </tr>
               <?php
                }
               }
                ?>
            </tbody>
        <![endif]>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="main.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"> </script>
</body>
</html>