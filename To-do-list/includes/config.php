<?php
define("SERVER_NAME", "localhost");                                                                 // <=== This defines the name of the server im using.
define("USERNAME", "root");                                                                         // <=== This defines the Username of the account im using.
define("PASSWORD", "");                                                                             // <=== This defines the Password of the account im using.
define("DB_NAME", "to-do-list");                                                                    // <=== This defines the name of the database im using.
define("ROOT_DIR", dirname(__DIR__));                                                               // <=== Sets the main Project Directory.
define("REDIRECT", header("refresh:3;url=".ROOT_URL."index.php"));                                  // <=== Redirect to main page.