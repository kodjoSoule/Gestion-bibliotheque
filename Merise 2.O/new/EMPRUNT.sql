/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  18/05/2021 15:32:42                      */
/*==============================================================*/


/*==============================================================*/
/* Table : EMPRUNT                                              */
/*==============================================================*/
create table EMPRUNT
(
   ID_EMPRUNT           int not null  comment '',
   ID_ADHERANT          int not null  comment '',
   ISBN                 int not null  comment '',
   LOGIN_AD             varchar(8) not null  comment '',
   DATE_DEBUT           date  comment '',
   DATE_FIN             date  comment '',
   NBRE_EMPRUNT         int  comment '',
   primary key (ID_EMPRUNT)
);

alter table EMPRUNT add constraint FK_EMPRUNT_CONCERNE_LIVRE foreign key (ISBN)
      references LIVRE (ISBN) on delete restrict on update restrict;

alter table EMPRUNT add constraint FK_EMPRUNT_EFFECTUER_ADHERANT foreign key (ID_ADHERANT)
      references ADHERANT (ID_ADHERANT) on delete restrict on update restrict;

alter table EMPRUNT add constraint FK_EMPRUNT_GERER_ADMIN_BI foreign key (LOGIN_AD)
      references ADMIN_BIBLIO (LOGIN_AD) on delete restrict on update restrict;

