<?php
// Your Tropicos API key
$api_key = 'YOUR_API_KEY';

// API endpoint URL
$api_url = "http://services.tropicos.org/api/search";

// Parameters for searching medicinal plants
$params = array(
    'name' => 'medicinal plant', // Search for plants with "medicinal plant" in their name
    'apikey' => $api_key,
    // Add more parameters as needed, such as 'format' for specifying the response format, 'start' for pagination, etc.
);

// Construct the URL with query parameters
$query_url = $api_url . '?' . http_build_query($params);

// Initialize cURL session
$curl = curl_init();

// Set cURL options
curl_setopt_array($curl, array(
    CURLOPT_URL => $query_url,
    CURLOPT_RETURNTRANSFER => true,
));

// Execute the request and fetch the response
$response = curl_exec($curl);

// Check for cURL errors
if (curl_errno($curl)) {
    $error_message = curl_error($curl);
    // Handle error
    echo "Error: $error_message";
    // Close cURL session
    curl_close($curl);
    exit;
}

// Close cURL session
curl_close($curl);

// Process the JSON response
$data = json_decode($response, true);
