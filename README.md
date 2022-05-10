# survey
Bei diesem Repository handelt es sich um das Umfrage-Projekt für das Testat Teil II im Fach Web Development I.

Um die Docker-basierte Entwicklungsumgebung zu benutzen, muss betriebssystemunabhängig zuerst Docker zusammen mit Docker-Compose installiert werden.
Danach wird per ```docker-compose up``` im Git-Verzeichnis die Umgebung gestartet.

**Achtung:** Zuvor sollten in ```docker-compose.yml``` für ein Produktivsystem noch die Zugangsdaten für die Datenbank geändert werden.

Mit ```Ctrl + C``` kann die Umgebung wieder beendet werden.
Alternativ, falls sie per ```docker-compose up -d``` im Hintergrund gestartet wurde, kann die Umgebung per ```docker-compose down``` beendet werden.
