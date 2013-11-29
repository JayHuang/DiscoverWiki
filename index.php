<html>
<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="js/api.js"></script>
  <script>
  $(document).ready(function() {
    getVersion();
    fireAPICalls();
  });
  </script>
</head>
<body>
  <div class="random-articles"></div>
<?php
  // ini_set('display_errors',1);
  // ini_set('display_startup_errors',1);
  // error_reporting(-1);

  // // Load the driver
  // require_once("rdb/rdb.php");

  // // Connect to localhost
  // $conn = r\connect('localhost');

  // // Create a test table
  // r\db("test")->tableCreate("tablePhpTest")->run($conn);

  // // Insert a document
  // $document = array('someKey' => 'someValue');
  // $result = r\table("tablePhpTest")->insert($document)
  //     ->run($conn);
  // echo "Insert: $result\n";

  // // How many documents are in the table?
  // $result = r\table("tablePhpTest")->count()->run($conn);
  // echo "Count: $result\n";

  // // List the someKey values of the documents in the table
  // // (using a mapping-function)
  // $result = r\table("tablePhpTest")->map(function($x) {
  //         return $x('someKey');
  //     })->run($conn);

  // foreach ($result as $doc) {
  //     echo "Doc: $doc\n";
  // }

  // // Delete the test table
  // r\db("test")->tableDrop("tablePhpTest")->run($conn);
?>
<?php
// function get_random_wikipedia_article() {
//   if (!function_exists('curl_init')) return false;
//   $url = 'http://en.wikipedia.org/wiki/Special:Random';
//   $options = array(
//     CURLOPT_RETURNTRANSFER => true,     // return web page
//     CURLOPT_HEADER         => false,    // don't return headers
//     CURLOPT_FOLLOWLOCATION => true,     // follow redirects
//     CURLOPT_ENCODING       => "",       // handle all encodings
//     CURLOPT_USERAGENT      => "bot", // who am i
//     CURLOPT_AUTOREFERER    => true,     // set referer on redirect
//     CURLOPT_CONNECTTIMEOUT => 30,      // timeout on connect
//     CURLOPT_TIMEOUT        => 30,      // timeout on response
//     CURLOPT_MAXREDIRS      => 3,       // stop after 10 redirects
//   );

//   $ch = curl_init($url);
//   curl_setopt_array($ch, $options);
//   $content = curl_exec($ch);
//   $err = curl_errno($ch);
//   $errmsg = curl_error($ch);
//   $header = curl_getinfo($ch);
//   curl_close($ch);

//   if (preg_match('/<title>(.*?)<\/title>/i', $content, $matches)) {
//     $title = str_replace(' - Wikipedia, the free encyclopedia', '', $matches[1]);
//   }

//   return '<a href="'. $header['url'] .'">'. $title .'</a>';
// }

// get_random_wikipedia_article();

?>
</body>
</html>