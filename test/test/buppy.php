<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Flagging Page</title>
    <style type="text/css">
        #TextArea1
        {
            height: 101px;
            width: 360px;
        }
        #Text_Area_For_The_Form
        {
            width: 270px;
        }
    </style>
</head>
<script type='text/javascript'
   src='http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js'></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#TA1').keyup(function() {
                var len = this.value.length;
                if (len >= 100) {
                    this.value = this.value.substring(0, 100);
                }
                $('#charLeft').text(100 - len);
            });
        });
    </script>
<body>
        <h2>Change Information</h2>

<form action="sami.php" >
    <p style="margin-left: 120px">
        <input id="Check_Box_First" type="checkbox" />Name</p>

<p style="margin-left: 120px">
        <input id="Check_Box_Second" type="checkbox" />Comapny doesnt exists</p>

    <p style="margin-left: 120px">
        <input id="Check_Box_Third" type="checkbox" />Other</p>

    <p style="margin-left: 120px">
        Further Information</p>

    <p style="margin-left: 120px">
        <textarea rows= "4" cols="20" id="TA1" name="S1" maxlength = "100"></textarea></p>
		<span id="charLeft"> </span>  Characters left

    <p style="margin-left: 120px">
        <input id="Reset1" type="reset" value="reset" />
        <input id="Submit1" type="submit" value="submit" /></p>

        </form>
</body>
</html>
