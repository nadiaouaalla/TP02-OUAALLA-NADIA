# TP02-OUAALLA-NADIA _ Gr2
TP 02 PHP - Programmation Web 2 - 2026/2027
## Reponses aux questions

### Ex02 - Variables
- $note et $Note sont differentes car PHP est sensible a la casse (case-sensitive).
- Noms valides: $a, $_a, $maVariable, $a1, $AAA
- Noms invalides: $a! (caractere special !), $1a (commence par chiffre)

### Ex04 - Types
- echo false n'affiche rien (chaine vide).
- var_dump(false) affiche bool(false) pour voir le type et la valeur.

### Ex05 - Conditions
- Test: -1 => Note invalide
- Test: 9 => Non valide
- Test: 10 => Passable
- Test: 12 => Assez bien
- Test: 14 => Bien
- Test: 16 => Tres bien
- Test: 21 => Note invalide

### Ex10 - GET vs POST
- En GET: les donnees apparaissent dans l'URL (?nom=...&prenom=...) visible par tous.
- En POST: les donnees sont cachees dans le corps de la requete, URL reste propre, plus securise pour les formulaires.