<?php

class ApiClient
{
    private $api_url;

    public function __construct($api_url)
    {
        $this->api_url = $api_url;
    }

    public function fetchData($endpoint)
    {
        // Initialize cURL session
        $curl = curl_init();

        // Set cURL options
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $this->api_url . $endpoint,
                CURLOPT_RETURNTRANSFER => true,
            )
        );

        // Execute the request and fetch the response
        $response = curl_exec($curl);

        // Check for cURL errors
        if (curl_errno($curl)) {
            $error_message = curl_error($curl);
            // Handle error
            echo "Error: $error_message";
            // Close cURL session
            curl_close($curl);
            return false; // Return false on error
        }

        // Close cURL session
        curl_close($curl);

        // Process the response (assuming JSON format in this example)
        $data = json_decode($response, true); // Convert JSON string to associative array

        // Return the data
        return $data;
    }
}