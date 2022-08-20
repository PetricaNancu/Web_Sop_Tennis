Student Nancu Petrica C113D
Site cu scop in vanzarea de articole destinate sportului "tenis de camp";
Accesul catre toate paginile se va face cu ajutorul barii de navigatie din partea de sus a site-ului.
Baza de date folosita este phpmyadmin.


Prima pagina ce se va deschide este   !!!!!!!!!!"home_default.php"!!!!!! Aici se afla produsele din magazin, afisate pe categorii, pagina este destinat utilizatorului guest ce poate sa verifice articolele la vanzare fara a putea adauga in cos sau edita. La oricare incercare de adaugare produs sau acces cos se va redirectiona catre o pagina de login. 

Pe prima pagina se afla un buton in bara de navigatie pentru fast login direct printr-un pop-up sau register ce ne redirecteaza catre o alta pagina.
In cazul in care se acceseaza login de pe pagina home iar credentialele nu sunt corecte, utilizatorului i se afiseaza o eroare pe pagina speciala de login unde poate sa schimbe catre creearea de cont.


In cazul register, se va verifica campul unic (username) ce intoarce eroare in cazul dplicatelor, cat si confirmarea parolei sa fie identica. In urma inregistrarii se va crea in baza de date o tabela numita "cart_username" pentru fiecare username, unde se vor salva datele despre cosul de cumparaturi.

Dupa ce a fost efectuata logarea se va afisa in bara de navigare username ul utilizatorului cat si un buton de signout.

Toate paginile sunt scalabile iar produsele afisate pe pagina au o dimensiune fixa pentru a nu fii prea mici in cazul utilizarii dupa telefon. 

Pe site se poate loga si cu drepturi de administrator username: Admin pass: admin, aici se vor afisa date despre produsele actuale aflate pe site cu posibilitatea de a sterge produse, o alta pagina de afisare date despre utilizatori, unde parola nu se afla in clar ci este hashuita cu md5 pentru confidentialitate. Tot din pagina de administrator se mai pot aduga si produse cat si vizualiza comenzile aferente.

