<?
echo 'i am alive!';
file_put_contents('log.txt', 'test file write', FILE_APPEND)
//$data = json_decode(file_get_contents('php://input'), true);
//file_put_contents('tg_response.txt', '$data: ' . print_r($data, true), FILE_APPEND);

//https://api.telegram.org/bot5676962164:AAGVsQTvcIa7T6pXi_TBQPIR9PDGWm3_pr4/setwebhook?url=https://y93711oa.beget.tech/bot.php