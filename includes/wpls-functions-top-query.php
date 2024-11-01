<?php

if ( ! defined('ABSPATH')) exit; // if direct access 






// Display url_term start
	function wpls_TopPageTerms($url_term)
		{	
			global $wpdb;
			$table = $wpdb->prefix . "wpls";
			$result = $wpdb->get_results("SELECT $url_term FROM $table GROUP BY $url_term ORDER BY COUNT($url_term) DESC LIMIT 10", ARRAY_A);
			$total_rows = $wpdb->num_rows;

			if($url_term=="url_term")
				{
					$count_url_term = $wpdb->get_results("SELECT url_term, COUNT(*) AS url_term FROM $table GROUP BY url_term ORDER BY COUNT(url_term) DESC LIMIT 10", ARRAY_A);
				}

					$top_url_term ="";
					$i=0;
					while($total_rows>$i)
						{	
							if($result[$i][$url_term]=="none" || $result[$i][$url_term]=="direct" || $result[$i][$url_term]==NULL || $result[$i][$url_term]==""  )
								{
					
								}
							else
								{
					
								
								if($url_term=="url_term")
									{
										$top_url_term.= "['".$result[$i][$url_term]."(".$count_url_term[$i]['url_term'].")',";
										$top_url_term.= 	$count_url_term[$i]['url_term'];
									}
								$top_url_term.= "],";
					
								}
							
							$i++;
						}
				return $top_url_term;

		}











// Display userid start
	function wpls_TopUser($userid)
		{	
			global $wpdb;
			$table = $wpdb->prefix . "wpls";
			$result = $wpdb->get_results("SELECT $userid FROM $table GROUP BY $userid ORDER BY COUNT($userid) DESC LIMIT 10", ARRAY_A);
			$total_rows = $wpdb->num_rows;

			if($userid=="userid")
				{
					$count_userid = $wpdb->get_results("SELECT userid, COUNT(*) AS userid FROM $table GROUP BY userid ORDER BY COUNT(userid) DESC LIMIT 10", ARRAY_A);
				}

					$top_userid ="";
					$i=0;
					while($total_rows>$i)
						{	
							if($result[$i][$userid]=="guest" || $result[$i][$userid]==NULL || $result[$i][$userid]==""  )
								{
					
								}
							else
								{
					
								
								if($userid=="userid")
									{
										$top_userid.= "['".$result[$i][$userid]."(".$count_userid[$i]['userid'].")',";
										$top_userid.= 	$count_userid[$i]['userid'];
									}
								$top_userid.= "],";
					
								}
							
							$i++;
						}
				return $top_userid;

		}









// Display url_id start
	function wpls_TopPages($url_id)
		{	
			global $wpdb;
			$table = $wpdb->prefix . "wpls";
			$result = $wpdb->get_results("SELECT $url_id FROM $table GROUP BY $url_id ORDER BY COUNT($url_id) DESC LIMIT 10", ARRAY_A);
			$total_rows = $wpdb->num_rows;

			if($url_id=="url_id")
				{
					$count_url_id = $wpdb->get_results("SELECT url_id, COUNT(*) AS url_id FROM $table GROUP BY url_id ORDER BY COUNT(url_id) DESC LIMIT 10", ARRAY_A);
				}

					$top_url_id ="";
					$top_url_id .='<table class="para-data-table">';
					$top_url_id .='<tr><th style="width:80%">Link</th><th>Count</th></tr>';

					$i=0;
					while($total_rows>$i)
						{	
							if($result[$i][$url_id]=="unknown" || $result[$i][$url_id]==NULL || $result[$i][$url_id]==""  )
								{
					
								}
							else
								{
									$top_url_id .="<tr>";
									
									if( is_numeric($result[$i][$url_id]))
										{
											$page_url = get_permalink($result[$i][$url_id]);
										}
									else
										{
											$page_url = $result[$i][$url_id];
										}
									$top_url_id .='<td><a href="'.$page_url.'">'.substr($page_url, 0, 40).'</a>';
									$top_url_id .="</td>";
									
									$top_url_id .="<td>".$count_url_id[$i]['url_id'];
									$top_url_id .="</td>";


									$top_url_id .="</tr>";
					
								}
							
							$i++;
						}
						
						$top_url_id .="</table>";
						
						
				return $top_url_id;

		}









// Display referer_doamin start
	function wpls_TopReferers($referer_doamin)
		{	
			global $wpdb;
			$table = $wpdb->prefix . "wpls";
			$result = $wpdb->get_results("SELECT $referer_doamin FROM $table GROUP BY $referer_doamin ORDER BY COUNT($referer_doamin) DESC LIMIT 10", ARRAY_A);
			$total_rows = $wpdb->num_rows;

			if($referer_doamin=="referer_doamin")
				{
					$count_referer_doamin = $wpdb->get_results("SELECT referer_doamin, COUNT(*) AS referer_doamin FROM $table GROUP BY referer_doamin ORDER BY COUNT(referer_doamin) DESC LIMIT 10", ARRAY_A);
				}

					$top_referer_doamin ="";
					$i=0;
					while($total_rows>$i)
						{	
							if($result[$i][$referer_doamin]=="none" || $result[$i][$referer_doamin]=="direct" || $result[$i][$referer_doamin]==NULL || $result[$i][$referer_doamin]==""  )
								{
					
								}
							else
								{
					
								
								if($referer_doamin=="referer_doamin")
									{
										$top_referer_doamin.= "['".$result[$i][$referer_doamin]."(".$count_referer_doamin[$i]['referer_doamin'].")',";
										$top_referer_doamin.= 	$count_referer_doamin[$i]['referer_doamin'];
									}
								$top_referer_doamin.= "],";
					
								}
							
							$i++;
						}
				return $top_referer_doamin;

		}











// Display city start
	function wpls_TopCities($city)
		{	
			global $wpdb;
			$table = $wpdb->prefix . "wpls";
			$result = $wpdb->get_results("SELECT $city FROM $table GROUP BY $city ORDER BY COUNT($city) DESC LIMIT 10", ARRAY_A);
			$total_rows = $wpdb->num_rows;

			if($city=="city")
				{
					$count_city = $wpdb->get_results("SELECT city, COUNT(*) AS city FROM $table GROUP BY city ORDER BY COUNT(city) DESC LIMIT 10", ARRAY_A);
				}

					$top_city ="";
					$i=0;
					while($total_rows>$i)
						{	
							if($result[$i][$city]=="unknown" || $result[$i][$city]==NULL || $result[$i][$city]==""  )
								{
					
								}
							else
								{
					
								
								if($city=="city")
									{
										$top_city.= "['".$result[$i][$city]."(".$count_city[$i]['city'].")',";
										$top_city.= 	$count_city[$i]['city'];
									}
								$top_city.= "],";
					
								}
							
							$i++;
						}
						
						
				return $top_city;

		}







// Display countryName start
	function wpls_TopCountries($countryName)
		{	
			global $wpdb;
			$table = $wpdb->prefix . "wpls";
			$result = $wpdb->get_results("SELECT $countryName FROM $table GROUP BY $countryName ORDER BY COUNT($countryName) DESC LIMIT 10", ARRAY_A);
			$total_rows = $wpdb->num_rows;

			if($countryName=="countryName")
				{
					$count_countryName = $wpdb->get_results("SELECT countryName, COUNT(*) AS countryName FROM $table GROUP BY countryName ORDER BY COUNT(countryName) DESC LIMIT 10", ARRAY_A);
				}

					$top_countryName ="";
					$i=0;
					while($total_rows>$i)
						{	
							if($result[$i][$countryName]=="unknown" || $result[$i][$countryName]==NULL || $result[$i][$countryName]==""  )
								{
					
								}
							else
								{
					
								
								if($countryName=="countryName")
									{
										$top_countryName.= "['".$result[$i][$countryName]."(".$count_countryName[$i]['countryName'].")',";
										$top_countryName.= 	$count_countryName[$i]['countryName'];
									}
								$top_countryName.= "],";
					
								}
							
							$i++;
						}
				return $top_countryName;

		}





// Display screensize start
	function wpls_TopScreenSize($screensize)
		{	
			global $wpdb;
			$table = $wpdb->prefix . "wpls";
			$result = $wpdb->get_results("SELECT $screensize FROM $table GROUP BY $screensize ORDER BY COUNT($screensize) DESC LIMIT 10", ARRAY_A);
			$total_rows = $wpdb->num_rows;

			if($screensize=="screensize")
				{
					$count_screensize = $wpdb->get_results("SELECT screensize, COUNT(*) AS screensize FROM $table GROUP BY screensize ORDER BY COUNT(screensize) DESC LIMIT 10", ARRAY_A);
				}

					$top_screensize ="";
					$i=0;
					while($total_rows>$i)
						{	
							if($result[$i][$screensize]=="unknown" || $result[$i][$screensize]==NULL || $result[$i][$screensize]==""  )
								{
					
								}
							else
								{
					
								
								if($screensize=="screensize")
									{
										$top_screensize.= "['".$result[$i][$screensize]."(".$count_screensize[$i]['screensize'].")',";
										$top_screensize.= 	$count_screensize[$i]['screensize'];
									}
								$top_screensize.= "],";
					
								}
							
							$i++;
						}
				return $top_screensize;

		}

	//screensize







		
	// Display Browser start
	function wpls_TopBrowsers($browser)
		{
			global $wpdb;
			$table = $wpdb->prefix . "wpls";
			$result = $wpdb->get_results("SELECT $browser FROM $table GROUP BY $browser ORDER BY COUNT($browser) DESC LIMIT 10", ARRAY_A);
			$total_rows = $wpdb->num_rows;

			if($browser=="browser")
				{
					$count_browser = $wpdb->get_results("SELECT browser, COUNT(*) AS browser FROM $table GROUP BY browser ORDER BY COUNT(browser) DESC LIMIT 20", ARRAY_A);
				}

			$top_browser ="";



			$i=0;

			while($total_rows>$i)
				{	
					if($result[$i][$browser]=="unknown" || $result[$i][$browser]==NULL || $result[$i][$browser]==""  )
						{

						}
					else
						{
							


							if($browser=="browser")
								{	
									$top_browser.= "['".$result[$i][$browser]."(".$count_browser[$i]['browser'].")',";
									$top_browser.= 	$count_browser[$i]['browser'];
								}
							$top_browser.= "],";

						}
		
					$i++;
				}
			return $top_browser;


		}


	// trace Browser







//query top operating system(Platform)
	function wpls_TopOS($platform){

        $platform=="platform";

        global $wpdb;
        $table = $wpdb->prefix . "wpls";
        $result = $wpdb->get_results("SELECT $platform FROM $table GROUP BY $platform ORDER BY COUNT($platform) DESC LIMIT 20", ARRAY_A);
        $total_rows = $wpdb->num_rows;

        $count_platform = $wpdb->get_results("SELECT platform, COUNT(*) AS platform FROM $table GROUP BY platform ORDER BY COUNT(platform) DESC LIMIT 10", ARRAY_A);

        $top_platform ="";

        $i=0;

        while($total_rows>$i){

            $platform_os = isset($result[$i][$platform]) ? $result[$i][$platform] : '';
            $platform_total = isset($count_platform[$i]['platform']) ? $count_platform[$i]['platform'] : '';

            $top_platform.= "['".$platform_os."(".$platform_total.")',".$platform_total."],";


        $i++;
        }
        
		return $top_platform;
	}





function wpls_top_os(){

    $response = array();

    $platform ="platform";

    global $wpdb;
    $table = $wpdb->prefix . "wpls";
    $result = $wpdb->get_results("SELECT $platform FROM $table GROUP BY $platform ORDER BY COUNT($platform) DESC LIMIT 20", ARRAY_A);
    $total_rows = $wpdb->num_rows;

    $count_platform = $wpdb->get_results("SELECT platform, COUNT(*) AS platform FROM $table GROUP BY platform ORDER BY COUNT(platform) DESC LIMIT 10", ARRAY_A);

    $top_platform ="";

    $i=0;

    $label = array();
    $count = array();

    while($total_rows>$i){

        if($i > 9) break;

        $platform_os = isset($result[$i][$platform]) ? $result[$i][$platform] : '';
        $platform_total = isset($count_platform[$i]['platform']) ? $count_platform[$i]['platform'] : '';

        $top_platform.= "['".$platform_os."(".$platform_total.")',".$platform_total."],";

        $label[] = $platform_os;
        $count[] = $platform_total;


        $i++;
    }

    $response['labels'] = $label;
    $response['data'] = $count;


    return json_encode($response);
}


function wpls_top_browsers(){

    $response = array();

    $platform ="browser";

    global $wpdb;
    $table = $wpdb->prefix . "wpls";
    $result = $wpdb->get_results("SELECT $platform FROM $table GROUP BY $platform ORDER BY COUNT($platform) DESC LIMIT 20", ARRAY_A);
    $total_rows = $wpdb->num_rows;

    $count_platform = $wpdb->get_results("SELECT browser, COUNT(*) AS browser FROM $table GROUP BY browser ORDER BY COUNT(browser) DESC LIMIT 10", ARRAY_A);

    $top_platform ="";

    $i=0;

    $label = array();
    $count = array();

    while($total_rows>$i){
        if($i > 9) break;
        $platform_os = isset($result[$i][$platform]) ? $result[$i][$platform] : '';
        $platform_total = isset($count_platform[$i]['browser']) ? $count_platform[$i]['browser'] : '';

        $top_platform.= "['".$platform_os."(".$platform_total.")',".$platform_total."],";

        $label[] = $platform_os;
        $count[] = $platform_total;


        $i++;
    }

    $response['labels'] = $label;
    $response['data'] = $count;


    return json_encode($response);
}


function wpls_top_screensize(){

    $response = array();

    $platform ="screensize";

    global $wpdb;
    $table = $wpdb->prefix . "wpls";
    $result = $wpdb->get_results("SELECT $platform FROM $table GROUP BY $platform ORDER BY COUNT($platform) DESC LIMIT 20", ARRAY_A);
    $total_rows = $wpdb->num_rows;

    $count_platform = $wpdb->get_results("SELECT screensize, COUNT(*) AS screensize FROM $table GROUP BY screensize ORDER BY COUNT(screensize) DESC LIMIT 10", ARRAY_A);

    $top_platform ="";

    $i=0;

    $label = array();
    $count = array();

    while($total_rows>$i){
        if($i > 9) break;
        $platform_os = isset($result[$i][$platform]) ? $result[$i][$platform] : '';
        $platform_total = isset($count_platform[$i]['screensize']) ? $count_platform[$i]['screensize'] : '';

        $top_platform.= "['".$platform_os."(".$platform_total.")',".$platform_total."],";

        $label[] = $platform_os;
        $count[] = $platform_total;


        $i++;
    }

    $response['labels'] = $label;
    $response['data'] = $count;


    return json_encode($response);
}




function wpls_top_countries(){

    $response = array();

    $platform ="countryName";

    global $wpdb;
    $table = $wpdb->prefix . "wpls";
    $result = $wpdb->get_results("SELECT $platform FROM $table GROUP BY $platform ORDER BY COUNT($platform) DESC LIMIT 20", ARRAY_A);
    $total_rows = $wpdb->num_rows;

    $count_platform = $wpdb->get_results("SELECT countryName, COUNT(*) AS countryName FROM $table GROUP BY countryName ORDER BY COUNT(countryName) DESC LIMIT 10", ARRAY_A);

    $top_platform ="";

    $i=0;

    $label = array();
    $count = array();

    while($total_rows>$i){
        if($i > 9) break;
        $platform_os = isset($result[$i][$platform]) ? $result[$i][$platform] : '';
        $platform_total = isset($count_platform[$i]['countryName']) ? $count_platform[$i]['countryName'] : '';

        $top_platform.= "['".$platform_os."(".$platform_total.")',".$platform_total."],";

        $label[] = $platform_os;
        $count[] = $platform_total;


        $i++;
    }

    $response['labels'] = $label;
    $response['data'] = $count;


    return json_encode($response);
}



function wpls_top_cities(){

    $response = array();

    $platform ="city";

    global $wpdb;
    $table = $wpdb->prefix . "wpls";
    $result = $wpdb->get_results("SELECT $platform FROM $table GROUP BY $platform ORDER BY COUNT($platform) DESC LIMIT 20", ARRAY_A);
    $total_rows = $wpdb->num_rows;

    $count_platform = $wpdb->get_results("SELECT city, COUNT(*) AS city FROM $table GROUP BY city ORDER BY COUNT(city) DESC LIMIT 10", ARRAY_A);

    $top_platform ="";

    $i=0;

    $label = array();
    $count = array();

    while($total_rows>$i){
        if($i > 9) break;
        $platform_os = isset($result[$i][$platform]) ? $result[$i][$platform] : '';
        $platform_total = isset($count_platform[$i]['city']) ? $count_platform[$i]['city'] : '';

        $top_platform.= "['".$platform_os."(".$platform_total.")',".$platform_total."],";

        $label[] = $platform_os;
        $count[] = $platform_total;


        $i++;
    }

    $response['labels'] = $label;
    $response['data'] = $count;


    return json_encode($response);
}

function wpls_top_referrer_doamins(){

    $response = array();

    $platform ="referer_doamin";

    global $wpdb;
    $table = $wpdb->prefix . "wpls";
    $result = $wpdb->get_results("SELECT $platform FROM $table GROUP BY $platform ORDER BY COUNT($platform) DESC LIMIT 20", ARRAY_A);
    $total_rows = $wpdb->num_rows;

    $count_platform = $wpdb->get_results("SELECT referer_doamin, COUNT(*) AS referer_doamin FROM $table GROUP BY referer_doamin ORDER BY COUNT(referer_doamin) DESC LIMIT 10", ARRAY_A);

    $top_platform ="";

    $i=0;

    $label = array();
    $count = array();

    while($total_rows>$i){
        if($i > 9) break;
        $platform_os = isset($result[$i][$platform]) ? $result[$i][$platform] : '';
        $platform_total = isset($count_platform[$i]['referer_doamin']) ? $count_platform[$i]['referer_doamin'] : '';

        $top_platform.= "['".$platform_os."(".$platform_total.")',".$platform_total."],";

        $label[] = $platform_os;
        $count[] = $platform_total;


        $i++;
    }

    $response['labels'] = $label;
    $response['data'] = $count;


    return json_encode($response);
}

function wpls_top_url_ids(){

    $response = array();

    $platform ="url_id";

    global $wpdb;
    $table = $wpdb->prefix . "wpls";
    $result = $wpdb->get_results("SELECT $platform FROM $table GROUP BY $platform ORDER BY COUNT($platform) DESC LIMIT 20", ARRAY_A);
    $total_rows = $wpdb->num_rows;

    $count_platform = $wpdb->get_results("SELECT url_id, COUNT(*) AS url_id FROM $table GROUP BY url_id ORDER BY COUNT(url_id) DESC LIMIT 10", ARRAY_A);

    $top_platform ="";

    $i=0;

    $label = array();
    $count = array();

    while($total_rows>$i){

        if($i > 9) break;

        $platform_os = isset($result[$i][$platform]) ? $result[$i][$platform] : '';
        $platform_total = isset($count_platform[$i]['url_id']) ? $count_platform[$i]['url_id'] : '';

        $top_platform.= "['".$platform_os."(".$platform_total.")',".$platform_total."],";

        $label[] = $platform_os;
        $count[] = $platform_total;


        $i++;
    }

    $response['labels'] = $label;
    $response['data'] = $count;


    return json_encode($response);
}

function wpls_top_userids(){

    $response = array();

    $platform ="userid";

    global $wpdb;
    $table = $wpdb->prefix . "wpls";
    $result = $wpdb->get_results("SELECT $platform FROM $table GROUP BY $platform ORDER BY COUNT($platform) DESC LIMIT 20", ARRAY_A);
    $total_rows = $wpdb->num_rows;

    $count_platform = $wpdb->get_results("SELECT userid, COUNT(*) AS userid FROM $table GROUP BY userid ORDER BY COUNT(userid) DESC LIMIT 10", ARRAY_A);

    $top_platform ="";

    $i=0;

    $label = array();
    $count = array();

    while($total_rows>$i){

        if($i > 9) break;

        $platform_os = isset($result[$i][$platform]) ? $result[$i][$platform] : '';
        $platform_total = isset($count_platform[$i]['userid']) ? $count_platform[$i]['userid'] : '';

        $platform_total = !empty($platform_total) ? $platform_total : 0;

        $user = get_user_by( 'id', $platform_os );
        $platform_os = isset($user->user_login) ? $user->user_login : 'Guest';


        $top_platform.= "['".$platform_os."(".$platform_total.")',".$platform_total."],";

        $label[] = $platform_os;
        $count[] = $platform_total;


        $i++;
    }

    $response['labels'] = $label;
    $response['data'] = $count;


    return json_encode($response);
}

function wpls_top_url_terms(){

    $response = array();

    $platform ="url_term";

    global $wpdb;
    $table = $wpdb->prefix . "wpls";
    $result = $wpdb->get_results("SELECT $platform FROM $table GROUP BY $platform ORDER BY COUNT($platform) DESC LIMIT 20", ARRAY_A);
    $total_rows = $wpdb->num_rows;

    $count_platform = $wpdb->get_results("SELECT url_term, COUNT(*) AS url_term FROM $table GROUP BY url_term ORDER BY COUNT(url_term) DESC LIMIT 10", ARRAY_A);

    $top_platform ="";

    $i=0;

    $label = array();
    $count = array();

    while($total_rows>$i){
        if($i > 9) break;
        $platform_os = isset($result[$i][$platform]) ? $result[$i][$platform] : '';
        $platform_total = isset($count_platform[$i]['url_term']) ? $count_platform[$i]['url_term'] : '';

        $top_platform.= "['".$platform_os."(".$platform_total.")',".$platform_total."],";

        $label[] = $platform_os;
        $count[] = $platform_total;


        $i++;
    }

    $response['labels'] = $label;
    $response['data'] = $count;


    return json_encode($response);
}





function wpls_page_visit(){

    $response = array();

    $platform ="wpls_date";

    global $wpdb;
    $table = $wpdb->prefix . "wpls";
    $result = $wpdb->get_results("SELECT $platform FROM $table GROUP BY $platform ORDER BY COUNT($platform) DESC LIMIT 20", ARRAY_A);
    $total_rows = $wpdb->num_rows;

    $count_platform = $wpdb->get_results("SELECT wpls_date, COUNT(*) AS wpls_date FROM $table GROUP BY wpls_date ORDER BY COUNT(wpls_date) DESC LIMIT 10", ARRAY_A);

    $top_platform ="";

    $i=0;

    $label = array();
    $count = array();

    while($total_rows>$i){

        $platform_os = isset($result[$i][$platform]) ? $result[$i][$platform] : '';
        $platform_total = isset($count_platform[$i]['wpls_date']) ? $count_platform[$i]['wpls_date'] : '';

        $top_platform.= "['".$platform_os."(".$platform_total.")',".$platform_total."],";

        $label[] = $platform_os;
        $count[] = $platform_total;


        $i++;
    }

    $response['labels'] = $label;
    $response['data'] = $count;


    return json_encode($response);
}





function wpls_view_count_by_date($date){

    $response = array();

    global $wpdb;
    $table = $wpdb->prefix . "wpls";
    $result = $wpdb->get_results("SELECT * FROM $table WHERE wpls_date='$date'", ARRAY_A);
    $count = $wpdb->num_rows;



    return $count;
}







