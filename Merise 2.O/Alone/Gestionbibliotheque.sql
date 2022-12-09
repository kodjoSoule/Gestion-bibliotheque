/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  18/05/2021 23:46:37                      */
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
   ID_ADHERANT          int  comment '',
   NOM_COMPLET          varchar(70) not null  comment '',
   DATE_NAISS           date  comment '',
   ADRESSE_ADHERANT     varchar(30)  comment '',
   TEL_ADHERANT         int  comment '',
   primary key (NOM_COMPLET)
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
   ID_AUTEUR            int  comment '',
   NOM_AUTEUR           varchar(30) not null  comment '',
   PRENOM_AUTEUR        varchar(30)  comment '',
   primary key (NOM_AUTEUR)
);

/*==============================================================*/
/* Table : EMPRUNT                                              */
/*==============================================================*/
create table EMPRUNT
(
   ID_EMPRUNT           int not null  comment '',
   TITRE_LIVRE          varchar(30) not null  comment '',
   NOM_COMPLET          varchar(70) not null  comment '',
   LOGIN_AD             varchar(8) not null  comment '',
   ADH_NOM_COMPLET      varchar(70) not null  comment '',
   DATE_DEBUT           date  comment '',
   DATE_FIN             date  comment '',
   NBRE_EMPRUNT         int  comment '',
   primary key (ID_EMPRUNT)
);

/*==============================================================*/
/* Table : LIVRE                                                */
/*==============================================================*/
create table LIVRE
(
   ISBN                 bigint  comment '',
   TITRE_LIVRE          varchar(30) not null  comment '',
   NOM_AUTEUR           varchar(30) not null  comment '',
   LANGUE_LIVRE         varchar(30)  comment '',
   NBRE_EXPLAIRE_LIVRE  int  comment '',
   primary key (TITRE_LIVRE)
);

alter table EMPRUNT add constraint FK_EMPRUNT_CONCERNE_LIVRE foreign key (TITRE_LIVRE)
      references LIVRE (TITRE_LIVRE) on delete restrict on update restrict;

alter table EMPRUNT add constraint FK_EMPRUNT_EFFECTUER_ADHERANT foreign key (ADH_NOM_COMPLET)
      references ADHERANT (NOM_COMPLET) on delete restrict on update restrict;

alter table EMPRUNT add constraint FK_EMPRUNT_GERER_ADMIN_BI foreign key (LOGIN_AD)
      references ADMIN_BIBLIO (LOGIN_AD) on delete restrict on update restrict;

alter table LIVRE add constraint FK_LIVRE_REDIGER_AUTEUR foreign key (NOM_AUTEUR)
      references AUTEUR (NOM_AUTEUR) on delete restrict on update restrict;

