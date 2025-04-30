# Empathie
## Responsable des apprenants
Dit :
 « Je veux m'assurer que les sanctions sont correctement appliquées en cas d'absences. »
Fait :
 Calcule manuellement les absences et applique des sanctions comme l’avertissement ou la suspension.
Besoin :
Avoir une vue d’ensemble des absences des apprenants et des sanctions appliquées.
S'assurer que les sanctions soient justes et alignées avec les objectifs de formation.
Ressent :
Besoin d’un système fiable pour gérer les absences et les sanctions.
Inquiet de l’impact des sanctions sur le parcours d’apprentissage des apprenants.
Apprenant

## apprenant

Dit :
 « Je veux comprendre comment les sanctions sont décidées et m’assurer qu’elles sont justes.»
Fait :
Reçoit des sanctions, mais ne comprend pas toujours pourquoi.
Essaie d’éviter les absences, mais rencontre parfois des situations indépendantes de sa volonté.
Besoin :
Des règles claires sur l’attribution des sanctions.
Un accès facile à l’historique de ses sanctions.
Ressent :
Se sent confus et stressé face à l’impact des sanctions sur son parcours de formation.
Responsable de formation

## responsable de formation
Dit :
 « Je veux m'assurer que les sanctions sont en cohérence avec les objectifs de formation et qu'elles soutiennent le développement des apprenants. »
Fait :
 Veille à ce que les objectifs pédagogiques soient atteints.
Besoin :
S'assurer que les sanctions n’entravent pas le processus d’apprentissage.
Maintenir l’équilibre entre discipline et accompagnement pédagogique.
Ressent :
Se sent préoccupé par l’impact des sanctions sur la motivation des apprenants et leur réussite dans l’atteinte des objectifs de formation.

# Définition du Problème
Le système actuel de gestion des sanctions (avertissement ou suspension) repose sur un calcul manuel des absences, ce qui le rend long, sujet aux erreurs et difficile à maintenir. L’un des problèmes majeurs réside dans le manque de distinction claire entre les absences justifiées et injustifiées, rendant l’application des sanctions moins rigoureuse et plus confuse.
Cette absence d’automatisation entraîne des incohérences dans le traitement des cas, une confusion chez les apprenants concernant les règles, ainsi qu’un manque de transparence dans le processus disciplinaire. Par conséquent, le système ne parvient pas à soutenir efficacement les objectifs pédagogiques et nuit à la fois à l’expérience des apprenants et à l’efficacité des responsables pédagogiques.

# Idéation
À la suite de la définition du problème, plusieurs pistes de solution ont été envisagées pour répondre efficacement aux besoins identifiés et améliorer l’expérience utilisateur :
Workflow automatisé de gestion des sanctions
Mettre en place un processus automatisé d’application des sanctions, basé sur des règles prédéfinies. Ce système garantit une application cohérente et équitable des sanctions (avertissement ou suspension), réduisant ainsi les erreurs humaines et les interprétations subjectives.
Système de notifications
Intégrer un système de notifications automatiques permettant d’informer les apprenants et les formateurs chaque fois qu'une sanction est appliquée. La notification contiendra les motifs de la sanction, sa nature (avertissement ou suspension), et les éventuelles actions correctives à envisager.
Historique des sanctions et transparence
Offrir aux apprenants la possibilité de consulter leur historique de sanctions, avec des détails clairs sur chaque infraction et les raisons qui ont conduit à la sanction. Cela permet de renforcer la transparence et de responsabiliser les utilisateurs en leur fournissant des repères pour éviter les erreurs futures.

# Diagramme des Cas d'Utilisation Général
@startuml
left to right direction
actor "Responsable des Apprenants" as Admin
actor Apprenant

rectangle Gérer-les-Sanctions {
  usecase "Définir les Règles de Sanction" as UC1
  usecase "Surveiller et Appliquer les Sanctions" as UC2
  usecase "Notifier d'une Sanction" as UC3
  usecase "Consulter l'Historique des Sanctions" as UC4
  usecase "Gestion des Sanctions" as UC5
  usecase "Rechercher des Sanctions par Apprenant" as UC6
  usecase "Filtrer les Sanctions par Penalite" as UC7
  usecase "Consulter les Statistiques" as UC8
}

note right of UC2
"Le système vérifie automatiquement chaque jour si un apprenant
a dépassé la limite autorisée d'absences sans justification 
et applique les sanctions appropriées.
Le rôle 'Responsable des Apprenants' peut déclencher 
manuellement cette vérification à tout moment."
end note

Admin -- UC1

Admin -- UC3
Admin -- UC5
Admin -- UC8

Apprenant -- UC3
Apprenant -- UC4
UC5 <.. UC4 : <<extend>>
UC5 ..> UC2 : <<include>>
UC5 ..> UC6 : <<include>>
UC5 ..> UC7 : <<include>>

# classDiagram

namespace PkgSanction {
  class SanctionAbsence
  class ReglesDeSanction
  class Notification
}

class SanctionAbsence{
  + id: int
  + dateDebut: date
  + statut: string
}

class ReglesDeSanction{
  + id: int
  + titre: string
  + description: string
  + absencesMax: int
  + penalite: string
  + seuilDeNotification: int
  + duree: int
  + note: string
}

class Notification {
   + id: int
   + message: string
}

namespace PkgUtilisateurs {
class Apprenant
class ResponsableDesApprenants
}

namespace PkgAbsence {
  class Absence
  class Seance
  class JustificationAbsence
}
 
namespace PkgEmploiTemps {
  class DureeSeance
}

Absence -- Apprenant
Seance "1" -- "*" Absence
Seance  --> "1" DureeSeance

JustificationAbsence --  "1" justifAbsence

ReglesDeSanction "1" --> "0..*" SanctionAbsence : "s'applique à"
SanctionAbsence "1" --> "1..*" Notification : "déclenche"
SanctionAbsence "0..*" --> "1" Apprenant : "s'applique à"
Apprenant "1" --> "0..*" Notification : "reçoit"
ResponsableDesApprenants "1" --> "0..*" Notification : "reçoit"

