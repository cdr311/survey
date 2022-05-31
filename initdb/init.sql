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
	BetriebssystemName VARCHAR(9) NOT NULL,
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
	MailclientName VARCHAR(14) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE VerschluesselungKey (
	ID INT NOT NULL,
	VerschluesselungName VARCHAR(4) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE VerschluesselungsartKey (
	ID INT NOT NULL,
	VerschluesselungsartName VARCHAR(9) NOT NULL,
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
	PRIMARY KEY (TeilnehmerID),
	FOREIGN KEY (Geschlecht) REFERENCES GeschlechtKey(ID),
	FOREIGN KEY (Altersbereich) REFERENCES AltersbereichKey(ID),
	FOREIGN KEY (Berufsfeld) REFERENCES BerufsfeldKey(ID)
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
INSERT INTO BerufsfeldKey VALUES (0, 'Bau, Architektur, Vermessung');
INSERT INTO BerufsfeldKey VALUES (1, 'Dienstleistung');
INSERT INTO BerufsfeldKey VALUES (2, 'Elektro');
INSERT INTO BerufsfeldKey VALUES (3, 'Gesundheit');
INSERT INTO BerufsfeldKey VALUES (4, 'IT, Computer');
INSERT INTO BerufsfeldKey VALUES (5, 'Kunst, Kultur, Gestaltung');
INSERT INTO BerufsfeldKey VALUES (6, 'Landwirtschaft, Natur, Umwelt');
INSERT INTO BerufsfeldKey VALUES (7, 'Medien');
INSERT INTO BerufsfeldKey VALUES (8, 'Metall, Maschinenbau');
INSERT INTO BerufsfeldKey VALUES (9, 'Naturwissenschaften');
INSERT INTO BerufsfeldKey VALUES (10, 'Produktion, Fertigung');
INSERT INTO BerufsfeldKey VALUES (11, 'Soziales, Pädagogik');
INSERT INTO BerufsfeldKey VALUES (12, 'Technik, Technologiefelder');
INSERT INTO BerufsfeldKey VALUES (13, 'Verkehr, Logistik');
INSERT INTO BerufsfeldKey VALUES (14, 'Wirtschaft, Verwaltung');
INSERT INTO BerufsfeldKey VALUES (15, 'Sonstiges');
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
INSERT INTO NutzungsgebietKey VALUES (4, 'Musik hören');
INSERT INTO NutzungsgebietKey VALUES (5, 'Spielen');
INSERT INTO NutzungsgebietKey VALUES (6, 'Lernen');
INSERT INTO NutzungsgebietKey VALUES (7, 'Sonstiges');
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
INSERT INTO BetriebssystemKey VALUES (7, 'Sonstiges');
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
INSERT INTO MailclientKey VALUES (6, 'K-9 Mail');
INSERT INTO MailclientKey VALUES (7, 'Outlook');
INSERT INTO MailclientKey VALUES (8, 'Spark');
INSERT INTO MailclientKey VALUES (9, 'Thunderbird');
INSERT INTO MailclientKey VALUES (10, 'Weboberfläche');
INSERT INTO MailclientKey VALUES (11, 'Sonstiges');
INSERT INTO VerschluesselungKey VALUES (0, 'Nein');
INSERT INTO VerschluesselungKey VALUES (1, 'Ja');
INSERT INTO VerschluesselungsartKey VALUES (0, 'PGP');
INSERT INTO VerschluesselungsartKey VALUES (1, 'S/MIME');
INSERT INTO VerschluesselungsartKey VALUES (2, 'Sonstiges');
INSERT INTO BewertungKey VALUES (0, 'Sehr gut');
INSERT INTO BewertungKey VALUES (1, 'Gut');
INSERT INTO BewertungKey VALUES (2, 'Mittelmäßig');
INSERT INTO BewertungKey VALUES (3, 'Schlecht');
INSERT INTO BewertungKey VALUES (4, 'Sehr schlecht');

SELECT * FROM GeschlechtKey;
SELECT * FROM AltersbereichKey;
SELECT * FROM BerufsfeldKey;
SELECT * FROM GeraeteartKey;
SELECT * FROM NutzungsgebietKey;
SELECT * FROM NutzungsdauerKey;
SELECT * FROM BetriebssystemKey;
SELECT * FROM LinuxDistributionKey;
SELECT * FROM BSDVarianteKey;
SELECT * FROM BrowserKey;
SELECT * FROM MailclientKey;
SELECT * FROM VerschluesselungKey;
SELECT * FROM VerschluesselungsartKey;
SELECT * FROM BewertungKey;