<?php
$temp = "<form name='Login' method='post' action='../DAO/xlLogin.php' onsubmit='return Kiemtra()'>";
$temp.= "<br/><br/>
		<table width='300' border='0' align='center' background='Images/BG_main.gif'>
			<tr>
				<td colspan='2' align='center'>
					<img alt='lock' src='../Images/lock-icon.png' width='150px' height='150px'/>
				</td>
			</tr>
			<tr>
			  <td align='right' width='100px'>
				 <b>User ID</b>
			  </td>
			  <td>
				<input type='text' name='username' maxlength='30' /> 
			  </td>
			</tr>
			<tr>
			  <td align='right'>
				<b>Password</b>
			  </td>
			  <td>
				<input type='password' name='password' maxlength='30' />
			  </td>
			</tr>
			<tr>
				<td>
				</td>
				<td align='left' height='50px'> 
					<input class='css3button' type='submit' name='submit'  value='Log In'  />
				</td> 
			</tr>
			";
$temp.="</table>";				
$temp.=	"</form>";
echo $temp;
?>