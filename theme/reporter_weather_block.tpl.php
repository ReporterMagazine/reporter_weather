

<div id="weatherBox">
	<div style='width:50%;'>
		<img src="<?php echo $weather_array['file_name']; ?>" style='width:100%;'>
	</div>
	<div style='position:absolute;top:5px;bottom:5px;right:5px;left:50%;color:white;'>
		<div style='position:absolute;top:0px;bottom:50%;right:0px;left:5px;background:white;text-align:center;border-radius:3px;'>
			<table style='height:100%;width:100%;font-weight:bold;'>
				<tr>
					<td style='color:#333333;font-size:15px;'>
						<span style='color:#f48b2f;font-size:30px;line-height:25px;'><?php echo floor($weather_array['degreesF']); ?>&deg;F</span> / <?php echo floor($weather_array['degreesC']); ?>&deg;C 
						<div><?php echo $weather_array['weather']; ?></div>
					</td>
				</tr>
			</table>
		</div>
		<div style='position:absolute;top:50%;bottom:0px;right:0px;left:5px;'>
			<div style='position:absolute;top:10px;bottom:5px;right:5px;left:5px;'>
				<table style='height:100%;width:100%;font-size:12px;'>
					<tr><td><b>Winds:</b></td><td style='text-align:right;'><?php echo $weather_array['winds']; ?>mph</td></tr>
					<tr><td><b>Dew Point:</b></td><td style='text-align:right;'><?php echo $weather_array['dew_point']; ?>&deg;F</td></tr>
					<tr><td><b>Humidity:</b></td><td style='text-align:right;'><?php echo $weather_array['humidity']; ?>%</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>