<?php
	$options = array(
   		'Yes' => 'Yes',
   		'No' => 'No',
   	);
	$attributes = array(
        'div' => false,
        'label' => false,
        'type' => 'radio',
        'default'=> 0,
        'legend' => false,
        'before' => '<label class="btn btn-default btn-lg">',
        'separator' => '</label><label class="btn btn-default btn-lg">',
        'after' => '</label>',
        'options' => $options
	);
	$moptions = array(
   		'Less than 6 weeks' => 'Less than 6 weeks',
   		'6-12 Weeks' => '6-12 Weeks',
   		'3-12 Months' => '3-12 Months',
   		'Over 1 Year' => 'Over 1 Year',
   	);
	$mattributes = array(
        'div' => false,
        'label' => false,
        'type' => 'radio',
        'default'=> 0,
        'legend' => false,
        'before' => '<label class="btn btn-default">',
        'separator' => '</label><label class="btn btn-default">',
        'after' => '</label>',
        'options' => $moptions
	);
	$aoptions = array(
   		'Under 15' => 'Under 15', 
   		'15-29' => '15-29', 
   		'30-54' => '30-54', 
   		'55-70' => '55-70', 
   		'70+' => '70+',
   	);
	$ageattributes = array(
		'type' => 'select',
		'empty' => 'Select One',
		'label' => 'What is your age?',
		'options' => $aoptions
	);
?>
<div class="row">
	<div class="col-md-12">
		<?=$this->Element('carousel'); ?>
		<br />
		<h1 class="hands">What is the Spine Institute?</h1>
		<p>Over two decades of experience and success in treating people with back and neck disorders has led to the creation of a "Educational Center" where we treat you and teach you what works. We believe the methods are good enough - and surprisingly simple! -- to deserve its own name so you can tell family and friends to go see the spine specialists at TSI -- Only at <a href="http://www.mmprotherapy.com/" target="_blank">Meier and Marsh Professional Therapies.</a></p>
		<br />
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<a href="#assessmentform" class="btn btn-primary btn-lg center-block">Take our Back Pain Assessment</a>
			</div>
			<div class="col-md-4"></div>
		</div>
		<br />
	</div>
	<div class="col-md-12">
		<hr>
		<h2 class="hands text-center">Three Steps to Success</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<img src="/img/assessment.jpg" class="img-responsive">
						<h3>Assessment</h3>
						<div class="stepscopy">
							<p>Assessment is your first step to recovery.  Pain is a symptom that needs a diagnosis, so you can receive appropriate, personalized treatment.  We begin with a thorough history and physical testing of movements and positions that identify your unique patterns of pain.  From this, we produce a "Mechanical Diagnosis" that is used to create a treatment plan -- so you get rapid results!  <em>Research has shown our assessment methodology to be as reliable as costly x-rays and MRI's to determine the source of the problem.</em></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<img src="/img/treatment.jpg" class="img-responsive">
						<h3>Treatment</h3>
						<div class="stepscopy">
							<p>Using your Mechanical Diagnosis, we discover which movements and positions <strong>erase your pain</strong> and restore alignment and movement.  You will be prescribed a treatment plan/exercise program based on your precise needs.  <strong>Following your treatment plan in the clinic and at home is the single most important factor in the speed and effectiveness of your recovery.</strong>  Your treatment plan may include hands on joint mobilizations, soft-tissue massage, strategic strengthening, posture training, etc.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<img src="/img/empowerment.jpg" class="img-responsive">
						<h3>Empowerment</h3>
						<div class="stepscopy">
							<p>We pride ourselves on educating and empowering our patients toward their own recovery.  Beginning on your first visit, you will receive personalized home exercises that are a vital part of managing your pain and recovering your strength and mobility.  <em>Patients who consistently follow up on their home exercises recover more quickly and completely.</em>   When you act on our coaching, you enhance your body's ability to heal, often without the need for long term medications, surgery or dependency on any practitioner.   Meier and Marsh patients consistently recover more quickly than the national average -- <em>so you get back to doing what you love in less time and with less expense.</em></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
	</div>
	<div id="assessmentform" class="col-md-12 text-center">
		<h2 class="hands">Back Pain Assessment</h2>
		<p>One of our specialists will respond within 1-2 business days to recommend the best course of action <em>for your specific needs</em>.</p>
		<hr>
		<div class="row assessmentformarea">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<?=$this->Form->create('assessment', array('inputDefaults'=>array('div'=>'form-group', 'class'=>'form-control', 'wrapInput'=>false)));?>
				<div class="row text-left">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<?=$this->Form->input('name', array('placeholder'=>'Enter Your First and Last Name', 'required' => true, 'allowEmpty' => false)); ?>
						<?=$this->Form->input('email', array('placeholder'=>'you@example.com', 'required' => true, 'allowEmpty' => false)); ?>
						<?=$this->Form->input('phone', array('placeholder'=>'123-456-7890')); ?>
						<?=$this->Form->input('age', $ageattributes);?>
					</div>	
					<div class="col-md-1"></div>
				</div>

				<hr>
				<h1>Part 1:</h1>
				<p class="lead">Assessing the cause of and complications associated with your back pain or sciatica.</p>
				<div class="row well questions">
					<div class="col-md-12">
						<p class="lead">Do you have severe pain in the leg below the knee and experience weakness, numbness, or continuous pins and needles in the foot or toes?</p>
						<div id="q1" class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q1', $attributes);?> 						
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Have you developed low back problems because of a recent severe accident?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q2', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Following a recent severe episode of low back pain, have you developed bowel or bladder problems?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q3', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Are you feeling generally unwell in conjunction with this episode of low back pain?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q4', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Do you have a history of cancer?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q5', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Do you have a fever or high temperature?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q6', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Have you lost significant weight for no apparent reason?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q7', $attributes);?>
						</div>
					</div>
				</div>
				<br />
				<h1>Part 2:</h1>
				<p class="lead">To determine whether we can help you treat your low back pain or sciatica successfully with mechanical diagnosis and therapy<small>(MDT)</small> without further medical testing or treatments <small>(imaging, medications, injections, etc.)</small></p>
				<div class="row well questions">
					<div class="col-md-12">
						<p class="lead">Are there periods in the day when you have no pain? Even if it is only ten minutes?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q8', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Is the pain confined to areas above the knee? <small>(nothing below the knee)</small></p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q9', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Are you generally worse when sitting for prolonged periods or when rising from a sitting position?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q10', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Are you generally worse during or right after prolonged bending or stooping as in bed-making, vacuuming, house work, yard work, etc?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q11', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Are you generally worse when getting up in the morning, but improve after about half an hour?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q12', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Are you generally worse when inactive and better when on the move?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q13', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Are you generally better when walking?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q14', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Are you generally better when lying face down?</p><p>When testing this you may feel worse for the first few minutes after which time the pain subsides; <br />(in this case the answer to the question is 'yes')</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q15', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Have you had several episodes of low back pain over the past months or years?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q16', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Between episodes, are you able to move freely in all directions without pain?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q17', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">Between episodes, are you pain free?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q18', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">If you have pain in the buttocks, or the upper or lower leg, does it sometimes stop completely, even though you still have pain in the back?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q19', $attributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">How long has your pain been present?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q20', $mattributes);?>
						</div>
					</div>
					<div class="col-md-12 seprate"><hr></div>
					<div class="col-md-12">
						<p class="lead">When was the last time you had one month without any pain in your back?</p>
						<div class="btn-group" data-toggle="buttons">
							<?=$this->Form->input('q21', $mattributes);?>
						</div>
					</div>
				</div>
				<div class="g-recaptcha" data-sitekey="6Ldc_f8SAAAAAGzrA-pKFg5_vgmZ2fd2XmXXt5xy"></div>
				<?=$this->Form->submit('Submit Assessment!', array('class'=>'btn btn-primary btn-lg btn-mega'))?>
				<?=$this->Form->end()?>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</div>