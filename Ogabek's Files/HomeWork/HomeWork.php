<!doctype html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title> Covid-19</title>
		<link rel="stylesheet" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/fontawesome/css/all.css">
		<script src="/js/bootstrap.js"></script>
</head>
<body>
<?php
include "covid19.php";
?>
<div class="container-fluid">
		<div class="myheader">
				<h4>Coronavirus Disease(COVID-19)</h4>
				<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" style="color:black;" type="submit">Search</button>
				</form>
		</div>
		<div class="nav-link">
				<a  href="HomeWork.php">Home <span class="sr-only">(current)</span></a>
				<a  href="https://www.bing.com/search?q=Covid%2019%20informations&pc=cosp&ptag=G6C24N2001D120919A9D634ED7FE&form=CONTLB&conlogo=CT3210127" role="button" > Informations </a>
				<a  href="HWSymthmes.php" role="button">Symptoms</a>
				<a  href="https://www.healthline.com/health/coronavirus-treatment" role="button">Treatments</a>
				<a  href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/index.html" role="button">Prevention</a>
				<a  href="HWForm.php" role="button">Donate</a>
		</div>
		<div id="menu_div">
				<div class="w_31">
						<img class="img" src="https://lh3.googleusercontent.com/proxy/HxKR1dV5-XEqqcMxMe_UC6CM_G_CsIINxUGzG2vNJ9Gj-nZpWUopgVEqD5ZONpwrId8ShKhT-ba99b4U7UEHfshIOg_us7b-o2N8_G4ghyN_2GM3sw" alt=""><br>
						<a href="https://www.facebook.com/watch/search/?query=covid%2019">FaceBook</a>
				</div>
				<div class="w_32">
						<img class="img" src="https://www.brandinglosangeles.com/wp-content/uploads/Instagram-3.png" alt="">
						<a href="https://www.instagram.com/who/?hl=en">Instagram</a>
				</div>
				<div class="w_33">
						<img class="img" src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" alt="">
						<a href="https://twitter.com/search?q=covid%2019&src=typed_query">Tweeter</a>
				</div>
				<div class="w_34">
						<img class="img" src="https://www.online-tech-tips.com/wp-content/uploads/2019/07/youtube-1.png" alt="">
						<a href="https://www.youtube.com/results?search_query=Covid+19">YouTube</a>
				</div>
		</div
		<form method="get">
				<!--- This is The Box --->
				<div id="div_ip">
						<!--- This is for Left Box_Num1 --->
						<div id="box_num1">
								<form method="get">
										<!--- This is For Country Div --->
										<div id="country_div">
												<!--- This is For Box-2 --->
												<div id="box-2">
														<h5 style=" display:inline-block; color:red;">Select Your Country *</h5>
														<hr>
														<select id="country" name="country" class="form-control">
																
																<option value="Afghanistan">Afghanistan</option>
																<option value="Åland Islands">Åland Islands</option>
																<option value="Albania">Albania</option>
																<option value="Algeria">Algeria</option>
																<option value="American Samoa">American Samoa</option>
																<option value="Andorra">Andorra</option>
																<option value="Angola">Angola</option>
																<option value="Anguilla">Anguilla</option>
																<option value="Antarctica">Antarctica</option>
																<option value="Antigua and Barbuda">Antigua and Barbuda</option>
																<option value="Argentina">Argentina</option>
																<option value="Armenia">Armenia</option>
																<option value="Aruba">Aruba</option>
																<option value="Australia">Australia</option>
																<option value="Austria">Austria</option>
																<option value="Azerbaijan">Azerbaijan</option>
																<option value="Bahamas">Bahamas</option>
																<option value="Bahrain">Bahrain</option>
																<option value="Bangladesh">Bangladesh</option>
																<option value="Barbados">Barbados</option>
																<option value="Belarus">Belarus</option>
																<option value="Belgium">Belgium</option>
																<option value="Belize">Belize</option>
																<option value="Benin">Benin</option>
																<option value="Bermuda">Bermuda</option>
																<option value="Bhutan">Bhutan</option>
																<option value="Bolivia">Bolivia</option>
																<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
																<option value="Botswana">Botswana</option>
																<option value="Bouvet Island">Bouvet Island</option>
																<option value="Brazil">Brazil</option>
																<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
																<option value="Brunei Darussalam">Brunei Darussalam</option>
																<option value="Bulgaria">Bulgaria</option>
																<option value="Burkina Faso">Burkina Faso</option>
																<option value="Burundi">Burundi</option>
																<option value="Cambodia">Cambodia</option>
																<option value="Cameroon">Cameroon</option>
																<option value="Canada">Canada</option>
																<option value="Cape Verde">Cape Verde</option>
																<option value="Cayman Islands">Cayman Islands</option>
																<option value="Central African Republic">Central African Republic</option>
																<option value="Chad">Chad</option>
																<option value="Chile">Chile</option>
																<option value="China">China</option>
																<option value="Christmas Island">Christmas Island</option>
																<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
																<option value="Colombia">Colombia</option>
																<option value="Comoros">Comoros</option>
																<option value="Congo">Congo</option>
																<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
																<option value="Cook Islands">Cook Islands</option>
																<option value="Costa Rica">Costa Rica</option>
																<option value="Cote D'ivoire">Cote D'ivoire</option>
																<option value="Croatia">Croatia</option>
																<option value="Cuba">Cuba</option>
																<option value="Cyprus">Cyprus</option>
																<option value="Czech Republic">Czech Republic</option>
																<option value="Denmark">Denmark</option>
																<option value="Djibouti">Djibouti</option>
																<option value="Dominica">Dominica</option>
																<option value="Dominican Republic">Dominican Republic</option>
																<option value="Ecuador">Ecuador</option>
																<option value="Egypt">Egypt</option>
																<option value="El Salvador">El Salvador</option>
																<option value="Equatorial Guinea">Equatorial Guinea</option>
																<option value="Eritrea">Eritrea</option>
																<option value="Estonia">Estonia</option>
																<option value="Ethiopia">Ethiopia</option>
																<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
																<option value="Faroe Islands">Faroe Islands</option>
																<option value="Fiji">Fiji</option>
																<option value="Finland">Finland</option>
																<option value="France">France</option>
																<option value="French Guiana">French Guiana</option>
																<option value="French Polynesia">French Polynesia</option>
																<option value="French Southern Territories">French Southern Territories</option>
																<option value="Gabon">Gabon</option>
																<option value="Gambia">Gambia</option>
																<option value="Georgia">Georgia</option>
																<option value="Germany">Germany</option>
																<option value="Ghana">Ghana</option>
																<option value="Gibraltar">Gibraltar</option>
																<option value="Greece">Greece</option>
																<option value="Greenland">Greenland</option>
																<option value="Grenada">Grenada</option>
																<option value="Guadeloupe">Guadeloupe</option>
																<option value="Guam">Guam</option>
																<option value="Guatemala">Guatemala</option>
																<option value="Guernsey">Guernsey</option>
																<option value="Guinea">Guinea</option>
																<option value="Guinea-bissau">Guinea-bissau</option>
																<option value="Guyana">Guyana</option>
																<option value="Haiti">Haiti</option>
																<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
																<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
																<option value="Honduras">Honduras</option>
																<option value="Hong Kong">Hong Kong</option>
																<option value="Hungary">Hungary</option>
																<option value="Iceland">Iceland</option>
																<option value="India">India</option>
																<option value="Indonesia">Indonesia</option>
																<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
																<option value="Iraq">Iraq</option>
																<option value="Ireland">Ireland</option>
																<option value="Isle of Man">Isle of Man</option>
																<option value="Israel">Israel</option>
																<option value="Italy">Italy</option>
																<option value="Jamaica">Jamaica</option>
																<option value="Japan">Japan</option>
																<option value="Jersey">Jersey</option>
																<option value="Jordan">Jordan</option>
																<option value="Kazakhstan">Kazakhstan</option>
																<option value="Kenya">Kenya</option>
																<option value="Kiribati">Kiribati</option>
																<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
																<option value="Korea, Republic of">Korea, Republic of</option>
																<option value="Kuwait">Kuwait</option>
																<option value="Kyrgyzstan">Kyrgyzstan</option>
																<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
																<option value="Latvia">Latvia</option>
																<option value="Lebanon">Lebanon</option>
																<option value="Lesotho">Lesotho</option>
																<option value="Liberia">Liberia</option>
																<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
																<option value="Liechtenstein">Liechtenstein</option>
																<option value="Lithuania">Lithuania</option>
																<option value="Luxembourg">Luxembourg</option>
																<option value="Macao">Macao</option>
																<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
																<option value="Madagascar">Madagascar</option>
																<option value="Malawi">Malawi</option>
																<option value="Malaysia">Malaysia</option>
																<option value="Maldives">Maldives</option>
																<option value="Mali">Mali</option>
																<option value="Malta">Malta</option>
																<option value="Marshall Islands">Marshall Islands</option>
																<option value="Martinique">Martinique</option>
																<option value="Mauritania">Mauritania</option>
																<option value="Mauritius">Mauritius</option>
																<option value="Mayotte">Mayotte</option>
																<option value="Mexico">Mexico</option>
																<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
																<option value="Moldova, Republic of">Moldova, Republic of</option>
																<option value="Monaco">Monaco</option>
																<option value="Mongolia">Mongolia</option>
																<option value="Montenegro">Montenegro</option>
																<option value="Montserrat">Montserrat</option>
																<option value="Morocco">Morocco</option>
																<option value="Mozambique">Mozambique</option>
																<option value="Myanmar">Myanmar</option>
																<option value="Namibia">Namibia</option>
																<option value="Nauru">Nauru</option>
																<option value="Nepal">Nepal</option>
																<option value="Netherlands">Netherlands</option>
																<option value="Netherlands Antilles">Netherlands Antilles</option>
																<option value="New Caledonia">New Caledonia</option>
																<option value="New Zealand">New Zealand</option>
																<option value="Nicaragua">Nicaragua</option>
																<option value="Niger">Niger</option>
																<option value="Nigeria">Nigeria</option>
																<option value="Niue">Niue</option>
																<option value="Norfolk Island">Norfolk Island</option>
																<option value="Northern Mariana Islands">Northern Mariana Islands</option>
																<option value="Norway">Norway</option>
																<option value="Oman">Oman</option>
																<option value="Pakistan">Pakistan</option>
																<option value="Palau">Palau</option>
																<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
																<option value="Panama">Panama</option>
																<option value="Papua New Guinea">Papua New Guinea</option>
																<option value="Paraguay">Paraguay</option>
																<option value="Peru">Peru</option>
																<option value="Philippines">Philippines</option>
																<option value="Pitcairn">Pitcairn</option>
																<option value="Poland">Poland</option>
																<option value="Portugal">Portugal</option>
																<option value="Puerto Rico">Puerto Rico</option>
																<option value="Qatar">Qatar</option>
																<option value="Reunion">Reunion</option>
																<option value="Romania">Romania</option>
																<option value="Russian Federation">Russian Federation</option>
																<option value="Rwanda">Rwanda</option>
																<option value="Saint Helena">Saint Helena</option>
																<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																<option value="Saint Lucia">Saint Lucia</option>
																<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
																<option value="Samoa">Samoa</option>
																<option value="San Marino">San Marino</option>
																<option value="Sao Tome and Principe">Sao Tome and Principe</option>
																<option value="Saudi Arabia">Saudi Arabia</option>
																<option value="Senegal">Senegal</option>
																<option value="Serbia">Serbia</option>
																<option value="Seychelles">Seychelles</option>
																<option value="Sierra Leone">Sierra Leone</option>
																<option value="Singapore">Singapore</option>
																<option value="Slovakia">Slovakia</option>
																<option value="Slovenia">Slovenia</option>
																<option value="Solomon Islands">Solomon Islands</option>
																<option value="Somalia">Somalia</option>
																<option value="South Africa">South Africa</option>
																<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
																<option value="Spain">Spain</option>
																<option value="Sri Lanka">Sri Lanka</option>
																<option value="Sudan">Sudan</option>
																<option value="Suriname">Suriname</option>
																<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
																<option value="Swaziland">Swaziland</option>
																<option value="Sweden">Sweden</option>
																<option value="Switzerland">Switzerland</option>
																<option value="Syrian Arab Republic">Syrian Arab Republic</option>
																<option value="Taiwan, Province of China">Taiwan, Province of China</option>
																<option value="Tajikistan">Tajikistan</option>
																<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
																<option value="Thailand">Thailand</option>
																<option value="Timor-leste">Timor-leste</option>
																<option value="Togo">Togo</option>
																<option value="Tokelau">Tokelau</option>
																<option value="Tonga">Tonga</option>
																<option value="Trinidad and Tobago">Trinidad and Tobago</option>
																<option value="Tunisia">Tunisia</option>
																<option value="Turkey">Turkey</option>
																<option value="Turkmenistan">Turkmenistan</option>
																<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
																<option value="Tuvalu">Tuvalu</option>
																<option value="Uganda">Uganda</option>
																<option value="Ukraine">Ukraine</option>
																<option value="United Arab Emirates">United Arab Emirates</option>
																<option value="United Kingdom">United Kingdom</option>
																<option value="United States">United States</option>
																<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
																<option value="Uruguay">Uruguay</option>
																<option value="Uzbekistan">Uzbekistan</option>
																<option value="Vanuatu">Vanuatu</option>
																<option value="Venezuela">Venezuela</option>
																<option value="Viet Nam">Viet Nam</option>
																<option value="Virgin Islands, British">Virgin Islands, British</option>
																<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
																<option value="Wallis and Futuna">Wallis and Futuna</option>
																<option value="Western Sahara">Western Sahara</option>
																<option value="Yemen">Yemen</option>
																<option value="Zambia">Zambia</option>
																<option value="Zimbabwe">Zimbabwe</option>
														</select>
												</div>
												<!--- This is For Box-3 --->
												<div id="box-3">
														<table>
																<tr>
																		<td>From Date:</td>
																		<td><input value="<?=$from_date?>" type="date" name="from_date" placeholder="From Date"></td>
																</tr>
																<tr>
																		<td>To Date:</td>
																		<td><input  value="<?=$to_date?>" type="date" name="to_date" placeholder="To Date"></td>
																</tr>
														</table>
												</div><br>
												<button type="submit" class="btn btn-success">Submit</button><br>
										</div>
								</form>
						</div>
						<!--- This is For Box_Num2 --->
						<div id="box_num2">
								<h5 style=" display:inline-block; color:red;">This is Result For <?=$country?>* </h5>
								<hr>
								<div id="box-3">
										<table class="table">
												<tr>
														<th> <i class="fa fa-globe"></i>
																&nbsp | Country:</th>
														<td><?=$covid19->country?></td>
												</tr>
												<tr>
														<th><i class="fa fa-recycle"></i>&nbsp| Confirmed:</th>
														<td><?=$covid19->confirmed?></td>
												</tr>
												<tr>
														<th><i class="fa fa-medkit"></i>&nbsp| Recovered:</th>
														<td><?=$covid19->recovered?></td>
												</tr>
												<tr>
														<th><i class="fa fa-skull-crossbones"></i>&nbsp| Deaths:</th>
														<td><?=$covid19->deaths?></td>
												</tr>
												<tr>
														<th><i class="fa fa-clock"></i>&nbsp| LastUpdate:</th>
														<td><?=$covid19->critical?></td>
												</tr>
										</table>
								</div>
						</div>
						<div id="box_div">
								<div class="div_1">
										<img class="img" src="https://hytt.com/wp-content/uploads/2020/03/coronavirusInfographicforBlog.png">
										<hr>
										<h4>How to clean and disinfect</h4>
										<hr>
										<p>
												Clean Wear reusable or disposable gloves for routine cleaning and disinfection.
												Clean surfaces using soap and water, then use disinfectant.
												Cleaning with soap and water reduces number of germs, dirt and impurities on the surface. Disinfecting kills germs on surfaces.
												Practice routine cleaning of frequently touched surfaces.</p>
								</div>
								<div class="div_2">
										<img class="img" src="https://www.vre.org/vre/assets/Image/VRE-COVID-19.png">
										<hr>
										<h4>If You Are Sick or Caring for Someone</h4>
										<hr>
										<p>Stay home. Most people with COVID-19 have mild illness and can recover at home without medical care. Do not leave your home, except to get medical care. Do not visit public areas.
												Take care of yourself. Get rest and stay hydrated. Take over-the-counter medicines, such as acetaminophen, to help you feel better</p>
								</div>
								<div class="div_3">
										<img class="img" src="https://d2e70e9yced57e.cloudfront.net/wallethub/posts/73880/social-distancing-during-coronavirus-pandemic-survey.png">
										<hr>
										<h4>Social Distancing</h4>
										<hr>
										<p>In addition to everyday steps to prevent COVID-19, keeping space between you and others is
												one of the best tools we have to avoid being exposed to this virus and slowing its spread locally and across the country and world.Do not gather in groups.</p>
								</div>
						</div>
				</div>
		</form>
</div>

<style>
		#menu_div img{
				width:30px;
				height:20px;
		}
		#menu_div{
				margin-top:-40px;
		}
		.w_31{
				left:95%;
				width:5%;
				height:0px;
				font-size:70%;
				text-align:center;
				position: relative;
		}
		.w_32{
				left:90%;
				width:5%;
				height:0px;
				font-size:70%;
				text-align:center;
				position: relative;
		}
		.w_33{
				left:85%;
				width:5%;
				height:0px;
				font-size:70%;
				text-align:center;
				position: relative;
		}
		.w_34{
				left:80%;
				width:5%;
				height:60px;
				font-size:70%;
				text-align:center;
				position: relative;
		}
		.container-fluid{
				width:100%;
				height:100%;
				background-color:#C6DAECE8;
		}
		.form-inline{
				float:right;
				position:relative;
				top:-30px;
		}
		.myheader{
				width:100%;
				height:50px;
				background-color:#C6DAECE8}
		h4{
				margin-left:40%;
				top:10px;
				position:relative;
				
		}
		.nav-link{
				width:100%;
				height:50px;
				text-align: left;
				font-size:large;
				background-color: #c9746a;}
		a{
				margin:20px;
				color:black;}
		button{
				color: red;
				left:100px;!important}
		}
		.boxlabel{
				text-align:center;}
		.img{
				width:100%;
				height:200px;
		}
		.div_1{
				top:10px;
				width:33.3%;
				float:left;
				height:400px;
				position:absolute;
				text-align:center;
				padding:10px 10px;
		}
		.div_2{
				top:10px;
				left:33.3%;
				width:33.3%;
				height:400px;
				text-align:center;
				padding:10px 10px;
				position:absolute;
		}
		.div_3{
				top:10px;
				left:66.6%;
				width:33.3%;
				height:400px;
				text-align:center;
				padding:10px 10px;
				position:absolute;
		}
		#box_div{
				width:100%;
				height:500px;
				position:relative;
				top:400px;
		}
		td, th{
				border-bottom:1px solid #555;
		}
		#box-3{
				text-align: center;
				margin:20px 50px;
		}
		#box-2{
				text-align: center;
		}
		td:last-child input{
				width:100%;
				height:50px;
				text-align:center;
				border:1px solid white;
		}
		td:first-child{
				width:50%;
				height:50px;
				text-align:right;
				background-color:white;
		}
		#box_num1{
				width:50%;
				float:left;
				height:500px;
				margin:20px 0;
				padding:10px 10px;
		}
		#box_num2{
				width:50%;
				float:right;
				height:500px;
				margin:20px 0;
				text-align:center;
				padding:10px 10px;
		}
		#div_ip{
				width:100%;
				height:400px;
		}
</style>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
