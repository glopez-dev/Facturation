drop table if exists PRESTATION;
drop table if exists TRESORIER;
drop table if exists LIGUE;
drop table if exists FACTURE;
drop table if exists FIGURER;

CREATE TABLE PRESTATION(
   RefPresta VARCHAR(15),
   DesignationPresta VARCHAR(30),
   PrixU_HT_Presta DECIMAL(5,3),
	constraint PK_PRE primary key (RefPresta)
) engine=innodb;
desc PRESTATION;

CREATE TABLE TRESORIER(
   ID_Tresorier integer not null,
   NomTresorier VARCHAR(50),
   PnomTresorier VARCHAR(50),
   CP_Tresorier VARCHAR(5),
   adresse_Tresorier VARCHAR(50),
   Ville_Tresorier VARCHAR(20),
   constraint PK_TRE primary key (ID_Tresorier)
) engine=innodb;
desc TRESORIER;

CREATE TABLE LIGUE(
   CodeClient integer not null,
   NomLigue VARCHAR(30),
   ID_Tresorier integer,
   envoi_Tresorier BOOLEAN,
   constraint PK_LIG primary key (CodeClient)
) engine=innodb;
desc LIGUE;

CREATE TABLE FACTURE(
   NumFacture integer not null,
   DateFacture DATE,
   TotalTTC DECIMAL(6,3),
   CodeClient integer,
   constraint PK_FAC primary key (NumFacture)
) engine=innodb;
desc FACTURE;

CREATE TABLE FIGURER(
   RefPresta VARCHAR(15),
   quantite SMALLINT,
   NumFacture integer,
   constraint PK_FIG primary key (RefPresta, NumFacture)
) engine=innodb;
desc FIGURER;