/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  13/05/2021 18:07:42                      */
/*==============================================================*/


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

alter table LIVRE add constraint FK_LIVRE_REDIGER_AUTEUR foreign key (ID_AUTEUR)
      references AUTEUR (ID_AUTEUR) on delete restrict on update restrict;

