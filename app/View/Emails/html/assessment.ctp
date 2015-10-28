<h2>Back Pain Assessment &amp; Screening Questions</h2>
<table>
	<tr>
		<td><b>Name</b>:</td>
		<td><?=$this->data['assessment']['name']?></td>
	</tr>
	<tr>
		<td><b>Email</b>:</td>
		<td><?=$this->data['assessment']['email']?></td>
	</tr>
	<tr>
		<td><b>Phone</b>:</td>
		<td><?=$this->data['assessment']['phone']?></td>
	</tr>
	<tr>
		<td><b>Age</b>:</td>
		<td><?=$this->data['assessment']['age']?></td>
	</tr>
</table>
<br /><br />
<table cellspacing="0" border="0" bgcolor="#eee" style="margin: 0; padding: 0; border: 1px solid silver;" width="100%" cellpadding="0">
	<thead>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b>Answers</b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;"><b>Questions</b></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q1'])){print $this->data['assessment']['q1'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Do you have severe pain in the leg below the knee and experience weakness, numbness, or continuous pins and needles in the foot or toes?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q2'])){print $this->data['assessment']['q2'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Have you developed low back problems because of a recent severe accident?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q3'])){print $this->data['assessment']['q3'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Following a recent severe episode of low back pain, have you developed bowel or bladder problems?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q4'])){print $this->data['assessment']['q4'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Are you feeling generally unwell in conjunction with this episode of low back pain?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q5'])){print $this->data['assessment']['q5'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Do you have a history of cancer?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q6'])){print $this->data['assessment']['q6'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Do you have a fever or high temperature?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q7'])){print $this->data['assessment']['q7'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Have you lost significant weight for no apparent reason?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q8'])){print $this->data['assessment']['q8'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Are there periods in the day when you have no pain? Even if it is only ten minutes?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q9'])){print $this->data['assessment']['q9'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Is the pain confined to areas above the knee?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q10'])){print $this->data['assessment']['q10'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Are you generally worse when sitting for prolonged periods or when rising from a sitting position?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q11'])){print $this->data['assessment']['q11'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Are you generally worse during or right after prolonged bending or stooping as in bed-making, vacuuming, house work, yard work, etc?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q12'])){print $this->data['assessment']['q12'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Are you generally worse when getting up in the morning, but improve after about half an hour?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q13'])){print $this->data['assessment']['q13'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Are you generally worse when inactive and better when on the move?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q14'])){print $this->data['assessment']['q14'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Are you generally better when walking?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q15'])){print $this->data['assessment']['q15'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Are you generally better when lying face down?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q16'])){print $this->data['assessment']['q16'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Have you had several episodes of low back pain over the past months or years?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q17'])){print $this->data['assessment']['q17'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Between episodes, are you able to move freely in all directions without pain?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q18'])){print $this->data['assessment']['q18'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">Between episodes, are you pain free?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q19'])){print $this->data['assessment']['q19'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">If you have pain in the buttocks, or the upper or lower leg, does it sometimes stop completely, even though you still have pain in the back?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px; border-bottom:1px solid silver;"><b><?php if(isset($this->data['assessment']['q20'])){print $this->data['assessment']['q20'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px; border-bottom:1px solid silver;">How long has your pain been present?</td>
		</tr>
		<tr>
			<td style="text-align:center; padding:10px;"><b><?php if(isset($this->data['assessment']['q21'])){print $this->data['assessment']['q21'];}else{print "Nothing Selected";}?></b></td>
			<td style="border-left:1px solid silver; padding:10px;">When was the last time you had one month without any pain in your back?</td>
		</tr>
	</tbody>
</table>