<?php

// Проверяем, что запрос является GET-запросом
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Читаем данные из файла JSON
  $jsonData = file_get_contents('data.json');

  if ($jsonData !== false) {
    // Преобразуем JSON в массив данных
    $data = json_decode($jsonData, true);

    if ($data !== null) {
      // Отправляем данные в формате JSON
      header('Content-Type: application/json');
      echo json_encode($data);
    } else {
      // В случае ошибки при преобразовании JSON
      http_response_code(500);
      echo 'Ошибка при обработке данных.';
    }
  } else {
    // В случае ошибки чтения файла JSON
    http_response_code(500);
    echo 'Ошибка при чтении файла данных.';
  }
} else {
  // Если запрос не GET, отправляем ошибку
  http_response_code(405);
  echo 'Метод не разрешен';
}