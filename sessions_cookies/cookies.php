<?php
//Crear una cookie
setcookie('nombre', 'Pepe', time()+10);//timepo de expiracion en segundos

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

//actualizar una cookie
setcookie('nombre', 'Pepe', time()+2*60);

//eliminar una cookie
setcookie('nombre', 'Pepe', time()-1);
