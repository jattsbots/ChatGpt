//𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
//• Don't forget to mention the developer's credits Tom
//• Developer ↦ @noob_je ↤
//• Developer's Channel ↦ @NoobPrivate ↤
//𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
<?php
ob_start();
error_reporting(0);
define("20841292", '6972153481:AAGBqboa-gNe0uuvE5cEO_Ol7WAmx3HBSWU');
function bot($method, $datas = []) {
    $url = "https://api.telegram.org/bot" . API_KEY . "/$method";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    }
    return json_decode($res);
}
// 𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳


// Here you can add an admin panel if you want


// 𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
$input = file_get_contents("php://input");
$update = json_decode($input, TRUE);
$chatId = $update['message']['chat']['id'];
$text = $update['message']['text'];

if ($text == '/start') {
bot('sendMessage', [
'chat_id' => $chatId,
'text' => '*• Welcome dear to the AI bot
• I am GPT AI, trained using artificial intelligence technology 
• To provide answers and conversations to users 
• In various topics and fields

• Can I assist you with something? *',
'parse_mode' => "Markdown",
'disable_web_page_preview' => true,
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "• Bot Developer •", 'url' => "https://t.me/PBX1_OP"],
['text' => "• Bot Channel •", 'url' => "https://t.me/PBX1_BOTS"]]
]
])
]);
return;
}
//𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
//• Don't forget to mention the developer's credits Tom
//• Developer ↦ @noob_je ↤
//• Developer's Channel ↦ @NoobPrivate ↤
//𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
sendApiResponse($chatId, $text);
function sendApiResponse($chatId, $message) {
    $apiUrl = "https://advancewithaiapi.cropk.com/Gpt/generate"; 
    $payload = json_encode(["prompt" => $message, "contentType" => "gptAlternative"]);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    
    $apiResponse = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($apiResponse, true);
    $generatedText = isset($result['generatedText']) ? $result['generatedText'] : 'Could not get a response.';
$waitingMessage =bot('SendMessage', [
'chat_id' => $chatId,
'text' => "Please wait ⏱️",
]);
//• Don't forget to mention the developer's credits Tom
//• Developer ↦ @noob_je ↤
//• Developer's Channel ↦ @NoobPrivate ↤
$message_id = $waitingMessage->result->message_id;
bot('editMessageText', [
'chat_id' => $chatId,
'message_id' => $message_id,
'text' => $generatedText,
'parse_mode' => "markdown"
]);
}
?>
//𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
//• Don't forget to mention the developer's credits Tom
//• Developer ↦ @noob_je ↤
//• Developer's Channel ↦ @NoobPrivate ↤
//𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
