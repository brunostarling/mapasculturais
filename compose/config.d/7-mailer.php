<?php

return array_merge($config,
    [
        /* Configurações para envio de eMail */
        'mailer.user'     => '<user>@<domain.to.use>',
        'mailer.psw'      => '<password>',
        'mailer.server'   => '<host.to.use>',			// p.ex.:'smtp.gmail.com',
        'mailer.protocol' => '<protocol>',				// 'ssl',
        'mailer.port'     => '<port>,					// '465',
        'mailer.from'     => '<from>@domain.to.use>'
    ]
);
