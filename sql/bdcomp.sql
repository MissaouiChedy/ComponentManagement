/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  07/05/2013 17:08:40                      */
/*==============================================================*/


drop table if exists Association_12;

drop table if exists Version_produit;

drop table if exists composant;

drop table if exists etat_composant;

drop table if exists etat_produit;

drop table if exists licence;

drop table if exists nature_composant;

drop table if exists nature_prod;

drop table if exists produit;

drop table if exists progr_prod;

drop table if exists type_composante;

drop table if exists type_prod;

drop table if exists utilisateur;

drop table if exists version_composant;

/*==============================================================*/
/* Table : Association_12                                       */
/*==============================================================*/
create table Association_12
(
   id_prod              int,
   id_composant         int
);

/*==============================================================*/
/* Table : Version_produit                                      */
/*==============================================================*/
create table Version_produit
(
   id_prod              int not null,
   id_version_prod      int,
   lib_version_prod     int,
   date_version_prod    int
);

/*==============================================================*/
/* Table : composant                                            */
/*==============================================================*/
create table composant
(
   id_licence           int,
   id_nature            int,
   id_type__            int,
   id_composant         int not null,
   titre_composant      varchar(254),
   description          varchar(254),
   visibilite           bool,
   primary key (id_composant)
);

/*==============================================================*/
/* Table : etat_composant                                       */
/*==============================================================*/
create table etat_composant
(
   id_etat_c            int not null,
   id_composant         int,
   nom_etat_c           int,
   date_chg             int,
   primary key (id_etat_c)
);

/*==============================================================*/
/* Table : etat_produit                                         */
/*==============================================================*/
create table etat_produit
(
   id_prod              int not null,
   id_etat_p            int not null,
   lib_etat_p           varchar(254),
   date_chg_p           datetime,
   primary key (id_etat_p)
);

/*==============================================================*/
/* Table : licence                                              */
/*==============================================================*/
create table licence
(
   id_licence           int not null,
   nom_licence          int,
   primary key (id_licence)
);

/*==============================================================*/
/* Table : nature_composant                                     */
/*==============================================================*/
create table nature_composant
(
   id_nature            int not null,
   nom_nature           int,
   primary key (id_nature)
);

/*==============================================================*/
/* Table : nature_prod                                          */
/*==============================================================*/
create table nature_prod
(
   id_nature_prod       int not null,
   lib_nature_prod      int,
   primary key (id_nature_prod)
);

/*==============================================================*/
/* Table : produit                                              */
/*==============================================================*/
create table produit
(
   id_prod              int not null,
   id_program           int,
   id_licence           int,
   id_nature_prod       int,
   id_type_prod         int,
   id_util              int,
   titre_prod           int,
   visibilite           bool,
   primary key (id_prod)
);

/*==============================================================*/
/* Table : progr_prod                                           */
/*==============================================================*/
create table progr_prod
(
   id_program           int not null,
   lib_program          int,
   primary key (id_program)
);

/*==============================================================*/
/* Table : type_composante                                      */
/*==============================================================*/
create table type_composante
(
   id_type__            int not null,
   nom_type__           int,
   primary key (id_type__)
);

/*==============================================================*/
/* Table : type_prod                                            */
/*==============================================================*/
create table type_prod
(
   id_type_prod         int not null,
   lib_type_prod        int,
   primary key (id_type_prod)
);

/*==============================================================*/
/* Table : utilisateur                                          */
/*==============================================================*/
create table utilisateur
(
   id_util              int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   login                varchar(254),
   pwd                  varchar(254),
   email                varchar(254),
   droit_access         int,
   primary key (id_util)
);

/*==============================================================*/
/* Table : version_composant                                    */
/*==============================================================*/
create table version_composant
(
   id_version_comp      varchar(254) not null,
   id_composant         int,
   lib_version_comp     varchar(254),
   date_version_comp    int,
   primary key (id_version_comp)
);

alter table Association_12 add constraint FK_Reference_15 foreign key (id_prod)
      references produit (id_prod) on delete restrict on update restrict;

alter table Association_12 add constraint FK_Reference_16 foreign key (id_composant)
      references composant (id_composant) on delete restrict on update restrict;

alter table Version_produit add constraint FK_Association_13 foreign key (id_prod)
      references produit (id_prod) on delete restrict on update restrict;

alter table composant add constraint FK_Association_10 foreign key (id_nature)
      references nature_composant (id_nature) on delete restrict on update restrict;

alter table composant add constraint FK_Association_11 foreign key (id_type__)
      references type_composante (id_type__) on delete restrict on update restrict;

alter table composant add constraint FK_Reference_14 foreign key (id_licence)
      references licence (id_licence) on delete restrict on update restrict;

alter table etat_composant add constraint FK_Association_15 foreign key (id_composant)
      references composant (id_composant) on delete restrict on update restrict;

alter table etat_produit add constraint FK_Association_16 foreign key (id_prod)
      references produit (id_prod) on delete restrict on update restrict;

alter table produit add constraint FK_Association_1 foreign key (id_nature_prod)
      references nature_prod (id_nature_prod) on delete restrict on update restrict;

alter table produit add constraint FK_Association_2 foreign key (id_type_prod)
      references type_prod (id_type_prod) on delete restrict on update restrict;

alter table produit add constraint FK_Association_3 foreign key (id_program)
      references progr_prod (id_program) on delete restrict on update restrict;

alter table produit add constraint FK_Association_6 foreign key (id_util)
      references utilisateur (id_util) on delete restrict on update restrict;

alter table produit add constraint FK_Reference_13 foreign key (id_licence)
      references licence (id_licence) on delete restrict on update restrict;

alter table version_composant add constraint FK_Association_14 foreign key (id_composant)
      references composant (id_composant) on delete restrict on update restrict;

