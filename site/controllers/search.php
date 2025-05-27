<?php

return function ($site) {

  $query   = get('q');
  $results = $site->search($query, 'title|text|cat|type|add_text|info');

  return [
    'query'   => $query,
    'results' => $results,
  ];

};