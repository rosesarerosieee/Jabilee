<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="paymentpage.css">
    <title>Checkout</title>
  </head>

<body>
  <div class="top">
    <h1 class="title">
      <a href="page.html" style="font-size: 42px;">
        Jabilee
      </a>
    </h1>

    <ul class="navigation1">
      <li>
        <a href="page.html" style="font-family: poppins; font-weight: 1rem;">
          <b>
            Home
          </b>
        </a>

        <a href="login1.php" style="font-family: poppins; font-weight: 1rem;">
          <b>
            Sign In
          </b>
        </a>
      </li>
    </ul>
  </div>
  
  <h2 style = "color: black"> Checkout Form </h2>
  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="payment.php" method="POST">
        
          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> First Name</label>
              <input type="text" placeholder = "Juan" name="firstname" required>
              
              <label for="lastname"><i class="fa fa-user"></i> Last Name</label>
              <input type="text" placeholder = "Dela Cruz" name="lastname" required>
              
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="juan@example.com" required>
              
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
              
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type ="text" list = "city" required>
              <datalist id = "city">
                      <option> Bangued, Abra </option>
                      <option> Boliney, Abra </option>
                      <option> Bucay, Abra </option>
                      <option> Bucloc, Abra </option>
                      <option> Daguioman, Abra </option>
                      <option> Danglas, Abra </option>
                      <option> Dolores, Abra </option>
                      <option> La Paz, Abra </option>
                      <option> Lacub, Abra </option>
                      <option>  Lagangilang, Abra </option>
                      <option> Lagayan, Abra </option>
                      <option> Langiden, Abra </option>
                      <option> Licuan-Baay, Abra </option>
                      <option> Luba, Abra </option>
                      <option> Malibcong, Abra </option>
                      <option> Manabo, Abra </option>
                      <option> Peñarrubia, Abra </option>
                      <option> Pidigan, Abra </option>
                      <option> Sallapadan, Abra </option>
                      <option> San Isidro, Abra </option>
                      <option> San Juan, Abra </option>
                      <option> San Quintin, Abra </option>
                      <option> Tayum, Abra </option>
                      <option> Tineg, Abra </option>
                      <option> Tubo, Abra </option>
                      <option> Villaviciosa, Abra </option>
                      <option> Buenavista, Agusan Del Norte </option>
                      <option> Butuan, Agusan Del Norte </option>
                      <option>Cabadbaran, Agusan Del Norte</option>
                      <option> Carmen, Agusan Del Norte </option>
                      <option> Jabonga, Agusan Del Norte </option>
                      <option> Kitcharao, Agusan Del Norte </option>
                      <option> Las Nieves, Agusan Del Norte </option>
                      <option> Magallanes, Agusan Del Norte </option>
                      <option> Nasipit, Agusan Del Norte </option>
                      <option> Remedios T. Romualdez, Agusan Del Norte </option>
                      <option> Santiago, Agusan Del Norte </option>
                      <option> Tubay, Agusan Del Norte </option>
                      <option> Bayugan, Agusan Del Sur </option>
                      <option> Bunawan, Agusan Del Sur </option>
                      <option> Esperanza, Agusan Del Sur </option>
                      <option> La Paz, Agusan Del Sur </option>
                      <option> Loreto, Agusan Del Sur </option>
                      <option> Prosperidad, Agusan Del Sur </option>
                      <option> Rosario, Agusan Del Sur </option>
                      <option> San Francisco, Agusan Del Sur </option>
                      <option> San Luis, Agusan Del Sur </option>
                      <option> Santa Josefa, Agusan Del Sur </option>
                      <option> Sibagat, Agusan Del Sur </option>
                      <option> Talacogon, Agusan Del Sur </option>
                      <option> Trento, Agusan Del Sur </option>
                      <option> Veruela, Agusan Del Sur </option>
                      <option> Altavas, Aklan </option>
                      <option> Balete, Aklan </option>
                      <option> Banga, Aklan </option>
                      <option> Batan, Aklan</option>
                      <option> Buruanga, Aklan </option>
                      <option> Ibajay, Aklan </option>
                      <option> Kalibo, Aklan </option>
                      <option> Lezo, Aklan </option>
                      <option> Libacao, Aklan </option>
                      <option> Madalag, Aklan </option>
                      <option> Makato, Aklan </option>
                      <option> Malay, Aklan </option>
                      <option> Malinao, Aklan </option>
                      <option> Nabas, Aklan </option>
                      <option> New Washington, Aklan </option>
                      <option> Numancia, Aklan </option>
                      <option> Tangalan, Aklan </option>
                      <option> Bacacay, Albay </option>
                      <option> Camalig, Albay </option>
                      <option> Daraga, Albay </option>
                      <option> Guinobatan, Albay </option>
                      <option> Jovellar, Albay </option>
                      <option> Legazpi, Albay </option>
                      <option> Libon, Albay </option>
                      <option> Ligao, Albay </option>
                      <option> Malilipot, Albay </option>
                      <option>Malinao, Albay</option>
                      <option>Manito, Albay</option>
                      <option>Oas, Albay</option>
                      <option>Pio Duran, Albay</option>
                      <option>Polangui, Albay</option>
                      <option>Rapu-Rapu, Albay</option>
                      <option>Santo Domingo, Albay</option>
                      <option>Tabaco, Albay</option>
                      <option>Anini-y, Antique</option>
                      <option>Barbaza, Antique</option>
                      <option>Belison, Antique</option>
                      <option>Bugasong, Antique</option>
                      <option>Caluya, Antique</option>
                      <option>Culasi, Antique</option>
                      <option>Hamtic, Antique</option>
                      <option>Laua-an, Antique</option>
                      <option>Libertad, Antique</option>
                      <option>Pandan, Antique</option>
                      <option>Patnongon, Antique</option>
                      <option>San Jose de Buenavista, Antique</option>
                      <option>San Remigio, Antique</option>
                      <option>Sebaste, Antique</option>
                      <option>Sibalom, Antique</option>
                      <option>Tibiao, Antique</option>
                      <option>Tobias Fornier, Antique</option>
                      <option>Calanasan, Apayao</option>
                      <option>Conner, Apayao</option>
                      <option>Flora, Apayao</option>
                      <option>Kabugao, Apayao</option>
                      <option>Luna, Apayao</option>
                      <option>Pudtol, Apayao</option>
                      <option>Santa Marcela, Apayao</option>
                      <option>Baler, Aurora</option>
                      <option>Casiguran, Aurora</option>
                      <option>Dilasag, Aurora</option>
                      <option>Dinalungan, Aurora</option>
                      <option>Dingalan, Aurora</option>
                      <option>Dipaculao, Aurora</option>
                      <option>Maria Aurora, Aurora</option>
                      <option>San Luis, Aurora</option>
                      <option>Akbar, Basilan</option>
                      <option>Al-Barka, Basilan</option>
                      <option>Hadji Mohammad Ajul, Basilan</option>
                      <option>Hadji Muhtamad, Basilan</option>
                      <option>Isabela City, Basilan</option>
                      <option>Lamitan, Basilan</option>
                      <option>Lantawan, Basilan</option>
                      <option>Maluso, Basilan</option>
                      <option>Sumisip, Basilan</option>
                      <option>Tabuan-Lasa, Basilan</option>
                      <option>Tipo-Tipo, Basilan</option>
                      <option>Tuburan, Basilan</option>
                      <option>Ungkaya Pukan, Basilan</option>
                      <option>Abucay, Bataan</option>
                      <option>Bagac, Bataan</option>
                      <option>Balanga, Bataan</option>
                      <option>Dinalupihan, Bataan</option>
                      <option>Hermosa, Bataan</option>
                      <option>Limay, Bataan</option>
                      <option>Mariveles, Bataan</option>
                      <option>Morong, Bataan</option>
                      <option>Orani, Bataan</option>
                      <option>Orion, Bataan</option>
                      <option>Pilar, Bataan</option>
                      <option>Samal, Bataan</option>
                      <option>Basco, Batanes</option>
                      <option>Itbayat, Batanes</option>
                      <option>Ivana, Batanes</option>
                      <option>Mahatao, Batanes</option>
                      <option>Sabtang, Batanes</option>
                      <option>Uyugan, Batanes</option>
                      <option>Agoncillo, Batangas</option>
                      <option>Alitagtag, Batangas</option>
                      <option>Balayan, Batangas</option>
                      <option>Balete, Batangas</option>
                      <option>Batangas City, Batangas</option>
                      <option>Bauan, Batangas</option>
                      <option>Calaca, Batangas</option>
                      <option>Calatagan, Batangas</option>
                      <option>Cuenca, Batangas</option>
                      <option>Ibaan, Batangas</option>
                      <option>Laurel, Batangas</option>
                      <option>Lemery, Batangas</option>
                      <option>Lian, Batangas</option>
                      <option>Lipa, Batangas</option>
                      <option>Lobo, Batabgas</option>
                      <option>Mabini, Batangas</option>
                      <option>Malvar, Batangas</option>
                      <option>Mataasnakahoy, Batangas</option>
                      <option>Nasugbu, Batangas</option>
                      <option>Padre Garcia, Batangas</option>
                      <option>Rosario, Batangas</option>
                      <option>San Jose, Batangas</option>
                      <option>San Juan, Batangas</option>
                      <option>San Luis, Batangas</option>
                      <option>San Nicolas, Batangas</option>
                      <option>San Pascual, Batangas</option>
                      <option>Santa Teresita, Batangas</option>
                      <option>Santo Tomas, Batangas</option>
                      <option>Taal, Batangas</option>
                      <option>Talisay, Batangas</option>
                      <option>Tanauan, Batangas</option>
                      <option>Taysan, Batangas</option>
                      <option>Tingloy, Batangas</option>
                      <option>Tuy, Batangas</option>
                      <option>Atok, Benguet</option>
                      <option>Baguio, Benguet</option>
                      <option><option>Bakun, Benguet</option>
                      <option>Bokod, Benguet</option>
                      <option>Buguias, Benguet</option>
                      <option>Itogon, Benguet</option>
                      <option>Kabayan, Benguet</option>
                      <option>Kapangan, Benguet</option>
                      <option>Kibungan, Benguet</option>
                      <option>La Trinidad, Benguet</option
                      <option>Mankayan, Benguet</option>
                      <option>Sablan, Benguet</option>
                      <option>Tuba, Benguet</option>
                      <option>Tublay, Benguet</option>
                      <option>Almeria, Biliran</option>
                      <option>Biliran, Biliran</option>
                      <option>Cabucgayan, Biliran</option>
                      <option>Caibiran, Biliran</option>
                      <option>Culaba, Biliran</option>
                      <option>Kawayan, Biliran</option>
                      <option>Maripipi, Biliran</option>
                      <option>Naval, Biliran</option>
                      <option>Alburquerque, Bohol</option>
                      <option>Alicia, Bohol</option>
                      <option>Anda, Bohol</option>
                      <option>Antequera, Bohol</option>
                      <option>Baclayon, Bohol</option>
                      <option>Balilihan, Bohol</option>
                      <option>Batuan, Bohol</option>
                      <option>Bien Unido, Bohol</option>
                      <option>Bilar, Bohol</option>
                      <option>Buenavista, Bohol</option>
                      <option>Calape, Bohol</option
                      <option>Candijay, Bohol</option>
                      <option>Carmen, Bohol</option>
                      <option>Catigbian, Bohol</option>
                      <option>Clarin, Bohol</option>
                      <option>Corella, Bohol</option>
                      <option>Cortes, Bohol</option>
                      <option>Dagohoy, Bohol</option>
                      <option>Danao, Bohol</option>
                      <option>Dauis, Bohol</option>
                      <option>Dimiao, Bohol</option>
                      <option>Duero, Bohol</option>
                      <option>Guindulman, Bohol</option>
                      <option>Inabanga, Bohol</option>
                      <option>Lila, Bohol</option>
                      <option>Loay, Bohol</option>
                      <option>Loboc, Bohol</option>
                      <option>Loon, Bohol</option>
                      <option>Mabini, Bohol</option>
                      <option>Maribojoc, Bohol</option>
                      <option>Panglao, Bohol
                      <option>Pilar, Bohol</option>
                      <option>Pitogo, Bohol</option>
                      <option>Borja, Bohol</option>
                      <option>San Isidro, Bohol</option
                      <optio<option>n>San Miguel, Bohol</option>
                      <option>Sevilla, Bohol</option>
                      <option>Sierra Bullones, Bohol</option>
                      <option>Sikatuna, Bohol</option>
                      <option>Tagbilaran, Bohol</option>
                      <option>Talibon, Bohol</option>
                      <option>Trinidad, Bohol</option>
                      <option>Tubigon, Bohol</option>
                      <option>Ubay, Bohol</option>
                      <option>Baungon, Bukidnon</option>
                      <option>Cabanglasan, Bukidnon"</option>
                      <option>Damulog, Bukidnon</option>
                      <option>Dangcagan, Bukidnin</option>
                      <option>Don Carlos, Bukidnon</option>
                      <option>Impasugong, Bukidnin</option>
                      <option>Kadingilan, Bukidnon</option>
                      <option>Kalilangan, Bukidnon</option>
                      <option>Kibawe, Bukidnon</option>
                      <option>Kitaotao, Bukidnon</option>
                      <option>Lantapan, Bukidnon</option>
                      <option>Libona, Bukidnon</option>
                      <option>Malaybalay, Bukidnon</option>
                      <option>Malitbog, Bukidnon</option>
                      <option>Manolo Fortich, Bukidnon</option>
                      <option>Maramag, Bukidnon</option>
                      <option>Pangantucan, Bukidnon</option>
                      <option>Quezon, Bukidnon</option>
                      <option>San Fernando, Bukidnon</option>
                      <option>Sumilao, Bukidnon</option>
                      <option>Talakag, Bukidnon</option
                      <option>Valencia, Bukidnon</option>
                      <option>Angat, Bulacan</option>
                      <option>Balagtas, Bulacan</option>
                      <option>Baliuag, Bulacan</option>
                      <option>Bocaue, Bulacan</option>
                      <option>Bulakan, Bulacan</option>
                      <option>Bustos, Bulacan</option>
                      <option>Calumpit, Bulacan</option>
                      <option>Doña Remedios Trinidad, Bulacan</option>
                      <option>Guiguinto, Bulacan</option>
                      <option>Hagonoy, Bulacan</option>
                      <option>Malolos, Bulacan</option>
                      <option>Marilao, Bulacan</option>
                      <option>Meycauayan, Bulacan</option>
                      <option>Norzagaray, Bulacan</option>
                      <option>Obando, Bulacan</option>
                      <option>Pandi, Bulacan</option>
                      <option>Paombong, Bulacan</option>
                      <option>Plaridel, Bulacan</option>
                      <option>Pulilan, Bulacan</option>
                      <option>San Ildefonso, Bulacan</option>
                      <option>San Jose del Monte, Bulacan</option>
                      <option>San Miguel, Bulacan</option>
                      <option>San Rafael, Bulacan</option>
                      <option>Santa Maria, Bulacan</option>
                      <option>Abulug, Cagayan</option>
                      <option>Alcala, Cagayan</option>
                      <option>Allacapan, Cagayan</option>
                      <option>Amulung, Cagayan</option>
                      <option>Aparri, Cagayan</option>
                      <option>Baggao, Cagayan</option>
                      <option>Ballesteros, Cagayan</option>
                      <option>Buguey, Cagayan</option>
                      <option>Calayan, Cagayan</option>
                      <option>Camalaniugan, Cagayan</option>
                      <option>Claveria, Cagayan</option>
                      <option>Enrile, Cagayan</option>
                      <option>Gattaran, Cagayan</option>
                      <option>Gonzaga, Cagayan</option>
                      <option>Iguig, Cagayan</option>
                      <option>Lal-lo, Cagayan</option>
                      <option>Lasam, Cagayan</option>
                      <option>Pamplona, Cagayan</option>
                      <option>Peñablanca, Cagayan</option>
                      <option>Piat, Cagayan</option>
                      <option>Rizal, Cagayan</option>
                      <option>Sanchez-Mira, Cagayan</option>
                      <option>Santa Ana, Cagayan</option>
                      <option>Santa Praxedes, Cagayan</option>
                      <option>Santa Teresita, Cagayan</option>
                      <option>Faire, Cagayan</option>
                      <option>Solana, Cagayan</option>
                      <option>Tuao, Cagayan</option>
                      <option>Tuguegarao, Cagayan</option>
                      <option>Basud, Camarines Norte</option
                      <option>Capalonga, Camarines Norte</option>
                      <option>Daet Camarines Norte</option>
                      <option>Jose Panganiban, Camarines Norte</option>
                      <option>Labo, Camarines Norte</option>
                      <option>Mercedes, Camarines Norte</option>
                      <option>Paracale, Camarines Norte</option>
                      <option>San Lorenzo Ruiz, Camarines Norte</option>
                      <option>San Vicente, Camarines Norte</option>
                      <option>Santa Elena, Camarines Norte</option>
                      <option>Talisay, Camarines Norte</option>
                      <option>Vinzons, Camarines Norte</option>
                      <option>Baao, Camarines Sur</option>
                      <option>Balatan, Camarines Sur</option>
                      <option>Bato, Camarines Sur</option>
                      <option>Bombon, camarines Sur</option>
                      <option>Buhi, Camarines Sur</option>
                      <option>Bula, Camarines Sur</option>
                      <option>Cabusao, Camarines Sur</option>
                      <option>Calabanga, Camarines Sur</option>
                      <option>Camaligan, Camarines Sur</option>
                      <option>Canaman, Camarines Sur</option>
                      <option>Caramoan, Camarines Sur</option>
                      <option>Del Gallego, Camarines Sur</option>
                      <option>Gainza, Camarines Sur</option>
                      <option>Garchitorena, Camarines Sur</option>
                      <option>Goa, Camarines Sur</option>
                      <option>Iriga, Camarines Sur</option>
                      <option>Lagonon, Camarines Sur</option>
                      <option>Libmanan, Camarines Sur</option>
                      <option>Lupi, Camarines Sur</option>
                      <option>Magarao, Camarines Sur</option>
                      <option>Milaor, Camarines Sur</option>
                      <option>Minalabac, Camarines Sur</option>
                      <option>Nabua, Camarines Sur</option>
                      <option>Naga, Camarines Sur</option>
                      <option>Ocampo, Camarines Sur</option>
                      <option>Pamplona, Camarines Sur</option>
                      <option>Pasacao, Camarines Sur</option>
                      <option>Pili, Camarines Sur</option>
                      <option>Parubcan, Camarines Sur</option>
                      <option>Ragay, Camarines Sur</option>
                      <option>Sagñay, Camarimes Sur</option>
                      <option>San Fernando, Camarines Sur</option>
                      <option>San Jose, Camarines Sur</option>
                      <option>Sipocot, Camarines Sur</option>
                      <option>Siruma, Camarines Sur</option>
                      <option>Tigaon, Camarines Sur</option>
                      <option>Tinambac, Camarines Sur</option>
                      <option>Catarman, Camiguin</option>
                      <option>Guinsiliban, Camiguin</option>
                      <option>Mahinog, Camiguin</option>
                      <option>Mambajao, Camiguin</option>
                      <option>Sagay, Camiguin</option>
                      <option>Cuartero, Capiz</option>
                      <option>Dao, Capiz</option>
                      <option>Dumalag, Capiz</option>
                      <option>Dumarao, Capiz</option>
                      <option>Ivisan, Capiz</option>
                      <option>Jamindan, Capiz</option>
                      <option>Ma-ayon, Capiz</option>
                      <option>Mambusao, Capiz</option>
                      <option>Panay, Capiz</option>
                      <option>Panitan, Capiz</option>
                      <option>Pilar, Capiz</option>
                      <option>Pontevedra, Capiz</option>
                      <option>President Roxas, Capiz</option>
                      <option>Roxas City</option>
                      <option>Sapian, Capiz</option>
                      <option>Sigma, Capiz</option>
                      <option>Tapaz, Capiz</option>
                      <option>Bagamanoc, Catanduanes</option> 
                      <option>Baras, Catanduanes</option>
                      <option>Bato, Catanduanes</option>
                      <option>Caramoran, Catanduanes</option>
                      <option>Gigmoto, Catanduanes</option>
                      <option>Pandan, Catanduanes</option>
                      <option>Payo, Catanduanes</option>
                      <option>San Andres, Catanduanes</option>
                      <option>San Miguel, Catanduanes</option>
                      <option>Viga, Catanduanes</option>
                      <option>Virac, Catanduanes</option>
                      <option>Alfonso, Cavite</option>
                      <option>Amadeo, Cavite</option>
                      <option>Bacoor, Cavite</option>
                      <option>Carmona, Cavite</option>
                      <option>Cavite City</option>
                      <option>Dasmariñas, Cavite</option>
                      <option>General Emilio Aguinaldo, Cavite</option>
                      <option>Alilem, Ilocos Sur</option>
                      <option>Banayoyo, Ilocos Sur</option>
                      <option>Bantay, Ilocos Sur</option>
                      <option>Burgos, Ilocos Sur</option>
                      <option>Cabugao, Ilocos Sur</option>
                      <option>Candon, Ilocos Sur</option>
                      <option>Caoayan, Ilocos Sur</option>
                      <option>Cervantes, Ilocos Sur</option>
                      <option>Galimuyod, Ilocos Sur</option>
                      <option>Concepcion, Ilocos Sur</option>
                      <option>Lidlidda, Ilocos Sur</option>
                      <option>Magsingal, Ilocos Sur</option>
                      <option>Nagbukel, Ilocos Sur</option>
                      <option>Narvacan, Ilocos Sur</option>
                      <option>Quirino, Ilocos Sur</option>
                      <option>Salcedo, Ilocos Sur</option>
                      <option>San Emilio, Ilocos Sur</option>
                      <option>San Esteban, Ilocos Sur</option>
                      <option>San Ildefonso, Ilocos Sur</option>
                      <option>San Juan, Ilocos Sur</option>
                      <option>San Vicente, Ilocos Sur</option>
                      <option>Santa, Ilocos Sur</option>
                      <option>Santa Catalina, Ilocos Sur</option>
                      <option>Santa Cruz, Ilocos Sur</option>
                      <option>Santa Lucia, Ilocos Sur</option>
                      <option>Santa Maria, Ilocos Sur</option>
                      <option>Santiago, Ilocos Sur</option>
                      <option>Santo Domingo, Ilocos Sur</option>
                      <option>Sigay, Ilocos Sur</option>
                      <option>Sinait, Ilocos Sur</option>
                      <option>Sugpon, Ilocos Sur</option>
                      <option>Suyo, Ilocos Sur</option>
                      <option>Tagudin, Ilocos Sur</option>
                      <option>Vigan, Ilocos Sur</option>
                      <option>Ajuy, Iloilo</option>
                      <option>Alimodian, Iloilo</option>
                      <option>Anilao, Iloilo</option>
                      <option>Badiangan, Iloilo</option>
                      <option>Balasan, Iloilov
                      <option>Banate, Iloilo</option>
                      <option>Barotac Nuevo, Iloilo</option>
                      <option>Barotac Viejo, Iloilo</option>
                      <option>Batad, Iloilo</option>
                      <option>Bingawan, Iloilo</option>
                      <option>Cabatuan, Iloilo</option>
                      <option>Calinog, Iloilo</option>
                      <option>Carles, Iloilo</option>
                      <option>Concepcion, Iloilo</option>
                      <option>Dingle, Iloilo</option>
                      <option>Dueñas, Iloilo</option>
                      <option>Dumangas, Iloilo</option>
                      <option>Estancia, Iloilo</option>
                      <option>Guimbal, Iloilo</option>
                      <option>Igbaras, Iloilo</option>
                      <option>Iloilo City</option>
                      <option>Janiuay, Iloilo</option>
                      <option>Lambunao, Iloilo</option>
                      <option>Leganes, Iloilo</option>
                      <option>Lemery, Iloilo</option>
                      <option>Leon, Iloilo</option>
                      <option>Maasin, Iloilo</option>
                      <option>Miagao, Iloilo</option>
                      <option>Mina, Iloilo</option>
                      <option>New Lucena, Iloilo</option>
                      <option>Oton, Iloilo</option>
                      <option>Passi, Iloilo</option>
                      <option>Pavia, Iloilo</option>
                      <option>Pototan, Iloilo</option>
                      <option>San Dionisio, Iloilo</option>
                      <option>San Enrique, Iloilo</option>
                      <option>San Joaquin, Iloilo</option>
                      <option>San Miguel, Iloilo</option>
                      <option>San Rafael, Iloilo</option>
                      <option>Santa Barbara, Iloilo</option>
                      <option>Sara, Iloilo</option>
                      <option>Tigbauan, Iloilo</option>
                      <option>Tubungan, Iloilo</option>
                      <option>Zarraga, Iloilo</option>
                      <option>Alicia, Isabela</option>
                      <option>Angadanan, Isabela</option>
                      <option>Aurora, Isabela</option>
                      <option>Benito Soliven, Isabela</option>
                      <option>Burgos, Isabela</option>
                      <option>Cabagan, Isabela</option>
                      <option>Cabatuan, Isabela</option>
                      <option>Cauayan, Isabela</option>
                      <option>Cordon, Isabela</option>
                      <option>Magsaysay, Isabela</option>
                      <option>Divilacan, Isabela</option>
                      <option>Echague, Isabela</option>
                      <option>Gamu, Isabela</option>
                      <option>Ilagan, Isabela</option>
                      <option>Jones, Isabela</option>
                      <option>Luna, Isabela</option>
                      <option>Maconacon, Isabela</option>
                      <option>Mallig, Isabela</option>
                      <option>Naguilian, Isabela</option>
                      <option>Palanan, Isabela</option>
                      <option>Quezon, Isabela</option>
                      <option>Quirino, Isabela</option>
                      <option>Ramon, Isabela</option>
                      <option>Reina Mercedes, Isabela</option>
                      <option>Roxas, Isabela</option>
                      <option>San Agustin, Isabela</option>
                      <option>San Guillermo, Isabela</option>
                      <option>San Isidro, Isabela</option>
                      <option>Callang, Isabela</option
                      <option>San Mariano, Isabela</option>
                      <option>San Mateo, Isabela</option>
                      <option>San Pablo, Isabela</option>
                      <option>Santa Maria, Isabela</option>
                      <option>Santiago, Isabela</option>
                      <option>Santo Tomas, Isabela</option>
                      <option>Tumauini, Isabela</option>
                      <option>Balbalan, Kalinga</option>
                      <option>Lubuagan, Kalinga</option>
                      <option>Pasil, Kalinga</option>
                      <option>Pinukpuk, Kalinga</option>
                      <option>Liwan, Kalinga</option>
                      <option>Tabuk, Kalinga</option>
                      <option>Tanudan, Kalinga</option>
                      <option>Tinglayan, Kalinga</option>
                      <option>Agoo, La Union</option>
                      <option>Aringay, La Union</option>
                      <option>Bacnotan, La Union</option>
                      <option>Bagulin, La Union</option>
                      <option>Balaoan, La Union</option>
                      <option>Bangar, La Union</option>
                      <option>Bauang, La Union</option>
                      <option>Burgos, La Union</option>
                      <option>Caba, La Union</option>
                      <option>Luna, La Unuon</option>
                      <option>Naguilian, La Union</option>
                      <option>Pugo, La Union</option>
                      <option>Rosario, La union</option>
                      <option>San Fernando, La Union</option>
                      <option>San Gabriel, La Union</option>
                      <option>San Juan, La Union</option>
                      <option>Santo Tomas, La Union</option>
                      <option>Santol, La Union</option>
                      <option>Sudipen, La Union</option>
                      <option>Tubao, La Union</option>
                      <option>Alaminos, Laguna</option>
                      <option>Bay, Laguna</option>
                      <option>Biñan, Laguna</option>
                      <option>Cabuyao, Laguna</option>
                      <option>Calamba, Laguna</option>
                      <option>Calauan, Laguna</option>
                      <option>Cavinti, Laguna</option>
                      <option>Famy, Laguna</option>
                      <option>Kalayaan, Laguna</option>
                      <option>Liliw, Laguna</option>
                      <option>Los Baños, Laguna</option>
                      <option>Luisiana, Laguna</option>
                      <option>Lumban, Laguna</option>
                      <option>Mabitac, Laguna</option>
                      <option>Magdalena, Laguna</option>
                      <option>Majayjay, Laguna</option>
                      <option>Nagcarlan, Laguna</option>
                      <option>Paete, Laguna</option>
                      <option>Pagsanjan, Laguna</option>
                      <option>Pakil, Laguna</option>
                      <option>Pangil, Laguna</option>
                      <option>Pila, Laguna</option>
                      <option>San Pablo, Laguna</option>
                      <option>San Pedro, Laguna</option>
                      <option>Santa Cruz, Laguna</option>
                      <option>Santa Maria, Laguna</option>
                      <option>Santa Rosa, Laguna</option>
                      <option>Siniloan, Laguna</option>
                      <option>Victoria, Laguna</option>
                      <option>Bacolod, Lanao Del Norte</option>
                      <option>Baloi, Lanao Del Norte</option>
                      <option>Baroy, Lanao Del Norte</option
                      <option>Iligan, Lanao Del Norte</option>
                      <option>Kapatagan, Lanao Del Norte</option>
                      <option>Kauswagan, Lanao Del Norte</option>
                      <option>Kolambugan, Lanao del Norte</option>
                      <option>Lala, Lanao del Norte</option>
                      <option>Linamon, Lanao del Norte</option>
                      <option>Magsaysay, Lanao del Norte</option>
                      <option>Maigo, Lanao del Norte</option>
                      <option>Matungao, Lanao del Norte</option>
                      <option>Munai, Lanao del Norte</option>
                      <option>Nunungan, Lanao del Norte
                      <option>Pantao Ragat, Landao del Norte</option>
                      <option>Pantar, Lanao del Norte</option>
                      <option>Poona Piagapo, Lanao del Norte</option>
                      <option>Salvador, Lanao del Norte</option>
                      <option>Sapad, Lanao del Norte</option>
                      <option>Sultan Naga Dimaporo, Lanao del Norte</option> 
                      <option>Tagoloan, Lanao del Norte</option>
                      <option>Tangcal, Lanao del Norte</option>
                      <option>Tubod, Lanao del Norte</option>
                      <option>Bumbaran, Lanao del Sur</option>
                      <option>Bacolod-Grande, Lanao del Sur</option>
                      <option>Balabagan, Lanao del Sur</option>
                      <option>Watu, Lanao del Sur</option>
                      <option>Bayang, Lanao del Sur</option>
                      <option>Binidayan, Lanao del Sur</option>
                      <option>Buadiposo-Buntong, Lanao del Sur</option>
                      <option>Bubong, Lanao del Sur</option>
                      <option>Butig, Lanao del Sur</option>
                      <option>Calanogas, Lanao del Sur</option>
                      <option>Ditsaan-Ramain, Lanao del Sur</option>
                      <option>Ganassi, Lanao del Sur</option>
                      <option>Kapai, Lanao del Sur</option>
                      <option>Kapatagan, Lanao del Sur</option>
                      <option>Maguing, Lanao del Sur</option>
                      <option>Lumbaca-Unayan, Lanao del Sur</option>
                      <option>Lumbatan, Lanao del Sur</option>
                      <option>Lumbayanague, Lanao del Sur</option>
                      <option>Madalum, Lanao del Sur</option>
                      <option>Madamba, Lanao del Sur</option>
                      <option>Maguing, Lanao del Sur</option>
                      <option>Malabang, Lanao del Sur</option>
                      <option>Marantao, Lanao del Sur</option>
                      <option>Marawi, Lanao del Sur</option>
                      <option>Marogong, Lanao del Sur</option>
                      <option>Masiu, Lanao del Sur</option>
                      <option>Mulondo, Lanao del Sur</option>
                      <option>Pagayawan, Lanao del Sur</option>
                      <option>Piagapo, Lanao del Sur</option>
                      <option>Picong, Lanao del Sur</option>
                      <option>Poona, Bayabao Lanao del Sur</option>
                      <option>Pualas, Lanao del Sur</option>
                      <option>Saguiaran, Lanao del Sur</option>
                      <option>Sultan Dumalondong, Lanao del Sur</option>
                      <option>Tagoloan II, Lanao del Sur</option>
                      <option>Tamparan, Lanao del Sur</option>
                      <option>Taraka, Lanao del Sur</option>
                      <option>Tubaran, Lanao del Sur</option>
                      <option>Tugaya, Lanao del Sur</option>
                      <option>Wao, Lanao del Sur</option>
                      <option>Abuyog, Leyte</option>
                      <option>Alangalang, Leyte</option>
                      <option>Albuera, Leyte</option>
                      <option>Babatngon, Leyte</option>
                      <option>Barugo, Leyte</option>
                      <option>Bato, Leyte</option>
                      <option>Baybay, Leyte</option>
                      <option>Burauen, Leyte</option>
                      <option>Calubian, Leyte</option>
                      <option>Capoocan, Leyte</option>
                      <option>Carigara, Leyte</option>
                      <option>Dagami, Leyte</option>
                      <option>Dulag, Leyte</option>
                      <option>Hilongos, Leyte</option>
                      <option>Hindang, Leyte</option>
                      <option>Inopacan, Leyte</option>
                      <option>Isabel, Leyte</option>
                      <option>Jaro, Leyte</option>
                      <option>Javier Bugho, Leyte</option>
                      <option>Julita, Leyte</option>
                      <option>Kananga, Leyte </option>
                      <option>La Paz, Leyte</option>
                      <option>MacArthur, Leyte</option>
                      <option>Mahaplag, Leyte</option>
                      <option>Matag-ob, Leyte</option>
                      <option>Matalom, Leyte</option>
                      <option>Mayorga, Leyte</option>
                      <option>Merida, Leyte</option>
                      <option>Ormoc, Leyte</option>
                      <option>Palo, Leyte</option>
                      <option>Palompon, Leyte</option>
                      <option>Pastrana, Leyte</option>
                      <option>San Isidro, Leyte</option>
                      <option>San Miguel, Leyte</option>
                      <option>Santa Fe, Leyte</option>
                      <option>Tabango, Leyte</option>
                      <option>Tabontabon, Leyte</option>
                      <option>Tacloban, Leyte</option>
                      <option>Tanauan, Leyte</option>
                      <option>Tolosa, Leyte</option>
                      <option>Tunga, Leyte</option>
                      <option>Villaba, Leyte</option>
                      <option>Ampatuan, Maguindanao</option>
                      <option>Barira, Maguindanao</option>
                      <option>Buldon, Maguindanao</option>
                      <option>Buluan, Maguindanao</option>
                      <option>Cotabato City, Maguindanao</option>
                      <option>Datu Abdullah Sangki, Maguindanao</option>
                      <option>Datu Anggal Midtimbang, Maguindanao</option>
                      <option>Datu Blah T. Sinsuat, Maguindanao</option>
                      <option>Datu Hoffer, Maguindanao</option>
                      <option>Datu Montawal, Maguindanao</option>
                      <option>Datu Odin Sinsuat, Maguindanao</option>
                      <option>Datu Paglas, Maguindanao</option>
                      <option>Datu Piang Dulawan, Maguindanao</option>
                      <option>Datu Salibo, Maguindanao</option>
                      <option>Datu Saudi-Ampatuan, Maguindanao</option> 
                      <option>Datu Unsay, Maguindanao</option>
                      <option>General Salipada K. Pendatun, Maguindanao</option>
                      <option>Guindulungan, Maguindanao</option>
                      <option>Kabuntalan, Maguindanao</option>
                      <option>Mamasapano, Maguindanao</option>
                      <option>Mangudadatu, Maguindanao</option>
                      <option>Matanog, Maguindanao</option>
                      <option>Northern Kabuntalan, Maguindanao</option>
                      <option>Pagalungan, Maguindanao</option>
                      <option>Paglat, Maguindanao</option>
                      <option>Pandag, Maguindanao</option>
                      <option>Parang, Maguindanao</option>
                      <option>Rajah Buayan, Maguindanao</option>
                      <option>Shariff Aguak, Maguindanao</option>
                      <option>Shariff Saydona Mustapha, Maguindanao</option>
                      <option>South Upi, Maguindanao</option>
                      <option>Sultan Kudarat, Maguindanao</option>
                      <option>Sultan Mastura, Maguindanao</option>
                      <option>Sultan sa Barongis, Maguindanao</option>
                      <option>Sultan Sumagka, Maguindanao</option>
                      <option>Talayan, Maguindanao</option>
                      <option>Upi, Maguindanao</option>
                      <option>Boac, Marinduque</option>
                      <option>Buenavista, Marinduque</option>
                      <option>Gasan, Marinduque</option>
                      <option>Mogpog, Marinduque</option>
                      <option>Santa Cruz, Marinduque</option>
                      <option> Torrijos, Marinduque</option>
                      <option> Aroroy, Masbate</option>
                      <option>Baleno, Masbate</option>
                      <option>Balud, Masbate</option>
                      <option>Batuan, Masbate</option>
                      <option>Cataingan, Masbate</option>
                      <option>Cawayan, Masbate</option>
                      <option>Claveria, Masbate</option>
                      <option>Dimasalang, Masbate</option>
                      <option>Esperanza, Masbate</option>
                      <option>Mandaon, Masbate</option>
                      <option>Milagros, Masbate</option>
                      <option>Mobo, Masbate</option>
                      <option>Monreal, Masbate</option>
                      <option>Palanas, Masbate</option>
                      <option>Pio V. Corpuz, Masbate</option>
                      <option>Placer, Masbate</option>
                      <option>San Fernando, Masbate</option>
                      <option>San Jacinto, Masbate</option>
                      <option>San Pascual, Masbate</option>
                      <option>Uson, Masbate</option>
                      <option>Aloran, Misamis Occidental</option>
                      <option>Baliangao, Misamis Occidental</option>
                      <option>Bonifacio, Misamis Occidental</option>
                      <option>Calamba, Misamis Occidental</option>
                      <option>Clarin, Misamis Occidental</option>
                      <option>Concepcion, Misamis Occidental</option>
                      <option>Don Victoriano Chiongbian, Misamis Occidental</option> 
                      <option>Jimenez, Misamis Occidental</option>
                      <option>Lopez Jaena, Misamis Occidental</option>
                      <option>Oroquieta, Misamis Occidental</option>
                      <option>Ozamiz, Misamis Occidental</option>
                      <option>Panaon, Misamis Occidental</option>
                      <option>Plaridel, Misamis Occidental</option>
                      <option>Sapang Dalaga, Misamis Occidental</option>
                      <option>Sinacaban, Misamis Occidental</option>
                      <option>Tangub, Misamis Occidental</option>
                      <option>Tudela, Misamis Occidental</option>
                      <option>Alubijid, Misamis Oriental</option>
                      <option>Balingasag, Misamis Oriental</option>
                      <option>Balingoan, Misamis Oriental</option>
                      <option>Binuangan, Misamis Oriental</option>
                      <option>Cagayan de Oro, Misamis Oriental</option>
                      <option>Claveria, Misamis Oriental</option>
                      <option>El Salvador, Misamis Oriental</option>
                      <option>Gingoog, Misamis Oriental</option><option>
                      <option>Gitagum, Misamis Oriental</option>
                      <option>Initao, Misamis Oriental</option>
                      <option>Jasaan, Misamis Oriental</option>
                      <option>Kinoguitan, Misamis Oriental</option>
                      <option>Lagonglong, Misamis Oriental</option>
                      <option>Laguindingan, Misamis Oriental</option>
                      <option>Libertad, Misamis Oriental</option>
                      <option>Lugait, Misamis Oriental</option>
                      <option>Magsaysay, Misamis Oriental</option>
                      <option>Manticao, Misamis Oriental</option>
                      <option>Medina, Misamis Oriental</option>
                      <option>Naawan, Misamis Oriental</option>
                      <option>Opol, Misamis Oriental</option>
                      <option>Salay, Misamis Oriental</option>
                      <option>Sugbongcogon, Misamis Oriental</option>
                      <option>Tagoloan, Misamis Oriental</option>
                      <option>Talisayan, Misamis Oriental</option>
                      <option>Villanueva, Misamis Oriental</option>
                      <option>Barlig, Mountain</option>
                      <option>Bauko, Mountain</option>
                      <option>Besao, Mountain</option>
                      <option>Bontoc, Mountain</option>
                      <option>Natonin, Mountain</option>
                      <option>Paracelis, Mountain</option>
                      <option>Sabangan, Mountain</option>
                      <option>Sadanga, Mountain</option>
                      <option>Sagada, Mountain</option>
                      <option>Tadian, Mountain</option>
                      <option>Mandaluyong, NCR</option>
                      <option>Marikina, NCR</option>
                      <option>Pasig, NCR</option>
                      <option>Quezon City, NCR</option>
                      <option>San Juan, NCR</option>
                      <option>Caloocan, NCR</option>
                      <option>Malabon, NCR</option>
                      <option>Navotas, NCR</option>
                      <option>Valenzuela, NCR</option>
                      <option>Las Piñas, NCR</option>
                      <option>Makati, NCR</option>
                      <option>Muntinlupa, NCR</option>
                      <option>Parañaque, NCR</option>
                      <option>Pasay, NCR</option>
                      <option>Pateros, NCR</option>
                      <option>Taguia, NCR</option>
                      <option>Manila, NCR</option>
                      <option>Bacolod, Negros Occidental</option>
                      <option>Bago, Negros Occidental</option>
                      <option>Binalbagan, Negros Occidental</option>
                      <option>Cadiz, Negros Occidental</option>
                      <option>Calatrava, Negros Occidental</option>
                      <option>Candoni, Negros Occidental</option>
                      <option>Cauayan, Negros Occidental</option>
                      <option>Enrique B. Magalona, Negros Occidental</option>
                      <option>Escalante, Negros Occidental</option>
                      <option>Himamaylan, Negros Occidental</option>
                      <option>Hinigaran, Negros Occidental</option>
                      <option>Hinoba-an, Negros Occidental</option>
                      <option>Ilog, Negros Occidental</option>
                      <option>Isabela, Negros Occidental</option>
                      <option>Kabankalan, Negros Occidental</option>
                      <option>La Carlota Negros Occidental</option>
                      <option>La Castellana, Negros Occidental</option>
                      <option>Manapla, Negros Occidental</option>
                      <option>Moises Padilla, Negros Occidental</option>
                      <option>Murcia Negros Occidental</option>
                      <option>Pontevedra, Negros Occidental</option>
                      <option>Pulupandan, Negros Occidental</option>
                      <option>Sagay, Negros Occidental</option>
                      <option>Salvador Benedicto, Negros Occidental</option>
                      <option>San Carlos, Negros Occidental</option>
                      <option>San Enrique, Negros Occidental</option>
                      <option>Silay, Negros Occidental</option>
                      <option>Sipalay, Negros Occidental</option>
                      <option>Talisay, Negros Occidental</option>
                      <option>Toboso, Negros Occidental</option>
                      <option>Valladolid, Negros Occidental</option>
                      <option>Victorias, Negros Occidental</option>
                      <option>Amlan, Negros Oriental</option>
                      <option>Ayungon, Negros Oriental</option>
                      <option>Bacong, Negros Oriental</option>
                      <option>Bais, Negros Oriental</option>
                      <option>Basay, Negros Oriental</option>
                      <option>Bayawan, Negros Oriental</option>
                      <option>Bindoy, Negros Oriental</option>
                      <option>Canlaon, Negros Oriental</option>
                      <option>Dauin, Negros Oriental</option>
                      <option>Dumaguete, Negros Oriental</option>
                      <option>Guihulngan, Negros Oriental</option>
                      <option>Jimalalud, Negros Oriental</option>
                      <option>La Libertad, Negros Oriental</option>
                      <option>Mabinay, Negros Oriental</option>
                      <option>Manjuyod, Negros Oriental</option>
                      <option>Pamplona, Negros Oriental</option>
                      <option>San Jose, Negros Oriental</option>
                      <option>Santa Catalina, Negros Oriental</option>
                      <option>Siaton, Negros Oriental</option>
                      <option>Sibulan, Negros Oriental</option>
                      <option>Tanjay, Negros Oriental</option>
                      <option>Tayasan, Negros Oriental</option>
                      <option>Valencia, Negros Oriental</option>
                      <option>Vallehermoso, Negros Oriental</option>
                      <option>Zamboanguita, Negros Oriental</option>
                      <option>Allen, Northern Samar</option>
                      <option>Biri, Northern Samar</option>
                      <option>Bobon, Northern Samar</option>
                      <option>Capul, Northern Samar</option>
                      <option>Catarman, Northern Samar</option>
                      <option>Catubig, Northern Samar</option>
                      <option>Gamay, Northern Samar</option>
                      <option>Laoang, Northern Samar</option>
                      <option>Lapinig, Northern Samar</option>
                      <option>Las Navas, Northern Samar</option>
                      <option>Lavezares, Northern Samar</option>
                      <option>Lope de Vega, Northern Samar</option>
                      <option>Mapanas, Northern Samar</option>
                      <option>Mondragon, Northern Samar</option>
                      <option>Palapag, Northern Samar</option>
                      <option>Pambujan, Northern Samar</option>
                      <option>Rosario, Northern Samar</option>
                      <option>San Antonio, Northern Samar</option>
                      <option>San Isidro, Northern Samar</option>
                      <option>San Jose, Northern Samar</option>
                      <option>San Roque, Northern Samar</option>
                      <option>San Vicente, Northern Samar</option>
                      <option>Silvino Lobos, Northern Samar</option>
                      <option>Victoria, Northern Samar</option>
                      <option>Aliaga, Nueva Ecija</option>
                      <option>Bongabon, Nueva Ecija</option>
                      <option>Cabanatuan, Nueva Ecija</option>
                      <option>Cabiao, Nueva Ecija</option>
                      <option>Carranglan, Nueva Ecija</option>
                      <option>Cuyapo, Nueva Ecija</option>
                      <option>Gabaldon, Nueva Ecija</option>
                      <option>Gapan, Nueva Ecija</option>
                      <option>General Mamerto Natividad, Nueva Ecija</option>
                      <option>General Tinio, Nueva Ecija</option>
                      <option>Guimba, Nueva Ecija</option>
                      <option>Jaen, Nueva Ecija</option>
                      <option>Laur, Nueva Ecija</option>
                      <option>Licab, Nueva Ecija</option>
                      <option>Llanera, Nueva Ecija</option>
                      <option>Lupao, Nueva Ecija</option>
                      <option>Muñoz, Nueva Ecija</option>
                      <option>Nampicuan, Nueva Ecija</option>
                      <option>Palayan, Nueva Ecija</option>
                      <option>Pantabangan, Nueva Ecija</option>
                      <option>Peñaranda, Nueva Ecija</option>
                      <option>Quezon, Nueva Ecija</option>
                      <option>Rizal, Nueva Ecija</option>
                      <option>San Antonio, Nueva Ecija</option>
                      <option>San Isidro, Nueva Ecija</option>
                      <option>San Jose, Nueva Ecija</option>
                      <option>San Leonardo, Nueva Ecija</option>
                      <option>Santa Rosa, Nueva Ecija</option>
                      <option>Santo Domingo, Nueva Ecija</option>
                      <option>Talavera, Nueva Ecija</option>
                      <option>Talugtug, Nueva Ecija</option>
                      <option>Zaragoza, Nueva Ecija</option>
                      <option>Alfonso Castañeda, Nueva Vizcaya</option>
                      <option>Ambaguio, Nueva Vizcaya</option>
                      <option>Aritao, Nueva Vizcaya</option>
                      <option>Bagabag, Nueva Vizcaya</option>
                      <option>Bambang, Nueva Vizcaya</option>
                      <option>Bayombong, Nueva Vizcaya</option>
                      <option>Diadi, Nueva Vizcaya</option>
                      <option>Dupax del Norte, Nueva Vizcaya</option>
                      <option>Dupax del Sur, Nueva Vizcaya</option>
                      <option>Kasibu, Nueva Vizcaya</option>
                      <option>Kayapa, Nueva Vizcaya</option>
                      <option>Quezon, Nueva Vizcaya</option>
                      <option>Imugan, Nueva Vizcaya</option>
                      <option>Solano, Nueva Vizcaya</option>
                      <option>Ibung, Nueva Vizcaya</option>
                      <option>Abra de Ilog, Occidental Mindoro</option>
                      <option>Calintaan, Occitendal Mindoro</option>
                      <option>Looc, Occidental Mindoro</option>
                      <option>Lubang, Occidental Mindoro</option>
                      <option>Magsaysay, Occidental Mindoro</option>
                      <option>Mamburao, Occidental Mindoro</option>
                      <option>Paluan, Occidental Mindoro</option>
                      <option>Rizal, Occidental Mindoro</option>
                      <option>Sablayan, Occidental Mindoro</option>
                      <option>San Jose, Occidental Mindoro</option>
                      <option>Santa Cruz, Occidental Mindoro</option>
                      <option>Aborlan, Palawan</option>
                      <option>Agutaya, Palawan</option>
                      <option>Araceli, Palawan</option>
                      <option>Balabac, Palawan</option>
                      <option>Bataraza, Palawan</option>
                      <option>Brooke’s Point, Palawan</option>
                      <option>Busuanga, Palawan</option>
                      <option>Cagayancillo, Palawan</option>
                      <option>Coron, Palawan</option>
                      <option>Culion, Palawan</option>
                      <option>Cuyo, Palawan</option>
                      <option>Dumaran, Palawan</option>
                      <option>El Nido, Palawan</option>
                      <option>Kalayaan, Palawan</option>
                      <option>Linapacan, Palawan</option>
                      <option>Magsaysay, Palawan</option>
                      <option>Narra, Palawan</option>
                      <option>Puerto Princesa, Palawan</option>
                      <option>Quezon, Palawan</option>
                      <option>Rizal, Palawan</option>
                      <option>Roxas, Palawan</option>
                      <option>San Vicente, Palawan</option>
                      <option>Sofronio Española, Palawan</option>
                      <option>Taytay, Palawan</option>
                      <option>Angeles, Pampanga</option>
                      <option>Apalit, Pampanga</option>
                      <option>Arayat, Pampanga</option>
                      <option>Bacolor, Pampanga</option>
                      <option>Candaba, Pampanga</option>
                      <option>Floridablanca, Pampanga</option>
                      <option>Guagua, Pampanga</option>
                      <option>Lubao, Pampanga</option>
                      <option>Mabalacat, Pampanga</option>
                      <option>Macabebe, Pampanga</option>
                      <option>Magalang, Pampanga</option>
                      <option>Masantol, Pampanga</option>
                      <option>Mexico, Pampanga</option>
                      <option>Minalin, Pampanga</option>
                      <option>Porac, Pampanga</option>
                      <option>San Fernando, Pampanga</option>
                      <option>San Luis, Pampanga</option>
                      <option>San Simon, Pampanga</option>
                      <option>Santa Ana, Pampanga</option>
                      <option>Santa Rita, Pampanga</option>
                      <option>Santo Tomas, Pampanga</option>
                      <option>Sasmuan, Pampanga</option>
                      <option>Agno, Pangasinan</option>
                      <option>Aguilar, Pangasinan</option>
                      <option>Alaminos, Pangasinan</option>
                      <option>Alcala, Pangasinan</option>
                      <option>Anda, Pangasinan</option>
                      <option>Asingan, Pangasinan</option>
                      <option>Balungao, Pangasinan</option>
                      <option>Bani, Pangasinan</option>
                      <option>Basista, Pangasinan</option>
                      <option>Bautista, Pangasinan</option>
                      <option>Bayambang, Pangasinan</option>
                      <option>Binalonan, Pangasinan</option>
                      <option>Binmaley, Pangasinan</option>
                      <option>Bolinao, Pangasinan</option>
                      <option>Bugallon, Pangasinan</option>
                      <option>Burgos, Pangasinan</option>
                      <option>Calasiao, Pangasinan</option>
                      <option>Dagupan, Pangasinan</option>
                      <option>Dasol, Pangasinan</option>
                      <option>Infanta, Pangasinan</option>
                      <option>Labrador, Pangasinan</option>
                      <option>Laoac, Pangasinan</option>
                      <option>Lingayen, Pangasinan</option>
                      <option>Mabini, Pangasinan</option>
                      <option>Malasiqui, Pangasinan</option>
                      <option>Manaoag, Pangasinan</option>
                      <option>Mangaldan, Pangasinan</option>
                      <option>Mangatarem, Pangasinan</option>
                      <option>Mapandan, Pangasinan</option>
                      <option>Natividad, Pangasinan</option>
                      <option>Pozorrubio, Pangasinan</option>
                      <option>Rosales, Pangasinan</option>
                      <option>San Carlos, Pangasinan</option>
                      <option>San Fabian, Pangasinan</option>
                      <option>San Jacinto, Pangasinan</option>
                      <option>San Manuel, Pangasinan</option>
                      <option>San Nicolas, Pangasinan</option>
                      <option>San Quintin, Pangasinan</option>
                      <option>Santa Barbara, Pangasinan</option>
                      <option>Santa Maria, Pangasinan</option>
                      <option>Santo Tomas, Pangasinan</option>
                      <option>Sison, Pangasinan</option>
                      <option>Sual, Pangasinan</option>
                      <option>Tayug, Pangasinan</option>
                      <option>Umingan, Pangasinan</option>
                      <option>Urbiztondo, Pangasinan</option>
                      <option>Urdaneta, Pangasinan</option>
                      <option>Villasis, Pangasinan</option>
                      <option>Agdangan, Quezon</option>
                      <option>Alabat, Quezon</option>
                      <option>Atimonan, Quezon</option>
                      <option>Buenavista, Quezon</option>
                      <option>Burdeos, Quezon</option>
                      <option>Calauag, Quezon</option>
                      <option>Candelaria, Quezon</option>
                      <option>Catanauan, Quezon</option>
                      <option>Dolores, Quezon</option>
                      <option>General Luna, Quezon</option>
                      <option>General Nakar, Quezon</option>
                      <option>Guinayangan, Quezon</option>
                      <option>Gumaca, Quezon</option>
                      <option>Infanta, Quezon</option>
                      <option>Jomalig, Quezon</option>
                      <option>Lopez, Quezon</option>
                      <option>Lucban, Quezon</option>
                      <option>Lucena, Quezon</option>
                      <option>Macalelon, Quezon</option>
                      <option>Mauban, Quezon</option>
                      <option>Mulanay, Quezon</option>
                      <option>Padre Burgos, Quezon</option>
                      <option>Pagbilao, Quezon</option>
                      <option>Panukulan, Quezon</option>
                      <option>Patnanungan, Quezon</option>
                      <option>Perez, Quezon</option>
                      <option>Pitogo, Quezon</option>
                      <option>Plaridel, Quezon</option>
                      <option>Polillo, Quezon</option>
                      <option>Quezon City</option>
                      <option>Real, Quezon</option>
                      <option>Sampaloc, Quezon</option>
                      <option>San Andres, Quezon</option>
                      <option>San Antonio, Quezon</option>
                      <option>San Francisco, Quezon</option>
                      <option>San Narciso, Quezon</option>
                      <option>Sariaya, Quezon</option>
                      <option>Tagkawayan, Quezon</option>
                      <option>Tayabas, Quezon</option>
                      <option>Tiaong, Quezon</option>
                      <option>Unisan, Quezon</option>
                      <option>Aglipay, Quirino</option>
                      <option>Cabarroguis, Quirino</option>
                      <option>Diffun, Quirino</option>
                      <option>Maddela, Quirino</option>
                      <option>Nagtipunan, Quirino</option>
                      <option>Saguday, Quirino</option>
                      <option>Angono, Rizal</option>
                      <option>Antipolo, Rizal</option>
                      <option>Baras, Rizal</option>
                      <option>Binangonan, Rizal</option>
                      <option>Cainta, Rizal</option>
                      <option>Cardona, Rizal</option>
                      <option>Jalajala, Rizal</option>
                      <option>Morong, Rizal</option>
                      <option>Pililla, Rizal</option>
                      <option>Montalban, Rizal</option>
                      <option>San Mateo, Rizal</option>
                      <option>Tanay, Rizal</option>
                      <option>Taytay, Rizal</option>
                      <option>Teresa, Rizal</option>
                      <option>Alcantara, Romblon</option>
                      <option>Banton, Romblon</option>
                      <option>Cajidiocan, Romblon</option>
                      <option>Calatrava, Romblon</option>
                      <option>Concepcion, Romblon</option>
                      <option>Corcuera, Romblon</option>
                      <option>Ferrol, Romblon</option>
                      <option>Looc, Romblon</option>
                      <option>Magdiwang, Romblon</option>
                      <option>Odiongan, Romblon</option>
                      <option>Romblon, Romblon</option>
                      <option>San Agustin, Romblon</option>
                      <option>San Andres, Romblon</option>
                      <option>San Fernando, Romblon</option>
                      <option>San Jose, Romblon</option>
                      <option>Santa Fe, Romblon</option>
                      <option>Santa Maria, Romblon</option>
                      <option>Almagro, Samar</option>
                      <option>Basey, Samar</option>
                      <option>Calbayog, Samar</option>
                      <option>Calbiga, Samar</option>
                      <option>Catbalogan, Samar</option>
                      <option>Daram, Samar</option>
                      <option>Gandara, Samar</option>
                      <option>Hinabangan, Samar</option>
                      <option>Jiabong, Samar</option>
                      <option>Marabut, Samar</option>
                      <option>Matuguinao, Samar</option>
                      <option>Motiong, Samar</option>
                      <option>Pagsanghan, Samar</option>
                      <option>Paranas, Samar</option>
                      <option>Pinabacdao, Samar</option>
                      <option>San Jorge, Samar</option>
                      <option>San Jose de Buan, Samar</option>
                      <option>San Sebastian, Samar</option>
                      <option>Santa Margarita, Samar</option>
                      <option>Santa Rita, Samar</option>
                      <option>Santo Niño, Samar</option>
                      <option>Tagapul-an, Samar</option>
                      <option>Talalora, Samar</option>
                      <option>Tarangnan, Samar</option>
                      <option>Villareal, Samar</option>
                      <option>Zumarraga, Samar</option>
                      <option>Alabel, Sarangani</option>
                      <option>Glan, Sarangani</option>
                      <option>Kiamba, Sarangani</option>
                      <option>Maasim, Sarangani</option>
                      <option>Maitum, Sarangani</option>
                      <option>Malapatan, Sarangani</option>
                      <option>Malungon, Sarangani</option>
                      <option>Enrique Villanueva, Siquijor</option>
                      <option>Larena, Siquijor</option>
                      <option>Lazi, Siquijor</option>
                      <option>Maria, Siquijor</option>
                      <option>San Juan, Siquijor</option>
                      <option>Siquijor, Siquijor</option>
                      <option>Sorsogon Province, Siquijor</option>
                      <option>Banga, South Cotabato</option>
                      <option>General Santos, South Cotabato</option>
                      <option>Koronadal, South Cotabato</option>
                      <option>Lake Sebu, South Cotabato</option>
                      <option>Norala, South Cotabato</option>
                      <option>Polomolok, South Cotabato</option>
                      <option>Santo Niño, South Cotabato</option>
                      <option>Surallah, South Cotabato</option>
                      <option>T’Boli, South Cotabato</option>
                      <option>Tampakan, South Cotabato</option>
                      <option>Tantangan, South Cotabato</option>
                      <option>Tupi, South Cotabato</option>
                      <option>Anahawan, Southern Leyte</option><option><option>
                      <option>Bontoc, Southern Leyte</option>
                      <option>Hinunangan, Southern Leyte</option>
                      <option>Hinundayan, Southern Leyte</option>
                      <option>Libagon, Southern Leyte</option>
                      <option>Liloan, Southern Leyte</option>
                      <option>Limasawa, Southern Leyte</option>
                      <option>Maasin, Southern Leyte</option>
                      <option>Macrohon, Southern Leyte</option>
                      <option>Malitbog, Southern Leyte</option>
                      <option>Padre Burgos, Southern Leyte</option>
                      <option>Pintuyan, Southern Leyte</option>
                      <option>Saint Bernard, Southern Leyte</option>
                      <option>San Francisco, Southern Leyte</option>
                      <option>Cabalian, Southern Leyte</option>
                      <option>San Ricardo, Southern Leyte</option>
                      <option>Silago, Southern Leyte</option>
                      <option>Sogod, Southern Leyte</option>
                      <option>Tomas Oppus, Southern Leyte</option>
                      <option>Bagumbayan, Sultan Kudarat</option>
                      <option>Columbio, Sultan Kudarat</option>
                      <option>Esperanza, Sultan Kudarat</option>
                      <option>Isulan, Sultan Kudarat</option>
                      <option>Kalamansig, Sultan Kudarat</option>
                      <option>Lambayong, Sultan Kudarat</option>
                      <option>Lebak, Sultan Kudarat</option>
                      <option>Lutayan, Sultan Kudarat</option>
                      <option>Palimbang, Sultan Kudarat</option>
                      <option>Tacurong, Sultan Kudarat</option>
                      <option>Banguingui, Sulu</option>
                      <option>Marunggas, Sulu</option>
                      <option>Indanan, Sulu</option>
                      <option>Jolo, Sulu</option>
                      <option>Kalingalan Caluang, Sulu</option>
                      <option>Lugus, Sulu</option>
                      <option>Luuk, Sulu</option>
                      <option>Maimbung, Sulu</option>
                      <option>Old Panamao, Sulu</option>
                      <option>Omar, Sulu</option>
                      <option>Pandami, Sulu</option>
                      <option>New Panamao, Sulu</option>
                      <option>Pangutaran, Sulu</option>
                      <option>Parang, Sulu</option>
                      <option>Pata, Sulu</option>
                      <option>Patikul, Sulu</option>
                      <option>Siasi, Sulu</option>
                      <option>Talipao, Sulu</option>
                      <option>Tapul, Sulu</option>
                      <option>Alegria, Surigao Del Norte</option>
                      <option>Bacuag, Surigao Del Norte</option>
                      <option>Burgos, Surigao Del Norte</option>
                      <option>Claver, Surigao Del Norte</option>
                      <option>Dapa, Surigao Del Norte</option>
                      <option>Del Carmen, Surigao Del Norte</option>
                      <option>General Luna, Surigao Del Norte</option>
                      <option>Gigaquit, Surigao Del Norte</option>
                      <option>Mainit, Surigao Del Norte</option>
                      <option>Malimono, Surigao Del Norte</option>
                      <option>Pilar, Surigao Del Norte</option>
                      <option>Placer, Surigao Del Norte</option>
                      <option>San Benito, Surigao Del Norte</option>
                      <option>Anao-Aon, Surigao Del Norte</option>
                      <option>San Isidro, Surigao Del Norte</option>
                      <option>Sapao, Surigao Del Norte</option>
                      <option>Sison, Surigao Del Norte</option>
                      <option>Socorro, Surigao Del Norte</option>
                      <option>Surigao City</option>
                      <option>Tagana-an, Surigao Del Norte</option>
                      <option>Tubod, Surigao Del Norte</option>
                      <option>Barobo, Surigao Del Sur</option>
                      <option>Bayabas, Surigao Del Sur</option>
                      <option>Bislig, Surigao Del Sur</option>
                      <option>Cagwait, Surigao Del Sur</option>
                      <option>Cantilan, Surigao Del Sur</option>
                      <option>Carmen, Surigao Del Sur</option>
                      <option>Carrascal, Surigao Del Sur</option>
                      <option>Cortes, Surigao Del Sur</option>
                      <option>Hinatuan, Surigao Del Sur</option>
                      <option>Lanuza, Surigao Del Sur</option>
                      <option>Lianga, Surigao Del Sur</option>
                      <option>Lingig, Surigao del Sur</option>
                      <option>Madrid, Surigao Del Sur</option>
                      <option>Marihatag, Surigao Del Sur</option>
                      <option>San Agustin, Surigak Del Sur</option>
                      <option>San Miguel, Surigao Del Sur</option>
                      <option>Tagbina, Surigao Del Sur</option>
                      <option>Tago, Surigao Del Sur</option>
                      <option>Tandag, Surigao Del Sur</option>
                      <option>Anao, Tarlac</option>
                      <option>Bamban, Tarlac</option>
                      <option>Camiling, Tarlac</option>
                      <option>Capas, Tarlac</option>
                      <option>Concepcion, Tarlac</option>
                      <option>Gerona, Tarlac</option>
                      <option>La Paz, Tarlac</option>
                      <option>Mayantoc, Tarlac</option>
                      <option>Moncada, Tarlac</option>
                      <option>Paniqui, Tarlac</option>
                      <option>Pura, Tarlac</option>
                      <option>Ramos, Tarlac</option>
                      <option>San Clemente, Tarlac</option>
                      <option>San Jose, Tarlac</option>
                      <option>San Manuel, Tarlac</option
                      <option>Santa Ignacia, Tarlac</option>
                      <option>Victoria, Tarlac</option>
                      <option>Bongao, Tawi-Tawi</option>
                      <option>Languyan, Tawi-Tawi</option>
                      <option>Mapun, Tawi-Tawi</option>
                      <option>Balimbing, Tawi-Tawi</option>
                      <option>Sapa-Sapa, Tawi-Tawi</option>
                      <option>Sibutu, Tawi-Tawi</option>
                      <option>Simunul, Tawi-Tawi</option>
                      <option>Sitangkai, Tawi-Tawi</option>
                      <option>South Ubian, Tawi-Tawi</option>
                      <option>Tandubas, Tawi-Tawi</option>
                      <option>Taganak, Tawi-Tawi</option>
                      <option>Botolan, Zambales</option>
                      <option>Cabangan, Zambales</option>
                      <option>Candelaria, Zambales</option>
                      <option>Castillejos, Zambales</option>
                      <option>Iba, Zambales</option>
                      <option>Masinloc, Zambales</option>
                      <option>Olongapo, Zambales</option>
                      <option>Palauig, Zambales</option>
                      <option>San Antonio, Zambales</option>
                      <option>San Felipe, Zambales</option>
                      <option>San Marcelino, Zambales</option>
                      <option>San Narciso, Zambales</option>
                      <option>Santa Cruz, Zambales</option>
                      <option>Subic, Zambales</option>
                      <option>Baliguian, Zamboanga Del Norte</option>
                      <option>Dapitan, Zamboanga Del Norte</option>
                      <option>Dipolog, Zamboanga Del Norte</option>
                      <option>Godod, Zamboanga Del Norte</option>
                      <option>Gutalac, Zamboanga Del Norte</option>
                      <option>Ponot, Zamboanga Del Norte</option>
                      <option>Kalawit, Zamboanga Del Norte</option>
                      <option>Katipunan, Zamboanga Del Norte</option>
                      <option>La Libertad, Zamboanga Del Norte</option>
                      <option>Labason, Zamboanga Del Norte</option>
                      <option>Bacungan, Zamboanga Del Norte</option>
                      <option>Liloy, Zamboanga Del Norte</option>
                      <option>Manukan, Zamboanga Del Norte</option>
                      <option>Mutia, Zamboanga Del Norte</option>
                      <option>Piñan, Zamboanga Del Norte</option>
                      <option>Polanco, Zamboanga Del Norte</option>
                      <option>Rizal, Zamboanga Del Norte</option>
                      <option>Salug, Zamboanga Del Norte</option>
                      <option>Sergio Osmeña Sr., Zamboanga Del Norte</option>
                      <option>Siayan, Zamboanga Del Norte</option>
                      <option>Sibuco, Zamboanga Del Norte</option>
                      <option>Sibutad, Zamboanga Del Norte</option>
                      <option>Sindangan, Zamboanga Del Norte</option>
                      <option>Siocon, Zamboanga Del Norte</option>
                      <option>Sirawai, Zamboanga Del Norte</option>
                      <option>Tampilisan, Zamboanga Del Norte</option>
                      <option>Aurora, Zamboanga Del Sur</option>
                      <option>Bayog, Zamboanga Del Sur</option>
                      <option>Dimataling, Zamboanga Del Sur</option>
                      <option>Dinas, Zamboanga Del Sur</option>
                      <option>Dumalinao, Zamboanga Del Sur</option>
                      <option>Dumingag, Zamboanga Del Sur </option>
                      <option>Guipos, Zamboanga Del Sur</option>
                      <option>Josefina, Zamboanga Del Sur</option>
                      <option>Kumalarang, Zamboanga Del Sur</option>
                      <option>Labangan, Zamboanga Del Sur</option>
                      <option>Lakewood, Zamboanga Del Sur</option>
                      <option>Lapuyan, Zamboanga Del Sur</option>
                      <option>Mahayag, Zamboanga Del Sur</option>
                      <option>Margosatubig, Zamboanga Del Sur</option>
                      <option>Midsalip, Zamboanga Del Sur</option>
                      <option>Molave, Zamboanga Del Sur</option>
                      <option>Pagadian, Zamboanga Del Sur</option>
                      <option>Pitogo, Zamboanga Del Sur</option>
                      <option>Liargo, Zamboanga Del Sur</option>
                      <option>San Miguel, Zamboanga Del Sur</option>
                      <option>San Pablo, Zamboanga Del Sur</option>
                      <option>Sominot, Zamboanga Del Sur</option>
                      <option>Tabina, Zamboanga Del Sur</option>
                      <option>Tambulig, Zamboanga Del Sur</option>
                      <option>Tigbao, Zamboanga Del Sur</option>
                      <option>Tukuran, Zamboanga Del Sur</option>
                      <option>Vincenzo A. Sagun, Zamboanga Del Sur</option>
                      <option>Zamboanga City</option>
                      <option>Alicia, Zamboanga Sibugay</option>
                      <option>Buug, Zamboanga Sibugay</option>
                      <option>Diplahan, Zamboanga Sibugay</option>
                      <option>Imelda, Zamboanga Sibugay</option>
                      <option>Ipil, Zamboanga Sibugay</option>
                      <option>Kabasalan, Zamboanga Sibugay</option>
                      <option>Mabuhay, Zamboanga Sibugay</option>
                      <option>Malangas, Zamboanga Sibugay</option>
                      <option>Naga, Zamboanga Sibugay</option>
                  </datalist>

              <div class="row">
                <div class="col-50">
                  <label for="contact_num" style="margin-left: -50px;"><i class="fa fa-phone"></i> Contact Number </label>
                  <input style="margin-left: -50px;" type="text" id="contact_num" name="contact_num" placeholder="Enter Contact Number" required>
                </div>
                
                <div class="col-50">
                  <label for="lmark" style="margin-left: -40px;"><i class="fa fa-map-signs"></i> Landmark </label>
                  <input style="margin-left: -40px;" type="text" id="lmark" name="Landmark" placeholder="Enter Landmark" required>
                </div>
              </div>
            </div>

            <div class="col-50">
              <h3>Payment Methods</h3>
              
              <form action="/action_page.php" required>
                <select name="payment_type" class="form.control" style="margin-left: -12px;" required>
                    <option value = "" disabled selected> Select Type of Payment </option>
                    <option value = "creditdebit" name="payment_type"> Credit Card/Debit Card </option>
                    <option value = "paypal" name="payment_type"> Paypal </option>
                </select>
                
                <br>
                
              <label for="fname"><b>Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-paypal" style="color:blue;"></i>
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="Juan Dela Cruz" required>
              
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="ccnum" placeholder="1111-2222-3333-4444" required>
              
              <label for="expmonth">Exp Month</label>
              <select name="expmonth" class="form.control" required>
                  <option>January</option>
                  <option>February</option>
                  <option>March</option>
                  <option>April</option>
                  <option>May</option>
                  <option>June</option>
                  <option>July</option>
                  <option>August</option>
                  <option>September</option>
                  <option>October</option>
                  <option>November</option>
                  <option>December</option>
              </select>
              
              <br>
              
              <div class="row">
                <div class="col-50">
                  <label style="margin-top: 10px; margin-left: -45px;"for="expyear" name="expyear">Exp Year</label>
                  <select name="expyear" class="form.control" style="margin-left: -45px;" required>
                      <option>2022</option>
                      <option>2023</option>
                      <option>2024</option>
                      <option>2025</option>
                      <option>2026</option>
                      <option>2027</option>
                      <option>2028</option>
                      <option>2029</option>
                      <option>2030</option>
                      <option>2031</option>
                      <option>2032</option>
                      <option>2033</option>
                      <option>2034</option>
                      <option>2035</option>
                      <option>2036</option>
                      <option>2037</option>
                      <option>2038</option>
                      <option>2039</option>
                      <option>2040</option>
                      <option>2041</option>
                      <option>2042</option>
                      <option>2043</option>
                      <option>2044</option>
                      <option>2045</option>
                      <option>2046</option>
                      <option>2047</option>
                      <option>2048</option>
                      <option>2049</option>
                      <option>2050</option>
                      <option>2051</option>
                      <option>2052</option>
                      <option>2053</option>
                      <option>2054</option>
                      <option>2055</option>
                  </select>
                  
                </div>
                <div class="col-50">
                  <label style="margin-left: -120px; margin-top: 10px;" for="cvv">CVV</label>
                  <input style="margin-left: -120px;" type="text" id="cvv" name="cvv" placeholder="" required>
                </div>
              </div>
            </div>
            
          </div>
          <label>
            <input style="margin-left: 50px;" type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing  
            <p align = "right">
              <input type="submit" value="Proceed to checkout" class="btn">
            </p>
          </label>
        </form>
      </div>
    </div>
    <div class="col-25">
      <div class="container">
          <form action ="/cart/deleteitem" method = "POST">
          <p align = "right">
                  <input type = "hidden" name ="productId" value ="<%=productId%>">
                  <button class = button button-danger">Edit</button>
              </form>
          </p>
        <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-basket"></i> <b>4</b></span></h4>
        <p><b><a href="#" style = "color:black"> Product 1 </a> <span class="price" style = "color:black"></span></p>
        <p><b><a href="#" style = "color:black"> Product 2 </a> <span class="price" style = "color:black"></span></p>
        <p><b><a href="#" style = "color:black"> Product 3 </a> <span class="price" style = "color:black"></span></p>
        <p><b><a href="#" style = "color:black"> Product 4 </a> <span class="price" style = "color:black"></span></p>
        <hr>
        <p>Total <span class="price" style="color:black"><b></b></span></p>

        <div id="paypal-button-container"></div>
        <!-- Sample PayPal credentials (client-id) are included -->
        <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD&intent=capture&enable-funding=venmo" data-sdk-integration-source="integrationbuilder"></script>
        <script>
          const paypalButtonsComponent = paypal.Buttons({
              // optional styling for buttons
              // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
              style: {
                color: "gold",
                shape: "rect",
                layout: "vertical"
              },

              // set up the transaction
              createOrder: (data, actions) => {
                  // pass in any options from the v2 orders create call:
                  // https://developer.paypal.com/api/orders/v2/#orders-create-request-body
                  const createOrderPayload = {
                      purchase_units: [
                          {
                              amount: {
                                  value: "88.44"
                              }
                          }
                      ]
                  };

                  return actions.order.create(createOrderPayload);
              },

              // finalize the transaction
              onApprove: (data, actions) => {
                  const captureOrderHandler = (details) => {
                      const payerName = details.payer.name.given_name;
                      console.log('Transaction completed');
                  };

                  return actions.order.capture().then(captureOrderHandler);
              },

              // handle unrecoverable errors
              onError: (err) => {
                  console.error('An error prevented the buyer from checking out with PayPal');
              }
          });

          paypalButtonsComponent
              .render("#paypal-button-container")
              .catch((err) => {
                  console.error('PayPal Buttons failed to render');
              });
        </script>

      </div>
    </div>
  </div>

</body>
</html>