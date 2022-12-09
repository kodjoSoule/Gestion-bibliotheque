/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  18/05/2021 23:46:08                      */
/*==============================================================*/


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

alter table EMPRUNT add constraint FK_EMPRUNT_CONCERNE_LIVRE foreign key (TITRE_LIVRE)
      references LIVRE (TITRE_LIVRE) on delete restrict on update restrict;

alter table EMPRUNT add constraint FK_EMPRUNT_EFFECTUER_ADHERANT foreign key (ADH_NOM_COMPLET)
      references ADHERANT (NOM_COMPLET) on delete restrict on update restrict;

alter table EMPRUNT add constraint FK_EMPRUNT_GERER_ADMIN_BI foreign key (LOGIN_AD)
      references ADMIN_BIBLIO (LOGIN_AD) on delete restrict on update restrict;

