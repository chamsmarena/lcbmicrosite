<?php

	
    // set the global vars
    $uri = "https://api.hpc.tools/v1/public/";
	
	// set the planids for each country's HRP
	$thecountry = array(
		'Niger' => array('530','niger'),
		'Nigeria' => array('536','nigeria'),
		'Cameroon' => array('537','cameroon'),
		'Chad' => array('532','chad')
	);
	
	// authorize API and return results
	function getFTSdata($endpoint) {
		
	
		// $fts_username = "ocha_dakar";
		// $fts_password = "thnm456Ujm";
		$fts_username = "ocha_viu";
		$fts_password = "nbgt876Sxc";
	
		// curl init	
		$ch = curl_init();
		
		//curl opts
		curl_setopt ($ch, CURLOPT_CAINFO, dirname(__FILE__)."/cacert-2017-09-20.pem");
		curl_setopt($ch, CURLOPT_URL,$endpoint);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_USERPWD, "$fts_username:$fts_password");
		
		//process results
		$result = curl_exec($ch);
		

		
		if($result === false)
		{
			echo 'Erreur Curl : ' . curl_error($ch);
			$result = null;
		}
		else
		{
			$result = json_decode($result);
			
		}
		curl_close($ch);
	
		//return results
		return $result;
	} //end getFTSdata
	
	// get plans by country and sort by cluster
	function getPlansbyCountry($country) {
		global $uri, $thecountry;
		$plan_id = $thecountry[$country][0];
		$endpoint = $uri . "fts/flow?planid=" . $plan_id . "&year=2017&groupby=Cluster";	
		return getFTSdata($endpoint);
	}	
	
	function getFundingsbyCountry($country) {
		global $uri, $thecountry;
		$plan_id = $thecountry[$country][0];
		$endpoint = $uri . "fts/flow?planid=" . $plan_id . "&year=2017&groupby=Cluster";	
		return getFTSdata($endpoint);
	}	
	
	function getRequirementsbyCountry($country) {
		global $uri, $thecountry;
		$plan_id = $thecountry[$country][0];
		$endpoint = $uri . "plan/id/" . $plan_id;	
		return getFTSdata($endpoint);
	}
	
	// get current funding by country
	function getImmediateFunding($country) {
		
		$data = getPlansbyCountry($country);
		if($data==null){
			$total=1;
		}else{
			$total = $data->data->report3->fundingTotals->total;
		}
		
		return $total;
	}
	
	// get all immediate requirements total
	function getImmediateRequirements($country) {
        $data = getRequirementsbyCountry($country);
		if($data==null){
			$total=1;
		}else{
			// $total = $data->data->requirements->totalRevisedReqs;
			$total = $data->data->revisedRequirements;
		}
		
		return $total;
	}
	
	// format numbers for display;
	function formatNumber($n) {
        $n = (0+str_replace(",", "", $n));

        if (!is_numeric($n)) return false;

        if ($n > 1000000000) return '<span class=decimal-figure>' . round(($n / 1000000000), 1) . 'B</span>';
        elseif ($n > 1000000) return '<span class=decimal-figure>' . round(($n / 1000000), 0) . 'M</span>';
        elseif ($n > 1000) return '<span  class=decimal-figure>' . round(($n / 1000), 0) . 'K</span>';

        return number_format($n);
    }
	
?>