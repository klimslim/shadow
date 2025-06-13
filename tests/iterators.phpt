--TEST--
Check iterators
--SKIPIF--
<?php if (!extension_loaded("shadow")) print "skip"; ?>
--INI--
shadow.enabled=1
shadow.override_all=1
shadow.mkdir_mask=0755
shadow.debug=4096
shadow.cache_size=0
shadow.instance_path=tests/fixtures/instance
shadow.template_path=tests/fixtures/templatedir
--FILE--
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
--EXPECTF--
error_reporting_at_start: 12345
inst_accounts_file
inst_calls_file
inst_cases_file
inst_contacts_file
inst_documents_file
inst_externalusers_file
inst_meetings_file
inst_messages_file
inst_notes_file
inst_project_file
inst_purchasedlineitems_file
inst_tasks_file
string(%d) "Executed content of %s (up to %d bytes)"
string(%d) "Executed content of %s (up to %d bytes)"
