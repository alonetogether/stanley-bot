<?php
// config.php

// only for debugging
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
//ini_set('display_errors', 1);


// set local timezone
date_default_timezone_set('America/New_York');

// General
$projectName="STANLEY";
$projectEmail="stanley@ideo.com";
$projectPhoneNumber="YOUR PHONE NUMBER";


// Twilio API credentials
$accountSid = "ACb6207eb609d9004ff6898c42484b66dc";
$authToken = "36d94a4321ca8b2f0b38a77b8a2b469e"; //
$twilioPhoneNumber = "+14695139969";
$siteURL="https://stanley-bot.herokuapp.com/";


// Slack Webhook integration
$slackWebHookURL="https://hooks.slack.com/services/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";
$slackRoom = "private";
$slackBotName = "Shitty Text Man"; //THE NAME OF YOUR BOT
$slackBotIcon = ":robot_face:"; // THE PROFILE IMAGE OF YOUR BOT example :money_mouth_face: or :shit:


// Database Stuff
$dbHost = "us-cdbr-iron-east-04.cleardb.net";
$dbName = "heroku_53a250df5e445ac";
$dbUserName = "b8b4775f003473";
$dbPassword = "75e8e336";
$dbTable = "yomum";

$dbConnection = mysqli_connect($dbHost, $dbUserName, $dbPassword,$dbName);
mysqli_error($dbConnection);


// Responses setup (when you need an automated response to users - i.e. when the team is away or the session is over)
$automatedResponseOver="n"; // options: y | n 
$automatedResponseTeamSleeping ="n"; // options: y | n 
$automatedResponseTimeStart = "Today 9pm";
$automatedResponseTimeEnd = "Tomorrow 10am";



// Create a API client instance
$http = new Services_Twilio_TinyHttp(
    'https://api.twilio.com',
    array('curlopts' => array(
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_SSL_VERIFYHOST => 2
    )));

$client = new Services_Twilio($accountSid, $authToken, "2010-04-01", $http);

?>