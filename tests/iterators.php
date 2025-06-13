<?php
echo "error_reporting_at_start: " . ini_get('error_reporting') . "\n";

$path = "tests/fixtures/instance/qwe/modulebuilder/builds/qweqwe/SugarModules/modules/Accounts";
$dit = new DirectoryIterator($path);
foreach ($dit as $f) {
	if($f->isDot()) continue;
	echo $f->getFilename()."\n";
}
$path = "tests/fixtures/instance/qwe/modulebuilder/builds/qweqwe/SugarModules/modules/Calls";
$dit = new DirectoryIterator($path);
foreach ($dit as $f) {
	if($f->isDot()) continue;
	echo $f->getFilename()."\n";
}
$path = "tests/fixtures/instance/qwe/modulebuilder/builds/qweqwe/SugarModules/modules/Cases";
$dit = new DirectoryIterator($path);
foreach ($dit as $f) {
	if($f->isDot()) continue;
	echo $f->getFilename()."\n";
}
$path = "tests/fixtures/instance/qwe/modulebuilder/builds/qweqwe/SugarModules/modules/Contacts";
$dit = new DirectoryIterator($path);
foreach ($dit as $f) {
	if($f->isDot()) continue;
	echo $f->getFilename()."\n";
}
$path = "tests/fixtures/instance/qwe/modulebuilder/builds/qweqwe/SugarModules/modules/Documents";
$dit = new DirectoryIterator($path);
foreach ($dit as $f) {
	if($f->isDot()) continue;
	echo $f->getFilename()."\n";
}
$path = "tests/fixtures/instance/qwe/modulebuilder/builds/qweqwe/SugarModules/modules/ExternalUsers";
$dit = new DirectoryIterator($path);
foreach ($dit as $f) {
	if($f->isDot()) continue;
	echo $f->getFilename()."\n";
}
$path = "tests/fixtures/instance/qwe/modulebuilder/builds/qweqwe/SugarModules/modules/Meetings";
$dit = new DirectoryIterator($path);
foreach ($dit as $f) {
	if($f->isDot()) continue;
	echo $f->getFilename()."\n";
}
$path = "tests/fixtures/instance/qwe/modulebuilder/builds/qweqwe/SugarModules/modules/Messages";
$dit = new DirectoryIterator($path);
foreach ($dit as $f) {
	if($f->isDot()) continue;
	echo $f->getFilename()."\n";
}
$path = "tests/fixtures/instance/qwe/modulebuilder/builds/qweqwe/SugarModules/modules/Notes";
$dit = new DirectoryIterator($path);
foreach ($dit as $f) {
	if($f->isDot()) continue;
	echo $f->getFilename()."\n";
}
$path = "tests/fixtures/instance/qwe/modulebuilder/builds/qweqwe/SugarModules/modules/Project";
$dit = new DirectoryIterator($path);
foreach ($dit as $f) {
	if($f->isDot()) continue;
	echo $f->getFilename()."\n";
}
$path = "tests/fixtures/instance/qwe/modulebuilder/builds/qweqwe/SugarModules/modules/PurchasedLineItems";
$dit = new DirectoryIterator($path);
foreach ($dit as $f) {
	if($f->isDot()) continue;
	echo $f->getFilename()."\n";
}
$path = "tests/fixtures/instance/qwe/modulebuilder/builds/qweqwe/SugarModules/modules/Tasks";
$dit = new DirectoryIterator($path);
foreach ($dit as $f) {
	if($f->isDot()) continue;
	echo $f->getFilename()."\n";
}
$path = "tests/fixtures/instance/api/rest.php";
$fp = fopen($path, "r");
var_dump(fread($fp, 1024));
fclose($fp);
$path = "tests/fixtures/templatedir/api/rest.php";
$fp = fopen($path, "r");
var_dump(fread($fp, 1024));
fclose($fp);
?>
