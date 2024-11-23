<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Подключение PHPMailer
require 'vendor/autoload.php';

// Проверяем, что данные были отправлены
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = htmlspecialchars(trim($_POST['name']));
    $communication = htmlspecialchars(trim($_POST['communication']));

		
    // В зависимости от выбранного способа связи обрабатываем поле 'phone'
    $contact = ''; // Это будет переменная для контактной информации (телефон, Telegram и т.д.)

    if ($communication === 'phone') {
        $contact = htmlspecialchars(trim($_POST['phone']));  // если выбран телефон
    } elseif ($communication === 'telegram') {
        $contact = htmlspecialchars(trim($_POST['telegram']));  // если выбран Telegram (могут быть логины)
    } elseif ($communication === 'email') {
        $contact = htmlspecialchars(trim($_POST['email']));  // если выбран email
    } elseif ($communication === 'viber') {
        $contact = htmlspecialchars(trim($_POST['viber']));  // если выбран Viber
    } elseif ($communication === 'whatsapp') {
        $contact = htmlspecialchars(trim($_POST['whatsapp']));  // если выбран WhatsApp
    }


    $message = htmlspecialchars(trim($_POST['message']));

    // Инициализация PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Настройки SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP сервер (например, Gmail)
        $mail->SMTPAuth = true;
        $mail->Username = 'max.pivovar@gmail.com'; // Ваш email
        $mail->Password = 'llsb mcxf resa rtqb'; // Ваш пароль приложения
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 465;

        // Настройка отправителя и получателя
        $mail->setFrom('max.pivovar@gmail.com', 'Website'); // Отправитель
        $mail->addAddress('max.pivovar@gmail.com', 'Recipient'); // Получатель

        // Тема и тело письма
        $mail->isHTML(true);
        $mail->Subject = 'Новая заявка с формы';
        $mail->Body = "
            <h2>Данные пользователя:</h2>
            <p><strong>Имя:</strong> $name</p>
            <p><strong>Способ связи:</strong> $communication</p>
            <p><strong>Контакт:</strong> $contact</p>
            <p><strong>Сообщение:</strong> $message</p>
        ";

        // Отправка письма
        $mail->send();
        echo 'Сообщение успешно отправлено!';
    } catch (Exception $e) {
        echo "Ошибка при отправке сообщения: {$mail->ErrorInfo}";
    }
} else {
    echo 'Данные формы не были отправлены.';
}
