<?php
//Magic constants
echo __FILE__ .'<br>';
echo __DIR__ . '<br>';


echo __LINE__ . '<br>';

//Crear un directorio
//$old = umask(0);
//mkdir('test', 0775);
// umask($old);

// mkdir('test/test1/test2',0775, true);
// umask($old);
//Eliminar
//rmdir('test');

//mkdir('test');
//renombrar
//rename('test', 'new_test');

//Leer archivos y directorios
$files = scandir('./');
echo '<pre>';
var_dump($files);
echo '</pre>';

//Escribir y leer archivos
//file_put_contents('lorem.txt', "Hola FS....\n");
$lorem = file_get_contents('lorem.txt');
echo $lorem . '<br>';

//leer desde una URL
$jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
//var_dump($jsonContent);
$users = json_decode($jsonContent);
//var_dump($users[0]);

//comprobar si un archivo existe
file_exists('lorem.txt');

//tamaño del archivo
var_dump(filesize('lorem.txt'));

//eliminar archivo
//unlink('lorem.txt');

//https://www.php.net/manual/es/book.filesystem.php


//Eliminar dirs recursivamente
function rrmdir($dir) { 
    if (is_dir($dir)) { 
      $objects = scandir($dir);
      foreach ($objects as $object) { 
        if ($object != "." && $object != "..") { 
          if (is_dir($dir. DIRECTORY_SEPARATOR .$object) && !is_link($dir.DIRECTORY_SEPARATOR.$object))
        rrmdir($dir. DIRECTORY_SEPARATOR .$object);
          else
            unlink($dir. DIRECTORY_SEPARATOR .$object); 
        } 
      }
      rmdir($dir); 
    } 
  }