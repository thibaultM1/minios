<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <h2>Contact</h2>
        <form class="form-horizontal" action="<?php echo $asset('app.php/traitement_formulaire'); ?>" method="post">
            <div class="form-group">
                <label for="nom" class="col-sm-2 control-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" required>
                </div>
            </div>
            <div class="form-group">
                <label for="prenom" class="col-sm-2 control-label">Prénom</label>
                <div class="col-sm-10">
                    <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom" required>
                </div>
            </div>
            <div class="form-group">
                <label for="objet" class="col-sm-2 control-label">Objet</label>
                <div class="col-sm-10">
                    <input type="text" name="objet" class="form-control" id="objet" placeholder="Objet" required>
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="message" id="message" placeholder="Message" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <button type="submit" class="btn btn-primary" value="envoyer">Envoyer</button>
                        </label>
                    </div>
                </div>
            </div>
        </form>
        <?php
        if($_SESSION["formulaire"] != ''){
            echo ' le formulaire a bien été envoyé';
            $_SESSION["formulaire"]='';
        };
        ?>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>
