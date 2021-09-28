<?php
require_once "htmlSide.php";
require_once "messages.csv";
require_once "vendor/autoload.php";
use League\Csv\Writer;
use League\Csv\Reader;
use App\PersonMessage;

require 'src/LucidFrame/Console/ConsoleTable.php';

$data = fopen("messages.csv", "a+");

$name = $_POST['nickname'] . PHP_EOL;
$message = $_POST['message'] . PHP_EOL;

$text = $name . " " . "posted-" . " " . $message . PHP_EOL;

fwrite($data, $text);

fclose($data);

$personmssg = new PersonMessage();

/*
if (isset($_POST['submit'])){
    $csv = Writer::createFromPath("messages.csv", "a+");
    $name = $_POST['name'];
    $message = $_POST['message'];
    $info = [$name, $message];
    $csv->insertAll($name);
}



use League\Csv\Reader;
use League\Csv\Statement;

$csv = Reader::createFromPath("messages.csv", "r");
$csv->setDelimiter(";");
$csv->setHeaderOffset(0);

$stat = Statement::create()
    ->offset(0)

;
$records = $stat->process($csv);
foreach ($records as $record)
{
    echo $record["message"];
}
//echo $_POST["name"];
//echo $_POST["message"];

$data = fopen("messages.csv", "w");

$name = $_POST['name'];
$message = $_POST['message'];

$text = $name . $message;

fwrite($data, $text);
fclose($data);
//<?php echo $_POST["name"] . PHP_EOL;
//<?php echo $_POST["message"] . PHP_EOL;
*/

