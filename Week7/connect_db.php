<?PHP

// connect to your Azure server and select database (remember you connection details are all on the azure portal
$db = new mysqli(
    "us-cdbr-azure-southcentral-f.cloudapp.net",
    "b5051f6adfc120",
    "c31439e7",
    "webappalexander" );

// test our connection
if ($db->connect_errno) {
    die ('Connection Failed :'.$db->connect_error );
}
