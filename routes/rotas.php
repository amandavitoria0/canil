<?php

include "./controller/controlador.php";

$URL = $_SERVER ['REQUEST_URI'];
echo $URL;

if($URL == "/canil-senai/"){
    mainPage();
}
else if ($URL == "/canil-senai/gatos"){
    gatosPage();

}

else if ($URL == "/canil-senai/cachorros"){
    cachorrosPage();
    
}


else if ($URL == "/canil-senai/peixes"){
    peixesPage();
    
}

else if ($URL == "/canil-senai/calopsita"){
    calopsitaPage();
    
}

else if ($URL == "/canil-senai/papagaio"){
    papagaioPage();
    
}

else if ($URL == "/canil-senai/canario"){
    canarioPage();
    
}

else if ($URL == "/canil-senai/raposa"){
    raposaPage();
    
}

else if ($URL == "/canil-senai/coelho"){
    coelhoPage();
    
}

else if ($URL == "/canil-senai/rato"){
    ratoPage();
    
}

else if ($URL == "/canil-senai/passaros"){
    passarosPage();
    
}

else if ($URL == "/canil-senai/pesquisa"){
    echo "rota de pesquisa";
}

else {
    echo "NOT FOUND!!!";
}
?>




