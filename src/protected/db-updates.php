<?php
namespace MapasCulturais;

$app = App::i();
$em = $app->em;
$conn = $em->getConnection();

return [
    'migrate gender' => function() use ($conn) {
        $conn->executeQuery("UPDATE agent_meta SET value='Homem' WHERE key='genero' AND value='Masculino'");
        $conn->executeQuery("UPDATE agent_meta SET value='Mulher' WHERE key='genero' AND value='Feminino'");
    },

    'remove circular references again... ;)' => function() use ($conn) {
        $conn->executeQuery("UPDATE agent SET parent_id = null WHERE id = parent_id");

        $conn->executeQuery("UPDATE agent SET parent_id = null WHERE id IN (SELECT profile_id FROM usr)");
        
        return false; // executa todas as vezes só para garantir...
    },
            
    
    'new random id generator' => function () use ($conn) {
        $conn->executeQuery("
            CREATE SEQUENCE pseudo_random_id_seq
                START WITH 1
                INCREMENT BY 1
                NO MINVALUE
                NO MAXVALUE
                CACHE 1;");
        
        $conn->executeQuery("
            CREATE OR REPLACE FUNCTION pseudo_random_id_generator() returns int AS $$
                DECLARE
                    l1 int;
                    l2 int;
                    r1 int;
                    r2 int;
                    VALUE int;
                    i int:=0;
                BEGIN
                    VALUE:= nextval('pseudo_random_id_seq');
                    l1:= (VALUE >> 16) & 65535;
                    r1:= VALUE & 65535;
                    WHILE i < 3 LOOP
                        l2 := r1;
                        r2 := l1 # ((((1366 * r1 + 150889) % 714025) / 714025.0) * 32767)::int;
                        l1 := l2;
                        r1 := r2;
                        i := i + 1;
                    END LOOP;
                    RETURN ((r1 << 16) + l1);
                END;
            $$ LANGUAGE plpgsql strict immutable;");
    },
];