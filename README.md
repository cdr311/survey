# survey
Bei diesem Repository handelt es sich um das Umfrage-Projekt für das Testat Teil II im Fach Web Development I.

Um die Docker-basierte Entwicklungsumgebung zu benutzen, muss betriebssystemunabhängig zuerst Docker zusammen mit Docker-Compose installiert werden.
Danach wird per ```docker-compose up``` im Git-Verzeichnis die Umgebung gestartet.

**Achtung:** Zuvor sollten in ```docker-compose.yml``` noch die Zugangsdaten für die Datenbank geändert werden.

Mit ```Ctrl + C``` kann die Umgebung wieder beendet werden.
Alternativ, falls sie per ```docker-compose up -d``` im Hintergrund gestartet wurde, kann die Umgebung per ```docker-compose down``` beendet werden.

Wenn die Umgebung zum ersten Mal gestartet wird, werden sämtliche Dateien in ```initdb/``` (in alphabetischer Reihenfolge) ausgeführt, siehe https://hub.docker.com/_/mariadb ("Initializing a fresh instance"). Dies beinhaltet auch die Datei ```init.sql```, welche die anfängliche Struktur der Datenbank erstellt.

Die folgende Darstellung zeigt das Datenbankschema: \
![survey](./survey.svg)

Die folgende Darstellung verzichtet der Übersichtlichkeit wegen auf die Pfeile, ist ansonsten aber gleich. \
![survey ohne Pfeile](./survey_ohnePfeile.svg)