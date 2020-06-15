<?PHP
include "../entities/client.php";
include "../core/clientC.php";
$client=new Client (123,'Ben Ghozlen','Mariem','la marsa','mariembenghozlen','mariemm',99);
$clienteC=new ClientC();
$clienteC->afficherClient($client);
echo "****************";
echo "<br>";
echo "cin:".$client->getCin();
echo "<br>";
echo "nom:".$client->getNom();
echo "<br>";
echo "prenom:".$client->getPrenom();
echo "<br>";
echo "adresse:".$client->getAdresse();
echo "<br>";
echo "mail:".$client->getMail();
echo "<br>";
echo "mot_de_passe:".$client->getMot_de_passe();
echo "<br>";
echo "numero:".$client->getNumero();
echo "<br>";



?>