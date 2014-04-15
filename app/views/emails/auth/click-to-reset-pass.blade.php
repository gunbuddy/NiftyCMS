<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<table width="800" border="0" align="left" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td  style="font-family:Verdana, Geneva, sans-serif;font-size:13px;color:#333333;text-align:left;padding-top: 15px;" >
						Hi, {{ $user->first_name }}
					</td>
				</tr>
				<tr>
					<td  style="font-family:Verdana, Geneva, sans-serif;font-size:13px;color:#333333;text-align:left;" >
						<p>
							You have recently requested to change your admin dashboard account password. <br>
							To do so, kindly click on the link below and a new password will be automatically generated for you. <br>
							Once you login, you can then change this password to something more memorable.
						</p>
					</td>
				</tr>	
				<tr>
					<td  style="font-family:Verdana, Geneva, sans-serif;font-size:13px;color:#333333;text-align:left;padding-top: 15px;" >
						<p>
							<a href="{{ URL::to($link) }}">{{ $link }}</a> 
						</p>
					</td>
				</tr>	
				<tr>
					<td  style="font-family:Verdana, Geneva, sans-serif;font-size:13px;color:#333333;text-align:left;padding: 15px 0;" >
						<p>
							If you didn't not request for this, please ignore this email and your account will retain its current password.
						</p>
					</td>
				</tr>
				<tr>
					<td  style="font-family:Verdana, Geneva, sans-serif;font-size:13px;color:#333333;text-align:left;" >
						Regards, <br>
						James @ ACW.
					</td>
				</tr>						
			</tbody>
		</table>
	</body>
</html>