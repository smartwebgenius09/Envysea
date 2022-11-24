<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*	----------------------------------
	Make Changes Here
--------------------------------------*/

//Default Meta information if it isn't reset when loading a view
$config['site_description'] = 'envysea is an open source starter kit for codeigniter authentication';
$config['site_keywords'] = 'codeigniter, authorization, login, starter, envysea';
$config['author'] = 'Nicholas Cerminara | http://envysea.com';

//Default site title if not set when loading a view	
$config['site_title'] = 'Envysea Codeigniter Authentication';

//Message that displays when a user logins
$config['welcome_message'] = 'This is a welcome message !';

//email parameters for when someone retrieves forgotten auth credentials
$config['from_email'] = 'ncerminara@envysea.com';
$config['forgot_username_subject'] = 'You forgot your username!';
$config['forgot_password_subject'] = 'You forgot your password!';

//admin_level default 69 (can't be 0, 1, or NULL)
$config['admin_level'] = '69';

//make this a random, unguessable, unique character string
$config['salty_salt'] = 'envysea_top_secret_salt';


/*---------------------------------
	End make changes
-----------------------------------*/










/*	Useful Arrays
--------------------------------------*/
$config['security_questions'] = array(
								'What was your childhood nickname?' => 'What was your childhood nickname?',
								'In what city did you meet your spouse/significant other?' => 'In what city did you meet your spouse/significant other?',
								'What is the name of your favorite childhood friend?' => 'What is the name of your favorite childhood friend?',
								'What street did you live on in third grade?' => 'What street did you live on in third grade?',
								'What is the middle name of your youngest child?' => 'What is the middle name of your youngest child?',
								'What is your oldest sibling\'s middle name?' => 'What is your oldest sibling\'s middle name?',
								'What school did you attend for sixth grade?' => 'What school did you attend for sixth grade?',
								'What was your childhood phone number including area code? (e.g., 000-000-0000)' => 'What was your childhood phone number including area code? (e.g., 000-000-0000)',
								'What is your oldest cousin\'s first and last name?' => 'What is your oldest cousin\'s first and last name?',
								'What was the name of your first stuffed animal?' => 'What was the name of your first stuffed animal?',
								'In what city or town did your mother and father meet?' => 'In what city or town did your mother and father meet?',
								'Where were you when you had your first kiss?' => 'Where were you when you had your first kiss?',
								'What is the first name of the boy or girl that you first kissed?' => 'What is the first name of the boy or girl that you first kissed?',
								'What was the last name of your third grade teacher?' => 'What was the last name of your third grade teacher?',
								'In what city does your nearest sibling live?' => 'In what city does your nearest sibling live?',
								'What is your youngest brother\'s birthday month and year? (e.g., January 1900)' => 'What is your youngest brother\'s birthday month and year? (e.g., January 1900)',
								'What is your maternal grandmother\'s maiden name?' => 'What is your maternal grandmother\'s maiden name?',
								'In what city or town was your first job?' => 'In what city or town was your first job?',
								'What is the name of the place your wedding reception was held?' => 'What is the name of the place your wedding reception was held?',
								'What is the name of a college you applied to but didn\'t attend?' => 'What is the name of a college you applied to but didn\'t attend?',
								'Where were you when you first heard about 9/11?' => 'Where were you when you first heard about 9/11?'
								);

$config['country_list'] = array( 
								'United States' => 'United States', 
								'Afghanistan' => 'Afghanistan', 
								'Albania' => 'Albania', 
								'Algeria' => 'Algeria', 
								'Algeria' => 'Algeria', 
								'Algeria' => 'Algeria', 
								'Antigua and Barbuda' => 'Antigua and Barbuda', 
								'Argentina' => 'Argentina', 
								'Armenia' => 'Armenia', 
								'Australia' => 'Australia', 
								'Austria' => 'Austria', 
								'Azerbaijan' => 'Azerbaijan', 
								'Bahamas' => 'Bahamas', 
								'Bahrain' => 'Bahrain', 
								'Bangladesh' => 'Bangladesh', 
								'Barbados' => 'Barbados', 
								'Belarus' => 'Belarus', 
								'Belgium' => 'Belgium', 
								'Belize' => 'Belize', 
								'Benin' => 'Benin', 
								'Bhutan' => 'Bhutan', 
								'Bolivia' => 'Bolivia', 
								'Bosnia and Herzegovina' => 'Bosnia and Herzegovina', 
								'Botswana' => 'Botswana', 
								'Brazil' => 'Brazil', 
								'Brunei' => 'Brunei', 
								'Bulgaria' => 'Bulgaria', 
								'Burkina Faso' => 'Burkina Faso', 
								'Burundi' => 'Burundi', 
								'Cambodia' => 'Cambodia', 
								'Cameroon' => 'Cameroon', 
								'Canada' => 'Canada', 
								'Cape Verde' => 'Cape Verde', 
								'Central African Republic' => 'Central African Republic', 
								'Chad' => 'Chad', 
								'Chile' => 'Chile', 
								'China' => 'China', 
								'Colombi' => 'Colombi', 
								'Comoros' => 'Comoros', 
								'Congo (Brazzaville)' => 'Congo (Brazzaville)', 
								'Congo' => 'Congo', 
								'Costa Rica' => 'Costa Rica', 
								'Cote d\'Ivoire' => 'Cote d\'Ivoire', 
								'Croatia' => 'Croatia', 
								'Cuba' => 'Cuba', 
								'Cyprus' => 'Cyprus', 
								'Czech Republic' => 'Czech Republic', 
								'Denmark' => 'Denmark', 
								'Djibouti' => 'Djibouti', 
								'Dominica' => 'Dominica', 
								'Dominican Republic' => 'Dominican Republic', 
								'East Timor (Timor Timur)' => 'East Timor (Timor Timur)', 
								'Ecuador' => 'Ecuador', 
								'Egypt' => 'Egypt', 
								'El Salvador' => 'El Salvador', 
								'Equatorial Guinea' => 'Equatorial Guinea', 
								'Eritrea' => 'Eritrea', 
								'Estonia' => 'Estonia', 
								'Ethiopia' => 'Ethiopia', 
								'Fiji' => 'Fiji', 
								'Finland' => 'Finland', 
								'France' => 'France', 
								'Gabon' => 'Gabon', 
								'Gambia, The' => 'Gambia, The', 
								'Georgia' => 'Georgia', 
								'Germany' => 'Germany', 
								'Ghana' => 'Ghana', 
								'Greece' => 'Greece', 
								'Grenada' => 'Grenada', 
								'Guatemala' => 'Guatemala', 
								'Guinea' => 'Guinea', 
								'Guinea-Bissau' => 'Guinea-Bissau', 
								'Guyana' => 'Guyana', 
								'Haiti' => 'Haiti', 
								'Honduras' => 'Honduras', 
								'Hungary' => 'Hungary', 
								'Iceland' => 'Iceland', 
								'India' => 'India', 
								'Indonesia' => 'Indonesia', 
								'Iran' => 'Iran', 
								'Iraq' => 'Iraq', 
								'Ireland' => 'Ireland', 
								'Israel' => 'Israel', 
								'Italy' => 'Italy', 
								'Jamaica' => 'Jamaica', 
								'Japan' => 'Japan', 
								'Jordan' => 'Jordan', 
								'Kazakhstan' => 'Kazakhstan', 
								'Kenya' => 'Kenya', 
								'Kiribati' => 'Kiribati', 
								'Korea, North' => 'Korea, North', 
								'Korea, South' => 'Korea, South', 
								'Kuwait' => 'Kuwait', 
								'Kyrgyzstan' => 'Kyrgyzstan', 
								'Laos' => 'Laos', 
								'Latvia' => 'Latvia', 
								'Lebanon' => 'Lebanon', 
								'Lesotho' => 'Lesotho', 
								'Liberia' => 'Liberia', 
								'Libya' => 'Libya', 
								'Liechtenstein' => 'Liechtenstein', 
								'Lithuania' => 'Lithuania', 
								'Luxembourg' => 'Luxembourg', 
								'Macedonia' => 'Macedonia', 
								'Madagascar' => 'Madagascar', 
								'Malawi' => 'Malawi', 
								'Malaysia' => 'Malaysia', 
								'Maldives' => 'Maldives', 
								'Mali' => 'Mali', 
								'Malta' => 'Malta', 
								'Marshall Islands' => 'Marshall Islands', 
								'Mauritania' => 'Mauritania', 
								'Mauritius' => 'Mauritius', 
								'Mexico' => 'Mexico', 
								'Micronesia' => 'Micronesia', 
								'Moldova' => 'Moldova', 
								'Monaco' => 'Monaco', 
								'Mongolia' => 'Mongolia', 
								'Morocco' => 'Morocco', 
								'Mozambique' => 'Mozambique', 
								'Myanmar' => 'Myanmar', 
								'Namibia' => 'Namibia', 
								'Nauru' => 'Nauru', 
								'Nepa' => 'Nepa', 
								'Netherlands' => 'Netherlands', 
								'New Zealand' => 'New Zealand', 
								'Nicaragua' => 'Nicaragua', 
								'Niger' => 'Niger', 
								'Nigeria' => 'Nigeria', 
								'Norway' => 'Norway', 
								'Oman' => 'Oman', 
								'Pakistan' => 'Pakistan', 
								'Palau' => 'Palau', 
								'Panama' => 'Panama', 
								'Papua New Guinea' => 'Papua New Guinea', 
								'Paraguay' => 'Paraguay', 
								'Peru' => 'Peru', 
								'Philippines' => 'Philippines', 
								'Poland' => 'Poland', 
								'Portugal' => 'Portugal', 
								'Qatar' => 'Qatar', 
								'Romania' => 'Romania', 
								'Russia' => 'Russia', 
								'Rwanda' => 'Rwanda', 
								'Saint Kitts and Nevis' => 'Saint Kitts and Nevis', 
								'Saint Lucia' => 'Saint Lucia', 
								'Saint Vincent' => 'Saint Vincent', 
								'Samoa' => 'Samoa', 
								'San Marino' => 'San Marino', 
								'Sao Tome and Principe' => 'Sao Tome and Principe', 
								'Saudi Arabia' => 'Saudi Arabia', 
								'Senegal' => 'Senegal', 
								'Serbia and Montenegro' => 'Serbia and Montenegro', 
								'Seychelles' => 'Seychelles', 
								'Sierra Leone' => 'Sierra Leone', 
								'Singapore' => 'Singapore', 
								'Slovakia' => 'Slovakia', 
								'Slovenia' => 'Slovenia', 
								'Solomon Islands' => 'Solomon Islands', 
								'Somalia' => 'Somalia', 
								'South Africa' => 'South Africa', 
								'Spain' => 'Spain', 
								'Sri Lanka' => 'Sri Lanka', 
								'Sudan' => 'Sudan', 
								'Suriname' => 'Suriname', 
								'Swaziland' => 'Swaziland', 
								'Sweden' => 'Sweden', 
								'Switzerland' => 'Switzerland', 
								'Syria' => 'Syria', 
								'Taiwan' => 'Taiwan', 
								'Tajikistan' => 'Tajikistan', 
								'Tanzania' => 'Tanzania', 
								'Thailand' => 'Thailand', 
								'Togo' => 'Togo', 
								'Tonga' => 'Tonga', 
								'Trinidad and Tobago' => 'Trinidad and Tobago', 
								'Tunisia' => 'Tunisia', 
								'Turkey' => 'Turkey', 
								'Turkmenistan' => 'Turkmenistan', 
								'Tuvalu' => 'Tuvalu', 
								'Uganda' => 'Uganda', 
								'Ukraine' => 'Ukraine', 
								'United Arab Emirates' => 'United Arab Emirates', 
								'United Kingdom' => 'United Kingdom', 
								'Uruguay' => 'Uruguay', 
								'Uzbekistan' => 'Uzbekistan', 
								'Vanuatu' => 'Vanuatu', 
								'Vatican City' => 'Vatican City', 
								'Venezuela' => 'Venezuela', 
								'Vietnam' => 'Vietnam', 
								'Yemen' => 'Yemen', 
								'Zambia' => 'Zambia', 
								'Zimbabwe' => 'Zimbabwe' 
								);

$config['states'] = array( 
						'AK' => 'Alaska',  
						'AL' => 'Alabama',  
						'AR' => 'Arkansas',  
						'AZ' => 'Arizona',  
						'CA' => 'California',  
						'CO' => 'Colorado',  
						'CT' => 'Connecticut',  
						'DE' => 'Delaware',  
						'DC' => 'District of Columbia',  
						'FL' => 'Florida',  
						'GA' => 'Georgia', 
						'HI' => 'Hawaii',  
						'IA' => 'Iowa',  
						'ID' => 'Idaho',  
						'IL' => 'Illinois',  
						'IN' => 'Indiana',  
						'KS' => 'Kansas',  
						'KY' => 'Kentucky',  
						'LA' => 'Louisiana',  
						'MA' => 'Massachusetts',  
						'MD' => 'Maryland',  
						'ME' => 'Maine',  
						'MI' => 'Michigan',  
						'MN' => 'Minnesota',  
						'MS' => 'Mississippi',  
						'MO' => 'Missouri',  
						'MT' => 'Montana',  
						'NC' => 'North Carolina',  
						'ND' => 'North Dakota',  
						'NE' => 'Nebraska',  
						'NH' => 'New Hampshire',  
						'NJ' => 'New Jersey',  
						'NM' => 'New Mexico',  
						'NV' => 'Nevada',  
						'NY' => 'New York',  
						'OH' => 'Ohio',  
						'OK' => 'Oklahoma',  
						'OR' => 'Oregon',  
						'PA' => 'Pennsylvania',  
						'RI' => 'Rhode Island',  
						'SC' => 'South Carolina',  
						'SD' => 'South Dakota',  
						'TN' => 'Tennessee',  
						'TX' => 'Texas',  
						'UT' => 'Utah',  
						'VA' => 'Virginia',  
						'VT' => 'Vermont',  
						'WA' => 'Washington',  
						'WI' => 'Wisconsin',  
						'WV' => 'West Virginia',  
						'WY' => 'Wyoming'
						);

/* End of file config.php */
/* Location: ./application/config/config.php */