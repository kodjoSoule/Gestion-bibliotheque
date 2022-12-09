/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  18/05/2021 15:32:42                      */
/*==============================================================*/


/*==============================================================*/
/* Table : LIVRE                                                */
/*==============================================================*/
create table LIVRE
(
   ISBN                 int not null  comment '',
   ID_AUTEUR            int not null  comment '',
   TITRE_LIVRE          varchar(30)  comment '',
   LANGUE_LIVRE         varchar(30)  comment '',
   NBRE_EXPLAIRE_LIVRE  int  comment '',
   primary key (ISBN)
);

alter table LIVRE add constraint FK_LIVRE_REDIGER_AUTEUR foreign key (ID_AUTEUR)
      references AUTEUR (ID_AUTEUR) on delete restrict on update restrict;

