<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AITVET Student Info</title>
    <link rel="stylesheet" href="student.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="favicon.png">
</head>
<body lang=EN-US>
    <div class="hprint">
        <form action="" method="GET">
            <div>
                <input type="number" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['roll']; } ?>" class="form-control" placeholder="Enter Your Broad Roll" required>
                <button type="submit" class="btn btn-primary">Find</button>
                <button onClick="window.print()">Print</button>
            </div>
        </form>
    </div>
    <div class=Iqbal201>

        <table class=IqbalTable201 border=0 cellspacing=0 cellpadding=0 width=744>
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
                        <!--Student Information-->
            <tr style=height:1.0in'>
                <td width=96 style='width:71.85pt;height:1.0in'>
                    <img width=74 height=96 src="image002.png" align=center hspace=12>
                </td>
                <td width=547 align=center colspan=10 style='width:500pt;height:1.0in'><br/>
                    <span style='font-size:20pt;font-family:"Times New Roman",serif'><b>Ahsanullah Institute of</span><br/><span style='font-size:14pt;font-family:"Times New Roman",serif'>Technical &amp; Vocational Education &amp; Training</b></span><br><span style='font-size:15.0pt;font-family:"Times New Roman",serif'> (AITVET)</span><br/><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>ASister Concern of Ahsanullah University of Science of Technology<br>Sponsored by Dhaka Ahsania Mission and affiliated with Bangladesh Technical Education Board</span>
                </td>
                <td width=101 style='width:75.8pt;height:1.0in'>
                    <img width=77 height=96 src="image004.png">
                </td>
            </tr>
            <tr style='iqbal-row:1;height:36.45pt'>
                <td width=744 align=center colspan=12 style='width:7.75in;height:36.45pt'>
                    <b><u><span style='font-size:16.50pt;font-family:"Monotype Corsiva";'>Student Information</span></u></b><br/>
                    <b><span style='font-size:10pt;font-family:"Times New Roman",serif'>DIPLOMA - IN - ENGINEERING (Duration 4 Years)</span></b>
                </td>
            </tr>
            <tr style='iqbal-row:2;height:22.3pt'>
                <td width=143 colspan=3 style='width:107.25pt;'>
                    <span>Admission ID</span>
                </td>
                <td width=271 colspan=3 style='width:203.5pt;'>
                    <b><span>2066403</span></b>
                </td>
                <td width=210 colspan=4 style='width:157.25pt;'>
                    <span>Campus:<b>Tejgaon</b></span>
                </td>
                <td width=120 colspan=2 rowspan=3 style='width:1.25in;'>
                    <img width=96 height=96 src="image006.jpg" v:shapes="Picture_x0020_2">
                </td>
            </tr>
            <tr style='iqbal-row:3;height:22.0pt'>
                <td width=143 colspan=3 id=td-101>
                    <span>Session</span>
                </td>
                <td width=271 colspan=3 id=size-101>
                    <b><span>2020-2021</span></b>
                </td>
                <td width=210 colspan=4 style='width:157.25pt;'>
                    <span>Current Semester:<b> Third</b></span>
                </td>
            </tr>
            <tr style='iqbal-row:4;height:22.0pt'>
                <td width=143 colspan=3 id=td-101>
                    <span>Department</span>
                </td>
                <td width=271 colspan=3 id=size-101>
                    <b><span>Computer</span></b>
                </td>
                <td width=210 colspan=4 style='width:157.25pt;'>
                    <span>Section:<b> Day</b></span>
                </td>
            </tr>
            <tr style='iqbal-row:5;height:22.0pt'>
                <td width=143 colspan=3 id=td-101>
                    <span>Student Name</span>
                </td>
                <td width=271 colspan=3 id=size-101>
                    <b><span>Md. Tamim Iqbal</span></b>
                </td>
                <td width=330 colspan=6 style='width:247.25pt;'>
                </td>
            </tr>
            <tr style='iqbal-row:6;height:22.0pt'>
                <td width=143 colspan=3 id=td-101>
                    <span>Father's Name</span>
                </td>
                <td width=271 colspan=3 id=size-101>
                    <b><span>Md. Abdul Ohab</span></b>
                </td>
                <td width=137 colspan=3 id=size-103>
                    <span>Phone Number</span>
                </td>
                <td width=193 colspan=3 style='width:144.6pt;'>
                    <b><span>0123456897</span></b>
                </td>
            </tr>
            <tr style='iqbal-row:7;height:22.0pt'>
                <td width=143 colspan=3 id=td-101>
                    <span>Mother's Name</span>
                </td>
                <td width=271 colspan=3 id=size-101>
                    <b><span>Mst. Firoza Khatun</span></b>
                </td>
                <td width=137 colspan=3 id=size-103>
                    <span>Phone Number</span>
                </td>
                <td width=193 colspan=3 style='width:144.6pt;'>
                    <b><span>0123456798</span></b>
                </td>
                </tr>
                <tr style='iqbal-row:8;height:22.0pt'>
                    <td width=143 colspan=3 id=td-101>
                        <span>Guardian Name</span>
                    </td>
                    <td width=271 colspan=3 id=size-101>
                        <b><span>N/A</span></b>
                    </td>
                    <td width=137 colspan=3 id=size-103>
                    <span>Guardian Relation</span>
                    </td>
                    <td width=193 colspan=3 style='width:144.6pt;'>
                        <b><span>N/A</span></b>
                    </td>
                </tr>
                <tr style='iqbal-row:9;height:22.0pt'>
                    <td width=143 colspan=3 id=td-101>
                        <span>Student PN</span>
                    </td>
                    <td width=271 colspan=3 id=size-101>
                        <b><span>0123456789</span></b>
                    </td>
                    <td width=137 colspan=3 id=size-103>
                        <span>Blood Group</span>
                    </td>
                    <td width=193 colspan=3 style='width:144.6pt;'>
                        <b><span>O Positive</span></b>
                    </td>
                </tr>
                <tr style='iqbal-row:10;height:22.0pt'>
                    <td width=143 colspan=3 id=td-101>
                        <span>Broad Roll</span>
                    </td>
                    <td width=271 colspan=3 id=size-101>
                        <b><span>565278</span></b>
                    </td>
                    <td width=137 colspan=3 id=size-103>
                        <span>Registration No.
                    </td>
                    <td width=193 colspan=3 style='width:144.6pt;'>
                        <b><span>1713182414</span></b>
                    </td>
                </tr>
                <tr style='iqbal-row:11;height:22.0pt'>
                    <td width=143 colspan=3 id=td-101>
                        <span>Guide Techer</span>
                    </td>
                    <td width=271 colspan=3 id=size-101>
                        <b><span>Shirin Akter</span></b>
                    </td>
                    <td width=137 colspan=3 id=size-103>
                        <span>Department Head
                    </td>
                    <td width=193 colspan=3 style='width:144.6pt;'>
                        <b><span>Mostafizur Rahman</span></b>
                    </td>
                </tr>
                <tr style='iqbal-row:12;height:22.0pt'>
                    <td width=143 colspan=3 id=td-101>
                    </td>
                    <td width=271 colspan=3 id=size-101>
                    </td>
                    <td width=137 colspan=3 id=size-103>              
                    </td>
                    <td width=193 colspan=3 style='width:144.6pt;'>
                    </td>
                </tr>
                <tr style='iqbal-row:13;height:22.0pt'>
                    <td align=center width=744 colspan=12 style='width:7.75in;'>
                        <b><u><span id=font-102>Result</span></u></b><br>
                        <span>(In CGPA, per Semester)</span>
                    </td>
                </tr>
                <tr style='iqbal-row:14;height:22.0pt'>
                    <td width=125 colspan=2 style='width:93.95pt;'>
                        <span>1<sup>st </sup>Semester</span>
                    </td>
                    <td width=242 colspan=3 style='width:181.4pt;'>
                        <span>3.48</span>
                    </td>
                    <td width=124 colspan=3 id=size-102>
                        <span>2<sup>nd</sup> Semester</span>
                    </td>
                    <td width=252 colspan=4 style='width:189.3pt;'>
                        <span>N/A</span>
                    </td>
                </tr>
                <tr style='iqbal-row:15;height:22.0pt'>
                    <td width=125 colspan=2 style='width:93.95pt;'>
                        <span>3<sup>rd</sup> Semester</span>
                    </td>
                    <td width=242 colspan=3 style='width:181.4pt;'>
                        <span>3.95</span>
                    </td>
                    <td width=124 colspan=3 id=size-102>
                        <span>4<sup>th</sup> Semester</span>
                    </td>
                    <td width=252 colspan=4 style='width:189.3pt;'>
                        <span>N/A</span>
                    </td>
                </tr>
                <tr style='iqbal-row:16;height:22.0pt'>
                    <td width=125 colspan=2 style='width:93.95pt;'>
                        <span>5</span><sup>th</sup> Semester</span>
                    </td>
                    <td width=242 colspan=3 style='width:181.4pt;'>
                        <span>N/A</span>
                    </td>
                    <td width=124 colspan=3 id=size-102>
                        <span>6<sup>th</sup> Semester</span>
                    </td>
                    <td width=252 colspan=4 style='width:189.3pt;'>
                        <span>N/A</span>
                    </td>
                </tr>
                <tr style='iqbal-row:17;height:22.0pt'>
                    <td width=125 colspan=2 style='width:93.95pt;'>
                        <span>7<sup>th</sup> Semester</span>
                    </td>
                    <td width=242 colspan=3 style='width:181.4pt;'>
                        <span>N/A</span>
                    </td>
                    <td width=124 colspan=3 id=size-102>
                        <span>8<sup>th</sup> Semester</span>
                    </td>
                    <td width=252 colspan=4 style='width:189.3pt;'>
                        <span>N/A</span>
                    </td>
                </tr>
                <tr style='iqbal-row:18;height:22.0pt'>
                    <td width=125 colspan=2 style='width:93.95pt;'>
                    </td>
                    <td width=242 colspan=3 style='width:181.4pt;'>
                    </td>
                    <td width=124 colspan=3 id=size-102>
                        <span>Total:</span>
                    </td>
                    <td width=252 colspan=4 style='width:189.3pt;'>
                        <span>N/A</span>
                    </td>
                </tr>
                <tr style='iqbal-row:19;height:22.0pt'>
                    <td width=125 colspan=2 style='width:93.95pt;'>
                    </td>
                    <td width=242 colspan=3 style='width:181.4pt;'>
                    </td>
                    <td width=124 colspan=3 id=size-102>
                    </td>
                    <td width=252 colspan=4 style='width:189.3pt;'>
                    </td>
                </tr>
                <tr style='iqbal-row:20;height:22.0pt'>
                    <td width=125 colspan=2 style='width:93.95pt;'>
                    </td>
                    <td width=242 colspan=3 style='width:181.4pt;'>
                    </td>
                    <td width=124 colspan=3 id=size-102>
                    </td>
                    <td width=252 colspan=4 style='width:189.3pt;'>
                    </td>
                </tr>
                <tr style='iqbal-row:21;height:32.35pt'>
                    <td align=center width=245 colspan=4 style='width:184.05pt;'>
                        <span id=size-104>eSign</span>
                    </td>
                    <td align=center id=size-104 width=244 colspan=3 style='width:183.35pt;'>
                        <span id=size-104 >eSign</span>
                    </td>
                    <td align=center width=254 colspan=5 style='width:190.6pt;'>
                        <span id=size-104>eSign</span>
                    </td>
                </tr>
                <tr style='iqbal-row:22;height:22.0pt'>
                    <td align=center width=245 colspan=4 style='width:184.05pt;'>
                        <span>Prepared By</span>
                    </td>
                    <td align=center width=244 colspan=3 style='width:183.35pt;'>
                        <span>In-Charge
                        <b>Computer</b></span>
                    </td>
                    <td align=center width=254 colspan=5 style='width:190.6pt;'>
                        <span>Compared by</span>
                    </td>
                </tr>
                <tr style='iqbal-row:23;height:22.0pt'>
                    <td width=245 colspan=4 style='width:184.05pt;'>            
                    </td>
                    <td width=244 colspan=3 style='width:183.35pt;'>          
                    </td>
                    <td width=254 colspan=5 style='width:190.6pt;'>    
                    </td>
                </tr>
                <tr style='iqbal-row:24;height:.45in'>
                    <td width=245 colspan=4 style='width:184.05pt;
                    height:.45in'>    
                    </td>
                    <td width=244 colspan=3 style='width:183.35pt;
                    height:.45in'>
                    </td>
                    <td align=center width=254 colspan=5 style='width:190.6pt;
                    height:.45in'>
                        <span id=size-104>eSign</span>
                    </td>
                </tr>
                <tr style='iqbal-row:25;height:22.0pt'>
                    <td width=245 colspan=4 style='width:184.05pt;'>
                        <span>Date: [Date]</span>
                    </td>
                    <td width=244 colspan=3 style='width:183.35pt;'>
                    </td>
                    <td align=center width=254 colspan=5 style='width:190.6pt;'>
                        <span>Principal</span>
                    </td>
                </tr>
                <tr style='iqbal-row:26;height:22.0pt'>
                    <td width=245 colspan=4 style='width:184.05pt;'>
                    </td>
                    <td width=244 colspan=3 style='width:183.35pt;'>
                    </td>
                    <td width=254 colspan=5 style='width:190.6pt;'>
                    </td>
                </tr>
                <tr style='iqbal-row:27;mso-yfti-lastrow:yes;height:22.0pt'>
                    <td align=center width=744 colspan=12 style='width:7.75in;'>
                        <span>20, West Tejturi Bazar Road, Tejgan, Dhaka-1215</span>
                        <span>Telephone: (880-2) 9130508, 9130613, 9120248; E-mail: itvetofaust@yahoo.com; Web:aitvet.edu.bd</span>
                    </td>
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
                        <td  width=784 colspan=9 valign=top style='width:588.0pt;'>Enter A Valid Roll Number No </td>
                    </tr>
                    <?php
                        }
                    }
                        ?>
                </tbody>
    </table>
    </div>
</body>
</html>