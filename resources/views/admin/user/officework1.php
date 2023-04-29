$token= config('token');
			$curl = curl_init();

					$data = array('token'=>$token,
					);

			$endpoint_url = config('endpoint_project');
			curl_setopt_array($curl, array(
			CURLOPT_URL => $endpoint_url.'/api/agents_stats',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS =>  $data,
			CURLOPT_HTTPHEADER => array(
				'Cookie: laravel_session=gnq21xtzzbBtgOgSa0iVWPIX9vSDzHcKrUozAnSL'
			),
			));

			$response = curl_exec($curl);
// 			echo $response;
//             die();

			curl_close($curl);
			$agents_data = json_decode($response);
            $agents_data = 	$agents_data->agent_data;