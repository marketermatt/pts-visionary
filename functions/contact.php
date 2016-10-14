<?php
// Contact Form
function pts_contact_form($email) {

	$email_adress_reciever = $email != "" ? $email : get_option('admin_email');
	
	//If the form is submitted
	if(isset($_POST['submittedContact'])) {
        get_template_part('includes/submit','index');
	}
	
	if(isset($emailSent) && $emailSent == true) {
		
		$out .= '<a name="contact_"></a>';
		$out .= __('<p class="thanks"><strong>Thanks!</strong> Your email was successfully sent.</p>','visionary');
		
	} else {
		
		if(isset($captchaError)) {
			$out .= '<a name="contact_"></a>';
			$out .= '<p class="error">'.__('There was an error submitting the form.','visionary').'<p>';
		}
		
		$out .= '<a name="contact_"></a>';
		$out .= '<form action="' .get_permalink(). '#contact_" id="contact_form" method="post">';
		$out .= '<p><label class="textfield_label" for="contactName">'.__('Name','visionary').' *</label><br /><input type="text" name="contactName" id="contactName" value="';
		
		if(isset($_POST['contactName'])) {
			$out .= $_POST['contactName'];
		}
		$out .= '"';
		$out .= ' class="requiredFieldContact textfield';
		
		if($emailError != '') {
			$out .= ' formError';
		}
		$out .= '"';
		$out .= ' size="22" tabindex="1" /></p>';
		
		$out .= '<p><label class="textfield_label" for="email">'.__('Email','visionary').' *</label><br /><input type="text" name="email" id="email" value="';
		
		if(isset($_POST['email'])) {
			$out .= $_POST['email'];
		}
		$out .= '"';
		$out .= ' class="requiredFieldContact email textfield';
		
		if($emailError != '') {
			$out .= ' formError';
		}
		$out .= '"';
		$out .= ' size="22" tabindex="2" /></p>';
		
		$out .= '<p><label class="textfield_label" for="contactName">'.__('Comments','visionary').' </label><br /><textarea name="comments" id="commentsText" rows="20" cols="30" tabindex="3" class="requiredFieldContact textarea';
		
		if($commentError != '') {
			$out .= ' formError';
		}
		$out .= '">';
		
		if(isset($_POST['comments'])) { 
			if(function_exists('stripslashes')) { 
				$out .= stripslashes($_POST['comments']); 
				} else { 
					$out .= $_POST['comments']; 
				} 
			}
		$out .= '</textarea></p>';
		
		$out .= '<p class="screenReader"><label for="checking" class="screenReader">'.__('If you want to submit this form, do not enter anything in this field','visionary').'</label><input type="text" name="checking" id="checking" class="screenReader" value="';
		
		 if(isset($_POST['checking'])) {
			echo $_POST['checking'];
		}
		$out .= '" /></p>';
		
		$out .= '<p class="loadingImg"></p>';
		$out .= '<input name="submittedContact" id="submittedContact" class="Border-Button" tabindex="4" value="Submit" type="submit" />';
		$out .= '<p class="screenReader"><input id="submitUrl" type="hidden" name="submitUrl" value="' .get_template_directory_uri(). '/lib/includes/submit.php" /></p>';
		$out .= '<p class="screenReader"><input id="emailAddress" type="hidden" name="emailAddress" value="' .$email_adress_reciever. '" /></p>';
	
		$out .= '</form>';

	}
	return $out;
}

function ptstheme_admin_adverts()
{
    $file_dir = get_template_directory_uri();
    $adv = array();
    $adv[] = array(
        'image' => 'http://pixelthemestudio.ca/images/ad1.jpg',
        'url' => 'http://pixelthemestudio.ca/ads/ad1/'
    );
    $adv[] = array(
        'image' => 'http://pixelthemestudio.ca/images/ad2.jpg',
        'url' => 'http://pixelthemestudio.ca/ads/ad2/'
    );

    $return = '';
    foreach ($adv as $ad) {
        $return .= '<a href="' . $ad['url'] . '" target="_blank"> <img src="' . $ad['image'] . '" style="width: 100%;height: auto;margin-bottom: 20px;"></a>';
    }

    return $return;
}