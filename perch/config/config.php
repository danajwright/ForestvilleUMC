<?php

    define('PERCH_LICENSE_KEY', 'P21305-QLQ203-CWM909-NMP741-RFG022');

    define("PERCH_DB_USERNAME", 'forestvilleumc');
    define("PERCH_DB_PASSWORD", 'fumc2020');
    define("PERCH_DB_SERVER", "ftp.dotster.com");
    define("PERCH_DB_DATABASE", "accountname_fumc");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'America/New_York');

    define('PERCH_EMAIL_FROM', 'danajwright@gmail.com');
    define('PERCH_EMAIL_FROM_NAME', 'dana wright');

    define('PERCH_LOGINPATH', 'forestvilleumc.org/public_html/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', dirname(__FILE__)));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
  
?>