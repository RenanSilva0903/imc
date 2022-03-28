<?php

  $headers = 'MIME-Version: 1.0'. "\r\n";

    mail('renanpereira0903@gmail.com', 'Envio de dados', 'Olá, muito obrigado pelo envio', $headers);

    echo '<h1>Seus dados foram enviados com sucesso</h1>';

?>