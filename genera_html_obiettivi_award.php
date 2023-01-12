<?php 



//In input ci serve l'anno e l'ambito

//Anni possibili: tutti

//Ambiti possibili: Caltagirone, Caltanissetta, Gela
$logged_user_username = $_POST['logged_user_username'];
$logged_user_rolename = $_POST['logged_user_rolename'];
$logged_user_firstname = $_POST['logged_user_firstname'];
$logged_user_lastname = $_POST['logged_user_lastname'];
$logged_user_accesskey = $_POST['logged_user_accesskey'];
$logged_user_id = $_POST['logged_user_id'];
$logged_user_email = $_POST['logged_user_email'];

$ob_anno = $_POST['ob_anno'];
$ob_scope = $_POST['ob_scope'];

//Effettuiamo la connessione con il database MySQL

$servername = "localhost";
$username = "albusser_serf_us";
$password = "CQ(9O*7W61*=";
$dbname = "albusser_serfdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



//Ora dobbiamo assegnare tutti i valori conosciuti, sappiamo già che si tratta di obiettivi award, l'anno e lo scope
//Inizializziamo tutte le variabilie con valori nulli

//Prestiti Totali

$gennaio_pp_award_tutto = 0;
$febbraio_pp_award_tutto = 0;
$marzo_pp_award_tutto = 0;
$aprile_pp_award_tutto = 0;
$maggio_pp_award_tutto = 0;
$giugno_pp_award_tutto = 0;
$luglio_pp_award_tutto = 0;
$agosto_pp_award_tutto = 0;
$settembre_pp_award_tutto = 0;
$ottobre_pp_award_tutto = 0;
$novembre_pp_award_tutto = 0;
$dicembre_pp_award_tutto = 0;
$annuale_pp_award_tutto = 0;

$gennaio_pp_award_riattualizzato_tutto = 0;
$febbraio_pp_award_riattualizzato_tutto = 0;
$marzo_pp_award_riattualizzato_tutto = 0;
$aprile_pp_award_riattualizzato_tutto = 0;
$maggio_pp_award_riattualizzato_tutto = 0;
$giugno_pp_award_riattualizzato_tutto = 0;
$luglio_pp_award_riattualizzato_tutto = 0;
$agosto_pp_award_riattualizzato_tutto = 0;
$settembre_pp_award_riattualizzato_tutto = 0;
$ottobre_pp_award_riattualizzato_tutto = 0;
$novembre_pp_award_riattualizzato_tutto = 0;
$dicembre_pp_award_riattualizzato_tutto = 0;
$annuale_pp_award_riattualizzato_tutto = 0;

//Prestiti Standard

$gennaio_pp_award_standard = 0;
$febbraio_pp_award_standard = 0;
$marzo_pp_award_standard = 0;
$aprile_pp_award_standard = 0;
$maggio_pp_award_standard = 0;
$giugno_pp_award_standard = 0;
$luglio_pp_award_standard = 0;
$agosto_pp_award_standard = 0;
$settembre_pp_award_standard = 0;
$ottobre_pp_award_standard = 0;
$novembre_pp_award_standard = 0;
$dicembre_pp_award_standard = 0;
$annuale_pp_award_standard = 0;

$gennaio_pp_riattualizzazione_perc_standard = 0;
$febbraio_pp_riattualizzazione_perc_standard = 0;
$marzo_pp_riattualizzazione_perc_standard = 0;
$aprile_pp_riattualizzazione_perc_standard = 0;
$maggio_pp_riattualizzazione_perc_standard = 0;
$giugno_pp_riattualizzazione_perc_standard = 0;
$luglio_pp_riattualizzazione_perc_standard = 0;
$agosto_pp_riattualizzazione_perc_standard = 0;
$settembre_pp_riattualizzazione_perc_standard = 0;
$ottobre_pp_riattualizzazione_perc_standard = 0;
$novembre_pp_riattualizzazione_perc_standard = 0;
$dicembre_pp_riattualizzazione_perc_standard = 0;

$gennaio_pp_award_riattualizzato_standard = 0;
$febbraio_pp_award_riattualizzato_standard = 0;
$marzo_pp_award_riattualizzato_standard = 0;
$aprile_pp_award_riattualizzato_standard = 0;
$maggio_pp_award_riattualizzato_standard = 0;
$giugno_pp_award_riattualizzato_standard = 0;
$luglio_pp_award_riattualizzato_standard = 0;
$agosto_pp_award_riattualizzato_standard = 0;
$settembre_pp_award_riattualizzato_standard = 0;
$ottobre_pp_award_riattualizzato_standard = 0;
$novembre_pp_award_riattualizzato_standard = 0;
$dicembre_pp_award_riattualizzato_standard = 0;
$annuale_pp_award_riattualizzato_standard = 0;


//Prestiti mzd

$gennaio_pp_award_mzd = 0;
$febbraio_pp_award_mzd = 0;
$marzo_pp_award_mzd = 0;
$aprile_pp_award_mzd = 0;
$maggio_pp_award_mzd = 0;
$giugno_pp_award_mzd = 0;
$luglio_pp_award_mzd = 0;
$agosto_pp_award_mzd = 0;
$settembre_pp_award_mzd = 0;
$ottobre_pp_award_mzd = 0;
$novembre_pp_award_mzd = 0;
$dicembre_pp_award_mzd = 0;
$annuale_pp_award_mzd = 0;

$gennaio_pp_riattualizzazione_perc_mzd = 0;
$febbraio_pp_riattualizzazione_perc_mzd = 0;
$marzo_pp_riattualizzazione_perc_mzd = 0;
$aprile_pp_riattualizzazione_perc_mzd = 0;
$maggio_pp_riattualizzazione_perc_mzd = 0;
$giugno_pp_riattualizzazione_perc_mzd = 0;
$luglio_pp_riattualizzazione_perc_mzd = 0;
$agosto_pp_riattualizzazione_perc_mzd = 0;
$settembre_pp_riattualizzazione_perc_mzd = 0;
$ottobre_pp_riattualizzazione_perc_mzd = 0;
$novembre_pp_riattualizzazione_perc_mzd = 0;
$dicembre_pp_riattualizzazione_perc_mzd = 0;

$gennaio_pp_award_riattualizzato_mzd = 0;
$febbraio_pp_award_riattualizzato_mzd = 0;
$marzo_pp_award_riattualizzato_mzd = 0;
$aprile_pp_award_riattualizzato_mzd = 0;
$maggio_pp_award_riattualizzato_mzd = 0;
$giugno_pp_award_riattualizzato_mzd = 0;
$luglio_pp_award_riattualizzato_mzd = 0;
$agosto_pp_award_riattualizzato_mzd = 0;
$settembre_pp_award_riattualizzato_mzd = 0;
$ottobre_pp_award_riattualizzato_mzd = 0;
$novembre_pp_award_riattualizzato_mzd = 0;
$dicembre_pp_award_riattualizzato_mzd = 0;
$annuale_pp_award_riattualizzato_mzd = 0;

//Prestiti FA

$gennaio_pp_award_fa = 0;
$febbraio_pp_award_fa = 0;
$marzo_pp_award_fa = 0;
$aprile_pp_award_fa = 0;
$maggio_pp_award_fa = 0;
$giugno_pp_award_fa = 0;
$luglio_pp_award_fa = 0;
$agosto_pp_award_fa = 0;
$settembre_pp_award_fa = 0;
$ottobre_pp_award_fa = 0;
$novembre_pp_award_fa = 0;
$dicembre_pp_award_fa = 0;
$annuale_pp_award_fa = 0;

$gennaio_pp_riattualizzazione_perc_fa = 0;
$febbraio_pp_riattualizzazione_perc_fa = 0;
$marzo_pp_riattualizzazione_perc_fa = 0;
$aprile_pp_riattualizzazione_perc_fa = 0;
$maggio_pp_riattualizzazione_perc_fa = 0;
$giugno_pp_riattualizzazione_perc_fa = 0;
$luglio_pp_riattualizzazione_perc_fa = 0;
$agosto_pp_riattualizzazione_perc_fa = 0;
$settembre_pp_riattualizzazione_perc_fa = 0;
$ottobre_pp_riattualizzazione_perc_fa = 0;
$novembre_pp_riattualizzazione_perc_fa = 0;
$dicembre_pp_riattualizzazione_perc_fa = 0;

$gennaio_pp_award_riattualizzato_fa = 0;
$febbraio_pp_award_riattualizzato_fa = 0;
$marzo_pp_award_riattualizzato_fa = 0;
$aprile_pp_award_riattualizzato_fa = 0;
$maggio_pp_award_riattualizzato_fa = 0;
$giugno_pp_award_riattualizzato_fa = 0;
$luglio_pp_award_riattualizzato_fa = 0;
$agosto_pp_award_riattualizzato_fa = 0;
$settembre_pp_award_riattualizzato_fa = 0;
$ottobre_pp_award_riattualizzato_fa = 0;
$novembre_pp_award_riattualizzato_fa = 0;
$dicembre_pp_award_riattualizzato_fa = 0;
$annuale_pp_award_riattualizzato_fa = 0;




//Cessioni Totali

$gennaio_cqs_award_tutto = 0;
$febbraio_cqs_award_tutto = 0;
$marzo_cqs_award_tutto = 0;
$aprile_cqs_award_tutto = 0;
$maggio_cqs_award_tutto = 0;
$giugno_cqs_award_tutto = 0;
$luglio_cqs_award_tutto = 0;
$agosto_cqs_award_tutto = 0;
$settembre_cqs_award_tutto = 0;
$ottobre_cqs_award_tutto = 0;
$novembre_cqs_award_tutto = 0;
$dicembre_cqs_award_tutto = 0;
$annuale_cqs_award_tutto = 0;

$gennaio_cqs_award_riattualizzato_tutto = 0;
$febbraio_cqs_award_riattualizzato_tutto = 0;
$marzo_cqs_award_riattualizzato_tutto = 0;
$aprile_cqs_award_riattualizzato_tutto = 0;
$maggio_cqs_award_riattualizzato_tutto = 0;
$giugno_cqs_award_riattualizzato_tutto = 0;
$luglio_cqs_award_riattualizzato_tutto = 0;
$agosto_cqs_award_riattualizzato_tutto = 0;
$settembre_cqs_award_riattualizzato_tutto = 0;
$ottobre_cqs_award_riattualizzato_tutto = 0;
$novembre_cqs_award_riattualizzato_tutto = 0;
$dicembre_cqs_award_riattualizzato_tutto = 0;
$annuale_cqs_award_riattualizzato_tutto = 0;

//Cessioni Standard

$gennaio_cqs_award_standard = 0;
$febbraio_cqs_award_standard = 0;
$marzo_cqs_award_standard = 0;
$aprile_cqs_award_standard = 0;
$maggio_cqs_award_standard = 0;
$giugno_cqs_award_standard = 0;
$luglio_cqs_award_standard = 0;
$agosto_cqs_award_standard = 0;
$settembre_cqs_award_standard = 0;
$ottobre_cqs_award_standard = 0;
$novembre_cqs_award_standard = 0;
$dicembre_cqs_award_standard = 0;
$annuale_cqs_award_standard = 0;

$gennaio_cqs_riattualizzazione_perc_standard = 0;
$febbraio_cqs_riattualizzazione_perc_standard = 0;
$marzo_cqs_riattualizzazione_perc_standard = 0;
$aprile_cqs_riattualizzazione_perc_standard = 0;
$maggio_cqs_riattualizzazione_perc_standard = 0;
$giugno_cqs_riattualizzazione_perc_standard = 0;
$luglio_cqs_riattualizzazione_perc_standard = 0;
$agosto_cqs_riattualizzazione_perc_standard = 0;
$settembre_cqs_riattualizzazione_perc_standard = 0;
$ottobre_cqs_riattualizzazione_perc_standard = 0;
$novembre_cqs_riattualizzazione_perc_standard = 0;
$dicembre_cqs_riattualizzazione_perc_standard = 0;

$gennaio_cqs_award_riattualizzato_standard = 0;
$febbraio_cqs_award_riattualizzato_standard = 0;
$marzo_cqs_award_riattualizzato_standard = 0;
$aprile_cqs_award_riattualizzato_standard = 0;
$maggio_cqs_award_riattualizzato_standard = 0;
$giugno_cqs_award_riattualizzato_standard = 0;
$luglio_cqs_award_riattualizzato_standard = 0;
$agosto_cqs_award_riattualizzato_standard = 0;
$settembre_cqs_award_riattualizzato_standard = 0;
$ottobre_cqs_award_riattualizzato_standard = 0;
$novembre_cqs_award_riattualizzato_standard = 0;
$dicembre_cqs_award_riattualizzato_standard = 0;
$annuale_cqs_award_riattualizzato_standard = 0;


//Cessioni mzd

$gennaio_cqs_award_mzd = 0;
$febbraio_cqs_award_mzd = 0;
$marzo_cqs_award_mzd = 0;
$aprile_cqs_award_mzd = 0;
$maggio_cqs_award_mzd = 0;
$giugno_cqs_award_mzd = 0;
$luglio_cqs_award_mzd = 0;
$agosto_cqs_award_mzd = 0;
$settembre_cqs_award_mzd = 0;
$ottobre_cqs_award_mzd = 0;
$novembre_cqs_award_mzd = 0;
$dicembre_cqs_award_mzd = 0;
$annuale_cqs_award_mzd = 0;

$gennaio_cqs_riattualizzazione_perc_mzd = 0;
$febbraio_cqs_riattualizzazione_perc_mzd = 0;
$marzo_cqs_riattualizzazione_perc_mzd = 0;
$aprile_cqs_riattualizzazione_perc_mzd = 0;
$maggio_cqs_riattualizzazione_perc_mzd = 0;
$giugno_cqs_riattualizzazione_perc_mzd = 0;
$luglio_cqs_riattualizzazione_perc_mzd = 0;
$agosto_cqs_riattualizzazione_perc_mzd = 0;
$settembre_cqs_riattualizzazione_perc_mzd = 0;
$ottobre_cqs_riattualizzazione_perc_mzd = 0;
$novembre_cqs_riattualizzazione_perc_mzd = 0;
$dicembre_cqs_riattualizzazione_perc_mzd = 0;

$gennaio_cqs_award_riattualizzato_mzd = 0;
$febbraio_cqs_award_riattualizzato_mzd = 0;
$marzo_cqs_award_riattualizzato_mzd = 0;
$aprile_cqs_award_riattualizzato_mzd = 0;
$maggio_cqs_award_riattualizzato_mzd = 0;
$giugno_cqs_award_riattualizzato_mzd = 0;
$luglio_cqs_award_riattualizzato_mzd = 0;
$agosto_cqs_award_riattualizzato_mzd = 0;
$settembre_cqs_award_riattualizzato_mzd = 0;
$ottobre_cqs_award_riattualizzato_mzd = 0;
$novembre_cqs_award_riattualizzato_mzd = 0;
$dicembre_cqs_award_riattualizzato_mzd = 0;
$annuale_cqs_award_riattualizzato_mzd = 0;


//TFCP Totali

$gennaio_tfcp_award_tutto = 0;
$febbraio_tfcp_award_tutto = 0;
$marzo_tfcp_award_tutto = 0;
$aprile_tfcp_award_tutto = 0;
$maggio_tfcp_award_tutto = 0;
$giugno_tfcp_award_tutto = 0;
$luglio_tfcp_award_tutto = 0;
$agosto_tfcp_award_tutto = 0;
$settembre_tfcp_award_tutto = 0;
$ottobre_tfcp_award_tutto = 0;
$novembre_tfcp_award_tutto = 0;
$dicembre_tfcp_award_tutto = 0;
$annuale_tfcp_award_tutto = 0;

$gennaio_tfcp_riattualizzazione_perc_tutto = 0;
$febbraio_tfcp_riattualizzazione_perc_tutto = 0;
$marzo_tfcp_riattualizzazione_perc_tutto = 0;
$aprile_tfcp_riattualizzazione_perc_tutto = 0;
$maggio_tfcp_riattualizzazione_perc_tutto = 0;
$giugno_tfcp_riattualizzazione_perc_tutto = 0;
$luglio_tfcp_riattualizzazione_perc_tutto = 0;
$agosto_tfcp_riattualizzazione_perc_tutto = 0;
$settembre_tfcp_riattualizzazione_perc_tutto = 0;
$ottobre_tfcp_riattualizzazione_perc_tutto = 0;
$novembre_tfcp_riattualizzazione_perc_tutto = 0;
$dicembre_tfcp_riattualizzazione_perc_tutto = 0;

$gennaio_tfcp_award_riattualizzato_tutto = 0;
$febbraio_tfcp_award_riattualizzato_tutto = 0;
$marzo_tfcp_award_riattualizzato_tutto = 0;
$aprile_tfcp_award_riattualizzato_tutto = 0;
$maggio_tfcp_award_riattualizzato_tutto = 0;
$giugno_tfcp_award_riattualizzato_tutto = 0;
$luglio_tfcp_award_riattualizzato_tutto = 0;
$agosto_tfcp_award_riattualizzato_tutto = 0;
$settembre_tfcp_award_riattualizzato_tutto = 0;
$ottobre_tfcp_award_riattualizzato_tutto = 0;
$novembre_tfcp_award_riattualizzato_tutto = 0;
$dicembre_tfcp_award_riattualizzato_tutto = 0;
$annuale_tfcp_award_riattualizzato_tutto = 0;

//TFCP Revolving

$gennaio_tfcp_award_revolving = 0;
$febbraio_tfcp_award_revolving = 0;
$marzo_tfcp_award_revolving = 0;
$aprile_tfcp_award_revolving = 0;
$maggio_tfcp_award_revolving = 0;
$giugno_tfcp_award_revolving = 0;
$luglio_tfcp_award_revolving = 0;
$agosto_tfcp_award_revolving = 0;
$settembre_tfcp_award_revolving = 0;
$ottobre_tfcp_award_revolving = 0;
$novembre_tfcp_award_revolving = 0;
$dicembre_tfcp_award_revolving = 0;
$annuale_tfcp_award_revolving = 0;

$gennaio_tfcp_riattualizzazione_perc_revolving = 0;
$febbraio_tfcp_riattualizzazione_perc_revolving = 0;
$marzo_tfcp_riattualizzazione_perc_revolving = 0;
$aprile_tfcp_riattualizzazione_perc_revolving = 0;
$maggio_tfcp_riattualizzazione_perc_revolving = 0;
$giugno_tfcp_riattualizzazione_perc_revolving = 0;
$luglio_tfcp_riattualizzazione_perc_revolving = 0;
$agosto_tfcp_riattualizzazione_perc_revolving = 0;
$settembre_tfcp_riattualizzazione_perc_revolving = 0;
$ottobre_tfcp_riattualizzazione_perc_revolving = 0;
$novembre_tfcp_riattualizzazione_perc_revolving = 0;
$dicembre_tfcp_riattualizzazione_perc_revolving = 0;

$gennaio_tfcp_award_riattualizzato_revolving = 0;
$febbraio_tfcp_award_riattualizzato_revolving = 0;
$marzo_tfcp_award_riattualizzato_revolving = 0;
$aprile_tfcp_award_riattualizzato_revolving = 0;
$maggio_tfcp_award_riattualizzato_revolving = 0;
$giugno_tfcp_award_riattualizzato_revolving = 0;
$luglio_tfcp_award_riattualizzato_revolving = 0;
$agosto_tfcp_award_riattualizzato_revolving = 0;
$settembre_tfcp_award_riattualizzato_revolving = 0;
$ottobre_tfcp_award_riattualizzato_revolving = 0;
$novembre_tfcp_award_riattualizzato_revolving = 0;
$dicembre_tfcp_award_riattualizzato_revolving = 0;
$annuale_tfcp_award_riattualizzato_revolving = 0;



//Carte Totali

$gennaio_carte_award_tutto = 0;
$febbraio_carte_award_tutto = 0;
$marzo_carte_award_tutto = 0;
$aprile_carte_award_tutto = 0;
$maggio_carte_award_tutto = 0;
$giugno_carte_award_tutto = 0;
$luglio_carte_award_tutto = 0;
$agosto_carte_award_tutto = 0;
$settembre_carte_award_tutto = 0;
$ottobre_carte_award_tutto = 0;
$novembre_carte_award_tutto = 0;
$dicembre_carte_award_tutto = 0;
$annuale_carte_award_tutto = 0;

$gennaio_carte_riattualizzazione_perc_tutto = 0;
$febbraio_carte_riattualizzazione_perc_tutto = 0;
$marzo_carte_riattualizzazione_perc_tutto = 0;
$aprile_carte_riattualizzazione_perc_tutto = 0;
$maggio_carte_riattualizzazione_perc_tutto = 0;
$giugno_carte_riattualizzazione_perc_tutto = 0;
$luglio_carte_riattualizzazione_perc_tutto = 0;
$agosto_carte_riattualizzazione_perc_tutto = 0;
$settembre_carte_riattualizzazione_perc_tutto = 0;
$ottobre_carte_riattualizzazione_perc_tutto = 0;
$novembre_carte_riattualizzazione_perc_tutto = 0;
$dicembre_carte_riattualizzazione_perc_tutto = 0;

$gennaio_carte_award_riattualizzato_tutto = 0;
$febbraio_carte_award_riattualizzato_tutto = 0;
$marzo_carte_award_riattualizzato_tutto = 0;
$aprile_carte_award_riattualizzato_tutto = 0;
$maggio_carte_award_riattualizzato_tutto = 0;
$giugno_carte_award_riattualizzato_tutto = 0;
$luglio_carte_award_riattualizzato_tutto = 0;
$agosto_carte_award_riattualizzato_tutto = 0;
$settembre_carte_award_riattualizzato_tutto = 0;
$ottobre_carte_award_riattualizzato_tutto = 0;
$novembre_carte_award_riattualizzato_tutto = 0;
$dicembre_carte_award_riattualizzato_tutto = 0;
$annuale_carte_award_riattualizzato_tutto = 0;





//CC Totali

$gennaio_cc_award_tutto = 0;
$febbraio_cc_award_tutto = 0;
$marzo_cc_award_tutto = 0;
$aprile_cc_award_tutto = 0;
$maggio_cc_award_tutto = 0;
$giugno_cc_award_tutto = 0;
$luglio_cc_award_tutto = 0;
$agosto_cc_award_tutto = 0;
$settembre_cc_award_tutto = 0;
$ottobre_cc_award_tutto = 0;
$novembre_cc_award_tutto = 0;
$dicembre_cc_award_tutto = 0;
$annuale_cc_award_tutto = 0;

$gennaio_cc_riattualizzazione_perc_tutto = 0;
$febbraio_cc_riattualizzazione_perc_tutto = 0;
$marzo_cc_riattualizzazione_perc_tutto = 0;
$aprile_cc_riattualizzazione_perc_tutto = 0;
$maggio_cc_riattualizzazione_perc_tutto = 0;
$giugno_cc_riattualizzazione_perc_tutto = 0;
$luglio_cc_riattualizzazione_perc_tutto = 0;
$agosto_cc_riattualizzazione_perc_tutto = 0;
$settembre_cc_riattualizzazione_perc_tutto = 0;
$ottobre_cc_riattualizzazione_perc_tutto = 0;
$novembre_cc_riattualizzazione_perc_tutto = 0;
$dicembre_cc_riattualizzazione_perc_tutto = 0;

$gennaio_cc_award_riattualizzato_tutto = 0;
$febbraio_cc_award_riattualizzato_tutto = 0;
$marzo_cc_award_riattualizzato_tutto = 0;
$aprile_cc_award_riattualizzato_tutto = 0;
$maggio_cc_award_riattualizzato_tutto = 0;
$giugno_cc_award_riattualizzato_tutto = 0;
$luglio_cc_award_riattualizzato_tutto = 0;
$agosto_cc_award_riattualizzato_tutto = 0;
$settembre_cc_award_riattualizzato_tutto = 0;
$ottobre_cc_award_riattualizzato_tutto = 0;
$novembre_cc_award_riattualizzato_tutto = 0;
$dicembre_cc_award_riattualizzato_tutto = 0;
$annuale_cc_award_riattualizzato_tutto = 0;

//CC Attivazioni

$gennaio_cc_award_attivazioni = 0;
$febbraio_cc_award_attivazioni = 0;
$marzo_cc_award_attivazioni = 0;
$aprile_cc_award_attivazioni = 0;
$maggio_cc_award_attivazioni = 0;
$giugno_cc_award_attivazioni = 0;
$luglio_cc_award_attivazioni = 0;
$agosto_cc_award_attivazioni = 0;
$settembre_cc_award_attivazioni = 0;
$ottobre_cc_award_attivazioni = 0;
$novembre_cc_award_attivazioni = 0;
$dicembre_cc_award_attivazioni = 0;
$annuale_cc_award_attivazioni = 0;

$gennaio_cc_riattualizzazione_perc_attivazioni = 0;
$febbraio_cc_riattualizzazione_perc_attivazioni = 0;
$marzo_cc_riattualizzazione_perc_attivazioni = 0;
$aprile_cc_riattualizzazione_perc_attivazioni = 0;
$maggio_cc_riattualizzazione_perc_attivazioni = 0;
$giugno_cc_riattualizzazione_perc_attivazioni = 0;
$luglio_cc_riattualizzazione_perc_attivazioni = 0;
$agosto_cc_riattualizzazione_perc_attivazioni = 0;
$settembre_cc_riattualizzazione_perc_attivazioni = 0;
$ottobre_cc_riattualizzazione_perc_attivazioni = 0;
$novembre_cc_riattualizzazione_perc_attivazioni = 0;
$dicembre_cc_riattualizzazione_perc_attivazioni = 0;

$gennaio_cc_award_riattualizzato_attivazioni = 0;
$febbraio_cc_award_riattualizzato_attivazioni = 0;
$marzo_cc_award_riattualizzato_attivazioni = 0;
$aprile_cc_award_riattualizzato_attivazioni = 0;
$maggio_cc_award_riattualizzato_attivazioni = 0;
$giugno_cc_award_riattualizzato_attivazioni = 0;
$luglio_cc_award_riattualizzato_attivazioni = 0;
$agosto_cc_award_riattualizzato_attivazioni = 0;
$settembre_cc_award_riattualizzato_attivazioni = 0;
$ottobre_cc_award_riattualizzato_attivazioni = 0;
$novembre_cc_award_riattualizzato_attivazioni = 0;
$dicembre_cc_award_riattualizzato_attivazioni = 0;
$annuale_cc_award_riattualizzato_attivazioni = 0;



//CD Totali

$gennaio_cd_award_tutto = 0;
$febbraio_cd_award_tutto = 0;
$marzo_cd_award_tutto = 0;
$aprile_cd_award_tutto = 0;
$maggio_cd_award_tutto = 0;
$giugno_cd_award_tutto = 0;
$luglio_cd_award_tutto = 0;
$agosto_cd_award_tutto = 0;
$settembre_cd_award_tutto = 0;
$ottobre_cd_award_tutto = 0;
$novembre_cd_award_tutto = 0;
$dicembre_cd_award_tutto = 0;
$annuale_cd_award_tutto = 0;

$gennaio_cd_riattualizzazione_perc_tutto = 0;
$febbraio_cd_riattualizzazione_perc_tutto = 0;
$marzo_cd_riattualizzazione_perc_tutto = 0;
$aprile_cd_riattualizzazione_perc_tutto = 0;
$maggio_cd_riattualizzazione_perc_tutto = 0;
$giugno_cd_riattualizzazione_perc_tutto = 0;
$luglio_cd_riattualizzazione_perc_tutto = 0;
$agosto_cd_riattualizzazione_perc_tutto = 0;
$settembre_cd_riattualizzazione_perc_tutto = 0;
$ottobre_cd_riattualizzazione_perc_tutto = 0;
$novembre_cd_riattualizzazione_perc_tutto = 0;
$dicembre_cd_riattualizzazione_perc_tutto = 0;

$gennaio_cd_award_riattualizzato_tutto = 0;
$febbraio_cd_award_riattualizzato_tutto = 0;
$marzo_cd_award_riattualizzato_tutto = 0;
$aprile_cd_award_riattualizzato_tutto = 0;
$maggio_cd_award_riattualizzato_tutto = 0;
$giugno_cd_award_riattualizzato_tutto = 0;
$luglio_cd_award_riattualizzato_tutto = 0;
$agosto_cd_award_riattualizzato_tutto = 0;
$settembre_cd_award_riattualizzato_tutto = 0;
$ottobre_cd_award_riattualizzato_tutto = 0;
$novembre_cd_award_riattualizzato_tutto = 0;
$dicembre_cd_award_riattualizzato_tutto = 0;
$annuale_cd_award_riattualizzato_tutto = 0;


//Polizze Totali

$gennaio_polizze_award_tutto = 0;
$febbraio_polizze_award_tutto = 0;
$marzo_polizze_award_tutto = 0;
$aprile_polizze_award_tutto = 0;
$maggio_polizze_award_tutto = 0;
$giugno_polizze_award_tutto = 0;
$luglio_polizze_award_tutto = 0;
$agosto_polizze_award_tutto = 0;
$settembre_polizze_award_tutto = 0;
$ottobre_polizze_award_tutto = 0;
$novembre_polizze_award_tutto = 0;
$dicembre_polizze_award_tutto = 0;
$annuale_polizze_award_tutto = 0;

$gennaio_polizze_riattualizzazione_perc_tutto = 0;
$febbraio_polizze_riattualizzazione_perc_tutto = 0;
$marzo_polizze_riattualizzazione_perc_tutto = 0;
$aprile_polizze_riattualizzazione_perc_tutto = 0;
$maggio_polizze_riattualizzazione_perc_tutto = 0;
$giugno_polizze_riattualizzazione_perc_tutto = 0;
$luglio_polizze_riattualizzazione_perc_tutto = 0;
$agosto_polizze_riattualizzazione_perc_tutto = 0;
$settembre_polizze_riattualizzazione_perc_tutto = 0;
$ottobre_polizze_riattualizzazione_perc_tutto = 0;
$novembre_polizze_riattualizzazione_perc_tutto = 0;
$dicembre_polizze_riattualizzazione_perc_tutto = 0;

$gennaio_polizze_award_riattualizzato_tutto = 0;
$febbraio_polizze_award_riattualizzato_tutto = 0;
$marzo_polizze_award_riattualizzato_tutto = 0;
$aprile_polizze_award_riattualizzato_tutto = 0;
$maggio_polizze_award_riattualizzato_tutto = 0;
$giugno_polizze_award_riattualizzato_tutto = 0;
$luglio_polizze_award_riattualizzato_tutto = 0;
$agosto_polizze_award_riattualizzato_tutto = 0;
$settembre_polizze_award_riattualizzato_tutto = 0;
$ottobre_polizze_award_riattualizzato_tutto = 0;
$novembre_polizze_award_riattualizzato_tutto = 0;
$dicembre_polizze_award_riattualizzato_tutto = 0;
$annuale_polizze_award_riattualizzato_tutto = 0;


$sql = "SELECT * FROM acta_obiettivi WHERE ob_tipologia_generale='award' AND ob_anno='$ob_anno' AND ob_scope='$ob_scope'";
$result = $conn->query($sql);

$array_tabella = array();

$result_num = mysqli_num_rows($result);
$i=1;

  while ($row = mysqli_fetch_assoc($result)) {
    $array_tabella[$i]['ob_prodotto'] = $row['ob_prodotto'];
    $array_tabella[$i]['ob_prodotto_categoria'] = $row['ob_prodotto_categoria'];
    $array_tabella[$i]['ob_tipologia_specifica'] = $row['ob_tipologia_specifica'];
    switch ($row['ob_mese']) {
    
        case 1:
            $array_tabella[$i]['ob_mese']='gennaio';
            break;

        case 2:
            $array_tabella[$i]['ob_mese']='febbraio';
            break;

        case 3:
            $array_tabella[$i]['ob_mese']='marzo';
            break;

        case 4:
            $array_tabella[$i]['ob_mese']='aprile';
            break;

        case 5:
            $array_tabella[$i]['ob_mese']='maggio';
            break;

        case 6:
            $array_tabella[$i]['ob_mese']='giugno';
            break;

        case 7:
            $array_tabella[$i]['ob_mese']='luglio';
            break;

        case 8:
            $array_tabella[$i]['ob_mese']='agosto';
            break;

        case 9:
            $array_tabella[$i]['ob_mese']='settembre';
            break;

        case 10:
            $array_tabella[$i]['ob_mese']='ottobre';
            break;

        case 11:
            $array_tabella[$i]['ob_mese']='novembre';
            break;

        case 12:
            $array_tabella[$i]['ob_mese']='dicembre';
            break;

        case 13:
            $array_tabella[$i]['ob_mese']='annuale';
            break;
    }
    
    $array_tabella[$i]['ob_value'] = $row['ob_value'];
    $i++;
}


foreach($array_tabella as $riga) {

    foreach($riga as $key => $value) {

        //dobbiamo costruire la variabile così: 
        //$mese - gennaio febbraio marzo ... annuale
        //$prodotto - pp cqs tfcp carte cc cd polizze
        //$tipologia_specifica - award riattualizzazione_perc award_riattualizzato
        //$prodotto_categoria - tutto standard mzd fa ...
        
        ${$riga['ob_mese'].'_'.$riga['ob_prodotto'].'_'.$riga['ob_tipologia_specifica'].'_'.$riga['ob_prodotto_categoria']} = $riga['ob_value'];      

       //console_log($key." -> ".$value);
 
        }
    
 }

 console_log("Gennaio pp award totale:" . $gennaio_pp_award_tutto);


// Funzioni utili


function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

function converti_cifra_in_euro_in_float($money)
{
    $cleanString = preg_replace('/([^0-9\.,])/i', '', $money);
    $onlyNumbersString = preg_replace('/([^0-9])/i', '', $money);

    $separatorsCountToBeErased = strlen($cleanString) - strlen($onlyNumbersString) - 1;

    $stringWithCommaOrDot = preg_replace('/([,\.])/', '', $cleanString, $separatorsCountToBeErased);
    $removedThousandSeparator = preg_replace('/(\.|,)(?=[0-9]{3,}$)/', '',  $stringWithCommaOrDot);

    return (float) str_replace(',', '.', $removedThousandSeparator);
}

function converti_float_in_cifra_in_euro($float)
{
    return number_format($float, 2, ',', '.');
}

function converti_float_in_intero($float)
{
    return number_format($float, 0, ',', '.');
}

function capitalizeString($string)
{

    $string = strtolower($string);
    return ucwords($string);
}

function converti_data_italiana_in_formato_sql($data_formato_italiano)
{
    $dataGiorno = substr($data_formato_italiano, 0, 2);
    $dataMese = substr($data_formato_italiano, 3, 2);
    $dataAnno = substr($data_formato_italiano, 6, 10);
    $data_formattata_sql = $dataAnno . "-" . $dataMese . "-" . $dataGiorno;
    return $data_formattata_sql;
}

function converti_data_sql_in_formato_italiano($data_formato_sql)
{
    $dataGiorno = substr($data_formato_sql, 8, 2);
    $dataMese = substr($data_formato_sql, 5, 2);
    $dataAnno = substr($data_formato_sql, 0, 4);
    $data_formattata_italiana = $dataGiorno . "/" . $dataMese . "/" . $dataAnno;
    return $data_formattata_italiana;
}

function converti_datetime_sql_in_formato_italiano($datetime_formato_sql)
{
    $time = strtotime($datetime_formato_sql);
    return date("d/m/Y H:i", $time);
}

function converti_percentuale_sql_in_formato_italiano($percentuale_formato_sql)
{
    $percentuale_formattazione_italiana_0 =  $percentuale_formato_sql;
    $percentuale_formattazione_italiana_1 =  number_format($percentuale_formattazione_italiana_0, 2, ',', '.');
    $percentuale_formattazione_italiana = $percentuale_formattazione_italiana_1 . "%";
    return $percentuale_formattazione_italiana;
}

function converti_percentuale_italiana_in_formato_sql($percentuale_formato_italiano)
{
    $percentuale_formattazione_sql_1 =  str_replace('%', '', $percentuale_formato_italiano);
    $percentuale_formattazione_sql =  str_replace(',', '.', $percentuale_formattazione_sql_1);
    return $percentuale_formattazione_sql;
}


$conn->close();
?>

<div id="container-ob-award" style="display:flex;">

    <div id="container-colonna-principale" style="border-right-style: groove;padding-right:10px;margin-top:62px;width: max-content;">

        <div id="container-pp-labels" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
            <div id="pp-tutto-label" style="font-weight:bold;">
                PP
            </div>
            <div id="pp-standard-label" style="font-weight:bold;">
                Standard
            </div>
            <div id="pp-mzd-label" style="font-weight:bold;">
                MZD
            </div>
            <div id="pp-fa-label" style="font-weight:bold;">
                FA
            </div>
        </div>

        <div id="container-cqs-labels" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
            <div id="cqs-tutto-label" style="font-weight:bold;">
                CQS
            </div>
            <div id="cqs-standard-label" style="font-weight:bold;">
                Standard
            </div>
            <div id="cqs-mzd-label" style="font-weight:bold;">
                MZD
            </div>
        </div>

        <div id="container-tfcp-labels" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
            <div id="tfcp-tutto-label" style="font-weight:bold;">
                TFCP TOT
            </div>
            <div id="tfcp-revolving-label" style="font-weight:bold;">
                TFCP REV
            </div>
        </div>

        <div id="container-carte-labels" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
            <div id="carte-tutto-label" style="font-weight:bold;">
                CARTA
            </div>
        </div>

        <div id="container-cc-labels" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
            <div id="cc-tutto-label" style="font-weight:bold;">
                C/C
            </div>
            <div id="cc-attivazioni-label" style="font-weight:bold;">
                C/C ATT. PRIM
            </div>
        </div>

        <div id="container-cd-labels" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
            <div id="cd-tutto-label" style="font-weight:bold;">
                C/DEP
            </div>
        </div>

        <div id="container-polizze-labels" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
            <div id="polizze-tutto-label" style="font-weight:bold;">
                POLIZZA LIB
            </div>
        </div>

    </div>

    <div id="container-tabelle-mensilita" style="display:flex;overflow-x: scroll;overflow-y: hidden;height:733px;">

        <div id="tabella-mensilita-colonna-gennaio" style="display:flex;flex-direction:column;padding-left:12px;padding-right:12px;text-align:center">
            <div id="mensilita-gennaio-label" style="font-weight:bold;padding-bottom:0.5rem;">
                <div id="mensilita-gennaio-label-generale">
                    Gennaio
                </div>
                <div id="mensilita-gennaio-label-secondarie" style="display:flex;justify-content:space-between;margin-left: 14px;margin-top:8px;">
                    <div id="mensilita-gennaio-label-ob-award">
                        Ob. Award
                    </div>
                    <div id="mensilita-gennaio-label-ob-award-riattualizzato" style="margin-left: 4px;">
                        Riattual.
                    </div>
                    <div id="mensilita-gennaio-label-ob-award-riattualizzato" style="padding-right:8px">
                        Ob. Riattual.
                    </div>
                </div>
            </div>

            <div id="gruppo-pp-gennaio-container" style="display:flex;">

                <div id="gruppo-pp-gennaio-ob-award" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-tutto-gennaio" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="01" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($gennaio_pp_award_tutto) ?>
                    </div>

                    <div id="pp-ob-award-standard-gennaio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-standard-gennaio-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="01" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($gennaio_pp_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-mzd-gennaio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-mzd-gennaio-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="01" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($gennaio_pp_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-fa-gennaio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-fa-gennaio-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="fa" mese="01" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($gennaio_pp_award_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-pp-gennaio-riattualizzazione-perc" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="pp-riattualizzazione-perc-standard-gennaio" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-standard-gennaio-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="01" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($gennaio_pp_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-mzd-gennaio" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-mzd-gennaio-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="01" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($gennaio_pp_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-fa-gennaio" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-fa-gennaio-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="fa" mese="01" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($gennaio_pp_riattualizzazione_perc_fa) ?>" class="margine-generale-input input-percentuale">
                    </div>
                </div>

                <div id="gruppo-pp-gennaio-ob-award-riattualizzati" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-riattualizzato-tutto-gennaio" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($gennaio_pp_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-standard-gennaio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-standard-gennaio-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="01" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($gennaio_pp_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-mzd-gennaio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-mzd-gennaio-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="01" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($gennaio_pp_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-fa-gennaio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-fa-gennaio-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="fa" mese="01" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($gennaio_pp_award_riattualizzato_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>
            </div>

            <div id="gruppo-cqs-gennaio-container" style="display:flex;">

                <div id="gruppo-cqs-gennaio-ob-award" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-tutto-gennaio" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($gennaio_cqs_award_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-standard-gennaio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-standard-gennaio-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="01" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($gennaio_cqs_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-mzd-gennaio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-mzd-gennaio-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="01" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($gennaio_cqs_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>

                <div id="gruppo-cqs-gennaio-riattualizzazione-perc" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="cqs-riattualizzazione-perc-standard-gennaio" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-standard-gennaio-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="01" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($gennaio_cqs_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cqs-riattualizzazione-perc-mzd-gennaio" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-mzd-gennaio-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="01" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($gennaio_cqs_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cqs-gennaio-ob-award-riattualizzati" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-riattualizzato-tutto-gennaio" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($gennaio_cqs_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-riattualizzato-standard-gennaio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-standard-gennaio-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="01" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($gennaio_cqs_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-riattualizzato-mzd-gennaio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-mzd-gennaio-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="01" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($gennaio_cqs_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-tfcp-gennaio-container" style="display:flex;">

                <div id="gruppo-tfcp-gennaio-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-tutto-gennaio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-tutto-gennaio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="01" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($gennaio_tfcp_award_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-revolving-gennaio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-revolving-gennaio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="revolving" mese="01" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($gennaio_tfcp_award_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-tfcp-gennaio-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">

                    <div id="tfcp-riattualizzazione-perc-tutto-gennaio" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-tutto-gennaio-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="01" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($gennaio_tfcp_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="tfcp-riattualizzazione-perc-revolving-gennaio" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-revolving-gennaio-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="revolving" mese="01" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($gennaio_tfcp_riattualizzazione_perc_revolving) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-tfcp-gennaio-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-riattualizzato-tutto-gennaio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-tutto-gennaio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="01" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($gennaio_tfcp_award_riattualizzato_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-riattualizzato-revolving-gennaio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-revolving-gennaio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="revolving" mese="01" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($gennaio_tfcp_award_riattualizzato_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-carte-gennaio-container" style="display:flex;justify-content: center;">

                <div id="gruppo-carte-gennaio-ob-award" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">
                    <div id="carte-ob-award-tutto-gennaio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-tutto-gennaio-input" prodotto="carte" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="01" value="<?php echo converti_float_in_intero($gennaio_carte_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-carte-gennaio-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="carte-riattualizzazione-perc-tutto-gennaio" style="font-weight:bold;">
                        <input type="text" id="carte-riattualizzazione-perc-tutto-gennaio-input" prodotto="carte" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="01" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($gennaio_carte_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-carte-gennaio-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">

                    <div id="carte-ob-award-riattualizzato-tutto-gennaio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-riattualizzato-tutto-gennaio-input" prodotto="carte" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="01" value="<?php echo converti_float_in_intero($gennaio_carte_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>

            <div id="gruppo-cc-gennaio-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cc-gennaio-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-tutto-gennaio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-tutto-gennaio-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="01" value="<?php echo converti_float_in_intero($gennaio_cc_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-attivazioni-gennaio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-attivazioni-gennaio-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="attivazioni" mese="01" value="<?php echo converti_float_in_intero($gennaio_cc_award_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-cc-gennaio-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cc-riattualizzazione-perc-tutto-gennaio" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-tutto-gennaio-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="01" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($gennaio_cc_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cc-riattualizzazione-perc-attivazioni-gennaio" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-attivazioni-gennaio-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="attivazioni" mese="01" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($gennaio_cc_riattualizzazione_perc_attivazioni) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cc-gennaio-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-riattualizzato-tutto-gennaio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-tutto-gennaio-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="01" value="<?php echo converti_float_in_intero($gennaio_cc_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-riattualizzato-attivazioni-gennaio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-attivazioni-gennaio-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="attivazioni" mese="01" value="<?php echo converti_float_in_intero($gennaio_cc_award_riattualizzato_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-cd-gennaio-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cd-gennaio-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cd-ob-award-tutto-gennaio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-tutto-gennaio-input" prodotto="cd" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="01" value="<?php echo converti_float_in_intero($gennaio_cd_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>
                </div>

                <div id="gruppo-cd-gennaio-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cd-riattualizzazione-perc-tutto-gennaio" style="font-weight:bold;">
                        <input type="text" id="cd-riattualizzazione-perc-tutto-gennaio-input" prodotto="cd" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="01" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($gennaio_cd_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cd-gennaio-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">

                    <div id="cd-ob-award-riattualizzato-tutto-gennaio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-riattualizzato-tutto-gennaio-input" prodotto="cd" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="01" value="<?php echo converti_float_in_intero($gennaio_cd_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-polizze-gennaio-container" style="display:flex;justify-content: center;margin-bottom:0.4rem">

                <div id=" gruppo-polizze-gennaio-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">
                    <div id="polizze-ob-award-tutto-gennaio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-tutto-gennaio-input" prodotto="polizze" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="01" value="<?php echo converti_float_in_intero($gennaio_polizze_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-polizze-gennaio-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-left:5px;margin-right:5px">

                    <div id="polizze-riattualizzazione-perc-tutto-gennaio" style="font-weight:bold;">
                        <input type="text" id="polizze-riattualizzazione-perc-tutto-gennaio-input" prodotto="polizze" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="01" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($gennaio_polizze_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>


                <div id="gruppo-polizze-gennaio-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">

                    <div id="polizze-ob-award-riattualizzato-tutto-gennaio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-riattualizzato-tutto-gennaio-input" prodotto="polizze" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="01" value="<?php echo converti_float_in_intero($gennaio_polizze_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>
        </div>

        <div id="tabella-mensilita-colonna-febbraio" style="display:flex;flex-direction:column;padding-left:12px;padding-right:12px;text-align:center">
            <div id="mensilita-febbraio-label" style="font-weight:bold;padding-bottom:0.5rem;">
                <div id="mensilita-febbraio-label-generale">
                    Febbraio
                </div>
                <div id="mensilita-febbraio-label-secondarie" style="display:flex;justify-content:space-between;margin-left: 14px;margin-top:8px;">
                    <div id="mensilita-febbraio-label-ob-award">
                        Ob. Award
                    </div>
                    <div id="mensilita-febbraio-label-ob-award-riattualizzato" style="margin-left: 4px;">
                        Riattual.
                    </div>
                    <div id="mensilita-febbraio-label-ob-award-riattualizzato" style="padding-right:8px">
                        Ob. Riattual.
                    </div>
                </div>
            </div>

            <div id="gruppo-pp-febbraio-container" style="display:flex;">

                <div id="gruppo-pp-febbraio-ob-award" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-tutto-febbraio" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="2" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($febbraio_pp_award_tutto) ?>
                    </div>

                    <div id="pp-ob-award-standard-febbraio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-standard-febbraio-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="2" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($febbraio_pp_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-mzd-febbraio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-mzd-febbraio-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="2" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($febbraio_pp_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-fa-febbraio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-fa-febbraio-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="fa" mese="2" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($febbraio_pp_award_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-pp-febbraio-riattualizzazione-perc" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="pp-riattualizzazione-perc-standard-febbraio" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-standard-febbraio-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="2" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($febbraio_pp_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-mzd-febbraio" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-mzd-febbraio-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="2" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($febbraio_pp_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-fa-febbraio" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-fa-febbraio-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="fa" mese="2" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($febbraio_pp_riattualizzazione_perc_fa) ?>" class="margine-generale-input input-percentuale">
                    </div>
                </div>

                <div id="gruppo-pp-febbraio-ob-award-riattualizzati" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-riattualizzato-tutto-febbraio" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($febbraio_pp_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-standard-febbraio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-standard-febbraio-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="2" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($febbraio_pp_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-mzd-febbraio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-mzd-febbraio-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="2" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($febbraio_pp_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-fa-febbraio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-fa-febbraio-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="fa" mese="2" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($febbraio_pp_award_riattualizzato_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>
            </div>

            <div id="gruppo-cqs-febbraio-container" style="display:flex;">

                <div id="gruppo-cqs-febbraio-ob-award" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-tutto-febbraio" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($febbraio_cqs_award_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-standard-febbraio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-standard-febbraio-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="2" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($febbraio_cqs_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-mzd-febbraio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-mzd-febbraio-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="2" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($febbraio_cqs_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>

                <div id="gruppo-cqs-febbraio-riattualizzazione-perc" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="cqs-riattualizzazione-perc-standard-febbraio" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-standard-febbraio-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="2" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($febbraio_cqs_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cqs-riattualizzazione-perc-mzd-febbraio" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-mzd-febbraio-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="2" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($febbraio_cqs_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cqs-febbraio-ob-award-riattualizzati" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-riattualizzato-tutto-febbraio" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($febbraio_cqs_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-riattualizzato-standard-febbraio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-standard-febbraio-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="2" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($febbraio_cqs_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-riattualizzato-mzd-febbraio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-mzd-febbraio-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="2" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($febbraio_cqs_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-tfcp-febbraio-container" style="display:flex;">

                <div id="gruppo-tfcp-febbraio-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-tutto-febbraio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-tutto-febbraio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="2" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($febbraio_tfcp_award_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-revolving-febbraio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-revolving-febbraio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="revolving" mese="2" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($febbraio_tfcp_award_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-tfcp-febbraio-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">

                    <div id="tfcp-riattualizzazione-perc-tutto-febbraio" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-tutto-febbraio-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="2" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($febbraio_tfcp_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="tfcp-riattualizzazione-perc-revolving-febbraio" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-revolving-febbraio-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="revolving" mese="2" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($febbraio_tfcp_riattualizzazione_perc_revolving) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-tfcp-febbraio-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-riattualizzato-tutto-febbraio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-tutto-febbraio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="2" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($febbraio_tfcp_award_riattualizzato_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-riattualizzato-revolving-febbraio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-revolving-febbraio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="revolving" mese="2" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($febbraio_tfcp_award_riattualizzato_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-carte-febbraio-container" style="display:flex;justify-content: center;">

                <div id="gruppo-carte-febbraio-ob-award" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">
                    <div id="carte-ob-award-tutto-febbraio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-tutto-febbraio-input" prodotto="carte" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="2" value="<?php echo converti_float_in_intero($febbraio_carte_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-carte-febbraio-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="carte-riattualizzazione-perc-tutto-febbraio" style="font-weight:bold;">
                        <input type="text" id="carte-riattualizzazione-perc-tutto-febbraio-input" prodotto="carte" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="2" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($febbraio_carte_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-carte-febbraio-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">

                    <div id="carte-ob-award-riattualizzato-tutto-febbraio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-riattualizzato-tutto-febbraio-input" prodotto="carte" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="2" value="<?php echo converti_float_in_intero($febbraio_carte_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>

            <div id="gruppo-cc-febbraio-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cc-febbraio-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-tutto-febbraio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-tutto-febbraio-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="2" value="<?php echo converti_float_in_intero($febbraio_cc_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-attivazioni-febbraio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-attivazioni-febbraio-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="attivazioni" mese="2" value="<?php echo converti_float_in_intero($febbraio_cc_award_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-cc-febbraio-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cc-riattualizzazione-perc-tutto-febbraio" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-tutto-febbraio-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="2" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($febbraio_cc_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cc-riattualizzazione-perc-attivazioni-febbraio" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-attivazioni-febbraio-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="attivazioni" mese="2" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($febbraio_cc_riattualizzazione_perc_attivazioni) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cc-febbraio-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-riattualizzato-tutto-febbraio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-tutto-febbraio-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="2" value="<?php echo converti_float_in_intero($febbraio_cc_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-riattualizzato-attivazioni-febbraio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-attivazioni-febbraio-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="attivazioni" mese="2" value="<?php echo converti_float_in_intero($febbraio_cc_award_riattualizzato_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-cd-febbraio-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cd-febbraio-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cd-ob-award-tutto-febbraio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-tutto-febbraio-input" prodotto="cd" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="2" value="<?php echo converti_float_in_intero($febbraio_cd_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>
                </div>

                <div id="gruppo-cd-febbraio-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cd-riattualizzazione-perc-tutto-febbraio" style="font-weight:bold;">
                        <input type="text" id="cd-riattualizzazione-perc-tutto-febbraio-input" prodotto="cd" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="2" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($febbraio_cd_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cd-febbraio-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">

                    <div id="cd-ob-award-riattualizzato-tutto-febbraio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-riattualizzato-tutto-febbraio-input" prodotto="cd" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="2" value="<?php echo converti_float_in_intero($febbraio_cd_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-polizze-febbraio-container" style="display:flex;justify-content: center;margin-bottom:0.4rem">

                <div id=" gruppo-polizze-febbraio-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">
                    <div id="polizze-ob-award-tutto-febbraio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-tutto-febbraio-input" prodotto="polizze" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="2" value="<?php echo converti_float_in_intero($febbraio_polizze_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-polizze-febbraio-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-left:5px;margin-right:5px">

                    <div id="polizze-riattualizzazione-perc-tutto-febbraio" style="font-weight:bold;">
                        <input type="text" id="polizze-riattualizzazione-perc-tutto-febbraio-input" prodotto="polizze" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="2" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($febbraio_polizze_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>


                <div id="gruppo-polizze-febbraio-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">

                    <div id="polizze-ob-award-riattualizzato-tutto-febbraio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-riattualizzato-tutto-febbraio-input" prodotto="polizze" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="2" value="<?php echo converti_float_in_intero($febbraio_polizze_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>
        </div>

        <div id="tabella-mensilita-colonna-marzo" style="display:flex;flex-direction:column;padding-left:12px;padding-right:12px;text-align:center">
            <div id="mensilita-marzo-label" style="font-weight:bold;padding-bottom:0.5rem;">
                <div id="mensilita-marzo-label-generale">
                    Marzo
                </div>
                <div id="mensilita-marzo-label-secondarie" style="display:flex;justify-content:space-between;margin-left: 14px;margin-top:8px;">
                    <div id="mensilita-marzo-label-ob-award">
                        Ob. Award
                    </div>
                    <div id="mensilita-marzo-label-ob-award-riattualizzato" style="margin-left: 4px;">
                        Riattual.
                    </div>
                    <div id="mensilita-marzo-label-ob-award-riattualizzato" style="padding-right:8px">
                        Ob. Riattual.
                    </div>
                </div>
            </div>

            <div id="gruppo-pp-marzo-container" style="display:flex;">

                <div id="gruppo-pp-marzo-ob-award" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-tutto-marzo" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="3" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($marzo_pp_award_tutto) ?>
                    </div>

                    <div id="pp-ob-award-standard-marzo" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-standard-marzo-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="3" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($marzo_pp_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-mzd-marzo" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-mzd-marzo-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="3" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($marzo_pp_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-fa-marzo" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-fa-marzo-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="fa" mese="3" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($marzo_pp_award_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-pp-marzo-riattualizzazione-perc" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="pp-riattualizzazione-perc-standard-marzo" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-standard-marzo-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="3" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($marzo_pp_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-mzd-marzo" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-mzd-marzo-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="3" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($marzo_pp_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-fa-marzo" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-fa-marzo-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="fa" mese="3" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($marzo_pp_riattualizzazione_perc_fa) ?>" class="margine-generale-input input-percentuale">
                    </div>
                </div>

                <div id="gruppo-pp-marzo-ob-award-riattualizzati" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-riattualizzato-tutto-marzo" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($marzo_pp_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-standard-marzo" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-standard-marzo-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="3" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($marzo_pp_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-mzd-marzo" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-mzd-marzo-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="3" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($marzo_pp_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-fa-marzo" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-fa-marzo-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="fa" mese="3" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($marzo_pp_award_riattualizzato_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>
            </div>

            <div id="gruppo-cqs-marzo-container" style="display:flex;">

                <div id="gruppo-cqs-marzo-ob-award" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-tutto-marzo" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($marzo_cqs_award_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-standard-marzo" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-standard-marzo-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="3" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($marzo_cqs_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-mzd-marzo" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-mzd-marzo-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="3" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($marzo_cqs_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>

                <div id="gruppo-cqs-marzo-riattualizzazione-perc" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="cqs-riattualizzazione-perc-standard-marzo" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-standard-marzo-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="3" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($marzo_cqs_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cqs-riattualizzazione-perc-mzd-marzo" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-mzd-marzo-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="3" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($marzo_cqs_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cqs-marzo-ob-award-riattualizzati" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-riattualizzato-tutto-marzo" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($marzo_cqs_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-riattualizzato-standard-marzo" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-standard-marzo-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="3" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($marzo_cqs_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-riattualizzato-mzd-marzo" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-mzd-marzo-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="3" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($marzo_cqs_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-tfcp-marzo-container" style="display:flex;">

                <div id="gruppo-tfcp-marzo-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-tutto-marzo" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-tutto-marzo-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="3" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($marzo_tfcp_award_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-revolving-marzo" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-revolving-marzo-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="revolving" mese="3" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($marzo_tfcp_award_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-tfcp-marzo-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">

                    <div id="tfcp-riattualizzazione-perc-tutto-marzo" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-tutto-marzo-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="3" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($marzo_tfcp_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="tfcp-riattualizzazione-perc-revolving-marzo" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-revolving-marzo-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="revolving" mese="3" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($marzo_tfcp_riattualizzazione_perc_revolving) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-tfcp-marzo-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-riattualizzato-tutto-marzo" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-tutto-marzo-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="3" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($marzo_tfcp_award_riattualizzato_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-riattualizzato-revolving-marzo" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-revolving-marzo-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="revolving" mese="3" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($marzo_tfcp_award_riattualizzato_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-carte-marzo-container" style="display:flex;justify-content: center;">

                <div id="gruppo-carte-marzo-ob-award" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">
                    <div id="carte-ob-award-tutto-marzo" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-tutto-marzo-input" prodotto="carte" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="3" value="<?php echo converti_float_in_intero($marzo_carte_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-carte-marzo-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="carte-riattualizzazione-perc-tutto-marzo" style="font-weight:bold;">
                        <input type="text" id="carte-riattualizzazione-perc-tutto-marzo-input" prodotto="carte" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="3" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($marzo_carte_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-carte-marzo-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">

                    <div id="carte-ob-award-riattualizzato-tutto-marzo" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-riattualizzato-tutto-marzo-input" prodotto="carte" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="3" value="<?php echo converti_float_in_intero($marzo_carte_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>

            <div id="gruppo-cc-marzo-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cc-marzo-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-tutto-marzo" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-tutto-marzo-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="3" value="<?php echo converti_float_in_intero($marzo_cc_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-attivazioni-marzo" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-attivazioni-marzo-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="attivazioni" mese="3" value="<?php echo converti_float_in_intero($marzo_cc_award_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-cc-marzo-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cc-riattualizzazione-perc-tutto-marzo" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-tutto-marzo-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="3" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($marzo_cc_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cc-riattualizzazione-perc-attivazioni-marzo" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-attivazioni-marzo-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="attivazioni" mese="3" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($marzo_cc_riattualizzazione_perc_attivazioni) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cc-marzo-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-riattualizzato-tutto-marzo" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-tutto-marzo-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="3" value="<?php echo converti_float_in_intero($marzo_cc_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-riattualizzato-attivazioni-marzo" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-attivazioni-marzo-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="attivazioni" mese="3" value="<?php echo converti_float_in_intero($marzo_cc_award_riattualizzato_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-cd-marzo-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cd-marzo-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cd-ob-award-tutto-marzo" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-tutto-marzo-input" prodotto="cd" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="3" value="<?php echo converti_float_in_intero($marzo_cd_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>
                </div>

                <div id="gruppo-cd-marzo-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cd-riattualizzazione-perc-tutto-marzo" style="font-weight:bold;">
                        <input type="text" id="cd-riattualizzazione-perc-tutto-marzo-input" prodotto="cd" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="3" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($marzo_cd_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cd-marzo-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">

                    <div id="cd-ob-award-riattualizzato-tutto-marzo" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-riattualizzato-tutto-marzo-input" prodotto="cd" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="3" value="<?php echo converti_float_in_intero($marzo_cd_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-polizze-marzo-container" style="display:flex;justify-content: center;margin-bottom:0.4rem">

                <div id=" gruppo-polizze-marzo-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">
                    <div id="polizze-ob-award-tutto-marzo" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-tutto-marzo-input" prodotto="polizze" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="3" value="<?php echo converti_float_in_intero($marzo_polizze_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-polizze-marzo-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-left:5px;margin-right:5px">

                    <div id="polizze-riattualizzazione-perc-tutto-marzo" style="font-weight:bold;">
                        <input type="text" id="polizze-riattualizzazione-perc-tutto-marzo-input" prodotto="polizze" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="3" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($marzo_polizze_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>


                <div id="gruppo-polizze-marzo-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">

                    <div id="polizze-ob-award-riattualizzato-tutto-marzo" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-riattualizzato-tutto-marzo-input" prodotto="polizze" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="3" value="<?php echo converti_float_in_intero($marzo_polizze_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>
        </div>

        <div id="tabella-mensilita-colonna-aprile" style="display:flex;flex-direction:column;padding-left:12px;padding-right:12px;text-align:center">
            <div id="mensilita-aprile-label" style="font-weight:bold;padding-bottom:0.5rem;">
                <div id="mensilita-aprile-label-generale">
                    Aprile
                </div>
                <div id="mensilita-aprile-label-secondarie" style="display:flex;justify-content:space-between;margin-left: 14px;margin-top:8px;">
                    <div id="mensilita-aprile-label-ob-award">
                        Ob. Award
                    </div>
                    <div id="mensilita-aprile-label-ob-award-riattualizzato" style="margin-left: 4px;">
                        Riattual.
                    </div>
                    <div id="mensilita-aprile-label-ob-award-riattualizzato" style="padding-right:8px">
                        Ob. Riattual.
                    </div>
                </div>
            </div>

            <div id="gruppo-pp-aprile-container" style="display:flex;">

                <div id="gruppo-pp-aprile-ob-award" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-tutto-aprile" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="4" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($aprile_pp_award_tutto) ?>
                    </div>

                    <div id="pp-ob-award-standard-aprile" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-standard-aprile-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="4" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($aprile_pp_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-mzd-aprile" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-mzd-aprile-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="4" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($aprile_pp_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-fa-aprile" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-fa-aprile-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="fa" mese="4" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($aprile_pp_award_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-pp-aprile-riattualizzazione-perc" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="pp-riattualizzazione-perc-standard-aprile" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-standard-aprile-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="4" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($aprile_pp_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-mzd-aprile" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-mzd-aprile-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="4" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($aprile_pp_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-fa-aprile" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-fa-aprile-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="fa" mese="4" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($aprile_pp_riattualizzazione_perc_fa) ?>" class="margine-generale-input input-percentuale">
                    </div>
                </div>

                <div id="gruppo-pp-aprile-ob-award-riattualizzati" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-riattualizzato-tutto-aprile" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($aprile_pp_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-standard-aprile" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-standard-aprile-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="4" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($aprile_pp_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-mzd-aprile" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-mzd-aprile-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="4" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($aprile_pp_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-fa-aprile" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-fa-aprile-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="fa" mese="4" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($aprile_pp_award_riattualizzato_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>
            </div>

            <div id="gruppo-cqs-aprile-container" style="display:flex;">

                <div id="gruppo-cqs-aprile-ob-award" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-tutto-aprile" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($aprile_cqs_award_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-standard-aprile" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-standard-aprile-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="4" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($aprile_cqs_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-mzd-aprile" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-mzd-aprile-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="4" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($aprile_cqs_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>

                <div id="gruppo-cqs-aprile-riattualizzazione-perc" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="cqs-riattualizzazione-perc-standard-aprile" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-standard-aprile-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="4" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($aprile_cqs_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cqs-riattualizzazione-perc-mzd-aprile" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-mzd-aprile-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="4" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($aprile_cqs_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cqs-aprile-ob-award-riattualizzati" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-riattualizzato-tutto-aprile" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($aprile_cqs_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-riattualizzato-standard-aprile" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-standard-aprile-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="4" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($aprile_cqs_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-riattualizzato-mzd-aprile" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-mzd-aprile-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="4" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($aprile_cqs_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-tfcp-aprile-container" style="display:flex;">

                <div id="gruppo-tfcp-aprile-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-tutto-aprile" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-tutto-aprile-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="4" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($aprile_tfcp_award_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-revolving-aprile" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-revolving-aprile-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="revolving" mese="4" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($aprile_tfcp_award_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-tfcp-aprile-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">

                    <div id="tfcp-riattualizzazione-perc-tutto-aprile" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-tutto-aprile-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="4" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($aprile_tfcp_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="tfcp-riattualizzazione-perc-revolving-aprile" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-revolving-aprile-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="revolving" mese="4" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($aprile_tfcp_riattualizzazione_perc_revolving) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-tfcp-aprile-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-riattualizzato-tutto-aprile" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-tutto-aprile-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="4" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($aprile_tfcp_award_riattualizzato_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-riattualizzato-revolving-aprile" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-revolving-aprile-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="revolving" mese="4" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($aprile_tfcp_award_riattualizzato_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-carte-aprile-container" style="display:flex;justify-content: center;">

                <div id="gruppo-carte-aprile-ob-award" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">
                    <div id="carte-ob-award-tutto-aprile" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-tutto-aprile-input" prodotto="carte" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="4" value="<?php echo converti_float_in_intero($aprile_carte_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-carte-aprile-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="carte-riattualizzazione-perc-tutto-aprile" style="font-weight:bold;">
                        <input type="text" id="carte-riattualizzazione-perc-tutto-aprile-input" prodotto="carte" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="4" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($aprile_carte_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-carte-aprile-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">

                    <div id="carte-ob-award-riattualizzato-tutto-aprile" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-riattualizzato-tutto-aprile-input" prodotto="carte" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="4" value="<?php echo converti_float_in_intero($aprile_carte_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>

            <div id="gruppo-cc-aprile-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cc-aprile-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-tutto-aprile" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-tutto-aprile-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="4" value="<?php echo converti_float_in_intero($aprile_cc_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-attivazioni-aprile" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-attivazioni-aprile-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="attivazioni" mese="4" value="<?php echo converti_float_in_intero($aprile_cc_award_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-cc-aprile-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cc-riattualizzazione-perc-tutto-aprile" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-tutto-aprile-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="4" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($aprile_cc_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cc-riattualizzazione-perc-attivazioni-aprile" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-attivazioni-aprile-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="attivazioni" mese="4" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($aprile_cc_riattualizzazione_perc_attivazioni) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cc-aprile-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-riattualizzato-tutto-aprile" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-tutto-aprile-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="4" value="<?php echo converti_float_in_intero($aprile_cc_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-riattualizzato-attivazioni-aprile" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-attivazioni-aprile-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="attivazioni" mese="4" value="<?php echo converti_float_in_intero($aprile_cc_award_riattualizzato_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-cd-aprile-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cd-aprile-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cd-ob-award-tutto-aprile" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-tutto-aprile-input" prodotto="cd" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="4" value="<?php echo converti_float_in_intero($aprile_cd_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>
                </div>

                <div id="gruppo-cd-aprile-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cd-riattualizzazione-perc-tutto-aprile" style="font-weight:bold;">
                        <input type="text" id="cd-riattualizzazione-perc-tutto-aprile-input" prodotto="cd" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="4" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($aprile_cd_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cd-aprile-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">

                    <div id="cd-ob-award-riattualizzato-tutto-aprile" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-riattualizzato-tutto-aprile-input" prodotto="cd" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="4" value="<?php echo converti_float_in_intero($aprile_cd_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-polizze-aprile-container" style="display:flex;justify-content: center;margin-bottom:0.4rem">

                <div id=" gruppo-polizze-aprile-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">
                    <div id="polizze-ob-award-tutto-aprile" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-tutto-aprile-input" prodotto="polizze" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="4" value="<?php echo converti_float_in_intero($aprile_polizze_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-polizze-aprile-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-left:5px;margin-right:5px">

                    <div id="polizze-riattualizzazione-perc-tutto-aprile" style="font-weight:bold;">
                        <input type="text" id="polizze-riattualizzazione-perc-tutto-aprile-input" prodotto="polizze" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="4" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($aprile_polizze_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>


                <div id="gruppo-polizze-aprile-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">

                    <div id="polizze-ob-award-riattualizzato-tutto-aprile" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-riattualizzato-tutto-aprile-input" prodotto="polizze" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="4" value="<?php echo converti_float_in_intero($aprile_polizze_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>
        </div>

        <div id="tabella-mensilita-colonna-maggio" style="display:flex;flex-direction:column;padding-left:12px;padding-right:12px;text-align:center">
            <div id="mensilita-maggio-label" style="font-weight:bold;padding-bottom:0.5rem;">
                <div id="mensilita-maggio-label-generale">
                    Maggio
                </div>
                <div id="mensilita-maggio-label-secondarie" style="display:flex;justify-content:space-between;margin-left: 14px;margin-top:8px;">
                    <div id="mensilita-maggio-label-ob-award">
                        Ob. Award
                    </div>
                    <div id="mensilita-maggio-label-ob-award-riattualizzato" style="margin-left: 4px;">
                        Riattual.
                    </div>
                    <div id="mensilita-maggio-label-ob-award-riattualizzato" style="padding-right:8px">
                        Ob. Riattual.
                    </div>
                </div>
            </div>

            <div id="gruppo-pp-maggio-container" style="display:flex;">

                <div id="gruppo-pp-maggio-ob-award" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-tutto-maggio" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="5" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($maggio_pp_award_tutto) ?>
                    </div>

                    <div id="pp-ob-award-standard-maggio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-standard-maggio-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="5" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($maggio_pp_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-mzd-maggio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-mzd-maggio-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="5" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($maggio_pp_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-fa-maggio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-fa-maggio-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="fa" mese="5" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($maggio_pp_award_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-pp-maggio-riattualizzazione-perc" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="pp-riattualizzazione-perc-standard-maggio" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-standard-maggio-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="5" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($maggio_pp_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-mzd-maggio" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-mzd-maggio-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="5" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($maggio_pp_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-fa-maggio" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-fa-maggio-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="fa" mese="5" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($maggio_pp_riattualizzazione_perc_fa) ?>" class="margine-generale-input input-percentuale">
                    </div>
                </div>

                <div id="gruppo-pp-maggio-ob-award-riattualizzati" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-riattualizzato-tutto-maggio" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($maggio_pp_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-standard-maggio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-standard-maggio-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="5" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($maggio_pp_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-mzd-maggio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-mzd-maggio-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="5" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($maggio_pp_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-fa-maggio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-fa-maggio-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="fa" mese="5" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($maggio_pp_award_riattualizzato_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>
            </div>

            <div id="gruppo-cqs-maggio-container" style="display:flex;">

                <div id="gruppo-cqs-maggio-ob-award" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-tutto-maggio" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($maggio_cqs_award_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-standard-maggio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-standard-maggio-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="5" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($maggio_cqs_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-mzd-maggio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-mzd-maggio-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="5" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($maggio_cqs_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>

                <div id="gruppo-cqs-maggio-riattualizzazione-perc" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="cqs-riattualizzazione-perc-standard-maggio" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-standard-maggio-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="5" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($maggio_cqs_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cqs-riattualizzazione-perc-mzd-maggio" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-mzd-maggio-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="5" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($maggio_cqs_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cqs-maggio-ob-award-riattualizzati" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-riattualizzato-tutto-maggio" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($maggio_cqs_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-riattualizzato-standard-maggio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-standard-maggio-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="5" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($maggio_cqs_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-riattualizzato-mzd-maggio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-mzd-maggio-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="5" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($maggio_cqs_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-tfcp-maggio-container" style="display:flex;">

                <div id="gruppo-tfcp-maggio-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-tutto-maggio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-tutto-maggio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="5" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($maggio_tfcp_award_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-revolving-maggio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-revolving-maggio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="revolving" mese="5" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($maggio_tfcp_award_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-tfcp-maggio-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">

                    <div id="tfcp-riattualizzazione-perc-tutto-maggio" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-tutto-maggio-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="5" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($maggio_tfcp_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="tfcp-riattualizzazione-perc-revolving-maggio" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-revolving-maggio-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="revolving" mese="5" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($maggio_tfcp_riattualizzazione_perc_revolving) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-tfcp-maggio-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-riattualizzato-tutto-maggio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-tutto-maggio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="5" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($maggio_tfcp_award_riattualizzato_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-riattualizzato-revolving-maggio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-revolving-maggio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="revolving" mese="5" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($maggio_tfcp_award_riattualizzato_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-carte-maggio-container" style="display:flex;justify-content: center;">

                <div id="gruppo-carte-maggio-ob-award" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">
                    <div id="carte-ob-award-tutto-maggio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-tutto-maggio-input" prodotto="carte" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="5" value="<?php echo converti_float_in_intero($maggio_carte_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-carte-maggio-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="carte-riattualizzazione-perc-tutto-maggio" style="font-weight:bold;">
                        <input type="text" id="carte-riattualizzazione-perc-tutto-maggio-input" prodotto="carte" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="5" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($maggio_carte_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-carte-maggio-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">

                    <div id="carte-ob-award-riattualizzato-tutto-maggio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-riattualizzato-tutto-maggio-input" prodotto="carte" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="5" value="<?php echo converti_float_in_intero($maggio_carte_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>

            <div id="gruppo-cc-maggio-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cc-maggio-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-tutto-maggio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-tutto-maggio-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="5" value="<?php echo converti_float_in_intero($maggio_cc_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-attivazioni-maggio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-attivazioni-maggio-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="attivazioni" mese="5" value="<?php echo converti_float_in_intero($maggio_cc_award_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-cc-maggio-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cc-riattualizzazione-perc-tutto-maggio" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-tutto-maggio-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="5" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($maggio_cc_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cc-riattualizzazione-perc-attivazioni-maggio" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-attivazioni-maggio-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="attivazioni" mese="5" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($maggio_cc_riattualizzazione_perc_attivazioni) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cc-maggio-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-riattualizzato-tutto-maggio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-tutto-maggio-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="5" value="<?php echo converti_float_in_intero($maggio_cc_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-riattualizzato-attivazioni-maggio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-attivazioni-maggio-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="attivazioni" mese="5" value="<?php echo converti_float_in_intero($maggio_cc_award_riattualizzato_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-cd-maggio-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cd-maggio-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cd-ob-award-tutto-maggio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-tutto-maggio-input" prodotto="cd" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="5" value="<?php echo converti_float_in_intero($maggio_cd_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>
                </div>

                <div id="gruppo-cd-maggio-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cd-riattualizzazione-perc-tutto-maggio" style="font-weight:bold;">
                        <input type="text" id="cd-riattualizzazione-perc-tutto-maggio-input" prodotto="cd" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="5" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($maggio_cd_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cd-maggio-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">

                    <div id="cd-ob-award-riattualizzato-tutto-maggio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-riattualizzato-tutto-maggio-input" prodotto="cd" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="5" value="<?php echo converti_float_in_intero($maggio_cd_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-polizze-maggio-container" style="display:flex;justify-content: center;margin-bottom:0.4rem">

                <div id=" gruppo-polizze-maggio-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">
                    <div id="polizze-ob-award-tutto-maggio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-tutto-maggio-input" prodotto="polizze" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="5" value="<?php echo converti_float_in_intero($maggio_polizze_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-polizze-maggio-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-left:5px;margin-right:5px">

                    <div id="polizze-riattualizzazione-perc-tutto-maggio" style="font-weight:bold;">
                        <input type="text" id="polizze-riattualizzazione-perc-tutto-maggio-input" prodotto="polizze" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="5" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($maggio_polizze_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>


                <div id="gruppo-polizze-maggio-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">

                    <div id="polizze-ob-award-riattualizzato-tutto-maggio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-riattualizzato-tutto-maggio-input" prodotto="polizze" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="5" value="<?php echo converti_float_in_intero($maggio_polizze_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>
        </div>

        <div id="tabella-mensilita-colonna-giugno" style="display:flex;flex-direction:column;padding-left:12px;padding-right:12px;text-align:center">
            <div id="mensilita-giugno-label" style="font-weight:bold;padding-bottom:0.5rem;">
                <div id="mensilita-giugno-label-generale">
                    Giugno
                </div>
                <div id="mensilita-giugno-label-secondarie" style="display:flex;justify-content:space-between;margin-left: 14px;margin-top:8px;">
                    <div id="mensilita-giugno-label-ob-award">
                        Ob. Award
                    </div>
                    <div id="mensilita-giugno-label-ob-award-riattualizzato" style="margin-left: 4px;">
                        Riattual.
                    </div>
                    <div id="mensilita-giugno-label-ob-award-riattualizzato" style="padding-right:8px">
                        Ob. Riattual.
                    </div>
                </div>
            </div>

            <div id="gruppo-pp-giugno-container" style="display:flex;">

                <div id="gruppo-pp-giugno-ob-award" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-tutto-giugno" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="6" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($giugno_pp_award_tutto) ?>
                    </div>

                    <div id="pp-ob-award-standard-giugno" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-standard-giugno-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="6" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($giugno_pp_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-mzd-giugno" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-mzd-giugno-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="6" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($giugno_pp_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-fa-giugno" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-fa-giugno-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="fa" mese="6" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($giugno_pp_award_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-pp-giugno-riattualizzazione-perc" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="pp-riattualizzazione-perc-standard-giugno" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-standard-giugno-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="6" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($giugno_pp_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-mzd-giugno" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-mzd-giugno-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="6" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($giugno_pp_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-fa-giugno" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-fa-giugno-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="fa" mese="6" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($giugno_pp_riattualizzazione_perc_fa) ?>" class="margine-generale-input input-percentuale">
                    </div>
                </div>

                <div id="gruppo-pp-giugno-ob-award-riattualizzati" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-riattualizzato-tutto-giugno" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($giugno_pp_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-standard-giugno" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-standard-giugno-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="6" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($giugno_pp_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-mzd-giugno" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-mzd-giugno-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="6" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($giugno_pp_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-fa-giugno" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-fa-giugno-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="fa" mese="6" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($giugno_pp_award_riattualizzato_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>
            </div>

            <div id="gruppo-cqs-giugno-container" style="display:flex;">

                <div id="gruppo-cqs-giugno-ob-award" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-tutto-giugno" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($giugno_cqs_award_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-standard-giugno" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-standard-giugno-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="6" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($giugno_cqs_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-mzd-giugno" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-mzd-giugno-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="6" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($giugno_cqs_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>

                <div id="gruppo-cqs-giugno-riattualizzazione-perc" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="cqs-riattualizzazione-perc-standard-giugno" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-standard-giugno-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="6" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($giugno_cqs_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cqs-riattualizzazione-perc-mzd-giugno" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-mzd-giugno-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="6" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($giugno_cqs_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cqs-giugno-ob-award-riattualizzati" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-riattualizzato-tutto-giugno" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($giugno_cqs_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-riattualizzato-standard-giugno" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-standard-giugno-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="6" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($giugno_cqs_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-riattualizzato-mzd-giugno" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-mzd-giugno-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="6" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($giugno_cqs_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-tfcp-giugno-container" style="display:flex;">

                <div id="gruppo-tfcp-giugno-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-tutto-giugno" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-tutto-giugno-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="6" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($giugno_tfcp_award_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-revolving-giugno" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-revolving-giugno-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="revolving" mese="6" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($giugno_tfcp_award_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-tfcp-giugno-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">

                    <div id="tfcp-riattualizzazione-perc-tutto-giugno" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-tutto-giugno-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="6" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($giugno_tfcp_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="tfcp-riattualizzazione-perc-revolving-giugno" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-revolving-giugno-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="revolving" mese="6" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($giugno_tfcp_riattualizzazione_perc_revolving) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-tfcp-giugno-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-riattualizzato-tutto-giugno" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-tutto-giugno-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="6" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($giugno_tfcp_award_riattualizzato_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-riattualizzato-revolving-giugno" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-revolving-giugno-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="revolving" mese="6" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($giugno_tfcp_award_riattualizzato_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-carte-giugno-container" style="display:flex;justify-content: center;">

                <div id="gruppo-carte-giugno-ob-award" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">
                    <div id="carte-ob-award-tutto-giugno" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-tutto-giugno-input" prodotto="carte" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="6" value="<?php echo converti_float_in_intero($giugno_carte_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-carte-giugno-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="carte-riattualizzazione-perc-tutto-giugno" style="font-weight:bold;">
                        <input type="text" id="carte-riattualizzazione-perc-tutto-giugno-input" prodotto="carte" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="6" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($giugno_carte_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-carte-giugno-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">

                    <div id="carte-ob-award-riattualizzato-tutto-giugno" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-riattualizzato-tutto-giugno-input" prodotto="carte" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="6" value="<?php echo converti_float_in_intero($giugno_carte_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>

            <div id="gruppo-cc-giugno-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cc-giugno-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-tutto-giugno" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-tutto-giugno-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="6" value="<?php echo converti_float_in_intero($giugno_cc_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-attivazioni-giugno" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-attivazioni-giugno-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="attivazioni" mese="6" value="<?php echo converti_float_in_intero($giugno_cc_award_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-cc-giugno-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cc-riattualizzazione-perc-tutto-giugno" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-tutto-giugno-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="6" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($giugno_cc_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cc-riattualizzazione-perc-attivazioni-giugno" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-attivazioni-giugno-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="attivazioni" mese="6" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($giugno_cc_riattualizzazione_perc_attivazioni) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cc-giugno-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-riattualizzato-tutto-giugno" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-tutto-giugno-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="6" value="<?php echo converti_float_in_intero($giugno_cc_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-riattualizzato-attivazioni-giugno" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-attivazioni-giugno-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="attivazioni" mese="6" value="<?php echo converti_float_in_intero($giugno_cc_award_riattualizzato_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-cd-giugno-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cd-giugno-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cd-ob-award-tutto-giugno" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-tutto-giugno-input" prodotto="cd" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="6" value="<?php echo converti_float_in_intero($giugno_cd_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>
                </div>

                <div id="gruppo-cd-giugno-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cd-riattualizzazione-perc-tutto-giugno" style="font-weight:bold;">
                        <input type="text" id="cd-riattualizzazione-perc-tutto-giugno-input" prodotto="cd" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="6" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($giugno_cd_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cd-giugno-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">

                    <div id="cd-ob-award-riattualizzato-tutto-giugno" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-riattualizzato-tutto-giugno-input" prodotto="cd" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="6" value="<?php echo converti_float_in_intero($giugno_cd_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-polizze-giugno-container" style="display:flex;justify-content: center;margin-bottom:0.4rem">

                <div id=" gruppo-polizze-giugno-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">
                    <div id="polizze-ob-award-tutto-giugno" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-tutto-giugno-input" prodotto="polizze" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="6" value="<?php echo converti_float_in_intero($giugno_polizze_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-polizze-giugno-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-left:5px;margin-right:5px">

                    <div id="polizze-riattualizzazione-perc-tutto-giugno" style="font-weight:bold;">
                        <input type="text" id="polizze-riattualizzazione-perc-tutto-giugno-input" prodotto="polizze" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="6" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($giugno_polizze_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>


                <div id="gruppo-polizze-giugno-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">

                    <div id="polizze-ob-award-riattualizzato-tutto-giugno" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-riattualizzato-tutto-giugno-input" prodotto="polizze" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="6" value="<?php echo converti_float_in_intero($giugno_polizze_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>
        </div>

        <div id="tabella-mensilita-colonna-luglio" style="display:flex;flex-direction:column;padding-left:12px;padding-right:12px;text-align:center">
            <div id="mensilita-luglio-label" style="font-weight:bold;padding-bottom:0.5rem;">
                <div id="mensilita-luglio-label-generale">
                    Luglio
                </div>
                <div id="mensilita-luglio-label-secondarie" style="display:flex;justify-content:space-between;margin-left: 14px;margin-top:8px;">
                    <div id="mensilita-luglio-label-ob-award">
                        Ob. Award
                    </div>
                    <div id="mensilita-luglio-label-ob-award-riattualizzato" style="margin-left: 4px;">
                        Riattual.
                    </div>
                    <div id="mensilita-luglio-label-ob-award-riattualizzato" style="padding-right:8px">
                        Ob. Riattual.
                    </div>
                </div>
            </div>

            <div id="gruppo-pp-luglio-container" style="display:flex;">

                <div id="gruppo-pp-luglio-ob-award" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-tutto-luglio" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="7" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($luglio_pp_award_tutto) ?>
                    </div>

                    <div id="pp-ob-award-standard-luglio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-standard-luglio-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="7" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($luglio_pp_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-mzd-luglio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-mzd-luglio-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="7" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($luglio_pp_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-fa-luglio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-fa-luglio-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="fa" mese="7" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($luglio_pp_award_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-pp-luglio-riattualizzazione-perc" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="pp-riattualizzazione-perc-standard-luglio" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-standard-luglio-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="7" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($luglio_pp_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-mzd-luglio" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-mzd-luglio-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="7" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($luglio_pp_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-fa-luglio" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-fa-luglio-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="fa" mese="7" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($luglio_pp_riattualizzazione_perc_fa) ?>" class="margine-generale-input input-percentuale">
                    </div>
                </div>

                <div id="gruppo-pp-luglio-ob-award-riattualizzati" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-riattualizzato-tutto-luglio" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($luglio_pp_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-standard-luglio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-standard-luglio-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="7" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($luglio_pp_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-mzd-luglio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-mzd-luglio-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="7" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($luglio_pp_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-fa-luglio" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-fa-luglio-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="fa" mese="7" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($luglio_pp_award_riattualizzato_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>
            </div>

            <div id="gruppo-cqs-luglio-container" style="display:flex;">

                <div id="gruppo-cqs-luglio-ob-award" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-tutto-luglio" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($luglio_cqs_award_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-standard-luglio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-standard-luglio-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="7" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($luglio_cqs_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-mzd-luglio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-mzd-luglio-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="7" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($luglio_cqs_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>

                <div id="gruppo-cqs-luglio-riattualizzazione-perc" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="cqs-riattualizzazione-perc-standard-luglio" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-standard-luglio-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="7" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($luglio_cqs_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cqs-riattualizzazione-perc-mzd-luglio" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-mzd-luglio-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="7" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($luglio_cqs_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cqs-luglio-ob-award-riattualizzati" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-riattualizzato-tutto-luglio" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($luglio_cqs_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-riattualizzato-standard-luglio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-standard-luglio-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="7" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($luglio_cqs_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-riattualizzato-mzd-luglio" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-mzd-luglio-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="7" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($luglio_cqs_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-tfcp-luglio-container" style="display:flex;">

                <div id="gruppo-tfcp-luglio-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-tutto-luglio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-tutto-luglio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="7" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($luglio_tfcp_award_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-revolving-luglio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-revolving-luglio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="revolving" mese="7" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($luglio_tfcp_award_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-tfcp-luglio-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">

                    <div id="tfcp-riattualizzazione-perc-tutto-luglio" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-tutto-luglio-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="7" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($luglio_tfcp_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="tfcp-riattualizzazione-perc-revolving-luglio" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-revolving-luglio-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="revolving" mese="7" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($luglio_tfcp_riattualizzazione_perc_revolving) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-tfcp-luglio-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-riattualizzato-tutto-luglio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-tutto-luglio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="7" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($luglio_tfcp_award_riattualizzato_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-riattualizzato-revolving-luglio" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-revolving-luglio-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="revolving" mese="7" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($luglio_tfcp_award_riattualizzato_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-carte-luglio-container" style="display:flex;justify-content: center;">

                <div id="gruppo-carte-luglio-ob-award" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">
                    <div id="carte-ob-award-tutto-luglio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-tutto-luglio-input" prodotto="carte" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="7" value="<?php echo converti_float_in_intero($luglio_carte_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-carte-luglio-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="carte-riattualizzazione-perc-tutto-luglio" style="font-weight:bold;">
                        <input type="text" id="carte-riattualizzazione-perc-tutto-luglio-input" prodotto="carte" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="7" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($luglio_carte_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-carte-luglio-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">

                    <div id="carte-ob-award-riattualizzato-tutto-luglio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-riattualizzato-tutto-luglio-input" prodotto="carte" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="7" value="<?php echo converti_float_in_intero($luglio_carte_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>

            <div id="gruppo-cc-luglio-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cc-luglio-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-tutto-luglio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-tutto-luglio-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="7" value="<?php echo converti_float_in_intero($luglio_cc_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-attivazioni-luglio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-attivazioni-luglio-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="attivazioni" mese="7" value="<?php echo converti_float_in_intero($luglio_cc_award_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-cc-luglio-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cc-riattualizzazione-perc-tutto-luglio" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-tutto-luglio-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="7" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($luglio_cc_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cc-riattualizzazione-perc-attivazioni-luglio" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-attivazioni-luglio-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="attivazioni" mese="7" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($luglio_cc_riattualizzazione_perc_attivazioni) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cc-luglio-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-riattualizzato-tutto-luglio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-tutto-luglio-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="7" value="<?php echo converti_float_in_intero($luglio_cc_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-riattualizzato-attivazioni-luglio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-attivazioni-luglio-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="attivazioni" mese="7" value="<?php echo converti_float_in_intero($luglio_cc_award_riattualizzato_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-cd-luglio-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cd-luglio-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cd-ob-award-tutto-luglio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-tutto-luglio-input" prodotto="cd" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="7" value="<?php echo converti_float_in_intero($luglio_cd_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>
                </div>

                <div id="gruppo-cd-luglio-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cd-riattualizzazione-perc-tutto-luglio" style="font-weight:bold;">
                        <input type="text" id="cd-riattualizzazione-perc-tutto-luglio-input" prodotto="cd" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="7" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($luglio_cd_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cd-luglio-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">

                    <div id="cd-ob-award-riattualizzato-tutto-luglio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-riattualizzato-tutto-luglio-input" prodotto="cd" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="7" value="<?php echo converti_float_in_intero($luglio_cd_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-polizze-luglio-container" style="display:flex;justify-content: center;margin-bottom:0.4rem">

                <div id=" gruppo-polizze-luglio-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">
                    <div id="polizze-ob-award-tutto-luglio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-tutto-luglio-input" prodotto="polizze" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="7" value="<?php echo converti_float_in_intero($luglio_polizze_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-polizze-luglio-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-left:5px;margin-right:5px">

                    <div id="polizze-riattualizzazione-perc-tutto-luglio" style="font-weight:bold;">
                        <input type="text" id="polizze-riattualizzazione-perc-tutto-luglio-input" prodotto="polizze" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="7" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($luglio_polizze_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>


                <div id="gruppo-polizze-luglio-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">

                    <div id="polizze-ob-award-riattualizzato-tutto-luglio" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-riattualizzato-tutto-luglio-input" prodotto="polizze" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="7" value="<?php echo converti_float_in_intero($luglio_polizze_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>
        </div>

        <div id="tabella-mensilita-colonna-agosto" style="display:flex;flex-direction:column;padding-left:12px;padding-right:12px;text-align:center">
            <div id="mensilita-agosto-label" style="font-weight:bold;padding-bottom:0.5rem;">
                <div id="mensilita-agosto-label-generale">
                    Agosto
                </div>
                <div id="mensilita-agosto-label-secondarie" style="display:flex;justify-content:space-between;margin-left: 14px;margin-top:8px;">
                    <div id="mensilita-agosto-label-ob-award">
                        Ob. Award
                    </div>
                    <div id="mensilita-agosto-label-ob-award-riattualizzato" style="margin-left: 4px;">
                        Riattual.
                    </div>
                    <div id="mensilita-agosto-label-ob-award-riattualizzato" style="padding-right:8px">
                        Ob. Riattual.
                    </div>
                </div>
            </div>

            <div id="gruppo-pp-agosto-container" style="display:flex;">

                <div id="gruppo-pp-agosto-ob-award" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-tutto-agosto" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="8" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($agosto_pp_award_tutto) ?>
                    </div>

                    <div id="pp-ob-award-standard-agosto" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-standard-agosto-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="8" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($agosto_pp_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-mzd-agosto" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-mzd-agosto-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="8" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($agosto_pp_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-fa-agosto" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-fa-agosto-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="fa" mese="8" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($agosto_pp_award_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-pp-agosto-riattualizzazione-perc" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="pp-riattualizzazione-perc-standard-agosto" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-standard-agosto-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="8" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($agosto_pp_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-mzd-agosto" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-mzd-agosto-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="8" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($agosto_pp_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-fa-agosto" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-fa-agosto-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="fa" mese="8" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($agosto_pp_riattualizzazione_perc_fa) ?>" class="margine-generale-input input-percentuale">
                    </div>
                </div>

                <div id="gruppo-pp-agosto-ob-award-riattualizzati" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-riattualizzato-tutto-agosto" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($agosto_pp_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-standard-agosto" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-standard-agosto-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="8" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($agosto_pp_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-mzd-agosto" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-mzd-agosto-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="8" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($agosto_pp_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-fa-agosto" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-fa-agosto-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="fa" mese="8" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($agosto_pp_award_riattualizzato_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>
            </div>

            <div id="gruppo-cqs-agosto-container" style="display:flex;">

                <div id="gruppo-cqs-agosto-ob-award" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-tutto-agosto" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($agosto_cqs_award_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-standard-agosto" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-standard-agosto-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="8" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($agosto_cqs_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-mzd-agosto" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-mzd-agosto-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="8" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($agosto_cqs_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>

                <div id="gruppo-cqs-agosto-riattualizzazione-perc" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="cqs-riattualizzazione-perc-standard-agosto" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-standard-agosto-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="8" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($agosto_cqs_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cqs-riattualizzazione-perc-mzd-agosto" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-mzd-agosto-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="8" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($agosto_cqs_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cqs-agosto-ob-award-riattualizzati" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-riattualizzato-tutto-agosto" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($agosto_cqs_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-riattualizzato-standard-agosto" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-standard-agosto-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="8" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($agosto_cqs_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-riattualizzato-mzd-agosto" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-mzd-agosto-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="8" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($agosto_cqs_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-tfcp-agosto-container" style="display:flex;">

                <div id="gruppo-tfcp-agosto-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-tutto-agosto" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-tutto-agosto-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="8" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($agosto_tfcp_award_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-revolving-agosto" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-revolving-agosto-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="revolving" mese="8" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($agosto_tfcp_award_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-tfcp-agosto-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">

                    <div id="tfcp-riattualizzazione-perc-tutto-agosto" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-tutto-agosto-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="8" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($agosto_tfcp_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="tfcp-riattualizzazione-perc-revolving-agosto" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-revolving-agosto-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="revolving" mese="8" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($agosto_tfcp_riattualizzazione_perc_revolving) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-tfcp-agosto-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-riattualizzato-tutto-agosto" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-tutto-agosto-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="8" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($agosto_tfcp_award_riattualizzato_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-riattualizzato-revolving-agosto" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-revolving-agosto-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="revolving" mese="8" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($agosto_tfcp_award_riattualizzato_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-carte-agosto-container" style="display:flex;justify-content: center;">

                <div id="gruppo-carte-agosto-ob-award" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">
                    <div id="carte-ob-award-tutto-agosto" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-tutto-agosto-input" prodotto="carte" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="8" value="<?php echo converti_float_in_intero($agosto_carte_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-carte-agosto-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="carte-riattualizzazione-perc-tutto-agosto" style="font-weight:bold;">
                        <input type="text" id="carte-riattualizzazione-perc-tutto-agosto-input" prodotto="carte" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="8" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($agosto_carte_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-carte-agosto-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">

                    <div id="carte-ob-award-riattualizzato-tutto-agosto" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-riattualizzato-tutto-agosto-input" prodotto="carte" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="8" value="<?php echo converti_float_in_intero($agosto_carte_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>

            <div id="gruppo-cc-agosto-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cc-agosto-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-tutto-agosto" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-tutto-agosto-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="8" value="<?php echo converti_float_in_intero($agosto_cc_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-attivazioni-agosto" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-attivazioni-agosto-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="attivazioni" mese="8" value="<?php echo converti_float_in_intero($agosto_cc_award_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-cc-agosto-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cc-riattualizzazione-perc-tutto-agosto" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-tutto-agosto-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="8" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($agosto_cc_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cc-riattualizzazione-perc-attivazioni-agosto" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-attivazioni-agosto-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="attivazioni" mese="8" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($agosto_cc_riattualizzazione_perc_attivazioni) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cc-agosto-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-riattualizzato-tutto-agosto" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-tutto-agosto-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="8" value="<?php echo converti_float_in_intero($agosto_cc_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-riattualizzato-attivazioni-agosto" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-attivazioni-agosto-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="attivazioni" mese="8" value="<?php echo converti_float_in_intero($agosto_cc_award_riattualizzato_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-cd-agosto-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cd-agosto-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cd-ob-award-tutto-agosto" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-tutto-agosto-input" prodotto="cd" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="8" value="<?php echo converti_float_in_intero($agosto_cd_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>
                </div>

                <div id="gruppo-cd-agosto-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cd-riattualizzazione-perc-tutto-agosto" style="font-weight:bold;">
                        <input type="text" id="cd-riattualizzazione-perc-tutto-agosto-input" prodotto="cd" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="8" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($agosto_cd_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cd-agosto-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">

                    <div id="cd-ob-award-riattualizzato-tutto-agosto" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-riattualizzato-tutto-agosto-input" prodotto="cd" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="8" value="<?php echo converti_float_in_intero($agosto_cd_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-polizze-agosto-container" style="display:flex;justify-content: center;margin-bottom:0.4rem">

                <div id=" gruppo-polizze-agosto-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">
                    <div id="polizze-ob-award-tutto-agosto" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-tutto-agosto-input" prodotto="polizze" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="8" value="<?php echo converti_float_in_intero($agosto_polizze_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-polizze-agosto-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-left:5px;margin-right:5px">

                    <div id="polizze-riattualizzazione-perc-tutto-agosto" style="font-weight:bold;">
                        <input type="text" id="polizze-riattualizzazione-perc-tutto-agosto-input" prodotto="polizze" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="8" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($agosto_polizze_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>


                <div id="gruppo-polizze-agosto-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">

                    <div id="polizze-ob-award-riattualizzato-tutto-agosto" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-riattualizzato-tutto-agosto-input" prodotto="polizze" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="8" value="<?php echo converti_float_in_intero($agosto_polizze_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>
        </div>

        <div id="tabella-mensilita-colonna-settembre" style="display:flex;flex-direction:column;padding-left:12px;padding-right:12px;text-align:center">
            <div id="mensilita-settembre-label" style="font-weight:bold;padding-bottom:0.5rem;">
                <div id="mensilita-settembre-label-generale">
                    Settembre
                </div>
                <div id="mensilita-settembre-label-secondarie" style="display:flex;justify-content:space-between;margin-left: 14px;margin-top:8px;">
                    <div id="mensilita-settembre-label-ob-award">
                        Ob. Award
                    </div>
                    <div id="mensilita-settembre-label-ob-award-riattualizzato" style="margin-left: 4px;">
                        Riattual.
                    </div>
                    <div id="mensilita-settembre-label-ob-award-riattualizzato" style="padding-right:8px">
                        Ob. Riattual.
                    </div>
                </div>
            </div>

            <div id="gruppo-pp-settembre-container" style="display:flex;">

                <div id="gruppo-pp-settembre-ob-award" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-tutto-settembre" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="9" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($settembre_pp_award_tutto) ?>
                    </div>

                    <div id="pp-ob-award-standard-settembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-standard-settembre-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="9" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($settembre_pp_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-mzd-settembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-mzd-settembre-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="9" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($settembre_pp_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-fa-settembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-fa-settembre-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="fa" mese="9" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($settembre_pp_award_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-pp-settembre-riattualizzazione-perc" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="pp-riattualizzazione-perc-standard-settembre" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-standard-settembre-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="9" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($settembre_pp_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-mzd-settembre" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-mzd-settembre-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="9" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($settembre_pp_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-fa-settembre" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-fa-settembre-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="fa" mese="9" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($settembre_pp_riattualizzazione_perc_fa) ?>" class="margine-generale-input input-percentuale">
                    </div>
                </div>

                <div id="gruppo-pp-settembre-ob-award-riattualizzati" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-riattualizzato-tutto-settembre" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($settembre_pp_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-standard-settembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-standard-settembre-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="9" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($settembre_pp_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-mzd-settembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-mzd-settembre-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="9" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($settembre_pp_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-fa-settembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-fa-settembre-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="fa" mese="9" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($settembre_pp_award_riattualizzato_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>
            </div>

            <div id="gruppo-cqs-settembre-container" style="display:flex;">

                <div id="gruppo-cqs-settembre-ob-award" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-tutto-settembre" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($settembre_cqs_award_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-standard-settembre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-standard-settembre-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="9" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($settembre_cqs_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-mzd-settembre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-mzd-settembre-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="9" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($settembre_cqs_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>

                <div id="gruppo-cqs-settembre-riattualizzazione-perc" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="cqs-riattualizzazione-perc-standard-settembre" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-standard-settembre-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="9" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($settembre_cqs_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cqs-riattualizzazione-perc-mzd-settembre" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-mzd-settembre-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="9" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($settembre_cqs_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cqs-settembre-ob-award-riattualizzati" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-riattualizzato-tutto-settembre" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($settembre_cqs_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-riattualizzato-standard-settembre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-standard-settembre-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="9" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($settembre_cqs_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-riattualizzato-mzd-settembre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-mzd-settembre-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="9" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($settembre_cqs_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-tfcp-settembre-container" style="display:flex;">

                <div id="gruppo-tfcp-settembre-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-tutto-settembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-tutto-settembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="9" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($settembre_tfcp_award_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-revolving-settembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-revolving-settembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="revolving" mese="9" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($settembre_tfcp_award_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-tfcp-settembre-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">

                    <div id="tfcp-riattualizzazione-perc-tutto-settembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-tutto-settembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="9" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($settembre_tfcp_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="tfcp-riattualizzazione-perc-revolving-settembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-revolving-settembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="revolving" mese="9" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($settembre_tfcp_riattualizzazione_perc_revolving) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-tfcp-settembre-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-riattualizzato-tutto-settembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-tutto-settembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="9" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($settembre_tfcp_award_riattualizzato_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-riattualizzato-revolving-settembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-revolving-settembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="revolving" mese="9" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($settembre_tfcp_award_riattualizzato_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-carte-settembre-container" style="display:flex;justify-content: center;">

                <div id="gruppo-carte-settembre-ob-award" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">
                    <div id="carte-ob-award-tutto-settembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-tutto-settembre-input" prodotto="carte" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="9" value="<?php echo converti_float_in_intero($settembre_carte_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-carte-settembre-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="carte-riattualizzazione-perc-tutto-settembre" style="font-weight:bold;">
                        <input type="text" id="carte-riattualizzazione-perc-tutto-settembre-input" prodotto="carte" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="9" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($settembre_carte_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-carte-settembre-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">

                    <div id="carte-ob-award-riattualizzato-tutto-settembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-riattualizzato-tutto-settembre-input" prodotto="carte" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="9" value="<?php echo converti_float_in_intero($settembre_carte_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>

            <div id="gruppo-cc-settembre-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cc-settembre-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-tutto-settembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-tutto-settembre-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="9" value="<?php echo converti_float_in_intero($settembre_cc_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-attivazioni-settembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-attivazioni-settembre-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="attivazioni" mese="9" value="<?php echo converti_float_in_intero($settembre_cc_award_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-cc-settembre-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cc-riattualizzazione-perc-tutto-settembre" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-tutto-settembre-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="9" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($settembre_cc_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cc-riattualizzazione-perc-attivazioni-settembre" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-attivazioni-settembre-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="attivazioni" mese="9" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($settembre_cc_riattualizzazione_perc_attivazioni) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cc-settembre-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-riattualizzato-tutto-settembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-tutto-settembre-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="9" value="<?php echo converti_float_in_intero($settembre_cc_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-riattualizzato-attivazioni-settembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-attivazioni-settembre-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="attivazioni" mese="9" value="<?php echo converti_float_in_intero($settembre_cc_award_riattualizzato_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-cd-settembre-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cd-settembre-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cd-ob-award-tutto-settembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-tutto-settembre-input" prodotto="cd" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="9" value="<?php echo converti_float_in_intero($settembre_cd_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>
                </div>

                <div id="gruppo-cd-settembre-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cd-riattualizzazione-perc-tutto-settembre" style="font-weight:bold;">
                        <input type="text" id="cd-riattualizzazione-perc-tutto-settembre-input" prodotto="cd" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="9" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($settembre_cd_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cd-settembre-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">

                    <div id="cd-ob-award-riattualizzato-tutto-settembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-riattualizzato-tutto-settembre-input" prodotto="cd" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="9" value="<?php echo converti_float_in_intero($settembre_cd_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-polizze-settembre-container" style="display:flex;justify-content: center;margin-bottom:0.4rem">

                <div id=" gruppo-polizze-settembre-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">
                    <div id="polizze-ob-award-tutto-settembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-tutto-settembre-input" prodotto="polizze" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="9" value="<?php echo converti_float_in_intero($settembre_polizze_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-polizze-settembre-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-left:5px;margin-right:5px">

                    <div id="polizze-riattualizzazione-perc-tutto-settembre" style="font-weight:bold;">
                        <input type="text" id="polizze-riattualizzazione-perc-tutto-settembre-input" prodotto="polizze" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="9" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($settembre_polizze_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>


                <div id="gruppo-polizze-settembre-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">

                    <div id="polizze-ob-award-riattualizzato-tutto-settembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-riattualizzato-tutto-settembre-input" prodotto="polizze" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="9" value="<?php echo converti_float_in_intero($settembre_polizze_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>
        </div>

        <div id="tabella-mensilita-colonna-ottobre" style="display:flex;flex-direction:column;padding-left:12px;padding-right:12px;text-align:center">
            <div id="mensilita-ottobre-label" style="font-weight:bold;padding-bottom:0.5rem;">
                <div id="mensilita-ottobre-label-generale">
                    Ottobre
                </div>
                <div id="mensilita-ottobre-label-secondarie" style="display:flex;justify-content:space-between;margin-left: 14px;margin-top:8px;">
                    <div id="mensilita-ottobre-label-ob-award">
                        Ob. Award
                    </div>
                    <div id="mensilita-ottobre-label-ob-award-riattualizzato" style="margin-left: 4px;">
                        Riattual.
                    </div>
                    <div id="mensilita-ottobre-label-ob-award-riattualizzato" style="padding-right:8px">
                        Ob. Riattual.
                    </div>
                </div>
            </div>

            <div id="gruppo-pp-ottobre-container" style="display:flex;">

                <div id="gruppo-pp-ottobre-ob-award" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-tutto-ottobre" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="10" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($ottobre_pp_award_tutto) ?>
                    </div>

                    <div id="pp-ob-award-standard-ottobre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-standard-ottobre-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="10" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($ottobre_pp_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-mzd-ottobre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-mzd-ottobre-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="10" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($ottobre_pp_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-fa-ottobre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-fa-ottobre-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="fa" mese="10" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($ottobre_pp_award_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-pp-ottobre-riattualizzazione-perc" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="pp-riattualizzazione-perc-standard-ottobre" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-standard-ottobre-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="10" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($ottobre_pp_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-mzd-ottobre" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-mzd-ottobre-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="10" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($ottobre_pp_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-fa-ottobre" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-fa-ottobre-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="fa" mese="10" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($ottobre_pp_riattualizzazione_perc_fa) ?>" class="margine-generale-input input-percentuale">
                    </div>
                </div>

                <div id="gruppo-pp-ottobre-ob-award-riattualizzati" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-riattualizzato-tutto-ottobre" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($ottobre_pp_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-standard-ottobre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-standard-ottobre-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="10" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($ottobre_pp_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-mzd-ottobre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-mzd-ottobre-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="10" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($ottobre_pp_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-fa-ottobre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-fa-ottobre-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="fa" mese="10" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($ottobre_pp_award_riattualizzato_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>
            </div>

            <div id="gruppo-cqs-ottobre-container" style="display:flex;">

                <div id="gruppo-cqs-ottobre-ob-award" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-tutto-ottobre" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($ottobre_cqs_award_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-standard-ottobre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-standard-ottobre-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="10" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($ottobre_cqs_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-mzd-ottobre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-mzd-ottobre-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="10" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($ottobre_cqs_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>

                <div id="gruppo-cqs-ottobre-riattualizzazione-perc" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="cqs-riattualizzazione-perc-standard-ottobre" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-standard-ottobre-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="10" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($ottobre_cqs_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cqs-riattualizzazione-perc-mzd-ottobre" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-mzd-ottobre-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="10" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($ottobre_cqs_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cqs-ottobre-ob-award-riattualizzati" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-riattualizzato-tutto-ottobre" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($ottobre_cqs_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-riattualizzato-standard-ottobre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-standard-ottobre-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="10" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($ottobre_cqs_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-riattualizzato-mzd-ottobre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-mzd-ottobre-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="10" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($ottobre_cqs_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-tfcp-ottobre-container" style="display:flex;">

                <div id="gruppo-tfcp-ottobre-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-tutto-ottobre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-tutto-ottobre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="10" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($ottobre_tfcp_award_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-revolving-ottobre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-revolving-ottobre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="revolving" mese="10" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($ottobre_tfcp_award_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-tfcp-ottobre-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">

                    <div id="tfcp-riattualizzazione-perc-tutto-ottobre" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-tutto-ottobre-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="10" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($ottobre_tfcp_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="tfcp-riattualizzazione-perc-revolving-ottobre" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-revolving-ottobre-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="revolving" mese="10" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($ottobre_tfcp_riattualizzazione_perc_revolving) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-tfcp-ottobre-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-riattualizzato-tutto-ottobre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-tutto-ottobre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="10" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($ottobre_tfcp_award_riattualizzato_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-riattualizzato-revolving-ottobre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-revolving-ottobre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="revolving" mese="10" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($ottobre_tfcp_award_riattualizzato_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-carte-ottobre-container" style="display:flex;justify-content: center;">

                <div id="gruppo-carte-ottobre-ob-award" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">
                    <div id="carte-ob-award-tutto-ottobre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-tutto-ottobre-input" prodotto="carte" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="10" value="<?php echo converti_float_in_intero($ottobre_carte_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-carte-ottobre-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="carte-riattualizzazione-perc-tutto-ottobre" style="font-weight:bold;">
                        <input type="text" id="carte-riattualizzazione-perc-tutto-ottobre-input" prodotto="carte" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="10" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($ottobre_carte_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-carte-ottobre-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">

                    <div id="carte-ob-award-riattualizzato-tutto-ottobre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-riattualizzato-tutto-ottobre-input" prodotto="carte" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="10" value="<?php echo converti_float_in_intero($ottobre_carte_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>

            <div id="gruppo-cc-ottobre-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cc-ottobre-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-tutto-ottobre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-tutto-ottobre-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="10" value="<?php echo converti_float_in_intero($ottobre_cc_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-attivazioni-ottobre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-attivazioni-ottobre-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="attivazioni" mese="10" value="<?php echo converti_float_in_intero($ottobre_cc_award_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-cc-ottobre-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cc-riattualizzazione-perc-tutto-ottobre" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-tutto-ottobre-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="10" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($ottobre_cc_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cc-riattualizzazione-perc-attivazioni-ottobre" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-attivazioni-ottobre-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="attivazioni" mese="10" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($ottobre_cc_riattualizzazione_perc_attivazioni) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cc-ottobre-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-riattualizzato-tutto-ottobre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-tutto-ottobre-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="10" value="<?php echo converti_float_in_intero($ottobre_cc_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-riattualizzato-attivazioni-ottobre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-attivazioni-ottobre-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="attivazioni" mese="10" value="<?php echo converti_float_in_intero($ottobre_cc_award_riattualizzato_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-cd-ottobre-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cd-ottobre-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cd-ob-award-tutto-ottobre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-tutto-ottobre-input" prodotto="cd" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="10" value="<?php echo converti_float_in_intero($ottobre_cd_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>
                </div>

                <div id="gruppo-cd-ottobre-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cd-riattualizzazione-perc-tutto-ottobre" style="font-weight:bold;">
                        <input type="text" id="cd-riattualizzazione-perc-tutto-ottobre-input" prodotto="cd" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="10" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($ottobre_cd_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cd-ottobre-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">

                    <div id="cd-ob-award-riattualizzato-tutto-ottobre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-riattualizzato-tutto-ottobre-input" prodotto="cd" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="10" value="<?php echo converti_float_in_intero($ottobre_cd_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-polizze-ottobre-container" style="display:flex;justify-content: center;margin-bottom:0.4rem">

                <div id=" gruppo-polizze-ottobre-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">
                    <div id="polizze-ob-award-tutto-ottobre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-tutto-ottobre-input" prodotto="polizze" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="10" value="<?php echo converti_float_in_intero($ottobre_polizze_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-polizze-ottobre-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-left:5px;margin-right:5px">

                    <div id="polizze-riattualizzazione-perc-tutto-ottobre" style="font-weight:bold;">
                        <input type="text" id="polizze-riattualizzazione-perc-tutto-ottobre-input" prodotto="polizze" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="10" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($ottobre_polizze_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>


                <div id="gruppo-polizze-ottobre-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">

                    <div id="polizze-ob-award-riattualizzato-tutto-ottobre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-riattualizzato-tutto-ottobre-input" prodotto="polizze" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="10" value="<?php echo converti_float_in_intero($ottobre_polizze_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>
        </div>

        <div id="tabella-mensilita-colonna-novembre" style="display:flex;flex-direction:column;padding-left:12px;padding-right:12px;text-align:center">
            <div id="mensilita-novembre-label" style="font-weight:bold;padding-bottom:0.5rem;">
                <div id="mensilita-novembre-label-generale">
                    Novembre
                </div>
                <div id="mensilita-novembre-label-secondarie" style="display:flex;justify-content:space-between;margin-left: 14px;margin-top:8px;">
                    <div id="mensilita-novembre-label-ob-award">
                        Ob. Award
                    </div>
                    <div id="mensilita-novembre-label-ob-award-riattualizzato" style="margin-left: 4px;">
                        Riattual.
                    </div>
                    <div id="mensilita-novembre-label-ob-award-riattualizzato" style="padding-right:8px">
                        Ob. Riattual.
                    </div>
                </div>
            </div>

            <div id="gruppo-pp-novembre-container" style="display:flex;">

                <div id="gruppo-pp-novembre-ob-award" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-tutto-novembre" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="11" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($novembre_pp_award_tutto) ?>
                    </div>

                    <div id="pp-ob-award-standard-novembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-standard-novembre-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="11" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($novembre_pp_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-mzd-novembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-mzd-novembre-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="11" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($novembre_pp_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-fa-novembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-fa-novembre-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="fa" mese="11" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($novembre_pp_award_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-pp-novembre-riattualizzazione-perc" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="pp-riattualizzazione-perc-standard-novembre" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-standard-novembre-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="11" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($novembre_pp_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-mzd-novembre" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-mzd-novembre-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="11" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($novembre_pp_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-fa-novembre" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-fa-novembre-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="fa" mese="11" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($novembre_pp_riattualizzazione_perc_fa) ?>" class="margine-generale-input input-percentuale">
                    </div>
                </div>

                <div id="gruppo-pp-novembre-ob-award-riattualizzati" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-riattualizzato-tutto-novembre" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($novembre_pp_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-standard-novembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-standard-novembre-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="11" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($novembre_pp_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-mzd-novembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-mzd-novembre-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="11" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($novembre_pp_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-fa-novembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-fa-novembre-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="fa" mese="11" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($novembre_pp_award_riattualizzato_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>
            </div>

            <div id="gruppo-cqs-novembre-container" style="display:flex;">

                <div id="gruppo-cqs-novembre-ob-award" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-tutto-novembre" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($novembre_cqs_award_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-standard-novembre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-standard-novembre-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="11" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($novembre_cqs_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-mzd-novembre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-mzd-novembre-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="11" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($novembre_cqs_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>

                <div id="gruppo-cqs-novembre-riattualizzazione-perc" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="cqs-riattualizzazione-perc-standard-novembre" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-standard-novembre-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="11" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($novembre_cqs_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cqs-riattualizzazione-perc-mzd-novembre" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-mzd-novembre-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="11" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($novembre_cqs_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cqs-novembre-ob-award-riattualizzati" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-riattualizzato-tutto-novembre" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($novembre_cqs_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-riattualizzato-standard-novembre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-standard-novembre-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="11" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($novembre_cqs_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-riattualizzato-mzd-novembre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-mzd-novembre-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="11" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($novembre_cqs_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-tfcp-novembre-container" style="display:flex;">

                <div id="gruppo-tfcp-novembre-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-tutto-novembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-tutto-novembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="11" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($novembre_tfcp_award_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-revolving-novembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-revolving-novembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="revolving" mese="11" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($novembre_tfcp_award_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-tfcp-novembre-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">

                    <div id="tfcp-riattualizzazione-perc-tutto-novembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-tutto-novembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="11" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($novembre_tfcp_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="tfcp-riattualizzazione-perc-revolving-novembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-revolving-novembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="revolving" mese="11" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($novembre_tfcp_riattualizzazione_perc_revolving) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-tfcp-novembre-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-riattualizzato-tutto-novembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-tutto-novembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="11" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($novembre_tfcp_award_riattualizzato_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-riattualizzato-revolving-novembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-revolving-novembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="revolving" mese="11" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($novembre_tfcp_award_riattualizzato_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-carte-novembre-container" style="display:flex;justify-content: center;">

                <div id="gruppo-carte-novembre-ob-award" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">
                    <div id="carte-ob-award-tutto-novembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-tutto-novembre-input" prodotto="carte" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="11" value="<?php echo converti_float_in_intero($novembre_carte_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-carte-novembre-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="carte-riattualizzazione-perc-tutto-novembre" style="font-weight:bold;">
                        <input type="text" id="carte-riattualizzazione-perc-tutto-novembre-input" prodotto="carte" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="11" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($novembre_carte_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-carte-novembre-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">

                    <div id="carte-ob-award-riattualizzato-tutto-novembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-riattualizzato-tutto-novembre-input" prodotto="carte" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="11" value="<?php echo converti_float_in_intero($novembre_carte_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>

            <div id="gruppo-cc-novembre-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cc-novembre-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-tutto-novembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-tutto-novembre-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="11" value="<?php echo converti_float_in_intero($novembre_cc_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-attivazioni-novembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-attivazioni-novembre-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="attivazioni" mese="11" value="<?php echo converti_float_in_intero($novembre_cc_award_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-cc-novembre-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cc-riattualizzazione-perc-tutto-novembre" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-tutto-novembre-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="11" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($novembre_cc_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cc-riattualizzazione-perc-attivazioni-novembre" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-attivazioni-novembre-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="attivazioni" mese="11" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($novembre_cc_riattualizzazione_perc_attivazioni) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cc-novembre-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-riattualizzato-tutto-novembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-tutto-novembre-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="11" value="<?php echo converti_float_in_intero($novembre_cc_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-riattualizzato-attivazioni-novembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-attivazioni-novembre-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="attivazioni" mese="11" value="<?php echo converti_float_in_intero($novembre_cc_award_riattualizzato_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-cd-novembre-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cd-novembre-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cd-ob-award-tutto-novembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-tutto-novembre-input" prodotto="cd" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="11" value="<?php echo converti_float_in_intero($novembre_cd_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>
                </div>

                <div id="gruppo-cd-novembre-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cd-riattualizzazione-perc-tutto-novembre" style="font-weight:bold;">
                        <input type="text" id="cd-riattualizzazione-perc-tutto-novembre-input" prodotto="cd" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="11" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($novembre_cd_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cd-novembre-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">

                    <div id="cd-ob-award-riattualizzato-tutto-novembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-riattualizzato-tutto-novembre-input" prodotto="cd" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="11" value="<?php echo converti_float_in_intero($novembre_cd_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-polizze-novembre-container" style="display:flex;justify-content: center;margin-bottom:0.4rem">

                <div id=" gruppo-polizze-novembre-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">
                    <div id="polizze-ob-award-tutto-novembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-tutto-novembre-input" prodotto="polizze" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="11" value="<?php echo converti_float_in_intero($novembre_polizze_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-polizze-novembre-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-left:5px;margin-right:5px">

                    <div id="polizze-riattualizzazione-perc-tutto-novembre" style="font-weight:bold;">
                        <input type="text" id="polizze-riattualizzazione-perc-tutto-novembre-input" prodotto="polizze" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="11" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($novembre_polizze_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>


                <div id="gruppo-polizze-novembre-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">

                    <div id="polizze-ob-award-riattualizzato-tutto-novembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-riattualizzato-tutto-novembre-input" prodotto="polizze" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="11" value="<?php echo converti_float_in_intero($novembre_polizze_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>
        </div>

        <div id="tabella-mensilita-colonna-dicembre" style="display:flex;flex-direction:column;padding-left:12px;padding-right:12px;text-align:center">
            <div id="mensilita-dicembre-label" style="font-weight:bold;padding-bottom:0.5rem;">
                <div id="mensilita-dicembre-label-generale">
                    Dicembre
                </div>
                <div id="mensilita-dicembre-label-secondarie" style="display:flex;justify-content:space-between;margin-left: 14px;margin-top:8px;">
                    <div id="mensilita-dicembre-label-ob-award">
                        Ob. Award
                    </div>
                    <div id="mensilita-dicembre-label-ob-award-riattualizzato" style="margin-left: 4px;">
                        Riattual.
                    </div>
                    <div id="mensilita-dicembre-label-ob-award-riattualizzato" style="padding-right:8px">
                        Ob. Riattual.
                    </div>
                </div>
            </div>

            <div id="gruppo-pp-dicembre-container" style="display:flex;">

                <div id="gruppo-pp-dicembre-ob-award" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-tutto-dicembre" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="12" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($dicembre_pp_award_tutto) ?>
                    </div>

                    <div id="pp-ob-award-standard-dicembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-standard-dicembre-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="12" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($dicembre_pp_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-mzd-dicembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-mzd-dicembre-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="12" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($dicembre_pp_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-fa-dicembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-fa-dicembre-input" prodotto="pp" obiettivo_tipologia_specifica="award"  prodotto_categoria="fa" mese="12" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($dicembre_pp_award_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-pp-dicembre-riattualizzazione-perc" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="pp-riattualizzazione-perc-standard-dicembre" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-standard-dicembre-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="12" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($dicembre_pp_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-mzd-dicembre" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-mzd-dicembre-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="12" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($dicembre_pp_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="pp-riattualizzazione-perc-fa-dicembre" style="font-weight:bold;">
                        <input type="text" id="pp-riattualizzazione-perc-fa-dicembre-input" prodotto="pp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="fa" mese="12" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($dicembre_pp_riattualizzazione_perc_fa) ?>" class="margine-generale-input input-percentuale">
                    </div>
                </div>

                <div id="gruppo-pp-dicembre-ob-award-riattualizzati" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-riattualizzato-tutto-dicembre" style="font-weight:bold;">
                        € <?php echo converti_float_in_cifra_in_euro($dicembre_pp_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-standard-dicembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-standard-dicembre-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="12" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($dicembre_pp_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-mzd-dicembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-mzd-dicembre-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="12" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($dicembre_pp_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="pp-ob-award-riattualizzato-fa-dicembre" style="font-weight:bold;">
                        <input type="text" id="pp-ob-award-riattualizzato-fa-dicembre-input" prodotto="pp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="fa" mese="12" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($dicembre_pp_award_riattualizzato_fa) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>
            </div>

            <div id="gruppo-cqs-dicembre-container" style="display:flex;">

                <div id="gruppo-cqs-dicembre-ob-award" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-tutto-dicembre" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($dicembre_cqs_award_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-standard-dicembre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-standard-dicembre-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="standard" mese="12" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($dicembre_cqs_award_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-mzd-dicembre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-mzd-dicembre-input" prodotto="cqs" obiettivo_tipologia_specifica="award"  prodotto_categoria="mzd" mese="12" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($dicembre_cqs_award_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>

                <div id="gruppo-cqs-dicembre-riattualizzazione-perc" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">
                    <div class="placeholder" style="font-weight:bold;">
                        <div class="placeholder" style="color:white;visibility:hidden">
                            n.p.
                        </div>
                    </div>

                    <div id="cqs-riattualizzazione-perc-standard-dicembre" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-standard-dicembre-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="standard" mese="12" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($dicembre_cqs_riattualizzazione_perc_standard) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cqs-riattualizzazione-perc-mzd-dicembre" style="font-weight:bold;">
                        <input type="text" id="cqs-riattualizzazione-perc-mzd-dicembre-input" prodotto="cqs" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="mzd" mese="12" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($dicembre_cqs_riattualizzazione_perc_mzd) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cqs-dicembre-ob-award-riattualizzati" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-riattualizzato-tutto-dicembre" style="font-weight:bold;">
                       € <?php echo converti_float_in_cifra_in_euro($dicembre_cqs_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-riattualizzato-standard-dicembre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-standard-dicembre-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="standard" mese="12" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($dicembre_cqs_award_riattualizzato_standard) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="cqs-ob-award-riattualizzato-mzd-dicembre" style="font-weight:bold;">
                        <input type="text" id="cqs-ob-award-riattualizzato-mzd-dicembre-input" prodotto="cqs" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="mzd" mese="12" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($dicembre_cqs_award_riattualizzato_mzd) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-tfcp-dicembre-container" style="display:flex;">

                <div id="gruppo-tfcp-dicembre-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-tutto-dicembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-tutto-dicembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="12" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($dicembre_tfcp_award_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-revolving-dicembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-revolving-dicembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award"  prodotto_categoria="revolving" mese="12" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($dicembre_tfcp_award_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>
                </div>

                <div id="gruppo-tfcp-dicembre-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;margin-left:5px;margin-right:5px">

                    <div id="tfcp-riattualizzazione-perc-tutto-dicembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-tutto-dicembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="12" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($dicembre_tfcp_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="tfcp-riattualizzazione-perc-revolving-dicembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-riattualizzazione-perc-revolving-dicembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="revolving" mese="12" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($dicembre_tfcp_riattualizzazione_perc_revolving) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-tfcp-dicembre-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-riattualizzato-tutto-dicembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-tutto-dicembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="12" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($dicembre_tfcp_award_riattualizzato_tutto) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                    <div id="tfcp-ob-award-riattualizzato-revolving-dicembre" style="font-weight:bold;">
                        <input type="text" id="tfcp-ob-award-riattualizzato-revolving-dicembre-input" prodotto="tfcp" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="revolving" mese="12" data-type='currency' value="€ <?php echo converti_float_in_cifra_in_euro($dicembre_tfcp_award_riattualizzato_revolving) ?>" class="volumi-award-mensilita-input input-euro">
                    </div>

                </div>
            </div>

            <div id="gruppo-carte-dicembre-container" style="display:flex;justify-content: center;">

                <div id="gruppo-carte-dicembre-ob-award" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">
                    <div id="carte-ob-award-tutto-dicembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-tutto-dicembre-input" prodotto="carte" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="12" value="<?php echo converti_float_in_intero($dicembre_carte_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-carte-dicembre-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="carte-riattualizzazione-perc-tutto-dicembre" style="font-weight:bold;">
                        <input type="text" id="carte-riattualizzazione-perc-tutto-dicembre-input" prodotto="carte" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="12" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($dicembre_carte_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-carte-dicembre-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;margin-bottom:1.4rem">

                    <div id="carte-ob-award-riattualizzato-tutto-dicembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="carte-ob-award-riattualizzato-tutto-dicembre-input" prodotto="carte" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="12" value="<?php echo converti_float_in_intero($dicembre_carte_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>

            <div id="gruppo-cc-dicembre-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cc-dicembre-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-tutto-dicembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-tutto-dicembre-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="12" value="<?php echo converti_float_in_intero($dicembre_cc_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-attivazioni-dicembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-attivazioni-dicembre-input" prodotto="cc" obiettivo_tipologia_specifica="award"  prodotto_categoria="attivazioni" mese="12" value="<?php echo converti_float_in_intero($dicembre_cc_award_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-cc-dicembre-riattualizzazione-perc" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cc-riattualizzazione-perc-tutto-dicembre" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-tutto-dicembre-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="12" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($dicembre_cc_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                    <div id="cc-riattualizzazione-perc-attivazioni-dicembre" style="font-weight:bold;">
                        <input type="text" id="cc-riattualizzazione-perc-attivazioni-dicembre-input" prodotto="cc" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="attivazioni" mese="12" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($dicembre_cc_riattualizzazione_perc_attivazioni) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cc-dicembre-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-riattualizzato-tutto-dicembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-tutto-dicembre-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="12" value="<?php echo converti_float_in_intero($dicembre_cc_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>

                    <div id="cc-ob-award-riattualizzato-attivazioni-dicembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cc-ob-award-riattualizzato-attivazioni-dicembre-input" prodotto="cc" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="attivazioni" mese="12" value="<?php echo converti_float_in_intero($dicembre_cc_award_riattualizzato_attivazioni) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-cd-dicembre-container" style="display:flex;justify-content: center;">

                <div id="gruppo-cd-dicembre-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cd-ob-award-tutto-dicembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-tutto-dicembre-input" prodotto="cd" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="12" value="<?php echo converti_float_in_intero($dicembre_cd_award_tutto) ?>" class="volumi-generale-input-pezzi">

                    </div>
                </div>

                <div id="gruppo-cd-dicembre-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;margin-left:5px;margin-right:5px">

                    <div id="cd-riattualizzazione-perc-tutto-dicembre" style="font-weight:bold;">
                        <input type="text" id="cd-riattualizzazione-perc-tutto-dicembre-input" prodotto="cd" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="12" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($dicembre_cd_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>

                <div id="gruppo-cd-dicembre-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">

                    <div id="cd-ob-award-riattualizzato-tutto-dicembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="cd-ob-award-riattualizzato-tutto-dicembre-input" prodotto="cd" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="12" value="<?php echo converti_float_in_intero($dicembre_cd_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>

            </div>

            <div id="gruppo-polizze-dicembre-container" style="display:flex;justify-content: center;margin-bottom:0.4rem">

                <div id=" gruppo-polizze-dicembre-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">
                    <div id="polizze-ob-award-tutto-dicembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-tutto-dicembre-input" prodotto="polizze" obiettivo_tipologia_specifica="award"  prodotto_categoria="tutto" mese="12" value="<?php echo converti_float_in_intero($dicembre_polizze_award_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>
                </div>

                <div id="gruppo-polizze-dicembre-riattualizzazione-perc" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-left:5px;margin-right:5px">

                    <div id="polizze-riattualizzazione-perc-tutto-dicembre" style="font-weight:bold;">
                        <input type="text" id="polizze-riattualizzazione-perc-tutto-dicembre-input" prodotto="polizze" obiettivo_tipologia_specifica="riattualizzazione_perc"  prodotto_categoria="tutto" mese="12" data-type="percent" value="<?php echo converti_percentuale_sql_in_formato_italiano($dicembre_polizze_riattualizzazione_perc_tutto) ?>" class="margine-generale-input input-percentuale">
                    </div>

                </div>


                <div id="gruppo-polizze-dicembre-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;">

                    <div id="polizze-ob-award-riattualizzato-tutto-dicembre" style="font-weight:bold;">
                        <input type="number" min="0" step="1" id="polizze-ob-award-riattualizzato-tutto-dicembre-input" prodotto="polizze" obiettivo_tipologia_specifica="award_riattualizzato"  prodotto_categoria="tutto" mese="12" value="<?php echo converti_float_in_intero($dicembre_polizze_award_riattualizzato_tutto) ?>" class="volumi-generale-input-pezzi">
                    </div>

                </div>
            </div>
        </div>

        <div id="tabella-mensilita-colonna-totale" style="display:flex;flex-direction:column;padding-left:50px;text-align:center;;">
            <div id="mensilita-tutto-label" style="font-weight:bold;padding-bottom:0.5rem;width: max-content;">
                <div id="mensilita-tutto-label-generale">
                    Totale
                </div>
                <div id="mensilita-tutto-label-secondarie" style="display:flex;justify-content:space-between;margin-top:8px;">
                    <div id="mensilita-tutto-label-ob-award">
                        Ob. Award
                    </div>
                    <div id="mensilita-tutto-label-ob-award-riattualizzato" style="padding-left:22px;margin-left:10px">
                        Ob. Riattual.
                    </div>
                </div>
            </div>

            <div id="gruppo-pp-totale-container" style="display:flex;justify-content: space-around;">

                <div id="gruppo-pp-totale-ob-award" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem">
                    <div id="pp-ob-award-tutto-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_pp_award_tutto) ?>
                    </div>

                    <div id="pp-ob-award-standard-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_pp_award_standard) ?>
                    </div>

                    <div id="pp-ob-award-mzd-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_pp_award_mzd) ?>
                    </div>

                    <div id="pp-ob-award-fa-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_pp_award_fa) ?>
                    </div>
                </div>

                <div id="gruppo-pp-totale-ob-award-riattualizzati" style="height:140px;display: flex;flex-direction: column;justify-content: space-around;margin-top:5px;margin-bottom:2rem;padding-left: 30px;">
                    <div id="pp-ob-award-riattualizzato-tutto-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_pp_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-standard-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_pp_award_riattualizzato_standard) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-mzd-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_pp_award_riattualizzato_mzd) ?>
                    </div>

                    <div id="pp-ob-award-riattualizzato-fa-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_pp_award_riattualizzato_fa) ?>
                    </div>
                </div>

            </div>

            <div id="gruppo-cqs-totale-container" style="display:flex;justify-content: space-around;">

                <div id="gruppo-cqs-totale-ob-award" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="cqs-ob-award-tutto-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_cqs_award_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-standard-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_cqs_award_standard) ?>
                    </div>

                    <div id="cqs-ob-award-mzd-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_cqs_award_mzd) ?>
                    </div>
                </div>

                <div id="gruppo-cqs-totale-ob-award-riattualizzati" style="height:100px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;padding-left: 30px;">
                    <div id="cqs-ob-award-riattualizzato-tutto-annuale" style="font-weight:bold;width:max-content">
                       € <?php echo converti_float_in_cifra_in_euro($annuale_cqs_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="cqs-ob-award-riattualizzato-standard-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_cqs_award_riattualizzato_standard) ?>
                    </div>

                    <div id="cqs-ob-award-riattualizzato-mzd-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_cqs_award_riattualizzato_mzd) ?>
                    </div>
                </div>

            </div>


            <div id="gruppo-tfcp-totale-container" style="display:flex;justify-content: space-around;">

                <div id="gruppo-tfcp-totale-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem">
                    <div id="tfcp-ob-award-tutto-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_tfcp_award_tutto) ?>
                    </div>

                    <div id="tfcp-ob-award-revolving-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_tfcp_award_revolving) ?>
                    </div>
                </div>

                <div id="gruppo-tfcp-totale-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:2rem;padding-left: 30px;">
                    <div id="tfcp-ob-award-riattualizzato-tutto-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_tfcp_award_riattualizzato_tutto) ?>
                    </div>

                    <div id="tfcp-ob-award-riattualizzato-revolving-annuale" style="font-weight:bold;width:max-content">
                        € <?php echo converti_float_in_cifra_in_euro($annuale_tfcp_award_riattualizzato_revolving) ?>
                    </div>
                </div>

            </div>

            <div id="gruppo-carte-totale-container" style="display:flex;justify-content: space-around;">

                <div id="gruppo-carte-totale-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="carte-ob-award-tutto-annuale" style="font-weight:bold;width:max-content">
                        <?php echo converti_float_in_intero($annuale_carte_award_tutto) ?>
                    </div>
                </div>

                <div id="gruppo-carte-totale-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;padding-left: 30px;">
                    <div id="carte-ob-award-riattualizzato-tutto-annuale" style="font-weight:bold;width:max-content">
                        <?php echo converti_float_in_intero($annuale_carte_award_riattualizzato_tutto) ?>
                    </div>
                </div>

            </div>

            <div id="gruppo-cc-totale-container" style="display:flex;justify-content: space-around;">

                <div id="gruppo-cc-totale-ob-award" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cc-ob-award-tutto-annuale" style="font-weight:bold;width:max-content">
                        <?php echo converti_float_in_intero($annuale_cc_award_tutto) ?>
                    </div>

                    <div id="cc-ob-award-attivazioni-annuale" style="font-weight:bold;width:max-content">
                        <?php echo converti_float_in_intero($annuale_cc_award_attivazioni) ?>
                    </div>
                </div>

                <div id="gruppo-cc-totale-ob-award-riattualizzati" style="height:70px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;padding-left: 30px;">
                    <div id="cc-ob-award-riattualizzato-tutto-annuale" style="font-weight:bold;width:max-content">
                        <?php echo converti_float_in_intero($annuale_cc_award_attivazioni) ?>
                    </div>

                    <div id="cc-ob-award-riattualizzato-attivazioni-annuale" style="font-weight:bold;width:max-content">
                        <?php echo converti_float_in_intero($annuale_cc_award_riattualizzato_attivazioni) ?>
                    </div>
                </div>

            </div>

            <div id="gruppo-cd-totale-container" style="display:flex;justify-content: space-around;">

                <div id="gruppo-cd-totale-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="cd-ob-award-tutto-annuale" style="font-weight:bold;width:max-content">
                        <?php echo converti_float_in_intero($annuale_cd_award_tutto) ?>
                    </div>
                </div>

                <div id="gruppo-cd-totale-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;padding-left: 30px;">
                    <div id="cd-ob-award-riattualizzato-tutto-annuale" style="font-weight:bold;width:max-content">
                        <?php echo converti_float_in_intero($annuale_cd_award_riattualizzato_tutto) ?>
                    </div>
                </div>

            </div>

            <div id="gruppo-polizze-totale-container" style="display:flex;justify-content: space-around;">

                <div id="gruppo-polizze-totale-ob-award" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem">
                    <div id="polizze-ob-award-tutto-annuale" style="font-weight:bold;width:max-content">
                        <?php echo converti_float_in_intero($annuale_polizze_award_tutto) ?>
                    </div>
                </div>

                <div id="gruppo-polizze-totale-ob-award-riattualizzati" style="height:30px;display: flex;flex-direction: column;justify-content: space-around;margin-bottom:1.4rem;padding-left: 30px;">
                    <div id="polizze-ob-award-riattualizzato-tutto-annuale" style="font-weight:bold;width:max-content">
                        <?php echo converti_float_in_intero($annuale_polizze_award_riattualizzato_tutto) ?>
                    </div>
                </div>

            </div>


        </div>

    </div>

</div>    
