    alter table LIGUE
    drop foreign key FK_LIG_IDTRE;

    alter table FACTURE
    drop foreign key FK_FAC_CODCLI;

    alter table FIGURER
    drop foreign key FK_FIG_REFPRE;

    alter table FIGURER
    drop foreign key FK_FIG_NUMFAC;


    alter table LIGUE
        add constraint FK_LIG_IDTRE 
        foreign key (ID_Tresorier) 
        references TRESORIER(ID_Tresorier);

    alter table FACTURE
        add constraint FK_FAC_CODCLI 
        foreign key (CodeClient) 
        references LIGUE(CodeClient);

    alter table FIGURER
	add constraint FK_FIG_REFPRE
	foreign key (RefPresta)
	references PRESTATION (RefPresta);

    alter table FIGURER
	add constraint FK_FIG_NUMFAC
	foreign key (NumFacture)
	references FACTURE(NumFacture);