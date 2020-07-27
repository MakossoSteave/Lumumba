<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/index.scss">
    <title>Register</title>
</head>

<body>
    <section class="hero is-dark is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Inscription</h1>
            </div>

        </div>

    </section>
    {{pass}}
    <section class="section">
        <div class="container">
            <form (ngSubmit)=submitForm() #contactForm="ngForm">
                {{contactForm.valid}}
                <div class="field">
                    <label class="label">Nom</label>
                    <input type="text" name="name" class="input" [(ngModel)]="nom" #nomInput="ngModel" required>
                    <div class='help is-error' *ngIf="nomInput.invalid ">
                        veilliez renseigné votre Nom
                    </div>
                </div>
                <div class="field">
                    <label class="label">Prenom</label>
                    <input type="text" name="name" class="input" [(ngModel)]="prenom" #prenomInput="ngModel" required>
                    <div class='help is-error' *ngIf="prenomInput.invalid ">
                        veilliez renseigné votre Prenom
                    </div>
                </div>
                <div class="field">
                    <label class="label">Tel</label>
                    <input type="numerique" name="name" class="input" [(ngModel)]="tel" #telInput="ngModel" required>
                    <div class='help is-error' *ngIf="telInput.invalid ">
                        veilliez renseigné votre telephone
                    </div>
                </div>
                <div class="field">
                    <label class="label">Email</label>
                    <input type="email" name="email" class="input" #emailInput="ngModel" [(ngModel)]="email" required email>
                    <div class='help is-error' *ngIf="emailInput.invalid ">
                        veilliez renseigné votre email
                    </div>
                </div>
                <div class="field">
                    <label class="label">Mots de passe</label>
                    <input type="password" name="pass" class="input" [(ngModel)]="pass" #passInput="ngModel" required>
                    <div class='help is-error' *ngIf="passInput.invalid ">
                        veilliez renseigné votre mots de passe
                    </div>
                </div>
                <div class="control">
                    <div class="select">
                        <select>
      <option>Stagiaire</option>
      <option>Formateur</option>
      <option>Intervenant</option>

    </select>
                    </div>
                    <br><br>
                </div>

                <button type="submit" class="button is-large is-warning navbar-start" [disabled]="contactForm.invalid">
        Je m'inscris !
      </button>

                <button class="button is-large is-primary navbar-end" routerLink='/connection'>Se connecter</button>

            </form>
        </div>
    </section>
    <?php
    include './include/footer.php'
    ?>