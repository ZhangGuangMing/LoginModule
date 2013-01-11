<form name="frmLogin" method="post" action="DAO/xlAddAcc.php" enctype="multipart/form-data" onsubmit="return CheckError()">
    <h2 class="title1">Create an account</h2>
    <table border="0" cellpadding="6px" align="center" width="370px" background="Images/BG_main.gif">
        <tr>
            <td align="right" width="90px"><b>Given name:</b></td>
            <td><input type="text" name="name" /></td>
        </tr>
        <tr>
            <td align="right"><b>Gender:</b></td>
            <td>
                <input type="radio" name="gender" value="1" id="rGenderM"  checked="checked"  />
                <label for="rGenderM">Male</label>
                <input type="radio" name="gender" value="0" id="rGenderF"   />
                <label for="rGenderF">FeMale</label>
            </td>
        </tr>
        <tr>
            <td align="right"><b>Location:</b></td>
            <td><input type="text" name="location" vaulue="Suburb or Postcode"/></td>
        </tr>
        <tr>
              <td align='right'>
                <b>Birthday</b>
              </td>
              <td width='20px'>
                    <select name='day'>
                    <?php
                        for($i=1; $i<=31; $i++)
                        {	
                    ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php
                        }
                    ?>    
                    </select>
                    <select name='mon'>
                    <?php
                        for($i=1; $i<=12; $i++)
                        {	
                    ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php
                        }
                    ?> 
                    </select>
                    <select name='year'>
                     <?php
                        $iYear = date("Y",time()) - 18;
                        for($i=$iYear; $i>=$iYear-40; $i--)
                        {	
                    ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php
                        }
                    ?> 
                    </select>
              </td>
        </tr>
        <tr>
            <td align="right"><b>Email address:</b></td>
            <td><input type="text" name="email" /></td>
        </tr>
        <tr>
            <td align="right"><b>Nick name:</b></td>
            <td><input type="text" name="FBname" /></td>
        </tr>
        <tr>
            <td align="right"><b>Password:</b></td>
            <td><input type="password" name="password" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="agree" value="1"/>  I have read and agree with the <br/>
            <span class="link">	<a href="#">Terms & Conditions</a> </span>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btSubmit" value="Create an account" class="css3button" /></td>
        </tr>
         <tr>
            <td></td>
            <td class="link"><a href="#">Already have an account? Log In</a></td>
        </tr>
    </table>
</form>
