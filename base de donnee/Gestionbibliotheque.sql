/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  13/05/2021 18:06:40                      */
/*==============================================================*/


alter table EMPRUNT 
   drop foreign key FK_EMPRUNT_CONCERNE_LIVRE;

alter table EMPRUNT 
   drop foreign key FK_EMPRUNT_EFFECTUER_ADHERANT;

alter table EMPRUNT 
   drop foreign key FK_EMPRUNT_GERER_ADMIN_BI;

alter table LIVRE 
   drop foreign key FK_LIVRE_REDIGER_AUTEUR;

drop table if exists ADHERANT;

drop table if exists ADMIN_BIBLIO;

drop table if exists AUTEUR;


alter table EMPRUNT 
   drop foreign key FK_EMPRUNT_CONCERNE_LIVRE;

alter table EMPRUNT 
   drop foreign key FK_EMPRUNT_EFFECTUER_ADHERANT;

alter table EMPRUNT 
   drop foreign key FK_EMPRUNT_GERER_ADMIN_BI;

drop table if exists EMPRUNT;


alter table LIVRE 
   drop foreign key FK_LIVRE_REDIGER_AUTEUR;

drop table if exists LIVRE;

/*==============================================================*/
/* Table : ADHERANT                                             */
/*==============================================================*/
create table ADHERANT
(
   ID_ADHERANR          int not null  comment '',
   NOM_ADHERANT         varchar(30)  comment '',
   PRENOM_ADHERAN       varchar(30)  comment '',
   ATE_NAISS_ADHERAN    date  comment '',
   ADRESSE_ADHERAN      varchar(30)  comment '',
   TEL_ADHERAN          smallint  comment '',
   primary key (ID_ADHERANR)
);

/*==============================================================*/
/* Table : ADMIN_BIBLIO                                         */
/*==============================================================*/
create table ADMIN_BIBLIO
(
   LOGIN_AD             varchar(8) not null  comment '',
   PASSWORD_AD          varchar(8)  comment '',
   NOM_AD               varchar(30)  comment '',
   PRENOM_AD            varchar(30)  comment '',
   DATE_NAISSANCE_AD    date  comment '',
   primary key (LOGIN_AD)
);

/*==============================================================*/
/* Table : AUTEUR                                               */
/*==============================================================*/
create table AUTEUR
(
   ID_AUTEUR            int not null  comment '',
   NOM_AUTEUR           varchar(30)  comment '',
   PRENOM_AUTEUR        varchar(30)  comment '',
   primary key (ID_AUTEUR)
);

/*==============================================================*/
/* Table : EMPRUNT                                              */
/*==============================================================*/
create table EMPRUNT
(
   ID_EMPRUNT           int not null  comment '',
   ID_LIVRE             int not null  comment '',
   ID_ADHERANR          int not null  comment '',
   LOGIN_AD             varchar(8) not null  comment '',
   DATE_DEBUT           date  comment '',
   DATE_FIN             date  comment '',
   RENDU__O_N_          bool  comment '',
   NBRE_EMPRUNT         int  comment '',
   primary key (ID_EMPRUNT)
);

/*==============================================================*/
/* Table : LIVRE                                                */
/*==============================================================*/
create table LIVRE
(
   ID_LIVRE             int not null  comment '',
   ID_AUTEUR            int not null  comment '',
   TITRE_LIVRE          varchar(30)  comment '',
   EDIT_LIVRE           varchar(30)  comment '',
   TYPE_LIVRE           varchar(30)  comment '',
   ETAT_LIVRE           bool  comment '',
   primary key (ID_LIVRE)
);

alter table EMPRUNT add constraint FK_EMPRUNT_CONCERNE_LIVRE foreign key (ID_LIVRE)
      references LIVRE (ID_LIVRE) on delete restrict on update restrict;

alter table EMPRUNT add constraint FK_EMPRUNT_EFFECTUER_ADHERANT foreign key (ID_ADHERANR)
      references ADHERANT (ID_ADHERANR) on delete restrict on update restrict;

alter table EMPRUNT add constraint FK_EMPRUNT_GERER_ADMIN_BI foreign key (LOGIN_AD)
      references ADMIN_BIBLIO (LOGIN_AD) on delete restrict on update restrict;

alter table LIVRE add constraint FK_LIVRE_REDIGER_AUTEUR foreign key (ID_AUTEUR)
      references AUTEUR (ID_AUTEUR) on delete restrict on update restrict;

