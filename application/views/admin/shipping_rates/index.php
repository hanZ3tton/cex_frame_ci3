<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Create</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Invoice Manager</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<!--begin::Filter menu-->
										<div class="m-0">
											<!--begin::Menu toggle-->
											<a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-filter fs-6 text-muted me-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>Filter</a>
											<!--end::Menu toggle-->
											<!--begin::Menu 1-->
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_685c31f20ea7d">
												<!--begin::Header-->
												<div class="px-7 py-5">
													<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
												</div>
												<!--end::Header-->
												<!--begin::Menu separator-->
												<div class="separator border-gray-200"></div>
												<!--end::Menu separator-->
												<!--begin::Form-->
												<div class="px-7 py-5">
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Status:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<div>
															<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_685c31f20ea7d" data-allow-clear="true">
																<option></option>
																<option value="1">Approved</option>
																<option value="2">Pending</option>
																<option value="2">In Process</option>
																<option value="2">Rejected</option>
															</select>
														</div>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Member Type:</label>
														<!--end::Label-->
														<!--begin::Options-->
														<div class="d-flex">
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																<input class="form-check-input" type="checkbox" value="1" />
																<span class="form-check-label">Author</span>
															</label>
															<!--end::Options-->
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																<span class="form-check-label">Customer</span>
															</label>
															<!--end::Options-->
														</div>
														<!--end::Options-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Notifications:</label>
														<!--end::Label-->
														<!--begin::Switch-->
														<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
															<label class="form-check-label">Enabled</label>
														</div>
														<!--end::Switch-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="d-flex justify-content-end">
														<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
														<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Form-->
											</div>
											<!--end::Menu 1-->
										</div>
										<!--end::Filter menu-->
										<!--begin::Secondary button-->
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Layout-->
									<div class="d-flex flex-column flex-lg-row">
										<!--begin::Content-->
										<div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body p-12">
													<!--begin::Form-->
													<form action="" id="kt_invoice_form">
														<!--begin::Wrapper-->
														<div class="d-flex flex-stack flex-wrap gap-2 mb-5">
															<div class="d-flex align-items-center flex-equal me-4 order-1">
																<span class="fs-2x fw-bold text-gray-800">Shipping Rates</span>
															</div>
														</div>
														<!--end::Top-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-10"></div>
														<!--end::Separator-->
														<!--begin::Wrapper-->
														<div class="mb-0">
															<!--begin::Row-->
															<div class="row gx-10 mb-12">
																<div class="col-lg-6">
																	<label class="form-label fs-6 fw-bold text-gray-700 mb-3">Type Of Goods</label>
																	<div class="mb-5">
																		<select class="form-select form-select-solid" name="type_of_goods">
																			<option value="" disabled selected>Select Type</option>
																			<option value="documents">Non Garment</option>
																			<option value="electronics">Garment</option>
																			<option value="clothes">Extra Sensitive</option>
																			<option value="food">Electronic</option>
																		</select>
																	</div>
																</div>
																<div class="col-lg-6">
																	<label class="form-label fs-6 fw-bold text-gray-700 mb-3">Country Destination</label>
																	<div class="mb-5">
																		<select class="form-select form-select-solid" name="country_destination">
																			<option value="" disabled selected>Select Country</option>
																			<option value="United States">United States</option>
																			<option value="Afghanistan">Afghanistan</option>
																			<option value="Albania">Albania</option>
																			<option value="Algeria">Algeria</option>
																			<option value="American Samoa">American Samoa</option>
																			<option value="Andorra">Andorra</option>
																			<option value="Angola">Angola</option>
																			<option value="Anguilla">Anguilla</option>
																			<option value="Antartica">Antarctica</option>
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
																			<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
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
																			<option value="Cocos Islands">Cocos (Keeling) Islands</option>
																			<option value="Colombia">Colombia</option>
																			<option value="Comoros">Comoros</option>
																			<option value="Congo">Congo</option>
																			<option value="Congo">Congo, the Democratic Republic of the</option>
																			<option value="Cook Islands">Cook Islands</option>
																			<option value="Costa Rica">Costa Rica</option>
																			<option value="Cota D'Ivoire">Cote d'Ivoire</option>
																			<option value="Croatia">Croatia (Hrvatska)</option>
																			<option value="Cuba">Cuba</option>
																			<option value="Cyprus">Cyprus</option>
																			<option value="Czech Republic">Czech Republic</option>
																			<option value="Denmark">Denmark</option>
																			<option value="Djibouti">Djibouti</option>
																			<option value="Dominica">Dominica</option>
																			<option value="Dominican Republic">Dominican Republic</option>
																			<option value="East Timor">East Timor</option>
																			<option value="Ecuador">Ecuador</option>
																			<option value="Egypt">Egypt</option>
																			<option value="El Salvador">El Salvador</option>
																			<option value="Equatorial Guinea">Equatorial Guinea</option>
																			<option value="Eritrea">Eritrea</option>
																			<option value="Estonia">Estonia</option>
																			<option value="Ethiopia">Ethiopia</option>
																			<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
																			<option value="Faroe Islands">Faroe Islands</option>
																			<option value="Fiji">Fiji</option>
																			<option value="Finland">Finland</option>
																			<option value="France">France</option>
																			<option value="France Metropolitan">France, Metropolitan</option>
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
																			<option value="Guinea">Guinea</option>
																			<option value="Guinea-Bissau">Guinea-Bissau</option>
																			<option value="Guyana">Guyana</option>
																			<option value="Haiti">Haiti</option>
																			<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
																			<option value="Holy See">Holy See (Vatican City State)</option>
																			<option value="Honduras">Honduras</option>
																			<option value="Hong Kong">Hong Kong</option>
																			<option value="Hungary">Hungary</option>
																			<option value="Iceland">Iceland</option>
																			<option value="India">India</option>
																			<option value="Indonesia">Indonesia</option>
																			<option value="Iran">Iran (Islamic Republic of)</option>
																			<option value="Iraq">Iraq</option>
																			<option value="Ireland">Ireland</option>
																			<option value="Israel">Israel</option>
																			<option value="Italy">Italy</option>
																			<option value="Jamaica">Jamaica</option>
																			<option value="Japan">Japan</option>
																			<option value="Jordan">Jordan</option>
																			<option value="Kazakhstan">Kazakhstan</option>
																			<option value="Kenya">Kenya</option>
																			<option value="Kiribati">Kiribati</option>
																			<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
																			<option value="Korea">Korea, Republic of</option>
																			<option value="Kuwait">Kuwait</option>
																			<option value="Kyrgyzstan">Kyrgyzstan</option>
																			<option value="Lao">Lao People's Democratic Republic</option>
																			<option value="Latvia">Latvia</option>
																			<option value="Lebanon">Lebanon</option>
																			<option value="Lesotho">Lesotho</option>
																			<option value="Liberia">Liberia</option>
																			<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
																			<option value="Liechtenstein">Liechtenstein</option>
																			<option value="Lithuania">Lithuania</option>
																			<option value="Luxembourg">Luxembourg</option>
																			<option value="Macau">Macau</option>
																			<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
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
																			<option value="Micronesia">Micronesia, Federated States of</option>
																			<option value="Moldova">Moldova, Republic of</option>
																			<option value="Monaco">Monaco</option>
																			<option value="Mongolia">Mongolia</option>
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
																			<option value="Russia">Russian Federation</option>
																			<option value="Rwanda">Rwanda</option>
																			<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
																			<option value="Saint Lucia">Saint LUCIA</option>
																			<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
																			<option value="Samoa">Samoa</option>
																			<option value="San Marino">San Marino</option>
																			<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
																			<option value="Saudi Arabia">Saudi Arabia</option>
																			<option value="Senegal">Senegal</option>
																			<option value="Seychelles">Seychelles</option>
																			<option value="Sierra">Sierra Leone</option>
																			<option value="Singapore">Singapore</option>
																			<option value="Slovakia">Slovakia (Slovak Republic)</option>
																			<option value="Slovenia">Slovenia</option>
																			<option value="Solomon Islands">Solomon Islands</option>
																			<option value="Somalia">Somalia</option>
																			<option value="South Africa">South Africa</option>
																			<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
																			<option value="Span">Spain</option>
																			<option value="Sri Lanka">Sri Lanka</option>
																			<option value="St. Helena">St. Helena</option>
																			<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
																			<option value="Sudan">Sudan</option>
																			<option value="Suriname">Suriname</option>
																			<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
																			<option value="Swaziland">Swaziland</option>
																			<option value="Sweden">Sweden</option>
																			<option value="Switzerland">Switzerland</option>
																			<option value="Syria">Syrian Arab Republic</option>
																			<option value="Taiwan">Taiwan, Province of China</option>
																			<option value="Tajikistan">Tajikistan</option>
																			<option value="Tanzania">Tanzania, United Republic of</option>
																			<option value="Thailand">Thailand</option>
																			<option value="Togo">Togo</option>
																			<option value="Tokelau">Tokelau</option>
																			<option value="Tonga">Tonga</option>
																			<option value="Trinidad and Tobago">Trinidad and Tobago</option>
																			<option value="Tunisia">Tunisia</option>
																			<option value="Turkey">Turkey</option>
																			<option value="Turkmenistan">Turkmenistan</option>
																			<option value="Turks and Caicos">Turks and Caicos Islands</option>
																			<option value="Tuvalu">Tuvalu</option>
																			<option value="Uganda">Uganda</option>
																			<option value="Ukraine">Ukraine</option>
																			<option value="United Arab Emirates">United Arab Emirates</option>
																			<option value="United Kingdom">United Kingdom</option>
																			<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
																			<option value="Uruguay">Uruguay</option>
																			<option value="Uzbekistan">Uzbekistan</option>
																			<option value="Vanuatu">Vanuatu</option>
																			<option value="Venezuela">Venezuela</option>
																			<option value="Vietnam">Viet Nam</option>
																			<option value="Virgin Islands (British)">Virgin Islands (British)</option>
																			<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
																			<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
																			<option value="Western Sahara">Western Sahara</option>
																			<option value="Yemen">Yemen</option>
																			<option value="Serbia">Serbia</option>
																			<option value="Zambia">Zambia</option>
																			<option value="Zimbabwe">Zimbabwe</option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="table-responsive mb-10">
																<table class="table g-5 gs-0 mb-0 fw-bold text-gray-700" data-kt-element="items">
																	<thead>
																		<tr class="border-bottom fs-5 fw-bold text-gray-700">
																			<th class="min-w-100px">Weight (kg)</th>
																			<th class="min-w-100px">Length (cm)</th>
																			<th class="min-w-100px">Width (cm)</th>
																			<th class="min-w-100px">Height (cm)</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr class="border-bottom border-bottom-dashed" data-kt-element="item">
																			<td class="ps-0">
																				<input class="form-control form-control-solid" type="number" min="0.01" step="0.01" name="weight[]" placeholder="0.01" data-kt-element="weight" />
																			</td>
																			<td class="ps-0">
																				<input class="form-control form-control-solid" type="number" min="0.01" step="0.01" name="length[]" placeholder="0.01" data-kt-element="length" />
																			</td>
																			<td class="ps-0">
																				<input class="form-control form-control-solid" type="number" min="0.01" step="0.01" name="width[]" placeholder="0.01" data-kt-element="width" />
																			</td>
																			<td class="ps-0">
																				<input class="form-control form-control-solid" type="number" min="0.01" step="0.01" name="height[]" placeholder="0.01" data-kt-element="height" />
																			</td>
																			<td class="text-end">
																				<button type="submit" href="#" class="btn btn-primary w-100" id="kt_invoice_submit_button"> Calculate</button>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<!--end::Wrapper-->		
													</form>
													<!--end::Form-->
													
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
										</div>
										<!--end::Content-->
										<!--begin::Sidebar-->
										<div class="flex-lg-auto min-w-lg-300px">
											<div class="card" data-kt-sticky="true" data-kt-sticky-name="invoice" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', lg: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
												<div class="card-body p-10">
													<div class="mb-10 text-center">
														<label class="form-label fw-bold fs-2 text-gray-700">Total Price</label>
														<div class="fs-1 fw-bold text-gray-900 mt-2">
															$5.620.000
														</div>
													</div>
													<div class="separator separator-dashed mb-8"></div>

													<div class="mb-8">
														<div class="d-flex flex-stack mb-5">
															<span class="fw-bold fs-6 text-gray-700">Publish Total:</span>
															<span class="fw-bold fs-6 text-gray-900">4.420.000</span>
														</div>
														<div class="d-flex flex-stack mb-5">
															<span class="fw-bold fs-6 text-gray-700">Agent Cost:</span>
															<span class="fw-bold fs-6 text-gray-900">1.200.000</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end::Sidebar-->
									</div>
									<!--end::Layout-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<!--end::Footer-->
					</div>