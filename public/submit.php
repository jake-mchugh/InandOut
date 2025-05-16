<?php
require 'vendor/autoload.php';

use Aws\DynamoDb\DynamoDbClient;
use Aws\DynamoDb\Marshaler;

$client = new DynamoDbClient([
    'region' => 'your-region',
    'version' => 'latest'
]);

$marshaler = new Marshaler();

$data = [
    'id' => uniqid(),
    'name' => $_POST['name'],
    'company' => $_POST['company'],
    'staff' => $_POST['staff'],
    'purpose' => $_POST['purpose'],
    'type' => $_POST['type'],
    'timestamp' => date('c')
];

try {
    $client->putItem([
        'TableName' => 'visitor_logs',
        'Item' => $marshaler->marshalItem($data)
    ]);
    echo 'Logged successfully.';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
