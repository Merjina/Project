<html>
<?php 
        include "config.php";
        session_start();
        ?>  
<head>      <title>fejvoks</title>
      <link rel="stylesheet" type="text/css" href="http://localhost/Project/profile.css">
     
<script type="text/javascript">    

function validate(){
       var namef=document.form1.name1;
       var emailf=document.form1.email;
       var genderf=document.form1.gender;
       var genderf2=document.getElementById("gender");
       var dobf=document.form1.dob;
       var relf=document.form1.religion;
       var relf2=document.getElementById("religion");
       var castef=document.form1.caste;
       var castef2=document.getElementById("caste");
       var fnamef=document.form1.fname;
       var focupf=document.form1.foccup;
       var mnamef=document.form1.mname;
       var mocupf=document.form1.moccup;
       var addressf=document.form1.address;
       var numf=document.form1.number;
       var degreef=document.form1.degree;
       var degreef2=document.getElementById("degree1");
        
    
            if (namef.value.length <= 0) {    
                alert("Name is required");    
                namef.focus();    
                return false;    
            }
            if (emailf.value.length <= 0) {    
                alert("Email Id is required");    
                emailf.focus();    
                return false;    
            }
            if (genderf.value.length <= 0) {    
                genderf2.focus();
                alert("Gender is required");   
                return false;    
            }       
            
            if (dobf.value.length <= 0) {    
                alert("D.O.B number is required");    
                dobf.focus();    
                return false;    
            }     
                
            if (relf.value.length <= 0) {    
                alert("Religion is required");    
                relf2.focus();    
                return false;    
            }
            if (castef.value.length <= 0) {    
                alert("Caste number is required");    
                castef2.focus();    
                return false;    
            }
            if (fnamef.value.length <= 0) {    
                alert("Father's Name number is required");    
                fnamef.focus();    
                return false;    
            }
            if (focupf.value.length <= 0) {    
                alert("Father's Occupation number is required");    
                focupf.focus();    
                return false;    
            }
            if (mnamef.value.length <= 0) {    
                alert("Mother's Name is required");    
                mnamef.focus();    
                return false;    
            }
            if (mocupf.value.length <= 0) {    
                alert("Mother's Occupation number is required");    
                mocupf.focus();    
                return false;    
            }
            if (addressf.value.length <= 0) {    
                alert("Address is required");    
                addressf.focus();    
                return false;    
            }
            if (numf.value.length <= 0) {    
                alert("Mobile number is required");    
                numf.focus();    
                return false;    
            }
            if (degreef.value.length <= 0) {    
                alert("Degree is required");    
                degreef2.focus();    
                return false;    
            }
    }
    </script>
    <script>
    function editable(){
       
        document.getElementById("name1").disabled   = false;
        document.getElementById("email1") .disabled = false;
        document.getElementById("gender1").disabled = false;
        document.getElementById("gender2").disabled = false;
        document.getElementById("dob").disabled     = false;
        document.getElementById("religion1").disabled= false;
        document.getElementById("religion2").disabled= false;
        document.getElementById("religion3").disabled= false;
        document.getElementById("caste1").disabled   = false;
        document.getElementById("caste2").disabled   = false;
        document.getElementById("caste3").disabled   = false;
        document.getElementById("caste4").disabled   = false;
        document.getElementById("fname").disabled   = false;
        document.getElementById("foccup").disabled  = false;
        document.getElementById("mname").disabled   = false;
        document.getElementById("moccup").disabled  = false;
        document.getElementById("d1").disabled = false;
        document.getElementById("d2").disabled = false;
        document.getElementById("d3").disabled = false;
        document.getElementById("d4").disabled = false;
        document.getElementById("address").disabled  = false;
        document.getElementById("number").disabled   = false;
        document.getElementById("degree1").disabled  = false;
        document.getElementById("degree2").disabled  = false;
        document.getElementById("degree3").disabled  = false;
        document.getElementById("degree4").disabled  = false;
        document.getElementById("degree5").disabled  = false;
        document.getElementById("c1").disabled = false;
        document.getElementById("c2").disabled = false;
        document.getElementById("c3").disabled = false;
        document.getElementById("c4").disabled = false;
        document.getElementById("submit").disabled = false;

        
    }
    </script>
    </head>


    <body style="background-color:EFEFEF">
      <div><h1>
            Fejvoks<br>
           Conference<span>June3-June5,Chicago,U.S</span></h1>
           </div>
        
        
        <font color="#6caca0" size=5>
        
       
        <?php
        
        $sql = "SELECT * FROM userdetails WHERE unique_id='".$_GET["uniqueid"]."'";
        $result = $conn->query($sql);
  
        if ($result->num_rows > 0) 
        { while($row = $result->fetch_assoc())
            {
                $qualif=explode(",",$row['qualif']);
                $langs=explode(",",$row['langs']);
                
        ?>
        <h2   style="border: ridge; width: 100%;text-align: center; ">USER DETAILS</h2><br> 
       <form name="form1" action="updatedata.php" method="post" onsubmit="return validate()"><pre>
        
        
        Name                :<input type="text"  id="name1"     name="name1"  <?php echo "value='".$row["name"]."'" ;?> disabled><br>
        E-mail              :<input type="email" id="email1"    name="email" <?php echo "value='".$row["email"]."'" ;?> disabled><br>
        Gender              :<input type="radio" id="gender1"   name="gender" value="male" <?php if($row["gender"]=="male"){?> checked="true" <?php } ?> disabled>male<input type="radio" id="gender2" name="gender" value="female" <?php if($row["gender"]=="female"){?> checked="true" <?php } ?> disabled>female<br>
        Date Of Birth       :<input type="date"  id="dob"       name="dob" <?php echo "value='".$row["d_o_b"]."'" ;?> disabled><br>
        Religion            :<input type="radio" id="religion1" name="religion" value="Christian" <?php if($row["Religion"]=="Christian"){?> checked="true" <?php } ?> disabled>Christian<input type="radio" id="religion2" name="religion" value="Hindu" <?php if($row["Religion"]=="Hindu"){?> checked="true" <?php } ?>disabled>Hindu<input type="radio" id="religion3" name="religion" value="Muslim" <?php if($row["Religion"]=="Muslim"){?> checked="true" <?php } ?> disabled>Muslim<br>
        Caste               :<input type="radio" id="caste1"    name="caste" value="OC" <?php if($row["Caste"]=="OC"){?> checked="true" <?php } ?> disabled>OC<input type="radio" id="caste2" name="caste" value="BC" <?php if($row["Caste"]=="BC"){?> checked="true" <?php } ?> disabled>BC<input type="radio" id="caste3" name="caste" value="SC" <?php if($row["Caste"]=="SC"){?> checked="true" <?php } ?> disabled>SC<input type="radio" name="caste" id="caste4" value="Others" <?php if($row["Caste"]=="Others"){?> checked="true" <?php } ?> disabled>Others<br>
        Father's Name       :<input type="text"  id="fname"     name="fname" <?php echo "value='".$row["fname"]."'" ;?>   disabled><br>
        Father's Occupation :<input type="text"  id="foccup"    name="foccup" <?php echo "value='".$row["foccup"]."'" ;?> disabled><br>
        Mother's Name       :<input type="text"  id="mname"     name="mname" <?php echo "value='".$row["mname"]."'" ;?>   disabled><br>
        Mother's Occupation :<input type="text"  id="moccup"    name="moccup" <?php echo "value='".$row["moccup"]."'" ;?> disabled><br>
        Qualifications      :<input type="checkbox" id="d1"     name="qualif[]"  value="HSC" <?php echo (in_array("HSC",$qualif)) ? "checked=\"true\"" : '';?> disabled>HSC<input type="checkbox" name="qualif[]" id="d2" value="Diplomo" <?php echo (in_array("Diplomo",$qualif)) ? "checked=\"checked\"" : '';?> disabled>Diplomo<input type="checkbox" name="qualif[]" id="d3" value="UG" <?php echo (in_array("UG",$qualif)) ? "checked=\"true\"" : '';?> disabled>UG<input type="checkbox" name="qualif[]" id="d4" value="PG" <?php echo (in_array("PG",$qualif)) ? "checked=\"true\"" : '';?> disabled>PG<br>
        Address             :<textarea rows="5"   id="address"  name="address"  disabled><?php echo $row["address"];?></textarea>  
        Contact number      :<input type="number" id="number"   name="number" <?php echo "value='".$row["cnumber"]."'" ;?> disabled><br> 
        Degree              :<input type="radio"  id="degree1"   name="degree"  value="B.E."  <?php if($row["degree"]=="B.E."){?> checked="true" <?php } ?> disabled>B.E.<input type="radio" id="degree2"  name="degree" value="M.E." <?php if($row["degree"]=="M.E."){?> checked="true" <?php } ?> disabled>M.E.<input type="radio" id="degree3" name="degree" value="B.Ed" <?php if($row["degree"]=="B.Ed"){?> checked="true" <?php } ?> disabled>B.Ed<input type="radio" id="degree4"  name="degree" value="M.Ed" <?php if($row["degree"]=="M.Ed"){?> checked="true" <?php } ?> disabled>M.Ed<input type="radio" id="degree5"  name="degree" value="Ph.d" <?php if($row["degree"]=="Ph.d"){?> checked="true" <?php } ?> disabled>Ph.d<br>				  
        Known programming
               languages    :<input type="checkbox" id="c1" name="lang[]" value="HTML" <?php echo (in_array("HTML",$langs)) ? "checked=\"true\"" : '';?> disabled>HTML   <input type="checkbox"  id="c2" name="lang[]" value="CSS"    <?php echo (in_array("CSS",$langs)) ? "checked=\"true\"" : '';?>  disabled>CSS     
                             <input type="checkbox" id="c3" name="lang[]" value="PHP"  <?php echo (in_array("PHP",$langs)) ? "checked=\"true\"" : '';?>  disabled>PHP    <input type="checkbox"  id="c4" name="lang[]" value="jQuery" <?php echo (in_array("jQuery",$langs)) ? "checked=\"true\"" : '';?> disabled>jQuery
        Unique Id          :<input type="text" name="uniqueid" id="uniqueid" <?php echo "value='".$row["unique_id"]."'" ;?>  readOnly>           
        <button onclick="editable()" type="button">Edit</button> 
                <input style="height:50px;width:100px;background-color:#efc9af;" type="submit" name="submit" id="submit" value="submit"  disabled/><br>    
               
            </form>
        <?php
            }
        } 
        ?>   
        
        <center><font color="teal" size=5>© Fejvoks Conferences</font></center>


</body>
</html> 

