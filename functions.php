<?php
    // set the global vars
    $uri = "http://api.hpc.tools/v1/public/";
	
	// set the planids for each country's HRP
	$thecountry = array(
		'Niger' => array('530','niger'),
		'Nigeria' => array('536','nigeria'),
		'Cameroon' => array('537','cameroon'),
		'Chad' => array('532','chad'),
	);
	
	// authorize API and return results
	function getFTSdata($endpoint) {
		$fts_username = "ocha_viu";
		$fts_password = "nbgt876Sxc";
	
		//curl init	
		$ch = curl_init();
		
		//curl opts
		curl_setopt($ch, CURLOPT_URL,$endpoint);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_USERPWD, "$fts_username:$fts_password");
		
		//process results
		$result = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($result);
	
		//return results
		return $result;
	} //end getFTSdata
	
	// get plans by country and sort by cluster
	function getPlansbyCountry($country) {
		global $uri, $thecountry;
		$plan_id = $thecountry[$country][0];
		$endpoint = $uri . "fts/flow?planid=" . $plan_id . "&groupby=Cluster";	
		return getFTSdata($endpoint);
	}	
	
	// get current funding by country
	function getImmediateFunding($country) {
		$data = getPlansbyCountry($country);
		$total = $data->data->report3->fundingTotals->total;
		return $total;
	}
	
	// get all immediate requirements total
	function getImmediateRequirements($country) {
        $data = getPlansbyCountry($country);
		$total = $data->data->requirements->totalRevisedReqs;
		return $total;
	}
	
	// format numbers for display;
	function formatNumber($n) {
        $n = (0+str_replace(",", "", $n));

        if (!is_numeric($n)) return false;

        if ($n > 1000000000) return '<span class=decimal-figure>' . round(($n / 1000000000), 1) . '</span>';
        elseif ($n > 1000000) return '<span class=decimal-figure>' . round(($n / 1000000000), 1) . '</span>';
        elseif ($n > 1000) return '<span  class=decimal-figure>' . round(($n / 1000000000), 1) . '</span>';

        return number_format($n);
    }
	
?>