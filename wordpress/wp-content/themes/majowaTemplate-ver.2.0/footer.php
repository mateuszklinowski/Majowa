<footer>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="singInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Napisz do nas!</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">Imie i nazwisko:</span>
                                <input type="text" class="form-control" placeholder="Imie i nazwisko" aria-describedby="basic-addon1">
                            </div>
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">Nr tel:</span>
                                <input type="text" class="form-control" placeholder="Numer telefonu" aria-describedby="basic-addon1">
                            </div>
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">Adres email @</span>
                                <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                            </div>
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">Jakie zajęcie cie interesują? </span>
                                <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
                            </div>
                            <br/>

                            <textarea type="text" class="form-control" placeholder="Masz pytania? Napisz!" aria-describedby="basic-addon1"></textarea>



                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-red">Zapisz się!</button>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>