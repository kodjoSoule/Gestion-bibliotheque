/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  13/05/2021 18:07:42                      */
/*==============================================================*/


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

alter table EMPRUNT add constraint FK_EMPRUNT_CONCERNE_LIVRE foreign key (ID_LIVRE)
      references LIVRE (ID_LIVRE) on delete restrict on update restrict;

alter table EMPRUNT add constraint FK_EMPRUNT_EFFECTUER_ADHERANT foreign key (ID_ADHERANR)
      references ADHERANT (ID_ADHERANR) on delete restrict on update restrict;

alter table EMPRUNT add constraint FK_EMPRUNT_GERER_ADMIN_BI foreign key (LOGIN_AD)
      references ADMIN_BIBLIO (LOGIN_AD) on delete restrict on update restrict;

