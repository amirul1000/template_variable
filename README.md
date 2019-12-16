"# template_variable" 

Get Html content as a variable from rendered PHP template & data 
In this video tutorial we are going to show you how will you get dynamic html  content passing data to   the php template and You will get html content for email , pdf or for any others uses as html template.

We will start with 
ob_start()
pass your variables
to the including path of the template you want.
$html = ob_get_clean();

Example
//get the HTML
ob_start();
include (APPPATH . 'views/admin/invoice/invoice_template.php');
$html = ob_get_clean();

Use this $html variable anywhere you need like in email content,generating pdf,xml,html etc

ob_start — Turn on output buffering
This function will turn output buffering on. While output buffering is active no output is sent from the script (other than headers), instead the output is stored in an internal buffer
https://www.php.net/manual/en/function.ob-start.php

ob_get_clean — Get current buffer contents and delete current output buffer
https://www.php.net/manual/en/function.ob-get-clean.php


Youtube Tutorial : https://www.youtube.com/watch?v=8WrwhKY40og

Youtube Channel : https://www.youtube.com/channel/UC2Q4oWfoMQzi6AES8Vb2vQw?view_as=subscriber

Donate to Paypal : patabuz@gmail.com
