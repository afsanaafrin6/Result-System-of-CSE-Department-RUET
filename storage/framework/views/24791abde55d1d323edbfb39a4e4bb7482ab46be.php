<?php echo Html::script('resources/assets/invoice/js/bootstrap.js'); ?>

<?php echo Html::script('resources/assets/invoice/js/bootstrap.min.js'); ?>

<?php echo Html::script('resources/assets/invoice/js/jquery.min.js'); ?>

<?php echo Html::script('resources/assets/invoice/js/npm.js'); ?>


<script src="<?php echo e(asset('js/app.js')); ?>"></script>

<?php echo e(Form::open(array('method'=>'POST'))); ?>

        
        <br/>
        <div class="form-inline">
            <div class="form-group">
                <input type="text" class="form-control" name="rows[0][Title]" placeholder="libelé"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="rows[0][Quantity]" placeholder="Quantité"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="rows[0][Price]" placeholder="Prix unitaire "/>
            </div>
            <div class="form-group">
                <input type="button" class="btn btn-default" value="Ajouter" onclick="createNew()" />
            </div>
            <div id="mydiv"></div>
        </div>
        <br/>

        <div class="form-group">
            <input type="submit" value="Ajouter" class="btn btn-info">
            <a href="" class="btn btn-default">Cancel</a>
        </div>
        <?php echo e(Form::close()); ?>


<script>
    var i = 2;

    function createNew() {
        $("#mydiv").append('<div class="form-group">'+'<input type="text" name="rows[' + i +'][Title]" class="form-control" placeholder="libelé"/>'+
                '</div>'+'<div class="form-group">'+'<input type="text" name="rows[' + i +'][Quantity]" class="form-control" placeholder="Quantité"/>'+'</div>'+'<div class="form-group">'+'<input type="text" name="rows[' + i +'][Price]" class="form-control" placeholder="Prix unitaire "/>'+'</div>'+'<div class="form-group">'+
                '<input type="button" name="" class="btn btn-default" value="Ajouter" onclick="createNew()" />'+
                '</div><br/>');
        i++;
    }
</script>