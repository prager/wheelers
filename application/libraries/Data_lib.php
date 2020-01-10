<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Data_lib {

	/**
	 * Get all the states
	 *
	 * @return array array of states
	 *
	 */
	public function get_states_array() {
		$states = array(
				"AL" => "Alabama",
				"AK" => "Alaska",
				"AZ" => "Arizona",
				"AR" => "Arkansas",
				"CA" => "California",
				"CO" => "Colorado",
				"CT" => "Connecticut",
				"DE" => "Delaware",
				"FL" => "Florida",
				"GA" => "Georgia",
				"HI" => "Hawaii",
				"ID" => "Idaho",
				"IL" => "Illinois",
				"IN" => "Indiana",
				"IA" => "Iowa",
				"KS" => "Kansas",
				"KY" => "Kentucky",
				"LA" => "Louisiana",
				"ME" => "Maine",
				"MD" => "Maryland",
				"MA" => "Massachusetts",
				"MI" => "Michigan",
				"MN" => "Minnesota",
				"MS" => "Mississippi",
				"MO" => "Missouri",
				"MT" => "Montana",
				"NE" => "Nebraska",
				"NV" => "Nevada",
				"NH" => "New Hampshire",
				"NJ" => "New Jersey",
				"NM" => "New Mexico",
				"NY" => "New York",
				"NC" => "North Carolina",
				"ND" => "North Dakota",
				"OH" => "Ohio",
				"OK" => "Oklahoma",
				"OR" => "Oregon",
				"PA" => "Pennsylvania",
				"RI" => "Rhode Island",
				"SC" => "South Carolina",
				"SD" => "South Dakota",
				"TN" => "Tennessee",
				"TX" => "Texas",
				"UT" => "Utah",
				"VT" => "Vermont",
				"VA" => "Virginia",
				"WA" => "Washington",
				"WV" => "West Virginia",
				"WI" => "Wisconsin",
				"WY" => "Wyoming",
				"AS" => "American Samoa",
				"DC" => "District of Columbia",
				"FM" => "Federated States of Micronesia",
				"GU" => "Guam",
				"MH" => "Marshall Islands",
				"MP" => "Northern Mariana Islands",
				"PW" => "Palau",
				"PR" => "Puerto Rico",
				"VI" => "Virgin Islands"
		);

		return $states;
	}
	
	public function get_acc_types() {
	    $types = array(
	        '1' => 'Site Admin',
	        '2' => 'Editor',
	        '3' => 'Blogger',
	        '4' => 'Blog Editor',
	        '5' => 'Forum Editor',
	        '6' => 'Forum User',
	        '7' => 'Guest'
	    );
	    
	    return $types;
	}
}