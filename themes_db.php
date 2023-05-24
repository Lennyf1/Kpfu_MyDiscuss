<?php 


function get_topics() {
  return [
    '21' => [
      'date' => '21.05.2023',
      'title' => 'movies',
      'url' => 'img1.jpg',
      'question' => 'Какой из фильмов Тарантино лучший?',
      'about' => 'Данная рубрика посвященна обсуждению фильмов режиссёра Квентина Тарантино, пожалуйста соблюдайте правила дискуссии',
      
    ],

    '22' => [
      'date' => '22.05.2023',
      'title' => 'movies',
      'url' => 'img1.jpg',
      'question' => 'Какой из фильмов Тарантино лучший?',
      'about' => ' пожалуйста соблюдайте правила дискуссии',
      
    ],


    '23' => [
      'date' => '23.05.2023',
      'title' => 'mystery of nature',
      'url' => 'img2.jpg',
      'question' => 'Насколько вероятна теория Плоской Земли?',
      'about' => 'Пожалуйста соблюдайте правила поведения дискуссии',
      
    ],

    '24' => [
      'date' => '24.05.2023',
      'title' => 'education',
      'url' => 'img3.jpg',
      'question' => 'Какой Вуз всё-таки выбрать?',
      'about' => 'Пожалуйста соблюдайте правила поведения дискуссии',
      
    ],

    '25' => [
      'date' => '25.05.2023',
      'title' => 'game',
      'url' => 'img4.jpg',
      'question' => 'Что скрывает Зона 69 в игре Grand Theft Auto San Andreas?',
      'about' => 'Пожалуйста соблюдайте правила поведения дискуссии',
      
    ],

    '26' => [
      'date' => '26.05.2023',
      'title' => 'politics',
      'url' => 'img5.jpg',
      'question' => 'Кто убил Джона Кеннеди?',
      'about' => 'Пожалуйста соблюдайте правила поведения дискуссии',
      
    ],

    '27' => [
      'date' => '27.05.2023',
      'title' => 'programming',
      'url' => 'img6.jpg',
      'question' => 'Какой фреймворк javascript более актуальный?',
      'about' => 'Пожалуйста соблюдайте правила поведения дискуссии',
      
    ],
  ];
}

function get_topic_attribute($id, $attr) {
  $topics = get_topics();
  $result = $topics[$id][$attr] ?? null;
  return $result;
}
function get_topic_date($id) {
  return get_topic_attribute($id, 'date');
  }

function get_topic_title($id) {
  return get_topic_attribute($id, 'title');
}

function get_img_url($id) {
  return get_topic_attribute($id, 'url');
}

function get_topic_quest($id) {
    return get_topic_attribute($id, 'question');
  }

