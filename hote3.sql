/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     19/03/2019 12:18:52                          */
/*==============================================================*/


drop table if exists ADMIN;

drop table if exists CATEGORIE;

drop table if exists CHAMBRE;

drop table if exists CLIENT;

drop table if exists CONCERNE;

drop table if exists HOTEL;

drop table if exists PAIEMENT;

drop table if exists RESERVATION;

drop table if exists VALIDER;

drop table if exists VILLE;

/*==============================================================*/
/* Table: ADMIN                                                 */
/*==============================================================*/
create table ADMIN
(
   IDADMIN              numeric(8,0) not null,
   NOMADMIN             text,
   PRENOMADMIN          text,
   EMAILADMIN           text,
   PASSWORDADMIN        longtext,
   TELADMIN             numeric(8,0),
   primary key (IDADMIN)
);

/*==============================================================*/
/* Table: CATEGORIE                                             */
/*==============================================================*/
create table CATEGORIE
(
   ID_CATEGORIE         numeric(8,0) not null,
   TYPE                 text,
   primary key (ID_CATEGORIE)
);

/*==============================================================*/
/* Table: CHAMBRE                                               */
/*==============================================================*/
create table CHAMBRE
(
   N_CHAMBRE            numeric(8,0) not null,
   N_HOTEL              numeric(8,0) not null,
   ID_CATEGORIE         numeric(8,0) not null,
   TEL_CHAMBRE          numeric(8,0),
   primary key (N_CHAMBRE)
);

/*==============================================================*/
/* Table: CLIENT                                                */
/*==============================================================*/
create table CLIENT
(
   NOMCLIENT            text,
   PRENOMCLIENT         text,
   ADDRESSCLIENT        text,
   EMAILCLIENT          text,
   TELCLIENT            numeric(8,0),
   ID_CLIENT            numeric(8,0) not null,
   primary key (ID_CLIENT)
);

/*==============================================================*/
/* Table: CONCERNE                                              */
/*==============================================================*/
create table CONCERNE
(
   N_RESERVATION        numeric(8,0) not null,
   N_CHAMBRE            numeric(8,0) not null,
   primary key (N_RESERVATION, N_CHAMBRE)
);

/*==============================================================*/
/* Table: HOTEL                                                 */
/*==============================================================*/
create table HOTEL
(
   N_HOTEL              numeric(8,0) not null,
   ID_VILLE             numeric(8,0) not null,
   NOM_HOTEL_           text,
   ADRESSE_HOTEL_       text,
   TEL_HOTEL_           numeric(8,0),
   NBR_ETOILE           numeric(8,0),
   PHOTO_HOTEL          text,
   primary key (N_HOTEL)
);

/*==============================================================*/
/* Table: PAIEMENT                                              */
/*==============================================================*/
create table PAIEMENT
(
   ID_PAIEMENT          numeric(8,0) not null,
   N_RESERVATION        numeric(8,0) not null,
   DATE_PAIEMENT        date,
   SOMME                numeric(8,0),
   primary key (ID_PAIEMENT)
);

/*==============================================================*/
/* Table: RESERVATION                                           */
/*==============================================================*/
create table RESERVATION
(
   N_RESERVATION        numeric(8,0) not null,
   ID_CLIENT            numeric(8,0) not null,
   ID_PAIEMENT          numeric(8,0),
   DATE_DEBUT           datetime,
   DATE_FIN             datetime,
   primary key (N_RESERVATION)
);

/*==============================================================*/
/* Table: VALIDER                                               */
/*==============================================================*/
create table VALIDER
(
   IDADMIN              numeric(8,0) not null,
   N_RESERVATION        numeric(8,0) not null,
   primary key (IDADMIN, N_RESERVATION)
);

/*==============================================================*/
/* Table: VILLE                                                 */
/*==============================================================*/
create table VILLE
(
   ID_VILLE             numeric(8,0) not null,
   NOM_VILLE            text,
   primary key (ID_VILLE)
);

alter table CHAMBRE add constraint FK_ASSOCIATION_9 foreign key (ID_CATEGORIE)
      references CATEGORIE (ID_CATEGORIE) on delete restrict on update restrict;

alter table CHAMBRE add constraint FK_CONTIENT foreign key (N_HOTEL)
      references HOTEL (N_HOTEL) on delete restrict on update restrict;

alter table CONCERNE add constraint FK_CONCERNE foreign key (N_RESERVATION)
      references RESERVATION (N_RESERVATION) on delete restrict on update restrict;

alter table CONCERNE add constraint FK_CONCERNE2 foreign key (N_CHAMBRE)
      references CHAMBRE (N_CHAMBRE) on delete restrict on update restrict;

alter table HOTEL add constraint FK_APPARTIENT foreign key (ID_VILLE)
      references VILLE (ID_VILLE) on delete restrict on update restrict;

alter table PAIEMENT add constraint FK_NECESSITE foreign key (N_RESERVATION)
      references RESERVATION (N_RESERVATION) on delete restrict on update restrict;

alter table RESERVATION add constraint FK_EFFECTUER foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT) on delete restrict on update restrict;

alter table RESERVATION add constraint FK_NECESSITE2 foreign key (ID_PAIEMENT)
      references PAIEMENT (ID_PAIEMENT) on delete restrict on update restrict;

alter table VALIDER add constraint FK_VALIDER foreign key (IDADMIN)
      references ADMIN (IDADMIN) on delete restrict on update restrict;

alter table VALIDER add constraint FK_VALIDER2 foreign key (N_RESERVATION)
      references RESERVATION (N_RESERVATION) on delete restrict on update restrict;

