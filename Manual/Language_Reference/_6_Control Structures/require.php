<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 24/09/14
 * Time: 15.16
 */

 //require('req2.php');
 include('req2.php');

 echo "Fine main script " . __LINE__; //se in req2.php si scatena un fatal error,
                          //lo script si interrompe e questa echo non si vede.
                          //questo succede anche se uso la include

 //se usando require o include uso un path assoluto o relativo, l'include_path
 //viene ignorato.
 //il file incluso eredita lo scope della linea di codice nel quale si trova
 //l'include/require. tutte le variabili disponibili a quella riga sono disponibili
 //anche nel file incluso