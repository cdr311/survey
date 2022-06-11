-- Führe die folgenden Befehle für die Datenbank "survey" aus
USE survey;



-- Erstelle die Aufschlüsselungstabellen
CREATE TABLE GeschlechtKey (
	ID INT NOT NULL,
	GeschlechtName VARCHAR(9) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE AltersbereichKey (
	ID INT NOT NULL,
	AltersbereichName VARCHAR(15) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE BerufsfeldKey (
	ID INT NOT NULL,
	BerufsfeldName VARCHAR(29) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE FamilienstandKey (
	ID INT NOT NULL,
	FamilienstandName VARCHAR(11) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE BildungsstandKey (
	ID INT NOT NULL,
	BildungsstandName VARCHAR(34) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE GeraeteartKey (
	ID INT NOT NULL,
	GeraeteartName VARCHAR(13) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE NutzungsgebietKey (
	ID INT NOT NULL,
	NutzungsgebietName VARCHAR(27) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE NutzungsdauerKey (
	ID INT NOT NULL,
	NutzungsdauerName VARCHAR(15) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE BetriebssystemKey (
	ID INT NOT NULL,
	BetriebssystemName VARCHAR(15) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE LinuxDistributionKey (
	ID INT NOT NULL,
	LinuxDistributionName VARCHAR(10) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE BSDVarianteKey (
	ID INT NOT NULL,
	BSDVarianteName VARCHAR(10) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE BrowserKey (
	ID INT NOT NULL,
	BrowserName VARCHAR(20) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE MailclientKey (
	ID INT NOT NULL,
	MailclientName VARCHAR(20) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE VerschluesselungKey (
	ID INT NOT NULL,
	VerschluesselungName VARCHAR(4) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE VerschluesselungsartKey (
	ID INT NOT NULL,
	VerschluesselungsartName VARCHAR(35) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE BewertungKey (
	ID INT NOT NULL,
	BewertungName VARCHAR(13) NOT NULL,
	PRIMARY KEY (ID)
);



-- Erstelle die Inhaltstabellen
CREATE TABLE TeilnehmerDaten (
	TeilnehmerID INT NOT NULL,
	Geschlecht INT NOT NULL,
	Altersbereich INT NOT NULL,
	Berufsfeld INT NOT NULL,
	Familienstand INT NOT NULL,
	Bildungsstand INT NOT NULL,
	PRIMARY KEY (TeilnehmerID),
	FOREIGN KEY (Geschlecht) REFERENCES GeschlechtKey(ID),
	FOREIGN KEY (Altersbereich) REFERENCES AltersbereichKey(ID),
	FOREIGN KEY (Berufsfeld) REFERENCES BerufsfeldKey(ID),
	FOREIGN KEY (Familienstand) REFERENCES FamilienstandKey(ID),
	FOREIGN KEY (Bildungsstand) REFERENCES BildungsstandKey(ID)
);

CREATE TABLE Geraeteart (
	TeilnehmerID INT NOT NULL,
	Geraeteart INT NOT NULL,
	PRIMARY KEY (TeilnehmerID),
	FOREIGN KEY (TeilnehmerID) REFERENCES TeilnehmerDaten(TeilnehmerID),
	FOREIGN KEY (Geraeteart) REFERENCES GeraeteartKey(ID)
);

CREATE TABLE Nutzungsgebiet (
	TeilnehmerID INT NOT NULL,
	Nutzungsgebiet INT NOT NULL,
	Geraeteart INT NOT NULL,
	PRIMARY KEY (TeilnehmerID),
	FOREIGN KEY (TeilnehmerID) REFERENCES TeilnehmerDaten(TeilnehmerID),
	FOREIGN KEY (Nutzungsgebiet) REFERENCES NutzungsgebietKey(ID),
	FOREIGN KEY (Geraeteart) REFERENCES Geraeteart(Geraeteart)
);

CREATE TABLE Nutzungsdauer (
	TeilnehmerID INT NOT NULL,
	Nutzungsdauer INT NOT NULL,
	Geraeteart INT NOT NULL,
	PRIMARY KEY (TeilnehmerID),
	FOREIGN KEY (TeilnehmerID) REFERENCES TeilnehmerDaten(TeilnehmerID),
	FOREIGN KEY (Nutzungsdauer) REFERENCES NutzungsdauerKey(ID),
	FOREIGN KEY (Geraeteart) REFERENCES Geraeteart(Geraeteart)
);

CREATE TABLE Betriebssystem (
	TeilnehmerID INT NOT NULL,
	Betriebssystem INT NOT NULL,
	Geraeteart INT NOT NULL,
	PRIMARY KEY (TeilnehmerID),
	FOREIGN KEY (TeilnehmerID) REFERENCES TeilnehmerDaten(TeilnehmerID),
	FOREIGN KEY (Betriebssystem) REFERENCES BetriebssystemKey(ID),
	FOREIGN KEY (Geraeteart) REFERENCES Geraeteart(Geraeteart)
);

CREATE TABLE LinuxDistribution (
	TeilnehmerID INT NOT NULL,
	LinuxDistribution INT,
	Geraeteart INT,
	PRIMARY KEY (TeilnehmerID),
	FOREIGN KEY (TeilnehmerID) REFERENCES TeilnehmerDaten(TeilnehmerID),
	FOREIGN KEY (LinuxDistribution) REFERENCES LinuxDistributionKey(ID),
	FOREIGN KEY (Geraeteart) REFERENCES Geraeteart(Geraeteart)
);

CREATE TABLE BSDVariante (
	TeilnehmerID INT NOT NULL,
	BSDVariante INT,
	Geraeteart INT,
	PRIMARY KEY (TeilnehmerID),
	FOREIGN KEY (TeilnehmerID) REFERENCES TeilnehmerDaten(TeilnehmerID),
	FOREIGN KEY (BSDVariante) REFERENCES BSDVarianteKey(ID),
	FOREIGN KEY (Geraeteart) REFERENCES Geraeteart(Geraeteart)
);

CREATE TABLE Browser (
	TeilnehmerID INT NOT NULL,
	Browser INT,
	PRIMARY KEY (TeilnehmerID),
	FOREIGN KEY (TeilnehmerID) REFERENCES TeilnehmerDaten(TeilnehmerID),
	FOREIGN KEY (Browser) REFERENCES BrowserKey(ID)
);

CREATE TABLE Mailclient (
	TeilnehmerID INT NOT NULL,
	Mailclient INT,
	PRIMARY KEY (TeilnehmerID),
	FOREIGN KEY (TeilnehmerID) REFERENCES TeilnehmerDaten(TeilnehmerID),
	FOREIGN KEY (Mailclient) REFERENCES MailclientKey(ID)
);

CREATE TABLE VerschluesselungDienstlich (
	TeilnehmerID INT NOT NULL,
	VerschluesselungDienstlich INT NOT NULL,
	Art INT,
	PRIMARY KEY (TeilnehmerID),
	FOREIGN KEY (TeilnehmerID) REFERENCES TeilnehmerDaten(TeilnehmerID),
	FOREIGN KEY (VerschluesselungDienstlich) REFERENCES VerschluesselungKey(ID),
	FOREIGN KEY (Art) REFERENCES VerschluesselungsartKey(ID)
);

CREATE TABLE VerschluesselungPrivat (
	TeilnehmerID INT NOT NULL,
	VerschluesselungPrivat INT NOT NULL,
	Art INT,
	PRIMARY KEY (TeilnehmerID),
	FOREIGN KEY (TeilnehmerID) REFERENCES TeilnehmerDaten(TeilnehmerID),
	FOREIGN KEY (VerschluesselungPrivat) REFERENCES VerschluesselungKey(ID),
	FOREIGN KEY (Art) REFERENCES VerschluesselungsartKey(ID)
);

CREATE TABLE Bewertung (
	TeilnehmerID INT NOT NULL,
	Bewertung INT,
	PRIMARY KEY (TeilnehmerID),
	FOREIGN KEY (TeilnehmerID) REFERENCES TeilnehmerDaten(TeilnehmerID),
	FOREIGN KEY (Bewertung) REFERENCES BewertungKey(ID)
);



-- Füge die passenden Werte in die Key-Tabellen ein
INSERT INTO GeschlechtKey VALUES (0, 'Männlich');
INSERT INTO GeschlechtKey VALUES (1, 'Weiblich');
INSERT INTO GeschlechtKey VALUES (2, 'Sonstiges');
INSERT INTO AltersbereichKey VALUES (0, '17 oder jünger');
INSERT INTO AltersbereichKey VALUES (1, '18-20');
INSERT INTO AltersbereichKey VALUES (2, '21-29');
INSERT INTO AltersbereichKey VALUES (3, '30-39');
INSERT INTO AltersbereichKey VALUES (4, '40-49');
INSERT INTO AltersbereichKey VALUES (5, '50-59');
INSERT INTO AltersbereichKey VALUES (6, '60 oder älter');
INSERT INTO BerufsfeldKey VALUES (0, 'Labor');
INSERT INTO BerufsfeldKey VALUES (1, 'Handwerk');
INSERT INTO BerufsfeldKey VALUES (2, 'IT und Elektronik');
INSERT INTO BerufsfeldKey VALUES (3, 'Kaufmännisch');
INSERT INTO BerufsfeldKey VALUES (4, 'Gesundheit und Pflege');
INSERT INTO BerufsfeldKey VALUES (5, 'Sonstiges');
INSERT INTO FamilienstandKey VALUES (0, 'Ledig');
INSERT INTO FamilienstandKey VALUES (1, 'Getrennt');
INSERT INTO FamilienstandKey VALUES (2, 'Geschieden');
INSERT INTO FamilienstandKey VALUES (3, 'Verwitwet');
INSERT INTO FamilienstandKey VALUES (4, 'Verheiratet');
INSERT INTO BildungsstandKey VALUES (0, 'Kein Abschluss');
INSERT INTO BildungsstandKey VALUES (1, 'Qualifizierter Hauptschulabschluss');
INSERT INTO BildungsstandKey VALUES (2, 'Mittlere Reife');
INSERT INTO BildungsstandKey VALUES (3, 'Fachabitur');
INSERT INTO BildungsstandKey VALUES (4, 'Allgemeines Abitur');
INSERT INTO BildungsstandKey VALUES (5, 'Studium ohne Abschluss');
INSERT INTO BildungsstandKey VALUES (6, 'Bachelor');
INSERT INTO BildungsstandKey VALUES (7, 'Diplom');
INSERT INTO BildungsstandKey VALUES (8, 'Master');
INSERT INTO BildungsstandKey VALUES (9, 'Promotion');
INSERT INTO BildungsstandKey VALUES (10, 'Professur');
INSERT INTO GeraeteartKey VALUES (0, 'Desktop PC');
INSERT INTO GeraeteartKey VALUES (1, 'Laptop');
INSERT INTO GeraeteartKey VALUES (2, 'Smartphone');
INSERT INTO GeraeteartKey VALUES (3, 'Tablet');
INSERT INTO GeraeteartKey VALUES (4, 'Smart TV');
INSERT INTO GeraeteartKey VALUES (5, 'Smartwatch');
INSERT INTO GeraeteartKey VALUES (6, 'Spielekonsole');
INSERT INTO NutzungsgebietKey VALUES (0, 'Arbeit');
INSERT INTO NutzungsgebietKey VALUES (1, 'Surfen im Internet');
INSERT INTO NutzungsgebietKey VALUES (2, 'Online-Shopping');
INSERT INTO NutzungsgebietKey VALUES (3, 'Videos/Filme/Serien schauen');
--INSERT INTO NutzungsgebietKey VALUES (4, 'Musik hören');
INSERT INTO NutzungsgebietKey VALUES (4, 'Spielen');
INSERT INTO NutzungsgebietKey VALUES (5, 'Gesundheit');
--INSERT INTO NutzungsgebietKey VALUES (6, 'Lernen');
--INSERT INTO NutzungsgebietKey VALUES (7, 'Sonstiges');
INSERT INTO NutzungsdauerKey VALUES (0, 'Unter 1 Stunde');
INSERT INTO NutzungsdauerKey VALUES (1, '1-3 Stunden');
INSERT INTO NutzungsdauerKey VALUES (2, '3-5 Stunden');
INSERT INTO NutzungsdauerKey VALUES (3, '5-7 Stunden');
INSERT INTO NutzungsdauerKey VALUES (4, '7-8 Stunden');
INSERT INTO NutzungsdauerKey VALUES (5, 'Über 8 Stunden');
INSERT INTO BetriebssystemKey VALUES (0, 'Windows');
INSERT INTO BetriebssystemKey VALUES (1, 'macOS');
INSERT INTO BetriebssystemKey VALUES (2, 'Linux');
INSERT INTO BetriebssystemKey VALUES (3, 'BSD');
INSERT INTO BetriebssystemKey VALUES (4, 'iOS');
INSERT INTO BetriebssystemKey VALUES (5, 'iPadOS');
INSERT INTO BetriebssystemKey VALUES (6, 'Android');
INSERT INTO BetriebssystemKey VALUES (7, 'Firefox OS');
INSERT INTO BetriebssystemKey VALUES (8, 'Windows Phone');
INSERT INTO BetriebssystemKey VALUES (9, 'Tizen OS');
INSERT INTO BetriebssystemKey VALUES (10, 'Sonstiges');
INSERT INTO LinuxDistributionKey VALUES (0, 'Arch Linux');
INSERT INTO LinuxDistributionKey VALUES (1, 'Debian');
INSERT INTO LinuxDistributionKey VALUES (2, 'elementary');
INSERT INTO LinuxDistributionKey VALUES (3, 'Fedora');
INSERT INTO LinuxDistributionKey VALUES (4, 'Linux Mint');
INSERT INTO LinuxDistributionKey VALUES (5, 'Manjaro');
INSERT INTO LinuxDistributionKey VALUES (6, 'MX Linux');
INSERT INTO LinuxDistributionKey VALUES (7, 'openSUSE');
INSERT INTO LinuxDistributionKey VALUES (8, 'Pop!_OS');
INSERT INTO LinuxDistributionKey VALUES (9, 'Ubuntu');
INSERT INTO LinuxDistributionKey VALUES (10, 'Sonstiges');
INSERT INTO BSDVarianteKey VALUES (0, 'FreeBSD');
INSERT INTO BSDVarianteKey VALUES (1, 'OpenBSD');
INSERT INTO BSDVarianteKey VALUES (2, 'NetBSD');
INSERT INTO BSDVarianteKey VALUES (3, 'GhostBSD');
INSERT INTO BSDVarianteKey VALUES (4, 'Sonstiges');
INSERT INTO BrowserKey VALUES (0, 'Brave');
INSERT INTO BrowserKey VALUES (1, 'Chrome');
INSERT INTO BrowserKey VALUES (2, 'Chromium');
INSERT INTO BrowserKey VALUES (3, 'Edge');
INSERT INTO BrowserKey VALUES (4, 'Epiphany (GNOME Web)');
INSERT INTO BrowserKey VALUES (5, 'Firefox');
INSERT INTO BrowserKey VALUES (6, 'Internet Explorer');
INSERT INTO BrowserKey VALUES (7, 'Konqueror');
INSERT INTO BrowserKey VALUES (8, 'Opera');
INSERT INTO BrowserKey VALUES (9, 'Safari');
INSERT INTO BrowserKey VALUES (10, 'Tor Browser');
INSERT INTO BrowserKey VALUES (11, 'Vivaldi');
INSERT INTO BrowserKey VALUES (12, 'Sonstiges');
INSERT INTO MailclientKey VALUES (0, 'Apple Mail');
INSERT INTO MailclientKey VALUES (1, 'Claws Mail');
INSERT INTO MailclientKey VALUES (2, 'eM Client');
INSERT INTO MailclientKey VALUES (3, 'Evolution');
INSERT INTO MailclientKey VALUES (4, 'FairEmail');
INSERT INTO MailclientKey VALUES (5, 'Geary');
INSERT INTO MailclientKey VALUES (6, 'Google Mail-App');
INSERT INTO MailclientKey VALUES (7, 'K-9 Mail');
INSERT INTO MailclientKey VALUES (8, 'Outlook');
INSERT INTO MailclientKey VALUES (9, 'Spark');
INSERT INTO MailclientKey VALUES (10, 'Thunderbird');
INSERT INTO MailclientKey VALUES (11, 'Weboberfläche');
INSERT INTO MailclientKey VALUES (12, 'Sonstiges');
INSERT INTO VerschluesselungKey VALUES (0, 'Nein');
INSERT INTO VerschluesselungKey VALUES (1, 'Ja');
INSERT INTO VerschluesselungsartKey VALUES (0, 'PGP');
INSERT INTO VerschluesselungsartKey VALUES (1, 'S/MIME');
INSERT INTO VerschluesselungsartKey VALUES (2, 'Spezialisierter E-Mail-Provider');
INSERT INTO VerschluesselungsartKey VALUES (3, 'Sonstiges');
INSERT INTO BewertungKey VALUES (0, 'Sehr gut');
INSERT INTO BewertungKey VALUES (1, 'Gut');
INSERT INTO BewertungKey VALUES (2, 'Mittelmäßig');
INSERT INTO BewertungKey VALUES (3, 'Schlecht');
INSERT INTO BewertungKey VALUES (4, 'Sehr schlecht');
