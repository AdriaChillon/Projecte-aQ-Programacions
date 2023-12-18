# Projecte de Gestió Escolar

Aquest projecte de gestió escolar té com a objectiu facilitar l'administració d'informació clau en l'àmbit educatiu. Permet la gestió de diversos elements com mòduls, unitats formatives, resultats d'aprenentatge, continguts, criteris, programacions i activitats, tots ells relacionats entre sí a través d'identificadors únics.

## Característiques principals

1. **CRUD Complet:**
   - **Mòduls:** Crear, veure, editar i eliminar mòduls.
   - **Unitats Formatives:** Gestió completa d'unitats formatives.
   - **Resultats d'Aprenentatge:** Crear, veure, editar i eliminar resultats d'aprenentatge.
   - **Continguts:** Fins al moment, s'ha implementat l'entitat de contingut amb operacions CRUD.

2. **Relacions entre entitats:**
   - Cada mòdul pot tenir associades múltiples unitats formatives.
   - Les unitats formatives estan vinculades a resultats d'aprenentatge específics.
   - Els continguts estan relacionats amb els resultats d'aprenentatge.
   - Es segueix la mateixa lògica per als criteris, programacions i activitats.

## Implementació actual

Fins al moment, s'ha completat la implementació de l'entitat de **Contingut**. En els formularis CRUD, s'ha treballat perquè només apareguin els camps rellevants i relacionats amb l'entitat que s'està instanciant. Això significa que, en crear o editar un contingut, només es mostraran els camps pertinents, evitant redundàncies i simplificant l'experiència de l'usuari.

## Pròxims passos

El projecte està en constant desenvolupament, i s'espera completar les operacions CRUD per a totes les entitats esmentades. A continuació, es detallen els pròxims passos:

1. **Criteris:**
   - Implementar operacions CRUD per a l'entitat de criteris.

2. **Programacions:**
   - Desenvolupar les operacions CRUD per a les programacions associades a cada mòdul.

3. **Activitats:**
   - Finalitzar la implementació de CRUD per a les activitats educatives.
