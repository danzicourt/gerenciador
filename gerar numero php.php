<?php

/**
*  Gera o próximo código sequencial 
*  com base no código informado
*/
function gera_id( $id )
{
$char = substr( $id, 0, 1 );
$num  = ( int ) substr( $id, 1 );
return ( ( $num + 1 ) > 99 ) ? sprintf( '%s00', chr( ord( $char ) + 1 ) ) : sprintf( '%s%02s', $char, $num + 1 );
}

/**
*  Testando
*/
$id = 'A00';
for( $i = 1; $i < 2600; $i++ )
{
$id = gera_id( $id );
echo $id, '<br/>';	
}

/**
 Fragmento da saída
F95
F96
F97
F98
F99
G00
G01
G02
G03
G04
G05
*/

?>