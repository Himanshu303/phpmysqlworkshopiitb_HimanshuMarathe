<!DOCTYPE html>
<html lang="en">
<head>

    <title>MIAL</title>
</head>
<body>
<form action="mail.php" method="POST">
Enter Parent's email id:
<input type="email" name="email" id="">
<input type="submit" value="Submit" name="submit" >
</form>
</body>
</html>


<?php
if(isset($_POST["submit"]))
{
    $name='Himanshu';
    $email=$_POST['email'];   
    $subject='Marksheet of '.$name;
    $m1=96;
    $message='<html>
    <br>
    <br>
    <br>
    <br>
    <table border="1" style="border-collapse: collapse; width: 50%;">
    <tbody>
    <tr style="height: 27px;">
    <td style="width: 33.3333%; height: 27px;">Name</td>
    <td style="width: 33.3333%; height: 27px;">Subject</td>
    <td style="width: 29.3578%; height: 27px;">Marks</td>
    </tr>
    <tr style="height: 58px;">
    <td style="width: 33.3333%; height: 168px;" rowspan="3">Siddesh Shimpi</td>
    <td style="width: 33.3333%; height: 58px;">HTML</td>
    <td style="width: 29.3578%; height: 58px;">'.$m1.'</td>
    </tr>
    <tr style="height: 56px;">
    <td style="width: 33.3333%; height: 56px;">PHP</td>
    <td style="width: 29.3578%; height: 56px;">93</td>
    </tr>
    <tr style="height: 54px;">
    <td style="width: 33.3333%; height: 54px;">MySQL</td>
    <td style="width: 29.3578%; height: 54px;">86</td>
    </tr>
    <tr style="height: 74px;">
    <td style="width: 33.3333%; height: 74px;">Percentage</td>
    <td style="width: 62.6911%; height: 74px;" colspan="2">'.(91+1).'</td>
    </tr>
    <tr style="height: 84px;">
    <td style="width: 33.3333%; height: 84px;">Result</td>
    <td style="width: 62.6911%; height: 84px;" colspan="2"><strong>Pass</strong></td>
    </tr>
    </tbody>
    </table>
    <p></p>
    </html>';
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    mail($email,$subject,$message,$headers);
}
?>