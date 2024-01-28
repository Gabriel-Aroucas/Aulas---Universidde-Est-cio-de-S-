    <?php
    //constants to storage variables
    define('HOST', 'localhost');
    define('PORT', '3306');
    define('DBNAME', 'mock');
    define('USER', 'root');
    define('PASSWORD', '');

    try {
        echo("connected succesfuly");
        $dsn = new PDO("mysql:host=" . HOST . ";port=" . PORT . ";dbname=" . DBNAME . ";user=" . USER . ";password=" . PASSWORD);
    } catch (PDOException $err) {
        echo ("A conexão falhou e retornou o erro: " . $err->getMessage());
    }
    // disable connection
    //$dsn = nulll
    ?>