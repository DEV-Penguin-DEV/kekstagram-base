<?php

// Проверяем, что запрос является POST-запросом
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Обрабатываем POST-запрос
  // Здесь вы можете добавить любую логику обработки POST-запроса, если необходимо.

  // Всегда отправляем HTTP-ответ со статусом 200 (OK)
  http_response_code(200);
  echo 'POST-запрос успешно обработан.';
} else {
  // Если запрос не POST, отправляем ошибку
  http_response_code(405);
  echo 'Метод не разрешен';
}