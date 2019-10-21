# fotiface
Modulprojekt zum Informatik-Modul 152 an der GiBM-IT Pratteln, 4. Lehrjahr.

## Installationsanleitung

1. Source-Code per Git-Konsole in den 'htdocs'-Ordner der lokalen XAMPP-Installation klonen. Oder als .zip-Datei herunterladen und im selben Ordner entpacken.
2. XAMPP-Konsole öffnen und die Services 'Apache' und 'MySQL' starten.
3. In einem Webbrowser Service 'phpMyAdmin' aufrufen (Standard-URL: http://localhost/phpmyadmin/).
4. In phpMyAdmin eine neue Tabelle mit dem Namen 'fotiface' und Kollation 'latin1_swedish_ci' anlegen. Es müssen keine speziellen Rechte für die Datenbank angelegt werden, die Datenbank soll mit dem User 'root' und ohne Password erreichbar sein.
5. Die erstellte Datenbank auswählen und unter dem Tab 'Importieren' unter dem Abschnitt 'Zu importierende Datei:' die Datei 'fotiface_db.sql' aus dem Explorer auswählen. Diese Datei liegt im root-Ordner des Projekts. Anschliessend auf 'OK' klicken und die Datenbank wird aus der Datei importiert.
6. Die fotiface-Webapplikation im Webbrowser unter folgender URL aufrufen: http://localhost/fotiface/.
7. Anmeldung mit folgenden beiden Benutzern möglich:
   (Benutzername | Passwort)
  - Abrjak01 | Password123
  - Brodan01 | Password123


Weitere Dokumentationen können unter dem Wiki eingesehen werden.
